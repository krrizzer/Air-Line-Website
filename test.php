
<!DOCTYPE html>
<html>
<body>

<form method="post">
<input type="text" id="username" name="fname" placeholder="e.g: Ahmad,Khaled...">
<input type="text" id="payment" name="lname" placeholder="e.g: Ahmad,Khaled..."> 
<input type = "submit">           
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Error";
    } else {
        echo password_hash($name,PASSWORD_DEFAULT);
    }
}
?>

</body>
</html>