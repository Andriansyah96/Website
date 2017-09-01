<?php
class Message_model extends MY_Model {
	public $table = "message";

	function __construct() {
		parent::__construct();
		$this->has_one['id_user'] = array(
			'foreign_model' => 'User_model', 
			'foreign_table' => 'user', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_user'
		);
	}
}