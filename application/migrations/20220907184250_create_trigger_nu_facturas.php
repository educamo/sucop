<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_create_trigger_nu_facturas extends CI_Migration
{

    public function up()
    {
        $this->db->query('
            CREATE TRIGGER insert_totalDeuda
            AFTER INSERT ON nu_facturas
            FOR EACH ROW
                UPDATE nu_clientes
                SET totalDeuda = ( SELECT SUM( total ) FROM nu_facturas WHERE clienteId = New.clienteId AND pagado = 0 ),
                totalFacturas = ( SELECT COUNT(*) FROM nu_facturas WHERE clienteId = New.clienteId AND pagado = 0)
                WHERE
                    clienteId = New.clienteId;
        ');

        $this->db->query('
            CREATE TRIGGER update_totalDeuda
            AFTER UPDATE ON nu_facturas
            FOR EACH ROW
                UPDATE nu_clientes
                SET totalDeuda = ( SELECT SUM( total ) FROM nu_facturas WHERE clienteId = New.clienteId AND pagado = 0 ),
                totalFacturas = ( SELECT COUNT(*) FROM nu_facturas WHERE clienteId = New.clienteId AND pagado = 0)
                WHERE
                    clienteId = New.clienteId
        ');
    }

    public function down()
    {
        $this->dbforge->drop_table('nu_facturas');
    }
}
