<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$ta = $this->session->userdata('ta');
?>

<div id="isi">
	<h2>Jadwal Pelajaran Per Guru, Tahun Ajaran <?php echo $ta."/".($ta+1)?></h2>
	
	<center>Pilih Gurunya : 
		<select name="guru" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">--Pilih Guru</option>
				
				
				<?php
				foreach($guru as $g) {
					if ($g->id == $this->uri->segment(4)) {
						echo "<option value='".base_URL()."index.php/adm/jadwal_by_guru/det/".$g->id."' selected>".$g->nama."</option>";
					} else {
						echo "<option value='".base_URL()."index.php/adm/jadwal_by_guru/det/".$g->id."'>".$g->nama."</option>";
					}
				}
				?>
		</select>
	</center>
	
	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>Nama</th>
		<th>Hari</th>
		<th>Jam Ke</th>
		<th>Kelas</th>
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

	<tr><td class='tengah'><?php echo $j->nama_guru?></td>
	<td class='tengah'><?php echo $j->hari?></td>
	<td class='tengah'><?php echo $j->id_jam_ke?></td>
	<td class='tengah'><?php echo $j->nama_kelas?></td>
	<td><?php echo $j->nama_mapel?></td>
	<td><?php echo $j->nama_ruang?></td>
	</tr>

	<?php
		endforeach;
		}
	?>

	</table>

</div>