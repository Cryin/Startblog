<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Friendship extends Controller {
    
    public function index(){
        //加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);


        $row = $this->uri->segment(4);
        $row = isset($row) ? $row : 0;

        $this->load->model('friendship_model');
        $data['data'] = $this->friendship_model->getFriendshipDuring($row, $config['per_page']);

        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/friendship_index', $data);
        $this->load->view('admin/footer');
    }

    public function addpage(){
        //加载分页类库

        $data['cur_title'] = array('','','','','','active','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/friendship_add');
        $this->load->view('admin/footer');
    }

    public  function add(){
        $this->load->database();

        if ($_POST['link']!='') {
            $data['data'] = array(
                'link' => $_POST['link'],  
                'link_name' => $_POST['link_name'],           
            );
            $this->db->insert('friendship', $data['data']);
        }

        redirect('/admin/Friendship/index');
      
    }

    public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('friendship');

        redirect('/admin/Friendship/index');

    }
    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Friendship/index');
        $config['total_rows'] = $this->db->count_all('friendship');
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
