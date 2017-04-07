<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Friendship extends Controller {
    public function __construct() {
      parent::__construct ();
    
      $this->load->model('siteinfo_model');
      define ('LANG', $this->siteinfo_model->getLang());
      $this->lang->load('admin', LANG);
     }
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

        $data['cur_title'] = array('','','','','','active','','');
        $data['cur_collapse'] = array('','in');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/friendship_index', $data);
        $this->load->view('admin/footer');
    }

    public function addpage(){
        //加载分页类库

        $data['cur_title'] = array('','','','','','active','','');
        $data['cur_collapse'] = array('','in');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/friendship_add');
        $this->load->view('admin/footer');
    }
    public function editpage($id){
        //加载分页类库
        if($id != 0){
            $this->load->model('friendship_model');    
            $data['data'] = $this->friendship_model->getFriendship($id);      
        }
        $data['cur_title'] = array('','','','','','active','','');
        $data['cur_collapse'] = array('','in');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/friendship_edit',$data);
        $this->load->view('admin/footer');
    }
    public  function edit($id){
        $this->load->database();

        if ($this->input->post('link', TRUE)!='') {
            $data['data'] = array(
                'link' => $this->input->post('link', TRUE),  
                'link_name' => $this->input->post('link_name', TRUE), 
                'link_order' => $this->input->post('link_order', TRUE)          
            );
            $this->db->where('id', $id);
            $this->db->update('friendship', $data['data']);
        }

        redirect('/admin/Friendship/index');
      
    }
    public  function add(){
        $this->load->database();

        if ($this->input->post('link', TRUE)!='') {
            $data['data'] = array(
                'link' => $this->input->post('link', TRUE),  
                'link_name' => $this->input->post('link_name', TRUE), 
                'link_order' => $this->input->post('link_order', TRUE)          
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
        $config['last_link'] = 'Last &rsaquo;';
        $config['first_link'] = '&lsaquo; First';
        return $config;
    }    

}
