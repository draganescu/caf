<?php
include 'dynamic/controller.php';

$app = the::app();
$app->theme = 'wireframe';
$app->default = 'index';

$app->template('participate','submit');
$app->template('$event','event');
$app->template('$thread','discussion');
$app->template('newthread','newdiscuss');
$app->template('search','search');
$app->template('-','single');
$app->template('api/events','api/events');

$app->connection('local.host', 'local.host', 'caf', 'root', '');
//$app->debug_events = true;

$app->run();