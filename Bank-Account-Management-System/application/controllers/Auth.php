<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('Auth/login');
	}

	public function register()
	{
		$this->load->view('Auth/register');
	}

	public function registration_form()
	{
		$this->auth_model->register_user();
	}

	public function login_form()
	{
		$this->auth_model->login_user();
	}

	public function home(){
		$this->load->view('Auth/home');
	}
	
	function __construct()
        {
            parent::__construct();
            $this->load->model('auth_model');
        }
	#Adding Account Details
	public function add_account()
	{
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$bankName=$this->input->post('bankName');
				$branchName=$this->input->post('branchName');
				$acNumber=$this->input->post('acNumber');
				$data=array(
					'bank_name'=>$bankName,
					'branch'=>$branchName,
					'account_number'=>$acNumber,
				);

				$status=$this->auth_model->insertAccount($data);
				if($status==true){
					$this->session->set_flashdata('success','successfully submitted');
					
				}else{
					$this->session->set_flashdata('error','Error');
				}
				
			}
		    $this->load->view('Auth/add_account');
	}

	public function view_account(){

		$data['bank_accounts'] = $this->auth_model->getAccounts();
		$this->load->view('Auth/view_account',$data);
	}

	public function delete_account(){
		$data['bank_accounts'] = $this->auth_model->getAccounts();
		$this->load->view('Auth/delete_account',$data);
	}

	function delete($id){
		if(is_numeric($id)){
			$status=$this->auth_model->deleteAccount($id);
			if($status==true){
				$this->session->set_flashdata('success','successfully updted');
				redirect(base_url('Auth/delete_account'));
			}else{
				$this->session->set_flashdata('error','Error');
			}
	}
}
}
