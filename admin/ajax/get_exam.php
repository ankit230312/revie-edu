<?php
// fetch_classes.php
$org_id = $_POST['org_id'];

include "../db.php";
// Replace the following with your database connection code
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "rivi";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Fetch classes based on the selected organization and role
$sql = "SELECT * FROM exam_title WHERE org_id = '$org_id'";
$result = mysqli_query($conn, $sql);

$sectionOption = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $sectionOption .= "<option value='{$row['id']}'>{$row['exam_name']}</option>";
    }
}

mysqli_close($conn);

$response = array(
    'exam' => $sectionOption
);

echo json_encode($response);
?>
