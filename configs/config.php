
<?php
	
	$_base_url = 'http://127.0.0.1/shop_pixel/';

	function send_post_header($url, $data) {
		// header('location: ' . $url);
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		// curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_REFERER, false);

		$server_output = curl_exec($ch);
		// $redirect = curl_getinfo($ch)[$url];

		curl_close ($ch);
		// return $redirect;

		
		// exit();
	}

	function send_get_header($url, $data) {
		header('location: ' . $url . $data);
		exit();
	}

?>