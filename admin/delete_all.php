<?php
// delete_all.php

if (isset($_GET['table_name']) && isset($_GET['id'])) {
    $tableName = $_GET['table_name'];
    $idToDelete = $_GET['id'];
    
   
    function deleteData($tableName, $idToDelete)
    {
        include "db.php";


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("DELETE FROM $tableName WHERE id = ?");
        $stmt->bind_param("i", $idToDelete);

        if ($stmt->execute()) {
            echo "<script>alert('Delete Successfull')</script>";
            echo "<script>window.location.replace('manage_$tableName.php');</script>";
        } else {
            echo "Error deleting data: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "Invalid request";
}

deleteData($tableName, $idToDelete);

?>