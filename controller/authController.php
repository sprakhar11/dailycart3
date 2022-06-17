<?php
class authController
{
    public $conn;
    public function __construct($conn) 
    {
        $this->conn = $conn;
    }

    public function loginCheck()
    {

        if(isset($_COOKIE['id'])) {
            // decrypt id cookies and check if valic or not
        
            $_COOKIE['id'] = urldecode($_COOKIE['id']);
        
            $encrypted_id = $_COOKIE['id'];
            $method = 'AES-128-CBC';
            $encryption_key = 'myencryptionkey';
            $parts = explode(':', $encrypted_id);
            $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);

            require './model/userModel.php';
            $app = new userModel($this->conn);
            $user = $app->getUserDataViaId($decrypted_id);
            if(!$user){
                
                header('Location: http://127.0.0.1/dailycart3/dashboard/index');
            } else {
                return $user;
            }
        
        } else {

            return null;
        }

    }

    public function login()
    {

        $this->loginCheck();
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));
        $smarty->assign('loginmessage', '');
        if(isset($_GET['from_page'])){

            $smarty->assign('loginmessage' , 'Login first');
        }
        $email = $password = $errMessage = ""; 
        $smarty->assign('email', "");
        $smarty->assign('password', "");
        $smarty->assign('errMessage', "");

        // print_r($_POST['submit']);
        if(isset($_POST['submit'])) {

            if(isset($_POST['email'])) {

                $email = $_POST['email'];
                
            } else {
                $email = "INVALID";
                $smarty->assign('email', $email);
            }

            if(isset($_POST['password'])) {

                $password = $_POST['password'];
            } else {
                $password = "INVALID";
            }

            
            if(($email != "INVALID") && ($password != "INVALID")) {

                require './model/userModel.php';
                $app = new userModel($this->conn);
                $user = $app->getUserData($email);
                
                if(!isset($user['name'])){

                    $smarty->assign('errMessage', 
                                    'Email Not Found in Database please Sign Up');

                }
                else if(password_verify($password, $user['password'])) {

                    // save data in the cookies 
                    // Set the encryption key
                    $method = 'AES-128-CBC';
                    $encryption_key = 'myencryptionkey';
                    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
                    $data = $user['id'];
                    $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
                    $encrypted = $encrypted . ':' . $iv;
                    
                    // $decrypted = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
                    $encrypted = urlencode($encrypted);
                    setcookie('id', $encrypted, time() + (86400 * 30), "/");

                    
                    $data = $email;
                    $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
                    $encrypted = $encrypted . ':' . $iv;
                    $encrypted = urlencode($encrypted);
                    setcookie('email', $encrypted, time() + (86400 * 30), "/");

                    setcookie('loginMsg', "Done", time() + (86400 * 30), "/");

                    header("Location: http://127.0.0.1/dailycart3/dashboard/index");
                    

                } else {

                    $smarty->assign('errMessage', 'Wrong password or email');
                }
            }
        }

        $smarty->display('../view/login.tpl');

    }

    
    public function signup() 
    {
        $this->loginCheck();
        $smarty = new Smarty();  
    
        $smarty->assign('check', isset($_COOKIE['id']));

    
        $name = $mobileNumber = $email = $password = "";
        $nameErr= $mobileNumberErr = $emailErr = "";
        $passwordLengthErr = $passwordErr = "";
        $mailExists = "";
    
        $smarty->assign('name', $name);
        $smarty->assign('mobileNumber', $mobileNumber);
        $smarty->assign('email', $email);
        $smarty->assign('password', $password);
        $smarty->assign('nameErr', $nameErr);
        $smarty->assign('mobileNumberErr', $mobileNumberErr);
        $smarty->assign('passwordLengthErr', $passwordLengthErr);
        $smarty->assign('passwordErr', $passwordErr);
        $smarty->assign('mailExists', $mailExists);
        $smarty->assign('emailErr', $emailErr);
    
    
    
        if (isset($_POST['submit'])) {
    
            if (!empty($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $nameErr = "Name is missing";
                $smarty->assign('nameErr', $nameErr);
            }
    
            if (!empty($_POST['mobileNumber'])) {
                $mobileNumber = $_POST['mobileNumber'];
            } else {
                $mobileNumberErr = "Mobile number is missing!";
                $smarty->assign('mobileNumberErr', $mobileNumberErr);
            }

            if (!empty($_POST['mobileNumber']))
            if (strlen(strval($mobileNumber)) != 10)
            {
                $mobileNumberErr = "Length should be 10 integers";
                $smarty->assign('mobileNumberErr', $mobileNumberErr);
                
            }

            if (!empty($_POST['email'])) {
                $email = htmlspecialchars($_POST['email']);
            } else {
                $emailErr = "Email is missing!";
                $smarty->assign('emailErr', $emailErr);
            }
    
    
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
    
    
    
            if (empty($nameErr) 
                && empty($emailErr) 
                && empty($passwordErr) 
                && empty($mobileNumberErr) 
                && empty($passwordLengthErr)) 
            { 
    
                
    
                // check duplicate email address
                require './model/userModel.php';
    
                $app = new userModel($this->conn);
                $user = $app->getUserData($email);
    
                if(isset($user['email'])){
                    $mailExists = "Email id already exists";
                    $smarty->assign('mailExists', $mailExists);
                }
            
                
    
    
                
                if (!empty($email) && empty($mailExists)) 
                {
                        // add data in the data base
                        $dataInsertMsg = $app->insertUserData($name,
                                                              $mobileNumber,
                                                              $email,
                                                              $passwordHash);
                        if($dataInsertMsg) {


                            setcookie('signUp', "Done", time() + (86400 * 30), "/");
                            header('Location: http://127.0.0.1/dailycart3/dashboard/index');
                        } else {
                            header('Location: http://127.0.0.1/dailycart3/authController/login');
                        }
    
                }
            }
        }
        $smarty->display('../view/signup.tpl');
        

    }

    public function logout() 
    {
        

        if (isset($_COOKIE['id'])) {
            unset($_COOKIE['id']); 
            setcookie('id', null, -1, '/'); 

        } 
        if (isset($_COOKIE['email'])) {
            unset($_COOKIE['email']); 
            setcookie('email', null, -1, '/'); 
            
        } 
        if (isset($_COOKIE['editaddressid'])) {
            unset($_COOKIE['editaddressid']); 
            setcookie('editaddressid', null, -1, '/'); 
            
        }
        header('Location: http://127.0.0.1/dailycart3/dashboard/index');
    }
}
?>