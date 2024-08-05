<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// require "../conig/db.php";

// // $conn = $db_connection->dbConnection();

// function msg($success, $status, $message, $extra = [])
// {
//     return array_merge([
//         'success' => $success,
//         'status' => $status,
//         'message' => $message
//     ], $extra);
// }

// // DATA FORM REQUEST
// $data = json_decode(file_get_contents("php://input"));
// $returnData = [];

// if ($_SERVER["REQUEST_METHOD"] != "POST") :

//     $returnData = msg(0, 404, 'Page Not Found!');

// elseif (!isset($data->name) || !isset($data->email) || !isset($data->password)  || empty(trim($data->name))  || empty(trim($data->email))  || empty(trim($data->password))) :

//     $fields = ['fields' => ['name', 'email', 'password']];
//     $returnData = msg(0, 422, 'Please Fill in all Required Fields!', $fields);

// // IF THERE ARE NO EMPTY FIELDS THEN-
// else :

//     $name = trim($data->name);
//     $email = trim($data->email);
//     $password = trim($data->mobile);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
//         $returnData = msg(0, 422, 'Invalid Email Address!');

//     elseif (strlen($password) < 8) :
//         $returnData = msg(0, 422, 'Your password must be at least 8 characters long!');

//     elseif (strlen($name) < 3) :
//         $returnData = msg(0, 422, 'Your name must be at least 3 characters long!');

//     else :
//         try {

//             $check_email = "SELECT `email` FROM `user` WHERE `email`=:email";
//             $check_email_stmt = $conn->prepare($check_email);
//             $check_email_stmt->bindValue(':email', $email, PDO::PARAM_STR);
//             $check_email_stmt->execute();

//             if ($check_email_stmt->rowCount()) :
//                 $returnData = msg(0, 422, 'This E-mail already in use!');

//             else :
//                 $insert_query = "INSERT INTO `user`(`name`,`email`,`password`) VALUES(:name,:email,:mobile)";

//                 $insert_stmt = $conn->prepare($insert_query);

//                 // DATA BINDING
//                 $insert_stmt->bindValue(':name', htmlspecialchars(strip_tags($name)), PDO::PARAM_STR);
//                 $insert_stmt->bindValue(':email', $email, PDO::PARAM_STR);
//                 // $insert_stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
//                 $stmt->bindParam(':mobile', $mobile);
//                 $insert_stmt->execute();

//                 $returnData = msg(1, 201, 'You have successfully registered.');

//             endif;
//         } catch (PDOException $e) {
//             $returnData = msg(0, 500, $e->getMessage());
//         }
//     endif;
// endif;

// echo json_encode($returnData);
// Retrieve the submitted form data

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['mobile']) || isset($_POST['password'])){


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$encry_pas = password_hash($password,PASSWORD_DEFAULT);

// Server-side validation
$isValid = true;

// Validate name (example: minimum 2 characters)
if (strlen($name) < 2) {
    $isValid = false;
}

// Validate email (example: using filter_var)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
}

// Validate mobile (example: using regular expression)
$mobilePattern = '/^\d{10}$/';
if (!preg_match($mobilePattern, $mobile)) {
    $isValid = false;
}

if ($isValid) {
   
    require "../conig/db.php";
    // print_r($conn);

    // Create a new PDO instance
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO user (name, email, mobile,password) VALUES (:name, :email, :mobile, :password)");

    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':password', $encry_pas);

    // Execute the query
    if ($stmt->execute()) {
        // Registration successful
        $response = array('status' => 'success', 'message' => 'Registration successful');
    } else {
        // Error in database query
        $response = array('status' => 'error', 'message' => 'Error in registration');
    }
} else {
    // Validation failed
    $response = array('status' => 'error', 'message' => 'Validation failed');
}

// Set the response headers
// header('Content-Type: application/json');
// Convert the response array to JSON format
echo json_encode($response);
}
else{
    echo "hat jaa";
}
?>