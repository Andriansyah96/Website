<?php 

class Blog extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->data['division'] = $this->division_m->get_all();
		$this->data['recent_blog'] = $this->blog_m->with_id_user()->with_id_div()->order_by('created_at', 'DESC')->limit(5)->get_all();
		$this->data['recent_comment'] = $this->comment_m->with_id_user()->with_id_blog()->order_by('id', 'DESC')->limit(5)->get_all();
		$this->data['popular_blog'] = $this->blog_m->with_id_user()->with_id_div()->order_by('like', 'DESC')->limit(5)->get_all();
	}

	function index() {
		$this->data['content'] = $this->smarty->view("public/content_blog.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function detail($id = '') {
		if ($id != '') {
			$this->data['comment'] = $this->comment_m->where(array('id_blog' => $id))->with_id_user()->with_id_blog()->get_all();
			$this->data['blog'] = $this->blog_m->with_id_user()->with_id_div()->get($id);
			// var_dump($this->data['recent_comment']);
			$this->data['content'] = $this->smarty->view("public/content_blog_detail.html", $this->data, true);
			$this->smarty->display("public/layout.html", $this->data);
		}
	}

	# masih error gan :v
	function category($id_div = '') {
		if (!empty($id_div)) {
			$d_category = $this->blog_m->where(array('id_div' => $id_div))->get_all();
			$this->page($d_category);
		}
	}

	function search(){
		$keyword = $this->input->get('keyword');
		$d_search = $this->blog_m->search('title', $keyword)->with_id_user()->with_id_div()->get_all();
		$this->data['blog'] = $d_search;
		$this->data['keyword'] = $keyword;
		$this->data['content'] = $this->smarty->view("public/content_search.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}

	function page() {
		$total_posts = $this->blog_m->count_rows();
		$this->data['blog'] = $this->blog_m->with_id_user()->with_id_div()->paginate(5, $total_posts);
		$this->data['pagination'] = $this->blog_m->all_pages;
		$this->data['content'] = $this->smarty->view("public/content_blog.html", $this->data, true);
		$this->smarty->display("public/layout.html", $this->data);
	}
}
?>