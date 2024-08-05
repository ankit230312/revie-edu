<?php
// fetch_classes.php
$subject_id = $_POST['subject_id'];

include "../db.php";
// Replace the following with your database connection code
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "rivi";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Fetch classes based on the selected organization and role
$sql = "SELECT * FROM chapter WHERE subject_id = '$subject_id'";
$result = mysqli_query($conn, $sql);

$sectionOption = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $sectionOption .= "<option value='{$row['id']}'>{$row['chapter_name']}</option>";
    }
}

mysqli_close($conn);

$response = array(
    'chapter' => $sectionOption
);

echo json_encode($response);
?>
