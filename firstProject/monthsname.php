<?php 
     $names = array(
        '1' => 'January',
        '2' => 'February',
        '3' => 'March',
        '4' => 'April',
        '5' => 'May',
        '6' => 'June',
        '7' => 'July',
        '8' => 'August',
        '9' => 'September',
        '10' => 'October',
        '11' => 'November',
        '12' => 'December'
       );

   
    foreach ($names as $key => $value) {
          echo $key . " : " .$value,"<br>";
    }
    

  
        // if ($_POST["month"] == '1'){
        //     echo "month's name is: " . $names['1'];
         
        // } else if ($_POST["month"] == '2'){
        //     echo "month's name is: " . $names['2'];
            
        // } else if ($_POST["month"] == '3'){
        //     echo "month's name is: " . $names['3'];
            
        // } else if ($_POST["month"] == '4'){
        //     echo "month's name is: " . $names['4'];
            
        // } else if ($_POST["month"] == '5'){
        //     echo "month's name is: " . $names['5'];
            
        // } else if ($_POST["month"] == '6'){
        //     echo "month's name is: " . $names['6'];
            
        // } else if ($_POST["month"] == '7'){
        //     echo "month's name is: " . $names['7'];
            
        // } else if ($_POST["month"] == '8'){
        //     echo "month's name is: " . $names['8'];
            
        // } else if ($_POST["month"] == '9'){
        //     echo "month's name is: " . $names['9'];
            
        // }  else if ($_POST["month"] == '10'){
        //     echo "month's name is: " . $names['10'];
            
        // } else if ($_POST["month"] == '11'){
        //     echo "month's name is: " . $names['11'];
            
        // } else if ($_POST["month"] == '12'){
        //     echo "month's name is: " . $names['12'];
            
        // } 
        
    
    // switch($_POST['month']) {
    //     case '1' :
    //         echo "month's name is: " . $names['1'];
    //         break;
    //     case '2' :
    //         echo "month's name is: " . $names['2'];
    //         break; 
    //     case '3' :
    //         echo "month's name is: " . $names['3'];
    //         break;  
    //     case '4' :
    //         echo "month's name is: " . $names['4'];
    //         break;  
    //     case '5' :
    //         echo "month's name is: " . $names['5'];
    //         break;  
    //     case '6' :
    //         echo "month's name is: " . $names['6'];
    //         break;  
    //     case '7' :
    //         echo "month's name is: " . $names['6'];
    //         break;  
    //     case '8' :
    //         echo "month's name is: " . $names['8'];
    //         break;  
    //     case '8' :
    //         echo "month's name is: " . $names['8'];
    //         break;  
    //     case '9' :
    //         echo "month's name is: " . $names['9'];
    //         break; 
    //     case '10' :
    //         echo "month's name is: " . $names['10'];
    //         break; 
    //     case '11' :
    //         echo "month's name is: " . $names['11'];
    //         break; 
    //     case '12' :
    //         echo "month's name is: " . $names['12'];
    //         break; 
    //     }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>month's name</title>
     <form method = 'post'>
     <br><label for = 'month'>Enter any number: </label>
     <input type = 'text' id = 'month' name = 'month'>
    </form>
  </head>
  <body>
</form>
  </body>
</html>