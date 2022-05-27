/*
function validate()
{
    var username=document.getElementById("Username").value;
    var password=document.getElementById("Password").value;
}
if (username=="admin"&& password=="user")
{
    alert("login succesfully");
    return true;
}
else
{
    alert("login failed")
}
*/

var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "Formget" && password == "formget#123"){
alert ("Login successfully");
window.location = "success.html"; // Redirecting to other page.
return false;
}
else{
alert("You have entered wrong information");
}
}