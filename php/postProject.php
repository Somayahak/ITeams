
<?php
require '../php/connect.php';
if(!empty($_SESSION["Email"])){
    $Email = $_SESSION["Email"];
    $query = "SELECT * FROM users WHERE email = '{$Email}'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result); 
}
else{
  header("..//HTML/logIn.html");
}

$ProjectOwnerId=$row["userId"];
$title = $_POST['title'];
$description = $_POST['description'];
//skills
$skills = ($_POST['skills']);
$theskills = implode(",",$skills);
$budget = $_POST['budget'];
$membersNo = $_POST['membersNo'];

///////////////////////////////////////////////////////////////

$sql = "INSERT INTO projects (ProjectOwnerId, Title, ProjectDescription, projectSkills, NoOfMembers, Budget, ProjectStatus)
VALUES ($ProjectOwnerId,'$title','$description','$theskills','$membersNo','$budget','Active')";

if ($conn->query($sql)){
    echo "<script>
    alert('You've successfully posted your project');
    window.location.href='..//HTML/profile.php';
    </script>";
    }
//}
?>

