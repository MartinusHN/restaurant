	<html>
	<head>
    	<title>Restaurant</title>
     	<link href="style.css" type="text/css" rel="stylesheet" />
     </head>
     <body>
     	<table class="tbl" width="900px" height="600px" align="center">
        	<tr>
           		 <td colspan="2" height="200px"><img src="1.jpg" width="100%" height="200px" /></td>
         	</tr>
            <tr>
            	<td width="200px" valign="top">
                	<table align="center" width="100%" class="menu">
                    	<tr>
                        	<th>.:: Menu ::.</th>
                        </tr>
                        <tr>
                        	<td><a href="index.php?xlink=home.php">Home</a></td>
                        </tr>
                        <tr>
                        	<td><a href="index.php?xlink=produk.php">Daftar Makanan</a></td>
                        </tr>
                        <tr>
                        	<td><a href="index.php?xlink=daftar.php">Daftar Konsumen</a></td>
                        </tr>
                        <tr>
                        	<td><a href="index.php?xlink=logink.php">Login Konsumen</a></td>
                        </tr>
                        <tr>
                        	<td><a href="index.php?xlink=logina.php">Login Admin</a></td>
                        </tr>
                        <tr>
                            <td><a href="index.php?xlink=tentang.php">Tentang</a></td>
                        </tr>
						<tr height="100px">
			<th>.:: Kalender ::.</th>
			</tr>
                    </table>
					<table align="center" height="auto" width="190px">
		<tr>
		<td><script src="calenderq.js" type="text/javascript">
		</script></td>
		</table>
                </td>
                <td valign="top" class="isi">
                	<?php
					error_reporting(0);
						$link=$_GET['xlink'];
						
						if(isset($link)){
							include"$link";
						}else{
							include"home.php";
						}
							
					?>
                </td>
           </tr>
           <tr>
              	<td colspan="2" height="30px"  class="footer" align="center">Martinus Hasiholan N</td>
           </tr>
        </table>
     </body>
</html>