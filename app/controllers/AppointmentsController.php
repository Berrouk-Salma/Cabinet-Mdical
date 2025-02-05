<?php
namespace app\Controllers;

use app\Core\Controller;
use app\Models\AppointmentModel;
use app\Models\PatientModel;
use app\Models\DoctorModel;

class AppointmentsController extends Controller {
    private $appointmentModel;
    private $patientModel;
    private $doctorModel;

    public function __construct() {
        $this->appointmentModel = new AppointmentModel();
        $this->patientModel = new PatientModel();
        $this->doctorModel = new DoctorModel();
    }

    public function index() {
        $appointments = $this->appointmentModel->getAllAppointments();
        $this->view('appointments/index', ['appointments' => $appointments]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'patient_id' => $_POST['patient_id'],
                'doctor_id' => $_POST['doctor_id'],
                'appointment_date' => $_POST['appointment_date'],
                'status' => 'Scheduled',
                'notes' => $_POST['notes']
            ];
            $this->appointmentModel->addAppointment($data);
            header('Location: /appointments');
        } else {
            $patients = $this->patientModel->getAllPatients();
            $doctors = $this->doctorModel->getAllDoctors();
            $this->view('appointments/add', ['patients' => $patients, 'doctors' => $doctors]);
        }
    }
}