<?php


    class AdminPatient extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('patients');
        }
        //  function index call of all books
        public function index(){
            $this->loadView('admin'.DS.'patients',[]);

        }
        public function getAllPatients(){
            $data = $this->modelInstance->getAllPatients('patient');
            // print_r($data);
            $this->loadView('admin'.DS.'patients',$data);
        }
        public function deletePatient($id){
            $this->modelInstance->deletePatient($id);
           
            $this->redirect(URLROOT.'/AdminPatient/getAllPatients');
        } 
        public function getPatient($id){
           
            $data = $this->modelInstance->getpatient($id);
            print_r($data);
            $this->loadView('admin'.DS.'editPatient',$data);
            // $this->loadView('test',$data);
        }
        public function modifyPatient($id){
            // && isset($_POST['submit'])
            if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'fn_Patient' => $_POST['fullname'],
                    'email_patient' => $_POST['gmail'],
                    'passwod' => $_POST['password'],
                    'date_birth' => $_POST['date'],
                    'type_sickness' => $_POST['sickness'],
                    'id_patient'=>$id
                ];
               
                print_r($data);
                $dt = $this->modelInstance->updatePatient($data['fn_Patient'] ,$data['email_patient'],$data['passwod'],$data['date_birth'],$data['type_sickness'],$data['id_patient']);
                echo "i'm here";
                    if ($dt) {
                       
                        $this->redirect(URLROOT . '/AdminPatient/getAllPatients');
                    } else {
                  
                        $this->redirect(URLROOT . '/AdminPatient/getPatient'.$data['id_patient']);
            }
        }
    }
}
?>