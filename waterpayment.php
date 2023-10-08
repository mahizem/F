<?php
include("wateraction.php");
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
         <th>Name</th>
         <th>charge_amount</th>
         <th>last_payment</th>
         <th> pay_deadline</th>
         <th>ID</th>
    </thead>
    <tbody>

  <?php

      if(is_array($fetchData)){      
     
    ?>
      <tr>
      <td><?php  echo $data['name']??''; ?></td>
      <td><?php   echo $data['charge_amount']??''; ?></td>
      <td><?php  echo $data['last_payment']??''; ?></td>
      <td><?php  echo $data['pay_deadline']??''; ?></td>
      <td><?php  echo $data['ID']??''; ?></td>
     </tr>
     <?php
    
  }   
     
    ?>
        <td colspan="5">
    <?php 
   
    echo $fetchData; ?>
  </td>
    <tr>
   
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>


$db = $conn;
 $tableName="waterbill";
 $columns= ['name', 'charge_amount','last_payment','pay_deadline','ID'];
function fetch_data($db, $tableName, $columns){
  $fetchData = fetch_data($db, $tableName, $columns);
//  if(empty($db)){
//   $msg= "Database connection error";
//  elseif (empty($columns) || !is_array($columns)) {
//   $msg="columns Name must be defined in an indexed array";
//  }
if(empty($columns) || !is_array($columns)){
  echo "<script language='javascript'>" ;
  echo "alert('table empty')";
 echo "</script>";
 die();
}
else{
// $columnName = implode(", ", $columns);
$query = "select  * from waterbill where ID =  '$id' ";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
  $msg = mysqli_fetch_all($result, MYSQLI_ASSOC);
 } 
//  else {
//     $msg= "No Data Found"; 
//  }
// }else{
//   $msg= mysqli_error($db);
// }
}
return $msg;
}
mysqli_close($conn);
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
         <th>Name</th>
         <th>charge_amount</th>
         <th>last_payment</th>
         <th> pay_deadline</th>
         <th>ID</th>
    <tbody>

  <?php

      if(is_array($fetchData)){      
     
    ?>
      <tr>
      <td><?php  echo $data['name']??''; ?></td>
      <td><?php   echo $data['charge_amount']??''; ?></td>
      <td><?php  echo $data['last_payment']??''; ?></td>
      <td><?php  echo $data['pay_deadline']??''; ?></td>
      <td><?php  echo $data['ID']??''; ?></td>
     </tr>
     <?php
     
  }   
     
    ?>
        <td colspan="5">
    <?php 

    echo $fetchData; ?>
  </td>
    <tr>
   
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>