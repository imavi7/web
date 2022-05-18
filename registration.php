<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" sizes="16x16" href="image/img4.jpg">
  <title>E-commerce</title>
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="reg.css">
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <div class="container">
    <a class="navbar-brand" href="#">FASHIONABLE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product.php"><b>Product</b></a>
</li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="login-page">
<div class="form">
<form action="control.php" class="register-form" name="contactForm" onsubmit="return validateForm()" method="POST">
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
                <div class="form-group mb-3">
		            <input type="password" class="form-control" name="rePassword" placeholder="Confirm Password" autocomplete="off">
                <div id="password_txtf"></div> 
		            </div>
		            <div class="form-group">
                <div class="button">
                  <input type="submit" class="form-control btn btn-success rounded submit px-3" value="Submit" class="submit" name="REGISTER">
                  </div>
		            </div>
    	          </form>
		          <p class="text-center">Only member? <a href="login.php">Sign In</a></p>
                  
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="reg.js"></script>
</body>
</html>