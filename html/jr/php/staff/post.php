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
    $name = test_input($_POST['name']);
    $sex = $_POST['sex'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $apartment = $_POST['apartment'];
    $building = $_POST['building'];
    $room = $_POST['room'];
    $groups = $_POST['groups'];
    $reason = $_POST['reason'];
    $experience = $_POST['experience'];
	$applytime=date('Y-m-d H:i:s');
	//$email2= "zhf@hustca.com";
	$email2= "940871318@qq.com";
	$email3="137945693@qq.com";

}


//查看邮箱是否已存在
else
{
    $result=mysql_query("select * from staff where email = \"$email\"");
    if (mysql_num_rows($result))
    {
        //弹出对话框 location.herf= '返回相对路径'
        echo "<script>alert('该邮箱的主人已参加报名，请重新填写！');location.href= '../../staff.html'</script>";
        die(0);
    }


}
//这里是要输进数据库的内容
//$sql="insert into 数据表名 （数据表项，数据表项） values ('相应数据'，'相应数据')"；
$sql = "insert ignore into staff (name,sex,tel,email,major,apartment,building,room,reason,experience,groups,applytime) VALUES('$name','$sex','$tel','$email','$major','$apartment','$building','$room','$reason','$experience','$groups','$applytime')";
//输进数据库
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
    $result = mysql_query("select * from staff where email = \"$email\"");
    while($row = mysql_fetch_array($result)){
        $team_id = $row['id'] + 000;

        //邮件主题
        $mailsubject = "华中科技大学部员申请";
        //邮件内容
        $mailbody = "恭喜你，申请成功！请注意相关面试通知。 这是你的部员申请号：$team_id \n请注意保管！";

		$mailbody2 = "管理员请注意，有计算机协会报名表单送达。请在第一时间内查阅数据库并整理信息，谢谢！基本信息如下：\n姓名：$name \n手机号码：$tel\n电子邮箱：$email \n专业：$major  \n\n\n\n欢迎访问华中科技大学计算机协会官网\nhttp://www.hustca.com\n更多活动讯息可在官网查看哦！  ";

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
        echo "<script>alert('       报名成功！\\n 相关讯息已发送至你的邮箱\\n  单击“确定”返回报名页');location.href= '../success-it.html'</script>";
    }
}
else
{
    die('Error: ' . mysql_error());
}
//关闭数据库
mysql_close($con);
?>
