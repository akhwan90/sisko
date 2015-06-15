<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Data Mata Pelajaran</h2>
	
	<?=$info?>

	<span id="tambah_data"><a  href="<?=base_URL()?>index.php/adm/mapel/add">Tambah Data</a></span>
	
	<!--
	<span id="tambah_data">
	<a href="<?=base_URL()?>index.php/cetak/mapel" target="blank">Cetak Data Mata Pelajaran</a>
	</span>
	-->
	
	<form action="<?=base_URL()?>index.php/adm/mapel/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Mata Pelajaran" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>ID</th><!--<th>Prodi</th>-->
		<th>Jenis</th><th>Nama Mapel</th><th>Semester</th><th>KKM</th><th>Action</th>
	</tr>

	<?php 
	if (empty($mapel)) {
		echo "<tr><td colspan='7' align='center'>-- Data tidak ditemukan --</td></tr>";
	} else {
		$i = 0;
		foreach ($mapel as $m):
		$i++;
	?>

	<tr><td class='tengah'><?=$m->id?></td>
	<td class='tengah'><?=$m->prodi?></td><!--
	<td class='tengah'><?=$m->jenis?></td>-->
	<td><span title="<?=$m->nama_mapel?>"><?=substr($m->nama_mapel, 0, 75)?></span></td>
	<td class='tengah'><?=$m->semester?></td>
	<td class='tengah'><?=$m->kkm?></td>
	<td class='tengah'>
	<a href="<?=base_URL()?>index.php/adm/mapel/edt/<?=$m->id?>">Edit</a> - 
	<a href="<?=base_URL()?>index.php/adm/mapel/hps/<?=$m->id?>">Hapus</a></td>
	</tr>

	<?php
		endforeach;
		}
	?>

	</table>
	
	<div class="paging"><?php echo $this->pagination->create_links(); ?></div>
</div>