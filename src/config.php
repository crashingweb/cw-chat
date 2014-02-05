<?php

$error1 = 'Problem connecting to Host';
$error2 = 'Problem connecting to MySQL';
#$connect = mysql_connect ('localhost','thelions_chat','thelions_chat') or die($error1);
#$db = mysql_select_db ('thelions_chat') or die($error2);

$connect = mysql_connect ('localhost','root','root') or die($error1);
$db = mysql_select_db ('chat') or die($error2);

?>