<?php

class Tedio extends CI_Controller{
    public function principal(){
        $this->load->view('secretaria/tedio.php');
    }

    public function consultas(){
        // Gerador de Cores

        $array = array('0','1','2','3','4','5','6','7','8','8','9','a','b','c','d','e','f');
        $hex = '#'.$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)].$array[rand(0,15)];

        echo $hex;
    }
}