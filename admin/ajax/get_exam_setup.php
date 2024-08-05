<?php
header("Content-Type: application/json"); // Set JSON content type

$class_id = $_POST['class_id'];

include "../db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    $response = array('error' => 'Database connection error');
    echo json_encode($response);
    exit;
}

$sql = "SELECT * FROM chapter_sub_name WHERE class_id = '$class_id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    $response = array('error' => 'Database query error');
    echo json_encode($response);
    mysqli_close($conn);
    exit;
}

$sectionOption = array();
while ($row = mysqli_fetch_assoc($result)) {
    $sectionOption[] = array(
        'id' => $row['id'],
        'chapter_sub_name' => $row['chapter_sub_name']
    );
}

mysqli_close($conn);

$response = array(
    'sub_chapter' => $sectionOption
);

echo json_encode($response);
?>
