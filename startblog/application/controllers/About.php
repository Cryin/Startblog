<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
    public function index(){

        $this->load->helper('url');
        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();

        $data['cur_title'] = array('','','','active');
        $this->load->view('header');
        $this->load->view('menu',$data);
        $this->load->view('about');
        $this->load->view('footer');
    }
}
