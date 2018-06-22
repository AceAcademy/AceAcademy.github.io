<?php
session_start();
$error = "";

if(array_key_exists("logout", $_GET)){

  unset($_SESSION);
  setcookie("id", "", time()- 60*60);
  $_COOKIE['id'] = "";

}else if( (array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id']) ){

  header("Location: loggedinpage.php");

}
if(array_key_exists("submit", $_POST)){


  $link = mysqli_connect("shareddb-i.hosting.stackcp.net", "modaludemy-333502b0", "testudemy123", "modaludemy-333502b0");

  if(mysqli_connect_error()){

    die("database connection error");

  }

  if($_POST['signUp'] == '1'){
  if(!$_POST['firstname']){

    $error .= "Your first name is required<br>";

  }}

  if($_POST['signUp'] == '1'){
  if(!$_POST['lastname']){

    $error .= "Your last name is required<br>";

  }}

  if(!$_POST['email']){

    $error .= "Your email is required<br>";

  }

  if(!$_POST['password']){

    $error .= "Your password is required<br>";

  }

  if($error != ""){

    $error = "<p>There were errors in your form:</p>".$error;

  }
  else{

    if($_POST['signUp'] == '1'){

    $query = "SELECT id FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result) > 0){

      $error =  "This email address is already taken";

    }
    else {

      $query = "INSERT INTO users (firstname, lastname, email, password, studentcheck, tutorcheck, studentClassCode, studentClassNumber, tutorClassCode, tutorClassNumber) VALUES('".mysqli_real_escape_string($link, $_POST['firstname'])."',
      '".mysqli_real_escape_string($link, $_POST['lastname'])."',
      '".mysqli_real_escape_string($link, $_POST['email'])."',
      '".mysqli_real_escape_string($link, $_POST['password'])."',
    '".mysqli_real_escape_string($link, $_POST['studentCheck'])."',
  '".mysqli_real_escape_string($link, $_POST['tutorCheck'])."',
'".mysqli_real_escape_string($link, $_POST['studentClassCode'])."',
'".mysqli_real_escape_string($link, $_POST['studentClassNumber'])."',
'".mysqli_real_escape_string($link, $_POST['tutorClassCode'])."',
'".mysqli_real_escape_string($link, $_POST['tutorClassNumber'])."')";

      if(!mysqli_query($link, $query)){

        $error = "Could not sign you up";

      }
      else{

        $query = "UPDATE users SET password ='".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";

        mysqli_query($link , $query);

        $_SESSION['id'] = mysqli_insert_id($link);
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['email'] = $_POST['email'];

        if($_POST['stayLoggedIn']=='1'){

          setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);

        }

        header("Location: loggedinpage.php");
      }

    }
  }
  else{

    $query = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
    $queryFirstName = "SELECT firstname FROM users WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

    $result = mysqli_query($link, $query);
    $resultFirstName = mysqli_query($link, $queryFirstName);

    $row = mysqli_fetch_array($result);
    $rowFirstName = mysqli_fetch_array($resultFirstName);

    if(isset($row)){

      $hashedPassword = md5(md5($row['id']).$_POST['password']);

      if($hashedPassword == $row['password']){

        $_SESSION['id'] = $row['id'];
        $_SESSION['firstname'] = $rowFirstName['firstname'];

        if($_POST['stayLoggedIn']=='1'){

          setcookie("id", $row['id'], time() + 60*60*24*365);

        }

        header("Location: index.php");


      }
      else{

        $error="That email/passwor combination could not be found.";

      }

    }
    else {

      $error = "That email/passwor combination could not be found.";
    }

    }

  }

}


?>

<!--Ace Academy Website -->
<!--By Gautier MARECHAL /// Tanguy GAURIER -->
<!-- 2018 Ace Academy -->

<!DOCTYPE html>
<html>

<head>

<!--Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Boostrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--CSS files -->
<link href="CoreCSS.min.css" rel="stylesheet">
<link href="MainPageCSS.min.css" rel="stylesheet">
<link href="grid.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

<!--Google Font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<!--Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<title>Ace Main Page</title>
<style>


body{
  background: none;
  font-family: 'Ubuntu', sans-serif !important;
  background: url(background.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.container{

  text-align: center !important;
  width: 400px !important;
  padding-right: 10px !important;
  margin-top: 110px !important;

}
h1{
  text-align: center;
  color: #ffff !important;
}
label{
  color: #ffff !important;
  font-size: 100%!important;
  text-align: left;
  padding-top: 2px;
}

#logInForm{

display: none;

}

#text{
  text-align: center;
  color: #ffff;
}

.toggleForms{

  font-weight: bold;
  cursor: pointer;

}

#studentForm{
  display: none;
}
#tutorForm{
  display: none;
}

#floatButton{
  height: 100px;
	width: 100px;
	position: fixed;
  right: 85%;
	top: 10%;
  border-radius: 100px;
  background-color: #17743D;
  border-color: #17743D;
  text-align: center;
  padding: 0px;
}

#floatButton:hover{
  transition:all 0.3s ease;
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  background-color: #40B5F3;
  border-color: #40B5F3;
  color: #092433;
}

#homeSymbol{
  padding-right: 41px;
  padding-left: 41px;
  padding-top: 41px;


}

#submitButtonForm{
  background-color: #0f753b;
  border-color: #0f753b;
}
#submitButtonForm:hover{
  transition:all 0.3s ease;
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  background-color: #40B5F3;
  border-color: #40B5F3;
  color: #092433;
}

/* The container */
.customCheckbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.customCheckbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.customCheckbox:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.customCheckbox input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.customCheckbox input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.customCheckbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
</head>

<body>



<div class="container">

  <h1>Academy Ace</h1>

  <p id="text"><strong>Be part of the new tutoring exerience</strong></p>



<div id="error"><?php if($error!=""){

  echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

}?></div>

<form method="post" id="signUpForm" class="animated pulse">
  <p id="text">Join us and be the first served at launch of the app!</p>
<div method="post" class="form-group">
  <input class="form-control" type="text" name="firstname" placeholder="First Name">
</div>
<div method="post" class="form-group">
  <input class="form-control" type="text" name="lastname" placeholder="Last Name">
</div>
<div method="post" class="form-group">
  <input class="form-control" type="email" name="email" placeholder="Email Address">
</div>
<div method="post" class="form-group">
  <input class="form-control" type="password" name="password" placeholder="Password">
</div>
<div class="checkbox">
  <label class="customCheckbox"><input  type="checkbox" name = "stayLoggedIn" value=1> Stay Logged In<span class="checkmark"></span></label>
  <label class="customCheckbox"><input  id="checkBoxStudent" type="checkbox" name = "studentCheck" value=1 onclick="appearStudentForm()"> Student<span class="checkmark"></span></label>
  <label class="customCheckbox"><input  id="checkBoxTutor" type = "checkbox" name = "tutorCheck" value=1 onclick="appearTutorForm()"> Tutor<span class="checkmark"></span></label>
</div>

<div id="studentForm" class="animated bounceInLeft">
  <h1>Student</h1>
  <p id="text">Tell us what class would you like to Ace in the future</p>

  <div method="post" class="form-group">
    <input class="form-control" type="text" name="studentClassCode" placeholder="Enter Class Code (Example: COMM, COMP, FINA ...)">
  </div>
  <div method="post" class="form-group">
    <input class="form-control" type="text" name="studentClassNumber" placeholder="Enter Class Number (Example: 215, 217, 308 ...)">
  </div>
</div>

<div method="post" id="tutorForm" class="animated bounceInRight">
  <h1>Tutor</h1>
  <p id="text">Tell us what class would you like to teach in the future</p>

  <div method="post" class="form-group">
    <input class="form-control" type="text" name="tutorClassCode" placeholder="Enter Class Code (Example: COMM, COMP, FINA ...)">
  </div>
  <div method="post" class="form-group">
    <input class="form-control" type="text" name="tutorClassNumber" placeholder="Enter Class Number (Example: 215, 217, 308 ...)">
  </div>
</div>
<div method="post" class="form-group">
  <input type="hidden" name ="signUp" value="1">
  <input class="btn btn-success" type="submit" name ="submit"value = "Sign Up!"id="submitButtonForm">
</div>

<p id="text"><a class="toggleForms">Log In</a></p>
</form>

<form method="post" id="logInForm" class="animated pulse">
  <p id="text">Log in with your email and passsword</p>


<div method="post" class="form-group">
  <input class="form-control" type="email" name="email" placeholder="Email Address">
</div>
<div method="post" class="form-group">
  <input class="form-control" type="password" name="password" placeholder="Password">
</div>
<div class="checkbox">
  <label class="customCheckbox"><input  type="checkbox" name = "stayLoggedIn" value=1> Stay Logged In<span class="checkmark"></span></label>
</div>
<div method="post" class="form-group">
  <input type="hidden" name ="signUp" value="0">
  <input class="btn btn-success" type="submit" name ="submit"value = "Log In!"id="submitButtonForm">
</div>
<p id="text" ><a class="toggleForms">Sign Up</a></p>
</form>


</div>

<!-- FLOATING BUTTON -->
<a class="btn btn-primary" href="index.php" id="floatButton"><i class="fas fa-home" id="homeSymbol"></i></a>
<!--. FLOATING BUTTON -->
<!--JS LIBRARIES-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--.JS LIBRARIES-->

<!-- JavaScript Modal -->
<script type="text/javascript">

$(".toggleForms").click (function(){

  $("#signUpForm").toggle();
  $("#logInForm").toggle();

});

// STUDENT FORM APPEAR WITH CHECKBOX CHECKED
function appearStudentForm() {
  // Get the checkbox
  var checkBox = document.getElementById("checkBoxStudent");
  // Get the form
  var formOfStudent = document.getElementById("studentForm");

  // If the checkbox is checked, display the form
  if (checkBox.checked == true){
    studentForm.style.display = "block";
  } else {
    studentForm.style.display = "none";
  }
}

// TUTOR FORM APPEAR WITH CHECKBOX CHECKED
function appearTutorForm() {
  // Get the checkbox
  var checkBox = document.getElementById("checkBoxTutor");
  // Get the form
  var tutorForm = document.getElementById("tutorForm");

  // If the checkbox is checked, display the form
  if (checkBox.checked == true){
    tutorForm.style.display = "block";
  } else {
    tutorForm.style.display = "none";
  }
}

</script>
<!-- .JavaScript Modal -->


</body>
</html>
