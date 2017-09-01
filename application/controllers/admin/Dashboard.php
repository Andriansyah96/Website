<?php
class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		if($this->data['a_logged_in'] === null){
			redirect('admin/login');
		}
	}

	function index(){
		$this->data['count_of_user']  = $this->user_m->get_all();
		$this->data['count_of_event'] = $this->event_m->get_all();
		$this->data['count_of_blog']  = $this->blog_m->get_all();
		$this->data['count_of_product'] = $this->product_m->get_all();
		$this->data['user_message'] = $this->message_m->with_id_user()->order_by('id', 'DESC')->get_all();
		// var_dump($this->data['user_message']);
		$this->data['content'] = $this->smarty->view("admin/content_dashboard.html", $this->data, true);
		$this->smarty->display("admin/layout.html", $this->data);
	}
}