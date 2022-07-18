<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_clientes extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_clientes', [
                    'clienteId' => '12',
                    'clienteRif' => '13',
                    'clienteNic' => '14',
                    'clienteContador' => '15',
                    'clienteSap' => '16',
                    'clienteName' => 'licoreria de prueba',
                    'telefono' => '2412544748',
                    'mail' => 'admin@gmail.com',
                    'direccion' => 'gfhfghfg',
                    'referencia' => '2540',
                    'lat' => 10.1959,
                    'lng' => -68.0223,

                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_clientes', true);
        }
}