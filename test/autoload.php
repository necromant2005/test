<?php
spl_autoload_register(function ($class) {
    return include 'src/' . $class . '.php';
});

