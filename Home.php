



<?php (include 'header.php');?>
<div class="container-fluid" style="padding-right: 0px;padding-left: 0px; font-size:20px">
	


<form class="example" action="/action_page.php" style="margin:auto;max-width:494px">
 <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  
  <br>
  
     
 
<div class="tab">
  
   <button><a href= "sh.html" >New Arrival</a></button>
  <button class="tablinks" onclick="openCity(event, 'Pre Order')">Pre Order</button>
  <button class="tablinks" onclick="openCity(event, 'Best OFFERS')">Best Offers</button>
  <button class="tablinks" onclick="openCity(event, 'Best Sellers')">Best Sellers</button>
  <button class="tablinks" onclick="openCity(event, 'TextBooks')">TextBooks</button>
  <button class="tablinks" onclick="openCity(event, 'Award Winners')">Award Winners</button>
  <button class="tablinks" onclick="openCity(event, 'Featured Authors')">Featured Authors</button>
  
  
  
</div>

  <br>
  <!--<div class="sidenav">
  <a href="#about">Architecture</a>
  <a href="#services">Arts And Photography</a>
  <a href="#clients">Biographies & Memoirs</a>
  <a href="#contact">Body,Mind & Spirit</a>
  <a href="#about">Business And Economy</a>
  <a href="#services">Children And Teens</a>
  <a href="#clients">Computer & Internet</a>
  <a href="#contact">Cookery,Food & Wine</a>
  <a href="">Dictionaries&Laungauge</a>
  <a href="">English Laungauge Teaching</a>
  <a href="">Environment & Geography</a>
  <a href="">Fiction</a>
  <a href="">History & Humanities</a>
  <a href="">Law</a>
  <a href="">Lifestyle</a>
  <a href="">Literature & Literary studies</a>
  <a href="">Medicine</a>
  <a href="">Music</a>
  </div>-->
 &nbsp; &nbsp;
  

<div id="myCarousel" class="carousel slide " data-ride="carousel"  style="width:  1365px; margin: 4px auto"  >
    <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="c1.jpg" alt="im" style="width:100%;">
      </div>

      <div class="item">
        <img src="bk5.jpg" alt="ad" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="c3.jpg" alt="nf" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <?php
 include('footer.php');
 ?>
