<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_clientes_campos extends CI_Migration {

        public function up()
        {

            $fields = array(
                        'totalFacturas' => array(
                            'type' => 'int',
                            'constraint' => '1',
                            'null' => TRUE,
                            'default' => 0,
                        ),
                        'totalDeuda' => array(
                            'type' => 'DECIMAL',
                            'constraint' => '20,2',
                            'unsigned' => TRUE,
                            'null' => TRUE,
                            'default' => 0,
                        ),
                );
                $this->dbforge->add_column('nu_clientes', $fields);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_clientes', true);
        }
}