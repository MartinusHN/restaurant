<?php

include"function.php";
if(isset($_GET[p])){
	echo"<br/><center>$_GET[p]</center>";
}else{
_THEAD("Mendaftar Sebagai Konsumen","post","admin/aksi.php?mod=konsumen&aksi=input");
_TROW("readonly","text","Kode","xkode","10",10,"KNS-".acak(3));
_TROW($enabled,"text","Email","xemail","50",30,"");
_TROW($enabled,"password","Password","xpass","30",30,"");
_TROW($enabled,"text","Nama","xnama","50",30,"");
_TROW($enabled,"text","No. Telepon","xno","20",13,"");
COMBOBOX("Jenis Kelamin","xjk","Laki-Laki*Perempuan",$range,"");
_TAREA("Alamat","xalamat","");
_TVALID("Daftar");
}
?>