<?php

/* login.html */
class __TwigTemplate_58de7035108afe74d40f865bee77b6c3724dd0577462fcae7a365ada18baa337 extends Twig_Template
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

<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<link rel=\"icon\" href=\"img/favicon.ico\">

\t\t<title>Sign In | Hiking</title>

\t\t<!-- Bootstrap Core CSS-->
\t\t<link href=\"views/assets/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<!-- FontAwesome Icons-->
\t\t<link href=\"views/assets/css/font-awesome/css/font-awesome.css\" rel=\"stylesheet\">

\t\t<!-- Custom CSS StyleSheet -->
\t\t<link href=\"views/assets/css/custom.css\" rel=\"stylesheet\">

\t\t<!--Google Fonts-->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Raleway:400,700\" rel=\"stylesheet\">

\t<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
\t<!--[if lt IE 9]>
\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->

\t</head>


\t<body class=\"full-width contact\">
\t\t<!--HEADER-->
\t\t<header class=\"site-header\" role=\"banner\">

\t\t<!-- NAVBAR-->
\t\t<div class=\"navbar-wrapper\">

\t\t\t<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>

\t\t\t\t\t</div><!-- navbar-header -->
\t\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li><a href=\"?p=main.html\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"?p=blog.html\">Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"?p=resources.html\">Resources</a></li>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"login.html\">Login</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t</div><!-- container -->
\t\t\t</div><!-- navbar -->
\t\t</div><!-- navbar-wrapper-->

\t\t</header>


\t\t<!--Feature Image-->
\t\t<section class=\"feature-image feature-image-default\" data-type=\"background\" data-speed=\"2\">
\t\t\t<h1 class=\"page-title\">Login</h1>
\t\t</section>


\t\t<!-- MAIN CONTENT -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\" id=\"primary\">
\t\t\t\t<div id=\"content\" class=\"col-sm-12\">
\t\t\t\t\t
\t\t\t\t<section class=\"main-content\">
\t\t\t\t\t<p class=\"lead\">";
        // line 79
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t</section><!-- main-content -->

\t\t\t\t\t<form role=\"form\" class=\"clearfix\" action=\"../hiking-site/login.php\" method=\"post\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"sr-only\">Username</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-lg\" name=\"username\" id=\"username\" placeholder=\"Your username\">
\t\t\t\t\t\t\t\t</div><!--form-group-->
\t\t\t\t\t\t\t</div><!-- col-sm-6 -->

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"password\" class=\"sr-only\">Password</label>
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control input-lg\" name=\"password\" id=\"password\" placeholder=\"Your password\">
\t\t\t\t\t\t\t\t</div><!--form-group-->
\t\t\t\t\t\t\t</div><!-- col-sm-6 -->
\t\t\t\t\t\t\t</div><!-- col-sm-6 -->
\t\t\t\t\t\t</div><!-- row -->
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info btn-lg pull-right\" value=\"Login &raquo;\">
\t\t\t\t\t</form>

\t\t\t\t</div><!-- content -->
\t\t\t</div><!-- row -->
\t\t</div><!-- container -->


\t\t<!-- FOOTER-->
\t\t";
        // line 108
        echo twig_include($this->env, $context, "footer.html");
        echo "


\t\t<!-- MODAL-->
\t\t<div class=\"modal fade\" id=\"myModal\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">

\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModal:abel\"><i class=\"fa fa-envelope\"></i> Subscribe to our mailing list</h4>
\t\t\t\t\t</div><!-- modal header -->

\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>Simple enter your name and email!</p>

\t\t\t\t\t\t<form class=\"form-inline\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"subscribe-name\">Your first name</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subscribe-name\" placeholder=\"Your first name\">
\t\t\t\t\t\t\t</div><!-- form-group -->
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"subscribe-email\">and your email</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"subscribe-email\" placeholder=\"and your email\">
\t\t\t\t\t\t\t</div><!-- form-group -->

\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Subscribe!\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<p><small>Provide your email</small></p>
\t\t\t\t\t</div><!-- modal body -->

\t\t\t\t</div><!-- modal content -->
\t\t\t</div><!-- modal dialog -->
\t\t</div><!-- Modal -->


\t\t<!-- BOOTSTRAP CORE JAVASCRIPT
\t\t\t PLaced at the end of the document so the pages load faster!
\t\t-->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t\t<script src=\"views/assets/js/jquery-3.2.1.min.js\"></script>
    \t<script src=\"views/assets/js/bootstrap.min.js\"></script>


\t\t<script src=\"views/assets/js/main.js\"></script>


\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 108,  99 => 79,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/login.html");
    }
}
