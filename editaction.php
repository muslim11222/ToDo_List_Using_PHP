<?php 

     include 'database.php';

     if(isset($_POST['update'])) {
          $s_id = $_POST['id'];
          $title = $_POST['title'];
     }

     $sql ="UPDATE todo_user SET title = '$title' WHERE id = '$s_id'";
     $result = mysqli_query($conn, $sql);

     if($result == true) {
          header("location:index.php");
     } else {
          echo 'data not updated';
     }


?>