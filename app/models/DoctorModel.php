<?php
namespace App\Models;

use App\Core\Model;

class DoctorModel extends Model {
    public function getAllDoctors() {
        $query = "SELECT * FROM doctors";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}