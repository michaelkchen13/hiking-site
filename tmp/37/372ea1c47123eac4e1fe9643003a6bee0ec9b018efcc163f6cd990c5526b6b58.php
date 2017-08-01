<?php

/* createaccount.html */
class __TwigTemplate_833d8080dbe7568bafbc9e24f2c7e6abc26f13f1082468d7e8e390a910563dd1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hiking Sites</title>

    <!-- Custom CSS StyleSheet -->
        <link href=\"views/assets/css/custom.css\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <!-- Bootstrap Core CSS-->
        <link href=\"views/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Bootstrap-select dropdown menus CSS -->
        <link href=\"views/assets/css/bootstrap-select.min.css\" rel=\"stylesheet\">

    <!-- FontAwesome Icons-->
        <link href=\"views/assets/css/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>


  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

    ";
        // line 41
        echo twig_include($this->env, $context, "header.html");
        echo " 
    ";
        // line 42
        echo twig_include($this->env, $context, "sidebar.html");
        echo " 


        <!--Feature Image-->
        <section class=\"feature-image feature-image-default\" data-type=\"background\" data-speed=\"2\">
            <h1 class=\"page-title\">Create Your Account</h1>
        </section>

        <!-- MAIN CONTENT -->
        <div class=\"container\">
            <div class=\"row\" id=\"primary\">
                <div id=\"content\" class=\"col-sm-12\">
                    
                <section class=\"main-content\">
                    <p class=\"lead\">Create your Hiking Locations account!</p>
                </section><!-- main-content -->

                    <form role=\"form\" class=\"clearfix\" action=\"../hiking-site/salt.php\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"sr-only\">Full Name</label>
                                    <input type=\"text\" class=\"form-control input-lg\" id=\"name\" name=\"name\" placeholder=\"Your Name\">
                                </div><!--form-group-->
                            </div><!-- col-sm-6 -->
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"sr-only\">Username</label>
                                    <input type=\"text\" class=\"form-control input-lg\" id=\"username\" name=\"username\" placeholder=\"Your Username\">
                                </div><!--form-group-->
                            </div><!-- col-sm-6 -->
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"password\" class=\"sr-only\">Password</label>
                                    <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"password\" placeholder=\"Your Password\">
                                </div><!--form-group-->
                            </div><!-- col-sm-6 -->
                            <div class=\"col-sm-6\">
                                <div class=\"form-group\">
                                    <label for=\"username\" class=\"sr-only\"></label>
                                    <input type=\"email\" class=\"form-control input-lg\" id=\"email\" name=\"email\" placeholder=\"Your Email\">
                                </div><!--form-group-->
                            </div>
                        </div><!-- row -->
                        <input type=\"submit\" class=\"btn btn-info btn-lg pull-right\" value=\"Create account &raquo;\">
                    </form>

                </div><!-- content -->
            </div><!-- row -->
        </div><!-- container -->



        <!-- BOOTSTRAP CORE JAVASCRIPT
             PLaced at the end of the document so the pages load faster!
        -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"assets/js/jquery-3.2.1.min.js\"></script>
        <script src=\"assets/js/main.js\"></script>

        <!-- Bootstrap-select(dropdown menus JS) -->
        <!--<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>-->
        <script src=\"assets/js/bootstrap-select.min.js\"></script>
        <script src=\"assets/js/bootstrap.min.js\"></script>

    ";
        // line 107
        echo twig_include($this->env, $context, "modal.html");
        echo "
    ";
        // line 108
        echo twig_include($this->env, $context, "footer.html");
        echo "
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "createaccount.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 108,  133 => 107,  65 => 42,  61 => 41,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "createaccount.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/createaccount.html");
    }
}
