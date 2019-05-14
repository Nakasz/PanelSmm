<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }
    public function index ()
    {
        $data['title'] = 'Dashboard';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['news'] = $this->db->get('news')->result_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('panel/index',$data);
        $this->load->view('templates/footer');
        
    }
    
    public function order()
	{
	    $this->form_validation->set_rules('name','Name','required|trim');
	    $this->load->helper('string');
	    
	    if ($this->form_validation->run() == false){
        	$data['title'] = 'Order Sosial Media';
            $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
            $data['category'] = $this->db->get('categories')->result_array();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('panel/order/index',$data);
            $this->load->view('templates/footer');   
	    } else {
	        $data = [
	            'username' => htmlspecialchars($this->input->post('username', true)),
	            'email' => htmlspecialchars($this->input->post('email', true)),
	            'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
	            'full_name' => htmlspecialchars($this->input->post('name', true)),
	            'balance' => 0,
	            'level' => 'Member',
				'api_key' => random_string('alpha',30),
				'created_at' => date('Y-m-d H:i:s'),
	        ];
	        $this->session->set_flashdata('msg','<div class="alert alert-success  col-lg-7 mx-auto shadow" role="alert">
    	  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>Congratulation!, your member has been created.</div>');
	        $this->db->insert('users',$data);
	        redirect('reseller');
	    }
	}
	
	public function service(){
	    $modul = $this->input->post('modul');
	    $id = $this->input->post('id');
	    if($modul == "services"){
	        $this->load->model('Category_helper', 'category');
	        $this->category->service($id);
	    }
	}
	
	public function data(){
	    $modul = $this->input->post('modul');
	    $id = $this->input->post('id');
	    if($modul == "data"){
	        $this->load->model('Category_helper', 'category');
	        $this->category->data_layanan($id);
	    }
	}
    
    public function riwayat_order ()
    {
        $data['title'] = 'Riwayat Order Sosial Media';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['orders'] = $this->db->get_where('orders',['user_id' => $this->session->userdata('id')])->result_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('panel/order/history',$data);
        $this->load->view('templates/footer');
        
    }
    public function riwayat_deposit ()
    {
        $data['title'] = 'Riwayat Deposit';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $data['deposits'] = $this->db->get_where('deposits',['user_id' => $this->session->userdata('id')])->result_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('panel/deposit/history',$data);
        $this->load->view('templates/footer');
        
    }
}