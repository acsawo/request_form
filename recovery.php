<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recoverty</title>
	<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<!-- <div class="container">
    <header>
        <div class="logo"><img src="img/logo.jpg" alt=""></div>
        <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
        <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
    </header>
    <section>
        <div class="body-login"> -->
		<?php 
		$id_select = $_GET['id_select'];
		include("connect.inc.php");
		$sql="UPDATE `request_form` SET `status` = '1' WHERE id = '$id_select'";
			mysql_query($sql) or die ("ไม่สามารถเพิ่มข้อมูลได้");
			// echo "กู้ข้อมูลเรียบร้อย";
	    	echo "<meta http-equiv='refresh'  content='2;URL=admin1.php'>";
			mysql_close();
		?>
        <!-- </div>
    </section>
    <footer>
       <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
    </footer>
</div> -->
<script>
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'กู้ข้อมูลเรียบร้อย',
  showConfirmButton: false,
  timer: 2000
})
</script>
</body>
</html>


