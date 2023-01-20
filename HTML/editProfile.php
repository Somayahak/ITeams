<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
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
         
        <!-- Recommneded Projects -->
       <form action="..//php//submitEditProfile.php" method="post">
       <!--  <from action= "..//HTML/findProject.php" method="GET"> -->
            <div class="containers" style="height:670px; margin-bottom:50px;  margin-top:50px">
                <div class="card flex" style="height:730px; background-color: #fff;width: 800px; border-radius: 20px;">
                    <label for="freeform" style="font-size: 20px; color:#703589;"><b>Edit Profile</b></label>
                    <div class="px-3" style="height: inherit; margin-top: 5px;">
                        <div class="flex-container-v" style="padding: 10px; background-color:#fff;">
                           <!-- {% for j in movies_name %}-->
                            <div style=" background:#EFF3F8;width:fit-content;height: fit-content;margin-bottom: 20px;">
                                
                                   fname: <input type="text" name="fname"><br>
 
                                   lname: <input type="text" name="lname"><br>

                                   email: <input type="email" name="email"><br>

                                   <input type="submit" name="edit">
<!--                                 <div class="box header" style="text-align: left;"><a class="nav-link" href=""><b>Web
                                            Application
                                            That is Online Assignmnet Submission System</b></a></div>

                                <div class="box sidebar" style="text-align: left;  color: #313C41;">

                                    <span style="margin:5px; padding:4px 10px;">
                                        <span
                                            style="margin-left:5px; border-radius: 20px; padding:2px 8px; font-weight:normal; border: 1.5px solid #6CBBD2;">
                                            C </span>
                                        <span
                                            style="margin-left:5px; border-radius: 20px; padding:2px 8px; font-weight:normal; border: 1.5px solid #6CBBD2;">
                                            Python </span>
                                        <span
                                            style="margin-left:5px; border-radius: 20px; padding:2px 8px; font-weight:normal; border: 1.5px solid #6CBBD2;">
                                            HTML </span>
                                        <span
                                            style="margin-left:5px; border-radius: 20px; padding:2px 8px; font-weight:normal; border: 1.5px solid #6CBBD2;">
                                            CSS </span>
                                    </span>

                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </main>

    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2022</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="/recommendation.py"></script>
</body>

</html>
