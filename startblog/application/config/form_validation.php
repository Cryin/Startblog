<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$CI =& get_instance();
$config = array(
	'user/login' => array(
		array(
			'field' => 'username',
			'label' => '用户名',
			'rules' => 'trim|required|min_length[3]|max_length[15]|xss_clean'
		),
		array(
			'field' => 'password',
			'label' => '密码',
			'rules' => 'trim|required|min_length[4]|max_length[18]'
		)
	),
    'install/process' => array(
        array(
            'field' => 'dbhost',
            'label' => '服务器',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'dbuser',
            'label' => '数据库用户名',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'dbname',
            'label' => '数据库名',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'username',
            'label' => '管理员',
            'rules' => 'trim|required|min_length[3]|max_length[15]'
        ),
        array(
            'field' => 'password',
            'label' => '密码',
            'rules' => 'trim|required|min_length[6]|max_length[18]'
        ),
        array(
            'field' => 'email',
            'label' => '邮箱',
            'rules' => 'trim|required|valid_email'
        )
    ),
);
