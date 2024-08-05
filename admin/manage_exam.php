<?php include "../common/header.php"; ?>
<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




?>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manage Exam</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse"><i class="feather icon-minus"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"><i class="feather icon-rotate-cw"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="expand"><i class="feather icon-maximize"></i></a>
                                        </li>
                                        <li>
                                            <a data-action="close"><i class="feather icon-x"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <p class="card-text">

                                    </p>
                                    <div class="table-responsive">
                                        <table id="manage_org" class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Organisation Name</th>
                                                   
                                                    <th>Exam Name</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                // $sql = "SELECT c.*, o.org_name FROM class c
                                                // INNER JOIN organisation o ON c.org_id = o.id";
                                                $sql = "SELECT c.*, o.org_name, s.* , e.*
                                                FROM class c
                                                INNER JOIN organisation o ON c.org_id = o.id
                                                INNER JOIN subject s ON c.id = s.class_id
                                                INNER JOIN exam_title e ON e.class_id = c.id
                                                ";
                                                $result = mysqli_query($conn, $sql);
                                                // $get_org_name= "SELECT * FROM designation
                                                // JOIN organisation ON designation.org_id =organisation.id";
                                                $i = 1;
                                                $result = mysqli_query($conn, $sql);
                                                if (!$result) {
                                                    die("Query failed: " . mysqli_error($conn));
                                                }
                                                //  print_r($get_org_name);
                                                // die();
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                                        <tr>
                                                            <th> <?php echo $i ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            
                                                            <td><?php echo $row['exam_name']; ?></td>
                                                            <td>
                                                                <a href="update_org.php?org_id=<?php echo $row['id']; ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                <a href="delete.php?org_id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            </td>

                                                        </tr>


                                                <?php $i++;
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }

                                                mysqli_close($conn);
                                                ?>



                                            </tbody>
                                            <tfoot>
                                              
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>

    </div>
</div>





<?php include "../common/footer.php"; ?>