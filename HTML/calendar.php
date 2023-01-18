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
<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ITeams Calendar</title>
    <!--person icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <!-- <script src="scripts.js"></script> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Calendar
    </title>
    <!-- <link rel="stylesheet" href="app.css"> -->

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


        <!-- inspired by http://colorhunt.co/c/8184 and 
    https://dribbble.com/shots/2407357-Calendar%60 -->

        <div class="project-grid" style="height:80%;">
         <?php include("..//HTML/projectSideBar.php");?>


            <div style="grid-row: 1 / 5; margin-left: 10px;  margin-top: 10px;  margin-bottom: 40px;">
                <div class="light">
                    <div class="calendar">
                        <div class="calendar-header" style="font-size:20px;" >
                            <span class="month-picker"  id="month-picker">
                            </span>
                            <div class="year-picker"  style="font-size:20px;">
                                <span class="year-change" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year"></span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="calendar-days">
                            </div>
                        </div>
                        <div class="month-list"></div>
                    </div>
                </div>
            </div>

            <div class="px-3 ex1" style="padding: 10px; margin: 10px; font-size: 15px; color:#703589;">

                <div style="text-align:left; font-size: 15px; ">
                    <a href=" "><a class="btn btn-side" style="width:100%; padding-left: 0;" href=""> <i
                        class="bi bi-plus-circle"></i> Add Event</a></a>
                        Upcoming Events
                    <div class="flex-container-v">
                        <div class="card-event"
                            style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #EFF3F8; width: 90%;">
                            <li style="margin-left:10%; color: #703589;">
                                <span> 28/5/2023 </span>
                            </li>
                            <span style=" margin-left:10%;font-weight:normal;"> Team Meeting </span>
                        </div>
                        <div class="card-event"
                            style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #EFF3F8; width: 90%;">
                            <li style="margin-left:10%; color: #703589;">
                                <span> 28/5/2023 </span>
                            </li>
                            <span style=" margin-left:10%;font-weight:normal;"> Team Meeting </span>
                        </div>
                        <div class="card-event"
                            style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #EFF3F8; width: 90%;">
                            <li style="margin-left:10%; color: #703589;">
                                <span> 28/5/2023 </span>
                            </li>
                            <span style=" margin-left:10%;font-weight:normal;"> Team Meeting </span>
                        </div>
                        <div class="card-event"
                            style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #EFF3F8; width: 90%;">
                            <li style="margin-left:10%; color: #703589;">
                                <span> 28/5/2023 </span>
                            </li>
                            <span style=" margin-left:10%;font-weight:normal;"> Team Meeting </span>
                        </div>
                        <div class="card-event"
                            style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #EFF3F8; width: 90%;">
                            <li style="margin-left:10%; color: #703589;">
                                <span> 28/5/2023 </span>
                            </li>
                            <span style=" margin-left:10%;font-weight:normal;"> Team Meeting </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer-->
        <?php include("..//HTML/footer.html");?>

    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="../js/calendar.js"></script>
</body>

</html>
