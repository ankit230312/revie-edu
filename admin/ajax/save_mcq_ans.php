<?php
// fetch_classes.php
include "../db.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
#print_r($_POST);die;

$sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`) 
    VALUES ('" . $_POST["org_id"] . "','" . $_POST["class_id"] . "','" . $_POST["subject_id"] . "','" . $_POST["section_id"] . "','" . $_POST["chapter_id"] . "','" . $_POST["sub_chapter_id"] . "',
        '" . $_POST["exam_id"] . "','" . $_POST["exam_type"] . "','" . $_POST["mcq_ques"] . "','" . $_POST["mcq_opt1"] . "','" . $_POST["mcq_opt2"] . "','" . $_POST["mcq_opt3"] . "','" . $_POST["mcq_opt4"] . "',
         '" . $_POST["mcq_correct_opt"] . "','" . $_POST["mcq_marks"] . "','" . $_POST["mcq_solution"] . "')";

$save = mysqli_query($conn,$sql);

if($save)
{
    echo "1";
}else{
    echo "0";
}
?>
