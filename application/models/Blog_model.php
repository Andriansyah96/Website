<?php
class Blog_model extends MY_Model {
	public $table = "blog";

	function __construct() {
		parent::__construct();
		$this->pagination_arrows = array('Prev', 'Next');
		$this->has_one['id_user'] = array(
			'foreign_model' => 'User_model', 
			'foreign_table' => 'user', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_user'
		);
		$this->has_one['id_div'] = array(
			'foreign_model' => 'Division_model', 
			'foreign_table' => 'division', 
			'foreign_key'	=> 'id', 
			'local_key'		=> 'id_div'
		);
	}

	public function search($column, $term, $w = 'both') {
        $this->db->like($column, $term, $w);
        return $this;
    }
}