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
    <title>ITeams My projects</title>
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

        <div class="project-grid" style="height:80%;">
              <div style="grid-row: 1 / 5; margin-top: 10px;  margin-bottom: 40px; padding-right: 0; width:110%">
                    <i class="bi bi-person-circle" style="font-size: 80px; color:#703589; "></i>
                    <div style="font-size: 15px; font-weight:normal;">
                        <?php echo $row["firstName"]." ".$row["lastName"] ; ?>
                    </div>
                    <hr style="color:#6CBBD2; margin: 0;">
    
                <div style="text-align:left; padding-left: 20px; padding-right: 0;">
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
                            <?php echo $row["phone"]?>
                            </span></i>
                    <br>
                    <i class="bi bi-mortarboard" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                            <?php echo $row["education"]?>
                            </span></i>
                    <br>
                    <i class="bi bi-gender-ambiguous" style="font-size: 20px;"> <span
                            style="font-size: 15px; font-weight:normal">
                            <?php echo $row["gender"]?>
                            </span></i>
                </div>
                </div>

            <div style="grid-row: 1 / 5; margin-left: 50px;  margin-top: 10px;  margin-bottom: 0.5px;width: 125%;height:80%;">
                <div style="font-size: 15px; color:#703589; text-align:left;height: fit-content;">
                    <div class="card center"
                        style="padding: 25px; font-size:15px; height:30%; width:100%; box-shadow: none; background-color:#703589; text-align: left; border:none;box-shadow: none;">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3"
                            style="border-radius: 20px; font-size: 15px;  align-items: left;" href="">Current
                            Projects</a>
                        <a class="btn btn-primary btn-lg px-4 me-sm-3"
                            style="border-radius: 20px; font-size: 15px;  align-items: right;" href="">Previous
                            Projects</a>
                    </div>
                    <div class="card center"
                        style="padding: 25px; font-size:15px; height:30%; width:700px; box-shadow:inset; background-color:#ffffff; text-align: left; margin-top: 7px;border: #313C41;">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3"
                            style="border-radius: 20px; font-size: 15px;  align-items: left;" href="">Owned
                            Projects</a>
                        <a class="btn btn-primary btn-lg px-4 me-sm-3"
                            style="border-radius: 20px; font-size: 15px;  align-items: right;" href="">Joined
                            Projects</a>
                    </div>
                </div>

                <!--Add-->
                <div class="containers" style="height:inherit; margin-top:10px;">

                <div class="card flex"
                    style="height:inherit; background-color: #fff;width: 800px;border: none;box-shadow: none;padding:6px;">

                    <div class="px-3 ex1" style="height: inherit; border: none;box-shadow: none;">
                        <div class=" flex-container-v" style="padding: 10px; background-color:#fff;">

                            <div class="wrapper" style=" background:#EFF3F8;width:fit-content;height: fit-content;">
                                <div class="box header"
                                    style="text-align: left;  color: #703589;background:none;font-size:12px;padding: 0px;">
                                    <a class="btn" href="..//HTML/projectPageManager.php"
                                        style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #6CBBD2; font-size:10px; color: white;">View
                                    </a><a class="nav-link" style="position: left;padding: 0px;padding-left: 10px; color: black;" href="">Web
                                        Application
                                        That is Online Assignmnet Submission System</a></div>

                                <div class="box content"
                                    style="text-align: left; padding: 0px;padding-left: 10px; color: #313C41;background:none;font-size:13px;">
                                    Looking for a developer who can help us to creat a...
                                </div>


                            </div>
                            <div></div>

                            <div class="wrapper" style=" background:#EFF3F8;width:fit-content;height: fit-content;">
                                <div class="box header"
                                    style="text-align: left;  color: #703589;background:none;font-size:12px;padding: 0px;">
                                    <a class="btn" href=""
                                        style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #6CBBD2; font-size:10px; color: white;">View
                                    </a><a class="nav-link" style="position: left;padding: 0px;padding-left: 10px; color: black;" href="">Web
                                        Application
                                        That is Online Assignmnet Submission System</a></div>

                                <div class="box content"
                                    style="text-align: left; padding: 0px;padding-left: 10px; color: #313C41;background:none;font-size:13px;">
                                    Looking for a developer who can help us to creat a...
                                </div>


                            </div>
                        <div></div>
                            <div class="wrapper" style=" background:#EFF3F8;width:fit-content;height: fit-content;">
                                <div class="box header"
                                    style="text-align: left;  color: #703589;background:none;font-size:12px;padding: 0px;">
                                    <a class="btn" href=""
                                        style="margin-left:80%; border-radius:20px; padding:2px 8px; background-color: #6CBBD2; font-size:10px; color: white;">View
                                    </a><a class="nav-link" style="position: left;padding: 0px;padding-left: 10px; color: black;" href="">Web
                                        Application
                                        That is Online Assignmnet Submission System</a></div>

                                <div class="box content"
                                    style="text-align: left; padding: 0px;padding-left: 10px; color: #313C41;background:none;font-size:13px;">
                                    Looking for a developer who can help us to creat a...
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>

    <!-- Footer-->
        <?php include("..//HTML/footer.html");?>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>