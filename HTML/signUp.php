<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>ITeams Sign Up</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Bootstrap icons-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="../css/styles.css" rel="stylesheet" />
	<style>
		body {
			background-color: #313C41;
		}

        .multi-select{
            width:200px;
            background-color:red;
            color:red;
        }

        .selectBox select{
            width:100%;

        }

        .overSelect{
            positoin:absolute;
            left:0; right:0; top:0; bottom:0;


        }


        #checkboxes{
            display:none;
            border:1px #313C41 solid;
            background-color:white;


        }

        #checkboxes: hover{
            background-color: grey;
              color: #212529;


        }  

        #checkboxes label{
            display:block;
        }

        #checkboxes label: hover{
        background-color:red;

        }   

        #message{
        display:none;
        }  

         
	</style>
</head>

<body class="d-flex flex-column h-100">
	<main class="flex-shrink-0">
		<!-- Navigation-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom fixed-top" style="padding-bottom: 0.625rem;">
			<div class="container px-5">
				<a href="#scroll-up"><img src="..//assets/img/Iteams_logo.png" alt="ITeams Logo"
                        style="width:150px; height:30px; margin-left:-60px; margin-top: 6px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:-60px;">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="margin-top: 6px"><a class="nav-link" href="..//index.php">About Us</a></li>
                        <li class="nav-item" style="margin-top: 6px"><a class="nav-link" href="..//index.php">How It Works?</a></li>
                        <li class="nav-item" style="margin-top: 6px"><a class="nav-link" href="..//HTML/logIn.html">Log In</a></li>
                        <li class="nav-item" style="margin-top: 6px"><a class="nav-link" href="..//HTML/signUp.php">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
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
        <div class="containers" style="height:950px; margin-bottom:50px;  margin-top:50px">
            <div class="card" style="height:900px; border-radius: 30px; margin-top:-5%;">
                <img src="..//assets/img/Iteams_logo.png" style="width:150px; height:30px; margin-left: 90px;"
                    alt="logo">
                <!-- Sign In Form -->
                <div class="container rform">
                    <h1 style="text-align:center; margin-top:5%; font-size:large; color: #000000;">Welcome to
                        ITeams!</h1>
                    <p style="text-align:center; color: #313C41;">Already have an account? <a href="..//HTML/logIn.html"
                            style="color:#703589">Log In</a></p>

                    <form action="..//php/register.php" method="post" id="regForm">
                        <div class="tab" style="display: block;">
                            <!--Subheading-->
                            <b style=color:#313C41>Step 1: Account Information</b>
                            <div class="dropdown-divider"></div>

                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="email"><b style=color:#313C41>Email</b></label><span style="color:#703589">
                                    *</span>
                                <input type="text" id="Email" name="Email" placeholder="Enter Email"
                                    style="width: 100%; height: 50px;">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="psw"><b style=color:#313C41>Password</b></label><span style="color:#703589">
                                    *</span>
                                <input type="password" id="Password" name="Password" placeholder="Enter Password"
                                    style="width: 100%; height: 50px;">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                <div id="message" style="font-weight: normal; margin-top: 0; padding: 0;">
                                    <div>Password must contain the following:</div>
                                    <div id="letter" class="invalid">Lowercase letter</div>
                                    <div id="capital" class="invalid">Uppercase letter</div>
                                    <div id="number" class="invalid">number</div>
                                    <div id="length" class="invalid">Minimum 8 characters</div>
                                </div>
                                <br>
                            </div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="psw-repeat"><b style=color:#313C41>Repeat Password</b></label><span
                                    style="color:#703589"> *</span>
                                <input type="password" id="ConfPassword" name="ConfPassword"
                                    placeholder="Repeat Password" style="width: 100%; height: 50px;">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                        </div>
                        <div class="tab">
                            <!--Subheading-->
                            <b style=color:#313C41>Step 2: Personal Information</b>
                            <div class="dropdown-divider"></div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="fname"><b style=color:#313C41>First Name</b></label><span
                                    style="color:#703589"> *</span>
                                <input type="text" id="firstname" name="firstname" placeholder="First Name"
                                    style="width: 100%; height: 50px;">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="lname"><b style=color:#313C41>Last Name</b></label><span
                                    style="color:#703589"> *</span>
                                <input type="text" id="lastname" name="lastname" placeholder="Last Name"
                                    style="width: 100%; height: 50px;">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <!--radio button-->
                            <div class="formcontrol">
                                <label for="gender"><b style=color:#313C41>Gender</b></label><span
                                    style="color:#703589"> *</span>
                                <input type="radio" id="Male" name="Gender" value="Male"
                                    style="margin-left: 9%;margin-top: 5%;">
                                <label for="Male" style="color:#313C41">Male</label>
                                <!--radio button-->
                                <input type="radio" id="Female" name="Gender" value="Female"
                                    style="margin-left: 3%;margin-top: 5%;">
                                <label for="Female" style="color:#313C41">Female</label><br>
                                <small>Error message</small>
                            </div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <label for="phone"><b style=color:#313C41>Phone Number</b></label><span
                                    style="color:#703589"> *</span>
                                <input type="text" id="Phone" name="Phone" placeholder="05********"
                                    oninput="this.className = ''" required>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                        </div>
                        <div class="tab">
                            <!--Subheading-->
                            <b style=color:#313C41>Step 3: Profile Information</b>
                            <div class="dropdown-divider"></div>
                            <!--textbox-->
                            <div class="formcontrol">
                                <!--dropdown select-->
                                <label for="education"><b style=color:#313C41>Education</b></label><span
                                    style="color:#703589"> *</span>
                                <br />
                                <select id="education" name="education" style="width: 100%; height:50px; resize:none padding:12px 20px; border-radius: 10px;margin: 8px 0;display: inline-block;border: 1px solid #ccc; box-sizing: border-box;" required>
                                    <option value="" disabled selected value>-- Please select --</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                    <option value="Master Degree">Master Degree</option>
                                    <option value="Doctoral Degree">Doctoral Degree</option>
                                </select>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>

                            <div class="formcontrol">
                                <!--dropdown select-->
                                <!-- <label for="skills"><b style=color:#313C41>Skills</b></label><span
                                    style="color:#703589"> *</span>
                                <br />
                                <select id="skills" name="skills" style="width: 100%; height:40px " required>
                                    <option value="" disabled selected value>-- Please select --</option>
                                    <option value="01">a</option>
                                    <option value="02">b</option>
                                    <option value="03">c</option>
                                    <option value="04">d</option>
                                </select> -->
                                <label for="Skills"><b style=color:#313C41>Skills</b></label><span style="color:#703589"> *</span>
                            <div class="multiselect">
                                <div class="selectBox" onclick="showCheckboxes()">
                                    <select style="width: 100%; height:50px; resize:none padding:12px 20px; border-radius: 10px;margin: 8px 0;display: inline-block;border: 1px solid #ccc; box-sizing: border-box;">
                                        <option value="" disabled selected value>-- Please select --</option>
                                            </select>
                                            <div class="overSelect"></div>
                                            </div>
                                            <div class="ex1" id="checkboxes" style="height:100px; color:black ">

                                                <optgroup label="Data analysis"></optgroup>
                                                <label for="1"><input type="checkbox" name="skills[]" value="SQL" id="1">SQL</label>
                                                <label for="2"><input type="checkbox" name="skills[]" value="Statistics" id="2">Statistics</label>
                                                <label for="3"><input type="checkbox" name="skills[]" value="Python" id="3">Python</label>
                                                <optgroup label="Programming"></optgroup>
                                                <label for="3"><input type="checkbox" name="skills[]" value="Python" id="3">Python</label>
                                                <label for="4"><input type="checkbox" name="skills[]" value="C++" id="4">C++</label>
                                                <label for="5"><input type="checkbox" name="skills[]" value="JavaScript" id="5">JavaScript</label>
                                                <label for="6"><input type="checkbox" name="skills[]" value="Ruby" id="6">Ruby</label>
                                                <label for="7"><input type="checkbox" name="skills[]" value="PowerShell" id="7">PowerShell</label>
                                                <optgroup label="Machine learning"></optgroup>
                                                <label for="8"><input type="checkbox" name="skills[]" value="Kernels" id="8">Kernels</label>
                                                <label for="9"><input type="checkbox" name="skills[]" value="Clustering" id="9">Clustering</label>
                                                <label for="10"><input type="checkbox" name="skills[]" value="Deep learning" id="10">Deep  learning</label>
                                                <optgroup label="Systems and networks"></optgroup>
                                                <label for="11"><input type="checkbox" name="skills[]" value="Windows" id="11">Windows</label>
                                                <label for="12"><input type="checkbox" name="skills[]" value="Linux" id="12">Linux</label>
                                                <label for="13"><input type="checkbox" name="skills[]" value="Mac" id="13">Mac</label> 
                                                <optgroup label="Web developer"></optgroup>
                                                <label for="14"><input type="checkbox" name="skills[]" value="HTML" id="14">HTML</label>
                                                <label for="15"><input type="checkbox" name="skills[]" value="CSS" id="15">CSS</label>
                                                <label for="5"><input type="checkbox" name="skills[]" value="JavaScript" id="5">JavaScript</label>
    
                            </div>
                            </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>

                            <div class="formcontrol">
                                <label for="description"><b style=color:#313C41>Describe yourself</b></label>
                                <textarea type="text" id="description" name="description" placeholder="Describe your top skills, strengths, and experiences..." 
                                    style="width: 100%; height: 150px; resize:none; padding:12px 20px; border-radius: 10px;margin: 8px 0;display: inline-block;border: 1px solid #ccc; box-sizing: border-box;"></textarea>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                            </div>
                            <a herf="..//HTML/profile.php"> <button type="submit" id="submit" style="background-color:#6CBBD2" >Submit</button></a>


                        </div>
                        <div style="overflow:auto;">
                            <div>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                <button type="button" id="prevBtn" style="display:none;"
                                    onclick="nextPrev(-1)">Previous</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>

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
    <script src="../js/validation.js"></script>
    <script src="../js/script.js"></script>

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