<?php
//DB Params
$url=  parse_url('postgres://kpodalbannhtcn:45d51c05b027cdd9fce5b614e744d6d1a7323a89d0c3162f5bacec5c94a13f34@ec2-34-197-212-240.compute-1.amazonaws.com:5432/d7hb6m2ef7tdct');

define('DB_HOST', $url["host"]);
define('DB_USER', $url["user"]);
define('DB_PASS', $url["pass"]);

// var_dump(DB_HOST, DB_USER, DB_PASS);
// die;
define('DB_NAME', substr($url["path"], 1));
var_dump(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'notes');
//App Root
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'https://acesnote.herokuapp.com/');
//site name
define('SITENAME', 'Notes');
