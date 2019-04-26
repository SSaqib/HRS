<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

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
					
						'mmsg' => 'user registered successfully',
						'true' => 'true',
						'username'=> $username,
						
				));
			}
			else{
				echo json_encode(array(
					
						'msg' => 'Error while registering',
						'status' => 'false',
						
					
				));
			}
		}
	}

?>