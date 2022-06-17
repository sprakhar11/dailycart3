<?php
require 'parentController.php';
class dashboard extends parentController 
{

    public $conn;
    public $user;
    public function __construct($conn) 
    {
        $this->conn = $conn;
        $isLoginRequired = 0;
        parent::__construct($conn, $isLoginRequired);
    }

    public function index()
    {

        require './model/productModel.php';

        $app = new productModel($this->conn);
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));

        $smarty->assign('signUpMsg', "");
        if (isset($_COOKIE['signUp'])) {
            
            $smarty->assign('signUpMsg', "Signed Up Successfully");
            unset($_COOKIE['signup']); 
            setcookie('signUp', null, -1, '/');
            
        }

        $smarty->assign('loginMsg', "");
        if (isset($_COOKIE['loginMsg'])) {
            
            $smarty->assign('loginMsg', "Logged Successfully");
            unset($_COOKIE['loginMsg']); 
            setcookie('loginMsg', null, -1, '/');
            
        }



        $productList = $app->getAllProducts();
        $smarty->assign('product', $productList);
        $smarty->display('../view/allProducts.tpl');
    }

 

    

}
?>