<?php
  include_once 'Scraper.php';
  include_once 'Controller.php';
  include_once 'Compare.php';
  include_once 'view.php';

  error_reporting(E_ALL);
  ini_set('display_errors', 'off');
  ini_set('max_execution_time', 300);

  //phpinfo();
  $Compare = new Compare();
  $scrape = new Scraper();
  $view = new View();
  $Controller = new Controller($scrape, $Compare, $view);


 ?>
