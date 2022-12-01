
 $(document).ready(function(){
//     $("#name").blur(function(){
//         $("#name1").html("");
//       });
      
  
//       $("#employeremail").blur(function(){
//         $("#employeremail1").html("");
//       });


//       $("#cell-phone").blur(function(){
//         $("#cellphone1").html("");
//       });

//       $("#home-phone").blur(function(){
//         $("#homenumber").html("");
//       });

//       $("#mobilenumber").blur(function(){
//         $("#mobilenumber1").html("");
//       });

//       $("#cell-phone2").blur(function(){
//         $("#cellphone2").html("");
//       });

//       $("#address").blur(function(){
//         $("#address1").html("");
//       });
     
//       $("#city").blur(function(){
//         $("#city1").html("");
//       });

//       $("#state").blur(function(){
//         $("#state1").html("");
//       });

//       $("#zip").blur(function(){
//         $("#zip1").html("");
//       });
     
//       $("#employername").blur(function(){
//         $("#employername1").html("");
//       });
    
//       $("#date").blur(function(){
//         $("#date1").html("");
//       });

//       $("#parent").blur(function(){
//         $("#parent1").html("");
//       });

//       $("#reffered").blur(function(){
//         $("#reffered1").html("");
//       });

//       $("#social").blur(function(){
//         $("#social1").html("");
//       });

//       $("#occupation").blur(function(){
//         $("#occupation1").html("");
//       });

//       $("#conditions").blur(function(){
//         $("#conditions1").html("");
//       });


//       $("#medications").blur(function(){
//         $("#medications1").html("");
//       });

//       $("#familydoctor").blur(function(){
//         $("#familydoctor1").html("");
//       });

//       $("#allergies").blur(function(){
//         $("#allergies1").html("");
//       });

//       $("#examdate").blur(function(){
//         $("#examdate1").html("");
//       });

//       $("#eye").blur(function(){
//         $("#eye1").html("");
//       });

//       $("#insurancename1").blur(function(){
//         $("#insurancename11").html("");
//       });
     
//       $("#insurancename2").blur(function(){
//         $("#insurancename22").html("");
//       });

//       $("#employer1").blur(function(){
//         $("#employer11").html("");
//       });


//       $("#employer2").blur(function(){
//         $("#employer22").html("");
//       });

//       $("#employer2").blur(function(){
//         $("#employer22").html("");
//       });

//       $("#insuredname1").blur(function(){
//         $("#insuredname11").html("");
//       });

//       $("#insuredname2").blur(function(){
//         $("#insuredname22").html("");
//       });

//       $("#birthdate1").blur(function(){
//         $("#birthdate11").html("");
//       });

//       $("#birthdate2").blur(function(){
//         $("#birthdate22").html("");
//       });

//       $("#insuredss1").blur(function(){
//         $("#insuredss11").html("");
//       });

//       $("#insuredss2").blur(function(){
//         $("#insuredss22").html("");
//       });

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (a) {
           
           $('#image').attr('src', a.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$('#fileToUpload').change(function () {
readURL(this);
});

     
//    $("#submit").click(function(e){
//     let name = $("#name").val();
//     name = jQuery.trim( name );  
//     let email = $("#employeremail").val();
//     email  = jQuery.trim(email);  
//     let cellPhone = $("#cell-phone").val();
//     cellPhone  = jQuery.trim(cellPhone); 
//     let homephone = $("#home-phone").val();
//     homephone  = jQuery.trim(homephone); 
//     let mobilenumber = $("#mobilenumber").val();
//     mobilenumber  = jQuery.trim(mobilenumber); 
//     let cellphone1 = $("#cell-phone2").val();
//     cellphone1   = jQuery.trim(cellphone1); 
//     let address = $("#address").val();
//     address  = jQuery.trim(address);  
//     let city = $("#city").val();
//     city  = jQuery.trim(city); 
//     let state = $("#state").val();
//     state   = jQuery.trim(state); 
//     let zip = $("#zip").val();
//     zip   = jQuery.trim(zip); 
//     let employername = $("#employername").val();
//     employername    = jQuery.trim(employername); 
//     let date = $("#date").val();
//     date  = jQuery.trim(date); 
//     let parent = $("#parent").val();
//     parent   = jQuery.trim(parent); 
//     let reffered = $("#reffered").val();
//     reffered   = jQuery.trim(reffered); 
//     let social = $("#social").val();
//     social   = jQuery.trim(social); 
//     let occupation = $("#occupation").val();
//     occupation   = jQuery.trim(occupation); 
//     let conditions = $("#conditions").val();
//     conditions   = jQuery.trim(conditions); 
//     let medications = $("#medications").val();
//     medications   = jQuery.trim(medications); 
//     let familydoctor = $("#familydoctor").val();
//     familydoctor   = jQuery.trim(familydoctor); 
//     let allergies = $("#allergies").val();
//     allergies   = jQuery.trim(allergies); 
//     let examdate = $("#examdate").val();
//     examdate   = jQuery.trim(examdate); 
//     let eye = $("#eye").val();
//     eye  = jQuery.trim(eye); 
//     let insurancename1 = $("#insurancename1").val();
//     insurancename1   = jQuery.trim(insurancename1); 
//     let insurancename2 = $("#insurancename2").val();
//     insurancename2   = jQuery.trim(insurancename2); 
//     let employer1 = $("#employer1").val();
//     employer1   = jQuery.trim(employer1); 
//     let employer2 = $("#employer2").val();
//     employer2  = jQuery.trim(employer2); 
//     let insuredname1 = $("#insuredname1").val();
//     insuredname1   = jQuery.trim(insuredname1); 
//     let insuredname2 = $("#insuredname2").val();
//     insuredname2   = jQuery.trim(insuredname2); 
//     let birthdate1 = $("#birthdate1").val();
//     let birthdate2 = $("#birthdate2").val();
//     let insuredss1 = $("#insuredss1").val();
//     insuredss1   = jQuery.trim(insuredss1); 
//     let insuredss2 = $("#insuredss2").val();
//     insuredss2  = jQuery.trim(insuredss2); 


//     let count = 32;
//     // validation for name
//     if(!(isNaN(name)) || name == ""){
//         if (!(isNaN(name)) && name != "") {
//             $("#name1").html("please enter a string");
//             count++;
//         }  else if (name == "") {
//             $("#name1").html("name is required");
//             count++;
//         }
//     }  else {
//         $("#name1").html("");
//         count--;
//     }

//     // validation for email
//     function validateEmail($email) {
//         var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//         return emailReg.test( $email );
//       }

//       if( !validateEmail(email)) { 
//         $("#employeremail1").html("email is not valid");
//        } else if (email == "") {
//         $("#employeremail1").html("email is required");
//        }
//        else {
//         $("#employeremail1").html("");
//        }
//     //  validation for cell phone
//     if (cellPhone == "" || cellPhone.length < 10 || cellPhone.length > 10 || isNaN(cellPhone)){
//         if (cellPhone == ""){
//             $("#cellphone1").html("home phone is required");
//             count++;
//         } else if (cellPhone.length < 10 && (!(isNaN(cellPhone)))) {
//             $("#cellphone1").html("please enter 10 digits");
//             count++;
//         }  else if (cellPhone.length > 10 && (!(isNaN(cellPhone)))) {
//             $("#cellphone1").html("please enter 10 digits");
//             count++;
//         }  else if (isNaN(cellPhone)) {
//             $("#cellphone1").html("please enter number");
//         }  else {
//             $("#cellphone1").html("");
//         }
//     }  else {
//         $("#cellphone1").html("");
//         count--;
//     }


//     // validation for home phone
//     if (homephone == "" || homephone.length < 10 || homephone.length > 10 || isNaN(homephone)){
//         if (homephone == ""){
//             $("#homenumber").html("home phone is required");
//             count++;
//         } else if (homephone.length < 10 && (!(isNaN(homephone)))) {
//             $("#homenumber").html("please enter 10 digits");
//             count++;
//         }  else if (homephone.length > 10 && (!(isNaN(homephone)))) {
//             $("#homenumber").html("please enter 10 digits");
//             count++;
//         }  else if (isNaN(homephone)) {
//             $("#homenumber").html("please enter number");
//         }  else {
//             $("#homenumber").html("");
//         }
//     }  else {
//         $("#homenumber").html("");
//         count--;
//     }

//     //  // validation for mobile number
//     if (mobilenumber == "" || mobilenumber.length < 10 || mobilenumber.length > 10 || isNaN(mobilenumber)){
//         if (mobilenumber == ""){
//             $("#mobilenumber1").html("home phone is required");
//             count++;
//         } else if (mobilenumber.length < 10 && (!(isNaN(mobilenumber)))) {
//             $("#mobilenumber1").html("please enter 10 digits");
//             count++;
//         }  else if (mobilenumber.length > 10 && (!(isNaN(mobilenumber)))) {
//             $("#mobilenumber1").html("please enter 10 digits");
//             count++;
//         }  else if (isNaN(mobilenumber)) {
//             $("#mobilenumber1").html("please enter number");
//         }  else {
//             $("#mobilenumber1").html("");
//         }
//     }  else {
//         $("#mobilenumber1").html("");
//         count--;
//     }
    
//     // // validation for cell phone
//     if (cellphone1 == "" || cellphone1.length < 10 || cellphone1.length > 10 || isNaN(cellphone1)){
//         if (cellphone1 == ""){
//             $("#cellphone2").html("home phone is required");
//             count++;
//         } else if (cellphone1.length < 10 && (!(isNaN(cellphone1)))) {
//             $("#cellphone2").html("please enter 10 digits");
//             count++;
//         }  else if (cellphone1.length > 10 && (!(isNaN(cellphone1)))) {
//             $("#cellphone2").html("please enter 10 digits");
//             count++;
//         }  else if (isNaN(cellphone1)) {
//             $("#cellphone2").html("please enter number");
//         }  else {
//             $("#cellphone2").html("");
//         }
//     }  else {
//         $("#cellphone2").html("");
//         count--;
//     }
    
//     if (address == "") {
//         $("#address1").html("address is required");
//         count++;
//     } else {
//         $("#address1").html("");
//         count--;
//     }

//     // // city validation
//     if (city == "") {
//         $("#city1").html("city is required");
//         count++;
//     } else {
//         $("#city1").html("");
//         count--;
//     }

//     //   state validation
//     if (state == "") {
//         $("#state1").html("state is required");
//         count++;
//     } else {
//         $("#state1").html("");
//         count--;
//     }

//    // zip validation
//     if (zip == "") {
//         $("#zip1").html("zip file is required");
//         count++;
//     } else {
//         $("#zip1").html("");
//         count--;
//     }

//     // employer name validation
//     if (employername == "") {
//         $("#employername1").html("employer's name is required");
//         count++;
//     } else {
//         $("#employername1").html("");
//         count--;
//     }

//     // date validation
//     if (date == "") {
//         $("#date1").html("birth date is required");
//         count++;
//     } else {
//         $("#date1").html("");
//         count--;
//     }

//     // parent validation
//     if (parent == "") {
//         $("#parent1").html("this field is required");
//         count++;
//     } else {
//         $("#parent1").innerHTML = "";
//         count--;
//     }

//     //   reffered validation
//     if (reffered == "") {
//         $("#reffered1").html("this field is required");
//         count++;
//     } else {
//         $("#reffered1").html("");
//         count--;
//     }


//     // social security validation
//     if (social == "") {
//         $("#social1").html("this field is required");
//         count++;
//     } else {
//         $("#social1").html("");
//         count--;
//     }

//     //   occupation  validation
//     if (occupation == "") {
//         $("#occupation1").html("this field is required");
//         count++;
//     } else {
//         $("#occupation1").html("");
//         count--;
//     }

//      //   conditions validation
//     if (conditions == "") {
//         $("#conditions1").html("this field is required");
//         count++;
//     } else {
//         $("#conditions1").html("");
//         count--;
//     }


//      // medications validation
//       if (medications == "") {
//         $("#medications1").html("this field is required");
//         count++;
//     } else {
//         $("#medications1").html("");
//         count--;
//     }
   

//      //  familydoctor validation
//      if (familydoctor == "") {
//         $("#familydoctor1").html("this field is required");
//         count++;
//     } else {
//         $("#familydoctor1").html("");
//         count--;
//     }

//      //allergies validation
//      if (allergies == "") {
//         $("#allergies1").html("this field is required");
//         count++;
//     } else {
//         $("#allergies1").html("");
//         count--;
//     }


//     //examdate validation
//     if (examdate == "") {
//         $("#examdate1").html("this field is required");
//         count++;
//     } else {
//         $("#examdate1").html("");
//         count--;
//     }
   
//      //eye disorders validation
//      if (eye == "") {
//         $("#eye1").html("this field is required");
//         count++;
//     } else {
//         $("#eye1").html("");
//         count--;
//     }
   
//      //insurancename1 validation
//      if (insurancename1 == "") {
//         $("#insurancename11").html("this field is required");
//         count++;
//     } else {
//         $("#insurancename11").html("");
//         count--;
//     }
   
//      // insurancename2  validation
//      if (insurancename2  == "") {
//         $("#insurancename22").html("this field is required");
//         count++;
//     } else {
//         $("#insurancename22").html("");
//         count--;
//     }

//     //employer1 validation
//     if (employer1 == "") {
//         $("#employer11").html("this field is required");
//         count++;
//     } else {
//         $("#employer11").html("");
//         count--;
//     }
   
//      // employer2 validation
//      if (employer2  == "") {
//         $("#employer22").html("this field is required");
//         count++;
//     } else {
//         $("#employer22").html("");
//         count--;
//     }

//     // insuredname1 validation
//     if ( insuredname1 == "") {
//         $("#insuredname11").html("this field is required");
//         count++;
//     } else {
//         $("#insuredname11").html("");
//         count--;
//     }
   
//      //  insuredname2  validation
//      if ( insuredname2 == "") {
//         $("#insuredname22").html("this field is required");
//         count++;
//     } else {
//         $("#insuredname22").html("");
//         count--;
//     }


//      //  birthdate1  validation
//      if (birthdate1 == "") {
//         $("#birthdate11").html("this field is required");
//         count++;
//     } else {
//         $("#birthdate11").html("");
//         count--;
//     }
   
//      //  birthdate2  validation
//      if (birthdate2== "") {
//         $("#birthdate22").html("this field is required");
//         count++;
//     } else {
//         $("birthdate22").html("");
//         count--;
//     }
   
//      //  insuredss1 validation
//      if (insuredss1 == "") {
//         $("#insuredss11").html("this field is required");
//         count++;
//     } else {
//         $("#insuredss11").html("");
//         count--;
//     }
   
//      // insuredss2 validation
//      if (insuredss2 == "") {
//         $("#insuredss22").html("this field is required");
//         count++;
//     } else {
//         $("#insuredss22").html("");
//         count--;
//     }


   
//     if (count == 0){

//     } else {
//         e.preventDefault();
//     }
     

// });
 });


















