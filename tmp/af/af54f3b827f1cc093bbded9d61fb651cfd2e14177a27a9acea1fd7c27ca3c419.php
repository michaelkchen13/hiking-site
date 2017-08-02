<?php

/* main.html */
class __TwigTemplate_5afdf1123434150707fcfdd9c50e78a39ea1cca6c65d82428ba3425b5b744f5e extends Twig_Template
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

    <title>Hiking Sites</title>

    <!-- Custom CSS StyleSheet -->
        <link href=\"views/assets/css/custom.css\" rel=\"stylesheet\">

    <!-- Bootstrap Core CSS-->
        <link href=\"views/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

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
        // line 40
        echo twig_include($this->env, $context, "header.html");
        echo " 
    ";
        // line 41
        echo twig_include($this->env, $context, "sidebar.html");
        echo " 
    <!-- <h1>";
        // line 42
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1> -->
<div id=\"page-content-wrapper\">
    <div id= \"ipad_background\">

    ";
        // line 46
        echo twig_include($this->env, $context, "main-content.html");
        echo "

    </div><!-- ipad background -->
</div><!-- page-content-wrapper -->
    ";
        // line 50
        echo twig_include($this->env, $context, "modal.html");
        echo "
    ";
        // line 51
        echo twig_include($this->env, $context, "footer.html");
        echo "    
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  82 => 50,  75 => 46,  68 => 42,  64 => 41,  60 => 40,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/main.html");
    }
}
