<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Purewish Foundation Uganda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="shortcut icon" type="image/x-icon" href="images/pwfu.jpg">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    /* Style the tab */
    .tab {
      overflow: hidden;
      background-color: #ffffff;
      margin-bottom: 5px;
      display: flex;
      justify-content: center;
      padding-top: 3.5em;

    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      background-color: #322d38;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      color: white;
      padding: 14px 16px;
      transition: 0.3s;
      margin: 10px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: rgb(175, 9, 59);
      border-radius: 10px;

    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #f8f9fa;
      color: black;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border-top: none;

    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <!-- <img src="images/pwfu.jpg" class="logoedit" alt=""> -->
    <div class="nav-color container">
      <a class="navbar-brand componayname" href="index.php">Purewish</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="projects.php" class="nav-link">Projects</a></li>
          <li class="nav-item"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="team.php" class="nav-link">Team</a></li>


          <?php if(isset($_SESSION['login_user'])){ ?>
            <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $_SESSION['login_user']; ?></a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <?php  } else {?>
          <li class="nav-item"><a href="login.php" class="nav-link">Register / Login</a></li>

          <?php }?>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/cause4.jpg');" data-stellar-background-ratio="0.8">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <!-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Projects</span></p> -->
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Projects</h1>
        </div>
      </div>
    </div>
  </div>

  <body>
    <!-- Tab links -->
    <div class="tab">
      <h4><button class="tablinks active" onclick="openCity(event, 'school')">School Sponsorship</button></h4>
      <h4><button class="tablinks" onclick="openCity(event, 'youth')"> Peace Fund for Women </button></h4>
      <h4><button class="tablinks" onclick="openCity(event, 'voc')">Vocational Training Institute </button></h4>
      <h4><button class="tablinks" onclick="openCity(event, 'food')">Food For Life </button></h4>
      
    </div>

    <!-- Tab content -->

    <!-- school tab  -->
    <div id="school" class="tabcontent centeralign" style="display: block;">
      <section class="ftco-section">
        <div class="container">
          <h3 class="make-center">School Sponsorship</h3>
          <p class="make-center mb-1">School sponsorship project is the center of this organization, we believe every
            child deserves better. This project supports vulnerable children to quality education and scholastics.
            When we invest in children, we make the world a better place.</p>
            <a class="sponsorchildbtn" href="sponsored.php"> <button>Click to Sponsor a Child</button></a>
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/5.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Education for All</a></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/7.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Class Hours</a></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/8.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Scholastics materials</a></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <div id="youth" class="tabcontent centeralign mb-3">
      <h3 class="make-center mb-3" style="margin: 3em 0;">Key Messages</h3>
      <div class="container">
        <div class="row">
          <div class="col-sm mycols">
              <h4>Designed to empower women</h4>
            <!--<p>The intervention is expected to result in a strong and highly significant impact on labour market-->
            <!--  outcomes,-->
            <!--  economic aspirations and business knowledge of young people and women.</p>-->
            <p>The Peace Funds for Women (MPFW) comes to life through thoughtfully designed programs
             that propel inclusive economic growth for women and their communities worldwide. Shaped by the Sustainable Development Goals,
             these programs address some of the most pressing challenges women face today.</p>
         
         <p>Peace Fund for Women will support poor women in northern Uganda in starting businesses. These women will be issued collateral-free, low interest-bearing loans of US$50-US$250. PWFU will assist them in starting their businesses, building their assets and gaining important business skills so that they can generate income on a long-term basis, permanently improving their household living standards, and achieving financial
         independence for themselves and their families. </p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-sm mycols">
              <h4>Equality for economic growth</h4>
            <p>It's going to take the power and potential of youth, especially young women, to realize gender equality and sustainable economic development. That's why Purewish Foundation Uganda (PWFU) works with a network of global partners to create inclusive opportunities 
            for Women to improve their lives and advocate for change in their communities.</p>
          </div>
          <div class="col-sm mycols">
              <h4>Why women’s economic power?</h4>
            <p>Around the world, women still face discrimination, gender inequalities and barriers to meaningful work. Yet we know that when women are given the opportunity to thrive, everyone benefits. We still have a long way to go and Microfinance Peace Funds for women is a bold step forward.
            </p>
          </div>
          <!--<div class="col-sm mycols">-->
          <!--  <p>Supporting women entrepreneurs’ associations can improve advocacy and services for women entrepreneurs.-->
          <!--  </p>-->
          <!--</div>-->
          <!--<div class="col-sm mycols">-->
          <!--  <p>Gender and business training combined can have impact on women’s confidence and agency.-->
          <!--  </p>-->
          <!--</div>-->
        </div>
      </div>
      <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/im.jpg);width:350px;'"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Business Startup Training</a></h6>
                  <p>Training Women on Business Startup Skills and Saving before giving micro-loan.</p>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/cause5.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Women empowerment</a></h6>
                  <p>Equipping Women and enabling them open businesses that sustains them.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/ladierice.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h6><a href="#">Micro-Loans</a></h6>
                  <p>Providing micro-loans to empower women to setup business.</p>
                </div>
              </div>
            </div>
          </div><br><br><br>
            <div class="container">
              <h3 style="text-align:center;font-weight:bolder;margin-bottom:20px;">Women recieving micro loans for business startups</h3>
            </div>
          <!-- custome box -->
          <div class="big-box">
            <div class="img-box">
              <img src="images/7.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/3.png" alt="">
            </div>
            <div class="img-box">
              <img src="images/2.png" alt="">
            </div>
            
          </div>




           
          

        </div>
      </section>
    </div>
   
    <div id="voc" class="tabcontent centeralign">
    <div class="container">
    <div class="sec">
          <div class="logo">
            <img src="images/pure.jpg" style="width:300px;height:auto;margin-left:35%;"alt="">
          </div>
          <div class="hh"><br><br><br><br>
          <h3 class="make-center">Vocational Training Skills</h3>
      <p class="make-center">This project offers training to youths and women in the region with hands on skills like
        tailoring/cloth sewing, making shoes, <br> liquid detergent,
        craft bags and beads to self-sustainability.</p>
          </div>
        </div>
        </div>
      <!-- <h3 class="make-center">Vocational Training Skillsets</h3>
      <p class="make-center">This project offers training to youths and women in the region with hands on skills like
        tailoring/cloth sewing, making shoes, <br> liquid detergent,
        craft bags and beads to self-sustainability.</p> -->
        
      <div class="container">
        <div class="row">
          <div class="col-sm mycols">
            <p>Awareness training on gender issues for service providers can aid in strengthening their capacities to
              better serve the needs
              of both female and male entrepreneurs.
            </p>
          </div>
          <div class="col-sm mycols">
            <p>Supporting women entrepreneurs’ associations can improve advocacy and services for women entrepreneurs.
            </p>
          </div>
          <div class="col-sm mycols">
            <p>Gender and business training combined can have impact on women’s confidence and agency.
            </p>
          </div>
        </div>
      </div>
      


      <div id="needy" class="tabcontent centeralign">
        <div class="container">
          
            <h4>Northern and Eastern region of Uganda has been experiencing drought that has dried up  crops from the gardens, prices of essential commodities are too high, a peasant is not able to buy.
              Over 600 people have died from starvation, children and women(mothers) and people living with HIV infection are the most affected. People living with HIV infection are not able to afford daily food hence stopping them from taking antiretroviral drugs which is meant to fight HIV infection in their bodies.
              <p>Purewish foundation Uganda gives food to families and people living with HIV infection including child headed families.</p>
            </h4>

          </div>
        </div>

      

        
      <!-- <h3 class="make-center">Vocational Training Skillsets</h3>
      <p class="make-center">This project offers training to youths and women in the region with hands on skills like
        tailoring/cloth sewing, making shoes, <br> liquid detergent,
        craft bags and beads to self-sustainability.</p> -->
      <!-- <div class="container">
        <div class="row">
          <div class="col-sm mycols">
            <p>Awareness training on gender issues for service providers can aid in strengthening their capacities to
              better serve the needs
              of both female and male entrepreneurs.
            </p>
          </div>
          <div class="col-sm mycols">
            <p>Supporting women entrepreneurs’ associations can improve advocacy and services for women entrepreneurs.
            </p>
          </div>
          <div class="col-sm mycols">
            <p>Gender and business training combined can have impact on women’s confidence and agency.
            </p>
          </div>
        </div>
      </div> -->

      <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/1.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Vocational Skills Training</a></h3>
                  <p>Giving hands on skillset training is a great source of livelihood for the less advantaged</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/2.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Training in Progress</a></h3>
                  <p>School dropout girls and child mothers learning sewing clothes skills</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 ftco-animate">
              <div class="cause-entry">
                <a href="#" class="img" style="background-image: url(images/projects/4.jpg);"></a>
                <div class="text p-3 p-md-4">
                  <h3><a href="#">Skillsets Training</a></h3>
                  <p>Skilling for a better life for tomorrow and the future</p>
                </div>
              </div>
            </div>
            
          </div>

        </div>
      </section>

    </div>
    </div>

    <!-- footer partners  -->
    <div class="container"> <div class="center-image" style="margin-top: 2em;"> <img src="images/icons/partners.png" style="display: grid; justify-content: center; height: 100%; width: 100%;" width="1000px" alt=""> </div> </div>

    <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <p>Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization which was founded in 2014 and first registered as CBO with Lira district Local government in Uganda.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://twitter.com/Purewish2014" target="_blank"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/purewishfoundationuganda/" target="_blank"><span class="icon-facebook"></span></a></li>
              <!-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Site Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.php" class="py-2 d-block">Home</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Plot 29, Soroti Road, Lira City, Uganda</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 0394010416</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@pwfu.org</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | Made by <a href="https://kakebe.com/" target="_blank">KaKebe Technologies .Ltd</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>


   <div class="givingwayscript">
    <div class="donateiconcentre">
        <a  href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank">
      Donate  </a>
    </div>


  </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>


  </body>
  </section>

  <script>
    function openCity(evt, cityName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>