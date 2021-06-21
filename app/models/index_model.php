<?php

class Index_Model extends Model 
{
	public function __construct()
	{
		parent::__construct();
               
	}
        public function uruntipiListele($id=null) {
            //   return $this->db->select("SELECT * FROM 'users' ORDER BY id DESC");
            //   $sth = $this->db->query("SELECT * FROM users");;
            //   $dizi = $sth->fetchAll();
           //return $dizi;
           // return $this->db->select("users","id>2");
            
            
          //  $sql="SELECT * FROM users WHERE id= :id";
          //  $params = array(":id" => $id);
          //  return $this->db->select($sql,$params);
            $dizi=$this->db->select("SELECT * FROM uruntipi");
            return $dizi;
              // $sth = $this->db->query("SELECT * FROM users");
               //$dizi = $sth->fetchAll();
               //return $dizi;
           
            
        }
        public function urunekle($data) {
            
            return $this->db->insert("saticilar",$data);
        }
  
        public function saticiListele() {
            $sql="SELECT * FROM saticilar";
            return $this->db->select($sql);
        }
        public function hastaEkle($data) {
            return $this->db->insert("hasta",$data);
        }
        
        public function diyetisyenGuncelle($data) {
            return $this->db->update("users",$data);
        }
        public function hastalikListele() {
            $sql="SELECT * FROM hastaliklar";
            return $this->db->select($sql);
        }
	public function getAllrecords()
	{
            return $this->db->select("SELECT * FROM `mvc` ORDER BY id DESC");
	}
          public function diyetEkle($data) {
            return $this->db->insert("diyetler",$data);
        }
        public function diyetListele() {
            $sql="SELECT * FROM diyetler";
            return $this->db->select($sql);
        }
        public function hastaAdListele($id) {
            $sql="SELECT * FROM hasta WHERE id= :id";
            $params = array(":id" => $id);
            return $this->db->select($sql,$params);
                 }
        public function diyetAdListele($id) {
            $sql="SELECT * FROM diyetler WHERE id= :id";
            $params = array(":id" => $id);
            return $this->db->select($sql,$params);
            
        }
	
	}