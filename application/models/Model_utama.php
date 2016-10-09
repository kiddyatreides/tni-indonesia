<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_utama extends CI_Model {

		public function logistik(){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,B.id_kodam,B.id_fungsi,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND B.status = '1'";
    		return $this->db->query($q);
		}

		public function kodamdetail($id){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota from tb_kodam A where A.id_kodam = '$id'";
    		return $this->db->query($q);
		}

		public function laporankodam($id){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_kodam,B.id_fungsi,B.datetime,B.id_fungsi,B.qty,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND A.id_kodam = '$id' AND B.status = '1'";
    		return $this->db->query($q);
		}

		public function feedback(){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_kodam,B.datetime,B.judul,B.status,B.isi,B.datetime from tb_kodam A, tb_feedback B where A.id_kodam = B.id_kodam order by datetime limit 25";
    		return $this->db->query($q);
		}

		public function inbox(){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_penerima,B.id_pengirim,B.pesan,B.datetime from tb_kodam A, tb_pesan B where A.id_kodam = B.id_pengirim order by datetime limit 25";
    		return $this->db->query($q);
		}

		public function inboxatas(){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_penerima,B.id_pengirim,B.pesan,B.datetime from tb_kodam A, tb_pesan B where A.id_kodam = B.id_pengirim order by datetime limit 3";
    		return $this->db->query($q);
		}

		public function laporankodam2($id){
			$q = "select DISTINCT A.id_kodam,A.nama,A.lat,A.long,A.alamat,A.logo,A.nama_pemimpin,A.kota,B.id_kodam,B.id_fungsi,B.datetime,B.id_fungsi,B.qty,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND A.id_kodam = '$id' order by datetime";
    		return $this->db->query($q);
		}

		public function countlogistik($id){
			$q = "select count(id_kodam) FROM  tb_permintaan WHERE id_kodam = '$id'";
    		return $this->db->query($q);
		}

		public function addMintaLogistik($idfungsi,$qty){
		$q = "insert into tb_permintaan(id_fungsi,qty) values ('$idfungsi','$qty')";
			return $this->db->query($q);
		}

	}
?>
