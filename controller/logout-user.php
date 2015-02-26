<?php
require_once(__DIR__ . "/../model/config.php");

unset($SESSION["authenticated"]);

sesssion_destroy();
header("Location: " . $path . "index.php");


