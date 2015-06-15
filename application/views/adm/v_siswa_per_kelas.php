<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Data Siswa Per Kelas</h2>
	
	<span id="tambah_data" style="border:none; background: none">
	Pilih Kelas :
	
	<select name="pil_kelas" onchange="window.location.href=this.options[this.selectedIndex].value"><option value="<?php echo base_URL()?>index.php/adm/siswa_kelas">- SEMUA -</option> 
	<?php
	foreach($pil_kelas as $kls) {
		if ($kls->id == $this->uri->segment('3')) {
			echo "<option value='".base_URL()."index.php/adm/siswa_kelas/".$kls->id."/".$kls->nama."' selected>".$kls->nama."</option>";
		} else {
			echo "<option value='".base_URL()."index.php/adm/siswa_kelas/".$kls->id."/".$kls->nama."'>".$kls->nama."</option>";	
		}
	}
	?>
	</select> Jumlah Siswa : <b><?php echo $jml_siswa?></b>
	
	
	</span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/data_siswa_per_kelas/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>" target="blank">Cetak Data Siswa Kelas : <?php echo $this->uri->segment(4)?></a>
	</span>
	-->
	

	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>Tahun<br>Ajaran</th><th>Nama</th>
		<th>Agama</th><th>JK</th><th>Prodi</th><th>Tingkat</th>
		<th>Kelas</th>
	</tr>

	<?php 
	$i = 0 ;
	if (empty($siswa_kelas)) {
		echo "<tr><td colspan='8' align='center'>-- Tidak ada siswa dalam kelas tersebut --</td></tr>";
	} else {

		foreach ($siswa_kelas as $sk) {
		$i++;
		?>

		<tr><td class='tengah'><?php echo $sk->ta?></td>
		<td class='tengah'><?php echo $sk->nama_ssw?></td>
		<td class='tengah'><?php echo $sk->agama?></td>
		<td><?php echo $sk->jk?></td>
		<td class='tengah'><?php echo $sk->prodi?></td>
		<td><?php echo $sk->tkt?></td>
		<td><?php echo $sk->nama?></td>
		</tr>

		
	<?php
		}
	}
	?>
	</table>
</div>