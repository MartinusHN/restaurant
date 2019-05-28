<?php
include"koneksi.php";

if(empty($_GET[kategori])){
echo"<br/><table align='center' border='1' class='list'>
			<tr>
				<th colspan='3'>.:: Pilih Kategori ::.</th>
			</td>
			<tr align='center'>
				<td><a href='index.php?xlink=produk.php&kategori=Iklan'>Iklan</a></td>
				<td><a href='index.php?xlink=produk.php&kategori=Makanan'>Makanan</a></td>
			</tr>
	</table>";
}else{
echo"<br/>
		<table align='center' border='1' class='list'>
			<tr>
				<th colspan='5'>Makanan $_GET[kategori]</th>
			</td>
			<tr align='center'>
				<td width='5px'>No</td>
				<td>Kode</td>
				<td>Nama</td>
				<td>Harga</td>
				<td>Foto</td>
			</tr>";
		$i=0;
		$sql=mysql_query("select*from produk where kategori='$_GET[kategori]'");
		while($row=mysql_fetch_array($sql)){
		$i++;	
			echo"
			<tr align='left' valign='top'>
				<td width='5px'>$i </td>	
				<td>$row[kode]</td>
				<td>$row[nama]</td>
				<td>$row[harga]</td>
				<td><img src='foto/$row[foto]' width='55px' /></td>
			</tr>";
		}
		echo"</table>";
}