<?php 

class Comment extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		// do nothing
	}

	function add_comment($id_blog = '') {
		if ($this->data['u_logged_in'] === null) {
			redirect('home/login');
		} else {
			$data = array(
				'id_blog' => $id_blog,
				'id_user' => $this->input->post('user'),
				'comment' => $this->input->post('comment')
			);
			$insert = $this->comment_m->insert($data);
			if ($insert > 0) {
				print "<script type='text/javascript'>alert('Thank you for your advice! Have a nice day!');</script>";
				redirect('blog/detail/'.$id_blog);
			} else {
				print "<script type='text/javascript'>alert('Failed add message!');</script>";
				redirect('blog/detail/'.$id_blog);
			}
		}
	}
}
?>