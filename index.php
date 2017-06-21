<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$md5Filter = new Twig_SimpleFilter('md5', function($string) {
    return md5($string);
});

$twig->addFilter($md5Filter);

$lexer = new Twig_Lexer($twig, array(
    'tag_block' => array('{%', '%}'),
    'tag_variable' => array('{{', '}}')
)); 

$twig->setLexer($lexer);

/* echo $twig->render('hello.html', array(
        'name' => 'Michael',
        'age' => 10,

        'users' => array(
            array('name' => 'Max', 'age' => 18),
            array('name' => 'James', 'age' => 22),
            array('name' => 'Max', 'age' => 34)
            )
    ));  */

echo $twig->render('main.html', array(
        'name' => 'Hiking Site',

        'users' => array(
            array('name' => 'Max', 'age' => 18),
            array('name' => 'James', 'age' => 22),
            array('name' => 'Max', 'age' => 34)
            )
    )); 

?>