<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Data Ruangan</h2>
	
	<?php echo $info?>

	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/adm/ruang/add">Tambah Data</a>
	</span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/ruang" target="blank">Cetak Data Ruangan</a>
	</span>
	-->

	<form action="<?php echo base_URL()?>index.php/adm/ruang/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Ruang" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>Kode</th><th>Nama</th>
		<th>Penanggun Jawab</th><th>NIP</th><th>Lihat DIR</th><th>Action</th>
	</tr>

	<?php 
	if (empty($ruang)) {
		echo "<tr><td colspan='6' align='center'>-- Data tidak ditemukan -- </td></tr>";
	} else {	
		$i = 0;
		foreach ($ruang as $r):
		$i++;
	?>

	<tr><td class='tengah'><?php echo $r->id?></td>
	<td class='ki'><?php echo $r->nama?></td>
	<td class='ki'><?php echo $r->tgg_jwb?></td>
	<td class='tengah'><?php echo $r->nip_tgg_jwb?></td>
	<td class='tengah'><a href="<?php echo base_URL()?>index.php/adm/dir/det/<?php echo $r->id?>">Detil</a></td>
	<td class='tengah'>
	<a href="<?php echo base_URL()?>index.php/adm/ruang/edt/<?php echo $r->id?>">Edit</a> - 
	<a href="<?php echo base_URL()?>index.php/adm/ruang/hps/<?php echo $r->id?>">Hapus</a></td>
	</tr>

	<?php
	endforeach;
	}
	?>

	</table>
	<!--<br>
	<center>Cetak Daftar Inventaris Ruangan :
	<select name="ctk_dir" onchange="window.location.href=this.options
		[this.selectedIndex].value" target="_blank"><option value="">-Pilih Ruang</option>
	<?php
	foreach ($ruang as $r) {
		echo "<option value='".base_URL()."index.php/cetak/dir/".$r->id."'>".$r->nama."</option>";
	}
	?>
	</select></center>
	-->
		
</div>