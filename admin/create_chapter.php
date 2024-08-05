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
if (isset($_POST['org_id']) || isset($_POST['chapter_title']) || isset($_POST['subject_id']) || isset($_POST['class_id'])) {

    $chapter_title = $_REQUEST['chapter_title'];
    $org_id = $_REQUEST['org_id'];
    $subject_id = $_REQUEST['subject_id'];
    $class_id = $_REQUEST['class_id'];

    // $slug = createSlug($degis_title);



    $sql = "INSERT INTO `chapter`( `chapter_name`, `org_id`, `class_id`, `subject_id`, `status`) 
    VALUES ('$chapter_title','$org_id','$class_id','$subject_id','1')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Chapter Created')</script>";
        echo "<script>window.location.replace('create_chapter.php');</script>";
    } else {
        //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

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
                       
                    </div>
                </div>
                <!-- <h3 class="content-header-title mb-0">Basic Forms</h3> -->
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                  
                </div>
            </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form">Create Chapter</h4>
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
                                    <form class="form" id="chapterForm" method="POST">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-user"></i> </h4>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> Organisation Id</label>
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
                                                            <option value=""> Select Section</option>
                                                        </select>
                                                        <!-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname"> -->
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Chapter Title</label>
                                                        <input type="text" id="chapter_title" class="form-control" placeholder="Chapter Title" name="chapter_title">
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" name="chapter_save">
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    // Function to populate classes based on organization
    function populateClasses(orgId) {
        $.ajax({
            type: "POST",
            url: "ajax/get_class.php",
            data: {
                org_id: orgId
            },
            dataType: "json",
            success: function(data) {
                $("#class_id").html(data.classes);
            }
        });
    }

    // Function to populate subjects based on class
    function populateSubjects(classId) {
        $.ajax({
            type: "POST",
            url: "ajax/get_subject.php",
            data: {
                class_id: classId
            },
            dataType: "json",
            success: function(data) {
                $("#subject_id").html(data.subject);
            }
        });
    }

    // Trigger the change event for org_id to load classes on page load
    var orgId = $("#org_id").val();
    populateClasses(orgId);

    // Trigger the change event for class_id to load subjects on page load
    var classId = $("#class_id").val();
    populateSubjects(classId);

    // Handle change events for org_id and class_id
    $("#org_id").change(function() {
        var orgId = $(this).val();
        populateClasses(orgId);
    });

    $("#class_id").change(function() {
        var classId = $(this).val();
        populateSubjects(classId);
    });
});

</script>


<script>
    $(document).ready(function() {
        $('#chapterForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Serialize the form data
            var formData = $('#chapterForm').serialize();
            console.log(formData);

            $.ajax({
                type: 'POST',
                url: 'create_chapter.php', // Replace with the correct path to your PHP script
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Handle the response from the PHP script here
                    alert('New Chapter Created');
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

<?php include "../common/footer.php"; ?>