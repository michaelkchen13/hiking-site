<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hiking_Blog
 */

?>

<?php wp_footer(); ?>

<!-- FOOTER-->
        <footer>
            <div class="container">
                <div class="col-sm-3">
                    <p><a href="http://localhost:8888/"><img src="img/logo.png" alt="Hiking Website"></a></p>
                </div><!-- end col -->
                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">                  
                            <li><a href="http://localhost:8888/?p=plantrip">Plan Trip</a></li>
                            <li><a href="http://localhost:8888/?p=history">History</a></li>
                            <li><a href="http://localhost:8888/?p=advice">Hiking Advice</a></li>
                            <li><a href="http://localhost:8888/views/blog">Blog</a></li>                           
                            <li class="signup-link"><a href="http://localhost:8888/?p=create_account">Create Account</a></li>
                        </ul>
                    </nav>
                </div><!-- end col -->
                    <div class="col-sm-3">
                        <p class="pull-right">&copy; 2017</p>
                    </div><!-- end col -->
            </div><!-- container -->
        </footer>

        <!-- MODAL-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModal:abel"><i class="fa fa-envelope"></i> Login</h4>
                    </div><!-- modal header -->

                    <div class="modal-body">
                        <br>
                        <form class="form-inline" name="loginform" id="loginform" action="/views/blog/login/" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="user_login">Username or E-mail</label>
                                <input type="text" name="log" id="user_login" class="input" placeholder="username" value="" size="20">
                            </div><!-- form-group -->
                            <div class="form-group">
                                <label class="sr-only" for="user_pass">Password</label>
                                <input type="password" name="pwd" id="user_pass" class="input" placeholder="password" value="" size="20" autocomplete="off">
                            </div><!-- form-group -->

                            <input type="hidden" name="_wp_original_http_referer" value="http://localhost:8888/views/blog/login/">
                            <div class="tml-rememberme-submit-wrap">
                                <p class="tml-rememberme-wrap">
                                    <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                                    Remember Me
                                </p>

                                <p class="tml-submit-wrap" style="text-align: right;">
                                    <input type="submit" name="wp-submit" id="wp-submit" value="Log In">
                                    <input type="hidden" name="redirect_to" value="http://localhost:8888/views/blog/wp-admin/">
                                    <input type="hidden" name="instance" value="">
                                    <input type="hidden" name="action" value="login">
                                </p>
                            </div>
                        </form>
                    </div><!-- modal body -->
                </div><!-- modal content -->
            </div><!-- modal dialog -->
        </div><!-- Modal -->


        <!-- BOOTSTRAP CORE JAVASCRIPT
             PLaced at the end of the document so the pages load faster!
        -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

        <!-- Bootstrap-select(dropdown menus JS) -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script src="views/assets/js/bootstrap.min.js"></script> -->

        <!--sidebar toggle-->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
                console.log("working");
            });

            $(".dropdown").click(function(e) {
                $("#map_dropdown").toggleClass( 'dropdown dropdown open')
            });
        </script>

</body>
</html>
