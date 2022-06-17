    
<?php
require 'parentController.php';
class seller extends parentController 
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

    public function sellerRegister() 
    {
        
        


        if($this->user['profile'] == 'seller') {
            header('Location: http://127.0.0.1/dailycart3/user/myAccount');
        }
        $smarty = new smarty();
        $smarty->assign('check', isset($_COOKIE['id']));


        $name = $email = $address= $mobileNumber = "";
        $nameErr = $emailErr = $addressErr = $mobileNumberErr = "";
        $formSubmitted = "";

        $smarty->assign('name', $name);
        $smarty->assign('address', $address);
        $smarty->assign('mobileNumber', $mobileNumber);


        $smarty->assign('emailErr', $emailErr);
        $smarty->assign('nameErr', $nameErr);
        $smarty->assign('addressErr', $addressErr);
        $smarty->assign('mobileNumberErr', $mobileNumberErr);

        if(isset($_POST['submit']))
        {
            if (!empty($_POST['name'])) {
                $name = htmlspecialchars($_POST['name']);
            } else {
                $nameErr = "Name is missing";
            $smarty->assign('nameErr', $nameErr);

            }

            if (!empty($_POST['email'])) {
                $email = htmlspecialchars($_POST['email']);
            } else {
                $emailErr = "Email is missing";
                $smarty->assign('emailErr', $emailErr);

            }

            if (!empty($_POST['mobileNumber'])) {
                $mobileNumber = htmlspecialchars($_POST['mobileNumber']);
            } else {
                $mobileNumberErr = "mobileNumber is missing";
                $smarty->assign('mobileNumberErr', $mobileNumberErr);

            }



            if (!empty($_POST['address'])) {
                $address = htmlspecialchars($_POST['address']);
            } else {
                $addressErr = "address is missing";
                $smarty->assign('addressErr', $addressErr);

            }

            if (empty($nameErr) && empty($emailErr) && empty($addressErr) && empty($mobileNumberErr)) {
                //update profile to seller
                $userId = $this->user['id'];
                require './model/sellerModel.php';
                $temp2 = new sellerModel($this->conn);
                $temp2->updateSellerId($userId);
                $temp2->insertSellerData($name, $email, $mobileNumber, $address, $userId);

                setcookie('sellerForm', "Done", time() + (86400 * 30), "/");

                header('Location: http://127.0.0.1/dailycart3/user/myAccount');
                
            }
        }

            $smarty->display('../view/sellerForm.tpl');

    }
}

?>

