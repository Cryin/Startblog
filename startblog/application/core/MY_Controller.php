<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('user');
		//登录验证
		checkLogin();
	}
}
?>