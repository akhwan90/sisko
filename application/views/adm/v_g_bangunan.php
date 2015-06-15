<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Daftar Inventaris Bangunan</h2>
	
	<?php echo $info?>

	<span id="tambah_data"><a  href="<?php echo base_URL()?>index.php/adm/g_bangunan/add">Tambah Data</a></span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/c_bangunan" target="_blank">Cetak Data</a>
	</span>
	-->

	<form action="<?php echo base_URL()?>index.php/adm/g_bangunan/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Barang" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>


	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th width="8%">Kode-No</th>
		<th width="20%">Nama</th>
		<th width="10%">Tgl Dapat</th>
		<th width="27%">Letak</th>
		<th width="10%">Kondisi</th>
		<th width="10%">Harga</th>
		<th width="15%">Action</th>
	</tr>

	<?php $i = 0 ?>
	<?php foreach ($bgn as $bg) {
	$i++;
	?>

	<tr><td class='tengah'><?php echo $bg->kd_brg."-".$bg->no_aset?></td>
	<td><?php echo $bg->nama?></td>
	<td class='tengah'><?php echo tgl_indo($bg->tgl_buku)?></td>
	<td><?php echo substr($bg->alamat, 0, 42)?></td>
	<td class='tengah'><?php echo koversi_kondisi($bg->kondisi)?></td>
	<td class="ka"><?php echo number_format($bg->harga)?></td>
	<td class='tengah'>
	<a href="<?php echo base_URL()?>index.php/adm/g_bangunan/edt/<?php echo $bg->id_bgn?>">Edit</a> - 
	<a href="<?php echo base_URL()?>index.php/adm/g_bangunan/hps/<?php echo $bg->id_bgn?>">Hapus</a><!-- -
	<a href="<?php echo base_URL()?>index.php/cetak/c_bangunan_kib/<?php echo $bg->id_bgn?>" target="_blank">Cetak KIB</a>-->

	</td>
	</tr>

	<?php } ?>

	</table>
</div>