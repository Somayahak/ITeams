<?php
require 'connect.php';
if(!empty($_SESSION["email"])){
  header("Location: ..//HTML/logIn.html");
} 

$Email = $_POST['email'];
$Password = $_POST['psw'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'");
$row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result) > 0){
    if($Password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["Email"] = $row["email"];
      header("Location:..//HTML/profile.php");
    }

    else{
      echo "<script> alert('Wrong Password');
            window.location.href='..//HTML/logIn.html';
            </script>";
        }
    }
  else{
    echo "<script>
        alert('User Not Registered');
        window.location.href='..//HTML/logIn.html';
        </script>";
  }
?>
