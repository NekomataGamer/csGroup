<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
    
    protected $table = 'users';
    
    public function __construct() {
        parent::__construct();

        $this->hasOne();
    }

    
    public function hasOne(string $childTableName="dados_bancarios", string $childLinkColumnName="id_users", string $childLinkedColumnName="id"){
        parent::hasOne($childTableName, $childLinkColumnName, $childLinkedColumnName);
    }
    
}