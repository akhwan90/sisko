<center><a href="<?=base_URL()?>index.php/adm/jadwal/add">Tambah Jadwal</a></center>
<center><a href="<?=base_URL()?>index.php/adm/jadwal/excel">Eksport ke Excel</a></center>

<?php
if ($jumlah_jadwal_pada_ta != 0) {
	foreach ($hari_ as $h) {	
		$kelas_ = $this->db->query("SELECT id, nama FROM tl_kelas")->result();
		
	?>
	<div id="isi">
		
	<h2><?=$h->hari?></h2>
	<div style="overflow: auto">
	<?php
		echo "<table width='97.5%' align='center' class='data' border='1'><tr><th>Jam Ke</th>";
		foreach ($kelas_ as $k) {
			echo "<th>".$k->nama."</th>";
		}
		echo "</tr>";
		
		$jumlah_jam_per_hari	= $this->db->query("SELECT * FROM t_jadwal WHERE hari = '".$h->hari."' AND ta = '".$this->session->userdata('ta')."' GROUP BY id_jam_ke")->result();
		
		foreach ($jumlah_jam_per_hari as $jj) {
			echo "<tr><td class='tengah'><b>".$jj->id_jam_ke."</b></td>";
			foreach ($kelas_ as $k) {
			
					$ambil_j	= $this->db->query("SELECT t_jadwal.id_guru, tg_data.nama,  t_jadwal.id_mapel, tl_mapel.nama_mapel,  t_jadwal.id_ruang, ti_ruang.nama as nama_ruang FROM t_jadwal, tg_data, tl_mapel, tl_kelas, ti_ruang WHERE hari = '".$h->hari."' AND id_jam_ke  = '".$jj->id_jam_ke."' AND id_kelas = '".$k->id."' AND t_jadwal.id_guru = tg_data.id AND t_jadwal.id_mapel = tl_mapel.id AND t_jadwal.id_kelas = tl_kelas.id AND t_jadwal.id_ruang = ti_ruang.id AND t_jadwal.id_kelas = tl_kelas.id AND ta = '".$this->session->userdata('ta')."'")->row();
					
					if (empty($ambil_j)) {
						echo "<td  class='tengah'>-NO-</td>";
					} else {
						echo "<td  class='tengah'><a href='#' class=\"tooltip\" title=\"".$ambil_j->nama_mapel."<br>".$ambil_j->nama."<br>".$ambil_j->nama_ruang."\">".$ambil_j->id_guru."/".$ambil_j->id_mapel."/".$ambil_j->id_ruang."</a></td>";
					}
			}	
			echo "</tr>";
		}
		
		echo "</table></div></div>";
	}
} else {
	echo "<div id='isi'><h2>Belum ada jadwal</h2><div id='info'>Jadwal Belum dibuat pada tahun ajaran ".$this->session->userdata('ta')."/".($this->session->userdata('ta')+1)."</div></div>";
}
?>
