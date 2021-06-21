<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author Asus
 */
class admin_model extends Model  {
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
       
        
	
	
}


	