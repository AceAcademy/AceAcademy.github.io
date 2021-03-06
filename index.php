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
      include 'navbar.php';
?>

<!-- JUMBOTRON -->
<div class="jumbotron">
  <div class="row" id="jumbotronBody">
    <div class="col">
      <span><h5>Ace Academy</h5><hr id="lineJumbotron"></hr></span>
      <h1 class="display-4" id="mainHeadJumbotron">Ignite the passion for learning</h1>
      <p>Be part of the new tutoring experience</p>
      <p>Browse, Choose, <span id="aceWord">Ace</span></p>
      <button class="btn btn-primary animated pulse" id="jumbotronButtonT">Tutor</button>
      <button class="btn btn-primary animated pulse" id="jumbotronButtonS">Student</button>
    </div>
  </div>
</div>
<!--. JUMBOTRON// -->

<!-- WHAT IS ACE -->
<div id = "WhatIsAce">
  <div class="grid">
  <div id="whatisaceheadersection"> <h1 id="headerOfSection" class="text-center py-3">What is Ace ? </h1> </div>

    <hr id="hrSeparationHIWvsWH"></hr>
    <div class="grid__col grid__col--1-of-2" id="WIAsection1"> </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection2">
      <h2 id="WIAsectiontitle">A wide P2P tutoring platform</h2>
      <p id="WIAsectiontext">Any students who have taken a class previously can apply to become a tutor.
        This brings more tutors on the market, thus more classes offered.</p>
    </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection3">
      <h2 id="WIAsectiontitle">Market rate prices and hassle free payment</h2>
      <p id="WIAsectiontext">A tutor can choose its own pricing for a session.
        Once decided, the student pays online to Ace, and the amount is only transferred to tutor when both tutor and students submit their tutoring session minutes.</p>
    </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection4"> </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection5"> </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection6">
      <h2 id="WIAsectiontitle">Adaptive and Flexible</h2>
      <p id="WIAsectiontext">Tutors model their own session (date, time, content, method). Students pick the criteria that match with their expectations.</p>
    </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection7">
      <h2 id="WIAsectiontitle">Verified tutor profiles</h2>
      <p id="WIAsectiontext">Want to prove your excellence ? Students who had a final grade higher than A- can apply to be certified.
        A tutor will be certified once his transcript is uploaded.</p>
    </div>

    <div class="grid__col grid__col--1-of-2" id="WIAsection8"> </div>


  </div>
</div>
<!-- .WHAT IS ACE -->

<hr id="hrSeparationHIWvsWH"></hr>
<br><br>

<!-- HOW IT WORKS DIVISION -->
<div id= "howItWorks">
  <h1 id="headerOfSection" class="text-center py-3">How it works</h1>
    <div class="row">
      <!--Column Left-->
      <div class="col" id="colS">
        <div id="headerS">
          <h1 class="text-center py-5" id="headS">Student</h2>
        </div>
        <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
          <div class="col-md-4 text center">
            <i class="fas fa-book" id="processIconS"></i>
          </div>
          <div class="col-md-8">
            <h5 class="text-md-left"id="textOfBody">Choose the classes you will Ace</h5>
          </div>
        </div>
        <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
          <div class="col-md-4 text center">
            <i class="fas fa-calendar-alt" id="processIconS"></i>
          </div>
          <div class="col-md-8">
            <h5 class="text-md-left"id="textOfBody">Pick a session that matches your criterias</h5>
          </div>
        </div>
        <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
          <div class="col-md-4 text center">
            <i class="fas fa-lightbulb" id="processIconS"></i>
          </div>
          <div class="col-md-8">
            <h5 class="text-md-left"id="textOfBody">Learn</h5>
          </div>
        </div>
        <div class="text-center py-3"><button type="button" class="btn btn-primary" id="buttonS">Become a student</button></div>
    </div>
    <!--.Column Left-->
    <!--Column Right-->
    <div class="col" id="colT">
      <div id="headerT">
        <h1 class="text-center py-5" id="headT">Tutor</h2>
      </div>
      <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
        <div class="col-md-4 text center">
          <i class="fas fa-check-circle" id="processIconT"></i>
        </div>
        <div class="col-md-8">
          <h5 class="text-md-left"id="textOfBody">Choose the classes you Aced</h5>
        </div>
      </div>
      <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
        <div class="col-md-4 text center">
          <i class="fas fa-calendar-check" id="processIconT"></i>
        </div>
        <div class="col-md-8">
          <h5 class="text-md-left"id="textOfBody">Create a session at your own price</h5>
        </div>
      </div>
      <div class="row text-md-left py-4 justify-content-end align-items-center someclass">
        <div class="col-md-4 text center">
          <i class="fas fa-pencil-alt" id="processIconT"></i>
        </div>
        <div class="col-md-8">
          <h5 class="text-md-left"id="textOfBody">Teach</h5>
        </div>
      </div>
      <div class="text-center py-3"><button type="button" class="btn btn-primary"id="buttonT">Become a tutor</button></div>
  </div>
    <!--.Column Right-->
    </div>

</div>
<!--. HOW IT WORKS DIVISION -->

<hr id="hrSeparationHIWvsWH"></hr>

<!--WELCOME HUB MAINPAGE-->
<div id="welcomeHubContainer">
<div class="row" id="titleRow">
<div class="col" id="col1Head">
  <h1 class="text-center py-3" id="welcomeHubTitle">Welcome to the hub!</h1>
  <p class="text-center" id="descriptionOfHub">Description of what Ace provides outside of the app service Description of what Ace provides outside of the app service Description of what Ace provides outside of the app service Description of what Ace provides outside of the app service</p>
</div>
</div>
<div class="row" id="rowGeneral">
  <div class="col" id="col1General">
    <a href="#"id="titleDoclink"><h2 id="titleDoc" class="text-center py-3">Documents</h2></a>
    <div class="row" id="rowInsideDoc">
    <div class="col" id="colLeftDoc">
      <div class="list-group" id="listDocs">
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Past Exams</a>
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Exam Notes</a>
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Test Banks</a>
      </div>
    </div>
    <div class="col" id="colRightDoc">
    <i class="fas fa-file-alt" id="iconDocuments"></i>
    </div>
  </div>
</div>
  <div class="col" id="col2General">
    <a href="#"id="titleDoclink"><h2 id="titleDoc" class="text-center py-3">Study Tools</h2></a>
    <div class="row" id="rowInsideDoc">
    <div class="col" id="colLeftTools">
      <div class="list-group" id="listTools">
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Maths Tools</a>
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Reference Generator</a>
        <a href="#" class="list-group-item list-group-item-action" id="toolsListItem">Calculation Processes</a>
      </div>
    </div>
    <div class="col" id="colRightTools">
    <i class="fas fa-wrench" id="iconTools"></i>
    </div>
  </div>
  </div>
</div>
</div>
<!--.WELCOME HUB MAINPAGE-->

<!-- ReftoApp -->
<div id="reftoapp">
    <div class="container text-center text-md" id="reftoapptext">
      <h1>GET THE APP AND ACE THE FUTURE</h1>
      <p>Download the Ace platform and join the family ! Now available for Concordia and McGill classes</p>
    </div>

    <img src="CSS/CoreCSS/AppleStore.png" id="Astore" class="img-responsive" alt="AppleStore" href="#">
    <img src="CSS/CoreCSS/GooglePlay.png" id="Gplay" class="img-responsive" alt="GooglePlay" href="#">
</div>
<!-- .ReftoApp -->

<!--FOOTER OF THE WEPAGE-->
<footer class="footer pt-4">
      <!--Main Container of the footer that holds all the elements of the entire footer-->
      <div class="container text-center text-md-left" id="footertext">
        <!--Row Container that holds the three containers-->
        <div class="row">
          <!--First column-->
          <div class="col-md-3">
                <img src="CSS/CoreCSS/AceBlackLogo.png" class="img-responsive" alt="Responsive Image">
          </div>
          <!--/.First column-->
          <!--Second column-->
            <div class="col-md-3">
                <h5 class="text-uppercase mb-0 mt-3 font-weight-bold" id="titles">Contact</h5>
                <hr id="hrFooter">
                <ul class="list-unstyled">
                    <li>
                        <p id="footeritems"> Telephone  <i class="fas fa-phone"></i></p>
                    </li>
                    <li>
                        <a href="" id="footeritems"><p> Email <i class="fas fa-envelope"></i></p></a>
                    </li>
                    <li>
                        <a href="" id="footeritems"><p> Help <i class="fas fa-info-circle"></i></p></a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->
            <!--Third column-->
              <div class="col-md-3">
                  <h5 class="text-uppercase mb-0 mt-3 font-weight-bold"id="titles">About</h5>
                  <hr id="hrFooter">
                  <ul class="list-unstyled">
                      <li>
                          <a href="" id="footeritems"><p> Team  </p></a>
                      </li>
                      <li>
                          <a href="" id="footeritems"><p> How it works? </p></a>
                      </li>
                  </ul>
              </div>
              <!--/.Third column-->
              <!--Fourth column-->
                <div class="col-md-3">
                    <h5 class="text-uppercase mb-0 mt-3 font-weight-bold"id="titles">Find Us</h5>
                    <hr id="hrFooter">
                    <ul class="list-unstyled">
                        <li id="socialicons">
                          <a href="" id="footeritems"><i class="fab fa-facebook-f"></i></a> <a href="" id="footeritems"><i class="fab fa-instagram"></i></a> <a href="" id="footeritems"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                    <h5 class="text-uppercase mb-0 mt-3 font-weight-bold" id="titles">Language</h5>
                  <hr id="hrFooter">
                    <a href=""id="footeritems"><p>English </a>|<a href=""id="footeritems"> Français</p></a>
                </div>
                <!--/.Fourth column-->
        </div>
        <!--.Row Container that holds the three containers-->
        <!--Copyright Ace that appears at the bottom left of the page-->
        <p id="aceCertificationBottomPage" > © Ace Academy 2018 </p>
      </div>
      <!--.Main Container of the footer that holds all the elements of the entire footer-->
</footer>
<!--.FOOTER OF THE WEPAGE-->

<!-- FLOATING WINDOW -->

<!-- FLOATING BUTTON -->
<a class="btn btn-primary" href="formmodaludemy.php" id="floatButton" style="font-family: 'Ubuntu', sans-serif;"><br>Join Us</a>
<!--. FLOATING BUTTON -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content" id=modalContent>

    <div class="modal-header" id="modalHeader">
      <button type="button" class="close" data-dismiss="modal" id="closeButtonModal">&times;</button>
        <h4 class="modal-title">Join Us</h4>
    </div>

    <div class="modal-body">
      <div id="signUpForm" class="form-container" data-form-container>
        <div class="row">
          <div class="form-title" id="becomeMember">
            <h2>Become a member</h2>
          </div>
          <div id="error"><?php echo $error; ?></div>
        </div>

        <form  action="formmodaludemy.php" method="post" id="formStandard">
          <div class="form-group">
            <div class="formInput"><input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstname"></div>
            <div class="formInput"><input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastname"></div>
            <div class="formInput"><input type="email" class="form-control" id="email" placeholder="Email" name="email"></div>
            <div class="formInput"><input type="password" class="form-control" id="email" placeholder="Create a password" name="password"></div>
            <input type="hidden" name ="signUp" value="1">
          </div>

      <div class="row">
        <div class="col">
          <div class="checkboxes">
            <label class="checkBox-title" id="checkBoxLabelsModal">Student
              <input type="checkbox" id="checkBoxStudent" onclick="appearStudentForm()">
              <span class="checkmark" id="checkBoxStudentWhole"></span>
            </label>
            <label class="checkBox-title" id="checkBoxLabelsModal">Tutor
              <input type="checkbox" id="checkBoxTutor" onclick="appearTutorForm()">
              <span class="checkmark" id="checkBoxTutorWhole"></span>
            </label>
          </div>
        </div>
        <div class="col">
          <a id="loginLink" onclick="appearLogInForm()">Already a member? Log in</a><br>
          <span><p>Stay Logged In<input type="checkbox" name = "stayLoggedIn" value=1></p></span>
        </div>
      </div>
              <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
        </form>
        <hr></hr>
      </div>
      <div id="logInForm" class="form-container" data-form-container>
        <div class="row">
          <div class="form-title" id="becomeMember">
            <h2>Log In</h2>
          </div>
          <div id="error"><?php echo $error; ?></div>
        </div>

        <form action="formmodaludemy.php" method="post" id="formStandard">
          <div class="form-group">
            <div class="formInput"><input type="email" class="form-control" id="email" placeholder="Email" name="email"></div>
            <div class="formInput"><input type="password" class="form-control" id="email" placeholder="Enter your password" name="password"></div>
            <input type="hidden" name ="signUp" value="0">
          </div>
<div class="row">
          <div class="col">
          </div>
        <div class="col">
          <a id="signupLink" onclick="appearSignUpForm()" >Not a member? Sign Up</a>
          <span><p>Stay Logged In<input type="checkbox" name = "stayLoggedIn" value=1></p></span>
        </div>
      </div>
    </div>

        </form>
      </div>

      <div class="form-container" data-form-container id="formStudent">
        <div class="row">
          <div class="form-title" id="becomeStudent">
            <h2>Student</h2>
          </div>
        </div>

        <form action="modal.php" method="post" >
          <div class="form-group">
            <label for="name">Which class would you like to Ace?</label>
            <input type="text" class="form-control" id="inputClass" placeholder="Enter Class Code (Example: COMM, COMP, FINA ...)" name="classcode">
            <input type="text" class="form-control" id="inputClass" placeholder="Enter Class Number (Example: 215, 217, 308 ...)" name="classnum">
          </div>
            <button type="submit" class="btn btn-primary"id="submitButton">Submit</button>
        </form>
        <hr></hr>
      </div>

      <div  class="form-container" data-form-container id="formTutor">
        <div class="row">
          <div class="form-title" id="becomeTutor">
            <h2>Tutor</h2>
          </div>
        </div>

        <form action="modal.php" method="post" >
          <div class="form-group">
            <label for="name">Which class would you like to teach?</label>
            <input type="text" class="form-control" id="inputClass" placeholder="Enter Class Code (Example: COMM, COMP, FINA ...)" name="classcode">
            <input type="text" class="form-control" id="inputClass" placeholder="Enter Class Number (Example: 215, 217, 308 ...)" name="classnum">
          </div>
          <button type="submit" class="btn btn-primary"id="submitButton">Submit</button>
        </form>
      </div>
    </div>

    <div class="modal-footer" id="modalFooter">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  </div>
  <script>
  // LOGIN FORM APPEAR WHEN LOGIN LINK CLICKED
  function appearLogInForm() {
    // Get the form
    var logInForm = document.getElementById("logInForm");

    // If the link is clicked, display the form
    if(logInForm.style.display === "none"){
      logInForm.style.display = "block";
      signUpForm.style.display = "none";
    }
    else{
      logInForm.style.display = "none";
      signUpForm.style.display = "block";
    }
  }
  // SIGNUP FORM APPEAR WHEN SIGNUP LINK CLICKED
  function appearSignUpForm() {
    // Get the form
    var signUpForm = document.getElementById("signUpForm");

    // If the link is clicked, display the form
    if(signUpForm.style.display === "none"){
      signUpForm.style.display = "block";
      logInForm.style.display = "none";
    }
    else{
      signUpForm.style.display = "none";
      logInForm.style.display = "block";
    }
  }
  // STUDENT FORM APPEAR WITH CHECKBOX CHECKED
  function appearStudentForm() {
    // Get the checkbox
    var checkBox = document.getElementById("checkBoxStudent");
    // Get the form
    var formOfStudent = document.getElementById("formStudent");

    // If the checkbox is checked, display the form
    if (checkBox.checked == true){
      formOfStudent.style.display = "block";
    } else {
      formOfStudent.style.display = "none";
    }
  }


  // TUTOR FORM APPEAR WITH CHECKBOX CHECKED
  function appearTutorForm() {
    // Get the checkbox
    var checkBox = document.getElementById("checkBoxTutor");
    // Get the form
    var formOfTutor = document.getElementById("formTutor");

    // If the checkbox is checked, display the form
    if (checkBox.checked == true){
      formOfTutor.style.display = "block";
    } else {
      formOfTutor.style.display = "none";
    }
  }
</script>
</div>
<!--. Modal -->

<!--. FLOATING WINDOW -->

<!--JS LIBRARIES-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--.JS LIBRARIES-->




</body>
</html>
