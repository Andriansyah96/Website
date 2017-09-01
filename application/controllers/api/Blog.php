<?php 

require APPPATH . '/libraries/REST_Controller.php';

Class Blog extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	function index_get() {
		$id = $this->get('id');
		if ($id == '') {
			$blog = $this->blog_m->with_id_user()->get_all();
		} else {
			$blog = $this->blog_m->where(array('id' => $id))
			->with_id_user()->get();
		}
		$this->response($blog, REST_Controller::HTTP_OK);
	}

	function index_post() {
		// do it on website
	}

	function index_put() {
		// do it on website
	}

	function index_delete() {
		// do it on website
	}
}
?>