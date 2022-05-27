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
      <h1>Remove Flight</h1>
            <label>Username</label>
            <input type="text" id="username" name="user" placeholder="e.g: Ahmad,Khaled...">
</dev>
</dev>
            <input type=submit>
      </form>  

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $query = "SELECT passenger_fid FROM passenger WHERE ? = passenger_id";
  $con = mysqli_connect("localhost","root","","test");
  $user = $_POST['user'];
 
  if($stmt = mysqli_prepare($con, $query)){

   mysqli_stmt_bind_param($stmt, "s", $user);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
 echo "<table border='1'> 
 <tr>
 <th>Flight ID</th>
 </tr>";

 while($row = mysqli_fetch_array($result))
 
   {
   echo "<tr>";
   echo "<td>" . $row['passenger_fid'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";

 

 }
}

 ?>





 </body>
 </html>
  

  

