/* Navigation Bar Hide Animation */

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
    
  } else {
    document.getElementById("navbar").style.top = "-150px";
    
  }
  prevScrollpos = currentScrollPos;
}

/* Navigation Bar Hide Animation End */


/* pop up windows*/
function newly(){ 
  $(document).ready(function(){
      $("#myModal").modal('show');
  });
}
function newl(){ 
  $(document).ready(function(){
      $("#Modal").modal('show');
  });
}
/* pop up windows end*/

/*sign up form validation*/
function signin()
{
 var fn = document.fm.fname.value;
 var ln = document.fm.lname.value;
 var mail = document.fm.mail.value;
 var nic = document.fm.nic.value;
 var pw = document.fm.pw.value;
 var cpw = document.fm.cpw.value;
 var mailpattern =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
 /*
 var pwpattern = /^[A-Za-z]\w{7,14}$/;
 var nicpattern= /^[0-9+]{9}[vV|xX]$/;*/
 
  
 if(fn == "")
 {
      alert ("Please Enter The First Name !");
      var flag=false;
}
else
{
  
}
if(ln == "")
 {
      alert ("Please Enter The Last Name !");
       var flag=false;
}

  
if(!mail.match(mailpattern))
{
  alert("Please Enter Valid Email Address !");
   var flag=false;
}  
        
if(nic=="" || nic.length!=10)
{
  alert("Please Enter Valid  NIC Number !");
   var flag=false;
}

if (pw=="")
            {
                alert ("Please Enter The Password");
                 var flag=false;
            }
            
  
if(cpw!=pw)
            {
                alert("Password Does Not Match");
                var flag=false;
            }
            

if(flag!=false)
{
  document.getElementById("fm1").action="../database/signupinsert.php";
}
}

/*sign up form validation end*/


/*log in form validation*/
function login()
{
 var mail = document.frm.logmail.value;
 var pw = document.frm.logpw.value;
  
if(mail=="")
{
  alert("Please Enter The Email Address !");
   var flag=false;
}  
        


if (pw=="")
            {
                alert ("Please Enter The Password");
                 var flag=false;
            }
            
            

if(flag!=false)
{
  document.getElementById("frm1").action="../database/login.php";
}
}
/*log in form validation end*/

/* contact os form */
function contact()
{
 var fn = document.fmcon.cfname.value;
 var ln = document.fmcon.clname.value;
 var mail = document.fmcon.cmail.value;
 var com = document.fmcon.com.value;
 
 var mailpattern =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
 /*
 var pwpattern = /^[A-Za-z]\w{7,14}$/;
 var nicpattern= /^[0-9+]{9}[vV|xX]$/;*/
 
  
 if(fn == "")
 {
      alert ("Please Enter The First Name !");
      var flag=false;
}
else
{
  
}
if(ln == "")
 {
      alert ("Please Enter The Last Name !");
       var flag=false;
}

  
if(!mail.match(mailpattern))
{
  alert("Please Enter Valid Email Address !");
   var flag=false;
}  
if(com == "")
 {
      alert ("Please Enter your feedback !");
       var flag=false;
}

 

if(flag!=false)
{
  document.getElementById("fmcon1").action="../database/contactinsert.php";
}
}

/*Contact us form end*/

