<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

			<center><h3>Nilai Ledger</h3></center>
			
			<?php
			$mapel = $this->db->query("SELECT tl_mapel.id, tl_mapel.nama_mapel FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '2013' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id GROUP BY tl_nilai.id_mapel")->result();
			
			if (empty($mapel)) {
				echo "<center><h2>Belum ada data ledger dalam kelas tersebut</h2></center>";
			} else {
			
			?>
			<table class="bordered">
				<thead>
					<tr>
						<th>No</th><th>Nama Siswa</th>
						<?php
							
							foreach ($mapel as $m) {
								echo "<th><a href=\"#\" class=\"\" title=\"".$m->nama_mapel."\">".$m->id."</a></th>";
							}
						?>
					</tr>
				</thead>
				
				<?php
				$siswa = $this->db->query("SELECT tl_nilai.*, ts_data_siswa.id AS idsis, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '2013' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id GROUP BY tl_nilai.id_siswa")->result();
				
				$no = 0;
				foreach ($siswa as $s) {
					$no++;
					echo "<tr><td id='tengah'>".$no."</td><td>".$s->nama."</td>";
						
						$nilai = $this->db->query("SELECT tl_nilai.*, tl_kelas.nama, tl_mapel.id, tl_mapel.nama_mapel, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '2013' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.id_siswa = '".$s->idsis."'")->result();
						
						foreach ($nilai as $ni) {
								echo "<td id='tengah'>".$ni->nilai."</td>";
						}
					echo "</tr>";
				}
				?>


			</table>
			<?php
			}
			?>
			</section>    
        </article>        
    </div>
</div>