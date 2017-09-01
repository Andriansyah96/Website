<?php
class User extends MY_Controller {

	function __construct(){
		parent::__construct();
		if($this->data['a_logged_in'] === null){
			redirect('admin/login');
		}
	}

	function index(){
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('user');
		$crud->display_as('dob', 'Date of birth');
		$crud->columns('name', 'nim', 'dob', 'mobile', 'email', 'level', 'photo');
		$crud->set_field_upload('photo','assets/uploads/images', 'jpg|jpeg|png');
		$crud->callback_before_update(array($this, 'hash_password'));
		// $crud->callback_before_update(array($this, 'hash_photo'));
		$crud->callback_before_insert(array($this, 'hash_password'));
		// $crud->callback_before_insert(array($this, 'hash_photo'));
		$this->data['gc_data'] = $crud->render();

		$this->smarty->display('admin/layout.html', $this->data);
	}

	function hash_password($post_array, $primary_key) {
		if(!empty($post_array['password'])) {
			$post_array['password'] = md5($post_array['password']);
		} else {
			unset($post_array['password']);
		}
		return $post_array;
	}

	function hash_photo($post_array, $primary_key) {
		if (!empty($post_array['photo'])) {
			$post_array['photo'] = md5($post_array['photo']);
		} else {
			unset($post_array['photo']);
		}
		return $post_array;
	}
}