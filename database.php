<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'todo_php';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if($conn) {
     echo '' .mysqli_connect_error();
} else {
     echo 'No database connection'.mysqli_connect_error();
}

if(isset($_POST['submit'])) {
     $title = $_POST['title'];

     $sql = "INSERT INTO todo_user(title) VALUES('$title')";
     $result = mysqli_query($conn, $sql);

     if($result == true) {
          echo '';
     } else {
          echo "Error";
     }
}


?>