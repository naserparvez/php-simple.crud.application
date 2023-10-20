<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("SHARED_PATH", PRIVATE_PATH. '/shared');

define("WWW_ROOT", '/crud/public');

require_once("functions.php");
require_once("database.php");
require_once("query_function.php");

$db=db_connect();


?>