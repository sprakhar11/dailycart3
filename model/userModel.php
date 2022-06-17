<?php
class userModel {

    public $conn;

    public function __construct($conn) 
    {
        $this->conn = $conn;
    }

    // get data
    public function getUserData($email)
    {

        $sql="SELECT * FROM customer  WHERE email='$email' ";
        $query=mysqli_query($this->conn,$sql);
        $user=mysqli_fetch_array($query);

        return $user;

    }

    public function getUserDataViaId($id)
    {

        $sql="SELECT * FROM customer  WHERE id='$id'";
        $query=mysqli_query($this->conn,$sql);
        $user=mysqli_fetch_array($query);

        return $user;

    }

    public function updateUserData($key, $value, $userId )
    {
        $sql = "UPDATE customer SET "."$key"."='$value' WHERE id='$userId'";
        $this->conn->query($sql);

    }
    public function insertUserData($name, $mobileNumber, $email, $passwordHash)
    {
        $sql = " INSERT INTO 
                    customer (name, phone, email, password ) 
                    VALUES (
                    '$name', 
                    '$mobileNumber', 
                    '$email',
                    '$passwordHash'
                    )";
                    
        if (mysqli_query($this->conn, $sql))
        {
            return 1;
        } else {
            return 0;
        }
    }

}
?>