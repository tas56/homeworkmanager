<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

  require 'models/dbh.php';

  if(isset($_POST['mail'], $_POST['pwd'])) {

    $email = mysqli_real_escape_string($dbc,trim($_POST['mail']));
    $pwd = mysqli_real_escape_string($dbc,trim($_POST['pwd']));
    $sql ="SELECT * FROM accounts WHERE email='$email' AND password='$pwd'";
    $result = mysqli_query($dbc,$sql);
    $rows= mysqli_num_rows($result);
    if($rows==1)
    {
        include 'models/accounts_db.php';
        session_start();
        $id = get_id($email,$pwd);
        $_SESSION['id'] = $id;

      header("Location: home_page/index.php");    
    } else {
        $error = "<p class=\"error\">Invalid password/email combination.</p>";
        include 'views/login.php';
    }
} 

} else include 'views/login.php';

  ?>