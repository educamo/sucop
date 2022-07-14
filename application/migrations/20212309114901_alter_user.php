<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_user extends CI_Migration {

        public function up()
        {

            $fields = array(
                        'activo' => array(
                            'type' => 'int',
                            'constraint' => '1',
                            'null' => TRUE,
                        ),
                        'admin' => array(
                            'type' => 'int',
                            'constraint' => '1',
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