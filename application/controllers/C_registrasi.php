<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mainmodel','model');

		$this->load->library('form_validation');
	}

	public function doregistrasi(){
		$this->form_validation->set_rules('namalengkap','Nama Lengkap','required');
            $this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('jabatan','Jabatan','required');

            if ($this->form_validation->run() === false) {
                $this->session->set_flashdata('error', 'Data tidak sesusai');
                $this->load->view('admin/v_registrasi');
            }
            else {
                $nl = $this->input->post('namalengkap');
				$fn = $this->input->post('username');
				$un = $this->input->post('email');
				$jk = $this->input->post('jk');
				$pw = $this->input->post('password');
				$jb = $this->input->post('jabatan');
				$np = $this->input->post('nip');
				$nkk = $this->input->post('NoKK');
				$nk = $this->input->post('NIK');
				$ds = $this->input->post('desa');
				
				$datauser = array(
					'email'		=>$un,
					'jk'		=>$jk,
					'namalengkap'	=>$nl,
					'jabatan'		=>$jb
				);
				$data = array('email'=>$un,
					'namalengkap'	=>$nl
				);	
				$this->model->insert('profile',$datauser);

				$user = $this->model->getUser($data)->result();
				$kp = $user[0]->kodepetugas;
				$datauser2 = array(
					'username'		=>$fn,
					'password'		=>$pw,
					'jabatan'		=>$jb,
					'kodepetugas'	=>$kp
			    );				
				$this->model->insert('t_user',$datauser2);

				$user = $this->model->getUser($data)->result();
				$kp = $user[0]->kodepetugas;
				$datauser3 = array(
					'nip'			=>$np,
					'kodepetugas'	=>$kp
				);
				$this->model->insert('p_puskesmas',$datauser3);

				$user = $this->model->getUser($data)->result();
				$kp = $user[0]->kodepetugas;
				$datauser4 = array(
					'NoKK'			=>$nkk,
					'desa'			=>$ds,
					'kodepetugas'	=>$kp
				);
				$this->model->insert('kaderppkbd',$datauser4);

				$user = $this->model->getUser($data)->result();
				$kp = $user[0]->kodepetugas;
				$datauser5 = array(
					'NIK'			=>$nk,
					'kodepetugas'	=>$kp
				);
				$this->model->insert('penyuluhkb',$datauser5);
				$this->load->view('admin/v_login');
            }
		}

	function forgot_password(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$email = $this->db->get_where('profile', array('email' => $this->input->post('email')))->row_array();

		if ($this->form_validation->run() == false){
			$data['title'] = 'Forgot Password Page';
			$this->load->view('admin/v_forgotPassword', $data);
			$this->load->view('admin/primary/v_footer');
		}else{
			if(!$email){
				$this->session->set_flashdata('error', '<div class="alert bg-warning" 
				role="alert"><em class= Email is not valid!</div>');
			
				redirect('C_registrasi/forgot_password');
			}else{
				$this->sendemail();
			}
		}
	}

	function sendemail(){
		$config =[
			'protocol'	=> 'smtp',
			'useragent'	=> 'CodeIgniter',
			'smtp_host'	=> 'ssl://smtp.googlemail.com',
			'smtp_user'	=> 'yuliahikmia5@gmail.com',
			'smtp_pass'	=> 'hkm12345',
			'smtp_port'	=> '465',
			'charset'	=>  'iso-8859-1',
		];
		$C_registrasi = (rand(1, 1000000));

		$this->load->library('email', $config);
		$this->email->initialize($config);
		$this->email->from('yuliahikmia5@gmail.com', 'penyuluhkb');
		$this->email->to($this->input->post('email'));
		$this->email->subject('Pengaturan Ulang Kata Sandi');
		$this->email->message($C_registrasi. 'merupakan kode pemulihan akun anda');

		if($this->email->send()){
			$codeauth = array(
				'email' => $this->input->post('email'),
				'codeauth'=> $C_registrasi
			);

			$this->session->set_userdata($codeauth);

			$this->authentik();
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
	}

	function authentik(){
		$this->form_validation->set_rules('code', "Code Authentik", 'trim|reuired|numeric');
		$codeauth = $this->session->userdata('codeauth');

		if($this->form_validation->run()== false){
			$data['title'] = 'Code Authentikasi';
			$this->load->view('admin/v_autentifikasi', $data);
			$this->load->view('admin/primary/v_footer');
		}else{
			if ($this->input->post('code') !== $codeauth){
				$this->session->set_flashdata('message', '<div class="alert bg-warning" role="alert"><em class=Something is Wrong!</div>' );
				redirect('C_registrasi/authentik');
			}else{
				$this->Setnewpassword();
			}
		}
	}

	function Setnewpassword(){
		if(!$this->session->userdata('email')){
			redirect('C_registrasi');
		}

		$this->form_validation->set_rules(
			'NewPassword',
			'New Password',
			'required|trim|min_lenght[6]|matches[RepeatPassword]',
			['matches' => 'password does not match !', 'min_length' => 'Password to short!']
		);
		$this->form_validation->set_rules('RepeatPassword','Repeat Password', 'required|trim|matches[NewPassword]');

		if ($this->form_validation->run()==false){
			$data['title'] = 'aweawe';
			$this->load->view('admin/v_newpassword', $data);
			$this->load->view('admin/primary/v_footer');
		}else{
			$email = $this->session->userdata('email');

			$this->db->set('password', $this->input->post('NewPassword'));
			$this->db->where('email', $email);
			$this->db->update('profile');

			$this->session->set_flashdata('message', 
			'<div class="alert bg-warning" role="alert"><em class=Succes Set New Password!</div>' );

			$this->session->unset_userdata('email');
			$this->session->unset_userdata('codeauth');

			redirect('C_registrasi');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */