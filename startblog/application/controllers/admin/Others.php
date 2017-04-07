<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Others extends Controller {

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
	public function __construct() {
	  parent::__construct ();

      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
	 }
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
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_backup', $data);
        $this->load->view('admin/footer');
	}
	public function show_siteinfo()
	{
		$this->load->helper('directory');
		$this->data['langdir'] = directory_map(APPPATH.'/language/', 1);

        $this->load->model('siteinfo_model');
        $data['data']= $this->siteinfo_model->getSiteInfo();

       $data['cur_title'] = array('','','','','','','','active');
       $data['cur_collapse'] = array('','');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_setinfo', $data);
        $this->load->view('admin/footer');
	}
	public function about()
	{

        $this->load->model('about_model');
        $data['data']= $this->about_model->getAboutInfo();

        $data['cur_title'] = array('','','','','','','active','');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header',$data);
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_about', $data);
        $this->load->view('admin/footer');
	}
	public function feedback()
	{

        $data['cur_title'] = array('','','','','','','active');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_feedback');
        $this->load->view('admin/footer');
	}

	public function edit_about()
	{

        $this->load->model('about_model');
        $data['data']= $this->about_model->updateAboutInfo();

        $data['cur_title'] = array('','','','','','','active','');
        $data['cur_collapse'] = array('','');
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

        $data['cur_title'] = array('','','','','','','','active');
        $data['cur_collapse'] = array('','');
        #redirect('/admin/index', 'refresh');
        $this->load->view('admin/header',$data);
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
		$path = $this->input->post('backup_path', TRUE);
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
        $data['cur_collapse'] = array('','');
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

		$data['cur_title'] = array('','','','','active','','','');
		$data['cur_collapse'] = array('','');
	  if ($this->form_validation->run() == FALSE)
	  {
	   	$this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/others_change_password');
        $this->load->view('admin/footer');
	  }
	  else
	  {

	  	$new_password = array('password' => md5($this->input->post('new_password', TRUE)));
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
		$config['last_link'] = 'Last &rsaquo;';
        $config['first_link'] = '&lsaquo; First';
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
