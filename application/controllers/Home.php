<?php
/**
 *  
 * This file contains the default contriller 'Home' with 
 * default method main 
 * 
 */

 // Home class
class Home extends Controller{
    

    public function __construct(){

    }

    // index : default method 
    public function index(){
        
        // $this->loadView('home',[]);
        $this->loadView('home',[]);
    }

}