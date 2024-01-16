// CODE FROM LAB SAMPLE SOLUTION BUT WITH SOME EXTRA FUNCTIONALITIES
// target elements from the DOM using this function
function $(id) {
    return document.getElementById(id);
}

var allowSubmit = false; // set boolean value to false

// when clicking the submit button for the register form, if 'allowSubmit' is false, do not submit and then run function which contains form validations
$("register-form").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkRegData(); // check for errors
    } else {
        // prevent the preventDefault function
    }
});

// when clicking the submit button for the login form, if 'allowSubmit' is false, do not submit and then run function which contains form validations
$("login-form").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkLoginData(); // check for errors
    } else {
        // prevent the preventDefault function  
    }
});

function checkRegData() {
    // declare constants to have a fixed value and trim off any whitespaces on the values to escape data
    const usernameValue = $("username").value.trim(); // target id of input elements using the $ function
    const firstNameValue = $("firstname").value.trim();
    const surnameValue = $("lastname").value.trim();
    const mobileValue = $("phone").value.trim();
    const emailValue = $("email").value.trim();
    const passwordValue = $("psw").value.trim();
    const passwordMatchValue = $("psw-repeat").value.trim();
    var usernameSame=0;


    var name_valid = /^[A-Za-z]+$/; // regex that configures patterns for the full name input field to only have alphabetical letters
    var pass_validation = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/; 
    // regex that configures patterns for the password input field to have at least 6-15 characters, an uppercase and lowercase letter, a number and a special character

    // username validation
    var usernameValid = false; // set boolean value to false
    if (usernameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("usernameTag").style.display = "inline";
        $("usernameTag").innerHTML = "Please fill in this field.";
        document.getElementById('username').style.borderColor = "orange";//add a border color 
    }  else if(usernameValue.length<4){
        $("usernameTag").style.display = "inline";
        $("usernameTag").innerHTML = "Your username is too short (min 4 char)";
        document.getElementById('username').style.borderColor = "orange";
    }
    else {
        $("usernameTag").style.display = "none"; // remove error message
        usernameValid = true; // set boolean variable to true
        document.getElementById('username').style.borderColor = "#ddd";

    }

    // first name validation
    var nameValid = false; // set boolean value to false
    if (firstNameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("firstnameTag").style.display = "inline";
        $("firstnameTag").innerHTML = "Please fill in this field.";
        document.getElementById('firstname').style.borderColor = "orange";

    } else if (!firstNameValue.match(name_valid)) { 
        // if there are other characters other than alphabetical characters, then display text
        $("firstnameTag").style.display = "inline";
        $("firstnameTag").innerHTML = "Alphabetical characters only.";
        document.getElementById('firstname').style.borderColor = "orange";
    } else if(firstNameValue.length<2){
        $("firstnameTag").style.display = "inline";
        $("firstnameTag").innerHTML = "Your name is too short (min 2 char)";
        document.getElementById('firstname').style.borderColor = "orange";
    }
    else { 
        $("firstnameTag").style.display = "none"; // if successful, hide error message and set boolean variable to true
        nameValid = true;
        document.getElementById('firstname').style.borderColor = "#ddd";

    }

    // last name validation
    var nameValid = false; // set boolean value to false
    if (surnameValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("lastnameTag").style.display = "inline";
        $("lastnameTag").innerHTML = "Please fill in this field.";
        document.getElementById('lastname').style.borderColor = "orange";

    } else if (!surnameValue.match(name_valid)) { 
        // if there are other characters other than alphabetical characters, then display text
        $("lastnameTag").style.display = "inline";
        $("lastnameTag").innerHTML = "Alphabetical characters only.";
        document.getElementById('lastname').style.borderColor = "orange";

    } else if(surnameValue.length<2){
        $("lastnameTag").style.display = "inline";
        $("lastnameTag").innerHTML = "Your lastname is too short (min 2 char)";
        document.getElementById('lastname').style.borderColor = "orange";
    } 
    else { 
        $("lastnameTag").style.display = "none"; // if successful, hide error message and set boolean variable to true
        nameValid = true;
        document.getElementById('lastname').style.borderColor = "#ddd";

    }

    // UK mobile number validation
    var mobileValid = false; // set boolean value to false
    if (mobileValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("mobileTag").style.display = "inline";
        $("mobileTag").innerHTML = "Please fill in this field.";
        document.getElementById('phone').style.borderColor = "orange";

    } else if (mobileValue.length != 11) { // if the length is not equal to 11, display error message
        $("mobileTag").style.display = "inline";
        $("mobileTag").innerHTML = "Must be 11 digits.";
        document.getElementById('phone').style.borderColor = "orange";

    } else if (mobileValue[0]!=0) { // if the length is not equal to 11, display error message
        $("mobileTag").style.display = "inline";
        $("mobileTag").innerHTML = "Your phone number should start with a 0";
        document.getElementById('phone').style.borderColor = "orange";

    }
    else { 
        $("mobileTag").style.display = "none"; // hide error message
        mobileValid = true; // set boolean variable to true
        document.getElementById('phone').style.borderColor = "#ddd";

    }

    // email validation
    var emailValid = false; // set boolean value to false
    if (emailValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please fill in this field.";
        document.getElementById('email').style.borderColor = "orange";

    } else if ((!emailValue.includes("@") && (!emailValue.includes(".com"))) || (!emailValue.includes("@") || !emailValue.includes(".com"))) {
        // if the value for this field does not include @ and .com, display error message
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please enter a valid email.";
        document.getElementById('email').style.borderColor = "orange";
    } else {
        $("emailTag").style.display = "none"; // hide error message
        emailValid = true; // set boolean variable to true
        document.getElementById('email').style.borderColor = "#ddd";

    }

    // password validation
    var pwordValid = false; // set boolean value to false
    if (passwordValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("pwordTag").style.display = "inline";
        $("pwordTag").innerHTML = "Please fill in this field.";
        document.getElementById('psw').style.borderColor = "orange";
    } else if (!passwordValue.match(pass_validation)) { // if value of password input field does not match the regex pattern then display error message
        $("pwordTag").style.display = "inline";
        $("pwordTag").innerHTML = "Password must be 6-15 characters with at least one uppercase, one lowercase letters, one number and a special character.";
        document.getElementById('firstname').style.borderColor = "psw";
        document.getElementById('psw').style.borderColor = "#ddd";


    } 
    else {
        $("pwordTag").style.display = "none"; // hide error message 
        pwordValid = true; // set boolean variable to true
    }

    // password match validation
    var confirmValid = false; // set boolean value to false
    if (passwordMatchValue == "") { // if empty then replace error message text with "Please fill in this field"
        $("confirmTag").style.display = "inline";
        $("confirmTag").innerHTML = "Please fill in this field.";
        document.getElementById('psw-repeat').style.borderColor = "orange";

    } else if (passwordMatchValue != passwordValue) { // if confirm password does not match the original password, display error message
        $("confirmTag").style.display = "inline";
        $("confirmTag").innerHTML = "Must match the password given.";
        document.getElementById('psw-repeat').style.borderColor = "orange";

    } else {
        $("confirmTag").style.display = "none"; // if input is valid, hide erroe message
        confirmValid = true; // set boolean variable to true
        document.getElementById('psw-repeat').style.borderColor = "#ddd";

    }

    function isValid() {
        // if all boolean variables are true, then set the main boolean variable "allowSubmit" to true
        if (usernameValid && nameValid && mobileValid && emailValid && pwordValid && confirmValid) {
            allowSubmit = true;            
        }
    }

    isValid(); // run this function
}

// form validation for the login form
function checkLoginData() {
    // target and refine value of these input fields in the login form
    const loginUsernameValue = $("login_username").value.trim();
    const loginPasswordValue = $("login_pwd").value.trim();

    // if the input fields are empty display error messages
    if (loginUsernameValue == "" ) {
        $("loginUsernameTag").style.display = "inline";
        $("loginUsernameTag").innerHTML = "Please fill in this field.";
        document.getElementById('login_username').style.borderColor = "orange";

    }
    if( loginPasswordValue == ""){
        $("loginPasswordTag").style.display = "inline";
        $("loginPasswordTag").innerHTML = "Please fill in this field.";
        document.getElementById('login_pwd').style.borderColor = "orange";

    }
    else if (loginUsernameValue != "" && loginPasswordValue != "") {
        // if not empty, allowSubmit is now true
        allowSubmit = true;
        document.getElementById('login_username').style.borderColor = "#ddd";
        document.getElementById('login_pwd').style.borderColor = "#ddd";

    }
}  

