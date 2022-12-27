<?php

require 'connect.php';
// if(!empty($_SESSION["Email"])){
//   header("Location: ..//HTML/login.html");
// } 



$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ConfPassword = $_POST['ConfPassword'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Gender = $_POST['Gender'];
$Phone = $_POST['Phone'];

$education = $_POST['education'];
$skills = $_POST['skills'];


$duplicate = mysqli_query($conn, "SELECT * FROM Users WHERE Email = '$Email'");
if(mysqli_num_rows($duplicate) > 0){
  echo
  "<script> alert('Username or Email Has Already Taken'); </script>";
}
else{
    $query = "INSERT INTO users VALUES('1','$firstname','$lastname','$Email','$Password','$Phone','$Gender','$education',NULL,NULL,NULL,NULL,NULL)";
    mysqli_query($conn, $query);
      echo "<script>
      alert('Registration Successful');
      window.location.href='..//HTML/profile.html';
      </script>";
  }


// // Database connection
// // $conn = new mysqli('localhost','root','','test');
// if($conn->connect_error){
//     echo "$conn->connect_error";
//     die("Connection Failed : ". $conn->connect_error);
// } else {
//     // $stmt = $conn->prepare("insert into users(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
//     // $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
//     $query = "INSERT INTO users VALUES('1','$firstname','$lastname','$Email','$Password','$Phone','$Gender','$education',NULL,,NULL,NULL,NULL,NULL)";
//     mysqli_query($conn, $query);
//     $execval = $stmt->execute();
//     echo $execval;
//     echo "Registration successfully...";
//     $stmt->close();
//     $conn->close();
// }

?>
