<?php


function delete($hwid) {
	require 'dbh.php';
	$query = "DELETE FROM todos WHERE id=?";
	$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,'i',$hwid);
	$hwid = (int)$hwid;
	mysqli_stmt_execute($stmt);
	mysqli_close($dbc);
}

function complete($hwid) {
	require 'dbh.php';
	$query = "UPDATE todos SET isdone='1' WHERE id=?";
	$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,'i',$hwid);
	$hwid = (int)$hwid;
	mysqli_stmt_execute($stmt);
	mysqli_close($dbc);
}

function incomplete($hwid) {
	require 'dbh.php';
	$query = "UPDATE todos SET isdone='0'WHERE id=?";
	$stmt = mysqli_prepare($dbc,$query);
	mysqli_stmt_bind_param($stmt,'i',$hwid);
	$hwid = (int)$hwid;
	mysqli_stmt_execute($stmt);
	mysqli_close($dbc);
	
}

?>