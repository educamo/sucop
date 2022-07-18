<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_clientes2 extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_clientes', [
                    'clienteId' => '20',
                    'clienteRif' => '23',
                    'clienteNic' => '24',
                    'clienteContador' => '26',
                    'clienteSap' => '25',
                    'clienteName' => 'ruben',
                    'telefono' => '436545',
                    'mail' => 'ruben@gmail.com',
                    'direccion' => 'rubio, piso de plata',
                    'referencia' => '67786',
                    'lat' => 7.69356,
                    'lng' => -72.3675,

                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_clientes', true);
        }
}