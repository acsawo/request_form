<?php 
session_start();
ob_start();
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Request form user</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
$passcode_form = $_POST['passcode_form'];
$id_select = $_POST['id_select'];
// echo $passcode_form;
// echo $id_select;

if(!isset($_POST['passcode_form'])){
	echo "<meta http-equiv='refresh'  content='0;URL=index.php'>";
	exit();
}
include('connect.inc.php');  
$sql = "SELECT passcode FROM `request_form` WHERE `id` = $id_select" ;		
$result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ; 
while($dbarr = mysql_fetch_array($result)) {
	$passcode = $dbarr['passcode'] ;
}
// echo $passcode;
if($passcode_form == ""||$passcode_form <> $passcode){
?>	<script>
	Swal.fire({
  	position: 'center',
  	icon: 'error',
  	title: 'passcode ไม่ถูกต้อง',
  	showConfirmButton: false,
  	timer: 2000
})
</script>
<meta http-equiv='refresh'  content='2;URL=index.php'>";
<?php
}else{?>
	<script>
	Swal.fire({
  	position: 'center',
  	icon: 'success',
  	title: 'passcodeถูกต้อง',
  	showConfirmButton: false,
  	timer: 2000
})
</script>
<?php
	include('func.php');
	include('connect.inc.php');
	$sql = "select * from `request_form` where id = '$id_select' " ;		
	$result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ;
		while($dbarr = mysql_fetch_array($result)) {
		$id = $dbarr['id'] ;
		$date = $dbarr['date'];
		$case = $dbarr['case'] ;
		$department = $dbarr['department'] ;
		$tel = $dbarr['tel'] ;
		$name = $dbarr['name'] ;
		$way = $dbarr['way'] ;
		$specify = $dbarr['specify'] ;
		$detail = $dbarr['detail'] ;
		$status = $dbarr['status'] ;
		}  ?>
		<div class="container">
		<header>
			<div class="logo"><img src="img/logo.jpg" alt=""></div>
			<div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
			<div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
		</header>
		<section> 
		<form name="form1" method="post" action="update_data.php">
			<div class="body-form">
			<input type="hidden" name="user" value="0">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">วันที่</div>
				  <div class="w80 padding10"><input type="text" id="datepicker" value="<?php echo $date; ?>" name="date" autocomplete="off" required ></div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">ลักษะของปัญหาหรือความต้องการ <span class="font-red">*</span></div>
				  <div class="w80 padding10"> 
					<select id="country" name="case">
					  <option value="ขอสถิติข้อมูล" <?php if($case=="ขอสถิติข้อมูล"){echo "selected";}  ?>>ขอสถิติข้อมูล</option>
					  <option value="อื่นๆ"<?php if($case=="อื่นๆ"){echo "selected";}  ?>>อื่นๆ </option>
					</select>
			  </div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">หน่วยงาน/แผนก <span class="font-red">*</span></div>
				  <div class="w80 padding10"><input type="text" id="input-form" name="department" value="<?php echo $department; ?>" required></div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">หมายเลขติดต่อกลับ <span class="font-red">*</span></div>
				  <div class="w80 padding10"><input type="text" id="input-form" name="tel" value="<?php echo $tel; ?>" required></div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">รายละเอียด <span class="font-red">*</span></div>
				  <div class="w80 padding10">
				  <textarea name="detail" rows="4" cols="50" required><?php echo $detail; ?></textarea>
			  </div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">ผู้ขอข้อมูล <span class="font-red">*</span></div>
				  <div class="w80 padding10"><input type="text" id="input-form" name="name" value="<?php echo $name; ?>" required></div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right">ช่องทางส่งผลการดำนเนินการ</div>
				  <div class="w80 padding10"> 
					<select class="form-control" name="way">
					  <option <?php if($way=="email"){echo "selected";}  ?>>email</option>
					  <option <?php if($way=="line"){echo "selected";}  ?>>line</option>
					  <option <?php if($way=="เครื่องคอมพิวเตอร์ในระบบ รพ."){echo "selected";}  ?>>เครื่องคอมพิวเตอร์ในระบบ รพ.</option>
					  <option <?php if($way=="อื่นๆ"){echo "selected";}  ?>>อื่นๆ</option>
					</select>
				  </div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10"></div>
				  <div class="w80 padding10">
					<div class="w100 dtable">
					  <div class="w10 right" style="display:table-cell;vertical-align middle;">ชื่อบัญชี : </div>
					  <div class="w90"> <input type="text" id="input-form" name="specify" value="<?php echo $specify; ?>"></div>
					</div>
				  </div>
			  </div>
			  <div class="w100 dflex">
				  <div class="w20 padding10 right"></div>
				  <div class="w80 padding10"><input type="button" onclick="window.location.href='index.php';" value ="ยกเลิก"><input type="submit" value="บันทึก"></div>
			  </div>
	
			</div>
			</form>
		</section>
		<footer>
		   <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
		</footer>
	</div>
	<?php
	  }
?>
</body>
</html>