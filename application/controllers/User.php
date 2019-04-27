<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

		public function __construct() {
			parent::__construct();
	    //$this->load->library('session');
		}
		public function signUp(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $email = $this->input->post('email');
                    
			
			// echo $username;
			$this->load->model('User_Model');

			if(!(strlen($password)<=8)){
				echo json_encode(array(
					
						'msg' => 'password must be less than 8',
						'status' => 'false',
						'status_code' => '101',

					
				));
			}
			elseif($this->User_Model->createUser($username,$password,$email)){
				echo json_encode(array(
					
						'mmsg' => 'user registered successfully',
						'true' => 'true',
						'username'=> $username,
						'status_code' => '102',
						
				));
			}
			else{
				echo json_encode(array(
					
						'msg' => 'Error while registering',
						'status' => 'false',
						'status_code' => '103',

					
				));
			}
		}

		public function login()
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->load->model('User_Model');

				if($this->User_Model->userExists($username)) {
					//success message
					echo json_encode(array(
						
							'msg' => 'user found successfully',
							'status' => 'true',
							'username'=> $username,
							'status_code' => '101',
						
					));
				}
				//error message
				else {
					echo json_encode(array(
						
							'msg' => 'user not found',
							'status' => 'false',
							'status_code' => '102',
						
					));
		    //redirect('user/login');
				}
		}
	}

?>