<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends My_Controller {
	function __construct()
	{
	   parent::__construct();
	//    $this->load->database();
	//    $this->load->model();
	//    $this->load->library(array(''));
	//    $this->load->helper(array(''));
	}
	public function remap($method , $data)
	{
	   $data['js_load'][] = '';
	   $data['css_load'][] = '';
	   $this->remap_init($method,$data);
	}
    public function index()
	{
		$this->load->view('welcome_message');
	}
}
