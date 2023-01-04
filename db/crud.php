<?php

//use LDAP\Result;

    class crud{
        // private database object\
        private $db;

        // constructor to initialize private to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        // function to insert a new record into the doctors_office database    
        public function insertPatients($fname, $lname, $dob, $email, $contact, $gender, $homeaddress, $avatar_path){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO patients (firstname, lastname, dateofbirth, emailaddress, contactnumber,
                gender_id, homeaddress, avatar_path) VALUES (:fname, :lname, :dob, :email, :contact, :gender, :homeaddress, :avatar_path)";
                // prepare sql statement for execution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':homeaddress',$homeaddress);
                $stmt->bindparam(':avatar_path',$avatar_path);

                // excute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 

        public function editPatients($id, $fname, $lname, $dob, $email, $contact, $gender, $homeaddress){
            try{
                $sql = "UPDATE `patients` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob,
                `emailaddress`=:email,`contactnumber`=:contact,`gender_id`=:gender, `homeaddress`=:homeaddress
                WHERE patient_id = :id";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':homeaddress',$homeaddress);
                // excute statement
                $stmt->execute();
                return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }
        public function getPatients(){
            try{
                $sql = "SELECT * FROM `patients` a inner join gender s on a.gender_id = s.gender_id";
            $result = $this->db->query($sql);
            return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
            
        }

        public function getPatientsDetails($id){
            try{
                $sql = "select * from patients a inner join gender s on a.gender_id 
                = s.gender_id where patient_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deletePatients($id){
            try{
                $sql = "delete from patients where patient_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getGender(){
            try{
                $sql = "SELECT * FROM `gender`;";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getGenderById($id){
            try{
                $sql = "SELECT * FROM `gender` where gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        
        
    }
?>