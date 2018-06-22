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
<link href="CSS/CoreCSS/CoreCSS.min.css" rel="stylesheet">
<link href="CSS/MainPageCSS/MainPageCSS.min.css" rel="stylesheet">
<link href="CSS/MainPageCSS/grid.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

<!--Google Font -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<!--Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<title>Ace Main Page</title>

</head>

<body>
<?php
session_start();

if(array_key_exists("id", $_COOKIE)){

$_SESSION['id'] = $_COOKIE['id'];
$signupMessage = "";

}

if(array_key_exists("id", $_SESSION)){
  $signupMessage .=  "<div class='container'>";
  $signupMessage .= "<br><h2 class='animated pulse'>Thank you <mark>" . $_SESSION['firstname'] . "</mark> for joining the family!<br> A confirmation email has been sent to <mark>". $_SESSION['email'] . "</mark></h2>";
  $signupMessage .= "<br><a class='btn btn-primary' id='submitButtonSignUp' href='http://gautiermarechal-com.stackstaging.com/index.php'>Back to the home page</a><br>";
  $signupMessage .= "<p><a class='btn btn-primary' id='submitButtonSignUp' href='index.php?logout=1'>Log Out</a></p>";
  $signupMessage .= "</div>";
}
else {

header("Location: formmodaludemy.php");

}

 ?>

 <div class="row"><?php echo $signupMessage ?></div>
 <style>

body{
  background: none;
  font-family: 'Ubuntu', sans-serif !important;
  background: url(joanna-kosinska-439233-unsplash.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

}
 h2{
   font-family: 'Ubuntu', sans-serif;
   color: #09335E;
   text-align: left;
   margin-top: 12%;
 }
 p{
   margin-top: 10px;
 }

 #submitButtonSignUp{
   font-family: 'Ubuntu', sans-serif;
   background-color: #0f753b;
   border-color: #0f753b;
 }
 #submitButtonSignUp:hover{
   transition:all 0.3s ease;
   -webkit-transform: scale(1.1);
   -ms-transform: scale(1.1);
   transform: scale(1.1);
   background-color: #40B5F3;
   border-color: #40B5F3;
   color: #092433;
 }

mark{
  background-color:transparent;
  color: #2FCD57;
}
 </style>
 <!--JS LIBRARIES-->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!--.JS LIBRARIES-->

 <!-- JavaScript Modal -->
 <script></script>
 <!-- .JavaScript Modal -->

 </body>
 </html>
