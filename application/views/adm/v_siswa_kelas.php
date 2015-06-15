<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<div id="isi">
	<h2>Pindah Kelas Siswa</h2>
	
	<form action="<?=base_URL()?>index.php/adm/pindah_kelas/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Siswa" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>
	
	
	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th width="15%">No. Induk</th><th width="40%">Nama</th>
		<th width="20%">Tahun Ajaran - Kelas</th><th width="25%">Action</th>
	</tr>

	<?php $i = 0 ?>
	<?php foreach ($pindah_kelas as $pd) {
	$i++;
	if ($pd->ta == NULL && $pd->kelasnya == NULL) {
		$saat_ini 		= "Belum Dapat Kelas";
		$kata_pindah	= "Masukkan ke kelas : ";
	} else {
		$saat_ini 		= $pd->ta."/".($pd->ta+1)." - ".$pd->kelasnya;
		$kata_pindah	= "Pindah kelas ke : ";
	}
	?>

	<tr><td class='tengah'><?=$pd->nis?></td>
	<td class='ki'><?=$pd->nama?></td>
	<td class='tengah'><?=$saat_ini?></td>
	<td class='tengah'>
	<!--<a href="<?=base_URL()?>index.php/adm/pindah_kelas/pindahkan/<?=$pd->id?>">--><?=$kata_pindah?> <select name="pindahkan" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">-- Pilih Kelas --</option>
	<?php
	foreach ($kelas as $k) {
		echo "<option value='".base_URL()."index.php/adm/pindah_kelas/pindahkan/".$pd->id."/".$k->id."/".$pd->agama."/".$pd->jk."/".$k->prodi."/".$k->tkt."'>".$k->nama."</option>";
	}
	?>
	</select>
	<!--</a>-->
	</td>
	</tr>

	<?php } ?>

	</table>
</div>