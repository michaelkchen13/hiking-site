<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hiking Site Locations Info</title>

    <!-- Bootstrap -->
    <!-- Bootstrap Core CSS-->
    <link href="views/assets/css/custom.css" rel="stylesheet">
    <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons-->
    <link href="views/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
</head>
<body>
    {{ include('header.html') }}

    <div id="page-content-wrapper">
        <div class="container">
            <div id="info" style="width: 900px; height: 400px;">

                {% set arr = {"X-Mashape-Key" : "2DKorc206ImshrwHFboBUJeyCw2qp1qrVFIjsnsbLRcwF0pNb4",
                "Accept" : "text/plain"} %}
                {% set url = "https://trailapi-trailapi.p.mashape.com/?lat=37.7&lon=-122.4&q[activities_activity_type_name_eq]=hiking&q[city_cont]=San+Francisco&q[country_cont]=United+States&q[state_cont]=California&radius=25" %}
                {{ query|upper }}

                {{ getLocInfo(arr,url) }}

            </div>

        </div> <!-- container -->

    </div>


    {{ include('footer.html') }}


</body>
</html>