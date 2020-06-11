<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		


		
        // $query['UserName']="demo";
		// $reset_password_code = $query['UserName'] . uniqid();
		// $Reset_Data = array('reset_password_code' => $reset_password_code, "reset_time_limit" => date(ADD_DTF, time()));
     
		//$plainText = '123456';
		//$ciphertext = encrypt($plainText);
		//echo  $ciphertext; exit;
  
	// 	$output = false;

    //     $encrypt_method = "AES-256-CBC";
    //     //pls set your unique hashing key
    //     $secret_key = 'e@c@l@i@c@k';
    //     $secret_iv = 'S3cur3';

    //     // hash
    //     $key = hash('sha512', $secret_key);

    //     // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    //     $iv = substr(hash('sha512', $secret_iv), 0, 16);

    //     //do the encyption given text/string/number
    //     $string='123456';
    //     $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    //     $output = base64_encode($output);
    //    echo  $output; exit;

		//$pass= $this->encrypt->encode(123456);
		//$pass=decryptor(123456);//$this->encrypt->decode('WYJdLJHC5xr90nfHUkyNgp/8sLPMqOOD8oO9h4eGPWOv+JMPZh/Mvo3uhg5mxNUsIdIvXR+o78olVhY2kx1FfA==');
		//echo $pass; exit;
		//$this->load->view('upload_form', array('error' => ' ' ));
		$this->load->view('admin/login.php');
	}

	public function upload(){
	// 	$config['upload_path']          = './images/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size'] = 2000;
    //   //  $config['max_width'] = 1500;
    //   //  $config['max_height'] = 1500;

	// 	$this->load->library('upload', $config);

	// 	if ( ! $this->upload->do_upload('userfile'))
	// 	{
	// 			$error = array('error' => $this->upload->display_errors());

	// 			$this->load->view('welcome_message', $error);
	// 	}
	// 	else
	// 	{
	// 			$data = array('upload_data' => $this->upload->data());

	// 			$this->load->view('welcome_message', $data);
	// 	}
	}

	public function test(){
		echo 'me'; exit;
	}
}
