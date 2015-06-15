<?php
$act = $this->uri->segment(3);

//radiobox
$s_L	= ""; $s_P	= "";
$s_NI	= ""; $s_NA	= "";
$s_AK	= ""; $s_AT	= "";
$s_ASH	= ""; $s_ASM= "";
$s_NEG	= ""; $s_SW = "";

if ($act == "add" || $act == "act_add") {
	$act_		= "act_add";
	$lihat_foto	= "";
	$foto		= "";
	
	$id			= $id_terakhir;		
	$nm_lkp		= $this->input->post('nm_lkp');				
	$nm_pggl	= $this->input->post('nm_pggl');	
	$no_induk	= $this->input->post('no_induk');	
	$nisn		= $this->input->post('nisn');		
	$jk			= $this->input->post('jk');	
	$tmp_lahir	= $this->input->post('tmp_lahir');	
	$tgl_lahir	= $this->input->post('tgl_lahir');	
	$umur		= $this->input->post('umur');	
	$agama		= $this->input->post('agama');	
	$wn			= $this->input->post('wn');	
	$anak_ke	= $this->input->post('anak_ke');	
	$sdr_kandung= $this->input->post('sdr_kandung');	
	$sdr_tiri	= $this->input->post('sdr_tiri');	
	$sdr_angkat	= $this->input->post('sdr_angkat');	
	$stat_anak	= $this->input->post('stat_anak');	
	$bahasa		= $this->input->post('bahasa');	
	$stat_aktif	= $this->input->post('stat_aktif');	

	$alamat		= "";
	$no_telp	= "";
	$tggl_dgn	= "";
	$alamat_kos	= "";
	$jarak		= "";
	$sarana		= "";
	
	$gol_darah	= "";
	$penyakit	= "";
	$kelainan	= "";
	$tgg_bdn	= "";
	$brt_bdn	= "";
	
	$asal_sklh	= "";
	$tgl_ijazah	= "";
	$no_ijazah	= "";
	$tgl_stl	= "";
	$no_stl		= "";
	$no_ujian	= "";
	$lama_bljr	= "";
	$stat_sasal	= "";
	$pindah_dari= "";
	$alasan_pindah	= "";
	$msk_kelas	= "";
	$msk_tgl	= "";
	$bid_studi	= "";
	$prodi		= "";
	$kompetensi	= "";
	
	$ay_nama	= "";
	$ay_tmp_lahir	= "";
	$ay_tgl_lahir	= "";
	$ay_agama	= "";
	$ay_wn		= "";
	$ay_pend	= "";
	$ay_pkj		= "";
	$ay_phasilan	= "";
	$ay_stat	= "";
	$ay_alamat	= "";

	$ib_nama	= "";
	$ib_tmp_lahir	= "";
	$ib_tgl_lahir	= "";
	$ib_agama	= "";
	$ib_wn		= "";
	$ib_pend	= "";
	$ib_pkj		= "";
	$ib_phasilan	= "";
	$ib_stat	= "";
	$ib_alamat	= "";
	
	$wa_nama	= "";
	$wa_tmp_lahir	= "";
	$wa_tgl_lahir	= "";
	$wa_agama	= "";
	$wa_wn		= "";
	$wa_pend	= "";
	$wa_pkj		= "";
	$wa_phasilan	= "";
	$wa_stat	= "";
	$wa_alamat	= "";
		
	$seni		= "";
	$olahraga	= "";
	$organisasi	= "";
	$lain		= "";

	$bs1		= "-";
	$bs2		= "-";
	$bs3		= "-";
	$tgl_pindah	= "";
	$alasan_pindah_keluar	= "";
	$tgl_lulus	= "";
	$lls_tgl_ijazah	= "";
	$lls_no_ijazah	= "";
	$lls_tgl_stl	= "";
	$lls_no_stl		= "";
	
	$klh_tmp		= "";
	$klh_jrs		= "";
	$klh_kota		= "";
	$krj_tgl_mulai	= "";
	$krj_namapt		= "";
	$krj_lembaga	= "";
	$krj_mandiri	= "";
	$krj_lainnya	= "";
	$krj_hasil		= "";
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_		= "act_edt";
	$foto		= $data_siswa->foto;
	$lihat_foto	= "| <a href='#' id='klik'>Lihat Foto</a> <div id='fotonya' style='display: none; margin-left: 57'><img src='".base_URL()."upload/foto_siswa/".$data_siswa->foto."' width='100px' height='100px'></div>";
	
	
	$id			= $data_siswa->id;
	$nm_lkp		= $data_siswa->nama;
	$nm_pggl	= $data_siswa->nama_pgl;
	$no_induk	= $data_siswa->nis;
	$nisn		= $data_siswa->nisn;
	$jk			= $data_siswa->jk;
	$tmp_lahir	= $data_siswa->tmp_lahir;
	$tgl_lahir	= $data_siswa->tgl_lahir;
	$umur		= $data_siswa->umur;
	$agama		= $data_siswa->agama;
	$wn			= $data_siswa->warga_negara;
	$anak_ke	= $data_siswa->anak_ke;
	$sdr_kandung= $data_siswa->sdr_kandung;
	$sdr_tiri	= $data_siswa->sdr_tiri;
	$sdr_angkat	= $data_siswa->sdr_angkat;
	$stat_anak	= $data_siswa->stat_anak;
	$bahasa		= $data_siswa->bahasa;
	$stat_aktif	= $data_siswa->stat_aktif;


	$alamat		= $tmp_tinggal->alamat;
	$no_telp	= $tmp_tinggal->no_tlp;
	$tggl_dgn	= $tmp_tinggal->ket_tinggal;
	$alamat_kos	= $tmp_tinggal->kos_di;
	$jarak		= $tmp_tinggal->jarak;
	$sarana		= $tmp_tinggal->transport;

	$gol_darah	= $kesehatan->gol_darah;
	$penyakit	= $kesehatan->penyakit;
	$kelainan	= $kesehatan->kelainan;
	$tgg_bdn	= $kesehatan->tgg_bdn;
	$brt_bdn	= $kesehatan->brt_bdn;
	
	$asal_sklh	= $pend_sebelum->lulus_dari;
	$tgl_ijazah	= $pend_sebelum->tgl_ijazah;
	$no_ijazah	= $pend_sebelum->no_ijazah;
	$tgl_stl	= $pend_sebelum->tgl_stl;
	$no_stl		= $pend_sebelum->no_stl;
	$no_ujian	= $pend_sebelum->no_un_asal;
	$lama_bljr	= $pend_sebelum->lama_bljr;
	$stat_sasal	= $pend_sebelum->status_sasal;
	$pindah_dari= $pend_sebelum->pndh_dari;
	$alasan_pindah	= $pend_sebelum->alasan;
	$msk_kelas	= $pend_sebelum->msk_kelas;
	$msk_tgl	= $pend_sebelum->msk_tgl;
	$bid_studi	= $pend_sebelum->bid_studi;
	$prodi		= $pend_sebelum->prodi;
	$kompetensi	= $pend_sebelum->kompetensi;

	$ay_nama	= $ortu_ayah->nama;
	$ay_tmp_lahir	= $ortu_ayah->tmp_lahir;
	$ay_tgl_lahir	= $ortu_ayah->tgl_lahir;
	$ay_agama	= $ortu_ayah->agama;
	$ay_wn		= $ortu_ayah->kwarga;
	$ay_pend	= $ortu_ayah->pddk;
	$ay_pkj		= $ortu_ayah->pkj;
	$ay_phasilan	= $ortu_ayah->phasilan;
	$ay_stat	= $ortu_ayah->stat;
	$ay_alamat	= $ortu_ayah->alamat_telp;	

	$ib_nama	= $ortu_ibu->nama;
	$ib_tmp_lahir	= $ortu_ibu->tmp_lahir;
	$ib_tgl_lahir	= $ortu_ibu->tgl_lahir;
	$ib_agama	= $ortu_ibu->agama;
	$ib_wn		= $ortu_ibu->kwarga;
	$ib_pend	= $ortu_ibu->pddk;
	$ib_pkj		= $ortu_ibu->pkj;
	$ib_phasilan	= $ortu_ibu->phasilan;
	$ib_stat	= $ortu_ibu->stat;
	$ib_alamat	= $ortu_ibu->alamat_telp;	
	
	$wa_nama	= $ortu_wali->nama;
	$wa_tmp_lahir	= $ortu_wali->tmp_lahir;
	$wa_tgl_lahir	= $ortu_wali->tgl_lahir;
	$wa_agama	= $ortu_wali->agama;
	$wa_wn		= $ortu_wali->kwarga;
	$wa_pend	= $ortu_wali->pddk;
	$wa_pkj		= $ortu_wali->pkj;
	$wa_phasilan	= $ortu_wali->phasilan;
	$wa_stat	= $ortu_wali->stat;
	$wa_alamat	= $ortu_wali->alamat_telp;

	$seni		= $gemar->seni;
	$olahraga	= $gemar->olahraga;
	$organisasi	= $gemar->organisasi;
	$lain		= $gemar->lain;
	
	$bs1		= $kembang_siswa->bs_1;
	$bs2		= $kembang_siswa->bs_2;
	$bs3		= $kembang_siswa->bs_3;
	$tgl_pindah	= $kembang_siswa->tgl_tggl_sek;
	$alasan_pindah_keluar	= $kembang_siswa->alasan;
	$tgl_lulus	= $kembang_siswa->tamat_tgl;
	$lls_tgl_ijazah	= $kembang_siswa->ijazah_tgl;
	$lls_no_ijazah	= $kembang_siswa->ijazah_no;
	$lls_tgl_stl	= $kembang_siswa->skhu_tgl;
	$lls_no_stl		= $kembang_siswa->skhu_no;
	
	$klh_tmp		= $setelah->klh_tmp;
	$klh_jrs		= $setelah->klh_jrs;
	$klh_kota		= $setelah->klh_kota;
	$krj_tgl_mulai	= $setelah->krj_tgl_mulai;
	$krj_namapt		= $setelah->krj_namapt;
	$krj_lembaga	= $setelah->krj_lembaga;
	$krj_mandiri	= $setelah->krj_mandiri;
	$krj_lainnya	= $setelah->krj_lainnya;
	$krj_hasil		= $setelah->krj_hasil;
}

?>

<div id="isi">
	<h2>Formulir Buku Induk Siswa</h2>
	
<?php echo $info?>

<ul id="countrytabs" class="shadetabs" style="width: 1000px">
<li><a href="#" rel="country1" class="selected">Data Siswa</a></li>
<li><a href="#" rel="country2">Alamat</a></li>
<li><a href="#" rel="country3">Kesehatan</a></li>
<li><a href="#" rel="country4">Pendidikan</a></li>
<li><a href="#" rel="country5">Ayah</a></li>
<li><a href="#" rel="country6">Ibu</a></li>
<li><a href="#" rel="country7">Wali</a></li>
<li><a href="#" rel="country8">Hobi</a></li>
<li><a href="#" rel="country9">Perkembangan</a></li>
<li><a href="#" rel="country10">Selesai</a></li>
</ul>

<div style="border:1px solid gray; float: left; width:790px; margin: 0 0 1em 10px; padding: 10px; background-color: #FFFFFF; border-radius: 5px;">
<!--<form action="<?php echo base_URL()?>index.php/depan/add_buku_induk" method="post" name="f_buku_induk" onsubmit="...return buku_induk_valid()">-->

<form action="<?php echo base_URL()?>index.php/adm/buku_induk/<?php echo $act_?>/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_buku_induk" name="f_buku_induk" onsubmit="return buku_induk_valid()">

<div id="country1" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">ID</td><td><input type="text" name="id" value="<?php echo $id?>" size="5" readonly></td></tr>
		<tr><td width="30%">No. Induk</td><td><input type="text" name="no_induk" size="10" value="<?php echo $no_induk?>" onkeypress="return onlyNumbers();" class="required"></td></tr>
		<tr><td>NISN</td><td><input type="text" name="nisn" size="10" value="<?php echo $nisn?>" onkeypress="return onlyNumbers();" class="required"></td></tr>
		<tr><td>Nama Lengkap</td><td><input type="text" name="nm_lkp" size="30" value="<?php echo $nm_lkp?>" class="required"></td></tr>
		<tr><td>Nama Panggilan</td><td><input type="text" name="nm_pggl" size="10" value="<?php echo $nm_pggl?>"></td></tr>
		
		<tr><td>Jenis Kelamin</td><td>
		<?php if ($jk == "L") { $s_L = "checked"; } else if ($jk == "P") { $s_P = "checked"; } else { $s_L = ""; $s_P = ""; } ?>
		<input type="radio" name="jk" value="L" id="l" <?php echo $s_L?>><label for="l">Laki Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="jk" value="P" id="p" <?php echo $s_P?>><label for="p">Perempuan</label>
		</td></tr>
		
		<tr><td>Tempat, Tanggal Lahir</td><td><input type="text" name="tmp_lahir" size="20" value="<?php echo $tmp_lahir?>">, <input type="text" name="tgl_lahir" size="10" id="tgl_lahir"  value="<?php echo $tgl_lahir?>" readonly> &nbsp; <!--Umur <input type="text" name="umur" size="3"  value="<?php echo $umur?>">--></td></tr>
		<tr><td>Agama</td><td>
		<select name="agama"><option value="">Pilih Agama</option>
		<?php
		$val_s	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
		foreach ($val_s as $v) {
			if ($v == $agama) {
				echo "<option value='".$v."' selected>".$v."</option>";
			} else {
				echo "<option value='".$v."'>".$v."</option>";
			}
		}
		?></select>
		</td></tr>
		<tr><td>Kewarganegaraan</td><td>
		<?php if ($wn == "WNI") { $s_NI = "checked"; } else if ($wn == "WNA") { $s_NA = "checked"; } else { $s_NI = ""; $s_NA = ""; } ?>
		<input type="radio" name="wn" value="WNI" id="wni" <?php echo $s_NI?>><label for="wni">W N I</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="wn" value="WNA" id="wna" <?php echo $s_NA?>><label for="wna">W N A</label>
		
		</td></tr>
		
		<tr><td>Anak Ke</td><td><input type="text" name="anak_ke" size="3" value="<?php echo $anak_ke?>"onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Jumlah Saudara</td><td>Kandung <input type="text" name="sdr_kandung" size="3" value="<?php echo $sdr_kandung?>" onkeypress="return onlyNumbers();">&nbsp;&nbsp;
		Tiri <input type="text" name="sdr_tiri" size="3" value="<?php echo $sdr_tiri?>" onkeypress="return onlyNumbers();">&nbsp;&nbsp;
		Angkat <input type="text" name="sdr_angkat" size="3" value="<?php echo $sdr_angkat?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Status Anak</td><td>
		
		<?php if ($stat_anak == "AK") { $s_AK = "checked"; } else if ($stat_anak == "AT") { $s_AT = "checked"; } else { $s_AK = ""; $s_AT = ""; } ?>
		
		<input type="radio" name="stat_anak" value="AK" id="ak" <?php echo $s_AK?>><label for="ak">Anak Kandung</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="stat_anak" value="AT" id="at" <?php echo $s_AT?>><label for="at">Anak Tiri</label>
		
		</td></tr>
		<tr><td>Bahasa Sehari-hari</td><td><input type="text" name="bahasa" size="30"  value="<?php echo $bahasa?>"></td></tr>
		
		<tr><td>Foto <?php echo $lihat_foto?></td><td>
		<input type="hidden" name="file_foto" value="<?php echo $foto?>">
		<input type="file" name="foto" id="foto"></td></tr>
		
		
		<tr><td>Status Aktif</td><td>
		<select name="stat_aktif"><option value="">Pilih Status</option>
		<?php
		$val_stat_ak	= array("Aktif", "Keluar", "Pindah", "Lulus");
		foreach ($val_stat_ak as $vsa) {
			if ($vsa == $stat_aktif) {
				echo "<option value='".$vsa."' selected>".$vsa."</option>";
			} else {
				echo "<option value='".$vsa."'>".$vsa."</option>";
			}
		}
		?></select>
		</td></tr>
	</table>
</div>

<div id="country2" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Alamat</td><td><input type="text" name="alamat" size="50" value="<?php echo $alamat?>"></td></tr>
		<tr><td>No. Telp</td><td><input type="text" name="no_telp" size="8" value="<?php echo $no_telp?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Tinggal Dengan</td><td><input type="text" name="tggl_dgn" size="60" value="<?php echo $tggl_dgn?>"></td></tr>
		<tr><td>Jika Kos, alamt di</td><td><input type="text" name="alamat_kos" size="60" value="<?php echo $alamat_kos?>"></td></tr>
		<tr><td>Jarak ke Sekolah</td><td><input type="text" name="jarak" size="5" value="<?php echo $jarak?>" onkeypress="return onlyNumbers();"> km</td></tr>
		<tr><td>Sarana Transportasi</td><td><input type="text" name="sarana" size="30" value="<?php echo $sarana?>"></td></tr>
	</table>
</div>

<div id="country3" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Golongan Darah</td><td><input type="text" name="gol_darah" size="5" value="<?php echo $gol_darah?>"></td></tr>
		<tr><td>Penyakit pernah diderita</td><td><input type="text" name="penyakit" size="70" value="<?php echo $penyakit?>"></td></tr>
		<tr><td>Kelainan</td><td><input type="text" name="kelainan" size="70" value="<?php echo $kelainan?>"></td></tr>
		<tr><td>Tinggi Badan</td><td><input type="text" name="tgg_bdn" size="10" value="<?php echo $tgg_bdn?>" onkeypress="return onlyNumbers();"> cm</td></tr>
		<tr><td>Berat Badan</td><td><input type="text" name="brt_bdn" size="10" value="<?php echo $brt_bdn?>" onkeypress="return onlyNumbers();"> kg</td></tr>
	</table>
</div>

<div id="country4" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Sekolah asal</td><td><input type="text" name="asal_sklh" size="80" value="<?php echo $asal_sklh?>"></td></tr>
		<tr><td>Tgl. Ijazah</td><td><input type="text" name="tgl_ijazah" size="10" id="tgl_ijazah"  value="<?php echo $tgl_ijazah?>"readonly>&nbsp;&nbsp; Nomor Ijazah <input type="text" name="no_ijazah" size="30" value="<?php echo $no_ijazah?>"></td></tr>
		<tr><td>Tgl. SKHU/STL</td><td><input type="text" name="tgl_stl" size="10" id="tgl_stl"  value="<?php echo $tgl_stl?>"readonly>&nbsp;&nbsp; Nomor SKHU/STL <input type="text" name="no_stl" size="30" value="<?php echo $no_stl?>"></td></tr>
		<tr><td>No. Ujian Sebelumnya</td><td><input type="text" name="no_ujian" size="30" value="<?php echo $no_ujian?>"></td></tr>
		<tr><td>Lama belajar</td><td><input type="text" name="lama_bljr" size="10" value="<?php echo $lama_bljr?>" onkeypress="return onlyNumbers();"> tahun</td></tr>
		<tr><td>Status Sekolah Asal</td><td>
		
		<?php if ($stat_sasal == "N") { $s_NEG = "checked"; } else if ($stat_sasal == "S") { $s_SW == "checked"; } else { $s_NEG = ""; $s_SW = ""; } ?>
	
		
		<input type="radio" name="stat_sasal" value="N" id="sn" <?php echo $s_NEG?>><label for="sn">Negeri</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="stat_sasal" value="S" id="ss" <?php echo $s_SW?>><label for="ss">Swasta</label>
		
		
		</td></tr></td></tr>
		<tr><td>Pindahan dari</td><td><input type="text" name="pindah_dari" size="80" value="<?php echo $pindah_dari?>"></td></tr>
		<tr><td>Alasan pindah</td><td><input type="text" name="alasan_pindah" size="80" value="<?php echo $alasan_pindah?>"></td></tr>
		<tr><td>Masuk di Kelas</td><td><select name="msk_kelas"><option value="">-Pilih Kelas-</option>
		<?php
		$a_kelas	= $this->db->query("SELECT * FROM tl_kelas ORDER BY id ASC")->result();
		foreach ($a_kelas as $kelas) {
			if ($msk_kelas == $kelas->nama) {
				echo "<option value='".$kelas->nama."' selected>".$kelas->nama."</option>";
			} else {
				echo "<option value='".$kelas->nama."'>".$kelas->nama."</option>";
			}
		}
		?>
		</select>&nbsp;&nbsp; Pada tanggal <input type="text" name="msk_tgl" id="msk_tgl" size="10" value="<?php echo $msk_tgl?>" readonly></td></tr>
		<tr><td>Bidang Studi</td><td><input type="text" name="bid_studi" size="30" value="<?php echo $bid_studi?>"></td></tr>
		<tr><td>Program Studi</td><td><input type="text" name="prodi" size="30"  value="<?php echo $prodi?>"></td></tr>
		<tr><td>Kompetensi</td><td><input type="text" name="kompetensi" size="30" value="<?php echo $kompetensi?>"></td></tr>
	</table>
</div>

<div id="country5" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Nama Ayah</td><td><input type="text" name="ay_nama" size="30" value="<?php echo $ay_nama?>"</td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><input type="text" name="ay_tmp_lahir" size="30" value="<?php echo $ay_tmp_lahir?>">, <input type="text" name="ay_tgl_lahir" size="10" id="ay_tgl_lahir"  value="<?php echo $ay_tgl_lahir?>" readonly></td></tr>
		<tr><td>Agama</td><td>
		<select name="ay_agama">
			<?php
			$val_ay_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
			foreach ($val_ay_agama as $vaa) {
				if ($vaa == $ay_agama) {
					echo "<option value='".$vaa."' selected>".$vaa."</option>";
				} else {
					echo "<option value='".$vaa."'>".$vaa."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Kewarganegaraan</td><td>
		<select name="ay_wn">
		<?php
		$val_wna	= array("WNI", "WNA");
		foreach ($val_wna as $wna) {
			if ($wna == $ay_wn) {
				echo "<option value='".$wna."' selected>".$wna."</option>";
			} else {
				echo "<option value='".$wna."'>".$wna."</option>";
			}
		}
		?></select>
		</td></tr>
		<tr><td>Pendidikan Terakhir</td><td>
		<select name="ay_pend">
			<?php
			$val_ay_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
			foreach ($val_ay_pend as $pdka) {
				if ($pdka == $ay_pend) {
					echo "<option value='".$pdka."' selected>".$pdka."</option>";
				} else {
					echo "<option value='".$pdka."'>".$pdka."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Pekerjaan</td><td><input type="text" name="ay_pkj" size="50" value="<?php echo $ay_pkj?>"></td></tr>
		<tr><td>Penghasilan</td><td><input type="text" name="ay_phasilan" size="20" value="<?php echo $ay_phasilan?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Status</td><td>
		
		<?php if ($ay_stat == "Masih Hidup") { $s_ASH = "checked"; } else if ($ay_stat == "Sudah Meninggal") { $s_ASM == "checked"; } else { $s_ASH = ""; $s_ASM = ""; } ?>
		
		<input type="radio" name="ay_stat" value="Masih Hidup" id="mh" <?php echo $s_ASH?>><label for="mh">Masih Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="ay_stat" value="Sudah Meninggal" id="sm" <?php echo $s_ASM?>><label for="sm">Sudah Meninggal</label>
		</td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><input type="text" name="ay_alamat" size="80" value="<?php echo $ay_alamat?>"></td></tr>
	</table>
</div>

<div id="country6" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Nama Ibu</td><td><input type="text" name="ib_nama" size="30" value="<?php echo $ib_nama?>"</td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><input type="text" name="ib_tmp_lahir" size="30" value="<?php echo $ib_tmp_lahir?>">, <input type="text" name="ib_tgl_lahir" size="10" id="ib_tgl_lahir"  value="<?php echo $ib_tgl_lahir?>" readonly></td></tr>
		<tr><td>Agama</td><td>
		<select name="ib_agama">
			<?php
			$val_ib_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
			foreach ($val_ib_agama as $vaa) {
				if ($vaa == $ib_agama) {
					echo "<option value='".$vaa."' selected>".$vaa."</option>";
				} else {
					echo "<option value='".$vaa."'>".$vaa."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Kewarganegaraan</td><td>
		<select name="ib_wn">
		<?php
		$val_wna	= array("WNI", "WNA");
		foreach ($val_wna as $wna) {
			if ($wna == $ib_wn) {
				echo "<option value='".$wna."' selected>".$wna."</option>";
			} else {
				echo "<option value='".$wna."'>".$wna."</option>";
			}
		}
		?></select>
		</td></tr>
		<tr><td>Pendidikan Terakhir</td><td>
		<select name="ib_pend">
			<?php
			$val_ib_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
			foreach ($val_ib_pend as $pdka) {
				if ($pdka == $ib_pend) {
					echo "<option value='".$pdka."' selected>".$pdka."</option>";
				} else {
					echo "<option value='".$pdka."'>".$pdka."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Pekerjaan</td><td><input type="text" name="ib_pkj" size="50" value="<?php echo $ib_pkj?>"></td></tr>
		<tr><td>Penghasilan</td><td><input type="text" name="ib_phasilan" size="20" value="<?php echo $ib_phasilan?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Status</td><td>
		
		<?php if ($ib_stat == "Masih Hidup") { $s_ASH = "checked"; } else if ($ib_stat == "Sudah Meninggal") { $s_ASM == "checked"; } else { $s_ASH = ""; $s_ASM = ""; } ?>
		
		<input type="radio" name="ib_stat" value="Masih Hidup" id="mhi" <?php echo $s_ASH?>><label for="mhi">Masih Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="ib_stat" value="Sudah Meninggal" id="smi" <?php echo $s_ASM?>><label for="smi">Sudah Meninggal</label>
		</td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><input type="text" name="ib_alamat" size="80" value="<?php echo $ib_alamat?>"></td></tr>
	</table>
</div>


<div id="country7" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Nama Wali</td><td><input type="text" name="wa_nama" size="30" value="<?php echo $wa_nama?>"</td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><input type="text" name="wa_tmp_lahir" size="30" value="<?php echo $wa_tmp_lahir?>">, <input type="text" name="wa_tgl_lahir" size="10" id="wa_tgl_lahir"  value="<?php echo $wa_tgl_lahir?>" readonly></td></tr>
		<tr><td>Agama</td><td>
		<select name="wa_agama">
			<?php
			$val_wa_agama	= array("Islam", "Kristen Protestan", "Kristen Katolik", "Hindu", "Budha", "Konghucu", "Lainnya");
			foreach ($val_wa_agama as $vaa) {
				if ($vaa == $wa_agama) {
					echo "<option value='".$vaa."' selected>".$vaa."</option>";
				} else {
					echo "<option value='".$vaa."'>".$vaa."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Kewarganegaraan</td><td>
		<select name="wa_wn">
		<?php
		$val_wna	= array("WNI", "WNA");
		foreach ($val_wna as $wna) {
			if ($wna == $wa_wn) {
				echo "<option value='".$wna."' selected>".$wna."</option>";
			} else {
				echo "<option value='".$wna."'>".$wna."</option>";
			}
		}
		?></select>
		</td></tr>
		<tr><td>Pendidikan Terakhir</td><td>
		<select name="wa_pend">
			<?php
			$val_wa_pend	= array("Tidak Sekolah", "SD", "SMP", "SMA", "Diploma", "Sarjana", "S-2");
			foreach ($val_wa_pend as $pdka) {
				if ($pdka == $wa_pend) {
					echo "<option value='".$pdka."' selected>".$pdka."</option>";
				} else {
					echo "<option value='".$pdka."'>".$pdka."</option>";
				}
			}
			?></select>
		</td></tr>
		<tr><td>Pekerjaan</td><td><input type="text" name="wa_pkj" size="50" value="<?php echo $wa_pkj?>"></td></tr>
		<tr><td>Penghasilan</td><td><input type="text" name="wa_phasilan" size="20" value="<?php echo $wa_phasilan?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Status</td><td>
		
		<?php if ($wa_stat == "Masih Hidup") { $s_ASH = "checked"; } else if ($wa_stat == "Sudah Meninggal") { $s_ASM == "checked"; } else { $s_ASH = ""; $s_ASM = ""; } ?>
		
		<input type="radio" name="wa_stat" value="Masih Hidup" id="mhw" <?php echo $s_ASH?>><label for="mhw">Masih Hidup</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="wa_stat" value="Sudah Meninggal" id="smw" <?php echo $s_ASM?>><label for="smw">Sudah Meninggal</label>
		</td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><input type="text" name="wa_alamat" size="80" value="<?php echo $wa_alamat?>"></td></tr>
	</table>
</div>

<div id="country8" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Kegemaran Seni</td><td><input type="text" name="seni" size="80" value="<?php echo $seni?>"></td></tr>
		<tr><td width="30%">Kegemaran Olahraga</td><td><input type="text" name="olahraga" size="80" value="<?php echo $olahraga?>"></td></tr>
		<tr><td width="30%">Kegemaran Organisasi</td><td><input type="text" name="organisasi" size="80" value="<?php echo $organisasi?>"></td></tr>
		<tr><td width="30%">Kegemaran Lainnya</td><td><input type="text" name="lain" size="80" value="<?php echo $lain?>"></td></tr>
	</table>
</div>

<div id="country9" class="tabcontent">
	<table width="95%" class="form">
		<?php
		$bs1_pc	= explode("-", $bs1);	$bs_1_th = $bs1_pc[1]; 	$bs_1_nama = $bs1_pc[0]; 
		$bs2_pc	= explode("-", $bs2);	$bs_2_th = $bs2_pc[1]; 	$bs_2_nama = $bs2_pc[0]; 
		$bs3_pc	= explode("-", $bs3);	$bs_3_th = $bs3_pc[1]; 	$bs_3_nama = $bs3_pc[0]; 
		?>
		
		<tr><td width="30%">Beasiswa 1</td><td>Tahun <input type="text" name="bs_1_th" size="10" value="<?php echo $bs_1_th?>" onkeypress="return onlyNumbers();"> Nama  <input type="text" name="bs_1_nama" size="30" value="<?php echo $bs_1_nama?>"></td></tr>
		<tr><td width="30%">Beasiswa 2</td><td>Tahun <input type="text" name="bs_2_th" size="10" value="<?php echo $bs_2_th?>" onkeypress="return onlyNumbers();"> Nama  <input type="text" name="bs_2_nama" size="30" value="<?php echo $bs_2_nama?>"></td></tr>
		<tr><td width="30%">Beasiswa 3</td><td>Tahun <input type="text" name="bs_3_th" size="10"value="<?php echo $bs_3_th?>" onkeypress="return onlyNumbers();"> Nama  <input type="text" name="bs_3_nama" size="30" value="<?php echo $bs_3_nama?>"></td></tr>
		<tr><td>Tgl. Meninggalkan sekolah</td><td><input type="text" name="tgl_pindah" id="tgl_pindah" size="5" value="<?php echo $tgl_pindah?>" readonly>&nbsp;&nbsp; Alasan <input type="text" name="alasan_pindah_keluar" size="40" value="<?php echo $alasan_pindah_keluar?>"></td></tr>
		<tr><td>Tgl. Lulus</td><td><input type="text" name="tgl_lulus" size="10" id="tgl_lulus" value="<?php echo $tgl_lulus?>" readonly></td></tr>
		<tr><td>Tgl. Ijazah</td><td><input type="text" name="lls_tgl_ijazah" size="10" id="lls_tgl_ijazah" value="<?php echo $lls_tgl_ijazah?>" readonly>&nbsp;&nbsp; Nomor Ijazah <input type="text" name="lls_no_ijazah" size="30" value="<?php echo $lls_no_ijazah?>" ></td></tr>
		<tr><td>Tgl. SKHU/STL</td><td><input type="text" name="lls_tgl_stl" size="10" id="lls_tgl_stl"  value="<?php echo $lls_tgl_stl?>" readonly>&nbsp;&nbsp; Nomor SKHU/STL <input type="text" name="lls_no_stl" size="30" value="<?php echo $lls_no_stl?>" ></td></tr>
	</table>
</div>

<div id="country10" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="30%">Kuliah di</td><td><input type="text" name="klh_tmp" size="30" value="<?php echo $klh_tmp?>"></td></tr>
		<tr><td width="30%">Kuliah jurusan</td><td><input type="text" name="klh_jrs" size="30" value="<?php echo $klh_jrs?>"></td></tr>
		<tr><td width="30%">Kuliah di kota</td><td><input type="text" name="klh_kota" size="30" value="<?php echo $klh_kota?>"></td></tr>
		
		<tr><td width="30%">Kerja Mulai Tgl.</td><td><input type="text" name="krj_tgl_mulai" size="15" id="krj_tgl_mulai"  value="<?php echo $krj_tgl_mulai?>"readonly></td></tr>
		<tr><td width="30%">Kerja di</td><td><input type="text" name="krj_namapt" size="30" value="<?php echo $krj_namapt?>"></td></tr>
		<tr><td width="30%">Kerja di Lembaga</td><td><input type="text" name="krj_lembaga" size="30" value="<?php echo $krj_lembaga?>"></td></tr>
		<tr><td width="30%">Kerja mandiri di</td><td><input type="text" name="krj_mandiri" size="30" value="<?php echo $krj_mandiri?>"></td></tr>
		<tr><td width="30%">Kerja Lainnya di</td><td><input type="text" name="krj_lainnya" size="30" value="<?php echo $krj_lainnya?>"></td></tr>
		<tr><td width="30%">Penghasilan</td><td><input type="text" name="krj_hasil" size="20" value="<?php echo $krj_hasil?>" onkeypress="return onlyNumbers();"></td></tr>
	</table>
</div>

</div>

<div class="tombol_submit">
	<input type="submit" name="kirim" value="Simpan">
</div>
</form>

<script type="text/javascript">
$(document).ready(function(){
	$("#f_buku_induk").validate();

	$("#klik").click(function () {
		$("#fotonya").toggle();
		return false;
	});

});

var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "tgl_lahir",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "msk_tgl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tgl_pindah",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tgl_ijazah",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tgl_stl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "ay_tgl_lahir",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "ib_tgl_lahir",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "wa_tgl_lahir",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tgl_lulus",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "lls_tgl_ijazah",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "lls_tgl_stl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "krj_tgl_mulai",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>
</div>
