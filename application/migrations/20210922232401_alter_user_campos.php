<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_user_campos extends CI_Migration {

        public function up()
        {

            $fields = array(                        
                        'direccion' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '255',
                            'null' => TRUE,
                        ),
                );
                $this->dbforge->add_column('nu_users', $fields);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_users', true);
        }
}