<?php

session_start();

define("BURL", "http://localhost/Medical/");
define("BURLA", "http://localhost/Medical/admin/");
define("ASSETS", "http://localhost/Medical/assets/");

define("BL", __DIR__ . "/");
define("BLA", __DIR__ . "/admin/");


// connect to Database
require_once(BL."functions/db.php");