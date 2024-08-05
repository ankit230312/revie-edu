<?php include "../common/header.php"; ?>
<?php
include "db.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['csv_upload'])) {
    if (isset($_FILES["csv_file"]) && $_FILES["csv_file"]["error"] == 0) {
        // Define the path to store the uploaded CSV file
        $upload_dir = "uploads/csv/";
        $upload_file = $upload_dir . basename($_FILES["csv_file"]["name"]);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $upload_file)) {
            // Open the CSV file for reading
            $file_handle = fopen($upload_file, 'r');

            // Check if the file was opened successfully
            if ($file_handle !== false) {
                // Skip the header row
                $header = fgetcsv($file_handle, 4000, ',');

                // Check if the session ID is available
                $session_id = $_SESSION['new_question_id'];

                if (isset($session_id)) {
                    // Prepare the SQL statement for updating
                    $update_sql = "UPDATE `exam_question` SET                               
                            `exam_ques`=?, 
                            `opt1`=?, 
                            `opt2`=?, 
                            `opt3`=?, 
                            `opt4`=?, 
                            `corect_opt`=?, 
                            `marks`=?, 
                            `solution`=?, 
                            `status`=?,
                            `level`=?,
                            `year`=?
                            WHERE `id`=?";

                    $stmt_update = $conn->prepare($update_sql);

                    $insertedRecords = 0;
                    // Prepare the SQL statement for inserting
                    $insert_sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`, `level`, `year`) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                    $stmt_insert = $conn->prepare($insert_sql);

                    // Read each line of the CSV file

                    $get_data = "select * from exam_question where id = {$_SESSION['new_question_id']} limit 1";
                    $result = mysqli_query($conn, $get_data);
                    $row11 = mysqli_fetch_assoc($result);
                    #print_r($row11);die;
                    
                    if($row11['exam_type'] != "3" && $row11['exam_type'] != "2")
                    {
                        $skipFirstRow = true;
                        while (($data_csv = fgetcsv($file_handle, 4000, ',')) !== FALSE) 
                        {
                            if (empty($data_csv[0])) {
                                continue;
                            }

                            if (count($data_csv) == count($header)) {

                                if ($skipFirstRow) {
                                    $skipFirstRow = false;
                                    // This is the 2nd row, update it
                                    $stmt_update->bind_param(
                                        "ssssssssssss",
                                        $data_csv[0],
                                        $data_csv[1],
                                        $data_csv[2],
                                        $data_csv[3],
                                        $data_csv[4],
                                        $data_csv[7],
                                        $data_csv[5],
                                        $data_csv[6],
                                        $data_csv[8],
                                        $data_csv[9],
                                        $data_csv[10],
                                        $session_id
                                    );

                                    if ($stmt_update->execute()) {
                                        echo "<script>alert('Record updated successfully')</script>";
                                    } else {
                                        echo "Error updating record: " . $stmt_update->error;
                                    }
                                } else {
                                    // This is not the 2nd row, insert it
                                    $get_data = "select * from exam_question where id = {$_SESSION['new_question_id']}";
                                    $result = mysqli_query($conn, $get_data);

                                    $i = 1;

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row

                                        while ($row11 = mysqli_fetch_assoc($result)) {

                                            $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`, `level`, `year`) 
                                                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                            $stmt_insert->bind_param(
                                                "sssssssssssssssssss",
                                                $row11["org_id"],
                                                $row11["class_id"],
                                                $row11["subject_id"],
                                                $row11["section_id"],
                                                $row11["chapter_id"],
                                                $row11["sub_chapter_id"],
                                                $row11["exam_id"],
                                                $row11["exam_type"],
                                                $data_csv[0],
                                                $data_csv[1],
                                                $data_csv[2],
                                                $data_csv[3],
                                                $data_csv[4],
                                                $data_csv[7],
                                                $data_csv[5],
                                                $data_csv[6],
                                                $data_csv[8],
                                                $data_csv[9],
                                                $data_csv[10]
                                            );

                                            if ($stmt_insert->execute()) {
                                                $insertedRecord = array(
                                                    'exam_ques' => $data_csv[0],
                                                    'opt1' => $data_csv[1],
                                                    'opt2' => $data_csv[2],
                                                    'opt3' => $data_csv[3],
                                                    'opt4' => $data_csv[4],
                                                    'corect_opt' => $data_csv[7],
                                                    'marks' => $data_csv[5],
                                                    'solution' => $data_csv[6],
                                                    'status' => $data_csv[8],
                                                    'level' => $data_csv[9],
                                                    'year' => $data_csv[10]
                                                );
                                                $insertedRecordDetails[] = $insertedRecord;
                                                $insertedRecords++;
                                                // echo "<script>alert('Record inserted successfully')</script>";
                                            } else {
                                                echo "Error inserting record: " . $stmt->error;
                                            }
                                        }
                                    }
                                }
                            } else {
                                echo "Number of columns in CSV does not match header.";
                            }
                        }
                    }else{

                        $skipFirstRow = true;
                        while (($data_csv = fgetcsv($file_handle, 4000, ',')) !== FALSE) 
                        {
                            if (empty($data_csv[0])) {
                                continue;
                            }

                            if (count($data_csv) == count($header)) {

                                if ($skipFirstRow) {
                                    $skipFirstRow = false;
                                    // This is the 2nd row, update it
                                    $update_sql = "UPDATE `exam_question` SET 
                                        `exam_ques`='" . $data_csv[0] . "', 
                                        `opt1`='-', 
                                        `opt2`='-', 
                                        `opt3`='-', 
                                        `opt4`='-', 
                                        `corect_opt`='" . $data_csv[7] . "', 
                                        `marks`='" . $data_csv[5] . "', 
                                        `solution`='" . $data_csv[6] . "', 
                                        `status`='" . $data_csv[8] . "', 
                                        `level`='" . $data_csv[9] . "', 
                                        `year`='" . $data_csv[10] . "'
                                        WHERE `id`='" . $session_id . "'";

                                    $result = mysqli_query($conn,$update_sql);
                                    if ($result) {
                                        echo "<script>alert('Record updated successfully')</script>";
                                    } else {
                                        echo "Error updating record: " . $conn->error;
                                    }
                                } else {
                                    // This is not the 2nd row, insert it
                                    $get_data = "select * from exam_question where id = {$_SESSION['new_question_id']}";
                                    $result = mysqli_query($conn, $get_data);

                                    $i = 1;

                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row

                                        while ($row11 = mysqli_fetch_assoc($result)) {

                                            $sql = "INSERT INTO `exam_question`(`org_id`, `class_id`, `subject_id`, `section_id`, `chapter_id`, `sub_chapter_id`, `exam_id`, `exam_type`, `exam_ques`, `opt1`, `opt2`, `opt3`, `opt4`, `corect_opt`, `marks`, `solution`, `status`, `level`, `year`) 
                                                VALUES (
                                                    '" . $row11["org_id"] . "',
                                                    '" . $row11["class_id"] . "',
                                                    '" . $row11["subject_id"] . "',
                                                    '" . $row11["section_id"] . "',
                                                    '" . $row11["chapter_id"] . "',
                                                    '" . $row11["sub_chapter_id"] . "',
                                                    '" . $row11["exam_id"] . "',
                                                    '" . $row11["exam_type"] . "',
                                                    '" . $data_csv[0] . "',
                                                    '-',
                                                    '-',
                                                    '-',
                                                    '-',
                                                    '" . $data_csv[7] . "',
                                                    '" . $data_csv[5] . "',
                                                    '" . $data_csv[6] . "',
                                                    '" . $data_csv[8] . "',
                                                    '" . $data_csv[9] . "',
                                                    '" . $data_csv[10] . "'
                                                )";

                                            $save = mysqli_query($conn,$sql);

                                            if ($save) {
                                                $insertedRecord = array(
                                                    'exam_ques' => $data_csv[0],
                                                    'opt1' => "-",
                                                    'opt2' => "-",
                                                    'opt3' => "-",
                                                    'opt4' => "-",
                                                    'corect_opt' => $data_csv[7],
                                                    'marks' => $data_csv[5],
                                                    'solution' => $data_csv[6],
                                                    'status' => $data_csv[8],
                                                    'level' => $data_csv[9],
                                                    'year' => $data_csv[10]
                                                );
                                                $insertedRecordDetails[] = $insertedRecord;
                                                $insertedRecords++;
                                                // echo "<script>alert('Record inserted successfully')</script>";
                                            } else {
                                                echo "Error inserting record: " . $conn->error;
                                            }
                                        }
                                    }
                                }
                            } else {
                                echo "Number of columns in CSV does not match header.";
                            }
                        }
                    }
                    

                    // Close the prepared statements
                    $stmt_update->close();
                    $stmt_insert->close();

                    // Close the file handle
                    fclose($file_handle);

                    // Optionally, you can delete the uploaded file after processing
                    unlink($upload_file);
                } else {
                    echo "Session ID not set.";
                }
            } else {
                echo "Failed to open the CSV file.";
            }
        } else {
            echo "<script>alert('Error uploading file.')</script>";
        }
    } else {
        echo "<script>alert('No file uploaded or an error occurred.')</script>";
    }
} else {
    echo "Check Again";
}

?>


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
                                <h4 class="card-title">Upload question</h4>
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
                                                    <th>Organisation</th>
                                                    <th>Exam name</th>
                                                    <th>Class</th>
                                                    <th>subject</th>
                                                    <th>Section</th>
                                                    <th>Exam Type</th>
                                                    <th>Chapter</th>
                                                    <th>Sub Chapter</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php




                                                $sql = "select eq.*, eq.id as eq_id,
                                                sub_chap.*,
                                                ch.*,
                                                et.*,
                                                sub_sec.* ,
                                                sb.* ,
                                                cls.* ,
                                                ex_title.* ,
                                                org.*
                                                 from
                                             exam_question eq
                                             INNER JOIN chapter_sub_name sub_chap ON eq.sub_chapter_id = sub_chap.id
                                                INNER JOIN chapter ch ON sub_chap.chapter_id = ch.id
                                                  INNER JOIN exam_type et ON eq.exam_type = et.id
                                                  INNER JOIN sub_section sub_sec ON eq.section_id = sub_sec.id
                                                  INNER JOIN subject sb ON eq.subject_id = sb.id
                                                  INNER JOIN class cls ON eq.class_id = cls.id
                                                  INNER JOIN exam_title ex_title ON eq.exam_id = ex_title.id
                                                  INNER JOIN organisation org ON eq.org_id = org.id

                                            
                                            where eq.id= {$_SESSION['new_question_id']}";


                                                $result = mysqli_query($conn, $sql);
                                                if (!$result) {
                                                    // Handle the query error
                                                    echo "Error: " . mysqli_error($conn);
                                                }
                                                $i = 1;

                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        // echo "<pre>";
                                                        // print_r($row);
                                                ?>
                                                        <tr>
                                                            <th> <?php echo $row['eq_id']; ?></th>
                                                            <td><?php echo $row['org_name']; ?></td>
                                                            <td><?php echo $row['exam_name']; ?></td>
                                                            <td><?php echo $row['class']; ?></td>
                                                            <td><?php echo $row['sub_name']; ?></td>
                                                            <td><?php echo $row['section_title']; ?></td>
                                                            <td><?php echo $row['exam__type_name']; ?></td>
                                                            <td><?php echo $row['chapter_name']; ?></td>
                                                            <td><?php echo $row['chapter_sub_name']; ?></td>
                                                            <!-- <td> -->
                                                            <!-- <a href="update_brd.php?org_id=<?php // echo $row['id']; 
                                                                                                ?>" title="Edit" class="mr-1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="det_brd.php?org_id=<?php echo $row['id']; ?>" title="Delete" class=""><i class="fa fa-trash" aria-hidden="true"></i></a> -->

                                                            <!-- </td> -->

                                                        </tr>


                                                <?php $i++;
                                                    }
                                                } else {
                                                    // echo "0 results";
                                                }


                                                ?>

                                            </tbody>

                                        </table>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <input type="file" class="form-control" name="csv_file" accept=".csv">

                                                    </div>
                                                    <div class="col-md-3">

                                                        <input type="submit" class="btn btn-warning" name="csv_upload" value="Upload CSV">
                                                    </div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="row my-5">
                                        <div class="col-md-12">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <!-- Display the count of inserted records -->
                                                        <?php // if ($insertedRecords > 0) : 
                                                        ?>
                                                        <!-- <div class="alert alert-success">
                                                                <?php // echo "Inserted " . $insertedRecords . " records into the database."; 
                                                                ?>
                                                            </div> -->
                                                        <?php // endif; 
                                                        ?>

                                                        <!-- Display the details of inserted records in a table -->
                                                        <?php if (!empty($insertedRecordDetails)) : ?>
                                                            <h3>Inserted Record Details:</h3>


                                                            <div class="table-responsive ">
                                                                <table id="manage_org" class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>exam_ques</th>
                                                                            <th>opt1</th>
                                                                            <th>opt2</th>
                                                                            <th>opt3</th>
                                                                            <th>opt4</th>
                                                                            <th>corect_opt</th>
                                                                            <th>marks</th>
                                                                            <th>solution</th>
                                                                            <th>level</th>
                                                                            <th>year</th>
                                                                            <th>status</th>
                                                                           
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($insertedRecordDetails as $record) : ?>
                                                                            <tr>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['exam_ques']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""> <?php echo $record['opt1']; ?></textarea></td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['opt2']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['opt3']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['opt4']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['corect_opt']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['marks']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['solution']; ?></textarea> </td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['level']; ?></textarea></td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['year']; ?></textarea></td>
                                                                                <td><textarea name="" id="" cols="30" rows=""><?php echo $record['status']; ?></textarea></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>



                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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