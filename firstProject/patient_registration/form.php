<?php 

if (isset($_POST['submit'])) {
  $title = $_POST['flexRadioDefault'];
  $maritalstatus = $_POST['flexRadioDefault1'];
  $name = trim($_POST["name"]);
  $social = trim($_POST["social"]); 
  $address = trim($_POST["address"]); 
  $date = trim($_POST["date"]); 
  $city = trim($_POST["city"]); 
  $state = trim($_POST["state"]); 
  $reffered = trim($_POST["reffered"]); 
  $zip = trim($_POST["zip"]);
  $occupation = trim($_POST["occupation"]); 
  $cellphone1 = trim($_POST["cellphone1"]); 
  $cellphone2 = trim($_POST["cellphone2"]);
  $homephone = trim($_POST["homephone"]); 
  $employername = trim($_POST["employername"]); 
  $parent = trim($_POST["parent"]); 
  $mobilenumber = trim($_POST["mobilenumber"]); 
  $employeremail = trim($_POST["employeremail"]); 

  $conditions = trim($_POST["conditions"]); 
  $medications = trim($_POST["medications"]); 
  $smoke  = $_POST["flexRadioDefault2"]; 
  $familydoctor = trim($_POST["familydoctor"]); 
  $allergies = trim($_POST["allergies"]); 
  $examdate = trim($_POST["examdate"]); 
  $eyesdoctor = trim($_POST["eyesdoctor"]); 
  $contactlenses  = ($_POST["flexRadioDefault3"]); 

  $insurancename1 = trim($_POST["insurancename1"]); 
  $insurancename2 = trim($_POST["insurancename2"]); 
  $employer1 = trim($_POST["employer1"]); 
  $employer2 = trim($_POST["employer2"]); 
  $insuredname1 = trim($_POST["insuredname1"]); 
  $insuredname2 = trim($_POST["insuredname2"]); 
  $birthdate1 = trim($_POST["birthdate2"]); 
  $birthdate2 = trim($_POST["birthdate1"]);
  $insuredss1 = trim($_POST["insuredss1"]); 
  $insuredss2 = trim($_POST["insuredss2"]); 
 
  $target_path = "./upload/";
  $target_path = $target_path.basename($_FILES['fileToUpload']['name']);  
  
  $imageFileType = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
  if(($imageFileType == "png" || $imageFileType == "jpg" ||  $imageFileType == "jpeg") && ($_FILES["fileToUpload"]["size"] < 50000)){
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path)) { 
       $file1 =  "File uploaded successfully!";  
     } else {  
       $fileErr = "Sorry, file not uploaded, please try again!";  
     }  
  } else{
      $fileErr = "Sorry, please upload jpg, png or jpeg format.";  
  }

//   if ( $name == '' || is_numeric($name)) {
//     if ($name == '') {
//       $nameErr = "name is required"; 
//      } else if (is_numeric($name)) {
//       $nameErr = "please enter a string"; 
//      } 
//     }  else {
//        $nameErr = "";
//     }

//   if ($social == '') {
//     $socialErr = "this field is required"; 
//   } else {
//     $socialErr = ""; 
//   }

//   if ($address == '') {
//     $addressErr = "address is required"; 
//   } else {
//     $addressErr = ""; 
//   }
  
//   if ($date == '') {
//     $dateErr = "date is required"; 
//   } else {
//     $dateErr = ""; 
//   }

//    if ($city == '') {
//     $cityErr = "city is required"; 
//   } else {
//     $cityErr = ""; 
//   }

//   if ($parent == '') {
//     $parentErr = "this field is required"; 
//   } else {
//     $parentErr = ""; 
//   }
  

//   if ($state == '') {
//     $stateErr = "state is required"; 
//   } else {
//     $stateErr = ""; 
//   }

//   if ($reffered == '') {
//     $refferedErr = "this field is required"; 
//   } else {
//     $refferedErr = ""; 
//   }

//   if ($zip  == '') {
//     $zipErr = "zip is required"; 
//   } else {
//     $zipErr = ""; 
//   }

//   if ($occupation == '') {
//     $occupationErr = "this field is required"; 
//   } else {
//     $occupationErr = ""; 
//   }
  

// if ($cellphone1 == '' ||  strlen((string)$cellphone1) < 10 || strlen((string)$cellphone1) > 10 || is_string($cellphone1)) {
//   if ($cellphone1 == '') {
//       $cellphone1Err = "cell phone is required"; 
//   } else if ( strlen((string)$cellphone1) < 10 || strlen((string)$cellphone1) > 10) {
//       $cellphone1Err = "please enter 10 digits";
//   } else if (is_string($cellphone1)) {
//     $cellphone1Err = "please enter number";
//   }
// } else {
//   $cellphone1Err = ""; 
// }


// if ($cellphone2 == '' ||  strlen((string)$cellphone2) < 10 || strlen((string)$cellphone2) > 10 || is_string($cellphone2)) {
//   if ($cellphone2 == '') {
//     $cellphone2Err = "cellphone is required"; 
//   } else if ( strlen((string)$cellphone2) < 10 || strlen((string)$cellphone2) > 10) {
//     $cellphone2Err = "please enter 10 digits";
//   } else if (is_string($cellphone2)) {
//     $cellphone2Err = "please enter number";
//   }
// } else {
//   $cellphone2Err = ""; 
// }



// if ($homephone == '' ||  strlen((string)$homephone) < 10 || strlen((string)$homephone) > 10 || is_string($homephone)) {
//   if ($homephone == '') {
//     $homephoneErr = "home phone is required"; 
//   } else if ( strlen((string)$homephone) < 10 || strlen((string)$homephone) > 10) {
//     $homephoneErr = "please enter 10 digits";
//   } else if (is_string($homephone)) {
//     $homephoneErr = "please enter number";
//   }
// } else {
//   $homephoneErr = ""; 
// }

  
  
  // if ($employername  == '') {
  //   $employernameErr = "employer name is required"; 
  // } else {
  //   $employernameErr = ""; 
  // }

  // if ($mobilenumber == '' ||  strlen((string)$mobilenumber) < 10 || strlen((string)$mobilenumber) > 10 || is_string($mobilenumber)) {
  //   if ($mobilenumber == '') {
  //     $mobilenumberErr = "mobile number is required"; 
  //   } else if ( strlen((string)$mobilenumber) < 10 || strlen((string)$mobilenumber) > 10) {
  //     $mobilenumberErr = "please enter 10 digits";
  //   } else if (is_string($homephone)) {
  //     $mobilenumberErr = "please enter number";
  //   }
  // } else {
  //   $mobilenumberErr = ""; 
  // }
  
  // function email_validation($ememail) {
  //   return (!preg_match(
  //   "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $ememail))
  //       ? FALSE : TRUE;
  // }

  // if(!email_validation($employeremail)) {
  //   $employeremailErr = "Invalid email address.";
  //  } 
  //  else {
  //   $employeremailErr = "";
  //  }
  
// ////////second form validation
//   if ($conditions  == '') {
//     $conditionsErr = "this field is required"; 
//   } else {
//     $conditionsErr = ""; 
//   }

//   if ( $medications == '') {
//      $medicationsErr = "this field is required"; 
//   } else {
//      $medicationsErr = ""; 
//   }
  
  
//   if ( $familydoctor  == '') {
//      $familydoctorErr = "this field is required"; 
//   } else {
//      $familydoctorErr = ""; 
//   }

//   if ($allergies  == '') {
//     $allergiesErr = "this field is required"; 
//   } else {
//     $allergiesErr = ""; 
//   }

//   if ($examdate == '') {
//      $examdateErr = "this field is required"; 
//   } else {
//      $examdateErr = ""; 
//   }
  
  
//   if ($eyesdoctor  == '') {
//      $eyesdoctorErr = "this field is required"; 
//   } else {
//      $eyesdoctorErr = ""; 
//   }

// /////////third form validation
// if ($insurancename1 == '') {
//     $insurancename1Err = "this field is required"; 
//  } else {
//     $insurancename1Err = ""; 
//  }
 
 
//  if ($insurancename2   == '') {
//     $insurancename2Err  = "this field is required"; 
//  } else {
//     $insurancename2Err = ""; 
//  }
 
//  if ( $employer1 == '') {
//    $employer1Err = "this field is required"; 
// } else {
//    $employer1Err = ""; 
// }


// if ( $employer2   == '') {
//    $employer2Err  = "this field is required"; 
// } else {
//    $employer2Err = ""; 
// }

// if ($insuredname1 == '') {
//   $insuredname1Err = "this field is required"; 
// } else {
//   $insuredname1Err  = ""; 
// }


// if ($insuredname2  == '') {
//   $insuredname2Err  = "this field is required"; 
// } else {
//   $insuredname2Err = ""; 
// }

// if ($birthdate1 == '') {
//   $birthdate1Err = "this field is required"; 
// } else {
//   $birthdate1Err  = ""; 
// }


// if ($birthdate2  == '') {
//   $birthdate2Err  = "this field is required"; 
// } else {
//   $birthdate2Err = ""; 
// }

// if ($insuredss1 == '') {
//   $insuredss1Err = "this field is required"; 
// } else {
//   $insuredss1Err  = ""; 
// }


// if ($insuredss2  == '') {
//   $insuredss2Err  = "this field is required"; 
// } else {
//   $insuredss2Err = ""; 
// }



}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Patient Registration Form</title>
  <!-- Web Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" crossorigin="anonymous"
    rel="stylesheet">
  <!-- Template Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="assets/js/jquery.js"></script> 
  
</head>

<body>
  <form name="myform" method="post" id="myform" enctype="multipart/form-data">
    <div class="div2">
      <div class="div1"> Patient Registration form</div>
    </div>

    <div class="row1 container">

      <!-- start first form -->
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              Title <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="dr" value="Dr" checked>
                <label class="form-check-label" for="dr">
                  Dr.
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="mr" value="Mr">
                <label class="form-check-label" for="mr">
                  Mr.
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="ms" value="Ms">
                <label class="form-check-label" for="ms">
                  Ms.
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="mrs" value="Mrs">
                <label class="form-check-label" for="mrs">
                  Mrs.
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="miss" value="Miss">
                <label class="form-check-label" for="miss">
                  Miss.
                </label>
              </span>
              <p id="select1" class="showerror"> </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1  borderleft">Marital Status <span class = "text-danger">*</span></div> 
            <div class="col-8 col8 padding1">
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="single" value="single"
                  checked>
                <label class="form-check-label" for="single">
                  Single. 
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="married" value="married">
                <label class="form-check-label" for="married">
                  Married.
                </label>
              </span>
              <span class="span1">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="windowed" vlaue="windowed">
                <label class="form-check-label" for="windowed">
                  Windowed.
                </label>
              </span>
              <p id="select2" class="showerror"> </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="name">Name</label> <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="name" id="name" class="row1color blurname">
              <div id="name1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $nameErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"> <label for="social">Social Security</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="social" id="social" class="row1color">
              <div id="social1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $socialErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="address">Address</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="address" id="address" class="row1color">
              <div id="address1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $addressErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="date">Birth Date</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8 padding1">
              <input type="date" name="date" id="date" class="row1color datewidth">
              <div id="date1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $dateErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label class="form-check-label" for="city">City</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="city" id="city" class="row1color">
              <div id="city1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $cityErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="parent">Parent/Guardian</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="parent" id="parent" class="row1color">
              <div id="parent1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $parentErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="state">State</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="state" id="state" class="row1color">
              <div id="state1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $stateErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="reffered">Referred By</label>
            <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="reffered" id="reffered" class="row1color">
              <div id="reffered1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $refferedErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="zip">Zip</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="int" name="zip" id="zip" class="row1color">
              <div id="zip1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $zipErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="occupation">Occupation</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="occupation" id="occupation" class="row1color">
              <div id="occupation1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $occupationErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>


      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="cell-phone">Cell Phone</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="int" name="cellphone1" id="cell-phone" class="row1color">
              <div id="cellphone1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $cellphone1Err ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="cell-phone2">Cell Phone</label>
            <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="int" name="cellphone2" id="cell-phone2" class="row1color">
              <div id="cellphone2" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $cellphone2Err ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="home-phone">Home Phone</label>
              <span class = "text-danger">*</span>
             </div>
            <div class="col-8 col8 padding1">
              <input type="int" name="homephone" id="home-phone" class="row1color">
              <div id="homenumber" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $homephoneErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 borderleft text-style"><label for="employername">Employer's Name</label>
            <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="text" name="employername" id="employername" class="row1color">
              <div id="employername1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $employernameErr ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1 text-style">
              <label for="mobilenumber">Mobile Number</label>
              <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="int" name="mobilenumber" id="mobilenumber" class="row1color">
              <div id="mobilenumber1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $mobilenumberErr ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 padding1  borderleft text-style"><label for="employeremail">Employer's Email</label>
            <span class = "text-danger">*</span>
            </div>
            <div class="col-8 col8 padding1">
              <input type="email" name="employeremail" id="employeremail" class="row1color">
              <div id="employeremail1" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $employeremailErr ?>
             </p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end first form -->

    <!-- second form start  -->
    <div class="row2 container">
      <div class="row">
        <div class="col-5 coll4 text-style1">
          <label for="conditions">Other Condition(s) <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <input type="text" name="conditions" id="conditions" class="row2color" name="conditions">
          <div id="conditions1" class="showerror"></div>
          <p class="text-danger">
                 <?php echo $conditionsErr ?>
             </p>
        </div>
      </div>

      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="medications">Medications are you presently <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <input type="text" name="medications" id="medications" class="row2color">
          <div id="medications1" class="showerror"></div>
          <p class="text-danger">
                 <?php echo $medicationsErr ?>
             </p>
        </div>
      </div>

      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="familydoctor">Name of family doctor <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <input type="text" name="familydoctor" id="familydoctor" class="row2color">
          <div id="familydoctor1" class="showerror"></div>
          <p class="text-danger">
                 <?php echo $familydoctorErr ?>
             </p>
        </div>
      </div>


      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="smoke">Do you smoke? <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <div class="spanstyle">
            <span class="span1">
              <input class="form-check-input" type="radio" name="flexRadioDefault2" id="smokeyes" value="Yes" checked>
              <label class="form-check-label" for="smokeyes">
                Yes
              </label>
            </span>
            <span class="span1">
              <input class="form-check-input" type="radio" name="flexRadioDefault2" id="smokeno" value="No">
              <label class="form-check-label" for="smokeno">
                No
              </label>
            </span>
            <p id="select3" class="showerror"></p>
          </div>
        </div>
      </div>

      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="allergies">List any allergies to medications <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <input type="text" name="allergies" id="allergies" class="row2color">
          <div id="allergies1" class="showerror"></div>
          <p class="text-danger">
              <?php echo $allergiesErr ?>
          </p>
        </div>
      </div>

      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="examdate">Date of last exam <span class = "text-danger">*</span></label>
        </div>
        <div class="col-7 col8">
          <input type="date" name="examdate" id="examdate" class="row2color">
          <div id="examdate1" class="showerror"></div>
          <p class="text-danger">
            <?php echo $examdateErr ?>
         </p>
        </div>
      </div>
      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="glasses">Did you ever where glasses or contact lenses</label>
          <span class = "text-danger">*</span>
        </div>
        <div class="col-7 col8">
          <div class="spanstyle">
            <span class="span1">
              <input class="form-check-input" type="radio" name="flexRadioDefault3" id="yes" value="Yes" checked>
              <label class="form-check-label" for="yes">
                Yes
              </label>
            </span>
            <span class="span1">
              <input class="form-check-input" type="radio" name="flexRadioDefault3" id="no" value="No How old are they">
              <label class="form-check-label" for="no">
                No How old are they 
             
            </span>
            <p id="select4" class="showerror"></p>
          </div>
        </div>
      </div>
      <div class="row bordertop">
        <div class="col-5 coll4 text-style1">
          <label for="eye">Family history of eye disorders</label>
        </div>
        <div class="col-7 col8">
          <input type="text" name="eyesdoctor" id="eye" class="row2color">
          <div id="eye1" class="showerror"></div>
          <p class="text-danger">
              <?php echo $eyesdoctorErr ?>
          </p>
        </div>
      </div>
    </div>
    <!-- second form start -->

    <!-- third form start -->
    <div class="row3 container">
      <div class="row">
        <div class="col-6 coll4 text-style1">Primary Insurance</div>
        <div class="col-6 coll4 text-style1">Secondary Insurance</div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1"><label for="insurancename1">Insurance Name</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insurancename1" id="insurancename1" class="row3color">
              <div id="insurancename11" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $insurancename1Err ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1 borderleft"><label for="insurancename2">Insurance Name</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insurancename2" id="insurancename2" class="row3color">
              <div id="insurancename22" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $insurancename2Err ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1"><label for="employer1">Employer</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="employer1" id="employer1" class="row3color">
              <div id="employer11" class="showerror"></div>

              <p class="text-danger">
                 <?php echo $employer1Err ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 borderleft text-style1"><label for="employer2">Employer</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="employer2" id="employer2" class="row3color">
              <div id="employer22" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $employer2Err ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1"><label for="insuredname1">Insured's Name</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insuredname1" id="insuredname1" class="row3color">
              <div id="insuredname11" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $insuredname1Err ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 borderleft text-style1"><label for="insuredname2">Insured's Name</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insuredname2" id="insuredname2" class="row3color">
              <div id="insuredname22" class="showerror"></div>
              <p class="text-danger">
                  <?php echo $insuredname2Err ?>
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1"><label for="birthdate1">Birth Date</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="date" name="birthdate1" id="birthdate1" class="row3color datewidth">
              <div id="birthdate11" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $birthdate1Err ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 borderleft text-style1"><label for="birthdate2">Birth Date</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="date" name="birthdate2" id="birthdate2" class="row3color datewidth">
              <div id="birthdate22" class="showerror"></div>
              <p class="text-danger">
                 <?php echo $birthdate2Err ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row  bordertop">
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 text-style1"><label for="insuredss1">Insured's ss</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insuredss1" id="insuredss1" class="row3color">
              <p id="insuredss11" class="showerror"></p>
              <p class="text-danger">
                 <?php echo $insuredss1Err ?>
             </p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 coll4 borderleft text-style1"><label for="insuredss2">Insured's ss</label>
            <span class = "text-danger">*</span>
           </div>
            <div class="col-8 col8">
              <input type="text" name="insuredss2" id="insuredss2" class="row3color">
              <p id="insuredss22" class="showerror"></p>
              <p class="text-danger">
                  <?php echo $insuredss2Err ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- third form end  -->

    <!-- forth form start -->
    <div class="row3 container">
      <div class="row  bordertop">
          <div class="col-4 coll4 text-style1"><label for="fileToUpload">Upload File</label></div>
           <div class="col-4 col8">
            <input type = "file" class="form-control row4color" id = "fileToUpload" name = 'fileToUpload'>
            
            <p class="text-danger">
              <?php echo $fileErr ?>
            </p>

          <p class="text-success">
            <?php echo $file1 ?>
          </p>
          </div>

          <div class="col-4 col8">
          <img src="" alt="" width="200" height="200" id='image'>
          </div>
        </div>
    </div>

    <!-- forth form end  -->

    <button type="submit" name="submit" class="btn1" id="submit" value="submit">Submit</button>
  </form>
  <p id="showResults"></p>

  <p> 
 
    <?php 
     if (isset($_POST['submit'])) { 
         echo "<br>" . "tile is: " . $title . "<br>";
         echo  "<br>" . "Marital Status is: " . $maritalstatus . "<br>";
        
         echo  "name is: " . $name . "<br>"; 
         echo  "Social Security is: " . $social . "<br>";
         echo  "address is: " . $address . "<br>"; 
         echo  "state  is: " . $state  . "<br>";
         echo  "Referred By : " .  $reffered  . "<br>"; 
         echo  "zip is: " . $zip . "<br>";
         echo  "occupation is: " . $occupation . "<br>"; 
         echo  "cellphone1 is: " . $cellphone1 . "<br>";
         echo  "cellphone2 is: " . $cellphone2 . "<br>"; 
         echo  "homephone is: " . $homephone . "<br>";
         echo  "employer name is: " . $employername . "<br>"; 
         echo  "Parent/Guardian is: " . $parent . "<br>";
         echo  "mobile number is: " . $mobilenumber . "<br>"; 
         echo  "employer email is: " . $employeremail . "<br>";

         echo  "Other Condition(s) is: " .  $conditions  . "<br>"; 
         echo  "Medications are you presently is: " .  $medications . "<br>";
         echo  "   Do you smoke? : " .  $smoke  . "<br>"; 
         echo  "Name of family doctor is: " .  $familydoctor  . "<br>"; 
         echo  "Did you ever where glasses or contact lenses: " .  $contactlenses  . "<br>"; 
         
         echo  "List any allergies to medications is: " .  $allergies . "<br>";
         echo  "Date of last exam is: " .  $examdate. "<br>"; 
         echo  "Family history of eye disorders is: " .  $eyesdoctor . "<br>";
         
         echo  "Insurance Name  " . $insurancename1 . "<br>"; 
         echo  "insurancename 2: " .  $insurancename2 . "<br>";
         echo  "employer 1 is : " . $employer1   . "<br>"; 
         echo  "employer 2 is : " .  $employer2 . "<br>";
         echo  "insuredname 1 is: " .   $insuredname1 . "<br>"; 
         echo  "insuredname 2 is: " .   $insuredname2. "<br>";
         echo  "Birth Date is: " .  $birthdate1  . "<br>"; 
         echo  "Birth Date is: " .  $birthdate2  . "<br>";
         echo  "insuredss 1 is: " . $insuredss1 . "<br>"; 
         echo  "insuredss2 is: " .   $insuredss2 . "<br>";
      
         

     }
    ?> 
  </p>


  <!-- JavaScript Libraries -->
  <!-- <script src="assets/js/validation.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>