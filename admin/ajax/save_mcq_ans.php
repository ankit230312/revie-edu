<?php
include "../db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`) 
    VALUES ('" . $_POST["org_id"] . "','" . $_POST["class_id"] . "','" . $_POST["subject_id"] . "','" . $_POST["section_id"] . "','" . $_POST["chapter_id"] . "','" . $_POST["sub_chapter_id"] . "',
        '" . $_POST["exam_id"] . "','" . $_POST["exam_type"] . "','" . $_POST["mcq_ques"] . "','" . $_POST["mcq_opt1"] . "','" . $_POST["mcq_opt2"] . "','" . $_POST["mcq_opt3"] . "','" . $_POST["mcq_opt4"] . "',
         '" . $_POST["mcq_correct_opt"] . "','" . $_POST["mcq_marks"] . "','" . $_POST["mcq_solution"] . "')";

$save = mysqli_query($conn, $sql);

if ($save) {
    $question_id = mysqli_insert_id($conn);
    $uploadDirectory = '../question_images/';

    foreach ($_FILES['question_images']['tmp_name'] as $key => $tmp_name) {
        $file_name = basename($_FILES['question_images']['name'][$key]);
        $file_tmp = $_FILES['question_images']['tmp_name'][$key];
        $filePath = $uploadDirectory . $file_name;

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($file_tmp, $filePath)) {
            // Insert the file path into the question_images table
            $sql = "INSERT INTO `question_images` (`question_id`, `question_images`) VALUES ('$question_id', '$file_name')";
            if (!mysqli_query($conn, $sql)) {
                echo json_encode(0);
                exit;
            }
        } else {
            echo json_encode(0);
            exit;
        }
    }
    echo json_encode(1);
} else {
    echo json_encode(0);
}
?>
