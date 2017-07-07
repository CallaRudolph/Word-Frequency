<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $my_word_frequency = new RepeatCounter;
        $result = $my_word_frequency->countRepeats($_GET['base_input'], $_GET['string_input']);
        return $app['twig']->render('result.html.twig', array('base_input' => $_GET['base_input'], 'string_input' => $_GET['string_input'], 'result' => $result));
    });

    return $app;
?>
