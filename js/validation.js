var myInput = document.getElementById("Password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function () {
    document.getElementById("message").style.display = "none";
}

// When the user clicks on the password field, show the message box
myInput.onfocus = function () {
    document.getElementById("message").style.display = "block";
}

 // When the user starts to type something inside the password field
 myInput.onkeyup = function () {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    psw_lower = 0;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
        psw_lower = 1;
    } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
    }

    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    psw_upper = 0;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
        psw_upper = 1;
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    var numbers = /[0-9]/g;
    psw_num=0;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
        psw_num=1;
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    psw_len=0;
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
        psw_len=1;
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the formm...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
        if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        } else {
        document.getElementById("nextBtn").style.display = "inline";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
        //return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, z, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    var option = document.getElementsByName('Gender');

    const form = document.getElementById('regForm');
    const email = document.getElementById('Email');
    const password = document.getElementById('Password');
    const password2 = document.getElementById('ConfPassword');
    const phone = document.getElementById('Phone');
    const fname = document.getElementById('firstname');
    const lname = document.getElementById('lastname');
    // const edu = document.getElementsByName('education');

    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    var phoneno = /^(05)\d{8}$/;

    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            setErrorFor(y[i], 'Input cannot be blank');
            // and set the current valid status to false
            valid = false;
        } else {
            if (currentTab == 0) {
                if (!isEmail(emailValue)) { //if the email is not valid
                    setErrorFor(email, 'Not a valid email please follow this format local-part@domain');
                    email.setCustomValidity("Not a valid email! please follow this format local-part@domain");
                    email.reportValidity();
                    valid = false;
                } else { //if the email is valid
                    email.setCustomValidity("");
                    setSuccessFor(y[i]);
                }


                if (psw_lower !== 1 || psw_upper !== 1 || psw_num !== 1 || psw_len !== 1 ) { //if the password1 not equal password2
                    setErrorFor(password, 'Password is not valid');
                    // password.setCustomValidity("not valid");
                    password.reportValidity();
                    valid = false;
                } else { //if the password1 equal password2
                    password.setCustomValidity("");
                    setSuccessFor(y[i]);
                }

                if (passwordValue !== password2Value) { //if the password1 not equal password2
                    setErrorFor(password2, 'Passwords does not match');
                    // password2.("Passwords does not match!");
                    password2.reportValidity();
                    valid = false;
                } else { //if the password1 equal password2
                    password2.setCustomValidity("");
                    setSuccessFor(y[i]);
                }

            } else if (currentTab == 1) {
                if (!(option[0].checked || option[1].checked)) { //if the gender not checked
                    setErrorFor(option[0], 'Input cannot be blank');
                    setErrorFor(option[1], 'Input cannot be blank');
                    valid = false;
                } else if (option[0].checked || option[1].checked) { //if the gender checked
                    setSuccessFor(option[0]);
                    setSuccessFor(option[1]);
                }
                if (phone.value.match(phoneno)) { //if the phone is correct
                    setSuccessFor(phone);
                }
                else if (!phone.value.match(phoneno)) { //if the phone is not correct
                    setErrorFor(phone, 'Not a valid Phone Number please follow this format 05********');
                    phone.setCustomValidity("Not a valid Phone Number please follow this format 05********");
                    phone.reportValidity();
                    valid = false;
                }
                if (fname.value !== "") { //if the first name not empty
                    setSuccessFor(firstname);
                }
                if (lname.value !== "") { //if the last name not empty
                    setSuccessFor(lastname);
                }
                // if (edu.value !== "") { //if education not empty
                //     setSuccessFor(education);
                // }
            }
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function setSuccessFor(input) {
    //Tell that the input is correct
    const formControl = input.parentElement;
    formControl.className = 'formcontrol success';
}

function setErrorFor(input, message) {
    //Tell that the input is wrong
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'formcontrol error';
    small.innerText = message;
}

function isEmail(email) {
    //check if the email is correct
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace("active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

