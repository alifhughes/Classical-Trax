    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/classical_trax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/classicaltrax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://soundcloud.com/classicaltrax">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-soundcloud fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/classicaltrax/">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://classicaltrax.tumblr.com/">
                                <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-tumblr fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <?php 

                        // Define location for header menu items
                        $menuItems = array(
                            'theme_location' => 'footer'
                        );

                        // pass in the location to nav elements
                        wp_nav_menu($menuItems);

                    ?>
                    <p class="copyright text-muted"> Copyright &copy; <?php echo bloginfo('name') . ' '; echo date('Y'); ?> </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/clean-blog.min.js"></script>

    <?php wp_footer(); ?>
</body>

</html>
