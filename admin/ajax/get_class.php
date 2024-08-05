<?php
// fetch_classes.php
$orgId = $_POST['org_id'];


// Replace the following with your database connection code
include "../db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Fetch classes based on the selected organization and role
$sql = "SELECT * FROM class WHERE org_id = '$orgId'";
$result = mysqli_query($conn, $sql);

$classesOptions = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $classesOptions .= "<option value='{$row['id']}'>{$row['class']}</option>";
    }
}

mysqli_close($conn);

$response = array(
    'classes' => $classesOptions
);

echo json_encode($response);
?>
