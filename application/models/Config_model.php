<?Php

    class Config_model extends CI_model {


        public function obtenerVersion($data = 0) {

            $this->db->select('*');
            $this->db->from('nu_config');
            $this->db->where('configName', 'Demo');

            $query=$this->db->get();

            if ($query->num_rows()>0) {
                return $query->result();
            }else{
                return NULL;
            }

        }

        public function __destruct(){
            $this->db->close();
        }

    }
?>