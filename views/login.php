<?php
$title = "My Homework Manager Login";
$button_action = 'action="views/signup.php"';
$header_button = 'Sign up';
$b = NULL;
include('header.php');
$message = filter_input(INPUT_GET, 'message');
echo "<p class=\"centered\">$message</p>";
?>

<div class="formcontainer">
  <form  action="index.php" method="POST" onsubmit="return validate();">

    <div class="form_header">
      <h1 id="formheader">USER LOGIN</h1>
    </div>

    <?php if(isset($error)) echo $error; ?>

    <div class="input_container">
    <div class="row">
      <div class="col-25">
        <label for="email">Email*</label>
      </div>
      <div class="col-75" oninput="clear_login();">      
        <input value="<?php echo filter_input(INPUT_POST, 'mail'); echo filter_input(INPUT_GET, 'email'); ?>"class="input" type="text" id="email" name="mail" placeholder="Enter email.." />
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="password">Password*</label>
      </div>
      <div class="col-75" oninput="clear_login();">      
        <input class="input" type="password" id="password" name="pwd" placeholder="Enter password.." />
      </div>
    </div>

    <p id="req">* = Required fields</p>

    <div class="row">
      <input type="submit" name="login-submit" value="Login" />
    </div>

  </div>
  </form>
</div>
      <p class="centered">Need an account? <a class="links" href="views/signup.php">Sign up here</a></p>

</div>
</body>
</html>