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
                    <p><a href="/"><img src="img/logo.png" alt="Hiking Website"></a></p>
                </div><!-- end col -->
                <div class="col-sm-6">
                    <nav>
                        <ul class="list-unstyled list-inline">                  
                            <li><a href="plantrip.html">Plan Trip</a></li>
                            <li><a href="blog.html">History</a></li>
                            <li><a href="hikingadvice.html">Hiking Advice</a></li>
                            <li><a href="blog.html">Blog</a></li>                           
                            <li class="signup-link"><a href="createaccount.html">Create Account</a></li>
                        </ul>
                    </nav>
                </div><!-- end col -->
                    <div class="col-sm-3">
                        <p class="pull-right">&copy; 2017 Michael Chen</p>
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
                        <p>Enter your Email and password.</p>

                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label class="sr-only" for="login-name">Email</label>
                                <input type="text" class="form-control" id="login-name" placeholder="Email">
                            </div><!-- form-group -->
                            <div class="form-group">
                                <label class="sr-only" for="login-email">Password</label>
                                <input type="text" class="form-control" id="login-email" placeholder="Password">
                            </div><!-- form-group -->

                            <input type="submit" class="btn btn-danger" value="Login">
                        </form>

                        <hr>

                        <p><small>Provide your email and password</small></p>
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
