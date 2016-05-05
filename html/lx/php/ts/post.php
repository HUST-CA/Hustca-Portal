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
   $sex = $_POST['sex'];
   $email = $_POST['email'];
   $date=date('Y-m-d H:i:s');
   $complainment=$_POST['complainment'];
   $advice=$_POST['advice'];

   $email2= "940871318@qq.com";
	$email3="137945693@qq.com";
}








$sql = "insert ignore into ts (name,tel,email,complainment,advice,date) VALUES('$name','$tel','$email','$complainment','$advice','$date')";
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
	$result = mysql_query("select * from ts where email = \"$email\"");
	while($row = mysql_fetch_array($result)){
	$team_id = $row['id'] + 10000;
    //引入发送邮件类
	require("../../../config/smtp.php"); 
	//使用163邮箱服务器
	$smtpserver = "smtp.126.com";
	//163邮箱服务器端口
	$smtpserverport = 25;
	//你的163服务器邮箱账号
	$smtpusermail = "hustca@126.com";
	//你的邮箱账号(去掉@163.com)
	$smtpuser = "hustca";//SMTP服务器的用户帐号
	//你的邮箱密码
	$smtppass = "12345678"; //SMTP服务器的用户密码
	//发件人昵称
    $fromname ="华中科技大学计算机协会";
	//邮件主题
	$mailsubject = "感谢您的投诉";
	$mailsubject1 = "计算机协会投诉系统";
	//邮件内容
        $mailbody = "您好，感谢您对我们的关心！您的信息我们已经收到，我们会认真思考您所提出的问题，并尽可能给出我们的解决方案。感谢您的投诉！  \n\n\n\n欢迎访问华中科技大学计算机协会官网\n http://www.hustca.com  ";

		$mailbody2 = "管理员请注意，有计算机协会投诉表单送达。请认真思考此问题，并在有效时间内解决，谢谢！\n投诉人基本信息如下：\n姓名：$name \n手机号码：$tel\n电子邮箱：$email \n主题：$complainment \n内容：$complainment \n\n\n\n华中科技大学计算机协会官网运营组\n\n\n\n\n\n\n\n此为系统邮件 请勿回复";

	//邮件格式（HTML/TXT）,TXT为文本邮件
	$mailtype = "TXT";
	//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	//是否显示发送的调试信息
	$smtp->debug = TRUE;
	//发送邮件
	$smtp->sendmail($email, $smtpusermail,$fromname, $mailsubject, $mailbody, $mailtype);
	$smtp->sendmail($email2, $smtpusermail,$fromname, $mailsubject1, $mailbody2, $mailtype);
	$smtp->sendmail($email3, $smtpusermail,$fromname, $mailsubject1, $mailbody2, $mailtype);
	//弹出对话框 location.herf= '返回相对路径'
	echo "<script>alert('       您好\\n 感谢您对我们投诉!  \\n  单击“确定”返回首页');location.href= '../../../../index.php'</script>";
	}
}
else
{
   die('Error: ' . mysql_error());
}
mysql_close($con);
?>
