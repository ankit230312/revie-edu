<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rivi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$get_id = $_GET['org_id'] ;

$sql = "DELETE FROM user_info WHERE id=$get_id";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Data Succesfully Deleted')</script>";
    echo "<script> window.location.replace('http://localhost/Rivie_Technology/stack-responsive-bootstrap-4-admin-template/dashboard/admin/manage_user.php')</script>";
 }
 else{
    echo "<script>alert('Data Not Delete')</script>";
    // echo "<script>alert(
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
?>





