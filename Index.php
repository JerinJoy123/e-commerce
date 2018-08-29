<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login and Registration Form Design</title>
    <link rel = "stylesheet" href="style.css" />
</head>
<body>
<div class = "login-page">
<div class="form">
       <form method="POST" action="Index.php" class="register-form" onsubmit="return Validate()">
       <div>
        <input type="text" placeholder="User name"/>
        <div id="name_error"></div> 
        </div>
        <div>
        <input type="text" placeholder="Password" />
        <div id="password_error"></div>
        </div>
        <div>
        <input type="text" placeholder="Email" />
        <div id="email_error"></div>
        </div>
        <button>Create</button>
        <p class="message">Already Registered? <a href="#">Login</a></p>
       </form>
       
       <form class="login-form" onsubmit="return Validate()">
       <div>
       <input type="text" placeholder="Username" />
       <div id="Name_error"></div>
       </div>
       <div>
       <input type="text" placeholder="Password" />
       <div id="Password_error"></div>
       </div>
       <button>Login</button>
       <p class="message">Not Registered? <a href="#">Register</a></p>
       </form>
</div>
</div>    

<!--adding javascript  -->

<script type="text/javascript">
      //Getting all Input text objects
	  var Username = document.forms["vform"]["Username"];
	  var Email = document.forms["vform"]["Email"];
	  var Password = document.forms["vform"]["Password"];
	  
	  //Getting all Error Display on Register
	  var name_error = document.getElementById("name_error");
	  var password_error = document.getElementById("passwrod_error");
	  var email_error = document.getElementById("email_error");
	  
	  //Getting error display on Login
	  var Name_error = document.getElementById("Name_error");
	  var Password_error = document.getElementById("Password_error");
	  
	  //Setting All Event Listeners
	  Username.addEventListener("blur", nameVerify, true);
	  Email-id.addEventListener("blur", EmailVerify, true);
	  Password.addEventListener("blur", PasswordVerify, true);
	  
	  //Validation
	  function Validate(){
		  //Username Validation
		  if(Username.value == ""){
			  Username.styleborder = "1px solid red";
			  name_error.textContent = "Username is required";
			  Username.focus();
			  return false;
			  }
			  
		  //Email validation
		  if(Email.value == ""){
			  Email.style.border = "1px solid red";
			  email_error.textContent = "Email is required";
			  Email.focus();
			  return false;
			  }
			  
		  //Password Validation
		  if(Password.value == ""){
			  Password.style.border = "1px solid red";
			  password_error.textContent = "Password is required";
			  Password.focus();
			  return false;
			  }	  	  
		  }
		  
//event handler functions
function nameVerify(){
	if(Username.value !=""){
		Username.styleborder = "1px solid #5E6E66";
		name_error.innerHTML = "";
		return true;
		}
	} 		  
function EmailVerify(){
	if(Email.value !=""){
		Email.style.border = "1px solid #5E6E66";
		email_error.innerHTML = "";
		return true;
		}
	}	
function PasswordVerify(){
	if(Password.value !=""){
		Password.style.border = "1px solid #5E6E66"
		password_error.innerHTML = "";
		return true;
		}
	}	
	  
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$('.message a').click(function(){
	$('form').animate({height:"toggle",opacity:"toggle"},"slow");
});
</script>
</body>
</html>
