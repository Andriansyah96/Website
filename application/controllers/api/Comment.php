<?php 

require APPPATH . '/libraries/REST_Controller.php';

Class Comment extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	function index_get() {
		$blog = $this->get('blog');
		if ($blog != '') {
			$comment = $this->comment_m->where(array('id_blog' => $blog))
			->with_id_user()->with_id_blog()->get_all();
		} else {
			$comment = $this->comment_m->with_id_user()->with_id_blog()->get_all();
		}
		$this->response($comment, REST_Controller::HTTP_OK);
	}

	function index_post() {
		$data = array(
			'id_blog' => $this->post('blog'),
			'id_user' => $this->post('user'),
			'comment' => $this->post('comment')
		);
		$insert = $this->comment_m->insert($data);
		if ($insert) {
			$this->response(array('status' => 'success'), REST_Controller::HTTP_OK);
		} else {
			$this->response(array('status' => 'fail'), REST_Controller::HTTP_BAD_GATEWAY);
		}
	}

	function index_put() {
		// do it on website
	}

	function index_delete() {
		// do it on website
	}
}
?>