<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_utama extends CI_Model {

		public function logistik(){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,B.id_kodam,B.id_permintaan,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND B.status = '1'";
    		return $this->db->query($q);
		}

		public function kodamdetail($id){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota from tb_kodam A where A.id_kodam = '$id'";
    		return $this->db->query($q);
		}

		public function laporankodam($id){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_kodam,B.id_permintaan,B.datetime,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND A.id_kodam = '$id'";
    		return $this->db->query($q);
		}

		public function countlogistik($id){
			$q = "select count(id_kodam) FROM  tb_permintaan WHERE id_kodam = '$id'";
    		return $this->db->query($q);
		}

	}
?>
