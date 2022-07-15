<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_facturas extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'facturaN' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'unsigned' => TRUE,
                        ),
                        'fecha' => array(
                                'type' => 'DATE',
                                'null' => FALSE,
                        ),
                        'total' => array(
                            'type' => 'DECIMAL',
                            'constraint' => '20,2',
                            'unsigned' => TRUE,
                            'null' => TRUE,
                        ),
                        'clienteId' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '16',
                                'null' => FALSE,
                        ),
                ));
                $this->dbforge->add_key('facturaN', TRUE);
                $this->dbforge->create_table('nu_facturas');
        }

        public function down()
        {
                $this->dbforge->drop_table('nu_facturas', true);
        }
}