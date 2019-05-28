<?php
	include"koneksi.php";	
	
	if(isset($_GET['k'])){
		$username=$_POST['xemail'];
		$password=$_POST['xpass'];
		
		$sql=mysql_query("select*from konsumen where email='$username' and password='$password'");
		$c=mysql_num_rows($sql);
		$r=mysql_fetch_array($sql);
		if($c>=1){
			session_start();
			$_SESSION[log]="$r[kode]";
			header("location: konsumen/index.php");
		}else{
			echo"Kamu Masih Belum Berhasil Login, Terus Berjuang";
		}
	}else{
		$username=$_POST['xusername'];
		$password=$_POST['xpass'];
		
		$sql=mysql_query("select*from loginadmin where username='$username' and password='$password'");
		$c=mysql_num_rows($sql);
		
		if($c>=1){
			header("location: admin/index.php");
		}else{
			echo"Kamu Masih Belum Berhasil Login, Terus Berjuang";
		}
	}
	
?>