<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

		public function __construct()
		{
			parent::__construct();

			## carga de	modelos
			$this->load->model(array('Welcome_model'));

		}

		public function index()
		{
			$this->load->view('welcome_message');
		}

		public function login()
		{

			if (isset($_POST['usuario']) && isset($_POST['clave'])) {
				$login = $this->Welcome_model->loginUser($_POST);
				$Version = $this->Config_model->obtenerVersion();

				if ($login) {
					$arrayUser = array(
						'userId' 			=> $login[0]->userId,
						'userName' 			=> $login[0]->userName,
						'mail'	 			=> $login[0]->mail,
						'administrador' 	=> $login[0]->admin,
						'version'			=> $Version[0]->configName,
						'tipoVersion'		=> $Version[0]->configValue,
					);
					$this->session->set_userdata($arrayUser);
					redirect('administracion');
				}else {
					redirect('LandingPage');
				}

			}

		}

	}
