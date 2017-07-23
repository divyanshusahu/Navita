<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          <li><a href="#">List of PG's</a></li> 
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
			$password = "burnitdown";
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
  					<img src="img/user1.jpg" alt="user image 1"><br><br>
  					<p><b>User name 1</b></p>
  					</div>
  					<div class=col-9>
  					<p class="color-orangered">Navita rating</p>
  					<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  					</div>
  				</div>
  				<div class="row1" id="user2">
  					<div class="col-3">
  					<img src="img/user2.jpg" alt="user image 2"><br><br>
  					<p><b>User name 2</b></p>
  					</div>
  					<div class=col-9>
  					<p class="color-orangered">Navita rating</p>
  					<p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  					</div>
  				</div>
  				<div class="row1" id="user3">
  					<div class="col-3">
  					<img src="img/user3.jpg" alt="user image 3"><br><br>
  					<p><b>User name 3</b></p>
  					</div>
  					<div class=col-9>
  					<p class="color-orangered">Navita rating</p>
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
  				<div><center><a href="#"><h4><i class="fa fa-file-text-o"></i> Rental Aggrement</h4></a></center></div>
  			</div>
  			<div class="col-6">
  				<div><center><a href="#"><h4>Tell us your requirements</h4></a></center></div>
  			</div>
  			<div class="col-3">
  				<div><center><a href="#"><h4>Write a review</h4></a></center></div>
  			</div>
  		</div>
  	</div>
  </div>   

  <!-- Trending properties -->
  <div class="trending-properties all-heading">
  	<div class="container">
  		<div class="page-header">
  		<h2>Trending Properties</h2>
  		</div>
      <div class="w3-content w3-display-container">
  		  <div class="trending-properties-1">
          <div class="row1">
  				  <div class="col-4 mySlides" id="tp1">
              <h5><b>Boys CoHo 1</b></h5>
  		        <p><i class="fa fa-map-marker"></i> Location</p>
  		        <p><i class="fa fa-rupee"></i> Money</p>
  		        <img src="img/tp1.jpg" width="100%">   <!-- Replace images, images copied from zocalo -->
  				  </div>
  				  <div class="col-4 mySlides" id="tp2">
              <h5><b>Boys CoHo 2</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp2.jpg" width="100%">
  				  </div>
  				  <div class="col-4 mySlides" id="tp3">
              <h5><b>Boys CoHo 3</b></h5>
  				    <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp3.jpg" width="100%">
  				  </div>
          </div>
  		  </div>
        <div class="trending-properties-1">
          <div class="row1">
            <div class="col-4 mySlides" id="tp4">
              <h5><b>Boys CoHo 4</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp2.jpg" width="100%">   <!-- Replace images, images copied from zocalo -->
            </div>
            <div class="col-4 mySlides" id="tp5">
              <h5><b>Boys CoHo 5</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp3.jpg" width="100%">
            </div>
            <div class="col-4 mySlides" id="tp6">
              <h5><b>Boys CoHo 6</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp1.jpg" width="100%">
            </div>
          </div>
        </div>
        <div class="trending-properties-1">
          <div class="row1">
            <div class="col-4 mySlides" id="tp7">
              <h5><b>Boys CoHo 7</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp3.jpg" width="100%">   <!-- Replace images, images copied from zocalo -->
            </div>
            <div class="col-4 mySlides" id="tp8">
              <h5><b>Boys CoHo 8</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp1.jpg" width="100%">
            </div>
            <div class="col-4 mySlides" id="tp9">
              <h5><b>Boys CoHo 9</b></h5>
              <p><i class="fa fa-map-marker"></i> Location</p>
              <p><i class="fa fa-rupee"></i> Money</p>
              <img src="img/tp2.jpg" width="100%">
            </div>
          </div>
        </div>
        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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
            <li id="location-5">Location 5</li>
  				</ul>
  			</div>
        <div id="location-r-1">
  			 <div class="col-9">
  				  <div class="bottom-review">
              <div class="row1">
  						  <div class="col-3">
  							 <img src="img/user1.jpg"><br><br>
  							 <p><b>Name</b></p>
                  <p class="mobile-display color-orangered">Location of reviewer</p>
  						  </div>
  						  <div class="col-9">
  							 <p class="color-orangered">Navita Rating</p>
  							 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  						  </div>
  					 </div>
  				  </div>
  				  <div class="bottom-review desktop-display">
  					 <div class="row1">
  						  <div class="col-3">
  							 <img src="img/user3.jpg"><br><br>
  							 <p><b>Name</b></p>
  						  </div>
  						  <div class="col-9">
  							 <p class="color-orangered">Navita Rating</p>
  							 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
  						  </div>
  					 </div>
  				  </div>
           </div>
          </div>
          <div id="location-r-2">
         <div class="col-9">
            <div class="bottom-review">
              <div class="row1">
                <div class="col-3">
                 <img src="img/user2.jpg"><br><br>
                 <p><b>Name</b></p>
                  <p class="mobile-display color-orangered">Location of reviewer</p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
            <div class="bottom-review desktop-display">
             <div class="row1">
                <div class="col-3">
                 <img src="img/user1.jpg"><br><br>
                 <p><b>Name</b></p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
           </div>
          </div>
          <div id="location-r-3">
         <div class="col-9">
            <div class="bottom-review">
              <div class="row1">
                <div class="col-3">
                 <img src="img/user3.jpg"><br><br>
                 <p><b>Name</b></p>
                  <p class="mobile-display color-orangered">Location of reviewer</p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
            <div class="bottom-review desktop-display">
             <div class="row1">
                <div class="col-3">
                 <img src="img/user2.jpg"><br><br>
                 <p><b>Name</b></p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
           </div>
          </div>
          <div id="location-r-4">
         <div class="col-9">
            <div class="bottom-review">
              <div class="row1">
                <div class="col-3">
                 <img src="img/user1.jpg"><br><br>
                 <p><b>Name</b></p>
                  <p class="mobile-display color-orangered">Location of reviewer</p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
            <div class="bottom-review desktop-display">
             <div class="row1">
                <div class="col-3">
                 <img src="img/user2.jpg"><br><br>
                 <p><b>Name</b></p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
           </div>
          </div>
          <div id="location-r-5">
         <div class="col-9">
            <div class="bottom-review">
              <div class="row1">
                <div class="col-3">
                 <img src="img/user2.jpg"><br><br>
                 <p><b>Name</b></p>
                  <p class="mobile-display color-orangered">Location of reviewer</p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
            <div class="bottom-review desktop-display">
             <div class="row1">
                <div class="col-3">
                 <img src="img/user3.jpg"><br><br>
                 <p><b>Name</b></p>
                </div>
                <div class="col-9">
                 <p class="color-orangered">Navita Rating</p>
                 <p>Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.Some text.</p>
                </div>
             </div>
            </div>
           </div>
          </div>
          <div class="see-all-reviews">
            <center><a href="#"><p>See all reviews</p></a></center>
          </div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- Services -->
  <div class="services all-heading">
    <div class="container">          <!-- Note: Images copied from zocalo. So changes images -->
      <div class="page-header">
        <h2>Navita Services</h2>
      </div>
      <div class="row1">
        <a href="rental_aggrement.php"><div class="col-6 rental">
          <center>
            <div class="services-text">
              <h4><i class="fa fa-file-text-o"></i> Create Rental Aggrement</h4>
            </div>
          </center>
        </div></a>
        <div class="col-1"></div>
        <a href="maovers_and_packers.php"><div class="col-5 movers">
        <center>
          <div class="services-text">
            <h4>Movers and Packers</h4>
          </div>
        </center>
        </div></a>
      </div>
    </div>
  </div>

  <!-- How it works -->
  <div class="how-it-works all-heading">
    <div class="container">
      <div class="page-header">
        <h2>How it Works</h2>
      </div>
      <div class="row1">
        <div class="col-1"></div>
        <div class="col-3">
          <center>
            <h3>Search</h3>
            <p>Browse through verified and detailed listings with real photos. Search on our map based interface by price, location, city or otherwise. Available on your nearest phone, tab or desktop</p>
          </center>
        </div>
        <div class="col-1"></div>
        <div class="col-3">
          <center>
            <h3>Connect</h3>
            <p>Directly connect with genuine people for free! Ya, you read it right, no brokers here. Find the perfect roommate through social connect and the perfect place to stay through hood views</p>
          </center>
        </div>
        <div class="col-1"></div>
        <div class="col-3">
          <center>
            <h3>Move In</h3>
            <p>Move-in to your preferred listing with a single click. We love feedback. If you like us, do share with your friends and if you hate us, do let us know. Happy hunting my dear friend</p>
          <center>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer id="footer" >   
	<div class="container-made"> 
    <div class="navita-conditions">
      <center>
        <a href="#">About us</a> |
        <a href="#">Contact us</a> |
        <a href="#">Careers</a> |
        <a href="#">Privacy Policy</a> |
        <a href="#">Blog</a> |
        <a href="#">Terms and Conditions</a>
      </center>
    </div>
		<div id="follow">
			<center>
				<h3>Follow us on</h3>
					<a href="#"><i class="fa fa-facebook" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-twitter" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-linkedin" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-google-plus" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-youtube" style="font-size:40px; color:white"></i></a>
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
