<?php
$title = "My Homework Manager";
$button_action = 'action="../models/logout.php"';
$header_button = 'Log out';
$b = '../';
include('../views/header.php');
include('../models/accounts_db.php');
session_start();

// checks if user is logged in, sends back to login page otherwise
if(isset($_SESSION['id'])){

 	require('../models/dbh.php');
 	
 	$id = $_SESSION['id'];
 	$fname = get_fname($id);
 	$lname = get_lname($id); 	

 	echo "<p>Welcome, <strong>$fname $lname</strong></p>";

 	// to do table
 	$table_name = "To Do Assignments";
 	$add_button = '<form action="../add_page/index.php" method="POST"><input type="submit" value="+ Add a new assignment" name="submit-new"></form>';
	$add_button_2 = '<tr><td colspan="7"><form action="../add_page/index.php" method="POST"><input type="submit" value="+ Add a new assignment" name="submit-new"></form></td></tr>';
	 $no_assignment = "<p>No homework found, use button below to add an assignment</p>";
	 $complete = 'complete';
	 $submit_complete = 'submit-complete';
	 $isdone = 0;
	 include('tables.php');

	 // complete table
	 $table_name = "Completed Assignments";
	 $add_button = NULL;
	 $add_button_2 = NULL;
	 $no_assignment = "<p>No completed assignments</p>";
	 $complete = 'incomplete';
	 $submit_complete = 'submit-incomplete';
	 $isdone = 1;
	 include('tables.php');
} // end login check
else {
	$message = 'Log in below to access page.';
	header("Location: ../index.php?message=$message");
}

?>

</div>
</body>
</html>