<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index(){
		
  }
  
  public function add(){
    $this->load->view('admin/news/add');
  }

}

?>