<?php

/* dropdown-menu.html */
class __TwigTemplate_bf8a8f78c57a8eb770fc0ab12d929e4e81b5b7984d59d4fe7e9fe9d4a472566d extends Twig_Template
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
        echo "<div class=\"container\">
                                         
  <div class=\"dropdown\" id=\"map_dropdown\">
    <p> Select a region where you want to hike</p>   
    <button class=\"btn btn-primary dropdown-toggle\" id=\"region_button\" type=\"button\" data-toggle=\"dropdown\">Regions
    <span class=\"caret\"></span></button>
    <ul class=\"dropdown-menu\">
      <li id=\"southeast\"><a href=\"#\">Southeast</a></li>
      <li id=\"northeast\"><a href=\"#\">Northeast</a></li>
      <li id=\"northwest\"><a href=\"#\">Northwest</a></li>
      <li id=\"southwest\"><a href=\"#\">SouthWest</a></li>
    </ul>
  </div>
</div>
<script type=\"text/javascript\">
  \$(document).ready(function() {
      \$('#southeast').click(function() {
        \$('#chart_div').hide();
        \$('#map_section_SE').show();
        \$('#map_section_NE').hide();
        \$('#map_section_SW').hide();
        \$('#map_section_NW').hide();
        initMap2();
      });
      \$('#northeast').click(function() {
        \$('#chart_div').hide();
        \$('#map_section_NE').show();
        \$('#map_section_SE').hide();
        \$('#map_section_SW').hide();
        \$('#map_section_NW').hide();
        initMap1();
      });

      \$('#southwest').click(function() {
        \$('#chart_div').hide();
        \$('#map_section_SW').show();
        \$('#map_section_NE').hide();
        \$('#map_section_SE').hide();
        \$('#map_section_NW').hide();
        initMap3();
      });

      \$('#northwest').click(function() {
        \$('#chart_div').hide();
        \$('#map_section_NW').show();
        \$('#map_section_SW').hide();
        \$('#map_section_NE').hide();
        \$('#map_section_SE').hide();
        initMap4();
      });
  
  });
</script> ";
    }

    public function getTemplateName()
    {
        return "dropdown-menu.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dropdown-menu.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/dropdown-menu.html");
    }
}
