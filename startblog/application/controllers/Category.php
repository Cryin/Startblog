<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {

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
	public function show($id)
	{
		$this->load->helper('url');
		$this->load->model('category_model');
		$data['data'] = $this->category_model->getAllArticles($id);
		$data['cur_category'] = $this->category_model->getCategory($id);
		$data['all_category'] =  $this->category_model->getAllCategory();
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('','am-active','','');

		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

		$this->load->view('header',$data);
		$this->load->view('menu',$data);
		$this->load->view('category_show', $data);
		$this->load->view('footer');
	}
	
}
