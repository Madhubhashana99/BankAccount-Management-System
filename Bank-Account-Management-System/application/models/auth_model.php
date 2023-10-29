<?php
    class auth_model extends CI_Model{

        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function register_user(){

            $password=$this->input->post('password');
            $con_password=$this->input->post('passCon');

            if($password != $con_password){
                $this->session->set_flashdata('worng','The password are not equal!');
                redirect('Auth/register');
            }
            else{
                $data=array(
                    "name"=>$this->input->post('name'),
                    "email"=>$this->input->post('email'),
                    "password"=>$password
                );

                $this->db->insert('users',$data);
                $this->session->set_flashdata('suc','Successfully Registered..');
                redirect(site_url());
            }
        }


    }
?>