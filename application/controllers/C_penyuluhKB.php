<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_penyuluhKB extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mainmodel','model');
		if ($this->session->userdata('username')===null) {
			redirect('login','refresh');
		}
		$this->load->library('user_agent');
	}

	function lakukan_download($foto){
		$this->load->helper('download');
		$data = 'foto';
		force_download($foto,$data);
		$this->model->get_dokumentasi('fotokegiatan');
		redirect('C_penyuluhKB/lakukan_download');
	}
	
	function index(){
		$data['user'] 		= $this->model->get_table('t_user');
		$data['title'] 		= "Dashboard"; 
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Phome');
		$this->load->view('admin/primary/v_footer');
	}

	function cetak_laporan_KB(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/cetak_laporan_KB/';
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
		$data['title'] 				= "Layanan KB"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_cetakLaporanKB');
		$this->load->view('admin/primary/v_footer');
	}

	function cetak_laporan_BKR(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/cetak_laporan_BKR/';
        $config['total_rows'] 		= $this->model->get_tablee('datatribina')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('datatribina','BKR',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Remaja" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_cetakLaporanBKR');
		$this->load->view('admin/primary/v_footer');
	}

	function cetak_laporan_BKB(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/cetak_laporan_BKB/';
        $config['total_rows'] 		= $this->model->get_BKB('binakeluargabalita')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('binakeluargabalita','BKB',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Balita" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_cetakLaporanBKB');
		$this->load->view('admin/primary/v_footer');
	}

	function cetak_laporan_BKL(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/cetak_laporan_BKL/';
        $config['total_rows'] 		= $this->model->get_BKB('binakeluargalansia')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('binakeluargalansia','id_BKL',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Lansia" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_cetakLaporanBKL');
		$this->load->view('admin/primary/v_footer');
	}
	

    function informasi(){
        $data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_penyuluhKB/informasi/';
        $config['total_rows'] 		= $this->model->get_tab('input_informasi')->num_rows();
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
        $data['query'] = $this->model->get_all_paginate('input_informasi','id_info',$config['per_page'], $this->uri->segment(3));
		$data['title'] = "Informasi"; 
		$data['id_anggota'] = "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Pinformasi');
		$this->load->view('admin/primary/v_footer');
	}

	function add_informasi(){
		$status		= 'Pending';
		$user = $this->model->getPenyuluh()->result();
		$ip = $user[0]->id_penyuluh;
		$datauser = array(
		'id_info'		=> $this->input->post('id_info'),
		'tglinformasi' 	=> $this->input->post('tglinformasi'),
		'tglberakhir' 	=> $this->input->post('tglberakhir'),
		'id_penyuluh'	=> $ip,
		'status'	=> $status,
		'deskripsi' 	=> $this->input->post('deskripsi'));

			$this->model->insert('input_informasi',$datauser);
			$expired = $this->model->get_tanggal('id_info')->row_array();
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			print_r($expired);	
			$now = date("Y-m-d"); //tanggal expired
			echo $now;
			if ($expired['tglberakhir'] != $now	) {
				echo "<b>Masih dalam jangka waktu</b>";
			} else {
				echo "<b>Batas waktu sudah berakhir</b>";
			}
			// redirect('C_penyuluhKB/informasi','refresh');
	}
	
	function update_informasi($id){
		$datauser = array(
			'id_info'		=> $this->input->post('id_info'),
			'tglinformasi' 	=> $this->input->post('tglinformasi'),
			'tglberakhir' 	=> $this->input->post('tglberakhir'),
			'deskripsi' 	=> $this->input->post('deskripsi'),);
			$this->model->updateInfo($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('C_penyuluhKB/informasi','refresh');
		}
	
	function delete_informasi($id){
		$this->model->dropInfo('input_informasi',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('C_penyuluhKB/informasi','refresh');
	}

	function layanan(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/layanan/';
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
		$data['title'] 				= "Layanan KB"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Playanan');
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
		$datauser = array(
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umuriIstri' 	=> $this->input->post('umuriIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'KB' 			=> $this->input->post('KB'),
			'alkon' 		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'bulan' 		=> $this->input->post('bulan'),
			'kabupaten'		=> $this->input->post('kabupaten'),
			'dokumen' 		=> $_FILES['dokumen']['name'],
			'status' 			=> $this->input->post('status'));
			$this->model->insert('layanan',$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/v_Playanan','refresh');
		}


	function update_layanan($id){
		$datauser = array(
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umuriIstri' 	=> $this->input->post('umuriIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'KB' 			=> $this->input->post('KB'),
			'alkon' 		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'bulan' 		=> $this->input->post('bulan'),
			'status' 			=> $this->input->post('status'),
			'kabupaten'		=> $this->input->post('kabupaten'));
			$this->model->updateLayanan($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/v_Playanan','refresh');
	}
	function delete_layanan($id){
		$this->model->dropLayanan('layanan',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/v_Playanan','refresh');
	}

	function tribina(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/tribina/';
        $config['total_rows'] 		= $this->model->get_tablee('datatribina')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('datatribina','BKR',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Remaja" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Ptribina');
		$this->load->view('admin/primary/v_footer');
	}

	function add_tribina(){
		$status		= 'Approved';
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'KKI' 			=> $this->input->post('KKI'),
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'id_kader'		=> $ik,
			'status'	=> $status,
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->insert('datatribina',$datauser);
			$this->session->set_flashdata('success','Data berhasil ditambah!');
			redirect('admin/v_Ptribina','refresh');
		}

	function update_tribina($id){
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'nm_kelKegiatan'=> $this->input->post('nm_kelKegiatan'),
			'KKI' 			=> $this->input->post('KKI'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->updateTribina($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/v_Ptribina','refresh');
		}

	function delete_tribina($id){
		$this->model->dropTribina('datatribina',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/v_Ptribina','refresh');
	}

	function BKB(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/BKB/';
        $config['total_rows'] 		= $this->model->get_BKB('binakeluargabalita')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('binakeluargabalita','BKB',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Balita" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_PBKB');
		$this->load->view('admin/primary/v_footer');
	}

	function add_BKB(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$status		= 'Approved';
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'nm_kelKegiatan'=> $this->input->post('nm_kelKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'KKI' 			=> $this->input->post('KKI'),
			'namalengkap' 	=> $this->input->post('namalengkap'),
			'id_kader'		=>$ik,
			'status'	=> $status,
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'));
			$this->model->insert('binakeluargabalita',$datauser);
			$this->session->set_flashdata('success','Data berhasil ditambah!');
			redirect('admin/v_PBKB','refresh');
		}

	function update_BKB($id){
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'nm_kelKegiatan'=> $this->input->post('nm_kelKegiatan'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'materi' 		=> $this->input->post('materi'),
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'),
			'KKI' 			=> $this->input->post('KKI'),
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->updateBKB($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/v_PBKB','refresh');
		}

	function delete_BKB($id){
		$this->model->dropBKB('binakeluargabalita',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/v_PBKB','refresh');
	}

	public function kelola_data()
	{
		$datauser['datauser'] = $this->model->get_tablee()->result();
		$this->load->view('admin/v_Ptribina', $datauser);
	}

	public function approve_data($id){
		$where	= array('BKR' => $id);
		$datauser	= array('status' => 'Approved');
		$this->model->update_data($where, $datauser);
		
		redirect ('C_penyuluhKB/tribina','refresh');
	}

	public function cancel_data($id){
		$where	= array('BKR' => $id);
		$datauser	= array('status' => 'Canceled');
		$this->model->update_data($where, $datauser);

		redirect ('C_penyuluhKB/tribina','refresh');
	}

	public function hapus_data($id){
		$where = array('BKR' => $id);
		$this->model->hapus_data($where);
		
		redirect ('C_penyuluhKB/tribina','refresh');
	}

	public function keloladata_BKB()
	{
		$datauser['datauser'] = $this->model->get_BKB()->result();
		$this->load->view('admin/v_PBKB', $datauser);
	}

	public function approvedata_BKB($id){
		$where	= array('BKB' => $id);
		$datauser	= array('status' => 'Approved');
		$this->model->updatedata_BKB($where, $datauser);
		
		redirect ('C_penyuluhKB/BKB','refresh');
	}

	public function canceldata_BKB($id){
		$where	= array('BKB' => $id);
		$datauser	= array('status' => 'Canceled');
		$this->model->updatedata_BKB($where, $datauser);

		redirect ('C_penyuluhKB/BKB','refresh');
	}

	public function hapusdata_BKB($id){
		$where = array('BKB' => $id);
		$this->model->hapusdata_BKB($where);
		
		redirect ('C_penyuluhKB/BKB','refresh');
	}

	public function approvedata_BKL($id){
		$where	= array('id_BKL' => $id);
		$datauser	= array('status' => 'Approved');
		$this->model->updatedata_BKL($where, $datauser);
		
		redirect ('C_penyuluhKB/BKL','refresh');
	}

	public function canceldata_BKL($id){
		$where	= array('id_BKL' => $id);
		$datauser	= array('status' => 'Canceled');
		$this->model->updatedata_BKL($where, $datauser);

		redirect ('C_penyuluhKB/BKL','refresh');
	}

	public function hapusdata_BKL($id){
		$where = array('id_BKL' => $id);
		$this->model->hapusdata_BKL($where);
		
		redirect ('C_penyuluhKB/BKL','refresh');
	}

	function BKL(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/BKL/';
        $config['total_rows'] 		= $this->model->get_BKB('binakeluargalansia')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open']	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open']	= '<div class="pagination pagination-sm m-0 float-right">';
        $config['full_tag_close'] 	= '</ul></div></div>';
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
        $data['query'] 				= $this->model->get_all_paginate('binakeluargalansia','id_BKL',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Bina Keluarga Lansia" ; 
		$data['id_anggota'] 		= "tribina".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_PBKL');
		$this->load->view('admin/primary/v_footer');
	}

	function add_BKL(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$status		= 'Approved';
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'nm_kelKegiatan'=> $this->input->post('nm_kelKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'KKI' 			=> $this->input->post('KKI'),
			'namalengkap' 	=> $this->input->post('namalengkap'),
			'status'	=> $status,
			'id_kader' 			=> $ik,
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'));
			$this->model->insert('binakeluargalansia',$datauser);
			$this->session->set_flashdata('success','Data berhasil ditambah!');
			redirect('admin/v_PBKL','refresh');
		}

	function update_BKL($id){
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'materi' 		=> $this->input->post('materi'),
			'KKI' 			=> $this->input->post('KKI'),
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'),
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->updateBKL($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/v_PBKL','refresh');
		}

	function delete_BKL($id){
		$this->model->dropBKL('binakeluargalansia',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/v_PBKL','refresh');
	}

	function statistik_layanan(){
		$data['title'] 		= "Statistik Layanan" ; 
		// $this->load->view('admin/primary/v_Pheader',$data);
		// $this->load->view('admin/v_grafikLayanan');
		$this->load->view('admin/primary/v_footer');
        $x['data']=$this->model->statistik();
        $this->load->view('admin/v_grafikLayanan',$x);
	}
	
	function dokumentasi(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_penyuluhKB/dokumentasi/';
        $config['total_rows'] 		= $this->model->get_dokumentasi('fotokegiatan')->num_rows();
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
        $data['query'] 				= $this->model->get_all_paginate('fotokegiatan','id_foto',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Dokumentasi Kegiatan"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Pfotokegiatan');
		$this->load->view('admin/primary/v_footer');
	}

	function keterangan(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'C_penyuluhKB/keterangan/';
        $config['total_rows'] 		= $this->model->get_keterangan('keterangan')->num_rows();
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
        $data['query'] 				= $this->model->get_all_paginate('keterangan','id_keterangan',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Keterangan"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_Pheader',$data);
		$this->load->view('admin/v_Ptribina');
		$this->load->view('admin/primary/v_footer');
	}

 	function ket_data(){
		$user = $this->model->getTribina()->result();
		$bkr = $user[0]->BKR;

		$user = $this->model->getPenyuluh()->result();
		$ip = $user[0]->id_penyuluh;
		$datauser = array(
		'id_penyuluh'			=> $ip,
		'BKR'					=> $bkr,
		'keterangan' 			=> $this->input->post('keterangan'),);
		$this->model->get_ket($datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('C_penyuluhKB/keterangan','refresh');
	 }
}