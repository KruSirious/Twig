<?php
/**
 * Created by PhpStorm.
 * User: Antoine
 * Date: 22/10/2014
 * Time: 17:37
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();


$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$articles =[
    [
    'name'    =>'My Beautiful Article',
    'content' =>'Hi, it\'s my content!',
    'enabled' => true,
    'date'    => new DateTime('now'),
        ],
    [
        'name'    =>'qzetrezterzf',
        'content' =>'dfgsdfgsdfg',
        'enabled' => false,
        'date'    => new DateTime('now'),
    ],
    [
        'name'    =>'Lipsum',
        'content' =>'Lorem',
        'enabled' => true,
        'date'    => new DateTime('now'),
    ],
];

echo $twig->render('blog/article.html.twig',[
    'articles' => $articles,
]);

