<?php
session_start();
error_reporting(0);required
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FLY | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src = "js/home.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  class="shortPage" >
<!-- background-image: url('images/flighttoindia.png'); background-size: cover; background-repeat:no-repeat; can be writte n above as per the image adjustment-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="JustFly"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">HOME</a></li>
        <li><a href="ViewFlights.php">FLIGHTS</a></li>
        <li><a href="viewReservations.php">RESERVATIONS</a></li>
		 <li><a href="Admin_signInPage.php">ADMIN</a></li>
        <?php
		if(isset($_SESSION['user_fname']))
		{
			echo("<li><a href='viewReservations.php'>RESERVATIONS</a></li>");
			echo("<li><a href='logout.php'>LOG OUT</a></li>");			
		}
		else
		{
			echo('<li><a href="loginPage.php">LOG IN</a></li>');
			echo('<li><a href="signUp.html">SIGN UP</a></li>');
		}
		?>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center" >
<form action="ViewFlights.php">
<div class="container" >
   

  <h1>AIRLINE FLY </h1>
  <p>Where would you like to fly??</p>
  
    <label class="radio-inline">
      <input type="radio" name="optradio" value="roundtrip">Round Trip
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="oneway" checked>One way
    </label>
  
</div>
  <br>
<div class="form-inline" >
<!--  <select name="Guests" class="form-control"  placeholder="Guests" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>

 </select>

-->	  
	  
   <select name="From" class="form-control" placeholder="From" required>
    <option value="Dallas">Dallas</option>
    <option value="San Diego">San Diego</option>
    <option value="Florida">Florida</option>
    <option value="New York">New York</option>
	<option value="Chicago">Chicago</option>
	<option value="Los Angeles">Los Angeles</option>

	
  </select>
   <select name="To" class="form-control"  placeholder="To" required>
    <option value="Chicago">Chicago</option>
    <option value="Raleigh">Raleigh</option>
    <option value="Atlanta">Atlanta</option>
    <option value="Austin">Austin</option>
	<option value="Los Angeles">Los Angeles</option>
	<option value="New York">New York</option>
    <option value="Dallas">Dallas</option>

  </select>
  
  
</div>
<div class="form-inline" >
  <label style="margin:10px">Departure : </label><input type="date" class = "form-control" name="fromDate" required><label style="margin:10px">Return :   </label><input type="date" class = "form-control" name="toDate" >
  </div>
  <div class="form-inline" >
    <button type="submit" class="btn btn-danger" style="height: 4em; margin-top:15px"><strong>Search Flights</strong></button>
  </div>
</form>
</div>

  <!-- Container (login Section) -->
<div style="background-image: url('images/flighttoindia.png'); background-size: cover; background-repeat:no-repeat;">
<form action = "login.php" method = "post">
<div id="login" class="container-fluid" >
  <div class="row" >
        <div class="col-sm-2 form-group">
          <?php 
          if(isset($_SESSION['username']))
                  echo '<div class="row" style="visibility: hidden">';
          else
            echo '<div class="row">';
          ?>
			
			  <h2 class="text-center">Login</h2>
			</div>
      <?php 
          if(isset($_SESSION['username']))
                  echo '<div class="row" style="visibility: hidden">';
          else
            echo '<div class="row">';
          ?>
			  <input class="form-control" id="username" name="username" placeholder="username" type="text" required>

			</div>
    </br>
            <?php 
          if(isset($_SESSION['username']))
                  echo '<div class="row" style="visibility: hidden">';
          else
            echo '<div class="row">';
          ?>
			  <input class="form-control" id="password" name="password" placeholder="password" type="password" required>
			</div>
        </div>
		<div class = "col-sm-8" style="padding-left:60px">
		<h4><strong>MISSION:</strong><ul><li> To sell the cheapest airline tickets in an increasingly competitive market</li>
					<li>To assemble the most advanced team of travel experts in the world</li>
					<li>To maintain an efficient and technologically bullet-proof platform</li>
					<li>Innovate, don't imitate.</li></ul></h4>
		</div>
		
      </div>
<?php 
          if(isset($_SESSION['username']))
                  echo '<div class="row" style="visibility: hidden">';
          else
            echo '<div class="row">';
          ?>
        <div class="col-sm-2 form-group">
          <button class="btn btn-default pull-right" type="submit">Log In</button>
        </div>
      </div>
    </div>
</form>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; JustFly. All Rights Reserved </p>
</footer>
</div>
</body>
</html>

