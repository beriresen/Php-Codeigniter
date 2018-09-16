<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{	
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
		
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$data["menu"]='home';
		$query=$this->db->query("SELECT COUNT(*) as user_count FROM users ");
		$data["user_count"]=$query->result();
		$query=$this->db->query("SELECT COUNT(*) as subject_count FROM urunler ");
		$data["subject_count"]=$query->result();
		
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_main');
		$this->load->view('admin/_footer');
	}
	public function categories(){

		if($this->session->admin_logged_in["id"] ){	

				
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["menu"]='categories';
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();

			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/categories');
			$this->load->view('admin/_footer');
		}
	}
	public function insert_categories(){
		if($this->session->admin_logged_in["id"] ){
			if($this->session->admin_logged_in["position"]==1){
				$data=array(		
				'category_name' => trim( $this->input->post('category_name'))
				);
				$this->Database_Model->insert_data("categories",$data);
				$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
				redirect(base_url()."admin/home/categories");
			}
		}
	}	
	public function update_categories($category_id){
		if($this->session->admin_logged_in["id"] ){
			if($this->session->admin_logged_in["position"]==1){
				$data=array(
				'category_name' =>trim( $this->input->post('category_name'))
				);

				$this->Database_Model->update_data_extra("categories",$data,$category_id,"category_id");
				$this->session->set_flashdata("sonuc","Güncelleme işlemi başarıyla gerçekleştirildi.");
				redirect(base_url()."admin/home/categories");
			}
		}
	}
	public function delete_categories($id){
		
		if($this->session->admin_logged_in["id"] ){
			if($this->session->admin_logged_in["position"]==1){
				$myid=$this->session->admin_logged_in["id"];
				$myuser_position=$this->Database_Model->selected_userid($this->session->admin_logged_in["id"]);

				if( $myuser_position==1 )
				{
					$query=$this->db->query("DELETE FROM categories WHERE category_id=$id");
					$this->session->set_flashdata("sonuc","Kayıt silinmiştir.");
				}else
					$this->session->set_flashdata("sonuc","Kayıt silme işlemine yetkiniz yoktur.");

				redirect(base_url()."admin/home/categories");
			}
		}
	}
	public function settings()
	{
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["menu"]='settings';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/settings_panel');
			$this->load->view('admin/_footer');
		}
	}
	public function settings_update($id){

		if($this->session->admin_logged_in["id"] ){

			$myuser_position=$this->Database_Model->get_position_type($this->session->admin_logged_in["id"]);
			if($myuser_position==1){
				$data=array(
					'title'			=>$this->input->post('title'),
					'admin_title'	=>$this->input->post('admin_title'),
					'keywords'		=>$this->input->post('keywords'),
					'smtpserver'	=>$this->input->post('smtpserver'),
					'smtpemail'		=>$this->input->post('smtpemail'),
					'smtpport'		=>$this->input->post('smtpport'),
					'password'		=>$this->input->post('password'),
				);
				$this->Database_Model->update_data_extra("settings",$data,$id,"id");
				$this->session->set_flashdata("sonuc","Güncelleme işlemi başarıyla gerçekleştirildi.");
				redirect(base_url()."admin/home/settings");
			}else{
				$this->session->set_flashdata("sonuc","Güncelleme işlemi gerçekleştirilemedi.");
				redirect(base_url()."admin/home/settings");
			}


		}	
	}
	public function about()
	{
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["menu"]='about';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/about_panel');
			$this->load->view('admin/_footer');
		}
	}
	public function about_update($id){
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data=array(
			'about'=>$this->input->post('about')
			);
			$this->Database_Model->update_data_extra("settings",$data,$id,"id");
			$this->session->set_flashdata("sonuc","Güncelleme işlemi başarıyla gerçekleştirildi.");
			redirect(base_url()."admin/home/about");
		}		
	}	
	public function contact()
	{
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["menu"]='contact';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/contact_panel');
			$this->load->view('admin/_footer');
		}	
	}
	public function contact_update($id)
	{
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data=array(
			'contact'=>$this->input->post('contact')
			);
			$this->Database_Model->update_data_extra("settings",$data,$id,"id");
			$this->session->set_flashdata("sonuc","Güncelleme işlemi başarıyla gerçekleştirildi.");
			redirect(base_url()."admin/home/contact");
		}
	}
	public function users()
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
public function urunler(){
		if($this->session->admin_logged_in["id"] ){	
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("
				SELECT * FROM urunler s LEFT JOIN categories c  ON s.u_kategori_id = c.category_id 
				LEFT JOIN urunler u  ON s.user_id = u.id ORDER BY s.urun_id");
			
			$this->db->order_by("urun_id","ASC");
			$data["urunler"]=$query->result();
			$data["menu"]='urunler';

			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urunler');
			$this->load->view('admin/_footer');
		}
	}
	public function mesaj_listesi(){
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$query=$this->db->get("mesajlar");
		$data["mesaj_listesi"]=$query->result();
		
		$data["menu"]='mesajlar';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/mesaj_listesi');
		$this->load->view('admin/_footer');
	}
	public function mesaj_goster(){
		$query=$this->db->query("SELECT * FROM mesajlar ");
		$data["mesaj"]=$query->result();
		
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$data["menu"]='mesajlar';
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/mesaj_goster');
		$this->load->view('admin/_footer');
	}
	public function mesaj_delete($id){
		$this->db->query("DELETE FROM mesajlar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Mesajınz  başarıyla silinmistir.");
		redirect(base_url()."admin/home/mesaj_listesi");
	}
}
