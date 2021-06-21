<?php
class Satici  extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function home(){
        $data["homepage"]=array(
            "username"=> Session::get("username"),
            "userAd"=> Session::get("userAd"),
            "userSoyad"=> Session::get("userSoyad")       
           
        );
      
        $this->load->view("Satici/home",$data);
    }
    public function borsaurunekle(){
        Session::int();
        $indexmodel = $this->load->model("index_model");
        $data["uruntipi"]=$indexmodel->uruntipiListele();
             
        if(Session::get("login")==true){
            $this->load->view("Panel/borsaurunekle",$data);
        }
        
       // $this->load->view("Admin/LoginForm");
        
    }
    
    public function borsauruneklendi() {
        $urun_cinsi = $_POST["urun_cinsi"];
        $miktari = $_POST["miktari"];
        $Satici = $_POST["Satici"];
        $fiyati = $_POST["fiyati"];
        $data=array(
            "Satici"=>$Satici,
            "Urun_cinsi"=>$urun_cinsi,
            "Miktar"=>$miktari,
            "Satis_Fiyati"=>$fiyati
        );
        $alicimodel = $this->load->model("alici_model");
        $veri["sartliislem"]=$alicimodel->sartısFiyatiGetir("sartliislem","fiyati = $fiyati and urun_tip='$urun_cinsi'","fiyati");
        if(count($veri["sartliislem"])>=1){
           $I= $veri["sartliislem"][0]['Id'];
           $A= $veri["sartliislem"][0]['alici'];
           $U= $veri["sartliislem"][0]['urun_tip'];
           $M= $veri["sartliislem"][0]['miktari'];
           $F= $veri["sartliislem"][0]['fiyati'];
           $komisyon= intval($F)/100;
           $data1=array(
                "alici"=>$A,
                "satici"=>$Satici,
                "urun"=>$U,
                "fiyat"=>$F,
                "komisyon"=>$komisyon,
                "tarh"=>date("Y/m/d")
            );
           $veri["alici"]=$alicimodel->AliciMiktarGetir($A);
           $aliciparasi= intval($veri["alici"][0]["TL"])-$komisyon;
           $data2 = array(
                "TL"=>$aliciparasi
           );
           $alicimodel->aliciGuncelle($data2,$A);
           $eklendi=$alicimodel->islemEkle($data1);
           $alicimodel->sartliislemSil($I);
           $data["sartliislemler"]=$alicimodel->sartliislemListele(); 
           $this->load->view("Alici/sartliislemListesi",$data); 
        
           
        }else{
            $indexmodel = $this->load->model("index_model");
            $eklendi=$indexmodel->urunekle($data);
            $data["saticilar"]=$indexmodel->saticiListele();
            $this->load->view("Satici/SaticiListesi",$data);
        }
        
          
        
        
        
        
        
    }
    public function borsadakiurunler() {
      
        $indexmodel = $this->load->model("index_model");
        $data["saticilar"]=$indexmodel->saticiListele();
        $this->load->view("Satici/SaticiListesi",$data);
        
    }
    
    
    public function runLogin(){
        $kullanici_adi=$_POST["kullanici_adi"];
        $pasword =$_POST["sifre"];
        
        $data=array(
            "kullanici_adi"=>$kullanici_adi,
            "sifre"=>$pasword
        );
        
        //Veritabanı işlemleri
        $admin_model=$this->load->model("admin_model");
        $result=$admin_model->userKontrol($data);
       
        if($result==false){
            //Yanlış bilgiler giridi
            header("Location:".SITE_URL."/admin/login");  
        } else {
            
             Session::int();
             Session::set("login", true);
             Session::set("username", $result[0]["kullanici_adi"]);
             Session::set("userAd", $result[0]["Ad"]);
             Session::set("userSoyad", $result[0]["Soyad"]);
             header("Location:".SITE_URL."/Panel/home");  
        }
       
    }
    public function logout(){
        
        Session::int();
        Session::destroy();
        header("Location:".SITE_URL."/admin/login");  
    }
    
}
