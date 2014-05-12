<?php

$mysql = mysql_connect('server', 'userame', 'password'); // MySQL サーバへ接続
var_dump(get_resource_type($mysql)); // mysql link
