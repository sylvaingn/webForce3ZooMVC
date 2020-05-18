<?php

function my_autoload ($className) {
    include __DIR__ . "/../src/models/". $className.".php";
    include __DIR__ . "/../src/controllers/". $className.".php";
}

spl_autoload_register("my_autoload");
