<?php
class index extends Controller{
    public function __construct() {
        parent::__construct(); 
    }
    public function anasayfa() {
        $this->load->view("anasayfa");
    }
    public function kullaniciListele($id=null) {
        $indexmodel = $this->load->model("index_model");
        $data["kullaniciListele"]=$indexmodel->kullaniciListele($id);
        $this->load->view("kullaniciListele",$data);
    }
    

    
       
}
