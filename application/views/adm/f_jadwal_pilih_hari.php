<div id="isi">
	<h2>Pilih Hari dan Kelas</h2>
	<form action="<?php echo base_URL()?>index.php/adm/jadwal/input_hari" method="post">

	<table width="55%" class="form" align="center">
	<tr><td>Pilih Hari</td><td>
	<select name="hari">
	<?php
	$hari_view	= array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

	for ($a = 0; $a < 6; $a++) {
	?><option value="<?php echo $hari_view[$a]?>"><?php echo $hari_view[$a]?></option>
	<?php } ?>
	</select>
	</td></tr>

	<tr><td>Pilih Kelas</td><td>
	<select name="kelas">
	<?php
	foreach($kelas as $k)  {
	?><option value="<?php echo $k->id?>"><?php echo $k->nama?></option>
	<?php } ?>
	</select>
	</td></tr>
	<tr><td></td><td><input type="submit" value="Lanjutkan"></td></tr>

	</table>
	</form>
</div>