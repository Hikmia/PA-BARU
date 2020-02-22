<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mainmodel','model');
	}
	public function index(){
		if ($this->session->userdata('username')===null) {
			$this->load->view('admin/v_login');
		}else{
			redirect('admin','refresh');
		}
	}
	public function dologin(){

            $username = $this->input->post('username');
            $password = $this->input->post('password');

			$cekuser = $this->model->getUserlogin($username,$password)->result();
			// print_r($cekuser);
					if(empty($cekuser)){
						$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata						$this->session->set_userdata($newdata);
						redirect('login','refresh');

					}else{
						if($password == $cekuser[0]->password){ // Jika password yang diinput sama dengan password yang didatabase
							$session = array(
							  'username'=> $cekuser[0]->username,  // Buat session username
							  'password'=> $cekuser[0]->password, // Buat session password
							  'jabatan'=> $cekuser[0]->jabatan // Buat session jabatan
							);
							
							$this->session->set_userdata($session); // Buat session sesuai $session

							if($this->session->userdata("jabatan") == "3"){
								redirect('admin','refresh');
							}else if($this->session->userdata("jabatan") == "2") {
								redirect('C_puskesmas','refresh');
							}else if($this->session->userdata("jabatan") == "4"){
								redirect('C_penyuluhKB','refresh');
							}else if($this->session->userdata("jabatan") == "5"){
							redirect('C_administrator','refresh');
							}
					}else{
						$this->session->set_flashdata('error', 'Username atau password tidak cocok!');
						redirect('login','refresh');
					}
				}	
	
}
function logout(){
	$this->session->sess_destroy();
	redirect('login','refresh');
}
}
