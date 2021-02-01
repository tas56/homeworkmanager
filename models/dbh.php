<?php
// live connection
$servername = "sql1.njit.edu";
$username = "tas56";
$password = "Anotha1BTD!"; 
$dbname = "tas56";

$dbc = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
  {echo "Failed to connect to MySQL: " . mysqli_connect_error();}

