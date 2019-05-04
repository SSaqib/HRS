<?php
    class Goal_Model extends CI_Model {

        public function __construct() {
                parent::__construct();
                $this->load->database();
        }

        public function addGoal($username,$subject,$description,$completed){

            $data = array(
                'username' => $username,
                'subject'=>$subject,
                'description' => $description,
                'completed' => $completed,
            );

            try{
                    $query = $this->db->get_where('goal', array(        //checking if goal exists
                        'username' => $username,
                        'subject'=>$subject,
                    ));

                    $count = $query->num_rows(); 

                    if($count)
                    {
                         return false;
                    }
                    else
                    {
                        $this->db->insert('goal', $data);
                        return ($this->db->affected_rows() != 1) ? false : true;
                
                 }
            
            }
            catch(Exception $e)
            {
                return false;
            }

        }

        public function deleteGoal($username,$subject){


                    $query = $this->db->get_where('goal', array(        //checking if goal exists
                        'username' => $username,
                        'subject'=>$subject,
                    ));

                    $count = $query->num_rows(); 

                    if($count)
                    {
                         $this->db->where('username', $username);
                    $this->db->where('subject', $subject);
                    $this->db->delete('goal');

                    return ($this->db->affected_rows() == 0) ? false : true;
                    }
                    else
                    {
                    return false;
                
                 }
           
        }

        public function getGoals($username){
            

            try{
                $this->db->select('subject,description,completed');
                $this->db->from('goal');
                $this->db->where('username', $username);
                
                $query = $this->db->get();

            }
            catch(Exception $e){
                return false;
            }

            return ($query->num_rows() != 0) ? $query->result() : false;
        }
    }
?>