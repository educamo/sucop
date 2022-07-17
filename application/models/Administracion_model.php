<?Php

defined('BASEPATH') or exit('No direct script access allowed');

class Administracion_model extends CI_Model
{

    public function dasboard()
    {
        $this->db->select('*');
        $this->db->from('nu_users');
        return $this->db->count_all_results();
    }

    public function guardarUsuario($datos = 0)
    {
        $datos = array(
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

    public function mostrarUsuario($id = 0)
    {
        $this->db->select('userId, userName, mail, admin');
        $this->db->from('nu_users');
        $this->db->where('userId', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function actualizarUsuario($datos)
    {
        $data = array(
            'idUser'        => $datos['idUser'],
            'nombreUser'    => $datos['nombreUser'],
            'apellidoUser'  => $datos['apellidoUser'],
            'email'         => $datos['email'],
            'administrador' => $datos['administrador'],
        );

        $this->db->where('idUser', $datos['cedula']);

        return $this->db->update('usuarios', $data);
    }

    public function consultarCliente($datos)
    {
        $campo = $datos['filtro'];
        $valor = $datos['numero'];
        $this->db->select('c.clienteId, c.clienteRif, c.clienteNic, c.clienteContador, c.clienteSap, c.clienteName, c.telefono, c.mail, c.direccion, c.referencia, c.lat, c.lng, m.serial, m.instalacion, m.aol, m.unidadL, m.dac, m.fabricante, m.ruta, m.itinerario, m.tarifaId, f.total');
        $this->db->from('nu_clientes c');
        $this->db->join('nu_medidores m', 'm.clienteId = c.clienteId');
        $this->db->join('nu_facturas f', 'f.clienteId = c.clienteId', 'left');
        $this->db->select_sum('f.total', 'deuda');
        $this->db->where('c.' . $campo, $valor);
        $this->db->where('f.pagado', 0);
        $query = $this->db->get();
        return $query->row();
    }

    public function consultarFacturas($id)
    {
        $this->db->select('*');
        $this->db->from('nu_facturas');
        $this->db->where('clienteId', $id);
        $this->db->where('pagado', 0);
        $facturas = $this->db->get();
        return $facturas->result();
    }

    public function updateCliente($datos = null)
    {
        $datosCliente = array(
            'clienteId' => $this->input->post('clienteId'),
            'clienteRif'=> $this->input->post('clienteRif'),
            'clienteNic'=> $this->input->post('clienteNic'),
            'clienteContador' => $this->input->post('clienteContador'),
            'clienteSap' => $this->input->post('clienteSap'),
            'clienteName' => $this->input->post('clienteName'),
            'telefono' => $this->input->post('telefono'),
            'mail' => $this->input->post('mail'),
            'direccion' => $this->input->post('direccion'),
            'referencia' => $this->input->post('referencia'),
        );
        $this->db->where('clienteId', $datos['clienteId2']);

        return $this->db->update('nu_clientes', $datosCliente);
    }

    public function updateMedidor($datos = null)
    {
        $datosMedidor = array(
            'serial' => $this->input->post('serial'),
            'instalacion' => $this->input->post('instalacion'),
            'aol' => $this->input->post('aol'),
            'unidadL' => $this->input->post('unidadL'),
            'dac' => $this->input->post('dac'),
            'fabricante' => $this->input->post('fabricante'),
            'ruta' => $this->input->post('ruta'),
            'itinerario' => $this->input->post('itinerario'),
            'tarifaId' => $this->input->post('tarifa'),
            'clienteId' => $this->input->post('clienteId'),
        );
        $this->db->where('clienteId', $datos['clienteId2']);

        return $this->db->update('nu_medidores', $datosMedidor);
    }

    public function updateFacturas($datos = null)
    {
        $this->db->where('clienteId', $datos['clienteId2']);
        $this->db->update('nu_facturas', array('clienteId' => $datos['clienteId']));
        return true;
    }

    public function __destruct()
    {
        $this->db->close();
    }
}
