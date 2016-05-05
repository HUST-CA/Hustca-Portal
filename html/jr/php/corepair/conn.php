<?php
//引号里分别为"主库域名：端口","用户名","密码"
//主库域名：端口 在管理MySQL里查看
//用户名和密码 在应用首页查看
require_once("../../../config/db-conn.php");
//创建新的数据表（如果不存在该表的话）
//mysql_query("create table 数据表名(id int unsigned not null auto_increment primary key,汉字项名称 varchar(最大字符数) character set utf8 not null,无汉字项 varchar（最大字符数） not null);");
//如果已知字符数量，可将varchar（）换成char（）
mysql_query("create table corepair(id int unsigned not null auto_increment primary key,name varchar(10) character set utf8 not null,sex char(6) not null,tel char(11) not null,email varchar(30) not null unique key,major varchar(20) character set utf8 not null,apartment varchar(20) character set utf8 not null,building varchar(20) character set utf8 not null,reason varchar(100) character set utf8 not null,applytime datetime() character set utf8 not null,experiences varchar(100) character set utf8 not null);");
