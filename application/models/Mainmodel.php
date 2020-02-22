<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model {

	function getUserlogin($username,$password){
		$data = array('username'=> $username, 'password' => $password);
		$this->db->where($data);
		
		return $this->db->get('t_user');
	}

	function getUserPuskesmas($NIP){
		$data = array('NIP'=> $NIP);
		$this->db->where($data);
		
		return $this->db->get('p_puskesmas');
	}

	function getUserKader($NoKK){
		$data = array('NoKK'=> $NoKK);
		$this->db->where($data);
		
		return $this->db->get('kaderppkbd');
	}

	function getUserPenyuluh($NIK){
		$data = array('NIK'=> $NIK);
		$this->db->where($data);
		
		return $this->db->get('penyuluhkb');
	}

	public function getUser($data){
		return $this->db->get_where('profile',$data);
		
	}

	public function getPenyuluh(){
		return $this->db->get_where('penyuluhkb');
		
	}

	public function get_kelolaUser(){
		return $this->db->get_where('profile');
		
	}

	public function getKader(){
		return $this->db->get_where('kaderppkbd');
		
	}

	public function getPuskesmas(){
		return $this->db->get_where('p_puskesmas');
		
	}

	public function getTribina(){
		return $this->db->get_where('datatribina');
		
	}

	public function getData_Keluarga(){
		return $this->db->get_where('data_keluarga');
	}

	function dologin($username,$password){
		$data = array('username' => $username,
						'password' => $password);
		return $this->db->get_where('t_user',$data);
	}

	function get_ket(){
		return $this->db->get('keterangan');
	}

	function get_registrasi(){
		return $this->db->get('profile');
	}

	function get_keterangan(){
		return $this->db->get('keterangan');
	}

	function get_table(){
		return $this->db->get("layanan");
	}

	function get_aseptor(){
		return $this->db->get("data_aseptor");
	}

	function get_BKL(){
		return $this->db->get("binakeluargalansia");
	}

	function get_tablee(){
		return $this->db->get("datatribina");
	}

	function get_tableee(){
		return $this->db->get("keluargaberencana");
	}

	function get_tableeee(){
		return $this->db->get("data_keluarga");
	}

	function get_tableeeee(){
		return $this->db->get("pemb_keluarga");
	}

	function get_tab(){
		return $this->db->get("input_informasi");
	}  
	
	function get_dokumentasi(){
		return $this->db->get("fotokegiatan");
	} 

	function insertt($data){
		$this->db->insert("fotokegiatan", $data);
	} 
	
	function get_BKB(){
		return $this->db->get("binakeluargabalita");
	}   


	function get_where($table, array $where){
		return $this->db->where($where)->get($table);
	}

    function get_all_paginate($table,$order_by,$num, $offset) {
        $this->db->order_by($order_by, "ASC");
        $query = $this->db->get($table, $num, $offset);
        return $query->result();
	}
	
	function get_all_paginate_join($table1,$table2,$order_by,$num, $offset) {
		$this->db->order_by($order_by, "ASC");
		$this->db->join($table2, 'kd_dataKeluarga');
        $query = $this->db->get($table1, $num, $offset);
        return $query->result();
	}
    function get_all_paginate_book($table,$order_by,$num, $offset) {
        $this->db->order_by($order_by, "ASC")->where('jumlah >',0);
        $query = $this->db->get($table, $num, $offset);
        return $query->result();
    }

    function drop($table,$id){
		$this->db->where("kd_dataKeluarga",$id);
		$this->db->delete($table);
	}

	function dropKB($table,$id){
		return $this->db->where("kodeKB",$id)->delete($table);
	}

	function dropInfo($table,$id){
		return $this->db->where("id_info",$id)->delete($table);
	}

	function dropLayanan($table,$id){
		return $this->db->where("kodeLKB",$id)->delete($table);
	}

	function dropFotoKegiatan($table,$id){
		return $this->db->where("id_foto",$id)->delete($table);
	}
	
	function dropTribina($table,$id){
		return $this->db->where("BKR",$id)->delete($table);
	}

	function dropBKB($table,$id){
		return $this->db->where("BKB",$id)->delete($table);
	}

	function dropAseptor($table,$id){
		return $this->db->where("id_aseptor",$id)->delete($table);
	}

	function dropPK($table,$id){
		return $this->db->where("kodePK",$id)->delete($table);
	}

    function insert($table,$data){
    	return $this->db->insert($table,$data);
	}

    function getLayanan($where){
		return $this->db->query("SELECT DISTINCT kodeLKB, namaIstri, alkon, alamat, aseptorKB, guladarah, 
		tensidarah FROM layanan JOIN kaderppkbd JOIN p_puskesmas RIGHT OUTER JOIN data_aseptor WHERE kodeLKB =".$where);
	}

	function updateKB($id,$data){
		$this->db->where("kodeKB",$id);
		return $this->db->update("keluargaberencana",$data);		
	}

	function tampil_gambar($k){ 
		$query = $this->db->query("SELECT * FROM fotokegiatan WHERE id_foto='$k'");
		foreach ($query->reult_array() as $ok){
			$image = $ok['foto'];
		}
		echo $image;
	}

	function update_cekDataKeluarga($id,$data){
		$this->db->where("kd_dataKeluarga",$id);
		return $this->db->update("data_keluarga",$data);		
	}

	function update_userr($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("t_user",$data);		
	}

	function dropUser($table,$id){
		return $this->db->where("id",$id)->delete($table);
	}

	function updateBKB($id,$data){
		$this->db->where("BKB",$id);
		return $this->db->update("binakeluargabalita",$data);		
	}
	function updateBKL($id,$data){
		$this->db->where("id_BKL",$id);
		return $this->db->update("binakeluargalansia",$data);		
	}

	function updateFotoKegiatan($id,$data){
		$this->db->where("id_foto",$id);
		return $this->db->update("fotokegiatan",$data);		
	}

	function updatePK($id,$data){
		$this->db->where("kodePK",$id);
		return $this->db->update("pemb_keluarga",$data);		
	}

	function updateInfo($id,$data){
		$this->db->where("id_info",$id);
		return $this->db->update("input_informasi",$data);		
	}

    function updateLayanan($id,$data){
		$this->db->where("kodeLKB",$id);
		return $this->db->update("layanan",$data);		
	}

	function update($id,$data){
		$this->db->where("kd_dataKeluarga",$id);
		return $this->db->update('data_keluarga',$data);		
	}

	function updateTribina($id,$data){
		$this->db->where("BKR",$id);
		return $this->db->update("datatribina",$data);		
	}
	
	function get_autocomplete($table,$like,$search_data){
		$this->db->where($like, $search_data);
		return $this->db->get($table, 10)->result();
	}

	function get_autocomplete_book($table,$like,$search_data){
		$this->db->where($like, $search_data)->where('jumlah >',0);
		return $this->db->get($table, 10)->result();
	}

	public function get_data(){
		$where = array('status' => 'Approved');
		return $this->db->get_where('datatribina', $where);
	}

	public function getData_tanggal(){
		$where = array('status' => 'Approved');
		return $this->db->get_where('Berlaku', $where);
	}

	public function hapus_data($where){
		$this->db->delete('datatribina', $where);
	}
	
	public function get_tanggal($where){
		return $this->db->get('input_informasi', $where);
	}

	public function get_data_informasi(){
		$where = array('status' => 'Diterima');
		return $this->db->get_where('input_informasi', $where);
	}

	public function update_data($where, $data){
		$this->db->where($where);
		$this->db->update('datatribina', $data);
	}

	public function updatedata_informasi($where, $data){
		$this->db->where($where);
		$this->db->update('input_informasi', $data);
	}

	public function getdata_BKB(){
		$where = array('status' => 'Approved');
		return $this->db->get_where('binakeluargabalita', $where);
	}

	public function getdata_layanan(){
		$where = array('status' => 'Approved');
		return $this->db->get_where('layanan', $where);
	}

	public function hapusdata_BKB($where){
		$this->db->delete('binakeluargabalita', $where);
	}

	public function hapusdata_BKL($where){
		$this->db->delete('binakeluargalansia', $where);
	}

	public function hapusdata_layanan($where){
		$this->db->delete('layanan', $where);
	}

	public function updatedata_BKB($where, $data){
		$this->db->where($where);
		$this->db->update('binakeluargabalita', $data);
	}

	public function updatedata_layanan($where, $data){
		$this->db->where($where);
		$this->db->update('layanan', $data);
	}

	public function updatedata_BKL($where, $data){
		$this->db->where($where);
		$this->db->update('binakeluargalansia', $data);
	}

	public function joinData(){
		return $this->db->query("SELECT * FROM data_keluarga JOIN keluargaberencana JOIN pemb_keluarga ");
	}

	function statistik(){
        $query = $this->db->query("SELECT desa,AVG(umurIstri) as umurIstri from layanan GROUP BY desa");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
		}
	}

	function statistik_aseptor(){
        $query = $this->db->query("SELECT alkon,AVG(umurIstri) as umurIstri from layanan GROUP BY alkon");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
		}
	}
		
	function join_tiga_tabel($keyword){
		// $this->db->select('*');
		// $this->db->from('data_keluarga');
		// $this->db->join('keluargaberencana','data_keluarga.kd_dataKeluarga=keluargaberencana.kd_dataKeluarga');
		// $this->db->join('pemb_keluarga','keluargaberencana.kd_dataKeluarga=pemb_keluarga.kd_dataKeluarga');
		// $this->db->like('NIK',$keyword);
		return $this->db->query("SELECT * FROM data_keluarga 
		JOIN keluargaberencana ON data_keluarga.kd_dataKeluarga = keluargaberencana.kd_dataKeluarga
		JOIN pemb_keluarga ON keluargaberencana.kd_dataKeluarga = pemb_keluarga.kd_dataKeluarga ");
		$this->db->like('NIK',$keyword);
		$query = $this->db->get();
      	return $query->result();
		  
	}

	function dropDK($table,$id){
		$this->db->where("kd_dataKeluarga","kodeKB","kodePK",$id);
		$this->db->delete($table);
	}
	

	// public function get_NIK($keyword){
	// 		$this->db->select('*');
	// 		$this->db->from('datakeluarga');
	// 		$this->db->like('NIK',$keyword);
	// 		return $this->db->get()->result();
	// 	}

	public function ambil_detail_akun($username){
		return $this->db->get_where('profile', array('username' => $username), 1);
	}

	// Input data ke database
	public function input_dataaa($data, $table){
		$this->db->insert($table, $data);
	}

	// update akun pengurus
	public function edit_dataaa($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_dataaa($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	// hapus akun pengurus
	public function hapus_dataaa($where, $table){
		$this->db->delete($table, $where);
	}

}
