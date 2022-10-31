// JavaScript Document
function validateFullname()
{
	
	var fname= document.getElementById("txtname").value;
	
	if((fname == "")|| (fname == null))
		{
			alert("please enter full name");
			return false;
		}
	return true;
}

function validateEmail()
{
	var email= document.getElementById("txtemail").value;
	var at= email.indexOf("@");
	var dt= email.lastIndexOf(".");
	var len= email.length; 
	
	if((at < 2)|| (dt-at < 2) || (len - dt < 2))
		{
			alert("please enter valid email address");
			return false;
		}
	return true;
}

function pwvalidtion()
{
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if((myInput.value.length >= 8)) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
}

function validatePassword()
{
	var pw= document.getElementById("password").value;
	var cpw= document.getElementById("compassword").value;
	
	if((pw.length <= 8)||(pw != cpw))
		{
			alert("please enter the correct password")
			return false;
		}
	return true;
}

function contactNumber()
{
	var connumber= document.getElementById("contel").value;
	
	if((isNaN(connumber))||(connumber.length != 10))
		{
			alert("please enter the valid contact number")
			return false;
		}
	return true;
}

function validateAll()
{
	if(validateFullname() && validateEmail() && pwvalidtion() && validatePassword() && contactNumber() ) // all the functions are return ture
		{
			alert("submit all");
			
		}
	else
	{
		Event.preventDefault(); // stop the refreshing the page & keep the correct values (avoid the refreshing we have to use Event.preventDefault() function)
	}
}