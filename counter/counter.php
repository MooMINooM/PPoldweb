<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<META http-equiv="Pragma" content="no-cache"> 
<style type="text/css">
    body { margin: 0px 0px; padding: 0px 0px;font-size : 10pt; font-family : "MS Sans Serif"; }
	{ 
	FONT: 10pt "Microsoft Sans Serif","MS Sans Serif"; 
     }
 </style>
</HEAD>
<?php
//ถ้ายังไม่มีไฟล์ counter.txt ให้สร้างขึ้นมา โดยเก็บตัวเลข 1 ไว้
if (file_exists("counter.txt") == false) {
  $fp = fopen("counter.txt", "w");
  fputs($fp, 1);
  fclose($fp);
}
//เปิดไฟล์ counter.txt แล้วอ่านตัวอักษร 6 ตัวแรกมาเก็บไว้ที่ตัวแปร $pgcount
$fp = fopen("counter.txt", "r");
$pgcount = fgets($fp, 6);
fclose($fp);
++$pgcount;                      //เพิ่มค่าตัวแปร $pgcount ขึ้น 1
$pgcount = "00000" . $pgcount;   //เติม 00000 นำหน้า

//ตัดสตริงให้เหลือ 6 ตัวอักษร โดยเอาทางขวาของสตริงเป็นหลัก
$pgcount = substr($pgcount, -6);
?>
<BODY bgcolor= #FFFFEA>
<CENTER><FONT  COLOR=#000000><B><? echo "$pgcount" ?>  </B></FONT>
</CENTER>
</BODY>
</HTML>
<?
//เขียนค่าของตัวแปร $pgcount กลับลงสู่ไฟล์ counter.txt
$fp = fopen("counter.txt", "w");
fputs($fp, (int) $pgcount);
fclose($fp);
?>
