<?php

class Home extends MY_Controller {
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->data['event'] = $this->event_m->with_id_user()->with_id_department()->get_all();
		$this->data['blog'] = $this->blog_m->with_id_user()->with_id_div()->order_by('like', 'DESC')->limit(6)->get_all();
		$this->data['product'] = $this->product_m->with_id_user()->with_id_div()->get_all();
		$this->data['official'] = $this->official_m->with_id_user()->with_id_department()->get_all();
		$this->data['department'] = $this->department_m->get_all();
		$this->data['division'] = $this->division_m->get_all();
		$this->data['content'] = $this->smarty->view("public/content_home.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function login(){
		$this->data['content'] = $this->smarty->view("public/content_login.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function register(){
		$this->data['content'] = $this->smarty->view("public/content_register.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function check_login(){
		$email	  = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$data 	  = $this->user_m->where(array('email' => $email, 'password' => $password))->get();
		if($data != null){
			$sess['user'] = array(
					'id' 	 => $data->id,
					'name'   => $data->name,
					'nim'	 => $data->nim,
					'dob' 	 => $data->dob,
					'photo'  => $data->photo,
					'mobile' => $data->mobile,
					'email'  => $data->email,
					'level'  => $data->level,
					'u_logged_in' => "true"
				);
			$this->session->set_userdata($sess);
			redirect('home');
		} else {
			redirect('home/login');
		}
	}

	function logout(){
		$this->unset_only();
		redirect('home/login');
	}

	function unset_only() {
    	$user_data = $this->session->all_userdata();
    	foreach ($user_data as $key => $value) {
        	$this->session->unset_userdata($key);
    	}
	}

	function form() {
		$this->data['content'] = $this->smarty->view("public/content_form.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}
}