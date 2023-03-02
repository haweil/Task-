<?php include './database.php';
if (isset($_POST['additem'])) {

  $task = $_POST['task'];
  $description = $_POST['description'];

  $insert = "INSERT INTO dolist (ID, task, description) VALUES (NULL,'$task','$description')";
  $do = mysqli_query($con, $insert);
}

$select = "SELECT * FROM dolist ";
$sel = mysqli_query($con, $select);
while ($row =  mysqli_fetch_assoc($sel)) {
  $data[] = $row;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Todo list </title>
  </head>
  <body>
      <div class="heading">
          <h1>Todo list</h1>
      </div>
      <div class="form">
        <form method="POST">
        <div class="form-group">
          <label for="title">Task</label>
          <input type="text" class="form-control" name="task" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="additem">Add item</button>
          </form>
        </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Task</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
          </tr>
          <?php
          foreach($sel as $item) :
           ?>
          <tr>
            <td><?=$item["ID"];?></td>
            <td><?=$item["Task"];?></td>
            <td><?=$item["Description"];?></td>
          </tr>
          <?php endforeach; ?>
        </thead>
        </table>
  </body>
</html>
