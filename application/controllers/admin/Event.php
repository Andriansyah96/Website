<?php 

class Event extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		if($this->data['a_logged_in'] === null){
			redirect('admin/login');
		}
	}

	function index() {
		$crud = new grocery_CRUD();
		$crud->set_theme('flexigrid');
		$crud->set_table('event');
		$crud->set_relation('id_user', 'user', '{name}');
		$crud->set_relation('id_department', 'department', '{name}');
		$crud->display_as('id_user', 'Author');
		$crud->display_as('id_department', 'From');
		$crud->columns('title', 'date', 'quota', 'ticket', 'photo');
		$crud->set_field_upload('photo','assets/uploads/images', 'jpg|jpeg|png');
		$this->data['gc_data'] = $crud->render();

		$this->smarty->display('admin/layout.html', $this->data);
	}
}

?>