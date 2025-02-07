<?php

    class Users{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
       

        

       
        public function getdoctor($id){
            $this->db->prepareQuery("SELECT * FROM doctor where id_doctor =?");
            
           $this->db->execute([$id]);
             return  $this->db->getRow(); 
            
        }
        public function getpatient($id){
            $this->db->prepareQuery("SELECT * FROM patient where id_patient =?");
           $this->db->execute([$id]);
             return  $this->db->getRow(); 
            
        }
        public function getAllPatients( $typesikness){
            $this->db->prepareQuery("SELECT * FROM `patient`  where type_sickness LIKE ?");
            $this->db->execute([$typesikness]);
            return $this->db->getResult(); 
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