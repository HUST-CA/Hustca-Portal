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
    $title = test_input($_POST['title']);
    $link = $_POST['link'];
    $intro = $_POST['intro'];

}





//这里是要输进数据库的内容
//$sql="insert into 数据表名 （数据表项，数据表项） values ('相应数据'，'相应数据')"；
$sql = "insert ignore into ca_tougao (title,link,intro) VALUES('$title','$link','$intro')";

echo "<script>alert('       投递成功！\\n \\n  单击“确定”查看投递资源列表');location.href= '../tougao/index.php'</script>";
?>
