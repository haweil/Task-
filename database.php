<?php

$host_name = 'localhost:3307';
$db_user = 'root';
$db_pass = '';
$db_name = 'haweil_74';

$con = mysqli_connect($host_name,$db_user,$db_pass,$db_name);
if ($con->connect_error)
{
   die ('connection failed'.$con->connect_error);
}
echo 'connected';