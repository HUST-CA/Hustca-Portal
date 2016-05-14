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
   $date=date('Y-m-d H:i:s');

 
}














$sql = "insert ignore into lxwm (name,tel,email,subject,content,date) VALUES('$name','$tel','$email','$subject','$content','$date')";

if (mysql_query($sql,$con))
{
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
	//读取数据库内容
	$result = mysql_query("select * from lxwm where email = \"$email\"");
	while($row = mysql_fetch_array($result)){
	$team_id = $row['id'] + 10000;
    //引入发送邮件类

    //发件人昵称
  $fromname ="华中科技大学计算机协会";
	//邮件主题
	$mailsubject = "联系我们--HUSCTA";
	//邮件内容
     $mailbody = "您好，感谢您的联系！您的信息我们已经收到，我们会在第一时间回复/联系您。谢谢合作！\n再次确认您的信息如下：\n姓名：$name \n手机号码：$tel\n电子邮箱：$email \n主题：$subject \n内容：$content  \n\n\n\n欢迎访问华中科技大学计算机协会官网\nhttp://www.hustca.com\n更多活动讯息可在官网查看哦！  ";

	$mailbody2 = "管理员请注意，有计算机协会联系表单送达。请在第一时间内联系此人，谢谢！\n基本信息如下：\n姓名：$name \n手机号码：$tel\n电子邮箱：$email \n主题：$subject \n内容：$content \n\n\n\n华中科技大学计算机协会官网运营组\n\n\n\n\n\n\n\n此为系统邮件 请勿回复";

	//邮件格式（HTML/TXT）,TXT为文本邮件
	$mailtype = "TXT";
	//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	//是否显示发送的调试信息
	$smtp->debug = TRUE;
	//发送邮件
	$smtp->sendmail($email, $smtpusermail,$fromname, $mailsubject, $mailbody, $mailtype);
	$smtp->sendmail($email2, $smtpusermail,$fromname, $mailsubject, $mailbody2, $mailtype);
	$smtp->sendmail($email3, $smtpusermail,$fromname, $mailsubject, $mailbody2, $mailtype);
	//弹出对话框 location.herf= '返回相对路径'
	echo "<script>alert('       您好\\n 我们将尽快与您联系! \\n  单击“确定”返回首页');location.href= '../../../../index.php'</script>";
	}
}
else
{
   die('Error: ' . mysql_error());
}
mysql_close($con);
?>
