<?php
require_once("../../../config/db-conn.php");
mysql_query("create table lxwm(id int unsigned not null auto_increment primary key,name char(10) character set utf8 not null,email varchar(30) not null,subject varchar(200) not null,tel char(11) not null,content varchar(2000) character set utf8 not null);");
