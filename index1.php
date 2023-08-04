<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <div class="logo"><img src="img/logo.jpg" alt=""></div>
        <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
        <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
    </header>
    <nav><a href="form1.php"><button class="SteelBlue">แจ้งขอข้อมูล</button></a> <a href="admin1.php"><button class="seagreen">Admin</button></a> </nav>
    <section>
        <div class="body-table">
        <?php
        include('func.php');
        include('connect.inc.php');        
            $sql = "SELECT * FROM request_form WHERE status = 1 or status = 2 ORDER BY id DESC " ;		
            $result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ; ?>

                <table class="table-list">
                        <tr>
		                    <th width="50"><div class="text-center">ลำดับ</div></th>
		                    <th width="150"><div class="text-center">วันที่</div></th>
		                    <th width="250"><div class="text-center">ลักษณะปัญหาหรือความต้องการ</div></th>
		                    <th width="250"><div class="text-center">ผู้แจ้ง</div></th>
		                    <th width="150"><div class="text-center">หมายเลขติดต่อ</div></th>
		                    <th width="200"><div class="text-center">สถานะ</div></th>
		                </tr>
                        <?php while($dbarr = mysql_fetch_array($result)) {
				        $id = $dbarr['id'] ;
				        $date = $dbarr['date'];
				        $case = $dbarr['case'] ;
				        $department = $dbarr['department'] ;
				        $name = $dbarr['name'] ;
				        $tel = $dbarr['tel'] ;
				        $status = $dbarr['status'] ;?>
                        <tr>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$id</a>"; ?></div></td>
		                    <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$date</a>"; ?></div></td>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$case</a>"; ?></div></td>
			                <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$name</a>"; ?></div></td>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$tel</a>"; ?></div></td>
                            <td><div class="text-center <?php if($status==1){echo 'red';}elseif($status==2){echo 'green';}else{echo 'gray';}?>"><?php echo get_status($status); ?></div></td>
		                </tr>
                        <?php } ?>
                </table>
        </div>
        </section>
    <footer>
        <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
    </footer>
</div>
</body>
</html>