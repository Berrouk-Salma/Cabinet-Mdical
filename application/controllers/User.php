<?php


    class User extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('users');
        }
        public function index(){
            $this->loadView('test',[]);
        }
        public function getDoctor($id){
           
            $data = $this->modelInstance->getdoctor($id);
            
            $this->loadView('user'.DS.'editPDoctor',$data);
            // $this->loadView('test',$data);
        }
        public function getPatient($id){
           
            $data = $this->modelInstance->getpatient($id);
            
            $this->loadView('user'.DS.'editPPatient',$data);
            // $this->loadView('test',$data);
        }

        public function doctorProfile($id){
           $dat = $this->modelInstance->getdoctor($id);
           $data = $this->modelInstance->getAllPatients($dat['type_Compence']);

           $array =[ $dat,$data];
           $this->loadView('user/profileDoctor',$array );
        //    echo '<pre>';
        //    print_r($dat);
        //    echo '<pre>';

        //    print_r($data);
        //    echo '<pre>';

        //    print_r($array);
        }

        public function patientProfile($id){
            $dat = $this->modelInstance->getpatient($id);
            $this->loadView('user/profilePatient',$dat );
           
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
                
                    if ($dt) {
                       
                        $this->redirect(URLROOT . '/User/patientProfile/'.$data['id_patient']);
                    } else {
                  
                        $this->redirect(URLROOT . '/User/getpatient/'.$data['id_patient']);
            }
        }}
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
                        if ($dt) $this->redirect(URLROOT . '/User/doctorProfile/'.$data['id_doctor']);
                         else $this->redirect(URLROOT . '/User/getDoctor/'.$data['id_doctor']);
                }
    }
}