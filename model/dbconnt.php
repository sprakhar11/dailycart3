<?php
class database{

    public function dbconnt()
    {

            define("DB_HOST","localhost");
            define("DB_USER","prakhar");
            define("DB_PASS","");
            define("DB_NAME","dailycart");

            $conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

            if($conn->connect_error){
                
                header('Location: databaseConnectionError.html');

            } else {
                // No error  occurred
            }
            return $conn;
    }

}

$dbobj = new database();
