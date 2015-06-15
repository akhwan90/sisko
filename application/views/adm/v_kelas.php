<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Data Kelas</h2>
	
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?php echo $info?></div>

	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/adm/kelas/add">Tambah Data</a>
	</span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/kelas" target="blank">Cetak Data Kelas</a>
	</span>
	-->
	
	<form action="<?php echo base_URL()?>index.php/adm/kelas/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Kelas" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>ID</th><th>Prodi</th>
		<th>Tingkat</th><th>Nama Kelas</th><th>Kapasitas</th><th>Wali Kelas</th><th>Action</th>
	</tr>

	<?php 
	if (empty($kelas)) {
		echo "<tr><td colspan='7' align='center'>-- Data tidak ditemukan --</td></tr>";
	} else {
		$i = 0;
		foreach ($kelas as $k):
		$i++;
	?>

	<tr><td class='tengah'><?php echo $k->id?></td>
	<td class='tengah'><?php echo $k->prodi?></td>
	<td class='tengah'><?php echo $k->tkt?></td>
	<td><?php echo $k->nama?></td>
	<td class='tengah'><?php echo $k->kapasitas?></td>
	<td class='tengah'><?php echo $k->wali?></td>
	<td class='tengah'>
	<a href="<?php echo base_URL()?>index.php/adm/kelas/edt/<?php echo $k->id?>">Edit</a> - 
	<a href="<?php echo base_URL()?>index.php/adm/kelas/hps/<?php echo $k->id?>">Hapus</a></td>
	</tr>

	<?php
		endforeach;
		}
	?>

	</table>
</div>