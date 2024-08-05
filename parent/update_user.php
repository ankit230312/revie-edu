<?php include "../common/header.php"; ?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rivi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$get_id = $_GET['org_id'];
$sql = "SELECT * FROM user_info where id = '". $get_id ."'";
$result = mysqli_query($conn, $sql);
// print_r($sql);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['upad_save'])){
    $u_fname= $_REQUEST['u_fname'];
    $u_lname= $_REQUEST['u_lname'];
    // $org_reg_date= $_REQUEST['org_reg_date'];
    $u_email= $_REQUEST['u_email'];
    $u_phone= $_REQUEST['u_phone'];
    $u_add= $_REQUEST['u_add'];
    $u_regis= $_REQUEST['u_regis'];

    
    $sql = "UPDATE `user_info` SET 
    `f_name`='$u_fname',
    `l_name`='$u_lname',
    `user_regis`='$u_regis',
    `email`='$u_email',
    `contact`='$u_phone',
    `address`='$u_add' 
    WHERE id = $get_id";
    
     if(mysqli_query($conn, $sql)){
        echo "<script>alert('Data Succesfully Updated')</script>";
        echo "<script> window.location.replace('http://localhost/Rivie_Technology/stack-responsive-bootstrap-4-admin-template/dashboard/admin/manage_user.php')</script>";
     }
     else{
        echo "<script>alert('Data Not Updated')</script>";
        // echo "<script>alert(
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
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
                                <h4 class="card-title" id="basic-layout-form">Create User</h4>
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
                                    <form class="form" method="POST">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-user"></i> User Info</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">First Name</label>
                                                        <input type="text" value="<?php echo $row['f_name']; ?>" id="projectinput1" class="form-control" placeholder="First Name" name="u_fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Last Name</label>
                                                        <input type="text" value="<?php echo $row['l_name']; ?>" id="projectinput2" class="form-control" placeholder="Last Name" name="u_lname">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Registration Date</label>
                                                        <input type="date" value="<?php echo $row['user_regis']; ?>" id="projectinput2" class="form-control" placeholder="Registration Date" name="u_regis">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" value="<?php echo $row['email']; ?>" id="projectinput3" class="form-control" placeholder="E-mail" name="u_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Contact Number</label>
                                                        <input type="text" value="<?php echo $row['contact']; ?>" id="projectinput4" class="form-control" placeholder="Phone" name="u_phone">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="fa fa-paperclip"></i> Requirements</h4>

                                            <div class="form-group">
                                                <label for="companyName">Address</label>
                                                <input type="text" id="companyName" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Company Name" name="u_add">
                                            </div>

                                         
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" name="upad_save">
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




<?php include "../common/footer.php"; ?>