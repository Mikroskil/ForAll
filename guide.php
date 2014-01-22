<html>
<head>
<title>Guide</title>
</head>

<body>



<img src="atas.jpg" width="100%" height="80" alt="1" />
<table width="1166" height="877" border="0" align="center">
  <tr>
    <td height="21" colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td width="250"><a href="http://mikroskil.ac.id" target="_new"><img src="mikro.jpg" width="234" height="162" alt="1" /></a></td>
    <td colspan="3">
      <object type="application/x-shockwave-flash" data="baner.swf" width="669" height="200">
          <param name="quality" value="high" /> 
      </object>
    </td>
    <td colspan="3"><a href="http://id.wikipedia.org/wiki/Kota_Sibolga" target="_new"><img src="sibolga.png" width="196" height="193" alt="1" /></a></td>
  </tr>
  <tr>
    <td colspan="4">
            <object type="application/x-shockwave-flash" data="line.swf" width="680" height="26">
            <param name="quality" value="high" />    
            </object>
    </td>
    <td width="140">&nbsp;</td>
    <td width="51">&nbsp;</td>
    <td width="1">&nbsp;</td>
  </tr>
  <tr>
    <td>			<a href="index.php"><img src="home.png" width="188" height="60" onMouseOver="this.src='home1.png'" onMouseOut="this.src='home.png'" /></a></td>
    <td width="225"><a href="guide.php"><img src="guide.png" width="188" height="60" onMouseOver="this.src='guide.png'" onMouseOut="this.src='guide1.png'"  /></a></td>
    <td width="214"><a href="tw.php"><img src="tw.png" width="188" height="60" onMouseOver="this.src='tw1.png'" onMouseOut="this.src='tw.png'"  /></a></td>
    <td width="258"><a href="maps.php"><img src="maps.png" width="188" height="60" onMouseOver="this.src='maps1.png'" onMouseOut="this.src='maps.png'"  /></a></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    <td colspan="3" bgcolor="#009966" align="center">FOLLOW US</td>
  </tr>
  <tr>
    <td colspan="4"><h2>Berikut ini adalah daftar para guide yang dapat membantu <br/>para wisatawan menjelajahi kota sibolga.</h2></td>
    <td colspan="3">	<a href="https://www.facebook.com/pages/Kota-Sibolga/103143496392099?ref=ts&fref=ts&rf=108188089208833	" target="_new"> <img src="fb.png" width="60" height="60" alt="1" /></a>
   					 	<a href="http://twitter/sibolga" target="_new"><img src="twitter.png" width="63" height="60" alt="1" /></a>
    <img src="rss.jpg" width="68" height="61" alt="1" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td bgcolor="#000000"><?php
	 
    include "koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email']; 
	$hp = $_POST['hp'];
    $fb = $_POST['fb'];
	$pesan = $_POST['pesan'];

    mysql_query("INSERT INTO tabelsaya(nama, email, hp, fb, pesan) VALUES('$nama','$email','$hp','$fb','$pesan')");
   
    ?></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><h3>&nbsp;</h3></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="http://mikroskil.ac.id" target="_new"><img src="habi.png" width="234" height="238" alt="1" /></a></td>
    <td colspan="2"><h3>MR.M. Habibi</h3>
      <table width="376" height="199" role="presentation">
        <tbody>
          <tr>
            <th width="139" align="left">Tanggal Lahir</th>
            <td width="208" > : 27 Januari 1992, Rantauprapat</td>
          </tr>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Status Hubungan</th>
            <td>: Lajang</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Agama</th>
            <td>: Islam </td>
          </tr>
          <tr>
            <th align="left">Tarif/hari</th>
            <td>: Rp. 600.000</td>
          </tr>
        </tbody>
    </table></td>
    <td bgcolor="#000000"></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><h3>&nbsp;</h3></td>
    <td bgcolor="#000000"></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="http://mikroskil.ac.id" target="_new"><img src="roy.png" width="234" height="238" alt="1" /></a></td>
    <td colspan="2"><h3>Mr.Roy Pandapotan</h3>
      <table width="376" height="199" role="presentation">
        <tbody>
          <tr>
            <th width="139" align="left">Tanggal Lahir</th>
            <td width="208" > : 1 Agustus 1992, Medan</td>
          </tr>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Status Hubungan</th>
            <td>: Lajang</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Agama</th>
            <td>: Islam </td>
          </tr>
          <tr>
            <th align="left">Tarif/hari</th>
            <td>: Rp. 600.000</td>
          </tr>
        </tbody>
    </table></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><h3>&nbsp;</h3>
      <table width="376" height="199" role="presentation">
        <tbody>
          <tr>
            <th width="139" align="left">&nbsp;</th>
            <td width="208" >&nbsp;</td>
          </tr>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
          <tr>
            <th align="left">&nbsp;</th>
            <td>&nbsp;</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th align="left">&nbsp;</th>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th align="left">&nbsp;</th>
            <td>&nbsp;</td>
          </tr>
        </tbody>
    </table></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">
     <tr>
    <td><a href="http://mkiroskil.ac.id" target="_new"><img src="rio.png" width="234" height="238" alt="1" /></a></td>
    <td colspan="2"><h3>Mr. Subendrio</h3>
      <table width="376" height="199" role="presentation">
        <tbody>
          <tr>
            <th width="139" align="left">Tanggal Lahir</th>
            <td width="208" > : 27 september 1993, P. Siantar</td>
          </tr>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Status Hubungan</th>
            <td>: Lajang</td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <th align="left">Agama</th>
            <td>: Islam </td>
          </tr>
          <tr>
            <th align="left">Tarif/hari</th>
            <td>: Rp. 600.000</td>
          </tr>
        </tbody>
    </table></td>
    <td bgcolor="#000000">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
    
    
    <form action="guide.php" method="post" >
    </form>



<table border="0">
<tr>
	<td>E-mail</td>
    <td>:</td>
    <td><b>Sibolang@Sibolgaguide.zz.mu</b></td>
</tr>
<tr>
	<td>Telp</td>
    <td>:</td>
    <td><b>(+62)85212345678</b></td>
</tr>
</table>
<b><u>jsibolangi.zz.mu</u></b>
            	</p>
          	</div>
      </div>
      
      <div id="bawah">
        	<div class="copyright">
            	Copyright &copy; Mikroskil TI || Designed by TI-C (Pagi)
            </div>
	</div> 	     
</div> 
    
    
    
    
    
    
    
    
    
    
    </td>
    <td valign="top">
    <?php
	include "proses.php";
	?>
    
    
    
    </td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="175" colspan="4"><img src="guide.jpg" width="955" height="168" alt="1" /></td>
    <td colspan="3" rowspan="3">-<img src="baca.jpg" width="193" height="293" alt="1" /></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><div align="center"><b><h3>Main Office</h3></b></div></td>
    <td colspan="2" bgcolor="#999999"><div align="center"><b><h3>Marketing Trading International</h3>
    </b></div>
    </td>
    <td bgcolor="#999999"><div align="center"><b><h3>Other Contact</h3>
    </b></div>
    </td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">Sibolang Phone &amp; Fax : +62-61-8223200</br>
        Jl. Setia Budi, Komplek Setia Budi,
        Medan, North Sumatera. Indonesia </td>
    <td colspan="2" bgcolor="#CCCCCC">Labuhan Kasih</br>
                    Mobile : +62-87868285058</br>
                    Skype : Sibolang</br>
                    E-mail : sibolang@gmail.com</br></td>
    <td bgcolor="#CCCCCC">E-mail : M_Habibi@gmail.com</br>
        Ph : +6261 8223200</br>
        Mobile : +6261 878 6752 6234</br>
        Jl. Bromo Ujung Gg. Sedar No. 9A</br>
        Medan, North Sumatera, Indonesia</br> </td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
</table>
<img src="bawah.jpg" width="100%" height="84" alt="1" />
</body>
</html>
