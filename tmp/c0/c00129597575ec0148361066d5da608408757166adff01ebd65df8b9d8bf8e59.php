<?php

/* location-info.php */
class __TwigTemplate_2019c678d4616ad7a723fe071bb1dad086f23c6cc0864f0adf09d995066ace78 extends Twig_Template
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
    <title>Hiking Site Locations Info</title>

    <!-- Bootstrap -->
    <!-- Bootstrap Core CSS-->
    <link href=\"views/assets/css/custom.css\" rel=\"stylesheet\">
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
    ";
        // line 27
        echo twig_include($this->env, $context, "header.html");
        echo "

    <div class=\"container\">
        <h2>Vertical (basic) form</h2>
        <form method=\"post\" action=\"\">
            <div class=\"form-group\">
                <label for=\"lat\">Latitude:</label>
                <input type=\"text\" class=\"form-control\" id=\"lat\" placeholder=\"Enter latitude\" name=\"lat\">
            </div>
            <div class=\"form-group\">
                <label for=\"long\">Longitude:</label>
                <input type=\"text\" class=\"form-control\" id=\"lon\" placeholder=\"Enter longitude\" name=\"lon\">
            </div>
            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
        </form>
    </div>

    <div id=\"page-content-wrapper\">
        <div class=\"container\" style=\"height: 2000px;\">
            <div id=\"info\" style=\"width: 900px; \">

                ";
        // line 48
        $context["arr"] = array("X-Mashape-Key" => "2DKorc206ImshrwHFboBUJeyCw2qp1qrVFIjsnsbLRcwF0pNb4", "Accept" => "text/plain");
        // line 50
        echo "                ";
        $context["url"] = (((("https://trailapi-trailapi.p.mashape.com/?lat=" . ($context["lat"] ?? null)) . "&lon=") . ($context["lon"] ?? null)) . "&q[activities_activity_type_name_eq]=hiking");
        // line 51
        echo "                ";
        $context["response"] = call_user_func_array($this->env->getFunction('getLocInfo')->getCallable(), array(($context["arr"] ?? null), ($context["url"] ?? null)));
        // line 52
        echo "
                <!--";
        // line 53
        $context["url"] = "https://trailapi-trailapi.p.mashape.com/?lat=37.7&lon=-122.4&q[activities_activity_type_name_eq]=hiking";
        // line 54
        echo "                ";
        $context["response"] = call_user_func_array($this->env->getFunction('getLocInfo')->getCallable(), array(($context["arr"] ?? null), ($context["url"] ?? null)));
        echo "-->

                <!-- deleted string: &q[city_cont]=San+Francisco&q[country_cont]=United+States&q[state_cont]=California&radius=25 -->


            </div>

        </div> <!-- container -->

    </div>


    ";
        // line 66
        echo twig_include($this->env, $context, "footer.html");
        echo "


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "location-info.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 66,  84 => 54,  82 => 53,  79 => 52,  76 => 51,  73 => 50,  71 => 48,  47 => 27,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "location-info.php", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/location-info.php");
    }
}
