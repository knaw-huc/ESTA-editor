<?php

require "config/common.inc.php";
require "classes/MySmarty.class.php";


$s = new Mysmarty();

$s->assign('title', APPLICATION_NAME);
$s->view('home');