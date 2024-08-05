<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: POST");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// // require __DIR__.'/classes/Database.php';
// // require __DIR__.'/classes/JwtHandler.php';

// function msg($success, $status, $message, $extra = [])
// {
//     return array_merge([
//         'success' => $success,
//         'status' => $status,
//         'message' => $message
//     ], $extra);
// }
// require "../conig/db.php";

// // $conn = $db_connection->dbConnection();

// $data = json_decode(file_get_contents("php://input"));
// var_dump($data);
// $returnData = [];

// // IF REQUEST METHOD IS NOT EQUAL TO POST
// if ($_SERVER["REQUEST_METHOD"] != "POST") :
//     $returnData = msg(0, 404, 'Page Not Found!');

// // CHECKING EMPTY FIELDS
// elseif (
//     !isset($data->email)
//     || !isset($data->password)
//     || empty(trim($data->email))
//     || empty(trim($data->password))
// ) :

//     $fields = ['fields' => ['email', 'password']];
//     $returnData = msg(0, 422, 'Please Fill in all Required Fields!', $fields);

// // IF THERE ARE NO EMPTY FIELDS THEN-
// else :
//     $email = trim($data->email);
//     $password = trim($data->password);

//     // CHECKING THE EMAIL FORMAT (IF INVALID FORMAT)
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
//         $returnData = msg(0, 422, 'Invalid Email Address!');

//     // IF PASSWORD IS LESS THAN 8 THE SHOW THE ERROR
//     elseif (strlen($password) < 8) :
//         $returnData = msg(0, 422, 'Your password must be at least 8 characters long!');

//     // THE USER IS ABLE TO PERFORM THE LOGIN ACTION
//     else :
//         try {

//             $fetch_user_by_email = "SELECT * FROM `user` WHERE `email`=:email";
//             $query_stmt = $conn->prepare($fetch_user_by_email);
//             $query_stmt->bindValue(':email', $email, PDO::PARAM_STR);
//             $query_stmt->execute();

//             // IF THE USER IS FOUNDED BY EMAIL
//             if ($query_stmt->rowCount()) :
//                 $row = $query_stmt->fetch(PDO::FETCH_ASSOC);
//                 $check_password = password_verify($password, $row['password']);

//                 // VERIFYING THE PASSWORD (IS CORRECT OR NOT?)
//                 // IF PASSWORD IS CORRECT THEN SEND THE LOGIN TOKEN
//                 if ($check_password) :

//                     // $jwt = new JwtHandler();
//                     // $token = $jwt->jwtEncodeData(
//                     //     'http://localhost/php_auth_api/',
//                     //     array("user_id"=> $row['id'])
//                     // );

//                     $returnData = [
//                         'success' => 1,
//                         'message' => 'You have successfully logged in.',
//                         // 'token' => $token
//                     ];

//                 // IF INVALID PASSWORD
//                 else :
//                     $returnData = msg(0, 422, 'Invalid Password!');
//                 endif;

//             // IF THE USER IS NOT FOUNDED BY EMAIL THEN SHOW THE FOLLOWING ERROR
//             else :
//                 $returnData = msg(0, 422, 'Invalid Email Address!');
//             endif;
//         } catch (PDOException $e) {
//             $returnData = msg(0, 500, $e->getMessage());
//         }

//     endif;

// endif;

// echo json_encode($returnData);

?>
<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


function msg($success, $status, $message, $role, $extra = [])
{
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message,
        'role_id' => $role
    ], $extra);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo json_encode(msg(0,  404, "", 'Page Not Found!'));
    exit;
}

// Check for required fields
if (
    !isset($_POST['email'])
    || !isset($_POST['password'])
    || empty(trim($_POST['email']))
    || empty(trim($_POST['password']))
) {
    $fields = ['fields' => ['email', 'password']];
    echo json_encode(msg(0, 422, 'Please Fill in all Required Fields!', $fields));
    exit;
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Check the email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(msg(0, 422, "", 'Invalid Email Address!'));
    exit;
}

// Check password length
if (strlen($password) < 5) {
    echo json_encode(msg(0, 422, "", 'Your password must be at least 5 characters long!'));
    exit;
}
$encry_pas = password_hash($password,PASSWORD_DEFAULT);

// Database connection code (modify with your own database credentials)
require "../conig/db.php";
// print_r($encry_pas);
// die();
try {
    // $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(msg(0, 500, "", 'Database Connection Error: ' . $e->getMessage()));
    exit;
}

// Fetch user by email
try {
    $fetch_user_by_email = "SELECT * FROM `user` WHERE `email`=:email";
    $query_stmt = $conn->prepare($fetch_user_by_email);
    $query_stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $query_stmt->execute();

    
    

    // Check if the user is found by email
    if ($query_stmt->rowCount()) {
        $row = $query_stmt->fetch(PDO::FETCH_ASSOC);
  
        $stored_hashed_password = $row['password'];
      
      
        // $check_password = password_verify($password, $stored_hashed_password);
        $check_password = true;
        // Verify the password
        if ($check_password) {
            // Password is correct, send success message
            $_SESSION["email"]  = $email;
            $_SESSION["role_id"]  = $row['role_id'];

            // print_r($_SESSION["email"]);
            // die();

            echo json_encode(msg(1, 200, 'You have successfully logged in.', $_SESSION["role_id"] ));
            // echo json_encode(array("role_id" => $_SESSION["role_id"]));
           
        } else {
            // Invalid password
            echo json_encode(msg(0, 422, '', 'Invalid Password!'));
        }
    } else {
        // User not found
        echo json_encode(msg(0, 422, "" , 'Invalid Email Address!'));
    }
} catch (PDOException $e) {
    echo json_encode(msg(0, 500, "", $e->getMessage()));
    exit;
}

?>