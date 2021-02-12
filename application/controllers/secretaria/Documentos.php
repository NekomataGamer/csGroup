<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos extends CI_Controller {
    public $needAuth = false;
	public $authRedirect = 'login';
	public $authModel = "users_model";

    public function adicionar(){
        $this->load->view('secretaria/adicionar_documento.php');
    }
    
    public function adicionar_aluno(){
        $this->load->view('secretaria/adicionar_documento_aluno.php');
    }

    public function editar($id){
        echo 'baralho';
    }
}
