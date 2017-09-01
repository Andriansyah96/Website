<?php
class Official_model extends MY_Model {
	public $table = "official";

	function __construct() {
		parent::__construct();
		$this->has_one['id_user'] = array(
			'foreign_model' => 'User_model', 
			'foreign_table' => 'user', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_user'
		);
		$this->has_one['id_dept'] = array(
			'foreign_model' => 'Department_model', 
			'foreign_table' => 'department', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_dept'
		);
	}
}