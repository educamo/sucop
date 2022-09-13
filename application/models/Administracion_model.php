<?Php

defined('BASEPATH') or exit('No direct script access allowed');

class Administracion_model extends CI_Model
{

    public function dasboard()
    {

        $this->db->select('*');
        $this->db->from('nu_Clientes');
        $cantClientes = $this->db->count_all_results();

        $admin = $this->session->administrador;
        if ($admin == 2) {
            $this->db->select('*');
            $this->db->from('nu_users');
            $cantUsers = $this->db->count_all_results();

        $this->db->select_sum('total');
        $this->db->from('nu_facturas');
        $this->db->where('pagado', 0);
        $query = $this->db->get();
        $deudaTotal = $query->result_array();
      }else{
        $cantUsers =0;
        $deudaTotal[0] =0;
      };

        $datos = array(
            'usuarios' => $cantUsers,
            'clientes' => $cantClientes,
            'deuda' => $deudaTotal[0],
        );

        return $datos;

    }

    public function guardarUsuario($datos = 0)
    {
        $datos = array(
            'userId' => $datos['userId'],
            'userName' => $datos['userName'],
            'password' => $datos['password'],
            'mail' => $datos['mail'],
            'direccion' => $datos['direccion'],
            'activo' => 1,
            'admin' => $datos['admin'],
        );

        $this->db->insert('nu_users', $datos);
    }

    public function verUsuarios()
    {
        $this->db->select('userId, userName, mail, admin, activo');
        $this->db->from('nu_users');
        $query = $this->db->get();
        return $query->result();
    }

    public function mostrarUsuario($id = 0)
    {
        $this->db->select('*');
        $this->db->from('nu_users');
        $this->db->where('userId', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function actualizarUsuario($datos)
    {
        $data = array(
            'userId'        => $datos['userId'],
            'userName'    => $datos['userName'],
            'mail'         => $datos['mail'],
            'direccion' => $datos['direccion'],
            'activo' => $datos['activo'],
            'admin' => $datos['admin'],
        );

        $this->db->where('userId', $datos['cedula']);

        return $this->db->update('nu_users', $data);
    }

    public function borrarUsuario($id)
    {
        $this->db->where('userId', $id);
        $this->db->delete('nu_users');
        return true;
    }

    public function consultarCliente($datos)
    {
        $campo = $datos['filtro'];
        $valor = $datos['numero'];
        $this->db->select('c.clienteId, c.clienteRif, c.clienteNic, c.clienteContador, c.clienteSap, c.clienteName, c.telefono, c.mail, c.direccion, c.referencia, c.lat, c.lng, c.totalFacturas, c.totalDeuda, m.serial, m.instalacion, m.aol, m.unidadL, m.dac, m.fabricante, m.ruta, m.itinerario, m.tarifaId');
        $this->db->from('nu_clientes c');
        $this->db->join('nu_medidores m', 'm.clienteId = c.clienteId');
        $this->db->where('c.' . $campo, $valor);
        $query = $this->db->get();
        return $query->row();
    }
    public function listarClientes()
    {
        $this->db->select('c.clienteId, c.clienteRif, c.clienteNic, c.clienteContador, c.clienteSap, c.clienteName');
        $this->db->from('nu_clientes c');
        $query = $this->db->get();
        return $query->result();
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
            'clienteRif' => $this->input->post('clienteRif'),
            'clienteNic' => $this->input->post('clienteNic'),
            'clienteContador' => $this->input->post('clienteContador'),
            'clienteSap' => $this->input->post('clienteSap'),
            'clienteName' => $this->input->post('clienteName'),
            'telefono' => $this->input->post('telefono'),
            'mail' => $this->input->post('mail'),
            'direccion' => $this->input->post('direccion'),
            'referencia' => $this->input->post('referencia'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
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
    public function guardarCliente($datos = null)
    {
        return $this->db->insert('nu_clientes', $datos);
    }

    public function guardarMedidor($datos = null)
    {
        return $this->db->insert('nu_medidores', $datos);
    }

    public function __destruct()
    {
        $this->db->close();
    }
}
