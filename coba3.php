<?php

if (isset($_POST['btnOk'])) {
	$nim = $_POST['nim'];
	$nama= $_POST['nama'];
	$telp= $_POST['telp'];

	foreach ($nim as $key => $val) {
		echo 'Nomor Induk = '.$nim[$key].' Nama = '.$nama[$key].' Telp = '.$telp[$key].'<br/>';
	}
}
?>

<form method="get" name="frm" action="">
	<p>Pengimpor <input name="pengimpor" type="text" size="2" /></p>
	<p>Storage <input name="storage" type="text" size="2" /></p>
	<p>Depo <input name="depo" type="text" size="2" /></p>
	<p>Jenis Tanker <input name="tanker" type="text" size="2" /></p>
	<p><input type="submit" name="btnJumlah" value="Proses" /></p>
</form>

<form method="post" name="frmpost" action="">


	<!-- pengimpor -->
	<?php
	if (isset($_GET['pengimpor']) && $_GET['pengimpor'] > 0) {
		$jmlPengimpor = $_GET['pengimpor'];
	?>
		<table width="100" border="0" cellpadding="0" cellspacing="0">
			<!--DWLayoutTable-->
			<tr>
				<td width="100" valign="top">Pengimpor</td>
			</tr>
			<?php
			for ($i = 1; $i <= $jmlPengimpor; $i++) {
			?>
			<tr>
				<td><input name="pengimpor[]" type="text" size="2" /></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>
	<!-- end of pengimpor -->
	
	<!-- storage -->
	<?php
	if (isset($_GET['storage']) && $_GET['storage'] > 0) {
		$jmlStorage = $_GET['storage'];
	?>
		<table width="100" border="0" cellpadding="0" cellspacing="0">
			<!--DWLayoutTable-->
			<tr>
				<td width="100" valign="top">Storage</td>
			</tr>
			<?php
			for ($i = 1; $i <= $jmlStorage; $i++) {
			?>
			<tr>
				<td><input name="storage[]" type="text" size="2" /></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>
	<!-- end of storage -->
	
	<!-- depo -->
	<?php
	if (isset($_GET['depo']) && $_GET['depo'] > 0) {
		$jmlDepo = $_GET['depo'];
	?>
		<table width="100" border="0" cellpadding="0" cellspacing="0">
			<!--DWLayoutTable-->
			<tr>
				<td width="100" valign="top">Depo</td>
			</tr>
			<?php
			for ($i = 1; $i <= $jmlDepo; $i++) {
			?>
			<tr>
				<td><input name="depo[]" type="text" size="2" /></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>
	<!-- end of depo -->
	
	<!-- tanker -->
	<?php
	if (isset($_GET['tanker']) && $_GET['tanker'] > 0) {
		$jmlTanker = $_GET['tanker'];
	?>
		<table width="100" border="0" cellpadding="0" cellspacing="0">
			<!--DWLayoutTable-->
			<tr>
				<td width="100" valign="top">Tanker</td>
			</tr>
			<?php
			for ($i = 1; $i <= $jmlTanker; $i++) {
			?>
			<tr>
				<td><input name="tanker[]" type="text" size="2" /></td>
			</tr>
			<?php
			}
			?>
		</table>
		<?php
	}
	?>
	<!-- end of tanker -->
	
</form>