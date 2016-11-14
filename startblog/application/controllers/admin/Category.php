<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends Controller {
    
    public function index(){
        //加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);


        $row = $this->uri->segment(4);
        $row = isset($row) ? $row : 0;

        $this->load->model('category_model');
        $data['data'] = $this->category_model->getCategoryDuring($row, $config['per_page']);

        $data['cur_title'] = array('','','','active','','','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/category_index', $data);
        $this->load->view('admin/footer');
    }

    public  function add(){
        $this->load->database();

        if ($_POST['category']!='') {
            $data['data'] = array(
                'category' => $_POST['category'],             
            );
            $this->db->insert('category', $data['data']);
        }

        redirect('/admin/category/index');
      
    }

    public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('category');

        redirect('/admin/category/index');

    }
    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Category/index');
        $config['total_rows'] = $this->db->count_all('category');
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

}
