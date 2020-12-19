<?php 
    class crud{
        // private database object\
        private $db;

        //constructor to initialize private variable to the database connecttion
        function __construct($conn){
            $this->db = $conn;
        }

        // function to insert a new record into the attendee database
        public function insertCustomer($fname, $lname, $email, $address, $gender, $profile_pic){
            try {
                // define sql statement to be executed
                $sql = "INSERT INTO customer (firstname, lastname, email_address, cus_address, gender_id, profile_pic) VALUES (:fname, :lname, :email, :cus_address, :gender, :profile_pic)";
                // prepare the sql statement for excecution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname', $fname);                
                $stmt->bindparam(':lname', $lname);      
                $stmt->bindparam(':email', $email);        
                $stmt->bindparam(':cus_address', $address);                
                $stmt->bindparam(':gender', $gender); 
                $stmt->bindparam(':profile_pic', $profile_pic); 
                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function editCustomer($id, $fname, $lname, $email, $address, $gender){
            try {
                $sql = "UPDATE `customer` SET `firstname`= :fname,`lastname`= :lname,`email_address`= :email,`cus_address`= :cus_address,`gender_id`= :gender WHERE `customer_id` = :id";
                // prepare the sql statement for excecution
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':fname', $fname);                
                $stmt->bindparam(':lname', $lname);      
                $stmt->bindparam(':email', $email);        
                $stmt->bindparam(':cus_address', $address);                
                $stmt->bindparam(':gender', $gender);
                // execute statement
                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getCustomer(){
            try {
                $sql = "SELECT * FROM customer c INNER JOIN genders g on c.gender_id = g.gender_id";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getCustomerDetails($id){
            try {
                $sql = "SELECT * FROM customer c INNER JOIN genders g on c.gender_id = g.gender_id WHERE customer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteCustomer($id){
            try {
                $sql = "DELETE FROM customer WHERE customer_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
                
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getGenders(){
            try {
                $sql = "SELECT * FROM genders";
                $result = $this->db->query($sql);
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getGenderById($id){
            try {
                $sql = "SELECT * FROM genders WHERE gender_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        } 
        
        public function checkCustomerEmail($email){
            try {
                $sql = "SELECT COUNT(*) as num FROM customer WHERE email_address = :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':email', $email);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>