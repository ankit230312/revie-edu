<?php
// Include your database connection code
include "../db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Get the selected sub-chapter IDs from the AJAX request
$subChapterIds = $_POST['subChapterIds'];

// Construct a comma-separated string of sub-chapter IDs for the SQL query
$subChapterIdsString = implode(",", $subChapterIds);

// Create a SQL query to fetch questions based on the selected sub-chapter IDs
$sql = "SELECT * FROM exam_question WHERE sub_chapter_id IN ($subChapterIdsString)";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

// Create an array to store the fetched questions
$questions = array();

while ($row = mysqli_fetch_assoc($result)) {
    $questions[] = $row;
}

// Close the database connection
mysqli_close($conn);

// Return the questions as JSON
echo json_encode($questions);
?>
