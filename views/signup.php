<?php
$title = "Create Account: My Homework Manager";
$button_action = 'action="../index.php"';
$header_button = 'Login';
$b="..\\";
include('header.php');
// include('..\/models/registration.php');
?>

<div class="formcontainer">
  <form  action="..\/models/registration.php" method="POST" onsubmit="return validation();">

    <div class="form_header">
      <h1 id="formheader">CREATE AN ACCOUNT</h1>
    </div>

    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
    <div class="input_container">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name*</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input value="<?php if(isset($_GET['f_name'])) echo $_GET['f_name']; ?>" class="input" type="text" id="fname" name="f_name" placeholder="Enter first name.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name*</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input value="<?php if(isset($_GET['l_name'])) echo $_GET['l_name']; ?>" class="input" type="text" id="lname" name="l_name" placeholder="Enter last name.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="college">College</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input value="<?php if(isset($_GET['coll'])) echo $_GET['coll']; ?>" class="input" type="text" id="college" name="coll" placeholder="Enter college.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="major">Major</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input value="<?php if(isset($_GET['c_major'])) echo $_GET['c_major']; ?>" class="input" type="text" id="major" name="c_major" placeholder="Enter major.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="email">Email*</label>
      </div>

      <div class="col-75" oninput="clearborder();">      
        <input value="<?php if(isset($_GET['e_mail'])) echo $_GET['e_mail']; ?>" class="input" type="text" id="email" name="e_mail" placeholder="Enter email.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="password">Password*</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input class="input" type="password" id="password" name="pword" placeholder="Enter password.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="re_password">Confirm Password*</label>
      </div>
      <div class="col-75" oninput="clearborder();">      
        <input class="input" type="password" id="re_password" name="re_pword" placeholder="Confirm password.." />
      </div>
    </div>

    <p id="req">* = Required fields</p>

    <div class="row">
      <input type="submit" name="signup-submit" value="Sign Up" />
    </div>

  </div>
  </form>
</div>

      <p class="centered">Already have an account? <a class="links" href="../index.php">Login here</a></p>

</div>
</body>
</html>