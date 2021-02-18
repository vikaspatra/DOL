<html>
<head>
	<title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

	</head>

	<body>
		<section id="nav-bar">
    	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="Images/logo2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member.html">Membership</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
    </section>

		
		

		<div class="container">
			<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2> Login Here </h2>
					<form action="index.html" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> Login </button>

					</form>
				</div>

				<div class="col-md-6 login-right">
					<h2> Register Here </h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> Register </button>

					</form>
				</div>
			</div>
		</div>
						

	</div>

	<!-------------Footer-------------->
<section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <img src="Images/logo3.png" class="footer-logo">
              <p>Fitness Forever is a place where you can find your best exercise and help maintain fitness resulting in quality life.</p>
            </div>

            <div class="col-md-3">
            <h1>Features</h1>
            <p>Certified Trainers</p>
            <p>Free Consulatation</p>
            <p>Flexible Time</p>
            <p>30 Days Free Trial</p>
            </div>

            <div class="col-md-3">
            <h1>Quick Contact</h1>
            <p><i class="fa fa-phone-square"></i> 0123456789</p>
            <p><i class="fa fa-envelope"></i> contact@gmail.com</p>
            <p><i class="fa fa-home"></i> xyz road</p>
            <p><i class="city"></i> Mumbai, Maharashtra</p>
            </div>    
            
             <div class="col-md-3">
            <h1>Follow Us On</h1>
            <p><i class="fa fa-facebook-official"></i> Facebook</p>
            <p><i class="fa fa-youtube-play"></i> Youtube</p>
            <p><i class="fa fa-instagram"></i> Instagram</p>
            <p><i class="fa fa-twitter"></i> Twitter</p>
            </div> 
            </div>
            </div>   

      </section>
      
      


	</body>
</html>