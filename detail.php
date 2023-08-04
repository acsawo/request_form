<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no"/>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="js/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


    <!-- ใช้แน่อนอ -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Sarabun', sans-serif;
}
body {
  background-color: #FAFAFA;
}
.header{
  height:100px;
  padding:0 0 20px 0;
}
.float-left{
 float:left;
}
.float-right{
float:right;
}
.left{
  text-align:left;
}
.right{
  text-align:right;
}
.center{
  text-align:center;
}
.page {
  width: 21cm;
  min-height: 29.7cm;
  padding: 1cm;
  margin: 0cm auto;
  border: 0.5px #D3D3D3 solid;
  border-radius: 5px;
  background: white;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.subpage {
  padding: 0.5cm;
  border: 2px solid pink;
  height: 270mm;  
}

#detail{
    background-color:WhiteSmoke;
    border-radius:4px;
    border:1px solid Silver;
    padding:0 20px 0 20px;
}
@page {
  size: A4;
  margin: 0;
}
@media print {
  .btn{
        display: none;
    }
}
</style> 
</head>

<body>
<?php
$id_select = $_GET['id_select'];
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
				?>
				  <?php }?>
 </div>
 <div class="book">
   <div class="page">
    <div class="subpage">
    <div class="header">
      <div class="float-left"><img src="img/logo.jpg" alt="logo" width="80px;"></div>
      <div class="float-right">
        <h4>ศูนย์สารสนเทศ</h4>
		    <h4>วันที่ .................</h4>
		    <h4>เวลา .................</h4>
      </div>
    </div>
		<div class="left"><h4><b>บันทึกแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</b></h4></div>
		<div class="left"><h4>ถึง&nbsp;&nbsp;<u>หัวหน้ากลุ่มงานเทคโนโลยีสารสนเทศ</u></h4></div>
		<div class="left"><h4>จากหน่วยงาน&nbsp;&nbsp;&nbsp;  <u><?php echo "$department"; ?></u>&nbsp;&nbsp;   เบอร์โทร &nbsp;&nbsp;<u><?php echo "$tel"; ?></u>&nbsp;&nbsp;วันที่ &nbsp;&nbsp;<u><?php echo "$date"; ?></u></h4></div>
		<div class="left"><h4><b>ลักษณะของปัญหาหรือความต้องการ</b></h4></div>
		<div class="letf"><h4>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;<u><?php echo "$case"; ?></u></h4></div><hr>
		<div class="left"><h4><b>บันทึกรายละเอียดปัญหาหรือความต้องการ</b></h4></div>
		<div id="detail" class="left" ><h4><?php echo nl2br ("$detail"); ?></h4></div><br><br>
		<div class="left"><h4>ช่องทางส่งผลการดำเนินงาน&nbsp;&nbsp;<u><?php echo "$way"; ?></h4></u></div>
		<div class="left"><h4><u><?php echo "$specify"; ?></u></h4></div><br><br>
		<div class="right"><h4>ผู้แจ้งเรื่อง&nbsp;&nbsp;&nbsp;<u><?php echo "$name"; ?></h4></u></div><br>
		<div class="right"><h4>ผู้ดำเนินการ&nbsp;&nbsp;&nbsp;.................................</h4></div><br>
    <!-- <div align="center"><button type="button" class='btn btn-<?php if($status==1){echo "danger";}else{echo "success";}?>'> <?php echo get_status($status) ?></button></div> -->
    <div class="center"><br> <input type="button" class="btn btn-warning" value="พิมพ์" onclick="window.print();" /> </div>
    <div class="center"><br> <input type="button" class="btn btn-info" value="กลับไปหน้ารายการ" onclick="history.back();" /> </div>

</div>
  </div>
</div>
</body>
</html>
 
