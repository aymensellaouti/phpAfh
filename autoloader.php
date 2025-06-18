<?php 

function loadClass($className): void {
    include_once "class/$className.php";
}

spl_autoload_register('loadClass');