<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

		public function __construct() {
			parent::__construct();
	    $this->load->library('session');
		}

		public function home()
		{
			
			$this->load->view('home');
		}

		public function login()
		{
			$this->load->view('home');
		}

		public function signup()
		{
			$this->load->view('home');
		}

		public function profile()
		{
			if(!$this->session->userdata('logged_in')){
   			 redirect('User/login');
 			 }
			$this->load->view('user_home');
		}

		public function view_profile()
		{
			if(!$this->session->userdata('logged_in')){
   			 redirect('User/login');
 			 }

			$this->load->view('profile');
		}

		public function edit_profile()
		{
			if(!$this->session->userdata('logged_in')){
   			 redirect('User/login');
 			 }

			$this->load->view('edit_profile');
		}


		public function reminder()
		{
			if(!$this->session->userdata('logged_in')){
   			 redirect('User/login');
 			 }

			$this->load->view('reminders');
		}

		public function create_reminder(){
			$this->load->view('create_reminder');
		}
		public function goals()
		{
			$this->load->view('goals');
		}

		public function create_goal(){
			$this->load->view('create_goal');
		}

		public function signUp2(){
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
						'success_code' => '102',
						
				));
				redirect('User/login');
			}
			else{
				echo json_encode(array(
					
						'msg' => 'Error while registering',
						'status' => 'false',
						'error_code' => '103',

					
				));
				redirect('User/signup');
			}
		}

		public function login2()
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
					$user_data = array(
				      'idname' => $username,
				   
				      'logged_in' => true
				    );


				    $this->session->set_userdata($user_data);
					redirect('User/profile');
				}
				//error message
				else {
					echo json_encode(array(
						
							'msg' => 'user not found',
							'status' => 'false',
							'status_code' => '102',
						
					));
					$this->session->set_flashdata('login_failed', 'Login is invalid');
						redirect('User/login');
		    //redirect('user/login');
				}
		}


			//GOALS-------------------------------------------------------------


		public function addGoal(){ 
			
			// $username=$this->input->post('username');
			$username = "najam";
			$subject = $this->input->post('subject');
            $description = $this->input->post('description');
            $completed = $this->input->post('completed');
                
            $this->load->model('Goal_Model');
			if($this->Goal_Model->addGoal($username,$subject,$description,$completed)){
				echo json_encode(array(
					
						'msg' => 'New goal added successfully',
						'success_code' => '200',
					
				));
			}
			else{
				echo json_encode(array(
						'msg' => 'Could not add goal',
						'error_code' => '101',
					
				));
			}
		}
		public function removeGoal(){
			// $username=$this->input->post('username');
			$username = "najam";
            $subject = $this->input->post('subject');
			$this->load->model('Goal_Model');

			if($this->Goal_Model->deleteGoal($username,$subject)){
				echo json_encode(array(
					
						'msg' => 'Goal removed',
						'succes_code' => '200',
					
				));
			}
			else{
				echo json_encode(array(
					
						'msg' => 'Could not remove goal',
						'error_code' => '100',
					
				));
			}
		}
		public function getGoals(){

			// $username=$this->input->post('username');
			$username = "najam";
			$this->load->model('Goal_Model');

			if($this->Goal_Model->getGoals($username)){
				echo json_encode($this->Goal_Model->getGoals($username));
			}
			else{
				echo json_encode(array(
					
						'msg' => 'no added goals',
						'error-code' => '105',
					
				));
			}
		}


		//Reminders-----------------------------------------------------------------



			public function addReminder(){
				// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {


	   //  		// The request is using the POST method
				// 	echo json_encode(array(
				// 		'message' => 'reminder failed to add , bad method',
				// 			'error code' => '100',
				// 		)
				// 	);
				// 	return;

				// }

				$username = $this->input->post('username');
			if($username==null)
			{
				$username =  $this->session->userdata('idname');
			}
				$subject = $this->input->post('subject');
				$time=$this->input->post('time');
				$this->load->model('Reminder_Model');
				if($this->Reminder_Model->userExists($username))
				{
					if($this->Reminder_Model->reminder_insert($username, $subject, $time) ) {
					
					//success message
					echo json_encode(array(
						'message' => 'reminder added',
							'code' => '200',
						)
					);
					redirect('User/reminder');
				}
				//error message
				else {
					echo json_encode(array(
						'message' => 'reminder failed to add',
							'error code' => '100',
						)
					);
		    		redirect('User/reminder');
				}
				}
				else
				{
					echo json_encode(array(
						'message' => 'authentication problem',
							'error code' => '101',
						)
					);
					redirect('User/reminder');
					return;

				}
				
		}

		public function deleteReminder()
			{	
				//if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {

	     // The request is using the POST method
					//echo json_encode(array(
					//	'msg' => 'reminder not deleted, not suitable method',
					//		'error_code' => '100',
					//	)
				//	);
					//return;

				//}
				$username = $this->input->post('username');
			if($username==null)
			{
		$username =  $this->session->userdata('idname');
			}
				$subject = $this->input->post('subject');
			//	$time=$this->input->post('time');
				$this->load->model('Reminder_Model');

				if(($this->Reminder_Model->reminder_delete($username, $subject))) {
					
					//success message
					echo json_encode(array(
						'msg' => 'reminder deleted',
							'success_code' => '200',
						)
					);
				}
				//error message
				else {
					echo json_encode(array(
						'msg' => 'reminder not deleted',
							'error_code' => '101',
						)
					);
		    //redirect('user/login');
				}
			}
	
		public function showReminders()
			{	
				/* if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
					echo json_encode(array(
						'message' => 'BAD METHOD',
							'error code' => '100',
						)
					);

				} */
			$username = $this->input->post('username');
			if($username==null)
			{
			$username =  $this->session->userdata('idname');
			}
				$this->load->model('Reminder_Model');
			
				$result = $this->Reminder_Model->reminder_show($username);
					//success message
				 if($result){
		            echo json_encode($result);
		        } 
		        else{
		        	echo json_encode(array(
						'message' => 'no reminder found',
							'code' => '200',
						)
					);
		           
		        }
					
			}

	}

?>