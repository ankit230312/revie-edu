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
                                <h4 class="card-title" id="basic-layout-form">Schedule Exam</h4>
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

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="exam_list">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="exam_subject">

                                                </div>
                                            </div>

                                        </div>


                                    </div>

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

        $("#class_id").change(function() {
            var subject_id = $("#class_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_section.php", // Path to the fetch_classes.php script
                data: {
                    subject_id: subject_id
                },
                dataType: "json",
                success: function(data) {
                    // Populate class select
                    $("#section_id").html(data.section);
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
        $("#subject_id").change(function() {
            var subject_id = $("#subject_id").val();

            $.ajax({
                type: "POST",
                url: "ajax/get_exam.php", // Path to the fetch_classes.php script
                data: {
                    subject_id: subject_id
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

<?php include "../common/footer.php"; ?>