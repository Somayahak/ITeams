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

// if(empty($_SESSION["Email"])){
//   header("Location: ..//HTML/logIn.html");
// } 
	// insert a quote if submit button is clicked
if (isset($_POST['add'])) {
	if (empty($_POST['prevProjectDescription']) || empty($_POST['projectName'])) {
		$errors = "You must fill in the project name and description";
	}else{
$errors = "";
$projectUserId=$row["userId"];
$projectName = $_POST['projectName'];
$prevProjectDescription = $_POST['prevProjectDescription'];
$sql = "INSERT INTO userPrevProjects (projectUserId,prevProjectName,prevProjectDescription) VALUES ($projectUserId,'$projectName','$prevProjectDescription')";
mysqli_query($conn, $sql);
// header('location: ..//HTML/profile.php');
            
		}
	}
    // delete task
// if (isset($_GET['del_task'])) {
// 	$id = $_GET['del_task'];

// 	mysqli_query($conn, "DELETE FROM userPrevProjects WHERE id=".$id);
// 	header('location: ..//HTML/prevProjects.php');
// }

?>	

<html>

<link href="../css/styles.css" rel="stylesheet" />

<style>
.heading{
	width: 50%;
	margin: 30px auto;
	text-align: center;
	color: 	#6B8E23;
	/* background: #FFF8DC; */
	border: 2px solid #6B8E23;
	border-radius: 20px;
}
/* form {
	width: 50%; 
	margin: 30px auto; 
	border-radius: 5px; 
	padding: 10px;
	background: #FFF8DC;
	border: 1px solid #6B8E23;
} */
form p {
	color: red;
	margin: 0px;
    font-size:10px;
}
.task_input {
	width: 75%;
	height: 15px; 
	/* padding: 10px; */
	border: 1px solid grey;
}
/* .add_btn {
	height: 39px;
	background: #FFF8DC;
	color: 	#6B8E23;
	border: 2px solid #6B8E23;
	border-radius: 5px; 
	padding: 5px 20px;
} */

table {
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
}

tr {
	border-bottom: 1px solid #cbcbcb;
}

th {
	font-size: 19px;
	color: #6B8E23;
}

th, td{
	border: none;
    height: 30px;
    padding: 2px;
}

tr:hover {
	background: #E9E9E9;
}

.task {
	text-align: left;
}

.delete{
	text-align: center;
}
.delete a{
	color: white;
	background: #a52a2a;
	padding: 1px 6px;
	border-radius: 3px;
	text-decoration: none;
}
</style>

	<form method="post" action="..//HTML/profile.php">
    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
    <?php } ?>

        <label for="description"><b style="align:left; color:#313C41; font-size:15px; font-weight:bold;">Project Name</b></label>
    	<input type="text" name="projectName" class="" style="font-size:15px; height:30px;">

        <label for="description"><b style="color:#313C41; font-size:15px; font-weight:bold;">Project Description</b></label>
        <textarea type="text" id="description" name="prevProjectDescription" class="" placeholder="Describe your project..."
        style="width: 100%; font-size:15px; height: 70px; resize:none"></textarea>

		<!--<input type="text" name="prevProjectDescription" class="task_input" style="font-size:15px; height:50px">-->
		<button type="add" name="add" id="add_btn" class=" center" style=" border-radius:20px; padding:2px 8px; background-color: #703589; font-size:15px; color: white; width:40%; height:40px">Add Project</button>
	</form>
	
</html>
