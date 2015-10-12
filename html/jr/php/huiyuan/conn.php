<?php
//引号里分别为"主库域名：端口","用户名","密码"
//主库域名：端口 在管理MySQL里查看
//用户名和密码 在应用首页查看
$con = mysql_connect("w.rdc.sae.sina.com.cn:3307","yzyzokm4o3","2jm0yz1xmikmxx30ikziw10im2mm54lwlw40k1zy");
//链接MySQL
if(!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_query("set names 'utf8'");
//选定数据库
mysql_select_db("app_naihai");
//创建新的数据表（如果不存在该表的话）
//mysql_query("create table 数据表名(id int unsigned not null auto_increment primary key,汉字项名称 varchar(最大字符数) character set utf8 not null,无汉字项 varchar（最大字符数） not null);");
//如果已知字符数量，可将varchar（）换成char（）
mysql_query("create table huiyuan(id int unsigned not null auto_increment primary key,name varchar(10) character set utf8 not null,sex char(6) not null,tel char(11) not null,email varchar(30) not null unique key,major varchar(20) character set utf8 not null,class varchar(15) character set utf8 not null,reason varchar(100) character set utf8 not null,groups varchar(10) character set utf8 not null,level varchar(100) character set utf8 not null);");