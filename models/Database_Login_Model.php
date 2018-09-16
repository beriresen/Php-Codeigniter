<?php 

class Database_Login_Model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	public function Login($email,$password,$table)
	{
		$this->db->select(" * ");
		$this->db->from($table);
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$this->db->limit(1);
		
		$query=$this->db->get();
		if($query->num_rows() >0 ){
			return $query->result();
		}else{
			return false;
		}
		 
	}	

	public function Front_Login($email,$password,$table)
	{
		$this->db->select(" * ");
		$this->db->from($table);
		$this->db->where("email",$email);
		$this->db->where("sifre",$password);
		$this->db->limit(1);
		
		$query=$this->db->get();
		if($query->num_rows() >0 ){
			return $query->result();
		}else{
			return false;
		}
		 
	}	
	
	
} 

?>