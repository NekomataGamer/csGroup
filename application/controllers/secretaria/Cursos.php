<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    public $needAuth = false;
	public $authRedirect = 'login';
	public $authModel = "users_model";

    public function cadastrar(){
        $this->load->view('secretaria/cadastrar_curso.php');
    }
    
    public function listar(){
        $this->load->view('secretaria/listar_curso.php');
    }

    public function editar($id){
        echo 'baralho';
    }
}
