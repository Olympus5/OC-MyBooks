<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views/'));
$app->register(new Silex\Provider\AssetServiceProvider(), array('assets.version' => 'v1'));

$app['dao.author'] = function($app) {
  return new MyBooks\DAO\AuthorDAO($app['db']);
};

$app['dao.book'] = function($app) {
  $bookDAO = new MyBooks\DAO\BookDAO($app['db']);
  $bookDAO->setAuthorDAO($app['dao.author']);
  return $bookDAO;
};
