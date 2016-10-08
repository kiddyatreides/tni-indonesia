<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_utama extends CI_Model {

		public function logistik(){
			$q = "select A.id_kodam,A.nama,A.lat,A.long,A.logo,B.id_kodam,B.id_permintaan,B.status from tb_kodam A, tb_permintaan B where A.id_kodam = B.id_kodam AND B.status = '1'";
    		return $this->db->query($q);
		}


	}
?>
