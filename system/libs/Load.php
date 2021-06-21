<?php


/**
 * Description of Load
 *
 * @author Asus
 */
class Load {
    public function __construct() { 
    }
    public function view($filename,$data=false) {
        if($data==true){
            extract($data);
        }
        include "app/views/".$filename."_view.php"; 
    }
    public function model($filename) {
        include "app/models/".$filename.".php"; 
        return new $filename();
    }
}
