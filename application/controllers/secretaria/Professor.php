<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Professor extends CI_Controller{
    public function cadastrar(){
        $this->load->view('secretaria/cadastrar_professor.php');
    }
}