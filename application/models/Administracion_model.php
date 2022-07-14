<?Php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Administracion_model extends CI_Model {

        public function dasboard()
        {
            $this->db->select('*');
            $this->db->from('nu_users');
            return $this->db->count_all_results();
        }

        public function guardarUsuario($datos=0)
        {
            $datos = array (
                'idUser' => $datos['idUser'],
                'nombreUser' => $datos['nombreUser'],
                'apellidoUser' => $datos['apellidoUser'],
                'email' => $datos['email'],
                'clave' => $datos['clave'],
                'administrador' => $datos['administrador'],
            );

            $this->db->insert('usuarios', $datos);
        }

        public function verUsuarios()
        {
            $this->db->select('userId, userName, mail, admin');
            $this->db->from('nu_users');
            $query = $this->db->get();
            return $query->result();

        }

        public function mostrarUsuario($id=0)
        {
            $this->db->select('userId, userName, mail, admin');
            $this->db->from('nu_users');
            $this->db->where('userId', $id);
            $query= $this->db->get();
            return $query->row();
        }

        public function actualizarUsuario($datos)
        {
            $data = array (
                'idUser'        => $datos['idUser'],
                'nombreUser'    => $datos['nombreUser'],
                'apellidoUser'  => $datos['apellidoUser'],
                'email'         => $datos['email'],
                'administrador' => $datos['administrador'],
            );

            $this->db->where('idUser', $datos['cedula']);

            return $this->db->update('usuarios', $data);
        }

        public function __destruct(){
            $this->db->close();
        }

    }


?>