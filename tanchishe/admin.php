<?php
	header("Content-Type:text/html;charset=utf-8");
	$level=$_POST['level'];
	$name=$_POST['name'];
	$fenshu=$_POST['fenshu'];
	mysql_connect('hdm160055123.my3w.com','hdm160055123','Wq575757');
	mysql_query("set names utf8");   
    mysql_select_db('hdm160055123_db');
	$sql="insert into fenshulist (level,name,fenshu) values ($level,'$name',$fenshu)";
	$res=mysql_query($sql);
	if($res){
		echo '1';
	}
?>