<?php

$session    = session_id();
$time       = time();
$time_check = $time-2;     //We Have Set Time 5 Minutes
$tbl_name   = "users_status";

if($session != NULL)
{
$sql    = "SELECT * FROM $tbl_name WHERE session='$session'";
$result = mysqli_query($conn, $sql);
$count  = mysqli_num_rows($result); 

if ($count == "0") { 
  $sql1    = "INSERT INTO $tbl_name (session, time) VALUES ('$session', '$time')"; 
  $result1 = mysqli_query($conn, $sql1);
} else {
  $sql2    = "UPDATE $tbl_name SET time='$time' WHERE session = '$session'"; 
  $result2 = mysqli_query($conn, $sql2); 
}
}

?>