<?php 

class Message extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		// do nothing
	}

	function add_message() {
		if ($this->data['u_logged_in'] === null){
			redirect('home/login');
		} else {
			$data = array(
				'id_user' => $this->input->post('id_user'),
				'email' => $this->input->post('email'),
				'mobile' => $this->input->post('mobile'),
				'message' => $this->input->post('message')
			);
		}
		$insert = $this->message_m->insert($data);
		if ($insert > 0) {
			echo "<script type='text/javascript'>alert('Thank you for your advice! Have a nice day!');</script>";
			redirect('home');
		} else {
			echo "<script type='text/javascript'>alert('Failed add message!');</script>";
			redirect('home');
		}
	}
}
?>