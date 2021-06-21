<?php


class alici_model extends Model  {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function userKontrol($data= array()) {
        $sql="SELECT * FROM users where kullanici_adi = :kullanici_adi AND sifre = :sifre"; 
        $count=$this->db->affectedRows($sql,$data);
        if($count>0){
          $sql="SELECT * FROM users Where kullanici_adi = :kullanici_adi AND sifre= :sifre";
          return $this->db->select($sql,$data);
        }else{
            return false;;
        }
        return $this->db->select("SELECT * FROM users");       
    }
    public function AliciKontrol($data= array()) {
        $sql="SELECT * FROM alicilar where Ad = :Ad"; 
        $count=$this->db->affectedRows($sql,$data);
        if($count>0){
          $sql="SELECT * FROM users Where kullanici_adi = :kullanici_adi AND sifre= :sifre";
          return $this->db->select($sql,$data);
        }else{
            return false;;
        }
        return $this->db->select("SELECT * FROM users");       
    }
    public function AliciMiktarGetir($Ad) {
        $sql="SELECT TL FROM alicilar where Ad= '$Ad'"; 
        return $this->db->select($sql);
              
    }
    public function aliciEkle($data) {
       
        return $this->db->insert("alicilar",$data);
    }
    public function aliciListele() {
        $sql="SELECT * FROM alicilar";
        return $this->db->select($sql);
    }
    public function sartliislemEkle($data) {
        return $this->db->insert("sartliislem",$data);
    }
    public function dovizEkle($data) {
        return $this->db->insert("doviz",$data);
    }
    public function dovizListele() {
         $sql="SELECT * FROM doviz";
        return $this->db->select($sql);
    }
    public function dovizGetir($data= array()) {
        $sql="SELECT * FROM doviz where Id = :Id"; 
        return $this->db->select($sql,$data);
    }
    
    public function dovizGuncelle($data= array(),$Ad) {    
        return $this->db->update("alicilar",$data,"Ad='$Ad'");
    }
    public function dovizSil($Id) {    
        return $this->db->delete("doviz","Id='$Id'");
    }
    
    public function sartliislemListele() {
        $sql="SELECT * FROM sartliislem";
        return $this->db->select($sql);
    }
    
    public function sartısFiyatiGetir($table,$where,$orderby) {
        $sql="SELECT * FROM $table WHERE $where ORDER BY $orderby";
        return $this->db->select($sql);
    }
    public function islemEkle($data) {
        return $this->db->insert("islemler",$data);
    }
    public function sartliislemSil($Id) {    
        return $this->db->delete("sartliislem","Id='$Id'");
    }
    public function aliciGuncelle($data= array(),$Ad) {    
        return $this->db->update("alicilar",$data,"Ad='$Ad'");
    }
}


	