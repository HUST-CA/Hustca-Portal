<?php
$con = mysql_connect("w.rdc.sae.sina.com.cn:3307","yzyzokm4o3","2jm0yz1xmikmxx30ikziw10im2mm54lwlw40k1zy");

if(!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_query("set names 'utf8'");
mysql_select_db("app_naihai");
mysql_query("create table ts(id int unsigned not null auto_increment primary key,name char(10) character set utf8 not null,email varchar(30) not null,subject varchar(20) not null,tel char(11) not null,content varchar(1000) character set utf8 not null);");