<?php

/* main-content.html */
class __TwigTemplate_c75aca131cb8d2c89bd7bfff42a4d0955e2ec11a84a26046b044b6e290781e89 extends Twig_Template
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
        echo "<!--VIDEO FEAT-->
<script>
 // Geocharts begin here...
      google.charts.load('current', {'packages': ['geochart']});
      google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
      var data = google.visualization.arrayToDataTable([
        ['Hiking Trail',   'Popularity'],
        ['Appalachian Trail',    61477],
        ['Oregon Coast Trail',   1477],
        ['Pacific Northwest Trail',     14477],
        ['Colorado Trail',     24477],
        ['Pacific Crest Trail',     34477],
        ['Mountains-to-Sea Trail',     74477],
        ['Ouachita Trail',     24477],
        ['Tahoe Rim Trail',     24477],
        ['North Country Trail',     44597],
        ['Great Smoky Mountains National Park', 5555],
        ['Athens Big Fork Trail', 667],
        ['Florida Trail', 4444],
        ['Tallulah Gorge', 68349],
        ['Mt Mitchell', 53534],
        ['Old Rag Trail', 54543]
      ]);

      var options = {
        region: '021',
        displayMode: 'markers',
        colorAxis: {colors: ['green', 'blue']}
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);

      };


    //regional map of NE begins here...
    var map1,map2,map3,map4;
     function initMap1() {
        map1 = new google.maps.Map(document.getElementById('map_section_NE'), {
          zoom: 6, //defualt zoom for view of the northeast
          center: {lat: 44.5588, lng: -72.5778},
          mapTypeId: 'terrain'
        });

        var script1 = document.createElement('script');

        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script1.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script1);

        map1.data.setStyle(function(feature) {

          var magnitude = feature.getProperty('mag');
          return {
            icon: getCircle(magnitude)
          };

        }); 

        // Define the LatLng coordinates for the northeast region's path.
        var northEast = [
          {lat: 39.321, lng: -76.757},
          {lat: 42.909, lng: -79.000},
          {lat: 44.234, lng: -75.555},
          {lat: 47.244, lng: -69.455},
          {lat: 45.234, lng: -66.555},
          {lat: 41.100, lng: -70.000},
          {lat: 40.000, lng: -74.000},
          {lat: 38.500, lng: -75.000},
          {lat: 39.321, lng: -76.757}
          // figure out the specific plugin 
        ];

        // Construct the region
        var northEastPolygon = new google.maps.Polygon({
          paths: northEast,
          strokeColor: '#ff1309',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        northEastPolygon.setMap(map1);

        map1.addListener('click', function (event) {
              displayCoordinates(event.latLng);               
          });
    }

      //regional map of SE begins here...
      function initMap2() {
        map2 = new google.maps.Map(document.getElementById('map_section_SE'), {
          zoom: 6, //defualt zoom for view of the northeast
          center: {lat: 34.5588, lng: -82.5778},
          mapTypeId: 'terrain'
        });

        var script2 = document.createElement('script');

        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script2.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script2);

        map2.data.setStyle(function(feature) {
          var magnitude = feature.getProperty('mag');
          return {
            icon: getCircle(magnitude)
          };
        });

        // Define the LatLng coordinates for the southeast region's path.
        var southEast = [
          {lat: 38.321, lng: -76.757},
          {lat: 35.321, lng: -75.757},
          {lat: 31.321, lng: -81.257},
          {lat: 25.774, lng: -80.190},
          {lat: 24.774, lng: -81.190},
          {lat: 29.774, lng: -85.190},
          {lat: 29.774, lng: -89.190},
          {lat: 38.544, lng: -90.190},
          {lat: 38.321, lng: -76.757}
        ];

        // Construct the region
        var southEastPolygon = new google.maps.Polygon({
          paths: southEast,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        southEastPolygon.setMap(map2);
      }

      //regional map of southwest begins here
      function initMap3() { 
        map3 = new google.maps.Map(document.getElementById('map_section_SW'), {
          zoom: 5, //defualt zoom for view of the northeast
          center: {lat: 33.5588, lng: -102.5778},
          mapTypeId: 'terrain'
        });

        var script3 = document.createElement('script');

        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script3.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script3);

        map3.data.setStyle(function(feature) {
          var magnitude = feature.getProperty('mag');
          return {
            icon: getCircle(magnitude)
          };
        }); 

        var southWest = [
          {lat: 36.321, lng: -93.000},
          {lat: 25.909, lng: -93.000},
          {lat: 32.909, lng: -119.000},
          {lat: 36.321, lng: -119.000},
          {lat: 36.321, lng: -93.000}
        ];

        // Construct the region
        var southWestPolygon = new google.maps.Polygon({
          paths: southWest,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        southWestPolygon.setMap(map3);

        map3.addListener('click', function (event) {
              displayCoordinates(event.latLng);               
          });
    }

    //regional map of northwest begins here
      function initMap4() { 
        map4 = new google.maps.Map(document.getElementById('map_section_NW'), {
          zoom: 5, //defualt zoom for view of the northeast
          center: {lat: 43.5588, lng: -107.5778},
          mapTypeId: 'terrain'
        });

        var script4 = document.createElement('script');

        // This example uses a local copy of the GeoJSON stored at
        // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
        script4.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
        document.getElementsByTagName('head')[0].appendChild(script4);

        map4.data.setStyle(function(feature) {
          var magnitude = feature.getProperty('mag');
          return {
            icon: getCircle(magnitude)
          };
        }); 

        var northWest = [
          {lat: 49.321, lng: -98.000},
          {lat: 38.909, lng: -98.000},
          {lat: 41.909, lng: -125.000},
          {lat: 45.909, lng: -125.000},
          {lat: 49.321, lng: -125.000},
          {lat: 49.321, lng: -98.000}
        ];

        // Construct the region
        var northWestPolygon = new google.maps.Polygon({
          paths: northWest,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35
        });
        northWestPolygon.setMap(map4);

    }

      function getCircle(magnitude) {
        return {
          path: google.maps.SymbolPath.CIRCLE,
          fillColor: 'blue',
          fillOpacity: .2,
          scale: Math.pow(2, magnitude) / 2,
          strokeColor: 'red',
          strokeWeight: .5
        };
      }

      function eqfeed_callback(results) {
        map1.data.addGeoJson(results);
      }

      function displayCoordinates(pnt) {
          var lat = pnt.lat();
          lat = lat.toFixed(4);
          var lng = pnt.lng();
          lng = lng.toFixed(4);
          console.log(\"Latitude: \" + lat + \"  Longitude: \" + lng);
      }
      
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA_eM_Ol1NBaP_NBYRSwivwqQhldQIHZ5Q
&libraries=visualization\"></script>
    ";
        // line 257
        echo twig_include($this->env, $context, "dropdown-menu.html");
        echo "
    <break />
    <break />

    <!-- perhaps make use of twig for repetitive elements!-->

    <div id=\"page-content-wrapper\">
            <div class=\"container\">
                <div id=\"chart_div\" style=\"width: 900px; height: 400px;\"></div>
            </div> <!-- container -->

    </div>

    ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["map_info"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 271
            echo "      <div id=\"page-content-wrapper\">
            <div class=\"container\">
                <div id=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()), "html", null, true);
            echo "\" style=\"width: 900px; height: 400px; display: none;\"></div>
            </div> <!-- container -->
     </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
        <break />
        <break />

</div><!--  wrapper !-->";
    }

    public function getTemplateName()
    {
        return "main-content.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 277,  301 => 273,  297 => 271,  293 => 270,  277 => 257,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main-content.html", "/Applications/mampstack-7.0.18-0/apache2/htdocs/hiking-site/views/main-content.html");
    }
}
