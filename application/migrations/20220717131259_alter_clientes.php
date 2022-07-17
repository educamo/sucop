<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_clientes extends CI_Migration {

        public function up()
        {

            $fields = array(
                        'lat' => array(
                            'type' => 'float',
                        ),
                        'lng' => array(
                            'type' => 'float',
                        ),
                );
                $this->dbforge->add_column('nu_clientes', $fields);

        }

        public function down()
        {
                $this->dbforge->drop_table('nu_clientes', true);
        }
}