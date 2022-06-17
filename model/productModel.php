<?php

class productModel 
{

    public $conn;
    public function __construct($conn)
    {

        $this->conn = $conn;

    }
    public function deleteProductId($productId) 
    {
        $sql_delete = "DELETE FROM product WHERE id='$productId'";
        if ($this->conn->query($sql_delete) === TRUE) {
            // echo "Record updated successfully";
        } else {
        // echo "Error updating record: " . $conn->error;
        }
    }
    public function getAllProducts() 
    {

        $sql = 'SELECT * FROM product';
        $result = mysqli_query($this->conn, $sql);
        $productList = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $productList;

    }
    public function getProductDataViaId($ProductId) {

        $sql="SELECT * FROM product  WHERE id='$ProductId'";
        $query=mysqli_query($this->conn,$sql);
        $product=mysqli_fetch_array($query);
        return $product;

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
}
?>