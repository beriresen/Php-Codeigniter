<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database();
		$this->load->model("Database_Model"); //model tanımlama
		$this->load->model("Database_Login_Model");
	}
	public function index()
	{
		$this->load->view('admin/login_page');
	}
	
	public function login_ol()
	{
		$email=$this->input->post("email",TRUE);
		$password=$this->input->post("password",TRUE);
		$result=$this->Database_Login_Model->login($email,$password,'users');
		if($result){
			
			
			$login_array=array(
			'id'       => $result[0]->id,
			'username' => $result[0]->username,
			'email'    => $result[0]->email,
			'position' => $result[0]->position,
			'sehir'    => $result[0]->sehir,
			);
			
			echo $login_array["position"];
			if($login_array["position"]==1 || $login_array["position"]==2 ){
				$this->session->set_userdata("admin_logged_in",$login_array);
				redirect(base_url()."admin/home");
			}else{
				$this->session->set_flashdata("sonuc","Giriş yetkiniz yoktur.");
				$this->load->view("admin/login_page");
			}
		}else{
			$this->session->set_flashdata("sonuc","Geçersiz email yada şifre");
			$this->load->view("admin/login_page");
			//redirect(base_url()."admin/kullanicilar");
		}
	}
	public function logout(){
		$this->session->unset_userdata("admin_logged_in");
		$this->session->sess_destroy();
		redirect(base_url()."admin/login");
		
	}
	
}
