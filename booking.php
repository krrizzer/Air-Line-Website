<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-width: 414px)" href="css/mob_style.css" />
    <link rel="stylesheet" media="only screen and (min-width: 415px)" href="css/style.css" />
    <script type="text/javascript" src="script.js"></script>
    <title> Home Page </title>
</head>
<body>
<div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <div class="row">
          <div class="col-50">
      <form method ="post">
      <h1>Payment</h1>
            <label>Username</label>
            <input type="text" id="username" name="user" placeholder="e.g: Ahmad,Khaled...">
            <label>Flight ID</label>
            <input type="text" id="fid" name="flightid" placeholder="e.g: 1,2,3...">
            <lable>your seat type </lable><input type="radio" 
                value=econ name=sp>econmic<input type="radio" value=bus 
                name=sp>busniess<input type="radio" 
                value=first name=sp>firstclass
            <label>Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label>Credit card number</label>
            <input type="text" id="payment" name="payment" placeholder="1111-2222-3333-4444">
            <label>Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
      

       
         
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
           
            
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">

</dev>
</dev>
            <input type=submit>
      </form>  

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // Prepare an insert statement
  $sql = "INSERT INTO passenger (passenger_id, payment,passenger_fid) VALUES (?,?,?)";
  $con = mysqli_connect("localhost","root","","test");
  $username = $_POST['user'];
  $payment = $_POST['payment'];
  $fid = $_POST['flightid'];
  if($stmt = mysqli_prepare($con, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sii", $username,$payment,$fid);
    // ttempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        header("location: main.php");
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
  }
}
?>

</body>
</html>


