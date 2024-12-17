<?php 

     include 'database.php';


     if(isset($_GET['id'])) {
          $s_id = $_GET['id'];
     }

     $sql = "DELETE FROM todo_user WHERE id = '$s_id'";
     $result = mysqli_query($conn, $sql);

     if($result == true) {
          header("location:index.php");
          exit();
     } else {
          echo mysqli_connect_error();
     }

?>