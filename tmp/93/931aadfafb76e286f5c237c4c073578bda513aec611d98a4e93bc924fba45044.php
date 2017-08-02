<?php

/* sidebar.html */
class __TwigTemplate_c793a1cd337e58d410e066930ba907ec702d6c81632264b7e199f6682a4c40fb extends Twig_Template
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
        echo "<!-- could use a for loop here, perhaps -->
<div id=\"wrapper\">
    <div id=\"sidebar-wrapper\">
        <ul class=\"sidebar-nav\">
            <li class=\"sidebar-brand\">
                <a href=\"#\">Main Page</a>
            </li>
            <li>
                <a href=\"#\">Plan Trip</a>
            </li>
            <li>
                <a href=\"#\">History</a>
            </li>
            <li>
                <a href=\"#\">Hiking Advice</a>
            </li>
            <li>
                <a href=\"#\">Create Profile</a>
            </li>
            <li>
                <a href=\"#\">Blog</a>
            </li>
        </ul>
    </div>
</div><!--  wrapper !-->";
    }

    public function getTemplateName()
    {
        return "sidebar.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sidebar.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/sidebar.html");
    }
}
