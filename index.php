<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/cc6df5477b.js"></script>
	<title>Navita</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Responsive Navigation Bar  -->
  <nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="index.php">Navita</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li> 
          <li><a href="#">Page 3</a></li> 
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Login call -->
  <div id="logindiv" class="modal">
    <form class="modal-content animate" action="#" method="post">
      <div class="imgcontainer">
        <span class="close" title="Close">&times;</span>
        <img src="img/avatar1.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container1">
        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>        
        <button type="submit" name="login">Login</button>
        <input type="checkbox" checked="checked"> Remember me
      </div>
      <div class="container1" id="loginbottom">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="password">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    <?php
 			//php login validation

 			$servername = "localhost";
			$username = "root";
			$password = "**********";
			$dbname = "navita";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error)
				die("Connection failed: ". $conn->connect_error);

			if (isset($_POST['login']))
			{
				$email = mysqli_real_escape_string($conn,$_POST['email']);
				$password = mysqli_real_escape_string($conn,$_POST['password']);
				$hashed_password = hash("sha256",$password);
				$sql = "SELECT email,password FROM users WHERE email='$email' AND password='$hashed_password' ";
				$result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result))
				{
					header("Location:dashboard.php");
				} 
				else
				{
					echo "Invalid credentials";
				}
			}

 		?>

  </div>

  <!-- Introduction of website -->
  <div id="introduction">
  	<div class="wrapper">
  		<div class="container">
  			<div class="introtext">
  				<h2>Some text about navita</h2>
  				<h3>Some more text</h3>
  			</div>
  			<div class=searchbox>
  				<p><b>Search bar to be completed soon </b></p> 
  			</div>
  			<div class="top-reviews">
  				<div class="row1" id="user1">
  					<div class="col-3">
  					<img src="img/user1.jpg" alt="user image 1">
  					<p><b>User name 1</b></p>
  					</div>
  					<div class=col-9>
  					<p>Navita rating</p>
  					<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  					</div>
  				</div>
  				<div class="row1" id="user2">
  					<div class="col-3">
  					<img src="img/user2.jpg" alt="user image 2">
  					<p><b>User name 2</b></p>
  					</div>
  					<div class=col-9>
  					<p>Navita rating</p>
  					<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  					</div>
  				</div>
  				<div class="row1" id="user3">
  					<div class="col-3">
  					<img src="img/user3.jpg" alt="user image 3">
  					<p><b>User name 3</b></p>
  					</div>
  					<div class=col-9>
  					<p>Navita rating</p>
  					<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  					</div>
  				</div>
  			</div> 
  			<div class="review-selector">
  				<div class="container">
  					<span id="review1" class="active">&bull;</span>
  					<span id="review2" class="">&bull;</span>
  					<span id="review3" class="">&bull;</span>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- requirements -->
  <div class="requirements">
  	<div class="container">
  		<div class="row1">
  			<div class="col-3">
  				<div class="bor"><h4>Rental Aggrement</h4></div>
  			</div>
  			<div class="col-6">
  				<div class="bor"><h4>Tell us your requirements</h4></div>
  			</div>
  			<div class="col-3">
  				<div class="bor"><h4>Write a review</h4></div>
  			</div>
  		</div>
  	</div>
  </div>   
  <!-- To be completed -->

  <!-- Trending properties -->
  <div class="trending-properties all-heading">
  	<div class="container">
  		<div class="page-header">
  		<h2>Trending Properties</h2>
  		</div>
  		<div class="properties">
  			<div class="row1">
  				<div class="col-4">
  					<h5><b>Boys CoHo</b></h5>
  					<p><i class="fa fa-map-marker"></i> Location</p>
  					<p><i class="fa fa-rupee"></i> Money</p>
  					<img src="img/tp1.jpg" width="100%">   <!-- Replace images, images copied from zocalo -->
  				</div>
  				<div class="col-4">
  					<h5><b>Boys CoHo</b></h5>
  					<p><i class="fa fa-map-marker"></i> Location</p>
  					<p><i class="fa fa-rupee"></i> Money</p>
  					<img src="img/tp2.jpg" width="100%">
  				</div>
  				<div class="col-4">
  					<h5><b>Boys CoHo</b></h5>
  					<p><i class="fa fa-map-marker"></i> Location</p>
  					<p><i class="fa fa-rupee"></i> Money</p>
  					<img src="img/tp3.jpg" width="100%">
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- Reviews -->
  <div class="reviews all-heading">
  	<div class="container">
  		<div class="page-header">
  			<h2>Reviews</h2>
  		</div>
  		<div class="row1">
  			<div class="col-3 locations">
  				<ul>
  					<li class="active" id="location-1">Location 1</li>
  					<li id="location-2">Location 2</li>
  					<li id="location-3">Location 3</li>
  					<li id="location-4">Location 4</li>
  				</ul>
  			</div>
  			<div class="col-9">
  				<div class="bottom-review">
  					<div class="row1">
  						<div class="col-3">
  							<img src="img/user1.jpg">
  							<p>Name</p>
  						</div>
  						<div class="col-9">
  							<p>Navita Rating</p>
  							<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  						</div>
  					</div>
  				</div>
  				<div class="bottom-review">
  					<div class="row1">
  						<div class="col-3">
  							<img src="img/user3.jpg">
  							<p>Name</p>
  						</div>
  						<div class="col-9">
  							<p>Navita Rating</p>
  							<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- Services -->
  <div class="services all-heading">
    <div class="container">
      <div class="page-header">
        <h2>Zocalo Services</h2>
      </div>
      <div class="row1">
        <div class="col-6 rental">
          <center>
            <div class="services-text">
              <h4>Create Rental Aggrement</h4>
            </div>
          </center>
        </div>
        <div class="col-1"></div>
        <div class="col-5 movers">

        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer id="footer" >   
	<div class="container-made"> 
		<div id="follow">
			<center>
				<h3>Follow us on</h3>
					<i class="fa fa-facebook" style="font-size:40px; color:white"></i>
					<i class="fa fa-twitter" style="font-size:40px; color:white"></i>
					<i class="fa fa-linkedin" style="font-size:40px; color:white"></i>
					<i class="fa fa-google-plus" style="font-size:40px; color:white"></i>
					<i class="fa fa-youtube" style="font-size:40px; color:white"></i>
				</div>
			</center>
		</div> 
        <center>
 			    <p>Copyright &copy;Navita. All Rights Reserved  |  Contact Us: +91 7577045235</p> 
     	</center>  
     </div> 
  </footer> 

  <script src="script.js" rel="text/javascript"></script>

</body>
</html>
