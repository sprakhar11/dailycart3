<?php
class addressModel
{
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function deleteAddressId($addressId) 
    {
        $sql_delete = "DELETE FROM address WHERE id='$addressId'";
        if ($this->conn->query($sql_delete) === TRUE) {
            return 1;
        }
        return 0;
    }

    public function getAllAddress() 
    {
        $sql = 'SELECT * FROM address';
        $result = mysqli_query($this->conn, $sql);
        $address = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $address;
    }

    public function getAddressDataViaId($editAddressId) 
    {

        $sql="SELECT * FROM address  WHERE id='$editAddressId'";
        $query=mysqli_query($this->conn,$sql);
        $address=mysqli_fetch_array($query);
        return $address;
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
                                        $editAddressId) 
        {
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

    public function insertAddressData(
        $country,
        $name,
        $phone,
        $pincode,
        $addline1,
        $city,
        $state,
        $type,
        $userId) 
        {
    
            $sql = "INSERT INTO address ( country,
            name,
            phone,
            pincode,
            addline1,
            city,
            state,
            type,
            userid) VALUES ('$country',
            '$name',
            '$phone',
            '$pincode',
            '$addline1',
            '$city',
            '$state',
            '$type',
            '$userId')";
            
            if (mysqli_query($this->conn, $sql)) {
    
                // successfully data registered
                $addressAdded = "Address added Successfully";
                return $addressAdded;
                // echo 'hit 1';
            } else {
                // echo "Error:" . mysqli_error($conn);
            }
        }


}
?>