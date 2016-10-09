<?php
//session_start();
		// GET TOKEN
		$url="http://192.168.20.110/auth/login";
		$data = '_format=json&app_id=hackathon&secret_key=Y4NTidF6EJ7nDMytB9Km40kzjsn5mlOS&username=demo&password=demo';
		$header =  array();
		$header[] ='Content-Type: application/x-www-form-urlencoded';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
		$result = curl_exec($ch)or die(curl_error($ch));
		curl_close($ch);
		$data1 = json_decode($result);
		// END GET TOKEN
		// GET FUNGSI LOGISTIK
				$url1="http://192.168.20.110/api/v1/fungsilogistik";
				$header1 =  array();
				$header1[] ='Content-Type: application/x-www-form-urlencoded';
				$header1[] ='Authorization:'.'Bearer '.$data1->token;
				$ch1 = curl_init();
				curl_setopt($ch1, CURLOPT_URL, $url1);
				//curl_setopt($ch, CURLOPT_PROXY, $proxy);
				//curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
				curl_setopt($ch1, CURLOPT_HTTPHEADER,$header1);
				curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch1, CURLOPT_RETURNTRANSFER,TRUE);
				$result1 = curl_exec($ch1)or die(curl_error($ch1));
				curl_close($ch1);
				$data2 = json_decode($result1);
		// END GET FUNGSI LOGISTIK
		// BY: Ugi Ispoyo Widodo
?>


<select>
	<?php
				foreach ($data2->Fungsilogistik as $value) {
				?>
							<option value=""><?php echo $value->namaFungsi ?></option>

			<?php } ?>
</select>