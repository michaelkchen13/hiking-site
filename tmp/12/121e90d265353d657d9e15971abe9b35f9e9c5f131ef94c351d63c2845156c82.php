<?php

/* modal.html */
class __TwigTemplate_17412fa559a1a1f070caabf5c9321b2fd20c7bb497aee0d03ded5e4b171f7225 extends Twig_Template
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
        echo "<!-- MODAL-->
\t\t<div class=\"modal fade\" id=\"myModal\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">

\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModal:abel\"><i class=\"fa fa-envelope\"></i> Login</h4>
\t\t\t\t\t</div><!-- modal header -->

\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>Enter your Email and password.</p>

\t\t\t\t\t\t<form class=\"form-inline\" role=\"form\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"login-name\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"login-name\" placeholder=\"Email\">
\t\t\t\t\t\t\t</div><!-- form-group -->
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"sr-only\" for=\"login-email\">Password</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"login-email\" placeholder=\"Password\">
\t\t\t\t\t\t\t</div><!-- form-group -->

\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"Login\">
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<p><small>Provide your email and password</small></p>
\t\t\t\t\t</div><!-- modal body -->

\t\t\t\t</div><!-- modal content -->
\t\t\t</div><!-- modal dialog -->
\t\t</div><!-- Modal -->";
    }

    public function getTemplateName()
    {
        return "modal.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modal.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/modal.html");
    }
}
