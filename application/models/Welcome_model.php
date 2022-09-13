<?Php

    class Welcome_model extends CI_model {


        public function loginUser($data) {

            $this->db->select('userId, userName, mail, admin');
            $this->db->from('nu_users');
            $this->db->where('userName', $data['usuario']);
            $this->db->where('password', $data['clave']);
            $this->db->where('activo', 1);

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