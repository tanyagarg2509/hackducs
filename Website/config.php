<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bookbud";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "connection failed";
}