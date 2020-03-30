<?php
require "config/common.inc.php";
require "classes/MySmarty.class.php";


$s = new Mysmarty();

$json = file_get_contents(APP_ROOT . 'json/editor.json');
$s->assign('title', APPLICATION_NAME);
$s->assign('json', $json);
$s->view('formPage');