<?php include "../common/header.php"; ?>

<?php
include "db.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function createSlug($string)
{
    $string = strtolower($string); // Convert to lowercase
    $string = preg_replace('/[^a-z0-9\-]/', '', $string); // Remove special characters except alphanumeric and hyphens
    $string = preg_replace('/-+/', '-', $string); // Replace multiple hyphens with a single hyphen
    $string = trim($string, '-'); // Trim hyphens from the beginning and end
    return $string;
}
if (isset($_POST['exam_que_save'])) {


    $org_id = $_REQUEST['org_id'];
    $exam_id = $_REQUEST['exam_id'];
    $class_id = $_REQUEST['class_id'];
    $subject_id = $_REQUEST['subject_id'];
    $section_id = $_REQUEST['section_id'];
    $exam_type = $_REQUEST['exam_type'];
    $chapter_id = $_REQUEST['chapter_id'];
    $sub_chapter_id = $_REQUEST['sub_chapter_id'];



    // $exam_que = $_REQUEST['exam_que'];

    // $opt1 = $_REQUEST['opt1'];
    // $opt2 = $_REQUEST['opt2'];
    // $opt3 = $_REQUEST['opt3'];
    // $opt4 = $_REQUEST['opt4'];
    // $correct_opt = $_REQUEST['correct_opt'];

    // $marks = $_REQUEST['marks'];
    // $solution = $_REQUEST['solution'];
    // $slug = createSlug($degis_title);



    $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id` ,`exam_id`, `exam_type`, `status`) 
    VALUES ('$org_id','$class_id','$subject_id','$section_id','$chapter_id','$sub_chapter_id','$exam_id','$exam_type','1')";

    if (mysqli_query($conn, $sql)) {
        $question_id = mysqli_insert_id($conn);


        $_SESSION['new_question_id'] = $question_id;



        echo "<script>alert('Question Created')</script>";
        echo "<script>window.location.replace('next_page.php');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // header("location:create_org.php");

}

?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <!-- <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                  </li>
                </ol> -->
                    </div>
                </div>
                <!-- <h3 class="content-header-title mb-0">Basic Forms</h3> -->
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <!-- <div class="btn-group" role="group">
                        <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
                    </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a> -->
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">Create Question</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i data-feather="minus" class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i data-feather="rotate-cw" class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i data-feather="maximize" class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i data-feather="x" class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <!-- <p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p> -->
                                    </div>
                                    <form class="form" method="POST">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="form-section"><i class="feather icon-user"></i> Exam</h4>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Organisation Id</label>
                                                        <select class="form-control" name="org_id" id="org_id">
                                                            <?php

                                                            $sql = "SELECT * FROM organisation";
                                                            $result = mysqli_query($conn, $sql);
                                                            if (mysqli_num_rows($result) > 0) {
                                                                // output data of each row

                                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['org_name']; ?></option>

                                                            <?php

                                                                }
                                                            } ?>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Exam Id</label>
                                                        <select class="form-control" name="exam_id" id="exam_id">
                                                            <option value=""> Select
                                                                Exam
                                                            </option>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Class</label>
                                                        <select class="form-control" name="class_id" id="class_id">
                                                            <option value=""> Select Class</option>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Subject</label>
                                                        <select class="form-control" name="subject_id" id="subject_id">
                                                            <option value=""> Select Subject</option>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Section</label>
                                                        <select class="form-control" name="section_id" id="section_id">
                                                            <option value=""> Select Section</option>
                                                            <option value="1"> Section A</option>
                                                            <option value="2"> Section B</option>
                                                            <option value="3"> Section C</option>
                                                            <option value="4"> Section D</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Exam Type</label>
                                                        <select class="form-control" name="exam_type" id="exam_type">

                                                            <option value=""> Select Exam Type</option>
                                                            <option value="1"> MCQ</option>
                                                            <option value="2"> Aptitude</option>
                                                            <option value="3"> Numerical Based</option>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Chapter</label>
                                                        <select class="form-control" name="chapter_id" id="chapter_id">
                                                            <option value=""> Select Chapter</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Sub Chapter</label>
                                                        <select class="form-control" name="sub_chapter_id" id="sub_chapter_id">
                                                            <option value=""> Select Sub Chapter</option>

                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row my-5">
                                                <div class="col-md-12">
                                                <div id="imagePreviews"></div>
                                                <input type="file" class="form-control" accept="image/*" multiple onchange="previewImages(event)">

                                                </div>
                                            </div>

                                            <div class="single_mcq">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Exam Question</label>
                                                            <input type="text" id="mcq_ques" class="form-control" placeholder="Exam Question" name="exam_que">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Option 1</label>
                                                            <input type="text" id="mcq_opt1" class="form-control" placeholder="Option 1" name="opt1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Option 2</label>
                                                            <input type="text" id="mcq_opt2" class="form-control" placeholder="Designation Title" name="opt2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Option 3</label>
                                                            <input type="text" id="mcq_opt3" class="form-control" placeholder="Designation Title" name="opt3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Option 4</label>
                                                            <input type="text" id="mcq_opt4" class="form-control" placeholder="Designation Title" name="opt4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Correct Option</label>
                                                            <input type="text" id="mcq_correct_opt" class="form-control" placeholder="Correct Option" name="correct_opt">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Marks</label>
                                                            <input type="text" id="mcq_marks" class="form-control" placeholder="Marks" name="marks">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Solution</label>
                                                            <textarea id="mcq_solution" class="form-control" placeholder="Solution" name="solution"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-primary" name="mcq_save" onclick="save_mcq_question();">
                                                                <i class="fa fa-check-square-o"></i> Save MCQ
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>

                                            <div class="single_numericl">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Exam Question</label>
                                                            <input type="text" id="exam_que" class="form-control" placeholder="Exam Question" name="exam_que">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Correct Option</label>
                                                            <input type="text" id="correct_opt" class="form-control" placeholder="Correct Option" name="correct_opt">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Marks</label>
                                                            <input type="text" id="marks" class="form-control" placeholder="Marks" name="marks">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Solution</label>
                                                            <textarea id="solution_mcq" class="form-control" placeholder="Solution" name="solution"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-3">
                                                        <div class="form-group">
                                                            <button type="button" class="btn btn-primary" name="mcq_numerical" onclick="save_numerical();">
                                                                <i class="fa fa-check-square-o"></i> Save Numerical
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="row">
                                            <div class="form-group" id="bulk">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" name="exam_que_save">
                                                    <i class="fa fa-check-square-o"></i> Bulk Upload
                                                </button>
                                            </div>


                                            <div class="form-group ml-auto">
                                                <button type="button" id="add_que" class="btn btn-primary mr-1">
                                                    <i class="feather icon-x"></i> Add
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
<!-- END: Content-->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function save_mcq_question() {
        var formData = {
            org_id: $('#org_id').val(),
            exam_id: $('#exam_id').val(),
            class_id: $('#class_id').val(),
            subject_id: $('#subject_id').val(),
            section_id: $('#section_id').val(),
            exam_type: $('#exam_type').val(),
            chapter_id: $('#chapter_id').val(),
            sub_chapter_id: $('#sub_chapter_id').val(),
            mcq_ques: $("#mcq_ques").val(),
            mcq_opt1: $("#mcq_opt1").val(),
            mcq_opt2: $("#mcq_opt2").val(),
            mcq_opt3: $("#mcq_opt3").val(),
            mcq_opt4: $("#mcq_opt4").val(),
            mcq_correct_opt: $("#mcq_correct_opt").val(),
            mcq_marks: $("#mcq_marks").val(),
            mcq_solution: $("#solution_mcq").val()
        };

        $.ajax({
            type: "POST",
            url: "ajax/save_mcq_ans.php",
            data: formData,
            dataType: "json",
            success: function(data) {
                // Populate class select
                if (data == '1') {
                    alert("question created successfully");
                    $("#single_mcq").trigger('reset');
                } else {
                    alert("please try again");
                }
                // $("#subject_id").html(data.subject);
            }
        });
    }


    function save_numerical() {
        var formData = {
            org_id: $('#org_id').val(),
            exam_id: $('#exam_id').val(),
            class_id: $('#class_id').val(),
            subject_id: $('#subject_id').val(),
            section_id: $('#section_id').val(),
            exam_type: $('#exam_type').val(),
            chapter_id: $('#chapter_id').val(),
            sub_chapter_id: $('#sub_chapter_id').val(),
            mcq_ques: $("#exam_que").val(),
            mcq_correct_opt: $("#correct_opt").val(),
            mcq_marks: $("#marks").val(),
            mcq_solution: $("#mcq_solution").val()
        };

        $.ajax({
            type: "POST",
            url: "ajax/save_mcq_ans.php",
            data: formData,
            dataType: "json",
            success: function(data) {
                // Populate class select
                if (data == '1') {
                    alert("question created successfully");
                    $("#single_mcq").trigger('reset');
                } else {
                    alert("please try again");
                }
                // $("#subject_id").html(data.subject);
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        var selectedOption = $("#exam_type").val();
        console.log(selectedOption);

        $(".single_mcq").hide();
        $(".single_numericl").hide();
        $("#add_que").click(function() {
            var selectedOption = $("#exam_type").val();

            // Hide all divs with the class 'single_numericl' and 'single_mcq'
            $(".single_numericl").hide();
            $(".single_mcq").hide();
            $("#bulk").hide();


            // Show the 'single_numericl' div if "Numerical Based" is selected
            if (selectedOption === "3") {
                $(".single_numericl").show();
            }
            // Show the 'single_mcq' div if "MCQ" or "Aptitude" is selected
            else if (selectedOption === "1" || selectedOption === "2") {
                $(".single_mcq").show();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // When organization or role is selected, fetch classes
        $("#org_id").change(function() {
            var orgId = $("#org_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_class.php", // Path to the fetch_classes.php script
                data: {
                    org_id: orgId
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#class_id").html(data.classes);
                }
            });
        });

        $("#class_id").change(function() {
            var class_id = $("#class_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_subject.php", // Path to the fetch_classes.php script
                data: {
                    class_id: class_id
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#subject_id").html(data.subject);
                }
            });
        });



        // $("#class_id").change(function() {
        //     var subject_id = $("#class_id").val();

        //     $.ajax({
        //         type: "POST",
        //         url: "ajax/get_section.php", // Path to the fetch_classes.php script
        //         data: {
        //             subject_id: subject_id
        //         },
        //         dataType: "json",
        //         success: function(data) {
        //             // Populate class select
        //             $("#section_id").html(data.section);
        //         }
        //     });
        // });

        $("#chapter_id").change(function() {
            var chapter_id = $("#chapter_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_sub_chapter.php", // Path to the fetch_classes.php script
                data: {
                    chapter_id: chapter_id
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#sub_chapter_id").html(data.sub_chapter);
                }
            });
        });

        $("#subject_id").change(function() {
            var subject_id = $("#subject_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_chapter.php", // Path to the fetch_classes.php script
                data: {
                    subject_id: subject_id
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#chapter_id").html(data.chapter);
                }
            });
        });
        $("#org_id").change(function() {
            var org_id = $("#org_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_exam.php", // Path to the fetch_classes.php script
                data: {
                    org_id: org_id
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#exam_id").html(data.exam);
                }
            });
        });



    });
</script>
<script>
    function previewImages(event) {
        const previewContainer = document.getElementById('imagePreviews');

        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                const imagePreview = document.createElement('div');
                imagePreview.classList.add('image-preview');
                const image = document.createElement('img');
                image.src = e.target.result;
                imagePreview.appendChild(image);
                previewContainer.appendChild(imagePreview);
            };

            reader.readAsDataURL(file);
            console.log(reader)
        }
    }
</script>

<?php include "../common/footer.php"; ?>