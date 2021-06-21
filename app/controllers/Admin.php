<?php
class Admin extends Controller {
    public function __construct(){
        parent::__construct();
    }
    public function login(){
        Session::int();
        if(Session::get("login")==true){
             header("Location:".SITE_URL."/panel/home");
        }
        $this->load->view("Admin/LoginForm");
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
    public function dovizCevir($id=null) {
             
        $veri=array(
           "Id"=>$id
        );
        
        //Sahibini getir onu da döviz listesinde ara bulursan ekle
        $alicimodel = $this->load->model("alici_model");
        $data["dovizbilgisi"]=$alicimodel->dovizGetir($veri);
        
        $Id=$data['dovizbilgisi'][0]['Id'];
        $sahibi=$data['dovizbilgisi'][0]['sahibi'];
        
        $miktari=$data['dovizbilgisi'][0]['miktari'];
        $cinsi=$data['dovizbilgisi'][0]['cinsi'];
        
        $connect_web = simplexml_load_file("http://www.tcmb.gov.tr/kurlar/today.xml");

        switch ($cinsi) {
            case "ABD DOLARI":
                $selling = $connect_web->Currency[0]->BanknoteSelling;
                break;
            case "EURO":
                $selling = $connect_web->Currency[3]->BanknoteSelling;
                break;
            case "PAKISTANI RUPEE":
                $selling = $connect_web->Currency[17]->ForexBuying;
                break;
            default:
                break;
        }
        $eskimiktar=$alicimodel->AliciMiktarGetir($sahibi);
        print_r($eskimiktar[0]['TL']);
        $guncelTl= $eskimiktar[0]['TL']+$miktari*$selling;
        echo "<br>Güncel tutar<br>";
        echo $guncelTl."<br>";
        
        
        $data=array(
            "TL" =>$guncelTl
        );
        $alicimodel->dovizGuncelle($data,$sahibi);
        $alicimodel->dovizSil($Id);


        
        //$this->load->view("kullaniciListele",$data);
    }
    public function logout(){
        Session::int();
        Session::destroy();
        header("Location:".SITE_URL."/admin/login");  
    }
   
    
}
