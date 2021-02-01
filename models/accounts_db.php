<?php

function get_id($email, $pwd){
	require 'dbh.php';
	$sql ="SELECT id FROM accounts WHERE email='$email' AND password='$pwd'";
  	$result = mysqli_query($dbc,$sql);
  	$result= mysqli_fetch_assoc($result);
  	$id = $result['id'];
  	return $id;
  	mysqli_close($dbc);
}

function get_fname($id){
	require 'dbh.php';
	$sql ="SELECT fname FROM accounts WHERE id='$id'";
  	$result = mysqli_query($dbc,$sql);
  	$result= mysqli_fetch_assoc($result);
  	$fname = $result['fname'];
  	return $fname;
  	mysqli_close($dbc);
}


function get_lname($id){
	require 'dbh.php';
	$sql ="SELECT lname FROM accounts WHERE id='$id'";
  	$result = mysqli_query($dbc,$sql);
  	$result= mysqli_fetch_assoc($result);
  	$lname = $result['lname'];
  	return $lname;
  	mysqli_close($dbc);
}

function get_email($id){
  require 'dbh.php';
  $sql ="SELECT email FROM accounts WHERE id='$id'";
    $result = mysqli_query($dbc,$sql);
    $result= mysqli_fetch_assoc($result);
    $email = $result['email'];
    return $email;
    mysqli_close($dbc);
}


function get_college($id){
	require 'dbh.php';
	$sql ="SELECT college FROM accounts WHERE id='$id'";
  	$result = mysqli_query($dbc,$sql);
  	$result= mysqli_fetch_assoc($result);
  	$coll = $result['college'];
  	return $coll;
  	mysqli_close($dbc);
}


function get_major($id){
	require 'dbh.php';
	$sql ="SELECT lname FROM accounts WHERE id='$id'";
  	$result = mysqli_query($dbc,$sql);
  	$result= mysqli_fetch_assoc($result);
  	$major = $result['major'];
  	return $major;
  	mysqli_close($dbc);
}


?>