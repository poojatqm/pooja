
<?php 
if (isset($_POST['submit'])) {
    $target_path = "upload/";  
    $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);  
    $filename = end(explode('/',$target_path));
    // $imageFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
    // echo  $imageFileType;
  
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
        $_POST['name'] = $filename;
    } else if ($_POST['name'] == ''){
        $fileErr = 'File is Empty';
    }
     
   
 }
  
 
 ?>
 
 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <title>form</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script>

    // $(document).ready(function(){
    //     $("#btn1").click(function(){
    
    //         if($.trim($('.name').val()) == ''){
    //           alert('Input can not be left blank');
    
    //         } else {
    //           count--;
    //         }
    //     });
    //   });
    
      </script>
    </head>
   <body>
 
   <div class = 'container mt-5'>
   <form name = 'myform' method = 'POST' action = '#' enctype ='multipart/form-data'>

     <label for="name">Name</label>
     <input type="text" class="form-control file2" id="name" name = 'name' placeholder = "Enter name">
     <p id = 'nameErr'></p>
     <br>
   
     Upload File:
     <input type="file" class="form-control" id="file" name = 'fileToUpload'>
     <p><?php echo $fileErr ?></p>
     <p><?php echo $_POST['name'] ?></p>
     <br>
 
     <button type="submit" class="btn btn-primary" id = 'btn1' value = 'submit' name ='submit'>Submit</button>
    
 </form>
 </div>
 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
 </html>