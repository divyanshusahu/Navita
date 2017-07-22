<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/cc6df5477b.js"></script>
	<title>Navita | Signup</title>
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
    <form class="modal-content animate" action="" method="post">
      <div class="imgcontainer">
        <span class="close" title="Close">&times;</span>
        <img src="img/avatar1.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container1">
        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>        
        <button type="submit">Login</button>
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
    
	<!-- Final Design -->
	<div class="wrapper"> 
		<div class="row1">
			<div class="col-7" id="leftimage">   <!-- Only in Desktop -->
				<br><br><br><br><br>
				<h3>NEED AN ACCOUNT?</h3><br>
				<h1>CREATE ACCOUNT</h1>
			</div>
      <div class="col-1"></div>
			<div class="col-4" id="rightform">
				<!-- Heading to join Navita -->
    			<div id="head">
    				<h4>CREATE ACCOUNT</h4>   <!-- Only in Mobile -->
    			</div>
				<form action="" method="post">
    			<input type="text" placeholder="First Name" required class="form-control" name="fname"><br>
    			<input type="text" placeholder="Last Name" required class="form-control" name="lname"><br>
    			<label class="radio-inline"><input type="radio" name="gender" value="male" required>Male</label>
    			<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
    			<label class="radio-inline"><input type="radio" name="gender" value="other">Other</label><br><br>
    			<input type="email" placeholder="Email" required class="form-control" name="email"><br>
    			<input type="password" placeholder="Password" required class="form-control" name=password><br>
    			<input type="password" placeholder="Confirm Password" required class="form-control" name="confirm_password"><br>
    			<input type="text" placeholder="Address" required class="form-control" name="address"><br>
    			<input type="number" placeholder="Contact Number" required class="form-control" name="contact_number"><br>
    			<input type="submit" value="Sign Up" name="signup" class="btn btn-block btn-danger">
    		</form>
          <?php

              $login = 0;
              if (isset($_POST['signup']))
              {
                $first_name = mysqli_real_escape_string($conn,$_POST['fname']);
                $last_name = mysqli_real_escape_string($conn,$_POST['lname']);
                $gender = mysqli_real_escape_string($conn,$_POST['gender']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $confirm_password = mysqli_real_escape_string($conn,$_POST['confirm_password']);
                $address = mysqli_real_escape_string($conn,$_POST['address']);
                $contact_number = mysqli_real_escape_string($conn,$_POST['contact_number']);

                if ($password === $confirm_password)
                {
                  $hashed_password = hash("sha256",$password);
                  $sql = "INSERT INTO users VALUES ('$first_name','$last_name','$gender','$email','$hashed_password','$address','$contact_number') ";
                  $login = 1;
                  if ($conn->query($sql) === FALSE)
                  {
                    echo "<br><h4 style='color:red'>Email already registered</h4><br>";
                    $login = 0;
                  }       
                }
                else
                {
                  echo "<br><h4 style='color:red'>Password not matched</h4><br>";
                }

                if ($login === 1)
                {
                  header("Location:dashboard.php");
                }
              }

            $conn->close();

          ?>
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

  <script type="text/javascript" src="script.js" ></script>

</body>
</html>
