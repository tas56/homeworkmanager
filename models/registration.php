<?php

// checks if user accesed through submit button
if(isset($_POST['signup-submit'])) {

	// Sets up database connection
	require 'dbh.php';

	// gets information from user, puts into variables
	$fname = filter_input(INPUT_POST, 'f_name');
	$lname = filter_input(INPUT_POST, 'l_name');
	$college = filter_input(INPUT_POST, 'coll');
	$major = filter_input(INPUT_POST, 'c_major');
	$email = filter_input(INPUT_POST, 'e_mail');
	$password = filter_input(INPUT_POST, 'pword');


	// checks if username already exists
	$sql = "SELECT email FROM accounts WHERE email=".'\''.$email.'\'';
	// Executes query, produces error if query is invalid
	$result = mysqli_query($dbc,$sql);
		if(!$result) {
		print "Error: " . mysqli_error();
		exit();
		}
	$rows = mysqli_num_rows($result);
	if ($rows > 0) 
	{	
		$error = "<p class=\"error\">Username already taken.</p>";
     header('Location: ../views/signup.php?f_name='.$fname.'&l_name='.$lname.'&coll='.$college.'&c_major='.$major.'&e_mail='.$email.'&error='.$error);
	}
	// puts into database
	else {
		$sql = "INSERT INTO accounts(email, fname, lname, college, major, password) VALUES ('$email','$fname','$lname','$college','$major','$password')";
		if(mysqli_query($dbc,$sql)){      		
       		
       		$welcome = "Welcome, <strong>$fname $lname.</strong> Your account has been created, login below.";
       		header('Location: ../index.php?message='.$welcome.'&email='.$email);
            exit();

		} else {
		print "Error: " . mysqli_error();
		exit();
		}
	}

}
