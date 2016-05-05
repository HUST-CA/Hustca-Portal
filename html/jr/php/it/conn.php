<?php

require_once("../../../config/db-conn.php");

mysql_query("create table apply_it(id int unsigned not null auto_increment primary key,name char(10) character set utf8 not null,sex char(6) not null,tel char(11) not null,email char(30) not null unique key,major char(20) character set utf8 not null,apartment char(3) character set utf8 not null,building char(5) character set utf8 not null,room char(5) character set utf8 not null,it_group char(3) not null,experience varchar(300) character set utf8,excellent varchar(150) character set utf8,interest varchar(150) character set utf8,applytime datetime() character set utf8 not null,reason varchar(400) character set utf8 not null);");
