<?php
require 'parentController.php';
class product extends parentController 
{
    public $conn;
    public $user;

    public function __construct($conn) 
    {
        $this->conn = $conn;
        $isLoginRequired = 1;
        parent::__construct($conn, $isLoginRequired);
        // require './model/userModel.php';
        $app = new userModel($this->conn);
        $this->user = $app->getUserDataViaId(parent::decryptData($_COOKIE['id']));

    }

    public function allProducts()
    {
        require './model/productModel.php';

        $app = new productModel($this->conn);
        $smarty = new Smarty();

        $smarty->assign('signupmsg', "");
        if (isset($_COOKIE['signup'])) {
            
            $smarty->assign('signupmsg', "Signed Up Successfully");
            unset($_COOKIE['signup']); 
            setcookie('signup', null, -1, '/');
            
        }

        $smarty->assign('loginmsg', "");
        if (isset($_COOKIE['loginmsg'])) {
            
            $smarty->assign('loginmsg', "Logged Successfully");
            unset($_COOKIE['loginmsg']); 
            setcookie('loginmsg', null, -1, '/');
            
        }



        $productList = $app->getAllProducts();
        $smarty->assign('product', $productList);
        $smarty->display('../view/allProducts.tpl');
    }

    public function addProduct() 
    {

        $name = $description = $price = $imagePath = "";
        $nameErr = $descriptionErr = $priceErr = $imagePathErr = "";
        $fileName = $targetDir = "";
        $productExist="";

        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));


        $smarty->assign('name', $name);
        $smarty->assign('description', $description);
        $smarty->assign('price', $price);
        $smarty->assign('imagePath', $imagePath);

        $smarty->assign('productExist', $productExist);
        $smarty->assign('nameErr' , $nameErr);
        $smarty->assign('priceErr' , $priceErr);
        $smarty->assign('imagePathErr' , $imagePathErr);
        $smarty->assign('descriptionErr', $descriptionErr);
        $smarty->assign('fileName', $fileName);
        $smarty->assign('targetDir', $targetDir);



        if(isset($_POST['submit']))
        {
            if (!empty($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $nameErr = "Product Name is missing!";
                $smarty->assign('nameErr' , $nameErr);

            }

            if (!empty($_POST['description'])) {
                $description = htmlspecialchars($_POST['description']);
            } else {
                $descriptionErr = "Description is missing!";
                $smarty->assign('descriptionErr', $descriptionErr);

            }


            if (!empty($_POST['price'])) {
                $price = htmlspecialchars($_POST['price']);
            } else {
                $priceErr = "Price is missing!";
                $smarty->assign('priceErr', $priceErr);
            }
            // if(!empty($_POST['$upload']))
            // echo $_POST['upload'];
            if(!empty($_FILES['upload']['name'])) {
                $fileName = $_FILES['upload']['name'];
                $fileTmp = $_FILES['upload']['tmp_name'];
                $targetDir = "view/productImages/$fileName";    
                move_uploaded_file($fileTmp, $targetDir);

            } else {
                $imagePathErr = " Image is not uploaded Successfully!";
                $smarty->assign('imagePathErr', $imagePathErr);

            }


            // echo "reached here";
            // echo $name;
            // echo $description;
            // echo $price;
            // echo $imagePath;
            

            if (empty($nameErr) 
            && empty($descriptionErr) 
            && empty($imagePathErr) 
            && empty($priceErr)) 
            {
                $sellerId = $this->user['id'];
                require './model/productModel.php';
                $temp2 = new productModel($this->conn);
                $temp2->insertProductData($name,
                                        $description,
                                        $price,
                                        $targetDir,
                                        $sellerId);

                setcookie('productAdded', "Done" , time() + (86400 * 30), "/");
                header('Location: http://127.0.0.1/dailycart3/user/myAccount');

            } 
        } else {

            // echo "form not submitted";
        }

        $smarty->display('../view/add_product.tpl');


    }

    public function manageProduct()
    {

        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));

        require './model/productModel.php';
        
        
        $temp2 = new productModel($this->conn);
        $product = $temp2->getAllProducts();
        
        
        
        $smarty->assign('update_message', "");
        if (isset($_COOKIE['updateMsg'])) {
            
            $smarty->assign('update_message', "Product Updated Successfully");
            unset($_COOKIE['updateMsg']); 
            setcookie('updateMsg', null, -1, '/');
            
        }
        
        $smarty->assign('deletemsg', "");
        
        if (isset($_COOKIE['deletemsg'])) {
            
            $smarty->assign('deletemsg', "Product Deleted Successfully");
            unset($_COOKIE['deletemsg']); 
            setcookie('deletemsg', null, -1, '/');
            
        }
        $cntProduct = 0;

        $smarty->display('../view/manage_products.tpl');
        foreach  ($product as $value){

            if($value['sellerId'] == $this->user['id']){
            
            $cntProduct = $cntProduct + 1;

            $smarty->assign('value', $value);

            $editUrl = 'http://127.0.0.1/dailycart3/product/editProduct/'.$value['id'];
            $url = 'http://127.0.0.1/dailycart3/product/deleteProduct/'.$value['id'];
            $smarty->assign('url', $url);
            $smarty->assign('editUrl', $editUrl);

            $smarty->display('../view/display_products.tpl');

            }
        
        }
        $smarty->assign('product_found_message', '');

        if($cntProduct == 0){
            $smarty->assign('product_found_message', 'No Product to delete. First add. ');
        }
        $smarty->display('../view/manage_product_message.tpl');


    }

    public function editProduct($editProductId = '') 
    {



        require './model/productModel.php';
        $temp2 = new productModel($this->conn);

        $product = $temp2->getProductDataViaId($editProductId);

        if($product) {

            if($this->user['id'] == $product['sellerId'] ) {
                //valid product id
                $name = $description = $price = $imagePath = "";
                $nameErr = $descriptionErr = $priceErr = $imagePathErr = "";
                $fileName = $targetDir = "";
                $productExist="";
                $smarty = new Smarty();
                $smarty->assign('check', isset($_COOKIE['id']));

                $smarty->assign('name', $name);
                $smarty->assign('description', $description);
                $smarty->assign('price', $price);
                $smarty->assign('imagePath', $imagePath);
                $smarty->assign('productExist', $productExist);
                $smarty->assign('nameErr', $nameErr);
                $smarty->assign('descriptionErr', $descriptionErr);
                $smarty->assign('fileName', $fileName);
                $smarty->assign('targetDir', $targetDir);
                $smarty->assign('priceErr', $priceErr);
                $smarty->assign('imagePathErr', $imagePathErr);


                $smarty->assign('product', $product);


                if(isset($_POST['submit']))
                {
                    if (!empty($_POST['name'])) {
                        $name = htmlspecialchars($_POST['name']);
                    } else {
                        $name= $product['name'];
                        $smarty->assign('name', $name);

                    }

                    if (!empty($_POST['description'])) {
                        $description = htmlspecialchars($_POST['description']);
                    } else {
                        $description = $product['description'];
                        $smarty->assign('description', $description);
                    }


                    if (!empty($_POST['price'])) {
                        $price = htmlspecialchars($_POST['price']);
                    } else {
                        $price = $product['price'];
                        $smarty->assign('price', $price);

                    }
                    // if(!empty($_POST['$upload']))
                    if (!empty($_FILES['upload']['name'])) {
                        $fileName = $_FILES['upload']['name'];
                        $fileTmp = $_FILES['upload']['tmp_name'];
                        $targetDir = "view/productImages/$fileName";
                        move_uploaded_file($fileTmp, $targetDir);
                    } else {

                        $targetDir = $product['imagePath'];
                        
                    }

                    if (empty($nameErr) && empty($descriptionErr) && empty($imagePathErr) && empty($priceErr)) {

                                $temp2->updateProductData($name,
                                $description,
                                $price,
                                $targetDir,
                                $editProductId);

                    setcookie('updateMsg', "Done", time() + (86400 * 30), "/");
                            
                    header('Location: http://127.0.0.1/dailycart3/product/manageProduct');



                                
                    } 

            }
        }

        $smarty->display('../view/edit_product.tpl');
        }
    }   

    public function deleteProduct($deleteProductId = '') 
    {

        //verify the id of the product
        require './model/productModel.php';
        $temp2 = new productModel($this->conn);

        $product = $temp2->getProductDataViaId($deleteProductId);

        if($product) {

            if($this->user['id'] == $product['sellerId'] ) {
                //delete the address from
                $temp2->deleteProductId($deleteProductId);

                setcookie('deletemsg', "Done", time() + (86400 * 30), "/");
                header('Location: http://127.0.0.1/dailycart3/product/manageProduct');



            }
        }
        // var_dump($product); 
        header('Location: http://127.0.0.1/dailycart3/product/manageProduct');


    }
    
}

?>