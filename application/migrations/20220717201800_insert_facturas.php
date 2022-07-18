<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_facturas extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_facturas', [
                    'facturaN' => 'a12',
                    'fecha' =>  '2022-07-08',
                    'total' => 134.00,
                    'clienteId' => '12',
                    'pagado' => 0,

                ]);
                $this->db->insert('nu_facturas', [
                    'facturaN' => 'b12',
                    'fecha' =>  '2022-07-16',
                    'total' => 2000,
                    'clienteId' => '12',
                    'pagado' => 0,
                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_facturas', true);
        }
}