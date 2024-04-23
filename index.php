<?php session_start(); ?>
<!doctype html>
<html>

<head>
  <title>FLEXIHIRE-Land Your Dream Job</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <!-- NAVBAR -->
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">FLEXIHIRE</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="jobs.php">Browse Jobs</a></li>
              <li><a href="jobseekers.php">Job-Sekeers</a></li>
            </ul>
            <ul class="nav navbar-nav pull-right">
              <?php if (isset($_SESSION['user'])) : ?>
                <li><a href="logout.php">Logout</a></li>
              <?php else : ?>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!--Corsule -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="img/1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:#53b7f4">Get Your Dream Job Now</h1>
            <p style="color:#24141e">Get Instant Acess To Today's Most Wonderful Hiring Tools-Post Jobs and Streamline Your Entire Hiring Process</p>
            <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Login</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="img/2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:#53b7f4">Hire Better Talent</h1>
            <p style="color:#24141e">Get The Coolest Employess for Your Company,Hire Fresh Talent or Experienced View Their Resume and Select The Best</p>
            <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign-Up</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="img/3.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1 style="color:#53b7f4">Search Thousands of Jobs</h1>
            <p style="color:#24141e">Build and Post Your Resume and Access Thousands of Pages of Career Info and Advice</p>
            <p><a class="btn btn-lg btn-primary" href="jobs.php" role="button">Browse Jobs</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- START THE FEATURETTES -->

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Looking for Job <span class="text-muted">This'll blow your mind.</span></h2>
      <p class="lead">

Welcome to FLEXIHIRE Freelance Services! 🚀
Partner with an experienced professional who's dedicated to making your projects shine. Let's turn your ideas into reality together!
</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="img/5.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 col-md-push-5">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Tired of searching for reliable freelancers? Look no further! I deliver outstanding results on time, every time. Let me help you achieve your goals.</p>
    </div>
    <div class="col-md-5 col-md-pull-7">
      <img class="featurette-image img-responsive center-block" src="img/6.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">You Got Your Dream Job</p>
        <h4>Your business with the perfect blend of creativity and technical know-how. Explore my range of services and let's collaborate on your next big project!</h4>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="img/4.jpg" alt="Generic placeholder image">
    </div>
  </div>

  <!-- <section  id="contact-section">
  <div class="contact-container">
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <p>Leave us a message:</p>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="afghanistan">Afghanistan</option>
          <option value="ethiopia">Ethiopia</option>
          <option value="kenya">Kenya</option>
          <option value="russia">Russia</option>
          <option value="england">England</option>
          <option value="france">France</option>
          <option value="croatia">Croatia</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="row">
      <div class="map-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.8032329216016!2d39.29233705251141!3d8.56884312884593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b1fe4c294e6cb%3A0x6b86d6a89f24215c!2sAdama%20Science%20And%20Technology%20University%20%2CASTU%2C%20Adama%20%2CEthiopia!5e0!3m2!1sen!2set!4v1679946141450!5m2!1sen!2set" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <Style>
      iframe {
        flex-direction: row;
        width: 100%;
        height: 280px;
      }
    </style>
  </div>
</section> -->
   <hr class="featurette-divider">
   
   <footer class="footer-distributed">
    
    <div class="footer-left">
      <h3>G4 <span>Developer</span></h3>
  
      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
        |
        <a href="#">Post Job</a>
      </p>
  
      <p class="footer-company-name">Copyright © 2023 <strong>SagarDeveloper</strong> All rights reserved</p>
    </div>
  
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Ethiopia</span>
          Adama</p>
      </div>
  
      <div>
        <i class="fa fa-phone"></i>
        <p>+2519 11-306594</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        <strong>FLEXIHIRE</strong> is a Youtube channel where you can find more creative CSS Animations
        and
        Effects along with
        HTML, JavaScript and Projects using C/C++.
      </p>
      <div class="footer-icons">
        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
        <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
        <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>
  <style>
    footer {
    position: bottom;
    bottom: 0;
  }
  
  @media (max-height:800px) {
    footer {
      position: static;
    }
  
    header {
      padding-top: 40px;
    }
  }
  
  .footer-distributed {
    background-color: #9ccfdc;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
  }
  
  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
  }
  
  /* Footer left */
  
  .footer-distributed .footer-left {
    width: 30%;
  }
  
  .footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
  }
  
  
  .footer-distributed h3 span {
    color: #e0ac1c;
  }
  
  /* Footer links */
  
  .footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
  }
  
  .footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
  }
  
  .footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
  }
  
  /* Footer Center */
  
  .footer-distributed .footer-center {
    width: 35%;
  }
  
  .footer-distributed .footer-center i {
    background-color: #9ccfdc;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
  }
  
  .footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
  }
  
  .footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
  }
  
  .footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
  }
  
  .footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
  }
  
  /* Footer Right */
  
  .footer-distributed .footer-right {
    width: 30%;
  }
  
  .footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
  }
  
  .footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  .footer-distributed .footer-icons {
    margin-top: 25px;
  }
  
  .footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
  }
  
  .footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
  }
  
  .footer-links a:hover {
    color: #3F71EA;
  }
  
  @media (max-width: 880px) {
  
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
      display: block;
      width: 100%;
      margin-bottom: 40px;
      text-align: center;
    }
  
    .footer-distributed .footer-center i {
      margin-left: 0;
    }
  }
  </style>
         <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')         </script> 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script> -->
	</body>
</html>  