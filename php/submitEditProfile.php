<?php
require 'connect.php';
if(empty($_SESSION["email"])){
  header("Location: ..//HTML/logIn.html");
} 

$userId=$_SESSION['userId'];
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

///////////    $id=$_SESSION['id'];

//   $select= "select * from users where userId='$userId'";
//   $sql = mysqli_query($conn,$select);
//   $row = mysqli_fetch_assoc($sql);
//   $res= $row['userId'];
//   if($res === $userId)
//   {
     $sql = "update users set  firstName='$firstname',lastName='$lastname' where userId='33'";
//        $sql2=mysqli_query($conn,$update);
    echo "<script>
    alert('Updated Successfuly');
    window.location.href='..//HTML/profile.php';
    </script>";
//     }
//     if($sql2)
//        { 
//            /*Successful*/
//            header('location:profile.php');
//        }
//        else
//        {
//            /*sorry your profile is not update*/
//            header('location:editProfile.php');
//        }
//     }

//     else
//     {
//         /*sorry your id is not match*/
//         header('location:login.html');
//     }
    
    ////////////////////////////////////////////////////

//   $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$Email'");
//   if(mysqli_num_rows($duplicate) > 0){
//     echo
//     "<script> alert('Username or Email Has Already Taken'); 
//         window.location.href='..//HTML/signUp.php';
//         </script>";
//   }

// else{

// $sql = "INSERT INTO users WHERE projectUserId='$userId' (firstName, lastName, email, phone, userDescription)
// VALUES ('$firstname','$lastname','$Email','$Phone','$description')";

// $sql = "UPDATE users SET firstName = '$firstName', desiredWeight = 145 WHERE id = 1;"


if ($conn->query($sql)){
    echo "<script>
    alert('Profile Updated Successfuly');
    window.location.href='..//HTML/profile.php';
    </script>";
    }
// }
?>
