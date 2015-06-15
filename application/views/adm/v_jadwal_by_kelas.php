<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$ta = $this->session->userdata('ta');
?>

<div id="isi">
	<h2>Jadwal Pelajaran Per Kelas, Tahun Ajaran <?php echo $ta."/".($ta+1)?></h2>
	
	<center>Pilih Kelasnya : 
		<select name="guru" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">--Pilih Kelas</option>
				
				
				<?php
				foreach($kelas as $k) {
					if ($k->id == $this->uri->segment(4)) {
						echo "<option value='".base_URL()."index.php/adm/jadwal_by_kelas/det/".$k->id."' selected>".$k->nama."</option>";
					} else {
						echo "<option value='".base_URL()."index.php/adm/jadwal_by_kelas/det/".$k->id."'>".$k->nama."</option>";
					}
				}
				?>
		</select>
	</center>
	
	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>Kelas</th>
		<th>Hari</th>
		<th>Jam Ke</th>
		<th>Nama Guru</th>
		<th>Mapel</th>
		<th>Ruang</th>
	</tr>

	<?php 
	if (empty($jadwal)) {
		echo "<tr><td colspan='6' align='center'>-- Data tidak ditemukan --</td></tr>";
	} else {
		$i = 0;
		foreach ($jadwal as $j):
		$i++;
	?>

	<tr><td class='tengah'><?php echo $j->nama_kelas?></td>
	<td class='tengah'><?php echo $j->hari?></td>
	<td class='tengah'><?php echo $j->id_jam_ke?></td>
	<td><?php echo $j->nama_guru?></td>
	<td><?php echo $j->nama_mapel?></td>
	<td><?php echo $j->nama_ruang?></td>
	</tr>

	<?php
		endforeach;
		}
	?>

	</table>

</div>