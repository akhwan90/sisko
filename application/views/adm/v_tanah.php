<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Daftar Inventaris Tanah</h2>
	
	<?=$info?>

	<span id="tambah_data"><a  href="<?=base_URL()?>index.php/adm/tanah/add">Tambah Data</a></span>
	
	<!--
	<span id="tambah_data">
	<a href="<?=base_URL()?>index.php/cetak/c_tanah" target="_blank">Cetak Data</a>
	</span>
	-->
	<form action="<?=base_URL()?>index.php/adm/tanah/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Barang" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

	<table width="98%" align="center" class="data" border="1">
	<tr>
		<th width="8%">Kode-No</th>
		<th width="20%">Nama</th>
		<th width="9%">Tgl Dapat</th>
		<th width="20%">Letak</th>
		<th width="7%">Luas</th>
		<th width="10%">Harga</th>
		<th width="14%">Action</th>
	</tr>

	<?php $i = 0 ?>
	<?php foreach ($tanah as $ta) {
	$i++;
	?>

	<tr><td class='tengah'><?=$ta->kd_brg."-".$ta->no_aset?></td>
	<td><?=$ta->nama?></td>
	<td class='tengah'><?=tgl_pendek($ta->tgl_dapat)?></td>
	<td><?=$ta->letak?></td>
	<td class="ka"><?=$ta->luas?> m2</td>
	<td class="ka"><?=number_format($ta->nilai_aset)?></td>
	<td class='tengah'>
	<a href="<?=base_URL()?>index.php/adm/tanah/edt/<?=$ta->id_tnh?>">Edit</a> - 
	<a href="<?=base_URL()?>index.php/adm/tanah/hps/<?=$ta->id_tnh?>">Hapus</a><!-- -
	<a href="<?=base_URL()?>index.php/cetak/c_tanah_kit/<?=$ta->id_tnh?>" target="_blank">Cetak KIB</a>-->
	</td>
	</tr>

	<?php } ?>

	</table>
	<p align="center"><b><?=$this->pagination->create_links()?></b></p>
</div>