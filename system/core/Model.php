<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {
	protected $table = "";
	protected $primary = 'id';

	//Atributos da busca SQL
	private $atributos = "*";

	//Fetcher da query SQL
	private $sqlFetch = '';

	protected $children = [];

	protected $parent = [];

	/**
	 * Class constructor
	 *
	 * @link	https://github.com/bcit-ci/CodeIgniter/issues/5332
	 * @return	void
	 */
	public function __construct() {}

	/**
	 *
	 * PARÂMETROS PRIVADOS ===================================================================================================================
	 *
	 */

	//Seta o atributo sqlFetch
	private function setSql(string $sql){
		$this->sqlFetch = $sql;
	}
	
	//Retorna o atributo sqlFetch
	private function getSql(){
		return $this->sqlFetch;
	}

	//Retorna o a primaryKey
	private function getPrimary(){
		return $this->primary;
	}

	//Seta os atributos da busca sql
	private function setAttributes(string $attr){
		$this->atributos = $attr;
	}
	
	//Retorna os atributos da busca sql
	private function getAttributes(){
		return $this->atributos;
	}

	//retorna a tabela do model
	private function getTable(){
		return $this->table;
	}

	private function setChildren($child){
		$this->children[] = $child;
	}

	private function getChildren(){
		return $this->children;
	}

	private function setParent($parent){
		$this->parent[] = $parent;
	}

	private function getParent(){
		return $this->parent;
	}

	/**
	 *
	 * PARÂMETROS PÚBLICOS ===================================================================================================================
	 *
	 */

	//Altera a tabela do model
	public function setTable(string $table){
		$this->table = $table;
		return $this;
	}

	//Altera a primaryKey
	public function setPrimary(string $primary){
		$this->primary = $primary;
		return $this;
	}

	//Seta atributos
	public function attributes(array $atributos = []){
		$this->setAttributes(implode(',', $atributos));
		return $this;
	}

	/**
	 * __get magic
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string	$key
	 */
	public function __get($key)
	{
		// Debugging note:
		//	If you're here because you're getting an error message
		//	saying 'Undefined Property: system/core/Model.php', it's
		//	most likely a typo in your model code.
		return get_instance()->$key;
	}

	/**
	 *
	 * Adciona 1 dependente ao model
	 *
	 * @param	string	$childTableName nome do dependente
	 * @param 	string  $childLinkColumnName nome da coluna do parente que inclui o dependente
	 * @param 	string	$childLinkedColumnName nome da coluna do dependente que o pai referencia, padrão = "id"
	 * exemplo key = id, value = 1, op: =
	 * join on id = 1;
	 */
	public function hasOne(string $childTableName='', string $childLinkColumnName='', string $childLinkedColumnName="id"){
		$this->setChildren([
			'childTableName' => $childTableName,
			'childLinkColumnName' => $childLinkColumnName,
			'childLinkedColumnName' => $childLinkedColumnName,
			'total' => 1
		]);
	}

	/**
	 *
	 * Adciona n dependente ao model
	 *
	 * @param	string	$childTableName nome do dependente
	 * @param 	string  $childLinkColumnName nome da coluna do parente que inclui o dependente
	 * @param 	string	$childLinkedColumnName nome da coluna do dependente que o pai referencia, padrão = "id"
	 * exemplo key = id, value = 1, op: =
	 * join on id = 1;
	 */
	public function hasMany(string $childTableName='', string $childLinkColumnName='', string $childLinkedColumnName="id"){
		$this->setChildren([
			'childTableName' => $childTableName,
			'childLinkColumnName' => $childLinkColumnName,
			'childLinkedColumnName' => $childLinkedColumnName,
			'total' => 2
		]);
	}


	/**
	 *
	 * Adciona 1 parente ao model
	 *
	 * @param	string	$parentTableName nome do parente
	 * @param 	string  $parentLinkColumnName nome da coluna do dependente que inclui o parente
	 * @param 	string	$parentLinkedColumnName nome da coluna do parente que o dependente referencia, padrão = "id"
	 */
	public function belongsTo(string $parentTableName, string $parentLinkColumnName, string $parentLinkedColumnName="id"){
		$this->setParent([
			'parentTableName' => $parentTableName,
			'parentLinkColumnName' => $parentLinkColumnName,
			'parentLinkedColumnName' => $parentLinkedColumnName,
			'total' => 1
		]);
	}

	/**
	 *
	 * Adciona n parentes ao model
	 *
	 * @param	string	$parentTableName nome do parente
	 * @param 	string  $parentLinkColumnName nome da coluna do dependente que inclui o parente
	 * @param 	string	$parentLinkedColumnName nome da coluna do parente que o dependente referencia, padrão = "id"
	 */
	public function belongsToMany(string $parentTableName, string $parentLinkColumnName, string $parentLinkedColumnName="id"){
		$this->setParent([
			'parentTableName' => $parentTableName,
			'parentLinkColumnName' => $parentLinkColumnName,
			'parentLinkedColumnName' => $parentLinkedColumnName,
			'total' => 2
		]);
	}


	private function fetchChildren(&$c, $type = 'array'){
		switch($type){
			case 'array':
				$children = $this->db->
				query("SELECT * FROM ".$c['childTableName']." WHERE ".$c['childLinkedColumnName']." = ".$c['childLinkColumnName'])
				->result_array();
			break;
			default:
				$children = $this->db->query("SELECT * FROM ".$c['childTableName']." WHERE ".$c['childLinkedColumnName']." = ".$c['childLinkColumnName']);
			break;
		}
		

		if ($c['total'] == 1){
			return ($children) ? $children[0] : [];
		}
		return $children;
	}

	private function fetchParent($p, $type = 'array'){
		switch($type){
			case 'array':
				$parents = $this->db
				->query("SELECT * FROM ".$p['parentTableName']." WHERE ".$p['parentLinkedColumnName']." = ".$p['parentLinkColumnName'])
				->result_array();
			break;
			default:
				$parents = $this->db->query("SELECT * FROM ".$p['parentTableName']." WHERE ".$p['parentLinkedColumnName']." = ".$p['parentLinkColumnName']);
			break;
		}

		if ($p['total'] == 1){
			return ($parents) ? $parents[0] : [];
		}
		return $parents;
	}
	

	/**
	 *
	 * Retorna o valor baseado no atributo privado $sqlFetch
	 *
	 * @param 	string 	$type
	 */
	public function fetch(string $type='array'){
		$query = $this->db->query($this->getSql());

		$this->setSql('');
		
		$children = $this->getChildren();
		$parent = $this->getParent();

		if (empty($children) && empty($parent)){
			if ($type == "array") return $query->result_array();

			return $query->result();
		} else {
			$retorno = ($type == "array") ? $query->result_array() : $query->result();

			if (!empty($children)){
				foreach($children as $c){
					$row = $c['childTableName'];

					foreach($retorno as &$r){
						if (!isset($r[$row])){
							$r[$row] = [];
							$r[$row] = $this->fetchChildren($c, $type);
						} else {
							$r[$row."_"] = [];
							$r[$row."_"] = $this->fetchChildren($c, $type);
						}
					}
				}
			}

			if (!empty($parent)){
				foreach($parent as $p){
					$row = $p['parentTableName'];

					foreach($retorno as &$r){
						if (!isset($r[$row])){
							$r[$row] = [];
							$r[$row] = $this->fetchParent($p, $type);
						} else {
							$r[$row."_"] = [];
							$r[$row."_"] = $this->fetchParent($p, $type);
						}
					}
				}
			}

			return $retorno;
		}
	}

	/**
	 *
	 * Recebe 1 único valor do banco de dados e o retorna, baseado na primary_key enviada
	 *
	 * @param	string	$primary
	 * @param 	string 	$type
	 */
	public function get(string $primary, string $type='array'){
		$this->setSql("SELECT ".$this->getAttributes()." FROM ".$this->getTable()." WHERE ".$this->getPrimary()." = ".$primary);
		$r = $this->fetch($type);
		if ($r) return $r[0];
		return false;
	}

	/**
	 *
	 * Recebe todos os valores da table atual.
	 *
	 * @param	string	$primary
	 * @param 	string 	$type
	 */
	public function all(string $type='array'){
		$this->setSql("SELECT ".$this->getAttributes()." FROM ".$this->getTable()." ");
		$r = $this->fetch($type);
		if ($r) return $r[0];
		return false;
	}

	/**
	 *
	 * Adciona AND where à query builder
	 *
	 * @param	string	$key
	 * @param 	string  $val
	 * @param 	string	$op [=, !=, >, <...] Operador do where
	 */
	public function where(string $key, string $val, string $op = '='){
		$sql = $this->getSql();
		$sql .= $sql == "" ? "SELECT ".$this->getAttributes()." FROM ".$this->getTable()." WHERE ( $key $op '{$val}' ) " : "AND ( $key $op '$val' ) ";
		$this->setSql($sql);
		return $this;
	}

	/**
	 *
	 * Adciona OR where à query builder
	 *
	 * @param	string	$key
	 * @param 	string  $val
	 * @param 	string	$op [=, !=, >, <...] Operador do where
	 */
	public function orWhere(string $key, string $val, string $op = '='){
		$sql = $this->getSql();
		$sql .= $sql == "" ? "SELECT ".$this->getAttributes()." FROM ".$this->getTable()." WHERE ( $key $op '{$val}' ) " : "OR ( $key $op '$val' ) ";
		$this->setSql($sql);
		return $this;
	}

	/**
	 *
	 * Adciona busca à query builder
	 *
	 * @param	string	$key
	 * @param 	string  $val
	 */
	public function search(string $key, string $val){
		$sql = $this->getSql();
		$sql .= $sql == "" ? "SELECT ".$this->getAttributes()." FROM ".$this->getTable()." WHERE $key LIKE '%{$val}%' " : "AND $key LIKE '$val' ";
		$this->setSql($sql);
		return $this;
	}

	/**
	 *
	 * Busca um where enviado pelo user
	 *
	 * @param	string	$where
	 */
	public function rawWhere(string $where){
		$sql =  "SELECT ".$this->getAttributes()." FROM ".$this->getTable()." WHERE $where ";
		$this->setSql($sql);
		return $this;
	}

	/**
	 *
	 * Busca inteira enviada pelo usuario
	 *
	 * @param	string	$sql
	 */
	public function rawString(string $sql){
		$this->setSql($sql);
		return $this;
	}


	/**
	 *
	 * Insere no banco de dados
	 *
	 * @param	array	$data
	 */
	public function insert(array $data, $returnId = false){
		if (!$returnId){
			return $this->db->insert($this->getTable(), $data);
		}
		$insere = $this->db->insert($this->getTable(), $data);
		if ($insere){
			return $this->db->insert_id();
		}

		return false;
	}


	/**
	 *
	 * Atualiza no banco de dados
	 *
	 * @param	array	$data
	 */
	public function update(array $data, $primary){
		return $this->db->update($this->getTable(), $data, array($this->getPrimary() => $primary));
	}

	/**
	 *
	 * Remove do banco de dados
	 *
	 * @param	array	$data
	 */
	public function delete($primary){
		return $this->db->delete($this->getTable(), array($this->getPrimary() => $primary));
	}

	/**
	 *
	 * Remove por chave do banco de dados
	 *
	 * @param	array	$data
	 */
	public function deleteKey($key, $value){
		return $this->db->delete($this->getTable(), array($key => $value));
	}

}
