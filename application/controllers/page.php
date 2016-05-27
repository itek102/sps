<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    
    function login() {
            $this->load->model("free_model");
    $data['user'] = $this->session->userdata('user');
    if(empty($data['user']) ){

      if($this->input->post('enter')){
$login = htmlspecialchars($this->input->post('login'));

$pass = htmlspecialchars($this->input->post('pass'));
$pass = md5($pass);
$check = $this->free_model->login($login,$pass);

if($check == TRUE){

$ses_data = array('user' => $login);
$this->session->set_userdata($ses_data);

redirect(base_url().'page');
}

}

$this->load->view('admin/au_user', $data);      
}
    }

	public function index()
	{
        $this->login();
$this->load->view('admin/admin_top');
$this->load->view('admin/admin_view');
$this->load->view('admin/admin_bottom');
}
    
    	public function default_setting()
	{
        $this->login();
        if($this->input->post('save_default')) {
            $a = $this->input->post('adress');
            $p = $this->input->post('phone');
            $b = $this->input->post('email');
            $adress['value'] = $a;
            $phone['value'] = $p;
            $email['value'] = $b;
            $this->db->where('name','adress');
            $this->db->update('base_setting',$adress);
            $this->db->where('name','phone');
            $this->db->update('base_setting',$phone);
            $this->db->where('name','email');
            $this->db->update('base_setting',$email);
            $data['msg'] = 'Изменения сохранены';
            $data['btn_color'] = 'btn-success';
        } else {
            $data['msg'] = 'Сохранить изменения';
            $data['btn_color'] = 'btn-primary';
        }
        $this->db->where('name','adress');
        $e = $this->db->get('base_setting');
        $e = $e->row_array();
        $data['adress'] = $e['value'];
        $this->db->where('name','phone');
        $e = $this->db->get('base_setting');
        $e = $e->row_array();
        $data['phone'] = $e['value'];
        $this->db->where('name','email');
        $e = $this->db->get('base_setting');
        $e = $e->row_array();
        $data['email'] = $e['value'];
        $this->load->view('admin/admin_top');
        $this->load->view('admin/admin_default',$data);
        $this->load->view('admin/admin_bottom');
}
    
    
    public function gallery() {
        if ($this->input->post('load_file'))
        {
            $description = $this->input->post('slogan');
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '15360';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $temp_files = $_FILES;
            $count = count ($_FILES['file']['name']);
            for ($i=0; $i<=$count-1; $i++)
                {
                    $_FILES['file'] = array (
                    'name'=>$temp_files['file']['name'][$i],
                    'type'=>$temp_files['file']['type'][$i],
                    'tmp_name'=>$temp_files['file']['tmp_name'][$i],
                    'error'=>$temp_files['file']['error'][$i],
                    'size'=>$temp_files['file']['size'][$i]);
                    $this->upload->do_upload('file');
                    $tmp_data = $this->upload->data();
                    $files_data[$i]['data'] = $tmp_data['file_name'];
                    $img = array(
                        'img'         =>   $files_data[$i]['data'], 
                        'description'        =>   $description,
                        );
                    $this->db->insert('gallery',$img);
            }
        } 
        $d = $this->db->get('gallery');
        $data['gallery'] = $d->result_array();
        $this->load->view('admin/admin_top');
        $this->load->view('admin/admin_gallery',$data);
        $this->load->view('admin/admin_bottom'); 
        
    }
    
    public function del_img() {
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $a = $this->db->delete('gallery');
}
    public function save_img() {
        $id = $this->input->post('id');
        $description = $this->input->post('description');
        $img['description'] = $description;
        $this->db->where('id',$id);
        $this->db->update('gallery',$img);
    }

    public function beton() {
        if ($this->input->post('load_file'))
        {
            $description = $this->input->post('description');
            $title = $this->input->post('title');
            $img = array(
                'title'         =>   $title, 
                'description'   =>   $description,
            );
            $this->db->insert('beton',$img);
        }
        $this->login();
        $d = $this->db->get('beton');
        $data['gallery'] = $d->result_array();
        $this->load->view('admin/admin_top');
        $this->load->view('admin/admin_beton',$data);
        $this->load->view('admin/admin_bottom');
    }
    
    public function del_beton() {
    $id = $this->input->post('id');
    $this->db->where('id',$id);
    $a = $this->db->delete('beton');
}
    public function save_beton() {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $img['description'] = $description;
        $img['title'] = $title;
        $this->db->where('id',$id);
        $a = $this->db->update('beton',$img);
        echo $a;
    }
	
}