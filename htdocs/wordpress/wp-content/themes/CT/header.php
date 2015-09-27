<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?> >

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Matt">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<!-- Facebook widget -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Twitter widget -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- Navbar icons styling-->
<style>
.navbar-icons{

}
</style>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="nav navbar-nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
            
                    <?php 


                        // Get the location of the navigation menus
                        $locations = get_nav_menu_locations();

                        // Get the menu object of the header menu (primary)
                        $menu = wp_get_nav_menu_object($locations['primary'] );

                        // Get the menu items from this object
                        $menuItems = wp_get_nav_menu_items($menu->term_id);                      

                        $menuList = 
                        '<ul class="navbar-nav" style="list-style-type:none; padding-top:15px" id="menu-' . $menuName . '">
                        <li>
                            <a class="socialIcon" style="padding:3px;" href="https://twitter.com/classical_trax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="socialIcon" style="padding:3px;" href="https://www.facebook.com/classicaltrax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="socialIcon" style="padding:3px;" href="https://soundcloud.com/classicaltrax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-soundcloud fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="socialIcon" style="padding:3px;"href="https://instagram.com/classicaltrax/">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li style="padding-right:150px;">
                            <a class="socialIcon" style="padding:3px;" href="http://classicaltrax.tumblr.com/">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>';
                        // Initialise unordered list string for the menu
                        //$menuList = '<ul class="nav navbar-nav navbar-right" id="menu-' . $menuName . '">';
                        
                        // Get the home url
                        $homeUrl =  home_url();

                        // Append the home list item to the menu
                        $menuList .= '<li><a href="'. $homeUrl .'">Home</a></li>';

                        // Iterate through each menu item 
                        foreach ( (array) $menuItems as $key => $menuItem ) {      

                            // Get the menu title
                            $title = $menuItem->title;

                            // Get the menu URL
                            $url = $menuItem->url;

                            // Append the list item to the menu 
                            $menuList .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                        }


                        // Close the menu list
                        $menuList .= '</ul>';

                        // Echo the menu list as complete string back to the HTML
                        echo $menuList;

                    ?> 

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo bloginfo('template_directory')?>/img/CT-Header.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><i>CLASSICAL TRAX</i></h1>
                        <hr class="small">

                    </div>
                </div>
            </div>
        </div>
    </header>
