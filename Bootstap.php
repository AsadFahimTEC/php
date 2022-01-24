<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Problem.html">PROBLEM</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="CSS color.html">COLOR</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="CSS border.html">BORDER</a>
    </li>

    <div class="dropdown">
  	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    DROPDOWN BUTTON
  	</button>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="Problem.html">PROBLEM</a>
    	<a class="dropdown-item" href="CSS color.html">COLOR</a>
    	<a class="dropdown-item" href="CSS border.html">BORDER</a>
  	</div>
   </div>

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
<center>
      <img src="tiger.jpg" alt="Los Angeles" width="1100" height="500"> </center>
    </div>
    <div class="carousel-item">
      <center>
      <img src="deer.jpg" alt="Chicago" width="1100" height="500"> </center>
    </div>
    <div class="carousel-item">
<center>
      <img src="lionn.jpg" alt="New York" width="1100" height="500">
</center>
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


<div class="container">
<center>
  <h2>REGISTRATION FORM</h2> </center>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<div class="jumbotron text-center">
  <h1>MD.ASADUZZAMAN</h1>
  <p>Departmentment of CSE,TEC</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <img src = "C:\Users\TEC\Downloads\cameraman.jpg" height = "100px" width = "100px" /> 
    </div>
   <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
