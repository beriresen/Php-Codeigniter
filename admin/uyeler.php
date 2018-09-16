<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class uyeler extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->load->database();
		$this->load->model("Database_Model"); //model tanımlama

		if(!$this->session->userdata("admin_logged_in")){
			redirect(base_url()."admin/login");
		}
	}
		public function index()
	{
		
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");  //LEFT JOIN citys c ON u.sehir = c.il_id 
			$data["veri"]=$query->result();  //query sosnuclarını veri adı altında $data değişkene atıyorum.
			$query=$this->db->query("SELECT * FROM users u LEFT JOIN citys c ON u.sehir = c.il_id 
									LEFT JOIN positions p ON u.position=p.position_id ORDER BY u.id");//sorgu yaptık sonuçları querye attık.
			$data["users"]=$query->result();
			$data["menu"]='users';
			
			$this->load->view('admin/_header',$data);//$data verilerini view e gönderiyorum   
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/users');
			$this->load->view('admin/_footer');
		}
	}
	public function user_insert_panel(){   

		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->get("citys");
			$data["sehirler"]=$query->result();
			$data["menu"]='users';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/user_insert_panel');
			$this->load->view('admin/_footer');
		}
	}
	public function user_insert(){
		if($this->session->admin_logged_in["id"] ){
			$data=array(		    //form verilerini alıp dizi değişkenine ekliyoruz.
			'username' => trim($this->input->post('username')),	  //username i eşleştir  db ye kaydet	
			'position' => 4,  //ilk etapta üye askıda olur sonra admin onaylar
			'email'    => trim($this->input->post('email')),
			'password' => trim($this->input->post('password')),
			'sehir'    => trim($this->input->post('sehir')),
			);
			$this->Database_Model->insert_data("users",$data);  //db ye kaydet.İnsert kütüphanesi dizi deki $data verilerini bunları eşleştirerek db ye ekleyecek.
			$this->session->set_flashdata("sonuc","Üye ekleme işlemi başarıyla gerçekleştirildi.");
			redirect(base_url()."admin/uyeler");
		}
	}
	public function user_update_panel($id){  //id parametremizi direk aldık
		if($this->session->admin_logged_in["id"] ){
			$myid=$this->session->admin_logged_in['id'];

			$query=$this->db->query("SELECT * FROM users WHERE id=$myid");
			$data["myuser"]=$query->result();
			$myuser_position=$data["myuser"][0]->position;

			$query=$this->db->get("settings");
			$data["veri"]=$query->result(); 
			$query=$this->db->get("citys");//tabloda verinin içine yükledim ve panelde 0.satırdaki veriyi getir dedim.
			$data["sehirler"]=$query->result();
			$data["menu"]='users';

			if($myuser_position==1){
				$query=$this->db->query("SELECT * FROM users u INNER JOIN citys c ON u.sehir = c.il_id  
										INNER JOIN positions p ON u.position=p.position_id WHERE u.id=$id");
				$data["user"]=$query->result();
				$query=$this->db->get("positions");
				$data["positions"]=$query->result();
				if($data["user"][0]->id>0){
					$this->load->view('admin/_header',$data);
					$this->load->view('admin/_sidebar');
					$this->load->view('admin/user_update_panel');  //aldığımız dataları userupdatepanele yolladık
					$this->load->view('admin/_footer');
				}else{
					$this->session->set_flashdata("sonuc"," Güncelleme gerçekleştirilemedi.");
					redirect(base_url()."admin/uyeler");
				}
			}elseif($myid==$id){
				
				$query=$this->db->query("SELECT * FROM users u INNER JOIN citys c ON u.sehir = c.il_id 
										INNER JOIN positions p ON u.position=p.position_id WHERE u.id=$myid");
				$data["user"]=$query->result();
				if($data["user"]){
					$this->load->view('admin/_header',$data);
					$this->load->view('admin/_sidebar');
					$this->load->view('admin/user_update_panel');
					$this->load->view('admin/_footer');
				}else{
					$this->session->set_flashdata("sonuc","Güncelleme yapılamadı.");
					redirect(base_url()."admin/uyeler");
				}
			}else{
				$this->session->set_flashdata("sonuc","Böyle bir kayit bulunamamıştır.");
				redirect(base_url()."admin/uyeler");
			}
		}
	}
	public function user_update($id)  
	{
		if($this->session->admin_logged_in["id"] ){ 
			$myid=$this->session->admin_logged_in["id"];
			$query=$this->db->query("SELECT * FROM users WHERE id=$myid"); 
			$data["myuser"]=$query->result();
			$myuser_position=$data["myuser"][0]->position;
			$data=array(		
				'username' => trim($this->input->post('username')), //form verilerini aldık
				'email'    => trim($this->input->post('email')),
				'password' => trim($this->input->post('password')),
				'position' => $myuser_position,
				'sehir'    => trim($this->input->post('sehir')),
			);
			if($myuser_position==1){
				$data['position']=trim($this->input->post('position'));
			}
            $this->load->model('Database_Model');			
			$this->Database_Model->update_data("users",$data,$id);  //
			if($result){
				$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
				redirect(base_url()."admin/uyeler");
			}else{
				$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi gerçekleştirilemedi.");
				redirect(base_url()."admin/uyeler");
			}
	}
	}
	public function user_delete($id){
		
		if($this->session->admin_logged_in["id"] ){
			$myid=$this->session->admin_logged_in["id"];
			$query=$this->db->query("SELECT * FROM users WHERE id=$myid");
			$data["myuser"]=$query->result();
			$myuser_position=$data["myuser"][0]->position;
			
			if($myuser_position==1){
				$query=$this->db->query("DELETE FROM users WHERE id=$id");
				$this->session->set_flashdata("sonuc","kayıt silinmiştir.");
			}elseif($id==$this->session->admin_logged_in["id"] ){
				$query=$this->db->query("DELETE FROM users WHERE id=$id");
				$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi.");
				$this->session->unset_userdata("admin_logged_in");
				$this->session->sess_destroy();
			}else{
				$this->session->set_flashdata("sonuc","Böyle bir kayıt yoktur.");
			}
			redirect(base_url()."admin/uyeler");
		}
	}
		public function user_view_panel($id	){
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM users u LEFT JOIN citys c ON u.sehir = c.il_id 
			LEFT JOIN positions p ON u.position=p.position_id  WHERE u.id=$id ORDER BY u.id");
			$data["user"]=$query->result();
			$data["menu"]='users';
			if($data["user"]){
				$this->load->view('admin/_header',$data);
				$this->load->view('admin/_sidebar');
				$this->load->view('admin/user_view_panel');
				$this->load->view('admin/_footer');
			}else{
				redirect(base_url()."admin/uyeler");
			
			}
		}
	}
	}