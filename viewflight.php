<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-width: 414px)" href="css/mob_style.css" />
    <link rel="stylesheet" media="only screen and (min-width: 415px)" href="css/style.css" />
    <script type="text/javascript" src="script.js"></script>
    <title> Home Page </title>
</head>

<body>

    <div class="banner">
        <ul class="banner_list">

            <!-- logo -->
            <li>
                <img src="images/fly.jpg" alt="fly Logo" width="80" style=float:left>
            </li>

            <!-- Banner Bar -->
            <li>
                <ul class="banner_buttons">

                    <li id="home">
                        <a href="main.php">
                            <button> <b> HOME </b> </button>
                        </a>
                    </li>

                    <li id="viewflight">
                        <a href="viewflight.php">
                            <button> <b>VIEWFLIGHT</b> </button>
                        </a>
                    </li>

            </li>
            <li id="login">
                <a href="login.php">
                    <button> LOGIN </button>
                </a>
            </li>

            </ul>
            </li>

        </ul>
    </div>
  

</body>

</html>

<html>

<head>

<h1> Flights: </h1>

<style>

table

{

border-style:solid;
align: center;
border-width:2px;
border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php

$con = mysqli_connect("localhost","root","","test");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
 


 

$result = mysqli_query($con,"SELECT * FROM flight");

 


echo "<table border='1'> 
<tr>

<th>Flight ID</th>

<th>Flight Date</th>

<th>Flight depart</th>

<th>Flight arrive</th>

<th>Flight price</th>

</tr>";


 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['fid'] . "</td>";

  echo "<td>" . $row['fdate'] . "</td>";

  echo "<td>" . $row['fdepart'] . "</td>";

  echo "<td>" . $row['farrive'] . "</td>";

  echo "<td>" . $row['fprice'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>
  <div class="footer">
        <p>
            &copy; 2022 <abbr title="author">Team 3</abbr> &bull; Created for database course: "© King Fahd University of Petroleum & Minerals".
        </p>
    </div>
    </html>