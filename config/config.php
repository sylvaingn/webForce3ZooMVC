<?php

function autoload_models ($className) {
    include __DIR__ . "/../src/models/". $className.".php";
}
function autoload_controllers ($className) {
    include __DIR__ . "/../src/controllers/". $className.".php";
}

spl_autoload_register("autoload_models");
spl_autoload_register("autoload_controllers");

