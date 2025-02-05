<?php
namespace App\Models;

use app\Core\Model;

class AppointmentModel extends Model {
    public function getAllAppointments() {
        $query = "SELECT a.*, p.first_name AS patient_first_name, p.last_name AS patient_last_name, 
                         d.first_name AS doctor_first_name, d.last_name AS doctor_last_name
                  FROM appointments a
                  JOIN patients p ON a.patient_id = p.id
                  JOIN doctors d ON a.doctor_id = d.id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addAppointment($data) {
        $query = "INSERT INTO appointments (patient_id, doctor_id, appointment_date, status, notes)
                  VALUES (:patient_id, :doctor_id, :appointment_date, :status, :notes)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
    }
}