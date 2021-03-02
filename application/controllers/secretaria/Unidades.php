<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unidades extends CI_Controller{
    public function cadastrar(){
        $this->load->view('secretaria/cadastrar_unidades.php');
    }
}