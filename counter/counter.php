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
//����ѧ�������� counter.txt ������ҧ����� ���纵���Ţ 1 ���
if (file_exists("counter.txt") == false) {
  $fp = fopen("counter.txt", "w");
  fputs($fp, 1);
  fclose($fp);
}
//�Դ��� counter.txt ������ҹ����ѡ�� 6 ����á������������� $pgcount
$fp = fopen("counter.txt", "r");
$pgcount = fgets($fp, 6);
fclose($fp);
++$pgcount;                      //������ҵ���� $pgcount ��� 1
$pgcount = "00000" . $pgcount;   //��� 00000 ��˹��

//�Ѵʵ�ԧ�������� 6 ����ѡ�� ����ҷҧ��Ңͧʵ�ԧ����ѡ
$pgcount = substr($pgcount, -6);
?>
<BODY bgcolor= #FFFFEA>
<CENTER><FONT  COLOR=#000000><B><? echo "$pgcount" ?>  </B></FONT>
</CENTER>
</BODY>
</HTML>
<?
//��¹��Ңͧ����� $pgcount ��Ѻŧ������ counter.txt
$fp = fopen("counter.txt", "w");
fputs($fp, (int) $pgcount);
fclose($fp);
?>
