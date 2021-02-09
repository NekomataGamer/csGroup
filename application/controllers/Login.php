<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public $needAuth = false;
    public $ifAuthRedirect = true;
    public $authRedirect = "index/inicio";
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model('users_model', 'users');
    }


	public function index()
	{
		$this->load->view('login.php');
    }

    public function cadastro()
	{
		$this->load->view('cadastro.php');
    }
    
    public function entrar(){
        $data = [
            'email' => $this->input->post('email', true),
            'senha' => $this->input->post('senha', true)
        ];

        $usuario = $this->users->where('email', $data['email'])->fetch();

        if ($usuario){
            if (password_verify($data['senha'], $usuario[0]['senha'])) {
				$this->session->set_userdata([
                    'auth' => $usuario[0]['id']
                ]);

                showSuccess("Você está logado!", "index/inicio");
			}
        }
    }

    public function inserirCadastro(){
        $options_senha = array("cost" => 4);
        $data = [
            'nome' => $this->input->post('nome', true),
            'email' => $this->input->post('email', true),
            'senha' => password_hash($this->input->post('senha', true), PASSWORD_BCRYPT, $options_senha)
        ];

        $this->users->insert($data);

        showSuccess("Conta cadastrada com sucesso, você já pode fazer login!", "login");
    }
}
