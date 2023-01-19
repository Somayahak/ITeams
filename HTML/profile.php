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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ITeams Profile</title>
    <!--person icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <!-- <style>
        body {
            background-color: #313C41;
        }
    </style> -->
</head>

<style>
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 34%;
  bottom: 10%;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

</style>

<body class="d-flex flex-column h-100" style="background-color: #313C41">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg> -->
    <main class="flex-shrink-0">
        <!-- Navigation-->
    <?php include("..//HTML/header.php");?>

        <!-- Header-->
        <header>
            <section id="scroll-up">
                <div class="container px-5 py-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                        </div>

                    </div>
                </div>
            </section>
        </header>

            <div class="profile-grid" style="height:80%;">
                <div style="grid-row: 1 / 5; margin-top: 10px;  margin-bottom: 40px; padding-right: 0;">
                    <i class="bi bi-person-circle" style="font-size: 80px; color:#703589; margin-left:-20px;"></i>
                    <div style="font-size: 15px; font-weight:normal;  padding-top:0; margin-left:-20px;">
                        <?php echo $row["firstName"]." ".$row["lastName"] ; ?>
                    </div>
                    <hr style="color:#6CBBD2; margin: 0; padding:0; margin-left:-20px;">
    
                <div style="text-align:left; padding-left: 10px; padding-right: 0;">
                    <i class="bi bi-person" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal;">Profile</span> </i>
                    <br>
                    <i class="bi bi-envelope" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                             <?php echo $row["email"];?>
                             </span></i>
                    <br>
                    <i class="bi bi-telephone" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                            <?php echo $row["phone"];?>
                            </span></i>
                    <br>
                    <i class="bi bi-mortarboard" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                            <?php echo $row["education"];?>
                            </span></i>
                    <br>
                    <i class="bi bi-gender-ambiguous" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                            <?php echo $row["gender"];?>
                            </span></i>
                </div>
                <a class="btn btn-primary btn-lg px-4 me-sm-3" style="border-radius: 20px; font-size: 15px; margin-bottom: 80px;"
                href="">Edit Profile</a>
                </div>
    
                <div style="grid-row: 1 / 5; margin-left: 10px;  margin-top: 10px;  margin-bottom: 40px;">
                    <div style="font-size: 15px; color:#703589; text-align:left; padding: 0;">Profile</div>
                    <div style="font-size: 25px;text-align:left; ">
                    <?php echo $row["firstName"]." ".$row["lastName"];?>
                    </div>
                    <textarea readonly style="resize: none; height:150px; width:95%; font-size: 15px; background-color: #EFF3F8; border-radius: 4px;  border:none; color: #313C41; text-align:left;  padding:12px 20px;"><?php echo $row["userDescription"];?></textarea>
                    <div style="font-size: 15px; text-align:left;">
                        Skills 
                        <span style=margin:10px>
                    <?php 
                    $count = 0;
                    $skills = explode(",", $row["skills"]);
                    foreach ($skills as $skill){
                        if(fmod($count,6) == 0){
                            echo "<br> <br>";
                        }
                        $count = $count + 1;
                        echo '<span style="margin-left:10px; border-radius: 20px; padding:2px 8px; font-weight:normal; border: 1.5px solid #6CBBD2;">';
                            echo $skill;
                            echo '</span>';
                    }
                    ?>

                    </div>
                    <div style="font-size: 15px; text-align:left;">
                        Rating
                    </div>
    
                </div>
                <div
                    style="margin-left: 10px; font-size: 15px; color:#703589; margin-top: 10px;  margin-bottom: 10px; text-align:left;">
                    Current Projects
                    <div style="text-align:left; font-size: 15px; padding-left:0; padding-top: 10px;">Owned Projects
                        <a href="" style="font-size: 13px; color:#703589; margin-left:42%;"> More</a>
                        <div class="card center"
                            style="padding:0; padding-left:5px; font-size:10px; height:70px; width:100%; box-shadow: none; background-color:#EFF3F8;border-radius: 4px; text-align: left; border:none; color: #313C41;">
                            <span>Wordpress Project for Barber shop</span>
                            <br>
                            <span style="color: grey; font-weight:normal;">Looking for a Developer who can help us to create
                                a...</span>
                            <a class="btn" href=""
                                style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #6CBBD2; font-size:10px; color: white;">View
                            </a>
                        </div>
    
                    </div>
                    <div style="text-align:left; font-size: 15px; padding-left:0; padding-top: 0;">Joined Projects
                        <a href="" style="font-size: 13px; color:#703589; margin-left:42%;"> More</a>
                        <div class="card center"
                            style="padding:0; padding-left:5px; font-size:10px; height:70px; width:100%; box-shadow: none; background-color:#EFF3F8;border-radius: 4px; text-align: left; border:none; color: #313C41;">
                            <span>A short News Web App</span>
                            <br>
                            <span style="color: grey; font-weight:normal;">I would like to get a news app developed
                                (something very...</span>
                            <a class="btn" href=""
                                style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #6CBBD2; font-size:10px; color: white;">View
                            </a>
                        </div>
		</div>
	</div>
		    
		    <div class='ex1'style="margin-left: 10px; font-size: 15px; color:#703589; margin-bottom: 15px; text-align:left;">
                                    Previous Projects

                    <a href="..//HTML/myProjects.php" style="font-size: 13px; color:#703589; margin-left:35%;"> More</a>
			    <div>
				    <?php
				    $uu = mysqli_query($conn,"SELECT userId FROM users");
				    echo mysqli_fetch_assoc($uu);
				    echo'hi';
				    
				    ?>
			    </div>
                        <?php 
                        // select all tasks if page is visited or refreshed
                        $prvproject = mysqli_query($conn, "SELECT * FROM userPrevProjects WHERE projectUserId='30'");

                    $i = 1; while ($row = mysqli_fetch_array($prvproject)) { ?>

                        <div style="padding:0; padding-left:5px; font-size:10px; margin-top:3px; height:70px; width:300px; box-shadow: none; background-color:#EFF3F8;border-radius: 4px; text-align: left; border:none; color: #313C41;">
                            <span><td class="task"> <?php echo $row['prevProjectName']; ?> </td></span>
                            <br>
                            <span style="color: grey; font-weight:normal;">
                                <td class="task"> <?php echo $row['prevProjectDescription']; ?> </td>
                                </span>
                            <!--<a class="btn" href=""
                                style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #703589; font-size:10px; color: white;">View
                            </a>-->
			    </div>
				<?php $i++; } ?>	

                    <button class="btn center" onclick="openForm()" style="border-radius:20px; padding:2px 8px; background-color: #703589; font-size:12px; color: white; width:65%; height:15%"> Add your previous project</button>
                        <div class="form-popup" id="myForm" style="padding-top:0; text-align:left; width:40%; height:70%; background-color:#EFF3F8;   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <button type="button" class="btn cancel" onclick="closeForm()" style="font-weight:bold; margin-left:93%; background-color: none; font-size:20px; color: grey; width:6%; height:6%">x</button>
                <?php include("..//HTML/prevProjects.php");?>
                    </div>
                </div>
	</div>

    </main>

    <!-- Footer-->
        <?php include("..//HTML/footer.html");?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>

</html>
