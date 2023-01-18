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
<div style="grid-row: 1 / 5; margin-top: 10px;  margin-bottom: 40px;">
	<i class="bi bi-person-circle" style="font-size: 80px; color:#703589; "></i>
                <div style="font-size: 15px; font-weight:normal;">
                    <?php echo $row["firstName"]." ".$row["lastName"]; ?>
                </div>
                <hr style="color:#6CBBD2; margin: 0;">
                <div style="margin-left:10%;">
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/projectPageManager.php"> <i
                                class="bi bi-pc-display-horizontal"> Project</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/calendar.php"> <i
                                class="bi bi-calendar-week"> Calender</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/chatRoom.php"> <i
                                class="bi bi-chat-left-dots"> Chat Room</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/meetings.php"> <i
                                class="bi bi-person-video2"> Meetings</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/files.php"> <i
                                class="bi bi-file-earmark-arrow-up"> Files</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/projectBidding.php"> <i 
                                class="bi bi-receipt"> Bidding</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/findMembers.php"> <i
                                class="bi bi-person-check-fill"> Find Member</a></i></a>
                    <a href=" "><a class="btn btn-side px-3 " style="width:100%;" href="../HTML/payment.php"> <i 
                                class="bi bi-cash-coin"> Payment</a></i></a>
                </div>
            </div>