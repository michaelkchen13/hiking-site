<?php

/* footer.html */
class __TwigTemplate_0b2c95a83873d0b3ab03f0770e79a2784fc98121dce98a0311e722ce7d58634e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- FOOTER-->
        <footer>
            <div class=\"container\">
                <div class=\"col-sm-3\">
                    <p><a href=\"/\"><img src=\"img/logo.png\" alt=\"Hiking Website\"></a></p>
                </div><!-- end col -->
                <div class=\"col-sm-6\">
                    <nav>
                        <ul class=\"list-unstyled list-inline\">                  
                            <li><a href=\"plantrip.html\">Plan Trip</a></li>
                            <li><a href=\"blog.html\">History</a></li>
                            <li><a href=\"hikingadvice.html\">Hiking Advice</a></li>
                            <li><a href=\"blog.html\">Blog</a></li>                           
                            <li class=\"signup-link\"><a href=\"createaccount.html\">Create Account</a></li>
                        </ul>
                    </nav>
                </div><!-- end col -->
                    <div class=\"col-sm-3\">
                        <p class=\"pull-right\">&copy; 2017 Michael Chen</p>
                    </div><!-- end col -->
            </div><!-- container -->
        </footer>

        <!-- BOOTSTRAP CORE JAVASCRIPT
             PLaced at the end of the document so the pages load faster!
        -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"views/assets/js/jquery-3.2.1.min.js\"></script>
        <script src=\"views/assets/js/main.js\"></script>

        <!-- Bootstrap-select(dropdown menus JS) -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <!-- <script src=\"views/assets/js/bootstrap.min.js\"></script> -->


        
        <!--sidebar toggle-->
        <script>
            \$(\"#menu-toggle\").click(function(e) {
                e.preventDefault();
                \$(\"#wrapper\").toggleClass(\"toggled\");
            });
            \$(\".dropdown\").click(function(e) {
                \$(\"#map_dropdown\").toggleClass( 'dropdown dropdown open')
            });
        </script>
";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/footer.html");
    }
}
