
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");//oturum kütüphanesi
		$this->load->database();
		$this->load->model("Database_Model"); //model tanımlama
		$this->load->model("Database_Login_Model");
		
	}
	public function index()
	{
			//$query=$this->db->query("SELECT * FROM categories");
			//$data["categories"]=$query->result();  bende sidebar yok.
			$query=$this->db->query("SELECT * FROM settings");
			$data["veri"]=$query->result();
			$data["sayfa"]="Berire Şen    ||    ";
			
			$query=$this->db->query("SELECT * FROM urunler WHERE grubu='kampanya'"); //urunler tablosunu veri tabanindan çek
			$data["kampanya"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
			
			$sql="SELECT Distinct   kampanya.* FROM kampanya
		LEFT JOIN urunler
		ON kampanya.urun_id=urunler.urun_id 
		     ORDER BY RAND() LIMIT 6";
		$query=$this->db->query($sql);
		$data["kampanya"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
			
			$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND()"); //urunler tablosunu veri tabanindan çek
			$data["urunler"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
	 
       $query=$this->db->query("SELECT *FROM  categories ORDEr BY category_name");
       $data["categories"]=$query->result();
	   

		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('_slider');
		$this->load->view('_contact_panel');
		$this->load->view('_footer'); 
		
		
		
	}
	public function hakkimizda()
	{   
		$query=$this->db->query("SELECT * FROM settings");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Hakkımızda   ||   ";
	
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda');

	}
		public function iletisim()
	{
		$query=$this->db->query("SELECT * FROM settings");
		$data["veri"]=$query->result();
	    $data["sayfa"]="İletişim   ||    ";
	
		$this->load->view('_header',$data);
		$this->load->view('iletisim');

	}
	public function kategori($id){
	  $query= $this->db->query("SELECT * FROM urunler WHERE u_kategori_id=$id");
	   $data["urunler"] =$query->result();
		if($data["urunler"])
		{
			
	       $query=$this->db->query("SELECT *FROM  categories ORDEr BY category_name");
       $data["categories"]=$query->result();
			$query=$this->db->get("settings");
		    $data["veri"]=$query->result();
	        $data["sayfa"]="Kategoriler  ||   ";

		
			$this->load->view('_header',$data);
			$this->load->view('_sidebar'); 
			$this->load->view('urun_cesitleri'); 
			$this->load->view('_footer');
		}else
		echo "kayıt yok";
		//redirect(base_url()."home");
}
	public function bize_yazin()
	{
		$query=$this->db->query("SELECT * FROM settings");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Bize Yazın   ||    ";
	
		$this->load->view('_header',$data);
		$this->load->view('bize_yazin');

	}
	public function mesaj_kaydet(){
		if($this->session->admin_logged_in["id"] ){
			$data=array(		  
			'adsoy' => trim($this->input->post('adsoy')),	  
			'email'    => trim($this->input->post('eposta')),
			'mesaj'    => trim($this->input->post('mesaj')),

			'ip'    => $_SERVER['REMOTE_ADDR']
			);
			$this->Database_Model->insert_data("mesajlar",$data);  
			$this->session->set_flashdata("sonuc","Mesaj gönderme işlemi başarıyla gerçekleştirildi.<br>En kısa sürede sizinle iletişime geçilecektir.");
			redirect(base_url()."home/bize_yazin");
		}
		
}
	
	public function urun_detay($id)
	{
		
		$result = $this->Database_Model->get_urun($id);
		if($result)
		{
			$query=$this->db->get("settings");
		 $data["veri"]=$query->result();//urunler tablosu buraya aktarılıyor Database_Model-> get_urun deki sorgulamadan
			$data["urun"]=$result;//urunleri $urun olarak kullanacam
			$data["sayfa"]="Ürün Detayı    ||    ";
			$data["urun_idd"]=$id;
			//echo $data["urun_idd"];
			
			//GİYİM_resiM tABLLOSUNDAN VERİ CEKME
			$sorgu=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id  ORDER BY RAND() LIMIT 6");//resim galerisi için sorgu resim galerinin urun_idsini urunun $idsine
			//eşitledim
			$data["resimler"]=$sorgu->result(); // urunler_resimleri resimlere gonderdim
		    $query=$this->db->query("SELECT *FROM  categories ORDEr BY category_name");
       		$data["categories"]=$query->result();
			$this->load->view('_header',$data);
			$this->load->view('_urun_detay');
			$this->load->view('_sidebar');    //üründetayın sağındaki SUB CATEGORİES DYE BAŞLAYAN KISIM SIDEBAR
			$this->load->view('_footer');
		
		
		
			//redirect(base_url().'home/sayfayok');
	
	}
	}
	public function  sepete_ekle($urun_id)
	{ 
	//ürün sepet içinde sorgulanır varsa mevcut adet oncekine eklenir
		$data = array(
			'musteri_id'=>$this->session->front_logged_in["id"],
			'urun_id'=>$urun_id,
			'adet'=>$this->input->post('adet')
			//'adi'=>$this->input->post('adi'),
			//'fiyat'=>$this->input->post('fiyat'),
			
		);
		$this->Database_Model->insert_data("sepet",$data);
		$this->session->set_flashdata("sonuc","Ürün sepete eklendi.");		
		redirect(base_url()."home");	

	}
  public function uyeol_paneli()
	{	
		if($this->session->front_logged_in["id"]<1){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["sayfa"]="Üye Ol   ||    ";
			$this->load->view('_header',$data);
			$this->load->view('uyeol_p');
			$this->load->view('_footer'); 
		}else{
			redirect(base_url()."home");
		}
	}
	
	 public function login()
	{	
		if($this->session->front_logged_in["id"]<1){ 

			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$data["sayfa"]="Login ||";
			$this->load->view('_header',$data);
			$this->load->view('login_p');
			$this->load->view('_footer'); 

		}else{
			
			redirect(base_url()."home");
		}
	}
	public function uyeol()
	{
		$data=array(
		
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => 1,
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->insert_data("musteriler",$data);
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."home/kayitlogin");
	}	
	public function kayitlogin()
	{
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$data["sayfa"]="Login Sayfası | ";
		
		$data["menu"]='giris';
		$this->load->view('_header',$data);
		$this->load->view('_uyepanel');
		$this->load->view('_sidebar');
		$this->load->view('login_p');
		$this->load->view('_footer');
	}
	public function login_ol()
	{
		$email=$this->input->post("email",TRUE);
		$sifre=$this->input->post("sifre",TRUE);
		$result=$this->Database_Login_Model->Front_Login($email,$sifre,'musteriler');
		if($result){
			$login_array=array(
			'id'		=> $result[0]->id,
			'adsoy'		=> $result[0]->adsoy,
			'email'		=> $result[0]->email,
			);
			//echo $login_array["id"];
			
			$this->session->set_userdata("front_logged_in",$login_array);
			redirect(base_url()."home");

		}else{
			redirect(base_url()."home/login");
		}
	}

	public function log_out(){
		$this->session->unset_userdata("front_logged_in");
		$this->session->sess_destroy();
		redirect(base_url()."home");		
		
	}
		public function sepeteekle($id)
	{	
		//$tutar=($this->input->post('adet')*$this->input->post('fiyat'));
		$data=array(
		'adet'       => $this->input->post('adet'),
		'urun_id'    =>$id,
		'musteri_id' =>$this->session->logged['id'],
		//'adi' => $this->input->post('adi'),
		//'fiyat' => $this->input->post('fiyat'),
		//'tutar'=>$tutar
		);
		
		$this->Database_Model->insert_data("sepet",$data);
		$this->session->set_flashdata("sonuc","Urun sepete eklendi.");
		redirect(base_url()."home/sepet_listesi");
	}
	public function sepet_listesi()
	{
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM categories");
		$data["categories"]=$query->result();
		
		//$query=$this->db->query("SELECT * FROM sepet WHERE musteri_id =".$this->session->logged['id']);
		$result=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
		$data["urunler"]=$result;
		
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_listesi');
		$this->load->view('_footer');
	}
	public function sepetten_sil($id){
		$this->db->query("DELETE FROM sepet where id=$id");
		
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT * FROM categories");
		$data["categories"]=$query->result();
		$query=$this->db->query("SELECT * FROM sepet WHERE id =".$this->session->logged['id']);
		$data["urunler"]=$query->result();
		
		
		$this->session->set_flashdata("sonuc","Urun sepetten silindi.");
		redirect(base_url()."home/sepet_listesi");
		/*
		$data["altmenu"]="";
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_listesi');
		$this->load->view('_footer');*/
	}	
	public function sepet_odeme()
	{
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM categories ");
		$data["categories"]=$query->result();
		
		$result=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
		$data["urunler"]=$result;
		
		$query=$this->db->query("SELECT * FROM musteriler WHERE id=".$this->session->logged['id']);
		$data["musteri"]=$query->result();
		
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_odeme');
		$this->load->view('_footer');
		
	}
	public function siparisi_tamamla(){
		$banka_onay=1;
		
		if($banka_onay==1){
			$data=array(
			'musteri_id' => $this->session->logged['id'],
			'tutar'      => $this->input->post('tutar'),
			'adsoy'    => $this->input->post('adsoyad'),
			'il'         => $this->input->post('il'),
			'adres'      => $this->input->post('adres'),
			'odemesekli' =>'kredi kartı',
			'odemedurumu'=>'odendi'
			);
			
			$siparisid=$this->Database_Model->insert_data("siparis",$data);			
			$urunler=$this->Database_Model->get_sepet_urun($this->session->logged['id']);
			
			foreach( $urunler as $rs){
				$query=$this->db->query("SELECT * FROM musteriler WHERE id=".$this->session->logged['id']);
				$query=$this->db->query("INSERT INTO siparis_urunler (musteri_id,siparis_id,urun_id,fiyat,adet) 
				VALUES(".$this->session->logged['id'].",".$siparisid.",".$rs->urun_id.",".$rs->fiyat.",".$rs->adet.")");
			}
			
			$query=$this->db->query("DELETE FROM sepet WHERE musteri_id=".$this->session->logged['id']);
			$this->session->set_flashdata("sonuc","Sipariş tamamlanmıştır. ");
			redirect(base_url()."home/sepet_listesi");
		}else{
			
			$this->session->set_flashdata("sonuc","Odeme bilgilerinizde problem var.");
			redirect(base_url()."home/sepet_odeme");
		}
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		$data["categories"]=$query->result();
		
		
		
		
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('sepet_odeme');
		$this->load->view('_footer');
		
	}
	public function musteri_goster($id){
		if($this->session->logged["id"]==$id){
		$sql="SELECT * FROM musteriler WHERE id=$id";
		
		$sorgu=$this->db->query($sql);
		$data["musteri"]=$sorgu->result();

		$query=$this->db->get("categories");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM categories ");
		$data["categories"]=$query->result();
		
		$data["menu"]='home';
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('musteri_goster',$data);
		$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}
	}	
	public function musteri_duzenle($id){
		$data["menu"]='home';
		if($this->session->logged["id"]==$id){
			$sql="SELECT * FROM musteriler WHERE id=$id ";
			$sorgu=$this->db->query($sql);
			$data["musteri"]=$sorgu->result();

			$query=$this->db->get("categories");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();
			
			$this->load->view('_header',$data);
			$this->load->view('_sidebar');
			$this->load->view('musteri_duzenle');
			$this->load->view('_footer');
		}else{
			redirect(base_url()."home/sayfayok");
		}
	}
	public function guncellekayit($id,$email)
	{
		$data=array(
		'adsoy' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('telefon'),
		'sifre' => $this->input->post('sifre'),
		'durum' => $this->input->post('durum'),
		);
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
		redirect(base_url()."home/musteri_goster/".$id."/".$email);
	}
	
}
