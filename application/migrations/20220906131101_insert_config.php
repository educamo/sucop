<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_config extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_config', [
                    'configId' => '000001',
                    'configName' => 'Demo',
                    'configValue' => '1',
                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_config', true);
        }
}