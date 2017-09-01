<?php 

require APPPATH . '/libraries/REST_Controller.php';

Class Message extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	function index_get() {
		$id = $this->get('id');
		if ($id == '') {
			$blog = $this->message_m->with_id_user()->get_all();
		} else {
			$blog = $this->message_m->where(array('id' => $id))
			->with_id_user()->get_all();
		}
		$this->response($blog, REST_Controller::HTTP_OK);
	}

	function index_post() {
		
	}

	function index_update() {

	}

	function index_delete() {
		
	}
}
?>