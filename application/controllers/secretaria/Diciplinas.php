<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diciplinas extends CI_Controller {
    public $needAuth = false;
	public $authRedirect = 'login';
	public $authModel = "users_model";

    public function cadastrar(){
        $this->load->view('secretaria/cadastrar_diciplina.php');
    }
    
    public function listar(){
        $this->load->view('secretaria/listar_curso.php');
    }
}
