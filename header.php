
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Off Canvas Reveal Menu Template for Bootstrap</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <!-- Bootstrap core CSS -->
    <link href="style.css" rel="stylesheet">
    <link href="css/jasny-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navmenu-reveal.css" rel="stylesheet">
    <!-- <link href="style.css" rel="stylesheet"> -->
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navmenu navmenu-default navmenu-fixed-left navmenu-inverse">
      <a class="navmenu-brand" href="index.php">Felix Ingenium</a>
      <ul class="nav navmenu-nav main-nav">
        <li  data-page="about.php"><a href="about.php">About Us</a></li>
        <li  data-page="speakers.php"><a href="speakers.php">Our Speakers</a></li>
        <li  data-page="blog.php"><a href="blog.php">The Stack</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
          <ul class="dropdown-menu navmenu-nav">
            <li  data-page="single-post.php"><a href="single-post.php">Single Post</a></li>
            <li  data-page="single-page.php"><a href="single-page.php">Single Page</a></li>
            <li  data-page="fullwidth-page.php"><a href="fullwidth-page.php">Full Width Page</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Speakers</li>
            <li  data-page="single-speaker-page.php"><a href="single-speaker-page.php">Single Speaker Page</a></li>
          </ul>
        </li>
      </ul>
    </div>

      <div class="canvas">
        <div class="navbar navbar-default navbar-fixed-top ">
          <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>