<?php

// Home page
$app->get('/', function () use ($app) {
    $articles = $app['dao.article']->findAll();
    return $app['twig']->render('index.twig', array('articles' => $articles));
});