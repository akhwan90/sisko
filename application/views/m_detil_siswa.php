<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

<!-- mulai -->                  
	

<div style="border: solid 1px gray; width: 350px; float: left; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px">
<div style="text-align: center; margin: 10px auto; width:150px; border: 6px solid #E4E4E4;">
<img src="<?php echo base_URL()?>upload/foto_siswa/<?php echo $data_siswa->foto?>" width="150px" height="170px">
</div>

<table class="free">
		<tr><td id="kiri" width="30%">No. Induk</td><td id="kiri">: <b><?php echo $data_siswa->nis?></b></td></tr>
		<tr><td id="kiri">NISN</td><td id="kiri">: <b><?php echo $data_siswa->nisn?></b></td></tr>
		<tr><td id="kiri">Nama Lengkap</td><td id="kiri">: <b><?php echo $data_siswa->nama?></b></td></tr>
		<tr><td id="kiri">Nama Panggilan</td><td id="kiri">: <b><?php echo $data_siswa->nama_pgl?></b></td></tr>
		<tr><td id="kiri">Jenis Kelamin</td><td id="kiri">: <b><?php echo $data_siswa->jk?></b></td></tr>
		<tr><td id="kiri">TTL</td><td id="kiri">: <b><?php echo $data_siswa->tmp_lahir.", ".tgl_pendek($data_siswa->tgl_lahir)?></b></td></tr>
		<tr><td id="kiri">Umur</td><td id="kiri">: <b><?php echo $data_siswa->umur?></b> tahun</td></tr>
		<tr><td id="kiri">Agama</td><td id="kiri">: <b><?php echo $data_siswa->agama?></b></td></tr>
		<tr><td id="kiri">Warga Negara</td><td id="kiri">: <b><?php echo $data_siswa->warga_negara?></b></td></tr>
		<tr><td id="kiri">Anak Ke</td><td id="kiri">: <b><?php echo $data_siswa->anak_ke?></b></td></tr>
		<tr><td id="kiri">Jml Saudara</td><td id="kiri">: Kandung : <b><?php echo $data_siswa->sdr_kandung?></b>&nbsp;&nbsp;
		Tiri : <b><?php echo $data_siswa->sdr_tiri?></b>&nbsp;&nbsp;
		Angkat : <b><?php echo $data_siswa->sdr_angkat?></b></td></tr>
		<tr><td id="kiri">Status Anak</td><td id="kiri">: <b><?php echo $data_siswa->stat_anak?></b></td></tr>
		<tr><td id="kiri">Bahasa</td><td id="kiri">: <b><?php echo $data_siswa->bahasa?></b></td></tr>
		<tr><td id="kiri">Status Aktif</td><td id="kiri">: <b><?php echo $data_siswa->stat_aktif?></b></td></tr>
	</table>


</div>

<div style="margin: 0 20px 20px 10px; width: 600px; float: left;">
<ul id="countrytabs" class="shadetabs">
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

<div style="border:1px solid gray; width:590px; margin-bottom: 1em; padding: 10px; background-color: #FFFFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px">

<div id="country2" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Alamat</td><td><b><?php echo $tmp_tinggal->alamat?></b></td></tr>
		<tr><td>No. Telp</td><td><b><?php echo $tmp_tinggal->no_tlp?></b></td></tr>
		<tr><td>Tinggal Dengan</td><td><b><?php echo $tmp_tinggal->ket_tinggal?></b></td></tr>
		<tr><td>Jika Kos, alamt di</td><td><b><?php echo $tmp_tinggal->kos_di?></b></td></tr>
		<tr><td>Jarak ke Sekolah</td><td><b><?php echo $tmp_tinggal->jarak?></b> km</td></tr>
		<tr><td>Sarana Transportasi</td><td><b><?php echo $tmp_tinggal->transport?></b></td></tr>
	</table>
</div>

<div id="country3" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Golongan Darah</td><td><b><?php echo $kesehatan->gol_darah?></b></td></tr>
		<tr><td>Penyakit yang pernah diderita</td><td><b><?php echo $kesehatan->penyakit?></b></td></tr>
		<tr><td>Kelainan</td><td><b><?php echo $kesehatan->kelainan?></b></td></tr>
		<tr><td>Tinggi Badan</td><td><b><?php echo $kesehatan->tgg_bdn?></b> cm</td></tr>
		<tr><td>Berat Badan</td><td><b><?php echo $kesehatan->brt_bdn?></b> kg</td></tr>
	</table>
</div>

<div id="country4" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Lulusan dari</td><td><b><?php echo $pend_sebelum->lulus_dari?></b></td></tr>
		<tr><td>Ijazah</td><td><b><?php echo $pend_sebelum->no_ijazah?> (<?php echo tgl_indo($pend_sebelum->tgl_ijazah)?>)</b></td></tr>
		<tr><td>SKHU/STL</td><td><b><?php echo $pend_sebelum->no_stl?> (<?php echo tgl_indo($pend_sebelum->tgl_stl)?>)</b></td></tr>
		<tr><td>No. Ujian Sebelumnya</td><td><b><?php echo $pend_sebelum->no_un_asal?></b></td></tr>
		<tr><td>Lama belajar</td><td><b><?php echo $pend_sebelum->lama_bljr?></b> tahun</td></tr>
		<tr><td>Status Sekolah Asal</td><td><b><?php echo $pend_sebelum->status_sasal?></b></td></tr></td></tr>
		<tr><td>Pindahan dari</td><td><b><?php echo $pend_sebelum->pndh_dari?></b></td></tr>
		<tr><td>Alasan pindah</td><td><b><?php echo $pend_sebelum->alasan?></b></td></tr>
		<tr><td>Masuk di Kelas</td><td><b><?php echo $pend_sebelum->msk_kelas?></b> pada tanggal <b><?php echo tgl_indo($pend_sebelum->msk_tgl)?></b></td></tr>
		<tr><td>Bidang Studi</td><td><b><?php echo $pend_sebelum->bid_studi?></b></td></tr>
		<tr><td>Program Studi</td><td><b><?php echo $pend_sebelum->prodi?></b></td></tr>
		<tr><td>Kompetensi</td><td><b><?php echo $pend_sebelum->kompetensi?></b></td></tr>
	</table>

</div>

<div id="country5" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Nama Ayah</td><td><b><?php echo $ortu_ayah->nama?></b></td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><b><?php echo $ortu_ayah->tmp_lahir.", ".tgl_indo($ortu_ayah->tgl_lahir)?></b></td></tr>
		<tr><td>Agama</td><td><b><?php echo $ortu_ayah->agama?></b></td></tr>
		<tr><td>Kewarganegaraan</td><td><b><?php echo $ortu_ayah->kwarga?></b></td></tr>
		<tr><td>Pendidikan Terakhir</td><td><b><?php echo $ortu_ayah->pddk?></b></td></tr>
		<tr><td>Pekerjaan</td><td><b><?php echo $ortu_ayah->pkj?></b></td></tr>
		<tr><td>Penghasilan</td><td><b><?php echo $ortu_ayah->phasilan?></b></td></tr>
		<tr><td>Status</td><td><b><?php echo $ortu_ayah->stat?></b></td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><b><?php echo $ortu_ayah->alamat_telp?></b></td></tr>
	</table>
</div>

<div id="country6" class="tabcontent">	
	<table class="no-bordered">
		<tr><td width="30%">Nama Ibu</td><td><b><?php echo $ortu_ibu->nama?></b></td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><b><?php echo $ortu_ibu->tmp_lahir.", ".tgl_indo($ortu_ibu->tgl_lahir)?></b></td></tr>
		<tr><td>Agama</td><td><b><?php echo $ortu_ibu->agama?></b></td></tr>
		<tr><td>Kewarganegaraan</td><td><b><?php echo $ortu_ibu->kwarga?></b></td></tr>
		<tr><td>Pendidikan Terakhir</td><td><b><?php echo $ortu_ibu->pddk?></b></td></tr>
		<tr><td>Pekerjaan</td><td><b><?php echo $ortu_ibu->pkj?></b></td></tr>
		<tr><td>Penghasilan</td><td><b><?php echo $ortu_ibu->phasilan?></b></td></tr>
		<tr><td>Status</td><td><b><?php echo $ortu_ibu->stat?></b></td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><b><?php echo $ortu_ibu->alamat_telp?></b></td></tr>
	</table>
</div>

<div id="country7" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Nama Wali</td><td><b><?php echo $ortu_wali->nama?></b></td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><b><?php echo $ortu_wali->tmp_lahir.", ".tgl_indo($ortu_wali->tgl_lahir)?></b></td></tr>
		<tr><td>Agama</td><td><b><?php echo $ortu_wali->agama?></b></td></tr>
		<tr><td>Kewarganegaraan</td><td><b><?php echo $ortu_wali->kwarga?></b></td></tr>
		<tr><td>Pendidikan Terakhir</td><td><b><?php echo $ortu_wali->pddk?></b></td></tr>
		<tr><td>Pekerjaan</td><td><b><?php echo $ortu_wali->pkj?></b></td></tr>
		<tr><td>Penghasilan</td><td><b><?php echo $ortu_wali->phasilan?></b></td></tr>
		<tr><td>Status</td><td><b><?php echo $ortu_wali->stat?></b></td></tr>
		<tr><td>Alamat, Nomor telepon</td><td><b><?php echo $ortu_wali->alamat_telp?></b></td></tr>
	</table>
</div>

<div id="country8" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Kegemaran Seni</td><td><b><?php echo $gemar->seni?></b></td></tr>
		<tr><td width="30%">Kegemaran Olahraga</td><td><b><?php echo $gemar->olahraga?></b></td></tr>
		<tr><td width="30%">Kegemaran Organisasi</td><td><b><?php echo $gemar->organisasi?></b></td></tr>
		<tr><td width="30%">Kegemaran Lainnya</td><td><b><?php echo $gemar->lain
		?></b></td></tr>
	</table>
</div>

<div id="country9" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Beasiswa 1</td><td><b><?php echo $kembang_siswa->bs_1?></b></td></tr>
		<tr><td>Beasiswa 2</td><td><b><?php echo $kembang_siswa->bs_2?></b></td></tr>
		<tr><td>Beasiswa 3</td><td><b><?php echo $kembang_siswa->bs_3?></b></td></tr>
		<tr><td>Tgl. Meninggalkan sekolah</td><td><b><?php echo tgl_indo($kembang_siswa->tgl_tggl_sek)?> (<?php echo $kembang_siswa->alasan?>)</b></td></tr>
		<tr><td>Tgl. Lulus</td><td><b><?php echo tgl_indo($kembang_siswa->tamat_tgl)?></b></td></tr>
		<tr><td>Ijazah</td><td><b><?php echo $kembang_siswa->ijazah_no?></b> tanggal <b><?php echo tgl_indo($kembang_siswa->ijazah_tgl)?></b></td></tr>
		<tr><td>SKHU/STL</td><td><b><?php echo $kembang_siswa->skhu_no?></b> tanggal <b><?php echo tgl_indo($kembang_siswa->skhu_tgl)?></b></td></tr>
	</table>

</div>

<div id="country10" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Kuliah di</td><td><b><?php echo $setelah->klh_tmp?></b></td></tr>
		<tr><td width="30%">Kuliah jurusan</td><td><b><?php echo $setelah->klh_jrs?></b></td></tr>
		<tr><td width="30%">Kuliah di kota</td><td><b><?php echo $setelah->klh_kota?></b></td></tr>
		
		<tr><td width="30%">Kerja Mulai Tgl.</td><td><b><?php echo tgl_indo($setelah->krj_tgl_mulai)?></b></td></tr>
		<tr><td width="30%">Kerja di</td><td><b><?php echo $setelah->krj_namapt?></b></td></tr>
		<tr><td width="30%">Kerja di Lembaga</td><td><b><?php echo $setelah->krj_lembaga?></b></td></tr>
		<tr><td width="30%">Kerja mandiri di</td><td><b><?php echo $setelah->krj_mandiri?></b></td></tr>
		<tr><td width="30%">Kerja Lainnya di</td><td><b><?php echo $setelah->krj_lainnya?></b></td></tr>
		<tr><td width="30%">Penghasilan</td><td><b><?php echo $setelah->krj_hasil?></b></td></tr>
	</table>
</div>
</div>

</div>





<script type="text/javascript">

var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>
	
<!-- akhir -->
          </section>        
        </article>        
    </div>
</div>
	