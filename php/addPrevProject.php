<?php
require '../php/connect.php';

if(!empty($_SESSION["Email"])){
    $Email = $_SESSION["Email"];
    $query = "SELECT * FROM users WHERE email = '{$Email}'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result); 
    $errors = "";
}
else{
  header("..//HTML/logIn.html");
}

//   $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'");
//   if(mysqli_num_rows($duplicate) > 0){
//     echo
//     "<script> alert('Username or Email Has Already Taken'); 
//         window.location.href='..//HTML/signUp.php';
//         </script>";
//   }

	// insert a quote if submit button is clicked
// if (isset($_POST['add'])) {
// 	if (empty($_POST['prevProjectDescription']) || empty($_POST['projectName'])) {
// // 		$errors = "You must fill in the project name and description";
//     window.location.href='..//HTML/profile.php';

// 	}else{
$projectUserId=$row["userId"];
$projectName = $_POST['projectName'];
$prevProjectDescription = $_POST['prevProjectDescription'];
$sql = "INSERT INTO userPrevProjects (projectUserId,prevProjectName,prevProjectDescription) VALUES ($projectUserId,'$projectName','$prevProjectDescription')";
mysqli_query($conn, $sql);
window.location.href='..//HTML/profile.php';
            
// 		}
// 	}
?>
