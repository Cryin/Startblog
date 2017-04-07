<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tag extends Controller {
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

        $this->load->model('tag_model');
        $data['data'] = $this->tag_model->getTagDuring($row, $config['per_page']);
        $data['cur_title'] = array('','','','active','','','','');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/tag_index', $data);
        $this->load->view('admin/footer');
    }

    public  function add(){
        $this->load->database();
        $color_array=array("primary", "success", "info", "warning", "danger");
        if ($this->input->post('tag_name', TRUE)!='') {
            $data['data'] = array(
                'tag_name' => $this->input->post('tag_name', TRUE),
                'tag_button_type' => $color_array[array_rand($color_array)]         
            );
            $this->db->insert('tag', $data['data']);
        }
        redirect('/admin/Tag/index');
      
    }
    public  function edit($tag_id){
        $this->load->database();

        $this->load->model('articles_model');
        $this->load->model('tag_model');
        $data['tag_info'] = $this->tag_model->getTagByTagid($tag_id);
        $data['articles_by_tag'] = $this->articles_model->getArticlesTag($tag_id);
        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();
        //当前标题（首页，分类，标签，关于我）
        $data['cur_title'] = array('','','','active','','','','');
        $data['cur_collapse'] = array('','');
        $this->load->view('admin/header');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/tag_edit',$data);
        $this->load->view('admin/footer');
    }

    public function check($tag_id){
        $this->load->model('articles_model');
        $check_arr = $this->articles_model->getArticlesTag($tag_id);
        if(empty($check_arr)){
            redirect("/admin/tag/delete/$tag_id");
        }else{
            //加载分页类库
            $this->load->library('pagination');
            //获取分页类配置
            $config = $this->getPaginationConfig();
            $this->pagination->initialize($config);


            $row = $this->uri->segment(5);
            $row = isset($row) ? $row : 0;

            $this->load->model('tag_model');
            $data['data'] = $this->tag_model->getTagDuring($row, $config['per_page']);
            $data['cur_title'] = array('','','','','active','','');
            $data['cur_collapse'] = array('','');
            $this->load->view('admin/header');
            $this->load->view('admin/menu', $data);
            $this->load->view('admin/tag_index', $data);
            $this->load->view('admin/tag_check');
            $this->load->view('admin/footer');
        }
    }
    public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('tag');

        redirect('/admin/Tag/index');

    }
    public  function delete_link($article_id, $tag_id){
        $this->load->database();

        $this->db->where('article_id', $article_id);
        $this->db->where('tag_id', $tag_id);
        $this->db->delete('article_tag');

        $sql="select tag_name from tag where id='{$tag_id}'";
        $tag_name = $this->db->query($sql)->result_array();

        $sql="select tag from articles where id='{$article_id}'";
        $data = $this->db->query($sql)->result_array();
        $data = explode(',', $data[0]['tag']);

        foreach ($data as $key => $value) {
            if($value != $tag_name[0]['tag_name']){
                $new_tag[] = $value;
            }
        }
        $new_tag = implode(',', $new_tag);
        $arr =  array('tag' => $new_tag , );

        $this->db->where('id', $article_id);
        $this->db->update('articles', $arr);

        $this->load->model('articles_model');
        $check_arr = $this->articles_model->getArticlesTag($tag_id);
        if(empty($check_arr)){
            $this->db->where('id', $tag_id);
            $this->db->delete('tag');
        }
        redirect('/admin/Tag/index');
    }
    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Tag/index');
        $config['total_rows'] = $this->db->count_all('tag');
        $config['per_page'] = '10';
        $config['num_links'] = 3 ;
        $config['last_link'] = 'Last &rsaquo;';
        $config['first_link'] = '&lsaquo; First';
        
        return $config;
    }    

}
