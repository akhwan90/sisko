<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<div id="isi">
	<h2>Daftar Inventaris Barang</h2>
	
	<?php echo $info?>

	<span id="tambah_data"><a  href="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/add">Tambah Data</a></span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/c_barang" target="_blank">Cetak Data</a>
	</span>
	-->
	
	<form action="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Barang" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>
	

		<table width="97.5%" align="center" class="data" border="1">
		<tr>
			<th width="10%">Kode-No</th>
			<th width="28%">Nama</th>
			<th width="13%">Tgl Dapat</th>
			<th width="7%">Letak</th>
			<th width="10%">Kondisi</th>
			<th width="10%">Asal</th>
			<th width="10%">Harga</th>
			<th width="15%">Action</th>
		</tr>

		<?php $i = 0 ?>
		<?php foreach ($inv as $in) {
		$i++;
		?>

		<tr><td class='tengah'><?php echo $in->kd_brg."-".$in->no_aset?></td>
		<td class='ki'><?php echo $in->nama_brg?></td>
		<td class='tengah'><?php echo tgl_indo($in->tgl_dapat)?></td>
		<td class='tengah'><?php echo $in->letak?></td>
		<td class='tengah'><?php echo koversi_kondisi($in->kondisi)?></td>
		<td><?php echo $in->asal?></td>
		<td class='ka'><?php echo number_format($in->harga)?></td>
		<td class='tengah'>
		<a href="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/edt/<?php echo $in->id_brg?>">Edit</a> - 
		<a href="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/hps/<?php echo $in->id_brg?>">Hapus</a></td>
		</tr>

		<?php } ?>

		</table>

</div>

