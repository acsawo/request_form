<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no"/>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="js/gijgo.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,table{
font-family : tahoma,Verdana ;
font-size : 14 px;
}
</style>
<?php
		include('func.php');
		include('connect.inc.php');
		//$sql = "select * from telnew where (department like '%$_POST[search]%') or (inner_line like '%$_POST[search]%')" ; ตัวอย่าง
		//$sql = "select * from publish_form where (username like '%$_POST[search]%') or (department like '%$_POST[search]%') or (ipaddress like '%$_POST[search]%')" ;		
		$sql = "SELECT * FROM request_form WHERE status = 1 or status = 2 ORDER BY id DESC " ;		
		$result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ;
	?>
<div class="container">
<pre><h3> <img src="img/logo.jpg" class="img-polaroid width="80">&nbsp;&nbsp;&nbsp;แบบฟอร์มขอข้อมูลสถิติ จากระบบโรงพยาบาล</h3></pre>
<div align="center">
<a href="form.php" class="btn btn-lg btn-primary" role="button" aria-pressed="true">แจ้งขอข้อมูล</a> <a href="admin.php" class="btn btn-lg btn-info" role="button" aria-pressed="true">admin</a>
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><br>
    </tr>
        <tr>
      <td><div align="center">
        <table class="table table-hover" width="800" border="1" cellspacing="0" cellpadding="0">
		<thead>
          <tr bgcolor="#CCCCCC">
		    <td scope="col" width="50"><div align="center">ลำดับ</div></td>
            <td scope="col" width="150"><div align="center">วันที่</div></td>
            <td scope="col" width="250"><div align="center">ลักษณะปัญหาหรือความต้องการ</div></td>
			<td scope="col" width="250"><div align="center">ผู้ข้อ</div></td>
			<td scope="col"width="150"><div align="center">หมายเลขติดต่อ</div></td>
			<td scope="col" width="200"><div align="center">สถานะ</div></td>
          </tr>
		  </thead>
          <?php while($dbarr = mysql_fetch_array($result)) {
				$id = $dbarr['id'] ;
				$date = $dbarr['date'];
				$case = $dbarr['case'] ;
				$department = $dbarr['department'] ;
				$name = $dbarr['name'] ;
				$tel = $dbarr['tel'] ;
				$status = $dbarr['status'] ;?>
          <tr>

            <td><div align="center"><?php echo "<a href='detail.php?id_select=$id'>$id</a>"; ?></div></td>
		    <td><div align="center"><?php echo "<a href='detail.php?id_select=$id'>$date</a>"; ?></div></td>
            <td><div align="center"><?php echo "<a href='detail.php?id_select=$id'>$case</a>"; ?></div></td>
			<td><div align="center"><?php echo "<a href='detail.php?id_select=$id'>$name</a>"; ?></div></td>
            <td><div align="center"><?php echo "<a href='detail.php?id_select=$id'>$tel</a>"; ?></div></td>
			<td bgcolor="<?php if($status==1){echo 'red';}else{echo 'green';}?>"> <div align="center"><?php echo get_status($status); ?></div></td>
		  </tr>
          <?php } ?>
        </table>
      </div>
    </tr>
  </table>
 </div>
 </div>
</body>
</html>


