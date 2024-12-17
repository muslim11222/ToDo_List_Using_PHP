<?php 

include 'database.php';

$s_id= $_GET['id'];

$sql = "SELECT * FROM todo_user WHERE id = '$s_id'";
$result = mysqli_query($conn, $sql);

$info = $result->fetch_assoc();
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
    <h1 class="text-center my-4 py-4">Update ToDo List</h1>

     <div class="w-50 m-auto">
        <form action="editaction.php" method="POST" autocomplete="off">
            <label>Task</label>
            <input class="form-control" type="text" name="title" value="<?php echo "{$info['title']}"; ?>" placeholder="Update Your Todo " required><br>
            <input type="hidden" name="id" value="<?php echo "{$info['id']}"; ?>">
            <input class="btn btn-success" type="submit" name="update" value="Update Todo">
        </form>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>