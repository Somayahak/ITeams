<?php
require 'connect.php';
// if(empty($_SESSION["email"])){
//   header("Location: ..//HTML/logIn.html");
// } 

$Email = $_POST['email'];
// $Password = $_POST['Password'];
// $ConfPassword = $_POST['ConfPassword'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
// $Gender = $_POST['Gender'];
$Phone = $_POST['phone'];
// $education = $_POST['education'];
$description = $_POST['description'];
// $skills = ($_POST['skills']);
// $theskills = implode(",",$skills);
// $task = $_POST['task'];

///////////////////////////////////////////////////////////////

//   $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'");
//   if(mysqli_num_rows($duplicate) > 0){
//     echo
//     "<script> alert('Username or Email Has Already Taken'); 
//         window.location.href='..//HTML/signUp.php';
//         </script>";
//   }

// else{
$sql = "INSERT INTO users WHERE (firstName, lastName, email, phone, userDescription)
VALUES ('$firstname','$lastname','$Email','$Phone','$description')";

if ($conn->query($sql)){
    echo "<script>
    alert('Profile Updated Successfuly');
    window.location.href='..//HTML/logIn.html';
    </script>";
    }
// }
?>
