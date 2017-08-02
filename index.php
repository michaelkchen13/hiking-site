<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once 'vendor/autoload.php';

// routing..
$page = 'home';

if  (isset($_GET['p'])){
        $page = $_GET['p'];
}

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($loader, [
    'cache' => __DIR__ . '/tmp'
]);

$function = new Twig_SimpleFunction('getLocInfo', function ($arr, $url) {
    $response = Unirest\Request::get($url, $arr);
    $data = json_decode($response->raw_body);
    //var_dump($data->places);
    foreach ($data->places as $place){
        echo '<div class="container">';
        if (isset($place->name)) {
            echo  'Site Name: ' . $place->name ;
        }
        if (isset($place->thumbnail)){
            echo '<img src='. $place->thumbnail . 'width="180" height="100">';
        }
        if (isset($place->description)){
            echo '<div class="lead"> description: ' . $place->description . '</div>';
        }
        echo '</div>';

    }
    return;
});
$twig->addFunction($function);

$md5Filter = new Twig_SimpleFilter('md5', function($string) {
    return md5($string);
});

$twig->addFilter($md5Filter);

$lexer = new Twig_Lexer($twig, array(
    'tag_block' => array('{%', '%}'),
    'tag_variable' => array('{{', '}}')
));

$twig->setLexer($lexer);

/* routing */
if ($page === 'login'){
    echo $twig->render('login.html', array(
        //'name' => 'Welcome to the Login Page'
    ));
} else if ($page === 'main') {
    echo $twig->render('main.html', array(
        'name' => 'Hiking Site',

        'users' => array(
            array('name' => 'Max', 'age' => 18),
            array('name' => 'James', 'age' => 22),
            array('name' => 'Max', 'age' => 34)
        ),
        'map_info' => array(
            array('id' => 'map_section_NE'),
            array('id' => 'map_section_SE'),
            array('id' => 'map_section_SW'),
            array('id' => 'map_section_NW')
        )
    ));
} else if ($page === 'plantrip'){
    echo $twig->render('plantrip.html');
} else if ($page === 'history'){
    echo $twig->render('history.html');
} else if ($page === 'advice') {
    echo $twig->render('advice.html');
} else if($page === 'create_account') {
    echo $twig->render('createaccount.html');
} else if($page === 'loc-info') {
    echo $twig->render('location-info.php', array(
        'default-location' => 'Appalachian Trail',
        'lon' => $_POST['lon'],
        'lat' => $_POST['lat']
    ));
}
else
 {
    echo $twig->render('main.html', array(
        'name' => 'Hiking Site',

        'users' => array(
            array('name' => 'Max', 'age' => 18),
            array('name' => 'James', 'age' => 22),
            array('name' => 'Max', 'age' => 34)
        ),
        'map_info' => array(
            array('id' => 'map_section_NE'),
            array('id' => 'map_section_SE'),
            array('id' => 'map_section_SW'),
            array('id' => 'map_section_NW')
        )
    ));
}

?>
