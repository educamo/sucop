<?Php

defined('BASEPATH') or exit('No direct script access allowed');

class Administracion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        ## carga de	modelos
        $this->load->model(array('Administracion_model'));
    }


    public function index()
    {

        if ($this->session->userdata('userId')) {
            $datos['usuarios'] = $this->Administracion_model->dasboard();

            $this->plantilla();

            $this->load->view('administracion/main', $datos);

            $this->footer();
        } else {
            redirect('LandingPage');
        }
    }

    private function plantilla()
    {
        $datos['usuario'] = $this->session->userName;
        $this->load->view('administracion/head');
        $this->load->view('administracion/sidebar');
        $this->load->view('administracion/topbar', $datos);
    }

    private function footer()
    {
        $this->load->view('administracion/footer');
        $this->load->view('administracion/end');
    }

    public function actualizacion()
    {
        $this->plantilla();

        $this->load->view('verClientes');

        $this->footer();
    }

    public function consultarCliente()
    {
        $data['filtro'] = $this->input->post('filtro');
        $data['numero'] = $this->input->post('numero');

        $data = $this->Administracion_model->consultarCliente($data);

        //var_dump($data); die();
        if ($data !== NULL) {
            $id = $data->clienteId;
            $facturas = $this->Administracion_model->consultarFacturas($id);
            $data->facturas = $facturas;
        }


        //var_dump($facturas); die();


        if ($data == NULL) {
            $view = 0;
        } else {
            $view = $this->load->view('updateClientes', $data);
            $this->load->view('administracion/end');
        }

        return $view;
    }

    public function updateCliente()
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
            'clienteId2' => $this->input->post('clienteId2'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
        );

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
            'clienteId2' => $this->input->post('clienteId2'),
        );

        if ($datosCliente['clienteId'] !== $datosCliente['clienteId2']) {
            $this->Administracion_model->updateFacturas($datosCliente);
        }

        $resultadoUpdatecliente = $this->Administracion_model->updateCliente($datosCliente);

        $resultadoUpdatemedidor = $this->Administracion_model->updateMedidor($datosMedidor);
        return true;
    }

    public function nuevoCliente()
    {
        $this->plantilla();

        $this->load->view('nuevoClientes');

        $this->footer();
    }

    public function guardarCliente()
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

        $resultadoGuardarcliente = $this->Administracion_model->guardarCliente($datosCliente);

        $resultadoGuardarmedidor = $this->Administracion_model->guardarMedidor($datosMedidor);
        return true;
    }

    public function nuevoUsuario()
    {
        $this->plantilla();

        $this->load->view('nuevoUsuario');

        $this->footer();
    }

    public function guardarUsuario()
    {
        $this->Administracion_model->guardarUsuario($_POST);
        redirect('Administracion/nuevoUsuario');
    }

    public function listUsuario()
    {
        $usuarios['users'] = $this->Administracion_model->verUsuarios();
        $this->plantilla();

        $this->load->view('listUsuario', $usuarios);

        $this->footer();
    }

    public function actualizarUsuario($id = 0)
    {
        $this->plantilla();
        $datos['usuario'] = $this->Administracion_model->mostrarUsuario($id);
        $this->load->view('actualizarUsuario', $datos);
        $this->footer();
    }
    public function updateUsuario()
    {
        $resultado = $this->Administracion_model->actualizarUsuario($_POST);
        if ($resultado == true) {
            $this->session->set_flashdata('status', 'El Usuario se Actualizo con exito');
        } else {
            $this->session->set_flashdata('status', 'Ocurrio un Error al Actualizar el Usuario');
        }
        redirect("Administracion/listUsuario");
    }

    public function logout()
    {

        $this->session->sess_destroy();

        redirect('LandingPage');
    }
}
