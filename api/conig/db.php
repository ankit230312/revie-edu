<?php session_start();
   
         $host = "localhost";
         $database_name = "rivi";
         $username = "root";
         $password = "";
         $conn;
        
            $conn = null;
            try{
                $conn = new PDO("mysql:host=" . $host . ";dbname=" . $database_name, $username, $password);
                $conn->exec("set names utf8");
                // echo $conn;
                // http_response_code(393);
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $conn;
        
        
    
?>