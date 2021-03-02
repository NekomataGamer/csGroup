<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tutor extends CI_Controller{
    public function cadastrar(){
        $this->load->view('secretaria/cadastrar_tutor.php');
    }
}