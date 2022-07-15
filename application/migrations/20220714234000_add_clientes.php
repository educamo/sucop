<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_clientes extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'clienteId' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'unsigned' => TRUE,
                        ),
                        'clienteRif' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'unsigned' => TRUE,
                        ),
                        'clienteNic' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'unsigned' => TRUE,
                        ),
                        'clienteContador' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'unsigned' => TRUE,
                        ),
                        'clienteSap' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'unsigned' => TRUE,
                        ),
                        'clienteName' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'telefono' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE,
                        ),
                        'mail' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                            'null' => TRUE,
                        ),
                        'direccion' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                            'null' => TRUE,
                        ),
                        'referencia' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('clienteId', TRUE);
                $this->dbforge->create_table('nu_clientes');
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_clientes', true);
        }
}