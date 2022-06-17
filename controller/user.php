<?php
require 'parentController.php';
class user extends parentController 
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
        // var_dump($userId);
        // var_dump($_COOKIE['id']);

        $this->user = $app->getUserDataViaId(parent::decryptData($_COOKIE['id']));

        
    }

    public function myAccount()
    {

       
        
        
        
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));

        $smarty->assign('addAddressmsg', '');

        if(isset($_COOKIE['addressAdded'])){
            if($_COOKIE['addressAdded'] == "Done"){

                $smarty->assign('addAddressmsg', 'Address added successfully');

            }
            unset($_COOKIE['addressAdded']); 
            setcookie('addressAdded', null, -1, '/'); 

        }
        $smarty->assign('productAddedmsg', '');

        if(isset($_COOKIE['productAdded'])){
            if($_COOKIE['productAdded'] == "Done"){

                $smarty->assign('productAddedmsg', 'Product added successfully');

            }
            unset($_COOKIE['productAdded']); 
            setcookie('productAdded', null, -1, '/'); 

        }
        $smarty->assign('sellerformmsg', '');

        if(isset($_COOKIE['sellerForm'])){
            if($_COOKIE['sellerForm'] == "Done"){

                $smarty->assign('sellerformmsg', 'Seller form successfully filled');

            }
            unset($_COOKIE['sellerForm']); 
            setcookie('sellerForm', null, -1, '/'); 

        }
        // echo'hi';

        $smarty->assign('user', $this->user);
        // var_dump($this->user);
        $smarty->display('../view/myAccount.tpl');

    }

    public function editProfile()
    {

        $temp2 = new userModel($this->conn);
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));

        $name = $phone = "";
        $nameErr = $phoneErr = $emailErr = $passwordErr = $passwordLengthErr = "";
        $smarty->assign('name', $name);
        $smarty->assign('phone', $phone);
        $smarty->assign('nameErr', $nameErr);
        $smarty->assign('emailErr', $emailErr);
        $smarty->assign('phoneErr', $phoneErr);
        $smarty->assign('passwordLengthErr', $passwordLengthErr);
        $smarty->assign('passwordErr', $passwordErr);

        $smarty->assign('user', $this->user);
        if(isset($_POST['submit1']))
        {
            if (!empty($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $nameErr = "Name is missing";
                $smarty->assign('nameErr', $nameErr);
            }

            if (empty($nameErr)) {

                        $userId = $this->user['id'];
                        // echo $userId;
                        $key = "name";
                        $temp2->updateUserData($key, $name, $userId);
                            // echo "Record updated successfully";
                        $nameErr = "Successfully Updated";
                        $smarty->assign('nameErr', $nameErr);
            } else {
                $nameErr = "Empty Field";
                $smarty->assign('nameErr', $nameErr);
            }
        }

        if(isset($_POST['submit2']))
        {
            if (!empty($_POST['phone'])) {
                $phone = htmlspecialchars($_POST['phone']);
                
            } else {
                $phoneErr = "Phone Number is missing";
                $smarty->assign('phoneErr', $phoneErr);
            }

            if (!empty($_POST['phone']))
            if( strlen(strval($phone)) != 10)
            {
                // echo strval($phone);
                $phoneErr = "Length should be 10 integers";
                $smarty->assign('phoneErr', $phoneErr);
            }
            
            if (empty($phoneErr)) {

                $userId = $this->user['id'];
                $key = "phone";
                $temp2->updateUserData($key, $phone, $userId);
                $phoneErr = "Successfully Updated";
                $smarty->assign('phoneErr', $phoneErr);
            } else {

                    $phoneErr = "Empty Field";
                    $smarty->assign('phoneErr', $phoneErr);
            }
            
        }

        if(isset($_POST['submit3']))
        {
            if (!empty($_POST['email'])) {
                $email = htmlspecialchars($_POST['email']);
            } else {
                $emailErr = "Email is missing";
                $smarty->assign('emailErr', $emailErr);
            }
            

            if (empty($emailErr)) {

                $userId = $this->user['id'];
                // echo $userId;
                $key = "email";
                $temp2->updateUserData($key, $email, $userId);
                    // echo "Record updated successfully";
                header('Location: http://127.0.0.1/dailycart3/authController/logout');
            } else {
                    $emailErr = "Empty Field";
                    $smarty->assign('emailErr', $emailErr);
            }
        }
        if(isset($_POST['submit4'])) {

            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
                $passwordHash = password_hash("$password", PASSWORD_DEFAULT);

                //length check for password

                if( strlen($password) < 8 || strlen($password) > 16)
                {
                    $passwordLengthErr = "Length should be between 8 and 16 characters";
                    $smarty->assign('passwordLengthErr', $passwordLengthErr);
                }

            } else {
                    $passwordErr = "Password is missing";
                    $smarty->assign('passwordErr', $passwordErr);
            }

            if(empty($passwordLengthErr) && empty($passwordErr)) {
                $userId = $this->user['id'];


                $key = "password";
                $temp2->updateUserData($key, $passwordHash, $userId);
                header('Location:    http://127.0.0.1/dailycart3/authController/logout');

            }
        }

        $smarty->display('../view/editProfile.tpl');
    }


}
?>