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





$sql = "insert ignore into fk (name,tel,email,date,complainment,advice) VALUES('$name','$tel','$email','$date','$complainment','$advice')";
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
	$result = mysql_query("select * from fk where email = \"$email\"");
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
	$smtppass = "hustca2013"; //SMTP服务器的用户密码
	//发件人昵称
    $fromname ="华中科技大学计算机协会";
	//邮件主题
	$mailsubject = "感谢您的反馈";
	$mailsubject1 = "计算机协会反馈系统";
	//邮件内容
        $mailbody = "您好，感谢您的反馈！您的信息我们已经收到，我们会认真思考您所提出的问题，并近我们最大的努力进行完善和健全。再次感谢您的重要意见！\n\n\n\n欢迎访问华中科技大学计算机协会官网\n http://www.hustca.com  ";

		$mailbody2 = "管理员请注意，有计算机协会联系表单送达。请在第一时间内联系此人，谢谢！\n基本信息如下：\n姓名：$name \n手机号码：$tel\n电子邮箱：$email \n反馈问题：$complainment \n改进建议：$advice \n\n\n\n华中科技大学计算机协会官网运营组\n\n\n\n\n\n\n\n此为系统邮件 请勿回复";

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
	echo "<script>alert('       您好\\n 感谢您的反馈! \\n  单击“确定”返回首页');location.href= '../../../../index.php'</script>";
	}
}
else
{
   die('Error: ' . mysql_error());
}
mysql_close($con);
?>
