<?php
  
  if(isset($_POST['btnOk'])){

  $nim = $_POST['nim'];

  $nama= $_POST['nama'];

  $telp= $_POST['telp'];

  foreach($nim as $key => $val){

  echo 'Nomor Induk = '.$nim[$key].' Nama = '.$nama[$key].' Telp = '.$telp[$key].'<br/>';

  }

  }

  ?>

<form method="get" name="frm" action="">

  <input name="jumlah" type="text" />

  <input type="submit" name="btnJumlah" value="Ok" />

  </form>

<form method="post" name="frmpost" action="">

  <table width="547" border="0" cellpadding="0" cellspacing="0">

  <!--DWLayoutTable-->

  <tr>

  <td width="32" height="22" valign="top">No</td>

  <td width="114" valign="top">NIM</td>

  <td width="240" valign="top">Nama</td>

  <td width="161" valign="top">Telp</td>

  </tr>

  <?php

  if(isset($_GET['jumlah']) && $_GET['jumlah']>0){

  $jumlah_form = $_GET['jumlah'];

  }

  else{

  $jumlah_form = 1;

  }

  for($i=1; $i<=$jumlah_form; $i++){

  ?>

  <tr>

  <td height="23"><?php echo $i; ?></td>

  <td><input name="nim[]" type="text" size="10" /></td>

  <td><input name="nama[]" type="text" size="30" /></td>

  <td><input type="text" name="telp[]" /></td>

  </tr>

  <?php

  }

  ?>

  <tr>

  <td height="23" colspan="4" align="right"><input type="submit" name="btnOk" value="Simpan" /></td>

  </tr>

  </table>

  </form>