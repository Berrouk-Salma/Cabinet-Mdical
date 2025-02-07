<?php



class Test extends Controller{

        public function __construct(){
            // load & instantiate students model   
        }
        public function index(){
            $this->loadView('user'.DS.'profileDoctor',[]);
        }


    }