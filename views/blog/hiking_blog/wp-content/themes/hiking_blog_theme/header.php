<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hiking_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Bootstrap Core CSS-->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons-->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>


  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<?php wp_head(); ?>


    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hiking_blog' ); ?></a>

<!--HEADER-->
        <header class="site-header" role="banner">

        <!-- NAVBAR-->

        <div class="navbar-wrapper">

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a href="#menu-toggle" class="btn btn-default, fa fa-bars fa-2x" aria-hidden="true" id="menu-toggle"></a>
                    </div><!-- navbar-header -->
                    <div class="logo">
                    <a class="navbar-brand" href="main.html"><img src="img/logo.png" alt="Hiking Site"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <div class="col-sm-12 btn-position">
                        <button class="btn btn-success btn-sm btn-block" id="login_button" data-toggle="modal" data-target="#myModal">
                            Login
                        </button>
                        </div>
                        </ul>
                    </div>
                </div><!-- container -->
            </div><!-- navbar -->
        </div><!-- navbar-wrapper-->        

        </header>

        <div id="wrapper">
                <div id="sidebar-wrapper">

                    <ul class="sidebar-nav">
                        <li class="sidebar-brand">
                            <a href="index.html">Hiking Site</a>
                        </li>
                        <li>
                            <a href="plantrip.html">Plan Trip</a>
                        </li>
                        <li>
                            <a href="history.html">History</a>
                        </li>
                        <li>
                            <a href="hikingadvice.html">Hiking Advice</a>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="views/createaccount.html">Create Account</a>
                        </li>
                    </ul>
                </div><!-- sidebar-wrapper -->
        <div id="page-content-wrapper">
