<?php
$lastVisited = isset($_COOKIE['lastVisited']) ? $_COOKIE['lastVisited'] : 'Never';

setcookie('lastVisited', date("Y-m-d H:i:s"), time() + (86400 * 30), "/");

echo "Last visited on: $lastVisited";

/*
name: lastVisited 
value:date expiry: 
specified time()+days
domain: / root
*/
