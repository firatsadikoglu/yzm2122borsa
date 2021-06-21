<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Asus
 */
class Model {
    protected $db= array();
    public function __construct()
    {
        $this->db = new Database();
	
    }
}
