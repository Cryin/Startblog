<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

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
	public function show()
	{
        $this->load->helper('url');
        if ($this->input->post('pattern', TRUE)!='') {
			$pattern = $this->safe_replace($_POST['pattern']);
		}else
		{
			redirect('/articles/index');		
		}
		$this->load->database();
		$this->load->model('articles_model');
		$articles_info = $this->articles_model->getAllArticles();
		foreach ($articles_info as $key => $value) {
            preg_match_all("/{$pattern}/i", $value['title'],$title_matches);
			preg_match_all("/{$pattern}/i", $value['content'],$content_matches);
            if(!empty($title_matches[0]) or !empty($content_matches[0])){
                $temp_arr['id'] = $value['id'];
                $temp_arr['title'] = $value['title'];
                $temp_arr['published_at'] = $value['published_at'];
                $temp_arr['score'] = count($content_matches[0]) + count($title_matches[0])*5;
                $show_arr[$temp_arr['score']] = $temp_arr;

            }
            
		}

        //对搜索结果根据打分排序
        @krsort($show_arr);
        $data['pattern'] = $pattern;
        $data['show_arr'] = $show_arr;
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('active','','','');
		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();
		$this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();

        if (!empty($data['show_arr'])) {
            $this->load->view('header',$data);
            $this->load->view('menu',$data);
            $this->load->view('search_show', $data);
            $this->load->view('footer');
        }else{
            $this->load->view('header',$data);
            $this->load->view('menu',$data);
            $this->load->view('search_failed', $data);
            $this->load->view('footer');
        }
		
	}
	public function safe_replace($string) 
	{
		$string = str_replace('%20','',$string);
		$string = str_replace('%27','',$string);
		$string = str_replace('%2527','',$string);
		$string = str_replace('*','',$string);
		$string = str_replace('"','&quot;',$string);
		$string = str_replace("'",'',$string);
		$string = str_replace('"','',$string);
		$string = str_replace(';','',$string);
		$string = str_replace('<','&lt;',$string);
		$string = str_replace('>','&gt;',$string);
		$string = str_replace("{",'',$string);
		$string = str_replace('}','',$string);
		$string = str_replace("[",'',$string);
		$string = str_replace(']','',$string);
		$string = str_replace('\\','',$string);
		return $string;
	}
}
