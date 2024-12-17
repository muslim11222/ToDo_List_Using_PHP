<?php 
include 'database.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ToDo_List_Using_PHP</title>
  </head>
  <body>
    <h1 class="text-center my-4 py-4">ToDo List Using PHP</h1>

     <div class="w-50 m-auto">
        <form action="index.php" method="POST" autocomplete="off">
            <label>Task</label>
            <input class="form-control" type="text" name="title" placeholder="Add Task" required><br>
            <input class="btn btn-success" type="submit" name="submit" value="Add ToDo">
        </form>
     </div> 
    <br>
    <hr class="bg-dark w-50 m-auto">

     <div class="w-50 m-auto">
          <h3>Your Lists:</h3>
          <table class="table table-dark table-hover">
               <thead>
                    <tr>
                         <th scope="col">S.No</th>
                         <th scope="col">Tasks</th>
                         <th scope="col">Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         include 'database.php';
                    
                         $sql = "SELECT * FROM todo_user";
                         $result = mysqli_query($conn, $sql);

                         if($result) {
                              while($row= mysqli_fetch_array($result)) {
                                   $id = $row['id'];
                                   $title = $row['title'];
                              

                                   ?>
                                        <tr>
                                             <td><?php echo $id ?></td>
                                             <td><?php echo $title ?></td>
                                             <td>
                                                  <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm">Edit</a>
                                                  <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this task?');">Delete</a>


                                             </td>
                                        </tr>

                                   <?php

                              }
                         }
                    ?>
               </tbody>
          </table>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>