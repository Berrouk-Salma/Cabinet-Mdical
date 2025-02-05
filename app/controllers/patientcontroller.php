<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\PatientModel;

class PatientsController extends Controller {
    private $patientModel;

    public function __construct() {
        $this->patientModel = new PatientModel();
    }

    public function index() {
        $patients = $this->patientModel->getAllPatients();
        $this->view('patients/index', ['patients' => $patients]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'date_of_birth' => $_POST['date_of_birth'],
                'gender' => $_POST['gender'],
                'phone_number' => $_POST['phone_number'],
                'email' => $_POST['email'],
                'address' => $_POST['address']
            ];
            $this->patientModel->addPatient($data);
            header('Location: /patients');
        } else {
            $this->view('patients/add');
        }
    }
}