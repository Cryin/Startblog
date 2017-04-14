<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller {

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
	public function index()
	{
		//判断是否安装
		$file=FCPATH.'install.lock';
		if (!is_file($file)){
			redirect(site_url('install'));
		}
		$this->load->database();
		//加载分页类库
		$this->load->library('pagination');
		//获取分页类配置
		$config = $this->getPaginationConfig();
		$this->pagination->initialize($config);


		$row = $this->uri->segment(3);
		$row = isset($row) ? $row : 0;
		$this->load->model('articles_model');
		$data['data'] = $this->articles_model->getArticlesDuring($row, $config['per_page']);

		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();

		$this->load->model('tag_model');
		$data['all_tag'] = $this->tag_model->getAllTags();

		$this->load->model('friendship_model');
		$data['friendship'] = $this->friendship_model->getAllFriend();
		

		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

		$data['cur_title'] = array('am-active','','','');

		$this->load->view('header',$data);
		$this->load->view('menu', $data);
		#$this->load->view('banner', $data);
		$this->load->view('articles_index', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('footer',$data);
	}
	public function timeline()
	{

        $data['cur_title'] = array('','','am-active','');

        $this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();


		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();
        $this->load->view('header',$data);
        $this->load->view('menu',$data);
        $this->load->view('timeline');

        $this->load->view('footer',$data);
	}
	public function article($id)
	{	
		$this->load->database();
		//统计文章访问数
		$this->load->library('session');
		$user_ip_name = 'user_ip_'.$id;
		if(empty($_SESSION[$user_ip_name])){
			$this->db->set('pv', 'pv+1', FALSE);
			$this->db->where('id', $id);
			$this->db->update('articles');
			$user_ip=$_SERVER["REMOTE_ADDR"]; 
			$user_ip = array($user_ip_name => $user_ip);
			$this->session->set_userdata($user_ip);		
		}
		$this->load->helper('url');
		$this->load->model('articles_model');

		$data_tmp['articles'] = $this->articles_model->getArticle(intval($id));
		#echo 'test'.$data_tmp['articles'].count($data_tmp['articles']);
		if (count($data_tmp['articles'])==0)
		{
			#redirect('/Articles/index');
        	#$this->load->view('header');
 
        	$this->load->view('404');

        	#$this->load->view('footer');
		}
		else
		{
		$tag_info = $this->articles_model->getTagsType();
		foreach ($data_tmp as $key => $value) {
			foreach ($value as $value1) {
				$data['article']['0']['id'] = $value1['id'];
				$data['article']['0']['title'] = $value1['title'];
				$data['article']['0']['keyword'] = $value1['keyword'];
				$data['article']['0']['description'] = $value1['description'];

				$data['article']['0']['content'] = $value1['content'];
				$data['article']['0']['category'] = $value1['category'];
				$data['article']['0']['pv'] = $value1['pv'];
				if ($value1['tag'] != ''){
					$tag_str = explode(',', $value1['tag']);
					$tag_str = implode("','", $tag_str);
					$tag_str = "('".$tag_str."')";
					$sql="select id, tag_name from tag where tag_name in {$tag_str}";
					$tag_arr = $this->db->query($sql)->result_array();
					foreach ($tag_arr as $key => $value) {
						$data['article']['0']['tag'][$value['id']]= $value['tag_name'];
					}
				}
				
				$data['article']['0']['published_at'] = $value1['published_at'];
			}
		}
		foreach ($tag_info['button_type'] as $value) {
			$tag_name = $value['tag_name'];
			$button_type["$tag_name"] = $value['tag_button_type'];
		}
		$data['button_type'] = $button_type;
		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('','am-active','','');

		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

		$this->load->view('articles_header',$data);
		$this->load->view('menu',$data);
		$this->load->view('articles_article', $data);
		$this->load->view('contact', $data);
		$this->load->view('footer',$data);
	}

	}



	private function getPaginationConfig(){
		$this->load->database();
		$this->load->helper('url');

		$config['base_url'] = site_url('Articles/index');
		$config['total_rows'] = $this->db->count_all('articles');
		$config['per_page'] = '5';
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
}
