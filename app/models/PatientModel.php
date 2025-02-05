<?php
namespace App\Models;

use app\Core\Model;

class PatientModel extends Model {
    public function getAllPatients() {
        $query = "SELECT * FROM patients";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addPatient($data) {
        $query = "INSERT INTO patients (first_name, last_name, date_of_birth, gender, phone_number, email, address)
                  VALUES (:first_name, :last_name, :date_of_birth, :gender, :phone_number, :email, :address)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
    }
}