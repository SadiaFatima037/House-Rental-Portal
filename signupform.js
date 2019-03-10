function formValidation()
{
var ufullname = document.myform.fullname;
var uemail = document.myform.email;
var uphone = document.myform.phone;
var uname = document.myform.username;
var upass = document.myform.passid;
var ucpass = document.myform.cpassword;
var uadd = document.myform.address;

var uaddress = document.myform.address;
var uemail = document.myform.email;
 if(username_validation(uname,5,20))
{
if(password_validation(upass,7,25))
{
if(cpassword_validation(upass,ucpass))
{
if(allLetter(ufullname))
{
if(alphanumeric(uadd))
{
if(allnumeric(uphone)) 
{
if(ValidateEmail(uemail))
{

} 
}
} 
}
}
}
}
return false;

} function username_validation(uname,mx,my)
{
var uname_len = uname.value.length;
if (uname_len == 0 || uname_len >= my || uname_len < mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}
function password_validation(upass,mx,my)
{
var passid_len = upass.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
function username_fun(uname)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphanumeric characters only');
uname.focus();
return false;
}
}
function allLetter(ufullname)
{ 
var letters = /^[A-Za-z]+$/;
if(ufullname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
ufullname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('User address must have alphanumeric characters only');
uadd.focus();
return false;
}
}

function allnumeric(uphone)
{ 
var numbers = /^[0-9]+$/;
if(uphone.value.match(numbers))
{
return true;
}
else
{
alert('Phone number must have numeric characters only');
uphone.focus();
return false;
}
}
function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
}
function ValidatePass(upass,ucpass)
{

if(upass==ucpass)
{
return true;
}
else
{
alert("Passwords don't match");
uemail.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}
