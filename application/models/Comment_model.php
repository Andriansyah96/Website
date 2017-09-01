<?php
class Comment_model extends MY_Model {
	public $table = "comment";

	function __construct() {
		parent::__construct();
		$this->has_one['id_blog'] = array(
			'foreign_model' => 'Blog_model', 
			'foreign_table' => 'blog', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_blog'
		);
		$this->has_one['id_user'] = array(
			'foreign_model' => 'User_model', 
			'foreign_table' => 'user', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_user'
		);
	}
}