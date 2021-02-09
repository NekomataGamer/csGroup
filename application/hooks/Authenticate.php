<?php
class Authenticate
{
    protected $CI;
    protected $authRedirect = 'login';
    protected $authModel = "users_model";
    private static $user = null;


    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function check_user_login()
    {
        $Auth = $this->CI->needAuth;
        $ifAuthRedirect = property_exists($this->CI, 'ifAuthRedirect') ? $this->CI->ifAuthRedirect : false;
        $sess_auth = $this->CI->session->userdata('auth');

        if ($Auth && !$sess_auth) {
            if (property_exists($this->CI, 'authRedirect')){
                $this->authRedirect = $this->CI->authRedirect;
            }
            throwError("Você precisa estar logado para acessar essa pagina!", $this->authRedirect);
        } else if ($ifAuthRedirect && $sess_auth){
            if (property_exists($this->CI, 'authRedirect')){
                redirect($this->CI->authRedirect);
            }
            redirect('index');
        }

        if ($sess_auth){
            if (property_exists($this->CI, 'authModel') && $this->CI->authModel !== ""){
                $this->authModel = $this->CI->authModel;
            }

            $this->CI->load->model($this->authModel, 'auth');

            self::$user = $this->CI->auth->get($this->CI->session->userdata('auth'));
        }
    }

    public static function is_guest(){
        return !self::$user ? true : false;
    }

    public static function getUser(){
        return self::$user;
    }

    public static function userValue($key){
        return self::$user[$key];
    }
}
