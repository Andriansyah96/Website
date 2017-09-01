<?php 

class Login extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		if($this->data['a_logged_in']  == 'true'){
			redirect('admin/dashboard');
		}
		$this->smarty->display("admin/login.html", $this->data);
	}

	function auth(){
		$email 	  = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$data     = $this->user_m->where(array('email' => $email, 'password' => $password))->get();

		if($data != null && $data->level == 'official'){
			$sess['admin'] = array(
					'id'		  => $data->id,
					'name' 	  	  => $data->name,
					'nim' 		  => $data->nim,
					'dob' 		  => $data->dob,
					'photo' 	  => $data->photo,
					'mobile' 	  => $data->mobile,
					'email' 	  => $data->email,
					'level'		  => $data->level,
					'a_logged_in' => "true",
				);
			$this->session->set_userdata($sess);
			redirect('admin/dashboard');
			//give success message
		} else {
			redirect('admin/login');
			//give error message
		}
	}
}