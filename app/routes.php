<?php

$app->get('/', function() use ($app) {
  $books = $app['dao.book']->findAll();

  ob_start();

  require __DIR__.'/../views/view.php';
  $view = ob_get_clean();

  return $view;
});
