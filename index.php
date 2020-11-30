<?php


//alkalmazás gyökér könyvtára a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/fogy/');

//URL cím az alkalmazás gyökeréhez
define('SITE_ROOT', 'http://localhost/fogy/');

// a router.php vezérlõ betöltése
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>