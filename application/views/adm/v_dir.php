<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<div id="isi">
	<h2>Daftar Inventaris Ruangan</h2>
	
	<?php echo $info?>
	
	<span id="tambah_data" style="border:none; background: none">
	Seleksi Ruangan :
	<select name="ctk_dir" onchange="window.location.href=this.options
		[this.selectedIndex].value" target="_blank"><option value="<?php echo base_URL()?>index.php/adm/dir/det/">- SEMUA -</option>
	<?php
	if ($this->uri->segment(3) == "det") {
		$id_ruang = $this->uri->segment(4);
	} else {
		$id_ruang = "";
	}
	foreach ($ruang as $r) {		
		if ($id_ruang == $r->id) {
			echo "<option value='".base_URL()."index.php/adm/dir/det/".$r->id."' selected>".$r->nama."</option>";
		} else {
			echo "<option value='".base_URL()."index.php/adm/dir/det/".$r->id."'>".$r->nama."</option>";
		}
	}
	?>
	</select>
	</span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/dir/<?php echo $id_ruang?>" target="blank">Cetak DIR Ruang : <?php echo $id_ruang?></a>
	</span>
	-->
	
	<form action="<?php echo base_URL()?>index.php/adm/dir/cari" method="post" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Nama Barang" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>
	
	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th width="17%">Kode Brg / No Aset</th>
		<th width="43%">Nama</th>
		<th width="30%">Letak</th>
		<th width="10%">Action</th>
	</tr>

	<?php 
	$i = 0;
	if (empty($dir)) {
		echo "<tr><td colspan='4' align='center'> -- Data TIDAK DITEMUKAN -- </td></tr>";
	} else {
		foreach ($dir as $d):
		$i++;
		?>

		<tr><td class='tengah'><?php echo $d->kd_brg.".".$d->no_aset?></td>
		<td class='ki'><?php echo $d->nama_brg?></td>
		<td class='ki'><?php echo $d->nama?></td>
		<td class='tengah'>
		<a href="<?php echo base_URL()?>index.php/adm/dir/pindah_dir/<?php echo $d->id_brg?>">Pindah ke : </a> 
		</td>
		</tr>

	<?php
	endforeach;
	}
	?>

	</table>
	
</div>
