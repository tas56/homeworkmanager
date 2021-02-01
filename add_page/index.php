<?php
include '../models/accounts_db.php';
session_start();

if(isset($_SESSION['id'])){

if (isset($_POST['add-submit']) || isset($_POST['submit-edit'])) {

        $id = $_SESSION['id'];
        $email = get_email($id);
        $hwid = filter_input(INPUT_POST, 'hwid');

		require('../models/dbh.php');

 		$mon = filter_input(INPUT_POST, 'month');
 		$d = filter_input(INPUT_POST, 'day');
 		$y = filter_input(INPUT_POST, 'year');
 		$h = filter_input(INPUT_POST, 'hours');
 		$m = filter_input(INPUT_POST, 'mins');
 		$s = 0;
        $ampm = filter_input(INPUT_POST, 'ampm');
 		
 		$description = filter_input(INPUT_POST, 'description');
 		$assign = filter_input(INPUT_POST, 'assign');
 		$hwid = filter_input(INPUT_POST, 'hwid'); 		
 		$date = date('Y-m-d H:i:s',strtotime("$y-$mon-$d $h:$m$ampm"));

    if(isset($_POST['submit-edit'])){
        $query = "UPDATE todos SET duedate='$date', message='$description', title='$assign' WHERE id='$hwid'";
    } else $query = "INSERT INTO todos(owneremail,ownerid, createddate,duedate,message,title) VALUES ('$email','$id',NOW(),'$date','$description','$assign')";
    mysqli_query($dbc,$query);
    
 		header('Location: ../home_page/home.php');
            exit();
    }  else {
            header('Location: add_assignments.php');
            exit();
      }
}
else {
    $message = 'Log in below to access page.';
    header("Location: ../index.php?message=$message");
}


 ?>