<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/css/main.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700italic,300,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<div class="content__holder">
    <!-- subheader with search -->
    <div class="subheader <?php
            if ( is_home() ) {
                // homepage class
                echo "subheader--homepage";
            } else {
        }
        ?>">
        <!-- Second navbar for sign in -->
        <nav class="navbar navbar-inverse main__menu">
            <div class="container ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-2">

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
            			<nav id="site-navigation" class="main-navigation" role="navigation">
            				<?php
            					// Primary navigation menu.
            					wp_nav_menu( array(
            						'menu_class'     => 'nav navbar-nav main__menu--items',
            						'theme_location' => 'primary',
            					) );
            				?>
            			</nav><!-- .main-navigation -->
            		<?php endif; ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="collapsed" data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
                        </li>
                    </ul>

                    <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
                        <form class="navbar-form navbar-right form-inline" role="form" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Loggin" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required />
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <div class="container ">
            <div class="row">
                <div class="row--gfx"></div>
                <div class="row--gfx--lower"></div>
                <div class="col-md-12">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/img/logo-main.svg" alt="Logo" class="logo pull-right" />
                </div>
            </div>
        </div>
    </div><!-- /.subheader with search -->
