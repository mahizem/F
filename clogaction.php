
<?php
include_once('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = test_input($_POST["cuname"]);
    $pword = test_input($_POST["copsw"]);
    $query = "SELECT * FROM clogin";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $users = $stmt->get_result();
    $dataa = $users->fetch_all(MYSQLI_ASSOC);

    foreach($dataa as $user) {
         
        if(($user['cuname'] == $username) &&
            ($user['copsw'] == $pword)) {
                header("location: chome.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            header("location: login.php");
        }
    }
}

?>