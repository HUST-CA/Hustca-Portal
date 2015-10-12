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