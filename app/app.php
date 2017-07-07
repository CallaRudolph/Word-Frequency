<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/result", function() use ($app) {
        $birthday = new RepeatCounter('birthday', 'happy birthday to you');
        $test = new RepeatCounter('test', 'this is a test song');

        $songs = array($birthday, $test);
        $song_chosen = array();
        var_dump($_GET['lyrics']);

        foreach($songs as $song) {
            if ($song->getTitle() == $_GET['lyrics']) {
                array_push($song_chosen, $song);
            }
        }

        $my_word_frequency = new RepeatCounter($_GET['base_input'], $song_chosen);
        $result = $my_word_frequency->countRepeats($_GET['base_input'], $song_chosen);
        return $app['twig']->render('result.html.twig', array('base_input' => $_GET['base_input'], 'result' => $result));
    });

    return $app;
?>
