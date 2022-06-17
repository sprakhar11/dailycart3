<?php

class all_models 
{
    public $conn;

    public function __construct($conn) 
    {
        $this->conn = $conn;
    }

    
    //delete data
    

    public function deleteProduct($productId) 
    {
        $sql_delete = "DELETE FROM product WHERE id='$productId'";
        if ($this->conn->query($sql_delete) === TRUE) {
            // echo "Record updated successfully";
        } else {
        // echo "Error updating record: " . $conn->error;
        }
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

    


    public function getAllProducts() 
    {

        $sql = 'SELECT * FROM product';
        $result = mysqli_query($this->conn, $sql);
        $productList = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $productList;

    }
    public function getProductDataViaId($ProductId) 
    {

        $sql="SELECT * FROM product  WHERE id='$ProductId'";

        $query=mysqli_query($this->conn,$sql);

        $product=mysqli_fetch_array($query);

        return $product;

    }


    // update data

    public function updateUserData($key, $value, $userId ) 
    {
        $sql = "UPDATE customer SET "."$key"."='$value' WHERE id='$userId' ";
        
        $this->conn->query($sql);

    }

    public function updateSellerId($userId) 
    {

        $sql = "UPDATE customer SET profile='seller' WHERE id=$userId ";
        $this->conn->query($sql);
            
    }

    public function updateAddressData(
        $country,
        $name,
        $phone,
        $pincode,
        $addline1,
        $city,
        $state,
        $type,
        $editAddressId) {

        $sql = "
        UPDATE
        address 
        SET
        country='$country',
        name='$name',
        phone='$phone',
        pincode='$pincode',
        addline1='$addline1',
        city='$city',
        type='$type',
        state='$state'
        WHERE id='$editAddressId'
        ";
                
        mysqli_query($this->conn, $sql);
            
    }

    public function updateProductData($name, $description, $price, $targetDir, $editProductId) 
    {
        
        $sql = "UPDATE product SET 
        name='$name',
        description='$description',
        price='$price',
        imagePath='$targetDir' WHERE id='$editProductId'";
        mysqli_query($this->conn, $sql);

    }



    // insert data
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
            return 1;
        } else {
            return 0;
        }    
    }

    public function insertProductData($name,
        $description,
        $price,
        $targetDir,
        $sellerId) 
        {
        
        $sql = "INSERT INTO product (
             name,
             description,
             price,
             imagePath,
             sellerId) VALUES (  
             '$name',
             '$description',
             '$price',
             '$targetDir',
             '$sellerId')";
        
        mysqli_query($this->conn, $sql);
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
                    
        if (mysqli_query($this->conn, $sql)) {
            return 1;
        } else {
            return 0;
        }
    }

}
?>