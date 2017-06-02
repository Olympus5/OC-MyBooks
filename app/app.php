<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\DoctrineServiceProvider());

$app['dao.book'] = function($app) {
  return new MyBooks\DAO\BookDAO($app['db']);
};

$app['dao.author'] = function($app) {
  return new MyBooks\DAO\AuthorDAO($app['db']);
};
