<div id="isi">
	<h2>Input Jadwal Hari "<i><?php echo $hari?></i>" Kelas "<i><?php echo $nama_kelas->nama?></i>"</h2>
	
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?php echo $info?></div>
	
	<form action="<?php echo base_URL()?>index.php/adm/jadwal/act_add" method="post" id="f_jadwal">
	<input type="hidden" name="jml_jam" value="<?php echo $jml_jam?>">
	<input type="hidden" name="hari" value="<?php echo $hari?>">
	<input type="hidden" name="id_kelas" value="<?php echo $kelas?>">

	<table width="97.5%" class="form" align="center">
	<tr><td>Nama Hari</td><td><b>: <?php echo $hari?></b></td></tr>
	<tr><td>Nama Kelas</td><td><b>: <?php echo $nama_kelas->nama?></b></td></tr>

	<?php
	for ($i = 1; $i <= $jml_jam; $i++) {
	?>	
	<input type="hidden" name="jamke_<?php echo $i?>" value="<?php echo $i?>">
		<tr><td>Jam Ke <?php echo $i?> </td><td>
		<select name="mapel_<?php echo $i?>" class="required"><option value="">-Pilih Mapelnya-</option>
		<?php
		foreach($mapel as $mp) {
			echo "<option value='".$mp->id."'>".$mp->prodi." - ".substr($mp->nama_mapel, 0, 40)."</option>";
		}
		?>
		</select>
		</td><td>
		<select name="guru_<?php echo $i?>" class="required"><option value="">-Pilih Gurunya-</option>
		<?php
		foreach($guru as $g) {
			echo "<option value='".$g->id."'>".$g->nama."</option>";
		}
		?>
		</select>
		</td><td>
		<select name="ruang_<?php echo $i?>" class="required"><option value="">-Pilih Ruangnya-</option>
		<?php
		foreach($ruang as $r) {
			echo "<option value='".$r->id."'>".$r->nama."</option>";
		}
		?>
		</select>
		</td></tr>
		
	<?php
	}
	?>
		<tr><td></td><td><input type="submit" name="tombol" value="<?php echo $tombol?>"></td></tr>
	</table>
	</form>
</div>
<script>
  $(document).ready(function(){
    $("#f_jadwal").validate();
  });
</script>