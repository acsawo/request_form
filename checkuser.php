<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Check User</title>
</head>
<body>
<?php
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0); 
session_start();
ob_start();

if ($_POST[psd] == ""){
	echo "<meta http-equiv='refresh' content='2;url=admin1.php'>";	
?>
<script>
	Swal.fire({
  	position: 'center',
  	icon: 'error',
  	title: 'กรุณาใส่รหัสผ่าน',
  	showConfirmButton: false,
  	timer: 2000
})
</script>
<?php
	exit();
}
if($_POST['psd']=="2432"){

    $names="admin";
    $limitTime=time()+60*60;
    setcookie("request_form",$names,$limitTime);
    echo $_COOKIE[request_form];
    echo "<meta http-equiv='refresh' content='2;url=admin1.php'>";	?>
    <script>
	Swal.fire({
  	position: 'center',
  	icon: 'success',
  	title: 'รหัสผ่านถูกต้อง',
  	showConfirmButton: false,
  	timer: 2000
})
</script>
<?php
    ob_end_flush();

}else{
    echo "<meta http-equiv='refresh' content='2;url=admin1.php'>";	
    ?>
<script>
	Swal.fire({
  	position: 'center',
  	icon: 'error',
  	title: 'รหัสผ่านไม่ถูกต้อง',
  	showConfirmButton: false,
  	timer: 2000
})
</script>
<?php

}


?>

</body>
</html>






