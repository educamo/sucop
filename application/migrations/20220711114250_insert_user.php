<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_user extends CI_Migration {

        public function up()
        {
                $this->db->insert('nu_users', [
                    'userId' => '16153887',
                    'userName' => 'educamo',
                    'password' => '1234',
                    'mail' => 'correo@gmail.com',
                    'direccion' => 'los mangos',
                    'activo' => 1,
                    'admin' => 1,
                ]);
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_users', true);
        }
}