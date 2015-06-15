<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Data Buku Induk Siswa</h2>
	
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?php echo $info?></div>

	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/adm/buku_induk/add">Tambah Data</a>
	</span>

	<form action="<?php echo base_URL()?>index.php/adm/buku_induk/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Sebuah Nama" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

	<table width="97.5%" class="data" border="1">
	<tr>
		<th width="5%">No</th><th width="10%">No. Induk</th>
		<th width="10%">NISN</th><th width="25%">Nama</th><th width="5%">JK</th>
		<th width="25%">Tempat, Tanggal Lahir</th>
		<th width="10%">Status</th><th width="10%">Action</th>
	</tr>

	<?php 
	$i = 0 ;
	if (empty($buku_induk)) {
		echo "<tr><td colspan='8' align='center'>-- Data tidak ditemukan --</td></tr>";
	} else {

		foreach ($buku_induk as $bi) {
		$i++;
		?>

		<tr><td class='tengah'><?php echo $bi->id?></td>
		<td class='tengah'><?php echo $bi->nis?></td>
		<td class='tengah'><?php echo $bi->nisn?></td>
		<td><?php echo $bi->nama?></td>
		<td class='tengah'><?php echo $bi->jk?></td>
		<td><?php echo $bi->tmp_lahir.", ".tgl_indo($bi->tgl_lahir)?></td>
		<td class='tengah'><?php echo $bi->stat_aktif?></td>
		<td class='tengah'>
		<a href="<?php echo base_URL()?>index.php/adm/buku_induk/edt/<?php echo $bi->id?>">Edit</a></td>
		</tr>
	<?php
		}
	}
	?>
	</table>
	<div class="paging"><?php echo $this->pagination->create_links(); ?></div>
</div>
