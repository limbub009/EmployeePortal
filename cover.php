<?php
session_start();
error_reporting(0);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Employee Portal FDM Cover Page</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/"> -->



    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body>

<header>
  <?php include('navbar.php'); ?>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="https://www.commercialdesignindia.com/public/styles/full_img_crop/public/images/2020/04/17/Northern-Trust.jpg?itok=OiaRzBgN" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Bringing People And Technology Together</h1>
            <p>We recruit, train and deploy IT and business professionals to <br>
              work with our clients around the world, creating careers and bridging the digital skills gap.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.youtube.com/watch?v=JGtuCChg-dg">Watch Video</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://blog.visor.com/wp-content/uploads/2017/11/96ce48b9d.jpg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption">
            <h1>Our People</h1>
            <p>Our organisation is truly diverse in origin and outlook, bringing <br>
              together the best people from a variety of backgrounds and a wide range <br>
              of experiences. Our people embody the FDM values and work strongly together, <br>
              always striving for excellence.</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.fdmgroup.com/">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.pexels.com/photos/380769/pexels-photo-380769.jpeg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Career Advice</h1>
            <h2> Technology Consultant</h2>
            <p>Technology Consultants play a vital role in the way businesses transform <br>
              their use of technology. A Tech Consultant has the opportunity to get involved <br>
              in a range of exciting projects to help businesses keep pace with the ever changing <br>
              world of technology..</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.fdmgroup.com/what-is-a-technology-consultant/">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/originals/c2/e9/04/c2e9040c86922de7b2724275ff0635a2.jpg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Important Announcements</h1>
            <p>Find about FDM's Coronavirus (COVID-19) preparations >> </p>
            <p><a class="btn btn-lg btn-primary" href="https://www.fdmgroup.com/how-fdm-is-responding-to-coronavirus-covid-19/">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">
  <h1> PEOPLE YOU NEED TO LOOK OUT FOR UWU</h1>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="180" height="180" src="https://www.fdmgroup.com/wp-content/uploads/david-lister-1-500x500.jpg"/><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>David Lister</h2>
        <p>Non-Executive Chairman</p>
        <p><a class="btn btn-secondary" target="_blank" href="https://www.fdmgroup.com/investors/our-board-of-directors/#David%20Lister">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="180" height="180" src="images/RodFlavell.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>Rod Flavell</h2>
        <p>Chief Executive Officer</p>
        <p><a class="btn btn-secondary" target="_blank" href="https://www.fdmgroup.com/investors/our-board-of-directors/#Rod%20Flavell">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="180" height="180" src="https://www.fdmgroup.com/wp-content/uploads/sheila-flavell-1-1-500x500.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2>Sheila Flavell CBE</h2>
        <p>Chief Operating Officer</p>
        <p><a class="btn btn-secondary" target="_blank" href="https://www.fdmgroup.com/investors/our-board-of-directors/#Sheila%20Flavell%20CBE">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="180" height="180" src="https://www.fdmgroup.com/wp-content/uploads/andy-brown-2-500x500.jpg"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
      <h2>Andy Brown</h2>
      <p>Chief Commercial Officer</p>
      <p><a class="btn btn-secondary" href="https://www.fdmgroup.com/investors/our-board-of-directors/#Andy%20Brown" target="_blank" >View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p id="footer" style="padding-top: 5%;">&copy; 2021-2027 BKRS, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="C:\Users\saaks\Documents\GitHub\EmployeePortal\assets\dist\js\bootstrap.bundle.min.js"></script>


  </body>
</html>
