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
                $hashed_pass = password_hash($password,PASSWORD_DEFAULT);
                $data=array(
                    "name"=>$this->input->post('name'),
                    "email"=>$this->input->post('email'),
                    "password"=>$hashed_pass
                );

                $this->db->insert('users',$data);
                $this->session->set_flashdata('suc','Successfully Registered..');
                redirect(site_url());
            }
        }

        public function login_user(){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $password = password_verify($password, $user->password);

            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $query=$this->db->get('users');
            $find_user=$query->num_rows($query);

            if($find_user>0){
                $this->session->set_flashdata('suc','You are logged');
                redirect('Auth/home');
            }else{
                $this->session->set_flashdata('warning','Incorrect Authentication!!!');
                redirect(site_url());
            }
        }


        function insertAccount($data){
            $this->db->insert('bank_accounts',$data);

            if($this->db->affected_rows()>=0){
                return true;

            }
            else{
                return false;
            }
        }

    }
?>