<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
    public function __construct() {
      parent::__construct ();
    
      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
     }
    public function index(){

        $this->load->helper('url');
        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();
        
        $this->load->model('about_model');
        $data['about']= $this->about_model->getAboutInfo();
        $data['mesboard']= $this->about_model->getMsboard();

        $this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();
        
        $data['cur_title'] = array('','','','am-active');
        $this->load->view('header',$data);
        $this->load->view('menu',$data);
        $this->load->view('about',$data);
        $this->load->view('footer',$data);
    }
    public function leaving_message()
    {
        $this->load->database();
        if ($this->input->post('name', TRUE)!='' and $this->input->post('message', TRUE)!='') {
            $data['data'] = array(
                'name' => $this->input->post('name', TRUE),
                'email' => $this->input->post('email', TRUE),
                'site' => $this->input->post('site', TRUE),
                'time' => date('Y-m-d H:i:s',time()),
                'message' => $this->input->post('message', TRUE)         
            );
            $this->db->insert('mesboard', $data['data']);
        }

        redirect('/About/index');
    }
}
