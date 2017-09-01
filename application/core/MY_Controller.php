<?php

class MY_Controller extends CI_Controller {
	function __construct(){
		parent::__construct();
		$data = array();
		$this->data['website_name'] = "POROS UB";
        $this->data['website_logo'] = "poros.png";
        $this->data['website_tag']  = "Open Source Open Mind!";
        $this->data['poros_address'] = "Jl. Veteran No. 8 Malang, Indonesia - 65145";
        $this->data['poros_email'] = "poros_ub@ub.ac.id";
        $this->data['poros_mobile'] = "+613 0000 0000";
		$this->data['u_session'] = $this->session->userdata('user');
		$this->data['a_session'] = $this->session->userdata('admin');
		$m_array = $this->session->userdata('user');
		$a_array = $this->session->userdata('admin');
		$this->data['u_logged_in'] = $m_array['u_logged_in'];
		$this->data['a_logged_in'] = $a_array['a_logged_in'];
	}
}