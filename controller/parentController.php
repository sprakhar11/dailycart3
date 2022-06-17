<?php
class parentController {

    public $conn;

    public function __construct($conn, $isLoginRequired = 0) 
    {
        $this->conn = $conn;

        $this->header();
        $this->navbar();

        if ($isLoginRequired == 1) {
            $this->loginCheck();

        }

    }

    public function loginCheck()
    {

        if(isset($_COOKIE['id'])) {
            // decrypt id cookies and check if valic or not
        
            $data = urldecode($_COOKIE['id']);
        
            $encrypted_id = $data;
            $method = 'AES-128-CBC';
            $encryption_key = 'myencryptionkey';
            $parts = explode(':', $encrypted_id);
            $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);
        
        
        
            require './model/userModel.php';
            $app = new userModel($this->conn);
            $user = $app->getUserDataViaId($decrypted_id);

            
            
        
            if(!$user){

                header('Location: http://127.0.0.1/dailycart3/authController/logout');
            } else {
                // return $user;
            }
        
        } else {

            header('Location: http://127.0.0.1/dailycart3/authController/logout');
        }

    }

    public function navbar()
    {
        // $this->header();
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));
        // $smarty->display('../view/navbar.tpl');

    }

    public function header()
    {
        $smarty = new Smarty();
        $smarty->assign('title', 'Shop');
        $smarty->display('../view/header.tpl');

    }

    function encryptData($data) 
    {
        
        $method = 'AES-128-CBC';
        $encryption_key = 'myencryptionkey';
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));
        $encrypted = openssl_encrypt($data, $method, $encryption_key, 0, $iv);
        $encrypted = $encrypted . ':' . $iv;
        $encrypted = urlencode($encrypted);

        return $encrypted;

    }

    function decryptData($data) 
    {

        $encrypted_id = urldecode($data);
        $method = 'AES-128-CBC';
        $encryption_key = 'myencryptionkey';
        $parts = explode(':', $encrypted_id);
        $decrypted_id = openssl_decrypt($parts[0], $method, $encryption_key, 0, $parts[1]);

        return $decrypted_id;
    }

}
?>