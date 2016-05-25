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


	
}