<?php 
  session_start();


    $_SESSION["name"] = $_POST['name'];
    $_SESSION["age"] = $_POST['age'];
    $_SESSION["phone"] = $_POST['phone'];
    $_SESSION["address"] = $_POST['address'];
   
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

 <div class = 'container'>
  <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Phone</th>
      <th scope="col">Addresss</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td> <?php echo $_SESSION["name"] ?> </td>
      <td> <?php echo $_SESSION["age"] ?>  </td>
      <td> <?php echo $_SESSION["phone"] ?>  </td>
      <td> <?php echo $_SESSION["address"] ?>  </td>
      <td>
     <button> <a href = 'reset.php'>Destory</a></button>

      </td>
    </tr>
  </tbody>
</table>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>