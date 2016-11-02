<?php
/**
 * Created by PhpStorm.
 * User: azifchyy
 * Date: 2.11.2016 г.
 * Time: 16:20
 */

define('DB_SERVER'. 'servername');
define('DB_USERNAME'. 'username');
define('DB_PASSWORD'. 'password');
define('DB_DATABASE'. 'database');

$db = mysql_connect(DB_SERVER,
    DB_USERNAME, DB2_PASSWORD,
    DB_DATABASE);