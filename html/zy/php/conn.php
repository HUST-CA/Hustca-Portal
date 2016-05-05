<?php
   require_once '../../config/db-conn.php';

    mysql_query("create table ca_tougao(id int unsigned not null auto_increment primary key,title char(16) not null,link varchar(60) character set utf8 not null,intro varchar(60) character set utf8 not null);");

?>
