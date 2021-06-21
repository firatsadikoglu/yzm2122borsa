<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bootstrap
 *
 * @author Asus
 */
class Bootstrap {
    public function __construct() {
        //Bootstrap
        $url= isset($_GET["url"])?$_GET["url"]:null;
        if($url!=null){
            $url= rtrim($url,"/");
            $url= explode("/", $url);
        } else {
            unset($url);
        }

        if(isset($url[0])){
            include "app/controllers/".$url[0].".php"; 
            $c = new $url[0]();
            echo "<br>";
            if(isset($url[2])){
                $fonksion=$url[1];
                $param=$url[2];
                $c->$fonksion($param);
            }else{
                if(isset($url[1])){
                    $fonksion=$url[1];
                    $c->$fonksion("Merhaba");
                }else{
                    //hata
                }
            }
        }else{
           include "app/controllers/index.php"; 
           $index= new index();
           $index->anasayfa();
        }
    }
}
