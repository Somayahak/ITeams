<?php
require 'connect.php';
// if(empty($_SESSION["email"])){
//   header("Location: ..//HTML/logIn.html");
// } 

$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ConfPassword = $_POST['ConfPassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Gender = $_POST['Gender'];
$Phone = $_POST['Phone'];
$education = $_POST['education'];
$description = $_POST['description'];
$skills = ($_POST['skills']);
$theskills = implode(",",$skills);
// $task = $_POST['task'];

///////////////////////////////////////////////////////////////

  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); 
        window.location.href='..//HTML/signUp.php';
        </script>";
  }

else{
$sql = "INSERT INTO users (firstName, lastName, email, password, phone, gender, education, cardHolderName, cardNo, expireDate, userDescription, rating, skills)
VALUES ('$firstname','$lastname','$Email','$Password','$Phone','$Gender','$education',NULL,NULL,NULL,'$description',NULL,'$theskills')";

if ($conn->query($sql)){
    echo "<script>
    alert('Registration Successful');
    window.location.href='..//HTML/logIn.html';
    </script>";
    }
}
?>
