<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_medidores extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_medidores', [
                    'serial' => '15448431',
                    'instalacion' => '5068',
                    'aol' => '6060',
                    'unidadL' => 'TAG43018',
                    'dac' => '15',
                    'fabricante' => 'JANZ',
                    'ruta' => '3',
                    'itinerario' => '6',
                    'tarifaId' => '0106G20',
                    'clienteId' => '12',

                ]);
                $this->db->insert('nu_medidores', [
                    'serial' => '786756',
                    'instalacion' => '976554',
                    'aol' => '2323',
                    'unidadL' => '34324',
                    'dac' => '16',
                    'fabricante' => 'prueba',
                    'ruta' => '2',
                    'itinerario' => '5',
                    'tarifaId' => '0106G20',
                    'clienteId' => '20',
                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_medidores', true);
        }
}