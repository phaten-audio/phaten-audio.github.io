<?php
header('Content-type:text/html;charset=utf-8');
setlocale(LC_ALL, 'zh_CN'); // ����Ϊ���ĵ�����Ϣ

function goback(){
	//�ض��������   
	header("Location: https://www.phaten-audio.com/zh/goback");   
	//ȷ���ض���󣬺������벻�ᱻִ��   
	exit;
}

function writeParam(){
  $fp = fopen('custform.csv', 'a');  
  $time = date('Y-m-d H:i:s',time());
  $com = iconv("UTF-8", "GB2312//IGNORE", $_POST['company']);
  $email = iconv("UTF-8", "GB2312//IGNORE", $_POST['email']);
  $topic = iconv("UTF-8", "GB2312//IGNORE", $_POST['topic']);
  $content = iconv("UTF-8", "GB2312//IGNORE", $_POST['content']);
  fputcsv($fp,array($com,$email,$topic,$content,$time));   
  fclose($fp);

  goback();
}

function writeTxt(){
	$myfile = fopen("outyyyy.txt", "w") or die("Unable to open file!");
	fwrite($myfile,$_POST['company']);
	fclose($myfile);
}

writeParam();