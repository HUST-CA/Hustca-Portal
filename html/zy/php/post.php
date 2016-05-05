<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//引用conn.php一次
require_once 'conn.php';


//去除文字两边空格之类的东西的函数
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//post接收表单内容
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $intro = $_POST['intro'];

}


$sql = "insert ignore into ca_tougao (title,link,intro) VALUES('$title','$link','$intro')";



if (mysql_query($sql,$con))
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p>&nbsp;</p>
<?php
	//读取数据库内容
	$result = mysql_query("select * from ca_tougao");
	while($row = mysql_fetch_array($result)){
	echo "<script>alert(' 投递成功！\\n \\n  单击“确定”查看投递资源列表');location.href= '../tougao/index.php'</script>";
	}
}
else
{
   die('Error: ' . mysql_error());
}
//关闭数据库
mysql_close($con);
?>
