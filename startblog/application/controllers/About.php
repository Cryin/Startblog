<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
    public function index(){

        $this->load->helper('url');
        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();
        
        $this->load->model('about_model');
        $data['about']= $this->about_model->getAboutInfo();

        $this->load->model('siteinfo_model');
        $data['siteinfo']= $this->siteinfo_model->getSiteInfo();
        
        $data['cur_title'] = array('','','','am-active');
        $this->load->view('header',$data);
        $this->load->view('menu',$data);
        $this->load->view('about');
        $this->load->view('footer',$data);
    }
}
