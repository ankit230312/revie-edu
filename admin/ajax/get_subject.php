<?php
// fetch_classes.php
$class_id = $_POST['class_id'];

include "../db.php";
// Replace the following with your database connection code
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "rivi";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Fetch classes based on the selected organization and role
$sql = "SELECT * FROM subject WHERE class_id = '$class_id'";
$result = mysqli_query($conn, $sql);

$subjectOption = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $subjectOption .= "<option value='{$row['id']}'>{$row['sub_name']}</option>";
    }
}

mysqli_close($conn);

$response = array(
    'subject' => $subjectOption
);

echo json_encode($response);
?>
