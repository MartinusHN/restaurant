<?php
  
  function _THEAD($label,$metode,$act) {
    echo"
      <form method='$metode' Action='$act' enctype='multipart/form-data'>
      <table class='tform'>
      <tr>
        <td colspan=3><h3><center>$label</h3></td>
      </tr>" ;
  }
          
  function _TROW($enabled,$jenis,$label,$nama,$size,$ukuran,$isi){
    echo"
      <tr>
        <td>$label</td>
        <td> </td>
        <td><input type='$jenis' required='required' $enabled name='$nama' size='$size' maxlength='$ukuran' value='$isi'></td>
      </tr>";
  }
          
  function _TAREA($label,$nama,$isi){
    echo"
      <tr>
        <td>$label </td>
        <td> </td>
        <td><textarea  rows='4' cols='25' required='required' name='$nama'>$isi</textarea></td>
      </tr>";
  }
  
  function _TBROWSE($label,$nama){
    echo"
      <tr>
        <td>$label</td>
        <td> </td>
        <td><input type='file' name='$nama'></td>
      </tr> " ;
  }
  
  function _TTGL($label,$nama,$value){
   echo"
      <tr>
        <td>$label</td>
        <td> </td>
        <td><input type='date' name='$nama' value='$value'></td>
      </tr> " ;
  }
  
  function COMBOBOX($label,$name,$pilihan,$range,$value){
		echo"<tr>
				<td>$label</td>
				<td> </td>
				<td>
					<select name='$name' id='$name'>";
		if ($range==""){
			$a=explode("*",$pilihan);
			$b=count($a);
			for($i=0; $i<$b; $i++){
				if($a[$i]==$value){
					echo"<option value='$a[$i]' selected>$a[$i]</option>";
				}else{
					echo"<option value='$a[$i]'>$a[$i]</option>";
				}
			}
		}else{
			$a=explode("-",$pilihan);			
			for ($i=$a[0]; $i<=$a[1]; $i++){
				echo"<option value='$value'>$i</option>";
			}
		}
				echo"</select>
				</td>
			</tr>";
  }
  
  function _COMBOISI($label,$name,$tabel,$order,$id,$isi,$value){
	  echo"
	  <tr>
	  	<td>$label</td>
		<td> </td>
		<td>
		  <select name='$name'>";
		  $s="select*from $tabel order by $order desc";
		  $h=mysql_query($s);
		  while($r=mysql_fetch_array($h)){
			  if($value==$r[$id]){
				echo" <option value='$r[$id]' selected>$r[$isi]</option>";  
			  }else{
			  	echo" <option value='$r[$id]'>$r[$isi]</option>";
			  }
		  }
		  echo"
		  </select>
	  	</td>
	  </tr>";
  }
  
  function _COMBOISI2($label,$name,$tabel,$order,$id,$isi,$isi2){
	  echo"
	  <tr>
	  	<td>$label</td>
		<td> </td>
		<td>
		  <select name='$name'>";
		  $s="select*from $tabel order by $order desc";
		  $h=mysql_query($s);
		  while($r=mysql_fetch_array($h)){
			  echo"
			  <option value='$r[$id]'>$r[$isi] ($r[$isi2])</option>";
		  }
		  echo"
		  </select>
	  	</td>
	  </tr>";
  }
          
  function _TVALID($label){
    echo"
      <tr>
        <td colspan='3'>
          <input type='submit' name='SUBMIT' value='$label'>
          <input type=reset name=RESET value=Batal onclick=self.history.back()>
          </td>
      </tr> 
      </table>
      </form>
      ";
  }
  function acak($panjang){
    $karakter='123456789';
    $string='';
    for ($i=0;$i<$panjang;$i++){
		$pos = rand(0,strlen($karakter)-1);
		$string.=$karakter{$pos};
    }
    return $string;
  }
?>
