<?php

class sellerModel 
{

    public $conn;

    public function __construct($conn)
    {

        $this->conn = $conn;

    }

    public function insertSellerData($name, $email, $mobileNumber, $address, $userId) 
    {
        $sql = " INSERT INTO 
                    seller (userId, name, email, phone, address) 
                    VALUES (
                    '$userId', 
                    '$name', 
                    '$email',
                    '$mobileNumber',
                    '$address')";
        if (mysqli_query($this->conn, $sql)) {
            echo ' hello';
            return 1;
        } else {
            return 0;
        }    
    }

    public function updateSellerId($userId) 
    {
        $sql = "UPDATE customer SET profile='seller' WHERE id=$userId ";
        $this->conn->query($sql);
            
    }
}
?>