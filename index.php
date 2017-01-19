<!DOCTYPE html>
<html>

 <head>
     <link rel="icon" type="image/ico" href="favicon.ico"/>

   <title>
    Clone-Kart Home
   </title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
 </head>

 <body>
   
   <div class="jumbotron text-left">
    
    <p class="lead"><a href="index.php"><img src="images/cart.png" class="img-circle" height="42" width="42"></img></a>Clone-Kart</p>	
	&nbsp;
    <input type="text" placeholder="Search for Anything"/>
    &nbsp;&nbsp;&nbsp;
	<button class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
   </div>
   
   <nav class="navbar navbar-default">
    <div class="navbar-header"></div>
	<ul class="nav navbar-nav">
	  <li><a href="men/">Men</a></li>
          <li><a href="women/">Women</a></li>
          <li><a href="baby/">Baby and Kids</a></li>
          <li><a href="electronics/">Electronics</a></li>
          <li><a href="home/">Home Appliances</a></li>
          <li><a href="books/">Books and More</a></li>
          <li><a href="offers/">Offers</a></li>
	</ul>
   </nav>
   
   <div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/1.jpg" alt="offer1" width="460" height="345">
        </div>

        <div class="item">
          <img src="images/2.jpg" alt="offer2" width="460" height="345">
        </div>

        <div class="item">
          <img src="images/3.jpg" alt="offer3" width="460" height="345">
        </div>

        <div class="item">
          <img src="images/4.jpg" alt="offer4" width="460" height="345">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
   
   <br><br>
   <div class="jumbotron text-center">
   <h4>Clone-Kart</h4>
   <h5>Copyright &copy; 2017</h5>
   </div>
 </body>
</html>