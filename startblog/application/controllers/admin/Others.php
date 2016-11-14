<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Others extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function back_up()
	{
        //加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);


        $row = $this->uri->segment(4);
        $row = isset($row) ? $row : 0;

        $data['path'] = dirname(dirname(dirname(dirname(__FILE__)))).'\\article\\';
        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_backup', $data);
        $this->load->view('admin/footer');
	}
	public function show_siteinfo()
	{

        $this->load->model('siteinfo_model');
        $data['data']= $this->siteinfo_model->getSiteInfo();

       $data['cur_title'] = array('','active','','','','','');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_setinfo', $data);
        $this->load->view('admin/footer');
	}
	public function about()
	{

        $this->load->model('about_model');
        $data['data']= $this->about_model->getAboutInfo();

        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_about', $data);
        $this->load->view('admin/footer');
	}
	public function feedback()
	{

        $data['cur_title'] = array('','','','','','','active');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_feedback');
        $this->load->view('admin/footer');
	}

	public function edit_about()
	{

        $this->load->model('about_model');
        $data['data']= $this->about_model->updateAboutInfo();

        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_about_success', $data);
        $this->load->view('admin/footer');
	}

	public  function set_siteinfo(){
        $this->load->helper('url');
        $this->load->model('siteinfo_model');
        if ($_POST['title']!=''){

        	$site_info = $this->siteinfo_model->updateSiteInfo();
    		}

        $data['cur_title'] = array('','active','','','','','');

        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_setsiteinfo_success', $data);
        $this->load->view('admin/footer');
      
    }
	public function backup()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('articles_model');
        $data = $this->articles_model->getAllArticles();
		$path = $_POST['backup_path'];
		foreach ($data as $key => $value) {
      		$str = 'title:'.$value['title']."\r\ncategory:".$value['category']."\r\ntag:".$value['tag']."\r\npublished_at:".$value['published_at']."\r\n\r\n============================\r\n\r\n".$value['content'];
      		$file = $path.$value['title'].'.txt';
      		$file=iconv("utf-8","gb2312",$file);
			$fp = fopen($file, 'w');
			if ($fp) {
				fwrite($fp, $str);
				fclose($fp);
			}
			
		}
        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_backup_success');
        $this->load->view('admin/footer');
	}

	public function change_password()
	{
		$this->load->helper('form');
		$this->load->helper('url');
	  	$this->load->library('form_validation');
	  	$this->load->library('session');
	  	$this->load->database();
        $username = $this->session->userdata('username');
        $this->db->where('username', $username);
      	$this->user_info = $this->db->get('user')->result_array();


		$this->form_validation->set_rules('old_password', 'old_password', 'md5|callback_password_check');
		$this->form_validation->set_rules('new_password', 'new_password', 'md5');
		$this->form_validation->set_rules('new_password_conf', 'new_password_conf', 'md5|matches[new_password]');
		$this->form_validation->set_message('matches', '两次输入不一致！');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');


		$data['cur_title'] = array('','','','','','','');
	  if ($this->form_validation->run() == FALSE)
	  {
	   	$this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_change_password');
        $this->load->view('admin/footer');
	  }
	  else
	  {

	  	$new_password = array('password' => md5($_POST['new_password']));
		$this->db->where('username', $_SESSION['username']);
		$this->db->update('user', $new_password);

        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_change_password_success');
        $this->load->view('admin/footer');
	  
	 }
	}

	private function getPaginationConfig(){
		$this->load->database();
		$this->load->helper('url');

		$config['base_url'] = site_url('Others/output');
		$config['total_rows'] = $this->db->count_all('articles');
		$config['per_page'] = '10';
		$config['num_links'] = 3 ;
		$config['last_link'] = '末页';
		$config['first_link'] = '首页';
		$config['prev_link'] = false;
		$config['next_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li><li><a>...</a></li>';
		$config['last_tag_open'] = '<li><a>...</a></li><li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</li></a>';
		$config['num_tag_open'] = '<li>';
	 	$config['num_tag_close'] = '</li>';
	 	$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		return $config;
	}
	public function password_check($str)
    {

    	$password = isset($this->user_info[0]['password'])?$this->user_info[0]['password']:0;
        if (md5($str) != $password){
            $this->form_validation->set_message('password_check', '密码错误');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }
}
