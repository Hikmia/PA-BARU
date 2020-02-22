<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mainmodel','model');
		if ($this->session->userdata('username')===null) {
			redirect('login','refresh');
		}
		$this->load->library('user_agent');
		// load form_validation library
		$this->load->library('form_validation');
	}

	function update_profile($kodepetugas){
		$datauser = array(
			'namalengkap' 		=> $this->input->post('namalengkap'),
			'email' 			=> $this->input->post('email'),
			'jabatan' 			=> $this->input->post('jabatan'),);
			$this->model->update($kodepetugas,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/anggota','refresh');
	}

	function show_data(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/show_data/';
		$config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
        $config['total_rows'] 		= $this->model->get_tab('input_informasi')->num_rows();
		$data['offset'] 			= $this->uri->segment(3);
        $data['query'] 				= $this->model->get_all_paginate('input_informasi','id_info',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Informasi Pelayanan"; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_infokader',$data);
		$this->load->view('admin/primary/v_footer');
	}

	function index(){
		$data['user'] 		= $this->model->get_table('t_user');
		$data['title'] 		= "Dashboard"; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_home');
		$this->load->view('admin/primary/v_footer');
	}

	function user(){
        $data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/user/';
        $config['total_rows'] 		= $this->model->get_table('t_user')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
        $data['offset'] = $this->uri->segment(3);
        $data['query'] = $this->model->get_all_paginate('t_user','id',$config['per_page'], $this->uri->segment(3));
		$data['title'] 		= "Data User"; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_user');
		$this->load->view('admin/primary/v_footer');
	}

	function delete_user($id){
		if ($this->session->userdata('id')==$id) {
			$this->session->set_flashdata('error', 'Anda tidak bisa menghapus akun anda sendiri!');
			redirect('admin/user');
		}else{
			$this->model->drop('t_user','id',$id);
			$this->session->set_flashdata('success', 'Data terhapus!');
			redirect('admin/user','refresh');		
		}
	}

	function add_user(){
		$this->form_validation->set_rules('username', 'Username', "required|is_unique[tbl_user.username]");
		if ($this->form_validation->run()==FALSE) {
		$this->session->set_flashdata('error', 'Username telah digunakan');
		redirect($this->agent->referrer());
		}else{

		$datauser = array(
			'username'	=> $this->input->post('username'),
			'password' 	=> $this->input->post('password'),
			'jabatan' 	=> $this->input->post('jabatan'), );
		$this->model->insert('t_user',$datauser);
		$this->session->set_flashdata('success', 'Data berhasil ditambah!');
		redirect('admin/user','refresh');
		}
	}

	function update_user($id){
		$this->form_validation->set_rules('username', 'Username', "required|min_length[6]|is_unique[tbl_user.username]");
		if ($this->form_validation->run()==FALSE) {
		$this->session->set_flashdata('error', 'Username telah digunakan');
		redirect($this->agent->referrer());
		}else{

		$datauser = array(
			'username'	=> $this->input->post('username'),
			'password' 	=> $this->input->post('password'),
			'jabatan' 	=> $this->input->post('jabatan'), );
		$this->model->update('t_user','id',$id,$datauser);
		$this->session->set_flashdata('success', 'Data berhasil diubah!');
		redirect('admin/user','refresh');
		}	
	}

	function dokumentasi(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/dokumentasi/';
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
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_fotokegiatan');
		$this->load->view('admin/primary/v_footer');
	}

	function add_dokumentasi(){
				$config['upload_path']          = 'assets3/gambar/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 500;
				$config['max_width']            = 1000;
				$config['max_height']           = 1000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto')){
					$this->session->set_flashdata('error', 'Maaf size gambar yang anda upload tidak memenuhi');
					redirect('admin/dokumentasi');
			}else{ 
					
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;	
		$datauser = array(
			'id_foto'		=> $this->input->post('id_foto'),
			'judul' 		=> $this->input->post('judul'),
			'foto' 			=> $_FILES['foto']['name'],
			'tglKegiatan'	=> $this->input->post('tglKegiatan'),
			'id_kader'		=> $ik,
			'deskripsi' 	=> $this->input->post('deskripsi'),);
		$this->model->insert('fotokegiatan',$datauser);
		$this->session->set_flashdata('success', 'Gambar berhasil ditambah!');
		redirect('admin/dokumentasi','refresh');
		}
	}
		
	function delete_dokumentasi($id){
		$this->model->dropFotoKegiatan('fotokegiatan',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/dokumentasi','refresh');
	}

	function anggota(){
        $data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/anggota/';
        $config['total_rows'] 		= $this->model->get_tableeee('data_keluarga')->num_rows();
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
        $data['query'] = $this->model->get_all_paginate('data_keluarga','kd_dataKeluarga',$config['per_page'], $this->uri->segment(3));
		$data['title'] 		= "Data Keluarga"; 
		$data['id_anggota'] = "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_anggota');
		$this->load->view('admin/primary/v_footer');
	}

	function tampil_foto($k){
		$this->model->tampil_gambar($k);
	}

	function add_anggota(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$datauser = array(
			'NIK' 			=> $this->input->post('NIK'),
			'nama' 			=> $this->input->post('nama'),
			'umur' 			=> $this->input->post('umur'),
			'TglLahir'		=> $this->input->post('TglLahir'),
			'hubungan' 		=> $this->input->post('hubungan'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'pendidikan' 	=> $this->input->post('pendidikan'),
			'pekerjaan'		=> $this->input->post('pekerjaan'),
			'statuskawin' 	=> $this->input->post('statuskawin'),
			'desa' 			=> $this->input->post('desa'),
			'dusun' 		=> $this->input->post('dusun'),
			'kecamatan'		=> $this->input->post('kecamatan'),
			'RT' 			=> $this->input->post('RT'),
			'RW' 			=> $this->input->post('RW'),
			'jkn' 			=> $this->input->post('jkn'),
			'JmlJiwa' 		=> $this->input->post('JmlJiwa'),
			'id_kader'		=> $ik,
			'JmlPUS' 		=> $this->input->post('JmlPUS'),
			'NoRumah' 		=> $this->input->post('NoRumah'),
			'provinsi' 		=> $this->input->post('provinsi'),);
			$this->model->insert('data_keluarga',$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/anggota','refresh');
		}

	function kb(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/kb/';
        $config['total_rows'] 		= $this->model->get_tableee('keluargaberencana')->num_rows();
        $config['per_page'] 		= '10';
        $config['first_tag_open'] 	= '<li class="page-item">';
        $config['first_tag_close'] 	= '</li>';
        $config['last_tag_open'] 	= '<li class="page-item">';
        $config['last_tag_open'] 	= '</li>';
        $config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
        $data['query'] 				= $this->model->get_all_paginate('keluargaberencana','kodeKB',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Keluarga Berencana"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_kelberencana',$data);
		$this->load->view('admin/primary/v_footer');
	}

	function add_KB(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;

		$user = $this->model->getData_Keluarga()->result();
		$kd_dataKeluarga = $user[0]->kd_dataKeluarga;
		$datauser = array(
			'u_kawinsuami' 			=> $this->input->post('u_kawinsuami'),
			'u_kawinistri' 			=> $this->input->post('u_kawinistri'),
			'prnhDilahirkanLaki' 	=> $this->input->post('prnhDilahirkanLaki'),
			'prnhDilahirkanCewek'	=> $this->input->post('prnhDilahirkanCewek'),
			'dilahirkanHidupLaki' 	=> $this->input->post('dilahirkanHidupLaki'),
			'dilahirkanHidupCewek'	=> $this->input->post('dilahirkanHidupCewek'),
			'kesertaanKB' 			=> $this->input->post('kesertaanKB'),
			'metodekon'				=> $this->input->post('metodekon'),
			'jangkawaktu' 			=> $this->input->post('jangkawaktu'),
			'rencanaPnyAnak'		=> $this->input->post('rencanaPnyAnak'),
			'tmptPel' 				=> $this->input->post('tmptPel'),
			'id_kader'		=> $ik,
			'kd_dataKeluarga'			=> $kd_dataKeluarga,
			'alasan'				=> $this->input->post('alasan'),);
			$this->model->insert('keluargaberencana',$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/kb','refresh');
		}

		

		function pembangunanKel(){
			$data['link_admin'] 		= 'active';
			$config['base_url'] 		= base_url() . 'admin/pembangunanKel/';
			$config['total_rows'] 		= $this->model->get_tableeeee('pemb_keluarga')->num_rows();
			$config['per_page'] 		= '10';
			$config['first_tag_open'] 	= '<li class="page-item">';
			$config['first_tag_close'] 	= '</li>';
			$config['last_tag_open'] 	= '<li class="page-item">';
			$config['last_tag_open'] 	= '</li>';
			$config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
			$data['query'] 				= $this->model->get_all_paginate('pemb_keluarga','kodePK',$config['per_page'], $this->uri->segment(3));
			$data['title'] 				= "Data Pembangunan Keluarga"; 
			$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
			$this->load->view('admin/primary/v_header',$data);
			$this->load->view('admin/v_pembkeluarga',$data);
			$this->load->view('admin/primary/v_footer');
		}
	
		function add_PK(){
			$user = $this->model->getKader()->result();
			$ik = $user[0]->id_kader;

			$user = $this->model->getData_keluarga()->result();
			$kd_dataKeluarga = $user[0]->kd_dataKeluarga;
			$datauser = array(
				'jawaban' 			=> $this->input->post('jawaban'),
				'makan' 			=> $this->input->post('makan'),
				'berobat'			=> $this->input->post('berobat'),
				'pakaian' 			=> $this->input->post('pakaian'),
				'jenismakanan'		=> $this->input->post('jenismakanan'),
				'ibadah' 			=> $this->input->post('ibadah'),
				'usiasubur'			=> $this->input->post('usiasubur'),
				'tabungan' 			=> $this->input->post('tabungan'),
				'komunikasi'		=> $this->input->post('komunikasi'),
				'kegiatansosial' 	=> $this->input->post('kegiatansosial'),
				'aksesinformasi'	=> $this->input->post('aksesinformasi'),
				'anggotapengurus' 	=> $this->input->post('anggotapengurus'),
				'kegPosyandu' 		=> $this->input->post('kegPosyandu'),
				'kegBKB'			=> $this->input->post('kegBKB'),
				'kegBKR' 			=> $this->input->post('kegBKR'),
				'kegPIKR'			=> $this->input->post('kegPIKR'),
				'kegBKL' 			=> $this->input->post('kegBKL'),
				'kegUPPKS' 			=> $this->input->post('kegUPPKS'),
				'jenisatap' 			=> $this->input->post('jenisatap'),
				'jenisdinding'			=> $this->input->post('jenisdinding'),
				'jenislantai' 			=> $this->input->post('jenislantai'),
				'smbrpenerangan'		=> $this->input->post('smbrpenerangan'),
				'sumberair' 			=> $this->input->post('sumberair'),
				'smbrbhnbakar'			=> $this->input->post('smbrbhnbakar'),
				'mck' 					=> $this->input->post('mck'),
				'tmptTinggal'			=> $this->input->post('tmptTinggal'),
				'luasrumah' 			=> $this->input->post('luasrumah'),
				'id_kader'				=> $ik,
				'kd_dataKeluarga'		=> $kd_dataKeluarga,
				'jmlOrgTinggal'			=> $this->input->post('jmlOrgTinggal'));
				$this->model->insert('pemb_keluarga',$datauser);
				$this->session->set_flashdata('success', 'Data berhasil ditambah!');
				redirect('admin/pembangunanKel','refresh');
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
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_layananKB');
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

				$user = $this->model->getKader()->result();
				$ik = $user[0]->id_kader;

				$user = $this->model->getPuskesmas()->result();
				$ip = $user[0]->id_pPuskesmas;
				// $user = $this->model->getData_keluarga()->result();
				// $noKK = $user[0]->noKK;
		$datauser = array(
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umurIstri' 	=> $this->input->post('umurIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'alkon' 		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'bulan' 		=> $this->input->post('bulan'),
			'id_kader'		=> $ik,
			'id_pPuskesmas'	=> $ip,
			'dokumen' 		=> $_FILES['dokumen']['name'],
			'kabupaten'		=> $this->input->post('kabupaten'));
			$this->model->insert('layanan',$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/layanan','refresh');
		}


	function update_layanan($id){
		$datauser = array(
			'namaIstri' 	=> $this->input->post('namaIstri'),
			'umurIstri' 	=> $this->input->post('umurIstri'),
			'nmSuami' 		=> $this->input->post('nmSuami'),
			'jmlAnak' 		=> $this->input->post('jmlAnak'),
			'alkon' 		=> $this->input->post('alkon'),
			'alamat'		=> $this->input->post('alamat'),
			'desa' 			=> $this->input->post('desa'),
			'kecamatan' 	=> $this->input->post('kecamatan'),
			'bulan' 		=> $this->input->post('bulan'),
			'kabupaten'		=> $this->input->post('kabupaten'));
			$this->model->updateLayanan($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/layanan','refresh');
	}
	function delete_layanan($id){
		$this->model->dropLayanan('layanan',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/layanan','refresh');
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
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_tribina');
		$this->load->view('admin/primary/v_footer');
	}

	function add_tribina(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jml_kegiatan' 	=> $this->input->post('jml_kegiatan'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'KKI' 			=> $this->input->post('KKI'),
			'materi' 		=> $this->input->post('materi'),
			'tanggalkegiatan' => $this->input->post('tanggalkegiatan'),
			'id_kader' 		=> $ik,
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->insert('datatribina',$datauser);
			$this->session->set_flashdata('pesan', 'Data yang anda ajukan akan tampil setelah diterima oleh Penyuluh KB');
			redirect('admin/tribina','refresh');
		}

	function update_tribina($id){
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'jml_kegiatan' 	=> $this->input->post('jml_kegiatan'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'KKI' 			=> $this->input->post('KKI'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'materi' 		=> $this->input->post('materi'),
			'tanggalkegiatan' => $this->input->post('tanggalkegiatan'),
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->updateTribina($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/tribina','refresh');
		}

	function delete_tribina($id){
		$this->model->dropTribina('datatribina',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/tribina','refresh');
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
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_BinaKeluargaBalita');
		$this->load->view('admin/primary/v_footer');
	}

	function add_BKB(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'kel_umur' 		=> $this->input->post('kel_umur'),
			'KKI' 			=> $this->input->post('KKI'),
			'namalengkap' 	=> $this->input->post('namalengkap'),
			'id_kader'		=> $ik,
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'));
			$this->model->insert('binakeluargabalita',$datauser);
			$this->session->set_flashdata('success','Data berhasil ditambah!');
			redirect('admin/BKB','refresh');
		}

	function update_BKB($id){
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'nm_kelKegiatan'	=> $this->input->post('nm_kelKegiatan'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'materi' 		=> $this->input->post('materi'),
			'kel_umur' 		=> $this->input->post('kel_umur'),
			'KKI' 			=> $this->input->post('KKI'),
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'),
			'namalengkap' 	=> $this->input->post('namalengkap'));
			$this->model->updateBKB($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/BKB','refresh');
		}

	function delete_BKB($id){
		$this->model->dropBKB('binakeluargabalita',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/BKB','refresh');
	}

	function BKL(){
		$data['link_admin'] 		= 'active';
        $config['base_url'] 		= base_url() . 'admin/BKL/';
        $config['total_rows'] 		= $this->model->get_BKL('binakeluargalansia')->num_rows();
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
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_BinaKeluargaLansia');
		$this->load->view('admin/primary/v_footer');
	}

	function add_BKL(){
		$user = $this->model->getKader()->result();
		$ik = $user[0]->id_kader;
		$datauser = array(
			'narasumber' 	=> $this->input->post('narasumber'),
			'diskusi' 		=> $this->input->post('diskusi'),
			'nm_kelKegiatan'=> $this->input->post('nm_kelKegiatan'),
			'materi' 		=> $this->input->post('materi'),
			'KKI' 			=> $this->input->post('KKI'),
			'namalengkap' 	=> $this->input->post('namalengkap'),
			'id_kader'		=> $ik,
			'tanggalKegiatan' => $this->input->post('tanggalKegiatan'));
			$this->model->insert('binakeluargalansia',$datauser);
			$this->session->set_flashdata('success','Data berhasil ditambah!');
			redirect('admin/BKL','refresh');
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
			$this->model->updateBKB($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/BKL','refresh');
		}

	function delete_BKL($id){
		$this->model->dropBKB('binakeluargalansia',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/BKL','refresh');
	}

	public function approvedata_informasi($id){
		$where	= array('id_info' => $id);
		$datauser	= array('status' => 'Diterima');
		$this->model->updatedata_informasi($where, $datauser);
		
		redirect ('admin/show_data','refresh');
	}

	function cek_DataKeluarga(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/cek_DataKeluarga/';
		$config['total_rows'] 		= $this->model->get_tableeee('data_keluarga')->num_rows();
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
		$data['query'] = $this->model->get_all_paginate('data_keluarga','kd_dataKeluarga',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Keluarga" ; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_dataSearching', $data);
		$this->load->view('admin/primary/v_footer');
	}

	function cek_Data(){
		$data['title'] 		= "Pencarian Data" ; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_cekdata');
		$this->load->view('admin/primary/v_footer');
	}

	function lanjutan(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutan/';
		$config['total_rows'] 		= $this->model->get_tableeee('data_keluarga')->num_rows();
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
		$data['query'] 				= $this->model->get_all_paginate('data_keluarga','kd_dataKeluarga',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Keluarga" ; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutan', $data);
		$this->load->view('admin/primary/v_footer');
	}

	function update_lanjutan(){
		$id = 'kd_dataKeluarga';
		$datauser = array(
			'NIK' 			=> $this->input->post('NIK'),
			'nama' 			=> $this->input->post('nama'),
			'umur' 			=> $this->input->post('umur'),
			'TglLahir'		=> $this->input->post('TglLahir'),
			'hubungan' 		=> $this->input->post('hubungan'),
			'jeniskelamin' 	=> $this->input->post('jeniskelamin'),
			'pendidikan' 	=> $this->input->post('pendidikan'),
			'pekerjaan'		=> $this->input->post('pekerjaan'),
			'statuskawin' 	=> $this->input->post('statuskawin'),
			'RT' 			=> $this->input->post('RT'),
			'RW' 			=> $this->input->post('RW'),
			'jkn' 			=> $this->input->post('jkn'),
			'JmlJiwa' 		=> $this->input->post('JmlJiwa'),
			'JmlPUS' 		=> $this->input->post('JmlPUS'),
			'NoRumah' 		=> $this->input->post('NoRumah'),
			'provinsi' 		=> $this->input->post('provinsi'),);
			$this->model->update($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('admin/lanjutan','refresh');
	}

	function delete_lanjutan($id){
		$this->model->drop('data_keluarga',$id);
		$this->session->set_flashdata('success', 'Data terhapus!');
		redirect('admin/lanjutan','refresh');
	}

	function lanjutan2(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutan2/';
		$config['total_rows'] 		= $this->model->get_tableee('keluargaberencana')->num_rows();
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
		$data['query'] 				= $this->model->get_all_paginate_join('keluargaberencana','data_keluarga','kodeKB',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Keluarga Berencana" ;
		// print_r($data); 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutan_2', $data);
		$this->load->view('admin/primary/v_footer');
	}
	

	function update_lanjutan2($id){
		$datauser = array(
			'NIK' 			=> $this->input->post('NIK'),
			'u_kawinsuami' 			=> $this->input->post('u_kawinsuami'),
			'u_kawinistri' 			=> $this->input->post('u_kawinistri'),
			'prnhDilahirkanLaki' 	=> $this->input->post('prnhDilahirkanLaki'),
			'prnhDilahirkanCewek'	=> $this->input->post('prnhDilahirkanCewek'),
			'dilahirkanHidupLaki' 	=> $this->input->post('dilahirkanHidupLaki'),
			'dilahirkanHidupCewek'	=> $this->input->post('dilahirkanHidupCewek'),
			'kesertaanKB' 			=> $this->input->post('kesertaanKB'),
			'metodekon'				=> $this->input->post('metodekon'),
			'jangkawaktu' 			=> $this->input->post('jangkawaktu'),
			'rencanaPnyAnak'		=> $this->input->post('rencanaPnyAnak'),
			'alasan'				=> $this->input->post('alasan'),
			'tmptPel' 				=> $this->input->post('tmptPel'));
			$this->model->updateKB($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/lanjutan2','refresh');
		}

		function delete_lanjutan2($id){
			$this->model->dropKB('keluargaberencana',$id);
			$this->session->set_flashdata('success', 'Data terhapus!');
			redirect('admin/kb','refresh');
		}

	function lanjutan3(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutan3/';
		$config['total_rows'] 		= $this->model->get_tableeeee('pemb_keluarga')->num_rows();
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
		$data['query'] 				= $this->model->get_all_paginate_join('pemb_keluarga','data_keluarga','kodePK',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Pembangunan Keluarga" ; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutan_3', $data);
		$this->load->view('admin/primary/v_footer');
	}

	function update_lanjutan3($id){
		$datauser = array(
			'NIK' 			=> $this->input->post('NIK'),
			'jawaban' 			=> $this->input->post('jawaban'),
			'makan' 			=> $this->input->post('makan'),
			'berobat'			=> $this->input->post('berobat'),
			'pakaian' 			=> $this->input->post('pakaian'),
			'jenismakanan'		=> $this->input->post('jenismakanan'),
			'ibadah' 			=> $this->input->post('ibadah'),
			'usiasubur'			=> $this->input->post('usiasubur'),
			'tabungan' 			=> $this->input->post('tabungan'),
			'komunikasi'		=> $this->input->post('komunikasi'),
			'kegiatansosial' 	=> $this->input->post('kegiatansosial'),
			'aksesinformasi'	=> $this->input->post('aksesinformasi'),
			'anggotapengurus' 	=> $this->input->post('anggotapengurus'),
			'kegPosyandu' 		=> $this->input->post('kegPosyandu'),
			'kegBKB'			=> $this->input->post('kegBKB'),
			'kegBKR' 			=> $this->input->post('kegBKR'),);
			$this->model->updatePK($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/pembangunanKel','refresh');
		}

	function lanjutan4(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutan4/';
		$config['total_rows'] 		= $this->model->get_tableeeee('pemb_keluarga')->num_rows();
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
		$data['query'] 				= $this->model->get_all_paginate_join('pemb_keluarga', 'data_keluarga','kodePK',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Pembangunan Keluarga" ; 
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutan_4', $data);
		$this->load->view('admin/primary/v_footer');
	}

	function update_lanjutan4($id){
		$datauser = array(
			'NIK' 			=> $this->input->post('NIK'),
			'kegPIKR'			=> $this->input->post('kegPIKR'),
			'kegBKL' 			=> $this->input->post('kegBKL'),
			'kegUPPKS' 			=> $this->input->post('kegUPPKS'),
			'jenisatap' 			=> $this->input->post('jenisatap'),
			'jenisdinding'			=> $this->input->post('jenisdinding'),
			'jenislantai' 			=> $this->input->post('jenislantai'),
			'smbrpenerangan'		=> $this->input->post('smbrpenerangan'),
			'sumberair' 			=> $this->input->post('sumberair'),
			'smbrbhnbakar'			=> $this->input->post('smbrbhnbakar'),
			'mck' 					=> $this->input->post('mck'),
			'tmptTinggal'			=> $this->input->post('tmptTinggal'),
			'luasrumah' 			=> $this->input->post('luasrumah'),
			'jmlOrgTinggal'			=> $this->input->post('jmlOrgTinggal'),);
			$this->model->updatePK($id,$datauser);
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
			redirect('admin/lanjutan4','refresh');
		}

		function delete_lanjutan4($id){
			$this->model->dropPK('pemb_keluarga',$id);
			$this->session->set_flashdata('success', 'Data terhapus!');
			redirect('admin/pembangunanKel','refresh');
		}

	function lanjutanPK(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutanPK/';
		$config['total_rows'] 		= $this->model->get_tableeeee('pemb_keluarga')->num_rows();
		$config['per_page'] 		= '10';
		$config['first_tag_open'] 	= '<li class="page-item">';
		$config['first_tag_close'] 	= '</li>';
		$config['last_tag_open'] 	= '<li class="page-item">';
		$config['last_tag_open'] 	= '</li>';
		$config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
		$data['query'] 				= $this->model->get_all_paginate('pemb_keluarga','kodePK',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Pembangunan Keluarga"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutanPK',$data);
		$this->load->view('admin/primary/v_footer');
	}

	function lanjutanPK_2(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/lanjutanPK/';
		$config['total_rows'] 		= $this->model->get_tableeeee('pemb_keluarga')->num_rows();
		$config['per_page'] 		= '10';
		$config['first_tag_open'] 	= '<li class="page-item">';
		$config['first_tag_close'] 	= '</li>';
		$config['last_tag_open'] 	= '<li class="page-item">';
		$config['last_tag_open'] 	= '</li>';
		$config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
		$data['query'] 				= $this->model->get_all_paginate('pemb_keluarga','kodePK',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Data Pembangunan Keluarga"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_lanjutanPK_2',$data);
		$this->load->view('admin/primary/v_footer');
	}


	function profil(){
		$data['link_admin'] 		= 'active';
		$config['base_url'] 		= base_url() . 'admin/profil/';
		$config['total_rows'] 		= $this->model->get_registrasi('profile')->num_rows();
		$config['per_page'] 		= '10';
		$config['first_tag_open'] 	= '<li class="page-item">';
		$config['first_tag_close'] 	= '</li>';
		$config['last_tag_open'] 	= '<li class="page-item">';
		$config['last_tag_open'] 	= '</li>';
		$config['full_tag_open'] 	= '<div class="pagination pagination-sm m-0 float-right">';
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
		$data['query'] 				= $this->model->get_all_paginate('profile','kodepetugas',$config['per_page'], $this->uri->segment(3));
		$data['title'] 				= "Halaman Profile"; 
		$data['id_anggota'] 		= "KA".str_pad($config['total_rows']+1, 4 ,0,STR_PAD_LEFT);
		$this->load->view('admin/primary/v_header',$data);
		$this->load->view('admin/v_pengaturan_profile',$data);
		$this->load->view('admin/primary/v_footer');
	}	            
}
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */