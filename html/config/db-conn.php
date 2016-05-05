
<?php


/** Mysql数据库的名称 */
//define('DB_NAME', ' ');

/** MySQL数据库用户名 */
//define('DB_USER', ' ');

/** MySQL数据库密码 */
//define('DB_PASSWORD', ' ');

/** MySQL主机 */
//define('DB_HOST', ' ');

/** 创建数据表时默认的文字编码 */
//define('DB_CHARSET', 'utf8');




$con = mysql_connect("localhost" , " " , " " )or die("Could not connect : " . mysql_error());
mysql_query("set names utf8");
mysql_select_db(" ") or die("Could not select database");
?>
