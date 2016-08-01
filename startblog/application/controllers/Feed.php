<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Feed extends CI_Controller {
    public function index(){

        $this->load->helper('url');
        $this->load->helper('xml');
        $this->load->helper('text');

        $this->load->model('articles_model');
        $data['articles'] =  $this->articles_model->getFeeds(5);
        
        $data['page_language'] = 'en-en'; // the language
        $data['feed_name'] = 'startblog.cc';
        $data['encoding'] = 'utf-8';
        $data['feed_url'] = 'http://www.startblog.cc/feed';
        $data['page_description'] = 'startblog是一个基于codeigniter 3.x开发的简单，易用，Markdown博客系统';  
        header("Content-Type: application/rss+xml; charset=UTF-8");
         
        $this->load->view('feed', $data);
    }
}
