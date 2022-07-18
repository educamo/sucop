<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_tarifas extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_tarifas', [
                    'tarifaId' => '0106G20',
                    'descripcion' =>  'nombre de la tarifa y que comprende',
                    'valor' => 20.00,

                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_tarifas', true);
        }
}