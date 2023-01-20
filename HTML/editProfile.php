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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>ITeams Edit Profile</title>
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
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-3.5.1.min.js">

	</script>
	<link rel="stylesheet" href="https://unpkg.com/devextreme@21.2.3/dist/css/dx.light.css">
	<link rel="stylesheet" href="index.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.4.0/polyfill.min.js">

	</script>
	<script type="text/javascript" src="https://unpkg.com/devextreme@21.2.3/dist/js/dx.all.js">

	</script>
	<script type="text/javascript" src="..\js\index.js">

	</script>

</head>

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
        <!-- <div class="center"> -->
        <form action="..//php/submitEditProfile.php" method="POST" name="sample">


		
            <div class="containers" style="height:700px; margin-bottom:50px;  margin-top:50px">
                <div class="card flex" style="height:760px; background-color: #fff;width: 800px; border-radius: 20px;">
			<b style="font-size: 25px; color:#703589;">Edit Profile</b>
			</br>
			<b style=color:#313C41>Account Information:</b>
			<div class="dropdown-divider"></div>

			<label for="email" style="font-size: 15px; color:#703589;"><b>Email</b></label>
			<input id="email" required name="email" value="<?php echo $row['email']; ?>" style="background-color:#e0d9ef;border-radius: 5px; margin-bottom: 30px;height:50px; width:48%; resize:none; padding:12px 20px;">

<!-- 			<label for="oldPassword" style="font-size: 15px; color:#703589;"><b>Password</b></label>
			<input id="oldPassword" required name="oldPassword" value="" style="background-color:#e0d9ef;border-radius: 5px; margin-bottom: 30px;height:50px; width:40%; resize:none; padding:12px 20px;">
		    
 -->
<!-- 			<button type="button" id="changePass" onclick="..//HTML/profile.php">Change Password</button>
 -->
<!--///////////////////////////////////////////////////////////////////////////////////////////////-->

		    <b style=color:#313C41>Personal Information:</b>
			<div class="dropdown-divider"></div>
		    
                	<span> <label for="fname" style="font-size: 15px; color:#703589;"><b>First Name</b></label>
			<label for="lname" style="font-size: 15px; color:#703589; margin-left:270px"><b>Last Name</b></label> </span>
		    
			<span> <input id="freeform" name="fname" value="<?php echo $row['firstName']; ?>" style="background-color:#e0d9ef;border-radius: 5px; margin-bottom: 30px;height:50px; width:48%; resize:none; padding:12px 20px;">
			<input id="freeform" name="lname" value="<?php echo $row['lastName']; ?>" style=" margin-left:15px; background-color:#e0d9ef;border-radius: 5px; margin-bottom: 30px;height:50px; width:48%; resize:none; padding:12px 20px;">
			</span>
		    
			<label for="phone" style="font-size: 15px; color:#703589;"><b>Phone Number</b></label>
		    	<input id="phone" required name="phone" value="<?php echo $row['phone']; ?>" style="background-color:#e0d9ef;border-radius: 5px; margin-bottom: 30px;height:50px; width:48%; resize:none; padding:12px 20px;">

<!--///////////////////////////////////////////////////////////////////////////////////////////////-->
		    
		    	<b style=color:#313C41>Profile Information:</b>
			<div class="dropdown-divider"></div>
		    
			<label for="description" style="font-size: 15px; color:#703589;"><b>User Description</b></label>
		        <textarea id="freeform" name="description" style="background-color:#e0d9ef;border-radius: 5px;margin-bottom: 30px;height:400px; padding:12px 20px;"><?php echo $row['userDescription'];?></textarea>

		    
                    <center>
                        <input type="submit" value="Save" name="post_project" 
                            class="btn-btn-info">
                    </center>
                </div>

        </form>

        <!-- </div> -->
    </main>

    <!-- Footer-->
        <?php include("..//HTML/footer.html");?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </script>
    <script src="..\js\multi-input.js"></script>
    <script src="..\js\script.js"></script>
                                    <script>
                                    const plus = document.querySelector(".plus"),
                                        minus = document.querySelector(".minus"),
                                        num = document.querySelector(".num");
                                    let a = 1;
                                    plus.addEventListener("click", () => {
                                        a++;
                                        a = (a < 10) ? "0" + a : a;
                                        num.innerText = a;
                                    });

                                    minus.addEventListener("click", () => {
                                        if (a > 1) {
                                            a--;
                                            a = (a < 10) ? "0" + a : a;
                                            num.innerText = a;
                                        }
                                    });

                                </script>
                                 <script>
    var expanded=false;
    function showCheckboxes(){
        var checkboxes=document.getElementById("checkboxes")
        if(!expanded){
            checkboxes.style.display="block";
            expanded=true;
        }
        else{
            checkboxes.style.display="none";
            expanded=false;
        }
    }
    </script>
</body>

</html>
