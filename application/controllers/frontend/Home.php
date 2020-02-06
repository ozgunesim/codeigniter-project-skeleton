<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
    $data['date'] = date('d.m.Y H:i:s');
    $data['header'] = $this->load->view('common/header', array(), TRUE);

		$this->load->view('test', $data);
	}
}

?>