<?php

class Alici extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function fiyatbelirle(){
        Session::int();
        $alicimodel = $this->load->model("alici_model");
        $indexmodel = $this->load->model("index_model");
        $data["uruntipi"]=$indexmodel->uruntipiListele();
      
        if(Session::get("login")==true){
            $this->load->view("Alici/sartliislem",$data);
        }
    }
    public function Sartliislemeklendi(){
        $urun_cinsi = $_POST["urun_cinsi"];
        $miktari = $_POST["miktari"];
        $Alici = $_POST["Satici"];
        $fiyati = $_POST["fiyati"];
        $data=array(
            "alici"=>$Alici,
            "urun_tip"=>$urun_cinsi,
            "miktari"=>$miktari,
            "fiyati"=>$fiyati
        );
        $alicimodel = $this->load->model("alici_model");
        $eklendi=$alicimodel->sartliislemEkle($data);
        $data["sartliislemler"]=$alicimodel->sartliislemListele(); 
        $this->load->view("Alici/sartliislemListesi",$data); 
    }
    public function aliciekle(){
        Session::int();       
        if(Session::get("login")==true){
            $this->load->view("Alici/aliciEkle");
        }
    }
    public function alicieklendi(){
        $Alici = $_POST["Alici"];
        $fiyati = $_POST["fiyati"];
        $data=array(
            "Ad"=>$Alici,
            "Tl"=>$fiyati
        );
        $alicimodel = $this->load->model("alici_model");
        $eklendi=$alicimodel->aliciEkle($data);
        $data["alicilistesi"]=$alicimodel->aliciListele(); 
        $this->load->view("Alici/aliciListesi",$data); 
    }
    public function aliciListele(){
        $alicimodel = $this->load->model("alici_model");
        $data["alicilistesi"]=$alicimodel->aliciListele(); 
        $this->load->view("Alici/aliciListesi",$data); 
    }
    
    public function dovizEkle(){
        Session::int();       
        if(Session::get("login")==true){
            $this->load->view("Alici/dovizGirisi");
        }
    }
    
    public function dovizEklendi(){
        $doviz_cinci = $_POST["doviz_cinsi"];
        $miktari = $_POST["fiyati"];
        $sahibi = $_POST["alici"];
       
      
        $data=array(
            "sahibi"=>$sahibi,
            "miktari"=>$miktari,
            "cinsi"=>$doviz_cinci
        );
        
        
        $alicimodel = $this->load->model("alici_model");
        $eklendi=$alicimodel->dovizEkle($data);
        $data["doviz"]=$alicimodel->dovizListele();
        $this->load->view("Alici/dovizListesi",$data);
        
    }
    public function dovizListele(){
        $alicimodel = $this->load->model("alici_model");
        $data["doviz"]=$alicimodel->dovizListele();
        $this->load->view("Alici/dovizListesi",$data);    
    }
    public function dovizgetir($id=null){
        $alicimodel = $this->load->model("alici_model");
        $data["doviz"]=$alicimodel->dovizListele();
        $this->load->view("Alici/dovizListesi",$data);    
    }
    /*
    public function aliciEklendi(){
        $urun_cinsi = $_POST["urun_cinsi"];
        $miktari = $_POST["miktari"];
        $Satici = $_POST["Satici"];
        $fiyati = $_POST["fiyati"];
        $data=array(
            "alici"=>$Satici,
            "urun_tip"=>$urun_cinsi,
            "miktari"=>$miktari,
            "fiyati"=>$fiyati
        );
        $alicimodel = $this->load->model("alici_model");
        $eklendi=$alicimodel->sartliislemEkle($data);
        $data["sartliislemler"]=$alicimodel->sartliislemListele(); 
        $this->load->view("Alici/sartliislemListesi",$data);
    }*/
     public function SartliislemListe(){
        $alicimodel = $this->load->model("alici_model");
        $data["sartliislemler"]=$alicimodel->sartliislemListele();
        $this->load->view("Alici/sartliislemListesi",$data);
    }
       
}
