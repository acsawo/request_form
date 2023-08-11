<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Add Data</title>
</head>
<body>
<?php 
$user = $_POST['user'];
$date = $_POST['date'];
$case = $_POST['case'];
$department = $_POST['department'];
$tel = $_POST['tel'];
$detail = $_POST['detail'];
$name = $_POST['name'];
$passcode = $_POST['passcode'];
$way = $_POST['way'];
$specify = $_POST['specify'];
$date_time= date("dmYhi");
$status = "1";
$ipaddress = $_SERVER['REMOTE_ADDR'];



if(($_POST['date']=="")||($_POST['case']=="")||($_POST['department']=="")||($_POST['tel']=="")||($_POST['detail']=="")||($_POST['name']=="")||($_POST['passcode']=="")){
	echo "กรุณากรอกข้อมูลตามเครื่องหมายดอกจันสีแดง "."<font color='red'>*</font>"."ให้ครบถ้วน";
	echo "<br><br><br><input type='button' value='Back'  onclick='history.back();'  style='padding:15px; background-color:salmon; color:white;'/></h2></div>";
exit();
}

if(!ereg("([0-9]{4})",$_POST['passcode'])){
	
	echo "<br><br><center><h2 style='color:gray;'>กรุณาใส่ข้อมูล PassCode เป็นตัวเลข 4 หลัก</h2></center>";
	echo "<br><br><center><input type='button' value='Back'  onclick='history.back();'  style='padding:15px; background-color:salmon;text-align:center;border:none;width:150px; color:white;border-radius:5px;'/></center>";
	exit();
}

include("connect.inc.php");
		$sql="INSERT INTO `request_form` (`id`,`date`,`case`,`department`,`tel`,`detail`,`name`,`passcode`,`way`,`specify`,`date_time`,`status`,`ipaddress`)VALUES (NULL , '$date', '$case', '$department', '$tel', '$detail', '$name', '$passcode', '$way', '$specify', '$date_time', '$status', '$ipaddress');";
			mysql_query($sql) or die ("ไม่สามารถเพิ่มข้อมูลได้");
			echo "<div align='center'>";
			?><script>
			Swal.fire({
			  position: 'center',
			  icon: 'success',
			  title: 'บันทึกข้อมูลเรียบร้อย]',
			  showConfirmButton: false,
			  timer: 2000
		})
		</script><?php
		if($user ==1){
			echo "<meta http-equiv='refresh'  content='1;URL=admin.php'>";
		}else{
			echo "<meta http-equiv='refresh'  content='1;URL=index.php'>";
		}
		echo "</center>";
			echo "</div>";
			mysql_close();

			?>
</body>
</html>
