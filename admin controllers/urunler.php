<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class urunler extends CI_Controller {
	
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
		public function index(){
		if($this->session->admin_logged_in["id"] ){	
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		
			
			$query=$this->db->query("SELECT  categories.category_name as categoryname, urunler.* FROM urunler
		LEFT JOIN categories
		ON urunler.u_kategori_id=category_id 
		LEFT JOIN users
		ON urunler.user_id=users.Id 
		
		ORDER BY urunler.urun_id");
		
		$this->db->order_by("urun_id","ASC");
		$data["urunler"]=$query->result();
		
		$data["menu"]='urunler';

		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/urunler_listesi');
		$this->load->view('admin/_footer');
		} 
	}
	
	public function kampanya(){
		
		if($this->session->admin_logged_in["id"] ){	
		$query=$this->db->get("settings");
		$data["veri"]=$query->result();
		
			
			$query=$this->db->query("SELECT  urunler.urun_adi as urunadi, kampanya.* FROM kampanya
		LEFT JOIN urunler
		ON kampanya.urun_id=urunler.urun_id 		
		ORDER BY urunler.urun_id");
		
		$data["kampanya"]=$query->result();
		
		$data["menu"]='urunler';

		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kampanya_listesi');
		$this->load->view('admin/_footer');
		} 
	}
		public function urun_goruntuleme_paneli($urun_id){
		if($this->session->admin_logged_in["id"] ){
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM urunler s LEFT JOIN categories c  ON s.u_kategori_id = c.category_id 
				LEFT JOIN users u  ON s.user_id = u.id ORDER BY s.urun_id");
			$data["urunler"]=$query->result();
			$data["menu"]='urunler';
			if($data["urunler"]){
				$this->load->view('admin/_header',$data);
				$this->load->view('admin/_sidebar');
				$this->load->view('admin/urun_goruntuleme_paneli');
				$this->load->view('admin/_footer');
			}else{
				$this->session->set_flashdata("sonuc","Böyle bir kayıt yoktur.");
				redirect(base_url()."admin/urunler");

			}
		}
	}
	public function urun_ekleme_paneli(){
		if($this->session->admin_logged_in["id"] ){	
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();
			$data["menu"]='urunler';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urun_ekleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
	
	
	public function kampanya_ekleme_paneli(){
		if($this->session->admin_logged_in["id"] ){	
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();
			$data["menu"]='urunler';
			
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/kampanya_ekleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
	
	public function urun_ekle(){
		if($this->session->admin_logged_in["id"] ){
			$data=array(
			'u_kategori_id' 	=>trim( $this->input->post('category_id')),
			'urun_adi' 	=>trim( $this->input->post('urun_adi')),
			'Resim' 	=>trim( $this->input->post('Resim')),
			'fiyat' 	=>trim( $this->input->post('fiyat')),
			'urun_icerik'	=>trim( $this->input->post('urun_icerik')),
			'user_id'	=>trim($this->session->admin_logged_in["id"]),
			
			);

			$this->Database_Model->insert_data("urunler",$data);
			$this->session->set_flashdata("sonuc","Güncelleme işlemi başarıyla gerçekleştirildi.");
			redirect(base_url()."admin/urunler");
		}
	}

	public function resim_ekle(){
		if($this->session->admin_logged_in["id"] ){	
		
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();
			$data["menu"]='urunler';
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urun_resim_ekleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
	public function urun_resim_ekleme_paneli($id){
		if($this->session->admin_logged_in["id"] ){	
				
			$query=$this->db->get("settings");
			$data["veriler"]=$query->result();
			

			$data["menu"]='urunler';
			$data["urun_id"]=$id;

			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urun_resim_ekleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
	
	public function kampanya_resim_ekleme_paneli($id){
		if($this->session->admin_logged_in["id"] ){	
				
			$query=$this->db->get("settings");
			$data["veriler"]=$query->result();
			

			$data["menu"]='kampanya';
			$data["urun_id"]=$id;

			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/kampanya_resim_ekleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
	
	public function kampanya_resim_upload($id)
	{
				$config['upload_path']='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 300;
                $config['max_width']            = 1950;
                $config['max_height']           = 1200;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata("sonuc","Upload Hatası Resminizin boyutu büyük en fazla 1200*1200 pixel resim girebilirsiniz");
						redirect(base_url()."admin/urunler/kampanya_resim_ekleme_paneli/$id");
						
                }
                else
                {
					$data=array(
						'Resim'=>$this->upload->data('file_name')
					);
					$this->Database_Model->kampanya_resim("kampanya",$data,$id);
					
					$this->session->set_flashdata("sonuc","Resim upload edildi");
					redirect(base_url()."admin/urunler/kampanya/");
                      

                       
                }
	}
	
		public function resim_upload($id)
	{
				$config['upload_path']='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 300;
                $config['max_width']            = 1950;
                $config['max_height']           = 1200;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata("sonuc","Upload Hatası Resminizin boyutu büyük en fazla 1200*1200 pixel resim girebilirsiniz");
						redirect(base_url()."admin/urunler/urun_resim_ekleme_paneli/$id");
						
                }
                else
                {
					$data=array(
						'Resim'=>$this->upload->data('file_name')
					);
					$this->Database_Model->update_data("urunler",$data,$id);
					
					$this->session->set_flashdata("sonuc","Resim upload edildi");
					redirect(base_url()."admin/urunler");
                      

                       
                }
	}
	//resim ekleme kaydetme sonu
	
	public function resim_ekle_kaydet($urun_id)
	{
		if($this->session->admin_logged_in["id"] ){	
		
		
				$config['upload_path']='./uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 600;
                $config['max_width']            = 1200;
                $config['max_height']           = 1200;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						$this->session->set_flashdata("sonuc","Upload Hatası".$error);
						redirect(base_url()."admin/urunler/galeri_yukle/$urun_id");
						
                }
                else
                {
					$data=array(
					'urun_id'=>$urun_id,
					'Resim' => $this->upload->data('file_name')
					);
					$this->Database_Model->insert_resim_data("urunler_resim",$data);
					
					$this->session->set_flashdata("sonuc","Resim upload edildi");
					redirect(base_url()."admin/urunler/galeri_yukle/$urun_id");
                      

                       
                }
		
		
		


	  }
	}
		public function urun_guncelleme_paneli($urun_id){
		if($this->session->admin_logged_in["id"] ){	
			$query=$this->db->get("settings");
			$data["veri"]=$query->result();
			$query=$this->db->query("SELECT * FROM urunler s LEFT JOIN categories c  ON s.u_kategori_id = c.category_id  LEFT JOIN users u  ON s.user_id = u.id WHERE s.urun_id=$urun_id");
			$data["urunler"]=$query->result();
			$query=$this->db->query("SELECT * FROM categories");
			$data["categories"]=$query->result();
			
			$data["menu"]='urunler';
			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urun_guncelleme_paneli');
			$this->load->view('admin/_footer');
		}
	}
		public function urun_guncelle($urun_id){
		if($this->session->admin_logged_in["id"] ){
			$data=array(
			'u_kategori_id' 	=>trim( $this->input->post('u_kategori_id')), 
			'urun_adi'    		=>trim( $this->input->post('urun_adi')),
			'urun_icerik'		=>trim( $this->input->post('urun_icerik')),
			'grubu'				=>trim( $this->input->post('grubu')),
			'user_id'			=>$this->session->admin_logged_in["id"],
			'fiyat' 			=>trim( $this->input->post('fiyat'))
			);

			$result=$this->Database_Model->update_data_extra("urunler",$data,$urun_id,"urun_id");
			if($result){
				
				$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi.");
				redirect(base_url()."admin/urunler");
			}else{
				echo "tamamlanamadı";
				$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi gerçekleştirilemedi.");
				redirect(base_url()."admin/urunler");
			}
		}
	}
		public function urun_silme($urun_id){
		
		if($this->session->admin_logged_in["id"] ){
			$myid=$this->session->admin_logged_in["id"];
			$myuser_position=$this->Database_Model->get_position_type($this->session->admin_logged_in["id"]);

			$query=$this->db->query("SELECT * FROM urunler WHERE urun_id=$urun_id");
			$data["urunler"]=$query->result();
			if($this->session->admin_logged_in["id"]==$data["urunler"][0]->user_id || $myuser_position==1 )
			{
				$query=$this->db->query("DELETE FROM urunler WHERE urun_id=$urun_id");
				$this->session->set_flashdata("sonuc","Kayıt silinmiştir.");
			}else
				$this->session->set_flashdata("sonuc","Kayıt silme işlemine yetkiniz yoktur.");

			redirect(base_url()."admin/urunler");
		}
	}

		public function galeri_yukle($id){
		if($this->session->admin_logged_in["id"] ){	
			$query=$this->db->get("settings");
			$data["veriler"]=$query->result();
			$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
			$data["urunler_resim"]=$query->result();
			$data["menu"]='urunler';
			$data["urun_id"]=$id;
			$data["Resim"]='urunler_resim';
					$data["id"]=$id;

			$this->load->view('admin/_header',$data);
			$this->load->view('admin/_sidebar');
			$this->load->view('admin/urunler_galeri_yukle',$data);
			$this->load->view('admin/_footer');
			
		}
	}
	
	public function galeri_kaydet($id)
	{
		if($this->session->admin_logged_in["id"] ){	
		$data["id"]=$id;

			
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;
			$config['max_width']            = 1024;
			$config['max_height']           = 1024;
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('Resim')) //eğer hata varsa
			{
	              $error = array('error' => $this->upload->display_errors());
			      $this->session->set_flashdata("sonuc","Resim istenen kriterlere uygun değil.");
				redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
			}
			else //hata yoksa
			{
				 //>>>>>>>>>>><veritabanı kayıt>>>>>>>>
				 $update_data=$this->upload->data();
				 $data=array(
				    'urun_id'=> $id,
					'Resim' => $this->upload->data('file_name')
					
				);
			    $this->Database_Model->insert_data("urunler_resim",$data);
				//>>>>>veitabanı kayıt bitti>>>>>>>>>
			      $this->session->set_flashdata("sonuc","Resim galeriye yüklendi");
				redirect(base_url()."admin/urunler/galeri_yukle/".$id);
			}
		
}
	}
}
	
