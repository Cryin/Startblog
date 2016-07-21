<?php


if (!function_exists('checkLogin')){
	function checkLogin(){
		$ci =& get_instance();
		$ci->load->helper('url');
		$d = trim($ci->router->fetch_directory().'/');
		$c = $ci->router->fetch_class();
		$m = $ci->router->fetch_method();
		$username = $ci->session->userdata('username');
		if ($d = 'admin' && $c = 'Index' && $m !='login'){
			if (empty($username)){
				redirect('admin/Index/login?back_url='.uri_string());
			}
		}

	}
}
?>