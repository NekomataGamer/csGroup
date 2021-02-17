<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriculas extends CI_Controller {
    public $needAuth = false;
	public $authRedirect = 'login';
	public $authModel = "users_model";

    public function matricular(){
        $this->load->view('secretaria/matricular_aluno.php');
    }
    
    public function listar(){
        $this->load->view('secretaria/listar_alunos.php');
    }

    public function editar($id){
        echo 'baralho';
    }
}