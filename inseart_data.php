<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php 
$date = $_POST['date'];
$case = $_POST['case'];
$department = $_POST['department'];
$tel = $_POST['tel'];
$detail = $_POST['detail'];
$name = $_POST['name'];
$way = $_POST['way'];
$specify = $_POST['specify'];
$date_time= date("dmYhi");
$status = "1";
$ipaddress = $_SERVER['REMOTE_ADDR'];


if(($_POST['date']=="")||($_POST['case']=="")||($_POST['department']=="")||($_POST['tel']=="")||($_POST['detail']=="")||($_POST['name']=="")){
	echo "กรุณากรอกข้อมูลตามเครื่องหมายดอกจันสีแดง "."<font color='red'>*</font>"."ให้ครบถ้วน";
	echo "<br><br><br><input type='button' value='กลับไปตรวจสอบ'  onclick='history.back();' /></h2></div>";
exit();
}

include("connect.inc.php");
		$sql="INSERT INTO `request_form` (`id`,`date`,`case`,`department`,`tel`,`detail`,`name`,`way`,`specify`,`date_time`,`status`,`ipaddress`)VALUES (NULL , '$date', '$case', '$department', '$tel', '$detail', '$name', '$way', '$specify', '$date_time', '$status', '$ipaddress');";
			mysql_query($sql) or die ("ไม่สามารถเพิ่มข้อมูลได้");
			echo "<div align='center'>";
		echo "<center>";
		echo "บันทึกข้อมูลเข้าเรียบร้อย";
	    echo "<meta http-equiv='refresh'  content='1;URL=index.php'>";
		echo "</center>";
			echo "</div>";
			mysql_close();

			?>