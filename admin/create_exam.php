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
if (isset($_POST['exam_title'])  || isset($_POST['org_id'])) {

    $exam_title = $_REQUEST['exam_title'];
    $org_id = $_REQUEST['org_id'];
    // $class_id = $_REQUEST['class_id'];
    // $subject_id = $_REQUEST['subject_id'];

    // $class_id = $_REQUEST['class_id'];
    $slug = createSlug($exam_title);



    $sql = "INSERT INTO `exam_title`(`org_id`, `exam_name`,`slug`) 
    VALUES ('$org_id','$exam_title','$slug')";

    if (mysqli_query($conn, $sql)) {

        // echo "<script>alert('New Exam Created')</script>";
        // echo "<script>window.location.replace('create_exam.php');</script>";
    } else {
        //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
    // header("location:create_org.php");
    mysqli_close($conn);
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
                                <h4 class="card-title" id="basic-layout-form">Create Exam</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="card-text">
                                        <!-- <p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p> -->
                                    </div>
                                    <form class="form" method="POST" id="examForm">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-user"></i> User Info</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Orgain Id</label>
                                                        <select class="form-control" name="org_id" id="org_id">
                                                            <?php
                                                            // print_r($conn);
                                                            // die();
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

                                                    </div>
                                                </div>



                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Exam Title</label>
                                                        <input type="text" id="exam_title" class="form-control" placeholder="Designation Title" name="exam_title">
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" id="exam_save" name="exam_save">
                                                    <i class="fa fa-check-square-o"></i> Save
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


<!-- ... (Your existing HTML and PHP code) -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- ... (Your existing HTML and PHP code) -->

<script>
    $(document).ready(function() {
        // When organization is selected, fetch classes
        $("#org_id").change(function() {
            var orgId = $(this).val();

            $.ajax({
                type: "POST",
                url: "ajax/get_class.php",
                data: {
                    org_id: orgId
                },
                dataType: "json",
                success: function(data) {
                    $("#class_id").html(data.classes);
                    $("#subject_id").html('<option value="">Select Subject</option>'); // Clear subjects when class changes
                }
            });
        });

        // When class is selected, fetch subjects
        $("#class_id").change(function() {
            var classId = $(this).val();

            $.ajax({
                type: "POST",
                url: "ajax/get_subject.php", // Create a similar PHP file to handle subject retrieval
                data: {
                    class_id: classId
                },
                dataType: "json",
                success: function(data) {

                    $("#subject_id").html(data.subject);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#examForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Serialize the form data
            var formData = $('#examForm').serialize();
            console.log(formData);

            $.ajax({
                type: 'POST',
                url: 'create_exam.php', // Replace with the correct path to your PHP script
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle the response from the PHP script here
                    alert('New Exam Created');
                    // window.location.replace('create_exam.php');
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


<!-- ... (Rest of your HTML code) -->

<?php include "../common/footer.php"; ?>


<!-- ... (Rest of your HTML code) -->