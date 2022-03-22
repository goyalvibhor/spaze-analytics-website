<?php

define('TITLE', "Login");
include '../assets/layouts/header.php';
check_logged_out();

?>
   <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WSJT49K');</script>
  <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Data Analytics and Spazetech Solutions</title>
    <meta name="description" content="Spaze Analytics have always done things in different ways. Our work culture create our workforce somewhere different from other organization cultures.">
<meta name="keywords" content="E-commerce Analytics use cases, E-commerce services, E-commerce Analytics tools, E-commerce Analytics Software, E Commerce Data Analysis, E commerce Data Analytics Projects, E commerce analysis report, E commerce analytics of data, e commerce industry analysis pdf, e commerce analytics data analysis, web analytics for ecommerce, ecommerce customer analytics, ecommerce analytics from data to decisions, data analytics in e-commerce">
<meta name="image" content="https://spazeanalytics.com/img/icon.png">
<!-- Schema.org for Google -->
<meta itemprop="name" content="Spaze Analytics">
<meta itemprop="description" content="Spaze Analytics have always done things in different ways. Our work culture create our workforce somewhere different from other organization cultures.">
<meta itemprop="image" content="https://spazeanalytics.com/img/icon.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="Spaze Analytics">
<meta name="og:description" content="Spaze Analytics have always done things in different ways. Our work culture create our workforce somewhere different from other organization cultures.">
<meta name="og:type" content="website">
<meta name="og:image" content="https://spazeanalytics.com/img/icon.png">
<meta name="og:url" content="https://spazeanalytics.com/index.html">
<meta name="og:site_name" content="Spaze Analytics">
<meta name="og:locale" content="en_US">
<meta name="og:video" content="https://youtu.be/Z1R5nSHcOKQ">
    <link
      rel="icon"
      type="image/x-icon"
      href="../../img/favicon_spazeanalytics.png"
    />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/bootstrap.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="canonical" href="https://www.spazeanalytics.com/login-signup/reset-password/" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudfare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css"
    />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/slick-theme.css" />
    <link rel="stylesheet" href="../../css/slick.css" />


<link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/fontawesome-5.12.0/css/all.min.css">

<!-- Custom styles -->
<link rel="stylesheet" href="../assets/css/app.css">
<link rel="stylesheet" href="../../custom.css" >
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C5JQX06RLM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C5JQX06RLM');
</script>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="../../img/icon.png" alt="" style="width: 20%" />Spaze Analytics</a
        >
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="../../index.html" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="../../about.html" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="../../blog.html" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="../../contact.html" class="nav-link">Contact</a>
            </li>
             <li>
              <a href="./login-signup/register/index.php" class="btn btn-light btn-md">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
                <?php if (isset($_GET['selector']) && isset($_GET['validator'])) { ?>
                    <form class="form-auth" action="./includes/reset.inc.php" method="post">
                        <?php
                            insert_csrf_token();
                            $selector = $_GET['selector'];
                            $validator = $_GET['validator'];
                        ?>
                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                        <div class="text-center">
                            <img class="mb-1" src="../../img/icon.png" alt="" width="130" height="130">
                        </div>
                        <h6 class="h5 mb-3 font-weight-normal text-muted text-center">Reset password</h6>
                        <div class="text-center mb-3">
                            <small class="text-success font-weight-bold">
                                <?php
                                    if (isset($_SESSION['STATUS']['resetsubmit']))
                                        echo $_SESSION['STATUS']['resetsubmit'];

                                ?>
                            </small>
                        </div>
                        <div class="text-center mb-3">
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['passworderror']))
                                        echo $_SESSION['ERRORS']['passworderror'];
                                ?>
                            </sub>
                        </div>
                        <div class=" form-group">
                            <input type="password" id="newpassword" name="newpassword" class="form-control" placeholder="New Password" autocomplete="new-password">
                        </div>
                        <div class=" form-group mb-5">
                            <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" autocomplete="new-password">
                        </div>
                        <button class="btn btn-lg btn-primary btn-block mb-5 mt-4" type="submit" value="resetsubmit" name="resetsubmit">
                            Reset Password
                        </button>
                        <p class="mt-4 mb-3 text-muted text-center">
                            <a href="https://github.com/msaad1999/PHP-Login-System" target="_blank">
                                Login System
                            </a> | 
                            <a href="https://github.com/msaad1999/PHP-Login-System/blob/master/LICENSE" target="_blank">
                                MIT License
                            </a>
                        </p>
                    </form>
                <?php } else { ?>
                    <form class="form-auth" action="includes/sendtoken.inc.php" method="post">
                        <?php insert_csrf_token(); ?>
                        <div class="text-center">
                            <img class="mb-1" src="../../img/icon.png" alt="" width="130" height="130">
                        </div>
                        <h6 class="h5 mb-3 font-weight-normal text-muted text-center">Reset password</h6>
                        <div class="text-center mb-3">
                            <small class="text-success font-weight-bold">
                                <?php
                                    if (isset($_SESSION['STATUS']['resentsend']))
                                        echo $_SESSION['STATUS']['resentsend'];
                                ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
                            <sub class="text-danger">
                                <?php
                                    if (isset($_SESSION['ERRORS']['emailerror']))
                                        echo $_SESSION['ERRORS']['emailerror'];
                                ?>
                            </sub>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block mb-5 mt-4" type="submit" value="resentsend" name="resentsend">
                            Send Password Reset Link
                        </button>
                        <p class="mt-3 text-muted text-center"><a href="../login/">Back to Login</a></p>
                    </form>
                <?php } ?>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>

    <footer id="main-footer" class="text-center p-4">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Copyright Spaze Analytics&copy; 2022</p>
          </div>
        </div>
      </div>
      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "WebSite",
          "name": "Spazeanalytics",
          "url": "https://spazeanalytics.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://spazeanalytics.com/index.html{search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      </script>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="js/main.js"></script>
  </body>