<?php
 
if($_SERVER['REQUEST_METHOD']=='POST'){

	include('../models/todos_db.php');	

	$hwid = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_NUMBER_INT
);

 	if(isset($_POST['submit_delete'])){
 		delete($hwid);
 		header('location: home.php?action=delete-success');
 		exit();

 	} elseif (isset($_POST['submit-complete'])) {

 		complete($hwid);
 		header('location: home.php?action=checked-complete');
 		exit();

 	}  elseif (isset($_POST['submit-incomplete'])) {
 		incomplete($hwid);
 		header('location: home.php?action=checked-incomplete');
 		exit();

 	} elseif (isset($_POST['submit-edit'])) {
 		$message = $_POST['message'];
 		$title = $_POST['title'];
 		$duedate = strtotime( $_POST['duedate'] );
 		$m = date('m', $duedate);
 		$d = date('d', $duedate);
 		$y = date('Y',$duedate);
 		$h = date('g', $duedate);
 		$min = date('i', $duedate);
 		$ampm = date('a', $duedate);
 		$edit = 'submit-edit';
 		header("location: ../add_page/add_assignments.php?message=$message&title=$title&id=$id&m=$m&d=$d&y=$y&h=$h&min=$min&ampm=$ampm&edit=$edit&hwid=$hwid");
 		exit();

 	}else header('location: home.php');
 	} else header('location: home.php');


?>