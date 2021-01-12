<?php
//connect to Mysql
$connect=mysqli_connect("localhost","root","","shoutit");

//test connection
if(mysqli_connect_errno()){


echo "Failed to connect to mysql".mysqli_connect_error();
}