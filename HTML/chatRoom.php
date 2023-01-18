<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ITeams Chat Room</title>
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
            <div style="grid-row: 1 / 5; margin-top: 10px;  margin-bottom: 40px;">
                <i class="bi bi-person-circle" style="font-size: 80px; color:#703589; "></i>
                <div style="font-size: 15px; font-weight:normal;">Mehaf Alzahrani</div>
                <hr style="color:#6CBBD2; margin: 0;">
                <div style="margin-left:10%;">
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;"
                            href="../html/projectPageManager.html"> <i class="bi bi-pc-display-horizontal">
                                Project</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/calendar.html"> <i
                                class="bi bi-calendar-week"> Calender</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/chatRoom.html"> <i
                                class="bi bi-chat-left-dots"> Chat Room</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/meetings.html"> <i
                                class="bi bi-person-video2"> Meetings</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/files.html"> <i
                                class="bi bi-file-earmark-arrow-up"> Files</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/projectBidding.html"> <i
                                class="bi bi-receipt">
                                Bidding</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/findMembers.html"> <i
                                class="bi bi-person-check-fill"> Find Member</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../html/payment.html"> <i
                                class="bi bi-cash-coin">
                                Payment</a></i></a>
                </div>
            </div>

            <div style="grid-row: 1 / 5; margin-left: 10px;  margin-top: 10px;  margin-bottom: 40px;">
                <div class="card-event"
                    style="text-align: left; font-size: 13px; font-weight:bold; background-color:#433850; width: inherit;height: fit-content;border-bottom-left-radius:0px ;border-bottom-right-radius:0px ;">
                    <i class="bi bi-person-circle" style="font-size: 35px; margin-left: 10px;color:#703589; ">
                        <span style=" margin-left:2%;font: weight 10px;color: white;font-size: 15px;">
                            ITeams Project</span>
                        <h1 style="font-size: 7px;color:greenyellow;margin-left: 60px;">3 Online</h1>

                    </i>
                </div>
                <div class="panel-body">
                    <div class="chats">
                        <div class="chat">
                            <div class="chat-avatar">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                </i>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content" style="height:60px;">
                                    <p style="font-size: 14px; text-align: left;">
                                        Good morning, sir.
                                        <br>What can I do for you?
                                    </p>
                                    <time class="chat-time" datetime="2015-07-01T11:37"
                                        style="font-size: 14px; text-align: left;">11:37:08 am</time>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-avatar">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                </i>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content" style="height:65px;">
                                    <p style="font-size: 14px; text-align: left;">Well, I am just looking around.</p>
                                    <time class="chat-time" datetime="2015-07-01T11:39" p
                                        style="font-size: 14px; text-align: left;">11:39:57 am</time>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-avatar">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                </i>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content" style="height:60px;">
                                    <p style="font-size: 14px; text-align: left;">
                                        If necessary, please ask me.
                                    </p>
                                    <time class="chat-time" datetime="2015-07-01T11:40"
                                        style="font-size: 14px; text-align: left;">11:40:10 am</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer" style="width: inherit;">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" style="background: 
                            #CBDFE5
                            ;" placeholder="Type something">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" style="margin-left: 5px;">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Panel Chat -->

            <div class="card center"
                style="padding: 0.1px; font-size:15px; height:fit-content; width:fit-content; box-shadow: none; background-color:#ffffff; text-align: left; border:none;box-shadow: none;margin-bottom: 0%;">

                <div class="card center"
                    style="padding: 25px; font-size:15px; height:90px; width:250px; box-shadow: none; background-color:#433850; text-align: left; border:none;box-shadow: none;margin-bottom: 0%;border-bottom-left-radius:0px ;border-bottom-right-radius:0px ;">
                    <a href=" "><a class="btn btn-side"
                            style="width:100%; padding-left: 0; background:#433850; color: white;"" href=""> <i
                        class=" bi bi-plus-circle" style="background:#433850;"></i> ITeams Project
                            <br>
                            <h1 style="font-size: 10px;color: #ffffff;margin-left: 20px;">4 members</h1>
                        </a></a>
                </div>
                <div class="px-3 ex1"
                    style="padding: 10px; margin: 10px; font-size: 15px; color:#703589;width: fit-content;">

                    <div style="text-align:left; font-size: 15px; margin-left: 10px; ">

                        Members
                        <div class="flex-container-v">
                            <div class="card-event"
                                style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #ffffff; width: 150px;">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                    <span style=" margin-left:2%;font: weight 10px;color: black;font-size: 15px;">
                                        Me</span>
                                    <h1 style="font-size: 7px;color:greenyellow;margin-left: 60px;">Online</h1>

                                </i>
                            </div>
                            <div class="card-event"
                                style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #ffffff; width: 150px;">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                    <span style=" margin-left:2%;font: weight 10px;color: black;font-size: 15px;">
                                        Amal</span>
                                    <h1 style="font-size: 7px;color:greenyellow;margin-left: 60px;">Online</h1>

                                </i>
                            </div>
                            <div class="card-event"
                                style="margin-top: 5%; padding-top: 10px; text-align: left; font-size: 13px; font-weight:bold; background-color: #ffffff; width: 150px;">
                                <i class="bi bi-person-circle"
                                    style="font-size: 35px; margin-left: 10px;color:#703589; ">
                                    <span style=" margin-left:2%;font: weight 10px;color: black;font-size: 15px;">
                                        Reem</span>
                                    <h1 style="font-size: 7px;color:greenyellow;margin-left: 60px;">Online</h1>

                                </i>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
</body>

</html>