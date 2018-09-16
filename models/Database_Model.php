<?php 

class Database_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function insert_data($table,$data)
	{
		
		$this->db->insert($table,$data);
		return $this->db->insert_id();

		 
	}	
	public function insert_resim_data($table,$data){
		if($this->db->insert($table,$data)) //dataları ekle
		{	
			echo $this->db->insert_id();
			//return $this->db->insert_id();
		}
	}
	
	public function get_urun($id)
	{
		$sql="SELECT * FROM urunler WHERE urun_id=$id";
	 
		
		$query=$this->db->query($sql);
		if($query->num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	
	}
	
public function update_data($table,$data,$id){
		$this->db->where("urun_id",$id);
		$this->db->update($table,$data);
		return true;
	}
	
	public function kampanya_resim($table,$data,$id){
		$this->db->where("Id",$id);
		$this->db->update($table,$data);
		return true;
	}
	
	public function update_data_extra($table,$data,$id,$idvalue)
	{
		//$table tablo ısmı
		//$data gonderılen data
		//$id functıona gonderılen ıd
		//$idvalue is tablodakı ıd ne ıse o urun_id uye_id onu yazıcan o strıng olcuak dıger tarafta
		//for example diyelım 
		//update_data_extra($urunler,$postEdılenData,$fuctıonaSendId,$tabledakiPRIMARY)
		$result=$this->db->where($idvalue,$id); 
		if($result){
			$this->db->update($table,$data);
			return true;
		}else{
			return false;
		}
		 
	}	
	public function selected_userid($id){
		$query=$this->db->query("SELECT * FROM users WHERE id=$id");
		$data["myuser"]=$query->result();
		$myuser_position=$data["myuser"][0]->position;
		return $myuser_position;

	}	
	public function get_position_type($id){
			$query=$this->db->query("SELECT * FROM users WHERE id=$id");
			$data["myuser"]=$query->result();
			return $data["myuser"][0]->position;

	}
	public function get_kategori($id)
	{
		$sql="SELECT * FROM urunler WHERE u_kategori_id=.$id";
		
			
		$query=$this->db->query($sql);
			return $query->result();
			
	}
		public function get_sepet_urun($id)
	{
		$sql="SELECT urunler.adi as adi, urunler.sfiyat as fiyat, sepet.* FROM sepet 
			LEFT JOIN urunler ON sepet.urun_id=urunler.id
			WHERE sepet.musteri_id=$id";
			
		$query=$this->db->query($sql);
		if($query->num_rows() > 0 ){
			return $query->result();
			
		}else{
			
			return false;
			
		}
		 
	}
} 


?>