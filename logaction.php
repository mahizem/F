<?php
session_start();
include_once('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = test_input($_POST["uname"]);
    $pword = test_input($_POST["pword"]);
    $query = "SELECT * FROM login";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $users = $stmt->get_result();
    $dataa = $users->fetch_all(MYSQLI_ASSOC);

    foreach($dataa as $user) {
         
        if(($user['uname'] == $username) &&
            ($user['pword'] == $pword)) {
                header("location: home.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>

