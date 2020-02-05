<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->view('public/news');
  }
  
  public function detail(){
    $this->load->view('public/news_detail');
  }
}

?>