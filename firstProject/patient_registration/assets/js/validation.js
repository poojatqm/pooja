
formdata = document.getElementById("myform");
formdata.addEventListener('submit', e => {
    validate(e);
})

validate = (e) => {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("employeremail").value.trim();
    const cellPhone = document.getElementById("cell-phone").value.trim();
    const homephone = document.getElementById("home-phone").value.trim();
    const mobilenumber = document.getElementById("mobilenumber").value.trim();
    const cellphone1 = document.getElementById("cell-phone2").value.trim();
    const address = document.getElementById("address").value.trim();
    const city = document.getElementById("city").value.trim();
    const state = document.getElementById("state").value.trim();
    const zip = document.getElementById("zip").value.trim();
    const employername = document.getElementById("employername").value.trim();
    const date = document.getElementById("date").value.trim();
    const parent = document.getElementById("parent").value.trim();
    const reffered = document.getElementById("reffered").value.trim();
    const social = document.getElementById("social").value.trim();
    const occupation = document.getElementById("occupation").value.trim();
    const conditions = document.getElementById("conditions").value.trim();
    const medications = document.getElementById("medications").value.trim();
    const familydoctor = document.getElementById("familydoctor").value.trim();
    const allergies = document.getElementById("allergies").value.trim();
    const examdate = document.getElementById("examdate").value.trim();
    const eye = document.getElementById("eye").value.trim();
    const insurancename1 = document.getElementById("insurancename1").value.trim();
    const insurancename2 = document.getElementById("insurancename2").value.trim();
    const employer1 = document.getElementById("employer1").value.trim();
    const employer2 = document.getElementById("employer2").value.trim();
    const insuredname1 = document.getElementById("insuredname1").value.trim();
    const insuredname2 = document.getElementById("insuredname2").value.trim();
    const birthdate1 = document.getElementById("birthdate1").value.trim();
    const birthdate2 = document.getElementById("birthdate2").value.trim();
    const insuredss1 = document.getElementById("insuredss1").value.trim();
    const insuredss2 = document.getElementById("insuredss2").value.trim();

    const atposition = email.indexOf("@");
    const dotposition = email.lastIndexOf(".");

    let title = document.getElementsByName('flexRadioDefault');
    let title1 = "";

    let status = document.getElementsByName('flexRadioDefault1');
    let status1 = "";

    let smoke = document.getElementsByName('flexRadioDefault2');
    let smoke1 = "";

    let glasses = document.getElementsByName('flexRadioDefault3');
    let glasses1 = "";

    let count = 18;

   
    // selected value for title
    for (let i = 0; i < title.length; i++) {
        if (title[i].checked) {
            title1 = title[i].value;
        }
    }
    if (title1 == null || title1 == "") {
        document.getElementById("select1").innerHTML = "Please select value";
        count++;
    }
    else {
        document.getElementById("select1").innerHTML = "";
        count--;
    }

    //selected value for status
    for (let i = 0; i < status.length; i++) {
        if (status[i].checked) {
            status1 = status[i].value;
        }
    }
    if (status1 == null || status1 == "") {
        document.getElementById("select2").innerHTML = "Please select value";
        count++;
    }
    else {
        document.getElementById("select2").innerHTML = "";
        count--;
    }

    //selected value for smoke
    for (let i = 0; i < smoke.length; i++) {
        if (smoke[i].checked) {
            smoke1 = smoke[i].value;
        }
    }
    if (smoke1 == null || smoke1 == "") {
        document.getElementById("select3").innerHTML = "Please select value";
        count++;
    }
    else {
        document.getElementById("select3").innerHTML = "";
        count--;
    }

    // selected value for Did you ever where glasses or contact lenses
    for (let i = 0; i < glasses.length; i++) {
        if (glasses[i].checked) {
            glasses1 = glasses[i].value;
        }
    }
    if (glasses1 == null || glasses1 == "") {
        document.getElementById("select4").innerHTML = "Please select value";
        count++;
    }
    else {
        document.getElementById("select4").innerHTML = "";
        count--;
    }


    //  name validation
    if (!(isNaN(name)) || name == null || name == "") {
        if (!(isNaN(name)) && name != "") {
            document.getElementById("name1").innerHTML = "Please enter a string";
            
            count++;
        } else if (name == "" || null) {
            document.getElementById("name1").innerHTML = "name is required";
            count++;
        }
    } else {
        document.getElementById("name1").innerHTML = "";
        count--;
    }

    // email validation
    if (email == ""  || atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {

        if (email == "") {
            document.getElementById("employeremail1").innerHTML = "email is required";
            count++;
        } else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
            document.getElementById("employeremail1").innerHTML = "place enter a valid email";
            count++;
        }
    } else {
        document.getElementById("employeremail1").innerHTML = "";
        count--;
    }

    //  cell phone validation
    if (cellPhone == "" || cellPhone.length < 10 || cellPhone.length > 10) {

        if (cellPhone == "") {
            document.getElementById("cellphone1").innerHTML = "cell number is required";
            count++;
        } else if (cellPhone.length < 10) {
            document.getElementById("cellphone1").innerHTML = "please enter 10 digits";
            count++;
        } else if (cellPhone.length > 10) {
            document.getElementById("cellphone1").innerHTML = "please enter 10 digits";
            count++;
        }
    } else {
        document.getElementById("cellphone1").innerHTML = "";
        count--;
    }

    // home phone validation
    if (homephone == "" || homephone.length < 10) {
        if (homephone == "") {
            document.getElementById("homephone1").innerHTML = "home phone is required";
            count++;
        } else if (homephone.length < 10) {
            document.getElementById("homephone1").innerHTML = "please enter 10 digits";
            count++;
        } else if (homephone.length > 10) {
            document.getElementById("homephone1").innerHTML = "please enter 10 digits";
            count++;
        }
    } else {
        document.getElementById("homephone1").innerHTML = "";
        count--;
    }

    //   mobile number validation
    if (mobilenumber == "" || mobilenumber.length < 10 || mobilenumber.length > 10) {
        if (mobilenumber == "") {
            document.getElementById("mobilenumber1").innerHTML = "mobile number is required";
            count++;
        } else if (mobilenumber.length < 10) {
            document.getElementById("mobilenumber1").innerHTML = "please enter 10 digits";
            count++;
        }

        else if (mobilenumber.length > 10) {
            document.getElementById("mobilenumber1").innerHTML = "please enter 10 digits";
            count++;
        }
    } else {
        document.getElementById("mobilenumber1").innerHTML = "";
        count--;
    }

    //   cell phone validation
    if (cellphone1 == "" || cellphone1.length < 10 || cellphone1.length > 10) {
        if (cellphone1 == "") {
            document.getElementById("cellphone2").innerHTML = "cell phone is required";
            count++;
        } else if (cellphone1.length < 10) {
            document.getElementById("cellphone2").innerHTML = "please enter 10 digits";
            count++;
        } else if (cellphone1.length > 10) {
            document.getElementById("cellphone2").innerHTML = "please enter 10 digits";
            count++;
        }

    } else {
        document.getElementById("cellphone2").innerHTML = "";
        count--;
    }

    // address validation
    if (address == "") {
        document.getElementById("address1").innerHTML = "address is required";
        count++;
    } else {
        document.getElementById("address1").innerHTML = "";
        count--;
    }

    // city validation
    if (city == "") {
        document.getElementById("city1").innerHTML = "city is required";
        count++;
    } else {
        document.getElementById("city1").innerHTML = "";
        count--;
    }

    //   state validation
    if (state == "") {
        document.getElementById("state1").innerHTML = "state is required";
        count++;
    } else {
        document.getElementById("state1").innerHTML = "";
        count--;
    }

    // zip validation
    if (zip == "") {
        document.getElementById("zip1").innerHTML = "zip file is required";
        count++;
    } else {
        document.getElementById("zip1").innerHTML = "";
        count--;
    }

    // employer name validation
    if (employername == "") {
        document.getElementById("employername1").innerHTML = "employer's name is required";
        count++;
    } else {
        document.getElementById("employername1").innerHTML = "";
        count--;
    }

    // date validation
    if (date == "") {
        document.getElementById("date1").innerHTML = "birth date is required";
        count++;
    } else {
        document.getElementById("date1").innerHTML = "";
        count--;
    }

    // parent validation
    if (parent == "") {
        document.getElementById("parent1").innerHTML = "this field is required";
        count++;
    } else {
        document.getElementById("parent1").innerHTML = "";
        count--;
    }

    //   reffered validation
    if (reffered == "") {
        document.getElementById("reffered1").innerHTML = "this field is required";
        count++;
    } else {
        document.getElementById("reffered1").innerHTML = "";
        count--;
    }

    let para = document.createElement('p');

    para.textContent = " title : " + title1 + ", <br> Marital Status: " + status1 + ", <br>  Name : " + name + ", <br> EMail : " + email + ", <br> Address : " + address + ", <br> Cell Phone: " + cellPhone + ", <br> Home Phone: "
        + homephone + ", <br> Mobile Number: " + mobilenumber + ", <br> Cell Phone: " + cellphone1 + ", <br> City: " + city
        + ", <br> state: " + state + ", <br> Zip: " + zip + ", <br> Employer's Name: " + employername + ", <br> Date: " + date + ", <br> Parent: " + parent
        + ", <br> Reffered: " + reffered + ", <br> Social Security: " + social + ", <br> Occupation: " + occupation + ", <br> Other Condition(s): " + conditions
        + ", <br> Medications are you presently: " + medications + ", <br> Name of family doctor: " + familydoctor + ", <br> List any allergies to medications:"
        + allergies + ", <br> Date of last exam: " + examdate + ", <br> Do you smoke?: " + smoke1 + ", <br> Family history of eye disorders " + eye + ", <br> insurancename1: " + insurancename1
        + ", <br> Insurance Name: " + insurancename1 + ", <br> Insurance Name: " + insurancename2 + ", <br> Employer" + employer1 + ", <br> Employer"
        + employer2 + ", <br> Insured's Name: "  + ", <br> Did you ever where glasses or contact lenses: "  + glasses1  + insuredname1 + ", <br> Insured's Name: " + insuredname2 + ", <br> Birth Date: " + birthdate1 +
        ", <br> Birth Date: " + birthdate2 + ", <br> Insured's ss: " + insuredss1 + ", <br> Insured's ss: " + insuredss2;

    paracontent = para.textContent;
    if (count == 0) {
        document.getElementById("myform").style.display = 'none' && document.write(paracontent);
    }
    e.preventDefault();
}




