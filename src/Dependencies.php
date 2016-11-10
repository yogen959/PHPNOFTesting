<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');
 
$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->define('PHPNOF\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);

$injector->alias('PHPNOF\Page\PageReader', 'PHPNOF\Page\FilePageReader');
$injector->share('PHPNOF\Page\FilePageReader');

$injector->alias('PHPNOF\Template\Renderer', 'PHPNOF\Template\TwigRenderer');
$injector->delegate('Twig_Environment', function () use ($injector) {
    $loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/templates');
    $twig = new Twig_Environment($loader);
    return $twig;
});

$injector->alias('PHPNOF\Template\FrontendRenderer', 'PHPNOF\Template\FrontendTwigRenderer');

$injector->alias('PHPNOF\Menu\MenuReader', 'PHPNOF\Menu\ArrayMenuReader');
$injector->share('PHPNOF\Menu\ArrayMenuReader');

return $injector;