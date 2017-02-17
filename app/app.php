<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(
        new Silex\Provider\TwigServiceProvider(),
        array('twig.path' => __DIR__.'/../views')
    );

    $app->get('/', function() use ($app) {
        return $app['twig']->render('submit.html.twig');
    });

    $app->post('/words', function() use ($app) {
        $input_word = $_POST['word'];
        $input_sentence = $_POST['sentence'];
        $new_RepeatCounter = new RepeatCounter($input_word, $input_sentence);
        $words = $new_game->getWords();
        $count = $new_game->compareLetters($input_word, $input_sentence);
        return $app['twig']->render('display.html.twig', array('score' => $count, 'words' => $words));
    });
    return $app;
?>
