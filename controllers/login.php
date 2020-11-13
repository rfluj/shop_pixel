<?php
	
	require_once '../configs/config.php';
	header('Content-Type: application/json');
	// $url = $_base_url . 'views/index.php';


	if (isset($_POST['login'])) { # if request for login
		# code...
	}
	elseif (isset($_POST['register'])) { #else if request for register
		if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['re_password']) and isset($_POST['email'])) { # if request has all fields
			// error_reporting(E_ALL);
			$msg = 'mmmsssggg';
			
			// die();
			// exit(0);
			// echo "string";
			$arr = array(
				'msg' => 'ok'
			);


			// send_post_header($url, 'msg=ok');
			// send_get_header($url, '?msg=ok');
			// header('location: ' . $url);
			// header('Content-Type: application/json');
			// echo $msg;
		} else { # else request has not all fields and return please fill all fields
			$result = {
				'status' => 'error',
				'msg'    => 'fields is empty'
			}
			echo json_encode($result);
			exit();
		}
	}
	else { # else request if full 
		$result = {
			'status' => 'error',
			'msg'    => 'bad request'
		};
		echo json_encode($result);
		exit();
	}

?>