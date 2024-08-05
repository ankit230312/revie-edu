<?php include"../common/header.php"; ?>

<?php 
include "db.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['brd_ins'])){

    $brd_name= $_REQUEST['brd_name'];
    $brd_title= $_REQUEST['brd_title'];
    // $org_reg_date= $_REQUEST['org_reg_date'];
    $brd_email= $_REQUEST['brd_email'];
    $brd_cont= $_REQUEST['brd_cont'];
    $brd_add= $_REQUEST['brd_add'];
    $brd_disp= $_REQUEST['brd_disp'];



$sql = "INSERT INTO `brnd_info`(`brd_name`, `brd_title`,  `brd_email`, `brd_con`, `brd_add`, `brd_dis`)
 VALUES ('$brd_name','$brd_title','$brd_email','$brd_cont','$brd_add','$brd_disp')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Brand Created')</script>";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  
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
                                <h4 class="card-title" id="basic-layout-form">General Settings</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse" ><i data-feather="minus" class="feather icon-minus"></i></a></li>
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
                                            <h4 class="form-section"><i class="feather icon-user"></i> Brand Info</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Brand Name</label>
                                                        <input type="text" id="projectinput1" class="form-control" placeholder="Brand Name" name="brd_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Brand Title</label>
                                                        <input type="text" id="projectinput2" class="form-control" placeholder="Brand Title" name="brd_title">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Registration</label>
                                                        <input type="date" id="projectinput2" class="form-control" placeholder="Registration Date" name="brd_reg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">Brand E-mail</label>
                                                        <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="brd_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4"> Brand Contact Number</label>
                                                        <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="brd_cont">
                                                    </div>
                                                </div>
                                            </div>

                                      
                                            <div class="form-group">
                                                <label for="companyName">Address</label>
                                                <input type="text" id="companyName" class="form-control" placeholder="Address" name="brd_add">
                                            </div>

                                           
                                            <div class="form-group">
                                                <label for="projectinput8">Brand Discription</label>
                                                <textarea id="projectinput8" rows="5" class="form-control" name="brd_disp" placeholder="Brand Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" name="brd_ins">
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







<?php include"../common/footer.php"; ?>