<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panel
 *
 * @author Asus
 */
class Panel extends Controller {
    public function __construct() {
        parent::__construct();
        //Oturum Kontrolü
        Session::int();
        if(Session::get("login")==false){
            Session::destroy();
             header("Location:".SITE_URL."/admin/login");
        }
     
    }
    
    public function home(){
        $data["homepage"]=array(
            "username"=> Session::get("username"),
            "userAd"=> Session::get("userAd"),
             "userSoyad"=> Session::get("userSoyad")         
        );
      
        $this->load->view("Panel/home",$data);
    }
    
    public function raporAl(){
        
        $data["homepage"]=array(
            "username"=> Session::get("username"),
            "userAd"=> Session::get("userAd"),
             "userSoyad"=> Session::get("userSoyad")         
        );  
        $this->load->view("Panel/RaporAralikGiris",$data);
    }
     public function raporYaz(){
        $baslangic = $_POST["baslangic"];
        $bitis = $_POST["bitis"];
        $Alici = $_POST["Satici"];
      
        
        $where="alici='$Alici' and tarh between '$baslangic' and '$bitis'";
        $alicimodel = $this->load->model("alici_model");
        $data["islemler"]=$alicimodel->sartısFiyatiGetir("islemler",$where,"tarh");
        
        $this->load->view("Panel/rapor",$data);
        
        exit();
        
         
         
        
          
        
    }
    
}
