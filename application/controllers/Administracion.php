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
        // TODO: hacer vista que se va a cargar la tabla con los datos del cliente a demás de hacer migration de la tabla Clientes
        echo $data['filtro'];
        echo $data['numero'];
        return $data;
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
