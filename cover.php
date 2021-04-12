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
  <h1> TOP EMPLOYEES OF THE MONTH </h1>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="portraits" src="images/RodFlavell.jpg"/><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2>Heading</h2>
      <p>And lastly this, the third column of representative placeholder content.</p>
      <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021-2027 BKRS, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="C:\Users\saaks\Documents\GitHub\EmployeePortal\assets\dist\js\bootstrap.bundle.min.js"></script>


  </body>
</html>
