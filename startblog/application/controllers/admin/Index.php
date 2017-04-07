<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends Controller {
     public $user_info;
	 public function __construct() {
	  parent::__construct ();
      
	  $this->load->helper(array('form', 'url'));
	  $this->load->library('session');
      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
	 }
     public function index(){
        $this->load->model('articles_model');
        $data['data'] = $this->articles_model->getRecentlyArticles(3);
        $data['version'] = $this->articles_model->getRecentlyUpdate(3);
        $data['cur_title'] = array('active','','','','','','','');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('admin/footer');
     }
	 public  function login()
	 {
	  $this->load->helper('form');
	  $this->load->library('form_validation');
      $this->load->database();
      $username = trim($this->input->post('username',TRUE));
      $passowrd = trim($this->input->post('passowrd',TRUE));
      $this->db->where('username', $username);
      $this->user_info = $this->db->get('user')->result_array();
	  $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check');
	  $this->form_validation->set_rules('password', 'Password', 'md5|callback_password_check');
	  $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

	  if ($this->form_validation->run() == FALSE)
	  {
	   $this->load->view('admin/index_login');
	  }
	  else
	  {
		$userdata= array(
            'username' => $username,
            'passowrd' => $passowrd
            );

        $this->session->set_userdata($userdata);
        redirect('admin/Index/index');
	  
	 }

	}

	public function logout(){
        session_destroy();
        redirect(site_url('Articles/index'));
    }


    public function username_check($str)
    {
        if ($str == '')
        {
            $this->form_validation->set_message('username_check', '用户名不能为空');
            return FALSE;
        }
        elseif( $this->user_info == null ){
            $this->form_validation->set_message('username_check', '用户不存在');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }

public function password_check($str)
    {
        $password = isset($this->user_info[0]['password'])?$this->user_info[0]['password']:0;
        if(md5($str) != $password){
            $this->form_validation->set_message('password_check', '密码错误');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }
}
