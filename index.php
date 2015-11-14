<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App();

// Fetch DI Container
$container = $app->getContainer();

// Register Twig View helper
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('templates');

    // Instantiate and add Slim specific extension
    $view->addExtension(new Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

// Define named route
$app->get('/{file}', function ($request, $response, $args) {
    return $this->view->render($response, $args['file'] . '.html', [
        'name' => 'nate',
    ]);
})->setName('profile');

// Run app
$app->run();
