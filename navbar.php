

<!--NAVBAR OF THE MAINPAGE-->
<nav class="navbar navbar-expand-lg fixed-top">

  <!-- Brand/logo -->
  <a class="navbar-brand" href="icon">
    <img src="CSS/CoreCSS/AceLogo.png" style="width:100px;">
  </a>

  <!-- Links -->
  <div class="container-fluid">

  <ul class="nav navbar-nav navbar-left"> <!-- Left content of the navbar -->
    <li class="nav-item">
      <button type="button" class="btn btn-primary" id="navbarbuttonT"> Become a tutor </button>
    </li>

    <li class="nav-item">
      <button type="button" class="btn btn-primary"id="navbarbuttonS"> Become a student </button>
    </li>
  </ul>

  <ul class="nav navbar-nav navbar-right"> <!-- Right content of the navbar -->
    <li class="nav-item">
        <a href="formmodaludemy.php" class="nav-link" id="rightnavbarlink">
          <?php
          session_start();
          if(array_key_exists("firstname", $_SESSION)){
            echo "<i class='far fa-user'></i>"."    ".$_SESSION['firstname'];
        }
        else{
          echo "Log In | Sign Up";
        } ?></a>
    </li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="rightnavbarlink" data-toggle="dropdown"> Study Features </a>
        <div class="text-uppercase dropdown-menu">
          <a href="#" class="dropdown-item" id="navbarbutton">Documents</a>
          <a href="#" class="dropdown-item" id="navbarbutton">Tools</a>
        </div>
    </li>


    <li class="nav-item">
        <a href="#" class="nav-link" id="rightnavbarlink">About Us</a>
    </li>
    <?php session_start();
    if(array_key_exists("id", $_SESSION)){
      echo "<li class='nav-item'>
          <a href='index.php?logout=1' class='nav-link' id='rightnavbarlink'>Log Out</a>
          </li>";
      session_destroy();
  }
     ?>
  </ul>

</nav>
