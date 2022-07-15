<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_medidores extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'serial' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'unsigned' => TRUE,
                        ),
                        'instalacion' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'unsigned' => TRUE,
                        ),
                        'aol' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'unsigned' => TRUE,
                        ),
                        'unidadL' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'unsigned' => TRUE,
                        ),
                        'dac' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'unsigned' => TRUE,
                        ),
                        'fabricante' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'ruta' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE,
                        ),
                        'itinerario' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '20',
                            'null' => TRUE,
                        ),
                        'tarifaId' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => TRUE,
                        ),
                        'clienteId' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'null' => FALSE,
                        ),
                ));
                $this->dbforge->add_key('serial', TRUE);
                $this->dbforge->create_table('nu_medidores');
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_medidores', true);
        }
}