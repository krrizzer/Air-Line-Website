
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
							<button> VIEWFLIGHT </button>
						</a>
					</li>

					</li>
					<li id="login">
						<a href="login.php">
							<button> LOGIN </button>
						</a>
					</li>

					<li id="Bookflight">
						<a href="booking.php">
							<button> BOOKFLIGHT </button>
						</a>
					</li>
					<li id="removeFlight">
						<a href="Remove.php">
							<button> REMOVEFLIGHT </button>
						</a>
					</li>
					
				</ul>
			</li>
			
		</ul>
	</div>
	
	<h1> KFUPM Flight </h1>
	
	<div class="info">
		
		
		<!-- image -->
		<div id="info_image">
			<img src="images/KFUPM_Plane_small.jpg" alt="Airplane">
		</div>
		
		<!--text -->
		<div id="info_txt">
		
			<p> 
			<b> KFUPM Flight </b> is a special program designed for faculty member in the University to ! When they want to fly, to have all the best deal which is sponsered by the University
			The concept is simple: <i>when you decied to fly by plane, you use the website which ask you to put the inforamtion of the flight you took</i>. And after you finish that 
			the program annalys your info and automaticly put it in the database while giving you the latest offeres for the best flight experience you will ever have
			<strong> with alot benfit from it </strong>:
			</p>
			<ol>
				<li> upgraed seats </li>
				<li> reduce taxes/fees </li>
				<li> free foods </li>
				<li> win a free flight ticket </li>
			</ol>
			<br>
			<br>
			<p>
			The only thing you have to do is <a href="register (1).php" title="Registration"> register here</a> and start flying with
			the best airline software wordlwide! <br>
			</p>
			<p>
				You Already Have an account! login in now and Enjoy our deal  <a href="login.php" title="Login"> Login here</a> and start flying with
				the best airline software wordlwide! <br>
				</p>
			
		</div>
		
	</div>
	
	<div class="footer">
		<p>
			&copy; 2022 <abbr title="author">Team 3</abbr> 
			&bull; Created for database course: "© King Fahd University of Petroleum & Minerals".
		</p>
	</div>
	
</body>
	
</html>