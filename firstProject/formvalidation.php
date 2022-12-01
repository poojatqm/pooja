<?php 
  
 
 if (isset($_POST['submit'])) {
  $target_path = 'upload/';
  $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);  
  $imageFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path) && ($_FILES["fileToUpload"]["size"] < 1024) && ($imageFileType == "png")) { 
       $file =  "File uploaded successfully!";  
    } else {  
        $fileErr = "Sorry, file not uploaded, please try again!";  
     }  
   if (empty($_POST["name"])) {
      $nameErr = "Name is required";
        
   } else if (is_numeric($_POST["name"])){
      $nameErr = "Please enter string"; 
   } else {
      $name = $_POST['name'];
   }

   if (empty($_POST["dob"])) {
      $dobErr = "DOB is required";
   } else {
      $dob = $_POST['dob'];
   }

  if (empty($_POST["address"])) {
       $addressErr = "address is required";
  } else {
       $address = $_POST['address'];
  }
 }

?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>form</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

   <div class='container mt-5'>
      <form name='myform' method='POST' action='#' enctype='multipart/form-data'>

         <label for="name">Name</label>
         <input type="text" class="form-control" id="name" name='name' placeholder="Enter Name">
         <p class="text-danger">
            <?php echo $nameErr ?>
         <p>
            <br>

            <label for="dob">DOB</label>
            <input type="date" class="form-control" id="dob" name='dob' placeholder="Enter Date of Birth">
         <p class="text-danger">
            <?php echo $dobErr ?>
         </p>
         <br>


         Upload File:
         <input type="file" class="form-control" id="file" name='fileToUpload' accept='image/png'>
         <p class="text-success">
            <?php echo $file ?>
         </p>
         <p class="text-danger">
            <?php echo $fileErr ?>
         </p>
         <br>

         <div>Hobbies</div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="playing" checked>
            <label class="form-check-label" for="playing">
               playing
            </label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="reading">
            <label class="form-check-label" for="reading">
               reading book
            </label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="singing">
            <label class="form-check-label" for="singing">
               singing
            </label>
         </div><br><br>


         <label for="address">Address</label>
         <input type="text" class="form-control address" id="address" name='address' placeholder="Enter Address">
         <p class="text-danger">
            <?php echo $addressErr ?>
         </p>
         <br>


         <div>Gender</div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">Male</label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="female">Female</label>
         </div><br><br>

         <button type="submit" class="btn btn-primary" value='submit' name='submit'>Submit</button>

      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
</body>

</html>