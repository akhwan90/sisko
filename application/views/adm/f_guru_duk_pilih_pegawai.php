<div id="isi">
	<h2>Pilih Pegawai</h2>
	
	<table width="70%" align="center" class="form">
	<tr>
	<td>Pilih Pegawai</td>
	<td class='tengah'>
	<select name="pindahkan" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">-- Pilih Pegawai --</option>
	<?php
	foreach ($data_pegawai as $dp) {
		echo "<option value='".base_URL()."index.php/adm/guru_duk/add/".$dp->id."'>".$dp->nama."</option>";
	}
	?>
	</select>
	</td>
	</tr>
	</table>

</div>