<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>
			
			<center><h3>Jadwal PBM</h3></center>
			<br>

			<?php
			if ($jumlah_jadwal_pada_ta != 0) {
				foreach ($hari_ as $h) {	
					$kelas_ = $this->db->query("SELECT id, nama FROM tl_kelas")->result();
					
			?>
			
			<h3 style="text-align: left; margin-left: 20px">Hari : <?php echo $h->hari?></h3>
			<div style="overflow: auto; padding: 10px">
			<?php
				echo "<table class='bordered'><thead><tr><th>Jam Ke</th>";
				foreach ($kelas_ as $k) {
					echo "<th>".$k->nama."</th>";
				}
				echo "</tr></thead>";
				
				$jumlah_jam_per_hari	= $this->db->query("SELECT * FROM t_jadwal WHERE hari = '".$h->hari."' AND ta = '".$ta."' GROUP BY id_jam_ke")->result();
				
				foreach ($jumlah_jam_per_hari as $jj) {
					echo "<tr style='font-size: 12px'><td class='tengah'><b>".$jj->id_jam_ke."</b></td>";
					foreach ($kelas_ as $k) {
					
							$ambil_j	= $this->db->query("SELECT t_jadwal.id_guru, tg_data.nama,  t_jadwal.id_mapel, tl_mapel.nama_mapel,  t_jadwal.id_ruang, ti_ruang.nama as nama_ruang FROM t_jadwal, tg_data, tl_mapel, tl_kelas, ti_ruang WHERE hari = '".$h->hari."' AND id_jam_ke  = '".$jj->id_jam_ke."' AND id_kelas = '".$k->id."' AND t_jadwal.id_guru = tg_data.id AND t_jadwal.id_mapel = tl_mapel.id AND t_jadwal.id_kelas = tl_kelas.id AND t_jadwal.id_ruang = ti_ruang.id AND t_jadwal.id_kelas = tl_kelas.id AND ta = '".$ta."'")->row();
							
							if (empty($ambil_j)) {
								echo "<td class='jadwal' title='Tidak Ada Jadwal' id='tengah'>-NO-</td>";
							} else {
								echo "<td class='jadwal' id='tengah' title=\"".$ambil_j->nama_mapel." | ".$ambil_j->nama." | ".$ambil_j->nama_ruang."\">".$ambil_j->id_guru."<br>".$ambil_j->id_mapel."<br>".$ambil_j->id_ruang."</td>";
							}
					}	
					echo "</tr>";
				}
				
				echo "</table></div><br><br>";
			}
		} else {
			echo "<div id='isi'><h2>Belum ada jadwal</h2></div>";
		}
		?>

			
			<br><br><br>
			</section>    
        </article>        
    </div>
</div>