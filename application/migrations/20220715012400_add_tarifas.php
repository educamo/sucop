<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tarifas extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'tarifaId' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '50',
                            'unsigned' => TRUE,
                        ),
                        'descripcion' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                        'valor' => array(
                                'type' => 'DECIMAL',
                                'constraint' => '20,2',
                                'unsigned' => TRUE,
                                'null' => TRUE,
                            ),
                ));
                $this->dbforge->add_key('tarifaId', TRUE);
                $this->dbforge->create_table('nu_tarifas');
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_tarifas', true);
        }
}