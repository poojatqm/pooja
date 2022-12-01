
<?php 
//  session_start();

$myfile = fopen("upload/formdata.txt", "a");


$txt = $_GET['name'];
$break = "\n";
fwrite($myfile, $txt);
fwrite($myfile, $break);

fclose($myfile);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <div class = 'container mt-5'>
  <form name = 'myform' method = 'GET' action = '#'>
    
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name = 'name' placeholder="Enter Name"><br>
  
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name = 'age' placeholder="Enter Age"><br>

    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="number" name = 'phone' placeholder="Enter Phone Number"><br>

    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name = 'address' placeholder="Enter Address"><br>
 
    <button type="submit" class="btn btn-primary" value = 'submit'>Login</button>
   
</form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>