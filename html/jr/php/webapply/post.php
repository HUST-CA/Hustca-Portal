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
   $name = $_POST['name'];
   $sex = $_POST['sex'];
   $tel = $_POST['tel'];   
   $email = $_POST['email'];
   $website = $_POST['website'];
   $it_group = $_POST['it-group'];
   $experience = $_POST['experience'];
   $excellent = $_POST['excellent'];
}



else{
    
$result=mysql_query("select * from apply where email = \"$email\""); 
    if (mysql_num_rows($result)) 
    { 
        echo "<script>alert('该邮箱已参加报名，请重新填写！');location.href= '../webapply.html'</script>";
		die(0); 
    } 

}


$sql = "insert ignore into apply(name,sex,tel,email,website,it_group,experience,excellent) VALUES('$name','$sex','$tel','$email','$website','$it_group','$experience','$excellent')";
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
	$result = mysql_query("select * from apply where email = \"$email\"");
	while($row = mysql_fetch_array($result)){
	$team_id = $row['id'] + 10000;
    //引入发送邮件类
	require("smtp.php"); 
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
	//邮件主题 
	$mailsubject = "加盟网站管理团队";
	//邮件内容
	$mailbody = "报名成功！\n欢迎加入计算机协会Web大家庭！\n这里有你想要的！\n更有你展示的平台！";
	//邮件格式（HTML/TXT）,TXT为文本邮件 
	$mailtype = "TXT";
	//这里面的一个true是表示使用身份验证,否则不使用身份验证. 
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	//是否显示发送的调试信息 
	$smtp->debug = TRUE;
	//发送邮件
	$smtp->sendmail($email, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
	echo "<script>alert('       提交成功！\\n 报名编号已发送至您的邮箱\\n  单击“确定”返回报名页');location.href= '../webapply.html'</script>";
	}
}
else
{
   die('Error: ' . mysql_error());
}
mysql_close($con);
?>