<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lilita+One&display=swap" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Puligilla</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="about.php">about</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">contact</a>
    </li>
  </ul>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
          <img src="pic1.jpg" alt="IOT" width="1100" height="500">
    </div>
    <div class="carousel-item">
    
      <img src="pic2.jpg" alt="AI" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="pic3.jpg" alt="COMBINATION" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

 <section class="my-5">
 	<div class="py-5">
 		<h2 class="text-center">About Me</h2>
 	</div>
 	<div class="container-fluid">

 	    <div class="row">
 		    <div class="col-lg-6 col-md-6 col-12">
 			   <img src="photo.jpg " class="img-fluid">
 			
 		    </div>

 		    <div class="col-lg-6 col-md-6 col-12">
 			<h2 class="display-4">I Am Puligilla Teja Ranganath</h2>
 			<p class="py-4">para bt my self</p>
 			<a href="abot.php" class="btn btn-success"> check more</a>
 		    </div>     
        </div>

    </div>	 

</section>

<section class="my-5">
 	<div class="py-5">
 		<h2 class="text-center">My World </h2>
 	</div>
 	<div class="container-fluid">
 		<div class="row">
 			<div class="col-lg-6 col-md-6 col-12">
 			<div class="card">
  <img class="card-img-top" src="pic1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">My Passion</h4>
    <p class="card-text">Iot</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

 				
 			</div> 

      <div class="col-lg-6 col-md-6 col-12">
      <div class="card">
  <img class="card-img-top" src="pic2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">My Intrest</h4>
    <p class="card-text">AI</p>
  </div>
</div>

        
      </div>      			
 		</div>
 	</div>
 	 
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">My Gallery </h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div><div class="col-lg-4 col-md-4 col-12">
        <img src="111.png" class="img-fluid pb-4">
      </div>
      
    </div>
    
  </div>

</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">My World </h2>
  </div>

    <div class="w-50 m-auto">      
     <form action="abot.php" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Enter Name">
        
      </div>
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" >
  </div>
  <div class="form-group">
    <label for="pwd">Phone Number:</label>
    <input type="Number" name="number" class="form-control" placeholder="Enter Phone Number" >
  </div>
  <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comment"> </textarea>
        
      </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>   
     </form>

  </div> 
</section> 


<footer>
  <p class="p-2 text-center">
    @puligilla tejaranganath
  </p>
</footer> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/4.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>