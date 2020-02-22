<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_halamanutama extends CI_Controller {
    
function __construct(){
		parent::__construct();
		$this->load->model('Mainmodel','model');

	}
	
	function halaman(){
            $this->load->view('admin/primary/v_halamanAwal');
        }
    
	}