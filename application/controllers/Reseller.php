<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller 
{
    
    public function __construct(){
        parent::__construct();
	    $this->load->library('form_validation');
    }
    public function index()
	{
	    is_logged_in();
        is_reseller();
        
	    $this->form_validation->set_rules('name','Name','required|trim');
	    
	    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]',[
	            'is_unique' => 'this email has already registered!'
	        ]);
	    
	    $this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',[
	            'matches' => 'Password dont match!',
	            'min_length' => 'Password too short!',
	        ]);
	    
	    $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
	    $this->load->helper('string');
	    
	    if ($this->form_validation->run() == false){
        	$data['title'] = 'Tambah Member';
            $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('panel/reseller/index',$data);
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
    
    public function blocked(){
	    $data['title'] = 'Acess Blocked';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
	    $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('panel/reseller/blocked',$data);
        $this->load->view('templates/footer');
	}
}