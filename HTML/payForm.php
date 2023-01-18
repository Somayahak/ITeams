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
    <title>ITeams Payment</title>
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
        <div class="files-grid" style="height:80%;">
        <?php include("..//HTML/projectSideBar.php");?>

            <div style="grid-row: 1 / 5; margin-left: 10px;  margin-top: 10px; margin-bottom: 40px; ">
                <div style="margin-top: 10px; font-size: 15px;">
                    <!-- <div> -->
                    <div style="padding: 0; color:#703589;  font-size: 15px; text-align: left; margin: 20px;">
                        Payment
                        <br>
                        <span>
                            <img class="img-fluid rounded-3 mt-5 center" style="width: 50%; "
                                src="..//assets/img/card.png" alt="Meeting" />
                        </span>
                    </div>

                    <form action="">
                        <input type="text" id="cname" name="cardname" style="width:70%;" placeholder="Cardholder Name">
                        <input type="text" id="ccnum" name="cardnumber" style="width:70%;" placeholder="Card Number">
                        <input type="text" id="expyear" name="expyear" style="width:34%;" placeholder="Expiration Date">
                        <input type="text" id="cvv" name="cvv" style="width:34%; margin-left: 10px;" placeholder="CVV">

                        <br>

                        <label>
                            <input type="checkbox" name="remember" style="margin-top:15px; margin-bottom:15px">
                            I Agree to <a href="" style="color:#703589">Terms & Conditions</a>
                        </label>

                        <div>
                            <a class="btn btn-primary px-4 me-sm-3" style="width: 20%;" href="">
                                <b>Pay</b>
                            </a>
                            <a class="btn btn-primary px-4 me-sm-3" style="width: 20%;" href="../HTML/payment.php">
                                <b>Back</b>
                            </a>
                        </div>

                    </form>
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