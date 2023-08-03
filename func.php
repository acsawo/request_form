<?php
function get_status($status) {
	if ($status == 1) {
		return "ยังไม่ได้ดำเนินการ";
	}elseif($status == 2){
		return "ดำเนินการเรียบร้อย";
	}
	 else{
	 	return "ถูกลบแล้ว";
	}
}
?>