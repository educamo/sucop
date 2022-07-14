<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_config extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'configId' => array(
                                'type' => 'INT',
                                'constraint' => '6',
                                'unsigned' => TRUE,
                        ),
                        'configName' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '200',
                        ),
                        'configValue' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('configId', TRUE);
                $this->dbforge->create_table('nu_config');
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_config');
        }
}