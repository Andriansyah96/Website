<?php
class Product extends MY_Controller {
    function __construct(){
        parent::__construct();
        if($this->data['a_logged_in'] === null){
            redirect('admin/login');
        }
    }

    function index($id_div = ''){
        $crud = new grocery_CRUD();
        $crud->set_theme('flexigrid');
        $crud->set_table('product');
        $crud->where('id_div', $id_div);
        $crud->display_as('id_user', 'Author');
        $crud->display_as('id_div', 'Division');
        $crud->set_relation("id_user", "user", "{name}");
        $crud->set_relation("id_div", "division", "{name}");
        $crud->columns('id_user', 'id_div', 'name', 'link', 'photo', 'created_at');
        $crud->set_field_upload('photo','assets/uploads/images', 'jpg|jpeg|png');
        $this->data['gc_data'] = $crud->render();

        $this->smarty->display('admin/layout.html', $this->data);
    }
}