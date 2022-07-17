<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Alter_facturas extends CI_Migration {

        public function up()
        {

            $fields = array(
                        'pagado' => array(
                            'type' => 'int',
                            'constraint' => '1',
                            'null' => TRUE,
                        ),
                );
                $this->dbforge->add_column('nu_facturas', $fields);

        }

        public function down()
        {
                $this->dbforge->drop_table('nu_facturas', true);
        }
}