<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
	    $this->load->library('form_validation');
    }
	public function index()
	{   
	    is_loggin();
	    $this->form_validation->set_rules('email','Email','required|trim|valid_email');
	    $this->form_validation->set_rules('password','Password','required|trim');
	    if($this->form_validation->run() == false){
    	    $data['title'] = 'Panel Login';
    		$this->load->view('templates/auth_header', $data);
    		$this->load->view('auth/login');
    		$this->load->view('templates/auth_footer');
	    } else {
	        $this->_login();
	    }
	}
	
	private function _login(){
	    $email = $this->input->post('email');
	    $password = $this->input->post('password');
	    
	    $user = $this->db->get_where('users',['email'=> $email])->row_array();
	    // cek user ada
	    if($user){
	       // jika aktif
	       if($user['status'] == 1){
	           //cek password
	           if(password_verify($password, $user['password'])){
	                $data = [
	                    'id' => $user['id'],
	                    'email' => $user['email'],
	                    'level' => $user['level'],
	                ];
	                $this->session->set_userdata($data);
	                if($user['level'] == 'Admin'){
	                    redirect('Admin');
	                } else {
	                    redirect('panel');
	                }
	           } else {
                    $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Wrong password!.</div>');
                    redirect('auth');
	           }
	       } else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">This email has not been activated!.</div>');
                redirect('auth');
	       }
	    } else {
           $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">Email is not registered!.</div>');
           redirect('auth');
	    }
	}
	
	public function register()
	{
	    is_loggin();
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
    	    $data['title'] = 'Panel Registration';
    		$this->load->view('templates/auth_header' , $data);
    		$this->load->view('auth/register');
    		$this->load->view('templates/auth_footer');   
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
	        $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">Congratulation!, your account has been created. Please login.</div>');
	        $this->db->insert('users',$data);
	        redirect('auth');
	    }
	}
	
	public function pricelist ()
    {
        $data['title'] = 'Pricelist';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Category_helper', 'category');
        $data['pricelist'] = $this->category->get_category();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('panel/price_list/index',$data);
        $this->load->view('templates/footer');
        
    }
	public function logout(){
	    $this->session->unset_userdata('id');
	    $this->session->unset_userdata('email');
	    $this->session->unset_userdata('level');
	    $this->session->set_flashdata('msg','<div class="alert alert-success" role="alert">You have been logged out!.</div>');
	    redirect('auth');
	}
}
