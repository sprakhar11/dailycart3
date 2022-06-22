<?php
require 'parentController.php';
class address extends parentController 
{
    //comment
    public $conn;
    public $user;

    public function __construct($conn) 
    {
        $this->conn = $conn;
        $isLoginRequired = 1;
        parent::__construct($conn, $isLoginRequired);
        $app = new userModel($this->conn);
        $this->user = $app->getUserDataViaId(parent::decryptData($_COOKIE['id']));
    }

    public function editAddress($editAddressId = ' ')
    {

        
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));
        
        require './model/addressModel.php';
        $temp2 = new addressModel($this->conn);
        $address = $temp2->getAddressDataViaId($editAddressId);
        
        if($address) {

            if($this->user['id'] == $address['userid'] ) {

                $country = $name = $phone = $pincode = $addline1 = $city = "";
                $state = $type = $addressid = "";
                $countryErr = $nameErr = $phoneErr = $pincodeErr = "";
                $addline1Err = $cityErr = $stateErr ="";
                $typeErr ="";
                $smarty->assign('country', $address['country']);
                $smarty->assign('name', $address['name']);
                $smarty->assign('phone', $address['phone']);
                $smarty->assign('pincode', $address['pincode']);
                $smarty->assign('addline1', $address['addline1']);
                $smarty->assign('city', $address['city']);
                $smarty->assign('state', $address['state']);
                $smarty->assign('type', $address['type']);
                $smarty->assign('countryErr', "");
                $smarty->assign('nameErr', "");
                $smarty->assign('phoneErr', "");
                $smarty->assign('pincodeErr', "");
                $smarty->assign('addline1Err', "");
                $smarty->assign('cityErr', "");
                $smarty->assign('stateErr', "");
                $smarty->assign('typeErr', "");

                if (isset($_POST['submit'])) {
        
                    if (!empty($_POST['country'])) {

                        $country = htmlspecialchars($_POST['country']);
                    } else {

                        $country = $address['country'];
                    }
                    if (!empty($_POST['name'])) {

                        $name = $_POST['name'];
                    } else {

                        $name = $address['name'];
                    }
                    if (!empty($_POST['phone'])) {

                        $phone = $_POST['phone'];
                    } else {

                        $phone = $address['phone'];
                    }
                    if (!empty($_POST['phone']))
                    if ( strlen(strval($phone)) != 10) {

                        $phoneErr= "Length should be 10 integers";
                    }
                    if (!empty($_POST['pincode'])) {

                        $pincode = $_POST['pincode'];
                    } else {

                        $pincode = $address['pincode'];
                    }
                    if (!empty($_POST['addline1'])) {

                        $addline1 = $_POST['addline1'];
                    } else {

                        $addline1 = $address['addline1'];
                    }
        
                    if (!empty($_POST['city'])) {

                        $city = $_POST['city'];
                    } else {

                        $city = $address['city'];
                    }
                    if (!empty($_POST['state'])) {

                        $state = $_POST['state'];
                    } else {

                        $state = $address['state'];
                    }
                    if (!empty($_POST['type'])) {

                    $type = $_POST['type'];
                    } else {

                        $type = $address['type'];
                    }

                    if (empty($nameErr)
                        && empty($countryErr)
                        && empty($phoneErr)
                        && empty($pincodeErr)
                        && empty($addline1Err)
                        && empty($stateErr)
                        && empty($cityErr)
                        && empty($typeErr)) {
                        
                            $temp2->updateAddressData(  
                                                      $country,
                                                      $name,
                                                      $phone,
                                                      $pincode,
                                                      $addline1,
                                                      $city,
                                                      $state,
                                                      $type,
                                                      $editAddressId);

                        setcookie('updateMsg', "Done", time() + (86400 * 30), "/");
                        header('Location: http://127.0.0.1/dailycart3/address/manageAddress');
                    }
                }

                $smarty->assign('id', $address['id']);
                
                $smarty->display('../view/edit_address.tpl');


            } else {

                header('Location: http://127.0.0.1/dailycart3/address/manageAddress');
                    }
        } else {

        header('Location: http://127.0.0.1/dailycart3/address/manageAddress');
        }

    }

    public function deleteAddress($addressId = '') 
    {

        require './model/addressModel.php';
        $temp2 = new addressModel($this->conn);

        $address = $temp2->getAddressDataViaId($addressId);

        if ($address) {

            if ($this->user['id'] == $address['userid'] ) {
                //delete the address from
                $deletemsg = $temp2->deleteAddressId($addressId);
                setcookie('deletemsg', $deletemsg, time() + (86400 * 30), "/");
                header('Location: http://127.0.0.1/dailycart3/address/manageAddress');



            }
        } 

        header('Location: http://127.0.0.1/dailycart3/address/manageAddress');

        

        

    }

    public function manageAddress() 
    {

        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));
        require './model/addressModel.php';
        $temp2 = new addressModel($this->conn);
        $smarty->assign('update_message', "");

        if (isset($_COOKIE['updateMsg'])) {
            
            $smarty->assign('update_message', "Address Updated Successfully");
            unset($_COOKIE['updateMsg']); 
            setcookie('updateMsg', null, -1, '/');
            
        }
        
        $smarty->assign('deletemsg', "");
        if (isset($_COOKIE['deletemsg'])) {
            
            $smarty->assign('deletemsg', "Address Deleted Successfully");
            unset($_COOKIE['deletemsg']); 
            setcookie('deletemsg', null, -1, '/');
        }
        $smarty->display('../view/manage_address.tpl');

        $address = $temp2->getAllAddress();
        $cntAddress = 0;
        $smarty->display('../view/flexStart.tpl');
        foreach ($address as $value){

            if($value['userid'] == $this->user['id']){

                $smarty->assign('value', $value);
                $cntAddress = $cntAddress + 1;
                $editUrl = 'http://127.0.0.1/dailycart3/address/editAddress/'.$value['id'];
                $url = 'http://127.0.0.1/dailycart3/address/deleteAddress/'.$value['id'];
                $smarty->assign('url', $url);
                $smarty->assign('editUrl', $editUrl);

                

                $smarty->display('../view/display_address.tpl');

            }


        }
        $smarty->display('../view/flexEnd.tpl');
        $smarty->assign('address_found_message', '');
        if ($cntAddress == 0) {

            $smarty->assign('address_found_message', 'No address found in record. Please add first');
        }
        $smarty->display('../view/manage_address_message.tpl');

    }

    public function addAddress() 
    {
        $smarty = new Smarty();
        $smarty->assign('check', isset($_COOKIE['id']));

        $smarty->assign('country', "");
        $smarty->assign('name', "");
        $smarty->assign('phone', "");
        $smarty->assign('pincode', "");
        $smarty->assign('addline1', "");
        $smarty->assign('city', "");
        $smarty->assign('state', "");
        $smarty->assign('type', "");
        $smarty->assign('countryErr', "");
        $smarty->assign('nameErr', "");
        $smarty->assign('phoneErr', "");
        $smarty->assign('pincodeErr', "");
        $smarty->assign('addline1Err', "");
        $smarty->assign('cityErr', "");
        $smarty->assign('stateErr', "");
        $smarty->assign('typeErr', "");
        $smarty->assign('addressAdded', "");

        $userId = $this->user['id'];
        // $addressAdded = ""; 
        // echo $userId;
        if (isset($_POST['submit'])) {


            if (!empty($_POST['country'])) {
                $country = htmlspecialchars($_POST['country']);
            } else {
                $countryErr = "country is missing";
                $smarty->assign('countryErr', 'Country is missing');
            }

            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            } else {
                $nameErr = "name is missing!";
                $smarty->assign('nameErr', 'Name is missing');
            }
            if (!empty($_POST['phone'])) {
                $phone = $_POST['phone'];
            } else {
                $phoneErr = "Mobile number is missing!";
                $smarty->assign('phoneErr' , $phoneErr);
            }
            if (!empty($_POST['phone']))
            if( strlen(strval($phone)) != 10)
            {
                // echo strval($phone);
                $phoneErr= "Length should be 10 integers";
                $smarty->assign('phoneErr' , $phoneErr);

            }
            if (!empty($_POST['pincode'])) {
                $pincode = $_POST['pincode'];
            } else {
                $pincodeErr = "pincode is missing!";
                $smarty->assign('pincodeErr' , $pincodeErr);

            }
            if (!empty($_POST['addline1'])) {
                $addline1 = $_POST['addline1'];
            } else {
                $addline1Err = "Address is missing!";
                $smarty->assign('addline1', 'Address is missing!');
            }

            if (!empty($_POST['city'])) {
                $city = $_POST['city'];
            } else {
                $cityErr = "City is missing!";
                $smarty->assign('cityErr', 'City is missing!');
            }
            if (!empty($_POST['state'])) {
                $state = $_POST['state'];
            } else {
                $stateErr = "State is missing!";
                $smarty->assign('stateErr', $stateErr);

            }
            if (!empty($_POST['type'])) {
                $type = $_POST['type'];
            } else {
                $typeErr = "Type is missing!";
                $smarty->assign('typeErr', $typeErr);
            }

            if (empty($nameErr)
                && empty($countryErr)
                && empty($phoneErr)
                && empty($pincodeErr)
                && empty($addline1Err)
                && empty($stateErr)
                && empty($cityErr)
                && empty($typeErr)
            ) {
                    $userId = $this->user['id'];
                    require './model/addressModel.php';
                    $temp2 = new addressModel($this->conn);
                    $addressAdded =  $temp2->insertAddressData(
                            $country,
                            $name,
                            $phone,
                            $pincode,
                            $addline1,
                            $city,
                            $state,
                            $type,
                            $userId);

                    
                    setcookie('addressAdded', "Done" , time() + (86400 * 30), "/");
                    header('Location: http://127.0.0.1/dailycart3/user/myAccount');
            }
        }


        $smarty->display('../view/add_address.tpl');

    }
}
?>