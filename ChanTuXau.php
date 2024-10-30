<?php
/*
Plugin Name: Chan Tu Xau
Version: 1.0
Plugin URI: http://Congtyduhoc.vn/
Description: Chặn những từ có ý nghĩa không tốt, chi tiết xem demo tại http://congtyduhoc.vn
Author: CongTyDuHoc
Author URI: http://Congtyduhoc.vn
*/
	function chantuxau($text){
		$TuXau = array("fuck", "sex");
		$KetQua = str_replace($TuXau, "***", "Từ ngữ không tốt đã loại bỏ");
		return $KetQua ;
	}
	add_filter('the_title',chantuxau);
	add_filter('the_content',chantuxau);
?>