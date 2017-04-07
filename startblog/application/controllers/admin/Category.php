<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends Controller {
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

        $this->load->model('category_model');
        $data['data'] = $this->category_model->getCategoryDuring($row, $config['per_page']);

        $data['cur_title'] = array('','','active','','','','','');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/category_index', $data);
        $this->load->view('admin/footer');
    }

    public  function add(){
        $this->load->database();

        if ($this->input->post('category', TRUE)!='') {
            $data['data'] = array(
                'category' => $this->input->post('category', TRUE)          
            );
            $this->db->insert('category', $data['data']);
        }

        redirect('/admin/Category/index');
      
    }

    public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('category');

        redirect('/admin/Category/index');

    }
    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Category/index');
        $config['total_rows'] = $this->db->count_all('category');
        $config['per_page'] = '10';
        $config['num_links'] = 3 ;
        $config['last_link'] = 'Last &rsaquo;';
        $config['first_link'] = '&lsaquo; First';
        return $config;
    }    

}
