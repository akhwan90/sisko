<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Ledger Siswa</h2>
	
	<center>Pilih Kelasnya : <select name="kelas" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">--Pilih Kelas</option>
				
				
				<?php
				foreach($kelas_pilih as $k) {
					if ($k->id == $this->uri->segment(3)) {
						echo "<option value='".base_URL()."index.php/adm/ledger/".$k->id."' selected>".$k->nama."</option>";
					} else {
						echo "<option value='".base_URL()."index.php/adm/ledger/".$k->id."'>".$k->nama."</option>";
					}
				}
				?>
				</select></center>

	<h3 style="margin-left: 10px; margin-top: 10px">Semester 1</h3>
	<table width="97.5%" align="center" class="data" border="1">
				<thead>
					<tr>
						<th>No</th><th>Nama Siswa</th>
						<?php
							$mapel = $this->db->query("SELECT tl_mapel.id, tl_mapel.nama_mapel FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.semester = '1' AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id GROUP BY tl_nilai.id_mapel")->result();
															
							foreach ($mapel as $m) {
								echo "<th><a href=\"#\" class=\"tooltip\" title=\"".$m->nama_mapel."\">".$m->id."</a></th>";
							}
						?>
					</tr>
				</thead>
				
				<?php
				if (empty($mapel)) {
					echo "<tr><td colspan='2' align='center'>-Belum ada data Semester 1 -</td></tr>";
				} else {
				
				$siswa = $this->db->query("SELECT tl_nilai.*, ts_data_siswa.id AS idsis, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.semester = '1' GROUP BY tl_nilai.id_siswa")->result();
				
				$no = 0;
				foreach ($siswa as $s) {
					$no++;
					echo "<tr><td class='tengah'>".$no."</td><td>".$s->nama."</td>";
						
						$nilai = $this->db->query("SELECT tl_nilai.*, tl_kelas.nama, tl_mapel.id, tl_mapel.nama_mapel, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.semester = '1'  AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.id_siswa = '".$s->idsis."'")->result();
						
						foreach ($nilai as $ni) {
								echo "<td class='tengah'>".$ni->nilai."</td>";
						}
					echo "</tr>";
				}	
				}				
				?>


			</table>
			
	<h3 style="margin-left: 10px; margin-top: 10px">Semester 2</h3>
	<table width="97.5%" align="center" class="data" border="1">
				<thead>
					<tr>
						<th>No</th><th>Nama Siswa</th>
						<?php
							$mapel = $this->db->query("SELECT tl_mapel.id, tl_mapel.nama_mapel FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.semester = '2'  GROUP BY tl_nilai.id_mapel")->result();
															
							foreach ($mapel as $m) {
								echo "<th><a href=\"#\" class=\"tooltip\" title=\"".$m->nama_mapel."\">".$m->id."</a></th>";
							}
						?>
					</tr>
				</thead>
				
				
				<?php
				if (empty($mapel)) {
					echo "<tr><td colspan='2' align='center'>-Belum ada data Semester 2-</td></tr>";
				} else {
				
				$siswa = $this->db->query("SELECT tl_nilai.*, ts_data_siswa.id AS idsis, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.semester = '2' GROUP BY tl_nilai.id_siswa")->result();
				
				$no = 0;
				foreach ($siswa as $s) {
					$no++;
					echo "<tr><td class='tengah'>".$no."</td><td>".$s->nama."</td>";
						
						$nilai = $this->db->query("SELECT tl_nilai.*, tl_kelas.nama, tl_mapel.id, tl_mapel.nama_mapel, ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa WHERE id_kelas = '".$kelas."' AND ta = '".$this->session->userdata('ta')."' AND tl_nilai.id_kelas = tl_kelas.id AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id AND tl_nilai.semester = '2' AND tl_nilai.id_siswa = '".$s->idsis."'")->result();
						
						foreach ($nilai as $ni) {
								echo "<td class='tengah'>".$ni->nilai."</td>";
						}
					echo "</tr>";
				}
				}				
				?>


			</table>
</div>