<?php

    class Doctors{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function getAllDoctors($table){
            $this->db->prepareQuery("SELECT * FROM $table");
            $this->db->execute();
            return $this->db->getResult(); 
        }

        

        public function deleteDoctor($id)
        {
           $this->db->prepareQuery("DELETE FROM doctor WHERE id_doctor = ?");
           $this->db->execute([$id]);
        }
        public function getdoctor($id){
            $this->db->prepareQuery("SELECT * FROM doctor where id_doctor =?");
            
           $this->db->execute([$id]);
             return  $this->db->getRow(); 
            
        }
        public function updateDoctor($values0,$values1,$values2,$values3,$values4,$id){
            $this->db->prepareQuery("UPDATE `doctor` SET `fn_doctor` = ?, `email_doctor` = ?, `passwod` = ?, `date_birth` = ? ,`type_Compence`= ? WHERE `doctor`.`id_doctor` = ?");
           $info = $this->db->execute([$values0,$values1,$values2,$values3,$values4,$id]);
            if ($info){
                return true;
            }else{
                return false;
            }
            
        }
    }