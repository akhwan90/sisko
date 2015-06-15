<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="isi">
	<h2>Pilih Mata Pelajaran & Kelasnya</h2>
	
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?php echo $info?></div>
		
	<form action="<?php echo base_URL();?>index.php/adm/input_nilai_per_kelas/f_input_per_kelas" method="post">
	<table width="90%" align="center" class="form">
	<tr>
	<td class='ki'>Mata Pelajaran</td><td>
	<select name="mapel"><option value="">-- Pilih Mapelnya --</option> 
	<?php
	foreach ($mapel as $mp) {
		echo "<option value='".$mp->id."'>".$mp->prodi." - ".$mp->nama_mapel."</option>";
	}
	?>
	</select>
	</td></tr>

	<tr>
	<td class='ki'>Kelas</td><td>
	<select name="kelas"><option value="">-- Pilih Kelasnya --</option> 
	<?php
	foreach ($kelas as $kl) {
		echo "<option value='".$kl->id."'>".$kl->nama."</option>";
	}
	?>
	</select>
	</td></tr>
	
	<tr>
	<td class='ki'>Semester</td><td>
	<?php
	$bulan_sekarang	= date('m');
	if ($bulan_sekarang < 7 ) {
		$s1_aktif = "selected";
		$s2_aktif = "";
	} else {
		$s2_aktif = "selected";
		$s1_aktif = "";
	}
	?>
	<select name="sem"><option value="">-- Pilih Semesternya --</option> 
	<option value="1" <?php echo $s1_aktif?>>Semester 1</option>
	<option value="2" <?php echo $s2_aktif?>>Semester 2</option>
	</select>
	</td></tr>
	
	
	<tr><td></td><td><input type="submit" value="Lihat Siswanya dan Input Nilai"></td></tr>
	</table>
	</form>
	
</div>