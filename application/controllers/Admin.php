<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index ()
    {
        is_logged_in();
        is_admin();
        $data['title'] = 'Dashboard Admin';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/index',$data);
        $this->load->view('templates/footer');
        
    }
    
    public function blocked(){
	    $data['title'] = 'Acess Blocked';
        $data['users'] = $this->db->get_where('users',['email' => $this->session->userdata('email')])->row_array();
	    $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('admin/blocked',$data);
        $this->load->view('templates/footer');
	}
}