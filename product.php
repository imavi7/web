<?php include 'control.php';
session_start();
$n=$_SESSION['n'];
if(empty($n)){
     header("location:login.php");
}
else{
?>
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
    <link rel="stylesheet" href="index.css">
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
          <a class="nav-link active" aria-current="page" href="login.php">Log Out</a>
        </li>
       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




  
</section >

<section id="featured" class="my-5 pb-5">
  <div class="container  mt-5 py-5">
    <h2><b>Our Products</b></h2>
    <hr><p>Here You can Check out our new products with fair price on Fashionable</p>
</div>


<div class="row mx-auto container-fluid">
<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/featured/1.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">Sport Shoe</h5>
<h5 class="p-price">$50</h5>
<a href="product/buy/p1.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-3  col-10 ">
<img src="img/clothes/11.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">T-shirt</h5>
<h5 class="p-price">$60</h5>
<a href="product/buy/p2.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/featured/4.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">Cap</h5>
<h5 class="p-price">$30</h5>
<a href="product/buy/p3.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/watches/4.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">watches</h5>
<h5 class="p-price">$40</h5>
<a href="product/buy/p4.php" class="option2"><button>Buy Now</button></a>
</div>


<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/clothes/1.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name"></h5>
<h5 class="p-name">outfit</h5>
<h5 class="p-price">$60</h5>
<a href="product/buy/p5.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-3  col-10 ">
<img src="img/clothes/3.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name"></h5>
<h5 class="p-name">T-shirt</h5>
<h5 class="p-price">$65</h5>
<a href="product/buy/p6.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/shop/3.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name"></h5>
<h5 class="p-name">bag</h5>
<h5 class="p-price">$40</h5>
<a href="product/buy/p7.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/shop/13.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">watch</h5>
<h5 class="p-price">$20</h5>
<a href="product/buy/p8.php" class="option2"><button>Buy Now</button></a>
</div>
<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/shop/14.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">shoe</h5>
<h5 class="p-price">$50</h5>
<a href="product/buy/p9.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-3  col-10 ">
<img src="img/shop/12.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">shoe</h5>
<h5 class="p-price">$20</h5><a href="product/buy/p10.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/shop/23.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">T-shirt</h5>
<h5 class="p-price">$30</h5>
<a href="product/buy/p11.php" class="option2"><button>Buy Now</button></a>
</div>

<div class="product text-center col-lg-3 col-md-4  col-12 ">
<img src="img/shop/6.jpg" class="img-fluid mb-3" alt="...">
<h5 class="p-name">hudi</h5>
<h5 class="p-price">$40</h5>
<a href="product/buy/p12.php" class="option2"><button>Buy Now</button></a>
</div>
</div>
</section>


<footer>
        <div class="down">
            <font color="white">
            <br><br><h3><a href="about.php" class="" style="text-decoration: none; padding: 10px 12px;color: white; ">About Us</a></h3>
            </font>
            <a href="https://www.facebook.com/" class="fa fa-facebook" style="text-decoration: none; padding: 10px 12px;color: white; "></a>
            <a href="https://www.instagram.com/" class="fa fa-instagram" style="text-decoration: none; padding: 10px 12px;color: white;"></a>
            <a href="https://twitter.com/i/flow/login" class="fa fa-twitter" style="text-decoration: none; padding: 10px 12px;color: white;"></a><br>
            <a href="#" class="fa fa-phone" style="text-decoration: none; padding: 10px 12px;color: white;">
              +91-9330659847</a> <br>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJTNqrgnGwVtVpsZhQBWNnSMlJdfzgVdTXfRFSjBJJdpMGGdqWjFrPBGlFnJRHdqrtXBfcg" class="fa fa-envelope" style="text-decoration: none; padding: 10px 12px; color:white;">
              abhishek.chowdhury2019@gmail.com</a>
              <div > Developed By : Abhishek Copyright &copy; </div>
        </div>
        
    </footer>

</header>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<?php }
session_destroy();
?>