<?php

/* header.html */
class __TwigTemplate_25a788bb5988b6bc90da2b4708182e66ce5b0c313ec251a86d30676757f9ce19 extends Twig_Template
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
        echo "<!--HEADER-->
        <header class=\"site-header\" role=\"banner\">

        <!-- NAVBAR-->

        <div class=\"navbar-wrapper\">

            <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">

                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"#menu-toggle\" class=\"btn btn-default, fa fa-bars fa-2x\" aria-hidden=\"true\" id=\"menu-toggle\"></a>
                    </div><!-- navbar-header -->
                    <div class=\"logo\">
                    <a class=\"navbar-brand\" href=\"main.html\"><img src=\"img/logo.png\" alt=\"Hiking Site\"></a>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav navbar-right\">
                        <div class=\"col-sm-12 btn-position\">
                        <button class=\"btn btn-success btn-sm btn-block\" id=\"login_button\" data-toggle=\"modal\" data-target=\"#myModal\">
                            Login
                        </button>
                        </div>
                        </ul>
                    </div>
                </div><!-- container -->
            </div><!-- navbar -->
        </div><!-- navbar-wrapper-->        

        </header>

        ";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/header.html");
    }
}
