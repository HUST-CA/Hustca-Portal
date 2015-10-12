<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once 'conn.php';
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST['name']);
   $tel = $_POST['tel'];
   $subject = test_input($_POST['subject']);
   $content = $_POST['content'];
   $email = $_POST['email'];
}
if (!preg_match("/[\x{4e00}-\x{9fa5}]{1,4}/u", $name))
{
	echo "<script>alert('请输入姓名（中文）！');location.href= 'lx.html'</script>";
	die(0);
}
elseif (!preg_match("/1[3458]{1}\d{9}$/",$tel))
{
	echo "<script>alert('请输入11位手机联系方式！');location.href= 'lx.html'</script>";
	die(0);
}
elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
	echo "<script>alert('请输入正确邮箱！');location.href= 'lx.html'</script>";
	die(0);
}
elseif (!preg_match("/[\x{4e00}-\x{9fa5}]{1,4}/u", $subject))
{
	echo "<script>alert('请输入主题（中文）！');location.href= 'lx.html'</script>";
	die(0);
}
elseif ($content == "")
{
	echo "<script>alert('请输入内容！');location.href= 'lx.html'</script>";
	die(0);
}
$sql = "insert into lxwm (name,tel,email,subject,content) VALUES('$name','$tel','$email','$subject','$content')";
if (mysql_query($sql,$con))
{
    echo "<script>alert('       提交成功！\\n 我们将尽快与您联系\\n 单击“确定”返回首页');location.href= '../../index.html'</script>";
}
else
{
   die('Error: ' . mysql_error());
}
mysql_close($con);
?>