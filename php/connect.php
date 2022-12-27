<?php


// $Email = $_POST['Email'];
// $Password = $_POST['Password'];
// $ConfPassword = $_POST['ConfPassword'];

// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $Gender = $_POST['Gender'];
// $Phone = $_POST['Phone'];

// $education = $_POST['education'];
// $skills = $_POST['skills'];

///////////////////////////////////////////////////////////////

session_start();
$servername = "sql6.freesqldatabase.com";
$username = "sql6586681";
$password = "d71eJpbkAF";
$dbname = "sql6586681";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// if (mysqli_connect_error()){
// die('Connect Error ('. mysqli_connect_errno() .') '
// . mysqli_connect_error());
// }

// else{
// $sql = "INSERT INTO users (userId, firstName, lastName, email, password, phone, gender, education, cardHolderName, cardNo, expireDate, userDescription, rating)
// VALUES ('1','$firstname','$lastname','$Email','$Password','$Phone','$Gender','$education',NULL,NULL,NULL,NULL,NULL)";

$sql = INSERT INTO users (userId, firstName, lastName, email, password, phone, gender, education, cardHolderName, cardNo, expireDate, userDescription, rating) 
  VALUES ('1', 'somayah', 'hak', 'somahakami@gmail.com', 'Ar@616382', '0555011252', 'female', 'bachelor', NULL, NULL, NULL, NULL, NULL);

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
} 
else{
echo "Error: ". $sql ."
". $conn->error;
}
// $conn->close();
// }
?>
