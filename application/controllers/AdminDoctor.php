<?php


    class AdminDoctor extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('doctors');
        }
        //  function index call of all books
        public function index(){
            // $this->loadView('admin'.DS.'doctors',[]);
            $this->loadView('admin'.DS.'doctors',[]);

        }
          
        // function for get all doctors from db
        public function getAllDoctors(){
            $data = $this->modelInstance->getAllDoctors('doctor');
            // print_r($data);
            $this->loadView('admin'.DS.'doctors',$data); 
            
        }
        public function deleteDoctor($id){
            $this->modelInstance->deleteDoctor($id);
           
            $this->redirect(URLROOT . '/AdminDoctor/getAllDoctors');
        }
        public function getDoctor($id){
           
            $data = $this->modelInstance->getdoctor($id);
            print_r($data);
            $this->loadView('admin'.DS.'editDoctor',$data);
            // $this->loadView('test',$data);
        }

        public function showDoctor($id){
            
        }
        public function modifyDoctor($id){
        //     // && isset($_POST['submit'])
            if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'fn_doctor' => $_POST['fullname'],
                    'email_doctor' => $_POST['gmail'],
                    'passwod' => $_POST['password'],
                    'date_birth' => $_POST['date'],
                    'type_Compence' => $_POST['Compence'],
                    'id_doctor'=>$id
                ];
               
                print_r($data);
                $dt = $this->modelInstance->updateDoctor($data['fn_doctor'] ,$data['email_doctor'],$data['passwod'],$data['date_birth'],$data['type_Compence'],$data['id_doctor']);
                echo "i'm here";
                    if ($dt) $this->redirect(URLROOT . '/AdminDoctor/getAllDoctors');
                     else $this->redirect(URLROOT . '/AdminDoctor/getDoctor/'.$data['id_doctor']);
            }
  

        }
    }