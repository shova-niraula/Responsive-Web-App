function validation() {

    if(document.querySelector('input[type="radio"]:checked') == null) {
        document.getElementById('optionchecked').innerHTML ="Kindly register for atleast one session!";
        document.myform.radio11.focus();
        return false;
    }
    document.getElementById('optionchecked').innerHTML ="";
    var firstname = document.getElementById("fname").value;
    if(firstname== null || firstname==""){
        document.getElementById('fnameerror').innerHTML ="Please enter first name";
        document.myform.fname.focus();
        return false;
    }
    document.getElementById('fnameerror').innerHTML ="";
    var lasttname = document.getElementById("name").value;
    if(lasttname== null || lasttname==""){
        document.getElementById('lnameerror').innerHTML="Please enter last name";
        document.myform.name.focus();
        return false;
    }
    document.getElementById('lnameerror').innerHTML="";
    var emailid = document.getElementById("email").value;
    var emailcheck=  /^[A-Za-z_.]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;


    if(emailid=="" || emailid== null) {
        document.getElementById('emailerror').innerHTML = "Please enter email";
        document.myform.email.focus();
        return false;
    }
    document.getElementById('emailerror').innerHTML = "";
    if(!emailcheck.test(emailid)) {
        document.getElementById('emailerror').innerHTML = "Invalid email address";
        document.myform.email.focus();
        return false;
    }
    document.getElementById('emailerror').innerHTML = "";
    var phonenumber = document.getElementById("pno").value;
    var phonecheck= /^[0-9]{10}$/;
    if(phonenumber=="" || phonenumber==null) {
        document.getElementById('phoneerror').innerHTML = "Kindly provide a phone number";
        document.myform.pno.focus();
        return false;
    }
    document.getElementById('phoneerror').innerHTML = "";
        if(!phonecheck.test(phonenumber)){
            document.getElementById('phoneerror').innerHTML="Kindly provide a valid phone number with 10 digits";
            document.myform.pno.focus();
            return false;
        }
    document.getElementById('phoneerror').innerHTML = "";
        return true;
    }

