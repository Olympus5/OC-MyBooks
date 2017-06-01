<?php

$app->get('/', function() {
  ob_start();
  
  require __DIR__.'/../views/view.php';
  $view = ob_get_clean();

  return $view;
});
