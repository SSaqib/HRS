<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class API extends CI_Controller {

		public function __construct() {
			parent::__construct();
	    //$this->load->library('session');
		}
		public function signUp(){
			$username = $this->input->post('username');
			
			// echo $username;
			$this->load->model('User_Model');

			if($this->User_Model->createUser($username)){
				echo json_encode(array(
					'message' => array(
						'msg' => 'user registered successfully',
						'code' => '200',
						),
				));
			}
			else{
				echo json_encode(array(
					'message' => array(
						'msg' => 'Error while registering',
						'code' => '101',
					),
				));
			}
		}
	}

?>