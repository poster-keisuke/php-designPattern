<?php

//require "Di/ExsampleLogger.php";
//require "Di/Application.php";

//require 'DesignPattern/Iterator/Main.php';
//require 'DesignPattern/Iterator/UsersAggregate.php';

require_once 'DesignPattern/TemplateMethod/Coke.php';
require_once 'DesignPattern/TemplateMethod/Coffee.php';

$coke = new Coke();
$coke->buy(300);

$coke = new Coffee();
$coke->buy(100);

//
//$application = new Application($logger);
//$application->error('エラーが発生しました。');

//$users = [ "name 01", "name 02", "name 03", "name 04", "name 05" ];
//$list = new Main(new UsersAggregate($users));

//echo $list->getUsers();