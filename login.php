<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-commerce</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="login.css">
<style>
    .product img{
        width:100%;
        height:auto;
        box-sizing:border box;
        object-fit: cover;

    }
    </style>
	
</head>
<body>
  <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <div class="container">
    <a class="navbar-brand" href="#">FASHIONABLE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="registration.php">Register</a>
        </li>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <div class="login-page">
  <div class="form">
  <form action="control.php" class="signin-form" name="contactForm" onsubmit="return validateForm()" method="post">
			      		<div class="form-group mb-3">
			      		<input type="text" class="form-control" name="fname" placeholder="Username" autocomplete="off">
                  <div id="username_txt"></div>
			      		</div>
                <div class="form-group mb-3">
		            	<input type="email" class="form-control" name="femail" placeholder="Email" autocomplete="off">
                  <div id="email_txt"></div> 
		            </div>
		            <div class="form-group mb-3">
		              <input type="password" class="form-control" name="fpassword" placeholder="Password" autocomplete="off">
                  <div id="password_txt"></div>
		            </div>
                <div class="form-group">
                <div class="New_E">
                  <button name="login" >Login</button>
                </div>
		            </div>
    	          </form>
		          <p class="text-center">Not a member? <a href="registration.php">Sign Up</a></p>
		        </div>
</div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="login.js"></script>
</body>
</html>