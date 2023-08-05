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
    <title>Logout</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
setcookie("request_form", FALSE);
echo "<meta http-equiv='refresh'  content='2;URL=index.php'>";
?>
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'ออกจากระบบเรียบร้อย',
  showConfirmButton: false,
  timer: 2000
})
</script>
</body>
</html>


