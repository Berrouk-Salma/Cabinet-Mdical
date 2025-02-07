<?php

    class Patients{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        
        public function getAllPatients($table){
            $this->db->prepareQuery("SELECT * FROM $table");
            $this->db->execute();
            return $this->db->getResult(); 
        }

        public function deletePatient($id)
        {
           $this->db->prepareQuery("DELETE FROM patient WHERE id_patient = ?");
           $this->db->execute([$id]);
        }
        public function getpatient($id){
            $this->db->prepareQuery("SELECT * FROM patient where id_patient =?");
            
           $this->db->execute([$id]);
             return  $this->db->getRow(); 
            
        }
        
        public function updatePatient($values0,$values1,$values2,$values3,$values4,$id){
            $this->db->prepareQuery("UPDATE `patient` SET `fn_patient` = ?, `email_patient` = ?, `passwod` = ?, `date_birth` = ? ,`type_sickness`= ? WHERE `patient`.`id_patient` = ?");
           $info = $this->db->execute([$values0,$values1,$values2,$values3,$values4,$id]);
            if ($info){
                return true;
            }else{
                return false;
            }
            
        }

    }