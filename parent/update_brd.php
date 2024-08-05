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
$sql = "SELECT * FROM brnd_info where id = '". $get_id ."'";

$result = mysqli_query($conn, $sql);
// print_r($sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['up_brd'])){
    $brd_name= $_REQUEST['brd_name'];
    $brd_title= $_REQUEST['brd_title'];
     $brd_reg= $_REQUEST['brd_reg'];
    $brd_email= $_REQUEST['brd_email'];
    $brd_cont= $_REQUEST['brd_cont'];
    $brd_add= $_REQUEST['brd_add'];
    $brd_disp= $_REQUEST['brd_disp'];

    
    $sql = "UPDATE `brnd_info` SET 
    `brd_name`='$brd_name',
    `brd_title`='$brd_title',
    `brd_regis`='$brd_reg',
    `brd_email`='$brd_email',
    `brd_con`='$brd_cont',
    `brd_add`='$brd_add',
    `brd_dis`='$brd_disp' 
    WHERE id = $get_id";
    
     if(mysqli_query($conn, $sql)){
        echo "<script>alert('Data Succesfully Updated')</script>";
        echo "<script> window.location.replace('http://localhost/Rivie_Technology/stack-responsive-bootstrap-4-admin-template/dashboard/admin/manage_brand.php')</script>";
     }
     else{
        echo "<script>alert('Data Not Updated')</script>";
        // echo "<script>alert(
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
}





// echo $get_id;


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
                         
                                <h4 class="card-title" id="basic-layout-form">Update Setting</h4>
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
                                    <form class="form" method="POST" action="" >
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-user"></i> </h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Brand Name</label>
                                                        <input type="text" value="<?php echo $row['brd_name']; ?>" id="projectinput1" class="form-control" placeholder="First Name" name="brd_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Brand Title</label>
                                                        <input type="text" value="<?php echo $row['brd_title']; ?>" id="projectinput2" class="form-control" placeholder="Last Name" name="brd_title">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="projectinput2">Registration Date</label>
                                                        <input type="date" value="<?php echo $row['brd_regis']; ?>" id="projectinput2" class="form-control" placeholder="Registration Date" name="brd_reg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput3">E-mail</label>
                                                        <input type="text" value="<?php echo $row['brd_email']; ?>" id="projectinput3" class="form-control" placeholder="E-mail" name="brd_email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput4">Contact Number</label>
                                                        <input type="text" value="<?php echo $row['brd_con']; ?>" id="projectinput4" class="form-control" placeholder="Phone" name="brd_cont">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="form-section"><i class="fa fa-paperclip"></i> Requirements</h4>

                                            <div class="form-group">
                                                <label for="companyName">Address</label>
                                                <input type="text" id="companyName" value="<?php echo $row['brd_add']; ?>" class="form-control" placeholder="Company Name" name="brd_add">
                                            </div>

                                            <!-- <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput5">Interested in</label>
                                                        <select id="projectinput5" name="interested" class="form-control">
                                                            <option value="none" selected="" disabled="">Interested in</option>
                                                            <option value="design">design</option>
                                                            <option value="development">development</option>
                                                            <option value="illustration">illustration</option>
                                                            <option value="branding">branding</option>
                                                            <option value="video">video</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput6">Budget</label>
                                                        <select id="projectinput6" name="budget" class="form-control">
                                                            <option value="0" selected="" disabled="">Budget</option>
                                                            <option value="less than 5000$">less than 5000$</option>
                                                            <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                            <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                            <option value="more than 20000$">more than 20000$</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Select File</label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file">
                                                    <span class="file-custom"></span>
                                                </label>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="projectinput8">About Orgainisation</label>
                                                <textarea id="projectinput8" value="" rows="5" class="form-control"  placeholder="About Organisation" name="brd_disp"><?php echo $row['brd_dis']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="feather icon-x"></i> Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary" name= "up_brd">
                                                    <i class="fa fa-check-square-o" ></i> Save
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