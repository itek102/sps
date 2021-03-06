<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
         $data['user'] = $this->session->userdata('user');
        if (empty($data['user'])) {
          $data['login_panel'] ='';  
        } else {
        $data['login_panel'] = '<li><a href="page" class="btn btn-success">Войти в панель</a></li>';
            }

        $a = $this->db->get('beton');
        $data['beton'] = $a->result_array();
        $b = $this->db->get('specteh');
        $data['teh'] = $b->result_array();
        $this->db->order_by('position','ASC');
        $c = $this->db->get('menu');
        $data['menu'] = $c->result_array();
        $d = $this->db->get('gallery');
        $data['gallery_num'] = $d->num_rows();
        $data['gallery'] = $d->result_array();
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
        $f = $this->db->get('rings');
        $data['ring'] = $f->result_array();
        $this->db->where('section','beton');
        $sb= $this->db->get('shares');
        $sb = $sb->row_array();
        $data['sb'] = $sb['text'];
        $this->db->where('section','rings');
        $sr= $this->db->get('shares');
        $sr = $sr->row_array();
        $data['sr'] = $sr['text'];
        $this->db->where('section','specteh');
        $ss= $this->db->get('shares');
        $ss = $ss->row_array();
        $data['ss'] = $ss['text'];
		$this->load->view('welcome_message',$data);
       
        
	}
    
    public function send_mail() {
                    $this->load->library('email');
        $this -> email -> initialize();
$this->input->post('Contact');
$this->input->post('Vid');
$this->input->post('Marka');
$this->input->post('Col');
$this->input->post('Dost');
$this->input->post('Date');
$this->input->post('Adress');
$this->input->post('Otvet');
$this->input->post('TelOtvet');
$this->email->from('info@sps.ru', 'Система заявок');
$this->email->to('admin@admin'); 


$this->email->subject('Новая заявка');
$this->email->message($this->input->post('Contact')."\n".$this->input->post('Vid'));	

$this->email->send();

    }
}
