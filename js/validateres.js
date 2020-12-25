function validateres(){
    var firstname = document.resform.fname.value;
    var lastname = document.resform.lname.value;
    var mail = document.resform.email.value;
    var emlval = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phn = document.resform.phone.value;
    var phnpat = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    var adate = document.resform.arrive.value;
    var ddate = document.resform.depart.value;
    var adlt = document.resform.adult.value;
    var chld = document.resform.child.value;
    var cat = document.resform.category.value;
    var agr = document.resform.agree.value;

    if(firstname == ""){
        alert("First Name Can't Be Empty");
    }
    if(lastname == ""){
        alert("Last Name Can't Be Empty");
    }
    if(!mail.match(emlval)){
        alert("Please Enter A Valid Email");
    }
    if(!phn.match(phnpat)){
        alert("Please Enter A Valid Phone Number");
    }
    if(adate == "" || ddate == ""){
        alert("Both Arrival & Departing dates Are Required");
    }
    if(adlt == "Choose" || chld == "Choose"){
        alert("Please Select The Number of Adults & Children");
    }
    if(cat == "Choose"){
        alert("Please Select A Category");
    }
    if(!document.resform.agree.checked){
        alert("You Must Agree To All Terms & Conditions");
    }

}