<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_administrator extends CI_Controller {
    
function __construct(){
		parent::__construct();
        $this->load->model('Mainmodel','model');
        if ($this->session->userdata('username')===null) {
			redirect('login','refresh');
		}
		$this->load->library('user_agent');

	}
	
	function index(){
        $data['user'] 		= $this->model->get_table('profile');
        $data['title'] 		= "Dashboard"; 
		$this->load->view('admin/primary/v_headerAdmin',$data);
		$this->load->view('admin/v_homeAdministrator');
		$this->load->view('admin/primary/v_footer');
        
	}
	
	function kelola_akun(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_administrator/kelola_akun/';
        $config['total_rows'] 		= $this->model->get_kelolaUser('t_user')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close']	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
        $config['num_tag_open'] 	= '<li class="page-item">';
        $config['num_tag_close'] 	= '</li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']	= '</a></li>';
        $config['next_link'] 		= '&rarr;';
        $config['next_tag_open']	= '<li class="page-item">';
        $config['next_tag_close'] 	= '</li>';
        $config['prev_link'] 		= '&larr;';
        $config['prev_tag_open'] 	= '<li class="page-item">';
        $config['prev_tag_close'] 	= '</li>';
        $this->pagination->initialize($config);
        $data['offset'] = $this->uri->segment(3);
        $data['query'] = $this->model->get_all_paginate('t_user','id',$config['per_page'], $this->uri->segment(3));
		$data['title'] 		= "Kelola Akun Pengguna"; 
		$data['id_anggota'] = "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_headerAdmin',$data);
		$this->load->view('admin/v_AdminKelola');
		$this->load->view('admin/primary/v_footer');
	}

	function update_user($id){
		$datauser = array(
			'username' 			=> $this->input->post('username'),
			'password' 			=> $this->input->post('password'),
			'jabatan' 			=> $this->input->post('jabatan'),);
			$this->model->update_userr($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('C_administrator/kelola_akun','refresh');
	}
	
	function delete_user($id){
		$this->model->dropUser('t_user',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('C_administrator/kelola_akun','refresh');
	}
    
}