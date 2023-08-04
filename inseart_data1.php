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
			?><script>
			Swal.fire({
			  position: 'center',
			  icon: 'success',
			  title: 'บันทึกข้อมูลเรียบร้อย]',
			  showConfirmButton: false,
			  timer: 2000
		})
		</script><?php
	    echo "<meta http-equiv='refresh'  content='1;URL=index1.php'>";
		echo "</center>";
			echo "</div>";
			mysql_close();

			?>
</body>
</html>
