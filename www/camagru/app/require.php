<?php
// load config
    require_once 'config/config.php';

// autoload libs (lib files should start with uppercase)
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';
    });