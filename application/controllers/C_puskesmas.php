<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_puskesmas extends CI_Controller {
    
function __construct(){
		parent::__construct();
		$this->load->model('Mainmodel','model');
		if ($this->session->userdata('username')===null) {
			redirect('login','refresh');
		}
		$this->load->library('user_agent');
	}
	
	function index(){
		$data['user'] 		= $this->model->get_table('p_puskesmas');
		$data['title'] 		= "Dashboard"; 
		$this->load->view('admin/primary/v_headerPuskesmas',$data);
		$this->load->view('admin/v_homePuskesmas');
		$this->load->view('admin/primary/v_footer');
	}

	function statistik_aseptorKB(){
		$data['title'] 		= "Statistik Aseptor KB" ; 
		// $this->load->view('admin/primary/v_Pheader',$data);
		// $this->load->view('admin/v_grafikLayanan');
		$this->load->view('admin/primary/v_footer');
        $x['data']=$this->model->statistik_aseptor();
        $this->load->view('admin/v_grafikAseptorKB',$x);
	}

	function pelayanan_KB(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_puskesmas/pelayanan_KB/';
        $config['total_rows'] 		= $this->model->get_table('layanan')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close']	= '</ul></div></div>';
        $config['num_tag_open'] 	= '<li class="page-item">';
        $config['num_tag_close'] 	= '</li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] 	= '</a></li>';
        $config['next_link'] 		= '&rarr;';
        $config['next_tag_open'] 	= '<li class="page-item">';
        $config['next_tag_close'] 	= '</li>';
        $config['prev_link'] 		= '&larr;';
        $config['prev_tag_open'] 	= '<li class="page-item">';
        $config['prev_tag_close'] 	= '</li>';
        $this->pagination->initialize($config);
        $data['offset'] 			= $this->uri->segment(3);
        $data['query'] 				= $this->model->get_all_paginate('layanan','kodeLKB',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Pelayanan KB"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_headerPuskesmas',$data);
		$this->load->view('admin/v_LayananPuskesmas');
		$this->load->view('admin/primary/v_footer');
	}

	function add_layanan(){
		$this->load->library('upload');
				$config['upload_path']          = './gambar/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 100;
				$config['max_width']            = 1024;
				$config['max_height']           = 768;
				$this->upload->initialize($config);
				$this->upload->do_upload('dokumen');
		
		$status		= 'Approved';		
		$datauser = array(
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'bulan' 		=> $this->input->post('bulan'),
			'dokumen' 		=> $_FILES['dokumen']['name'],
			'status'	=> $status,
			'kabupaten'		=> $this->input->post('kabupaten'),
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umuriIstri' 	=> $this->input->post('umuriIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'alkon' 		=> $this->input->post('alkon'),);
			$this->model->insert('layanan',$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/pelayanan_KB','refresh');
		}

	function update_layanan($id){
		$datauser = array(
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umuriIstri' 	=> $this->input->post('umuriIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'alkon' 		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'status'		=> $this->input->post('status'),
			'bulan' 		=> $this->input->post('bulan'),
			'kabupaten'		=> $this->input->post('kabupaten'));
			$this->model->updateLayanan($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/v_Playanan','refresh');
	}
	function delete_layanan($id){
		$this->model->dropLayanan('layanan',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/pelayanan_lanjutan','refresh');
	}


	public function approvedata_layanan($id){
		$where	= array('kodeLKB' => $id);
		$datauser	= array('status' => 'Approved');
		$this->model->updatedata_layanan($where, $datauser);
		
		redirect ('C_puskesmas/pelayanan_lanjutan','refresh');
	}

	public function canceldata_layanan($id){
		$where	= array('kodeLKB' => $id);
		$datauser	= array('status' => 'Canceled');
		$this->model->updatedata_layanan($where, $datauser);

		redirect ('C_puskesmas/pelayanan_lanjutan','refresh');
	}

	public function hapusdata_layanan($id){
		$where = array('kodeLKB' => $id);
		$this->model->hapusdata_BKB($where);
		
		redirect ('C_puskesmas/pelayanan_lanjutan','refresh');
	}

	function aseptorKB($id){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_puskesmas/aseptorKB/';
        $config['total_rows'] 		= $this->model->get_aseptor('data_aseptor')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close']	= '</ul></div></div>';
        $config['num_tag_open'] 	= '<li class="page-item">';
        $config['num_tag_close'] 	= '</li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] 	= '</a></li>';
        $config['next_link'] 		= '&rarr;';
        $config['next_tag_open'] 	= '<li class="page-item">';
        $config['next_tag_close'] 	= '</li>';
        $config['prev_link'] 		= '&larr;';
        $config['prev_tag_open'] 	= '<li class="page-item">';
        $config['prev_tag_close'] 	= '</li>';
        $this->pagination->initialize($config);
        $data['offset'] 			= $this->uri->segment(3);
        $data['query'] 				= $this->model->get_all_paginate('data_aseptor','id_aseptor',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Aseptor KB"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$data['layanan1']=$this->model->getLayanan($id)->result();
		// $layanan=$this->model->getLayanan($id)->result();
		// print_r($layanan);
		// redirect('C_puskesmas/getAllLayanan');
		$this->load->view('admin/primary/v_headerPuskesmas',$data);
		$this->load->view('admin/v_dataAseptor');
		$this->load->view('admin/primary/v_footer');
	}

	function add_aseptor(){ 	
			$user = $this->model->getPuskesmas()->result();
			$ip = $user[0]->id_pPuskesmas;
	
		$datauser = array(
			'aseptorKB' 	=> $this->input->post('aseptorKB'),
			'tensidarah' 	=> $this->input->post('tensidarah'),
			'id_pPuskesmas'	=> $ip,
			'guladarah'		=> $this->input->post('guladarah'),
			'namaIstri'		=> $this->input->post('namaIstri'),
			'alkon'		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			
		);
			$this->model->insert('data_aseptor',$datauser);
			$this->model->getLayanan($datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/aseptorKB','refresh');
		}

	function getAllLayanan(){
		$data['layanan1']=$this->model->getLayanan();

		$this->load->view('admin/primary/v_headerPuskesmas',$data);
		$this->load->view('admin/v_dataAseptor',$data);
		$this->load->view('admin/primary/v_footer',$data);

	}

		function delete_aseptor($id){
			$this->model->dropAseptor('data_aseptor',$id);
			$this->session->set_flashdata('success', 'Data terhapus!');
			redirect('admin/aseptorKB','refresh');
		}
}