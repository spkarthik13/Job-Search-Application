<?php

require_once('config.php');

//for autoloading all the classes

require_once('lib/Template.php');

function __autoload($class_name){
    require_once('lib/' .$class_name .'.php');
}

