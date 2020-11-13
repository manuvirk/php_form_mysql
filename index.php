<?php 
$insert = false;
//if(isset($_POST['name'])){
   
   $server = "localhost";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);

   if(!$con){
      die("connection to this database failed due to" .mysqli_connect_error());
   }
   //echo "success";
   //$name ="";
   $name = $_POST['firstname'];
   //$age = "";
   $age = $_POST['age']; 
   //$gender = "";
   $gender =$_POST['gender'];

   //$email = "";
   $email = $_POST['email'];
   //$phone = "";
   $phone = $_POST['phone'];
   //$desc = "";
   $desc = $_POST['desc'];
   $sql = "INSERT INTO `student_trip_info`.`student_trip_info`(`Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `DD`) VALUES ('$name', 
   '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
   if ($con ->query($sql) == true){
      //echo "successfully inserted";
      $insert = true;
   }
   else{
      echo "ERROR : $sql <br> $con->error";
   }

   $con->close();
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <title>Welcome to travel form</title>
</head>
<body>
  <img class = "bgimg"src="./images/bgimg.jpg" alt="ecu image">
  <div class="container">
    <h1>Welcome to ECU Asia Trip Form</h1>
    <p>Enter your details to submit here</p>
    <!-- <?php
    if($insert == true ){
    echo "< p class = 'submitMsg'>Thanks for submit your form. We are happy to join you for Asia trip</p>";
    }
    ?> -->

    <form action="index.php" method="post" name = "name">
        <input type="text" name="firstname" id=" firstname" placeholder="Enter your name">
        <input type="text" name = "age" id="age" placeholder="Enter your age">
        <input type="text" name = "gender" id="gender" placeholder="Enter your gender">
        <input type="email" name = "email" id="email" placeholder="Enter your email">
        <input type= "phone" name = "phone" id = "phone" placeholder = "Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
      <span class="btn" id = "inline_btn"> <button class="btn_submit">Submit</button>
        <button class="btn_reset">Reset</button></span>


    </form>
  </div>
  <script src="./index.js"></script>
</body>
</html>

