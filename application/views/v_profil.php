<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

<!-- mulai -->                  
<center><h3>Profil SMKN 1 Pangkalan Banteng</h3></center>			
<br>


<div style="border: solid 1px gray; width: 390px; float: left; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px">
<div style="text-align: center; margin: 10px auto; width:170px; border: 6px solid #E4E4E4;">
<img src="<?=base_URL()?>asset/images/logo.gif" width="170px" height="170px">
</div>

<table class="free">
		<tr><td id="kiri" width="30%">Nama Sekolah</td><td id="kiri">: <b><?=$profil->nama?></b></td></tr>
		<tr><td id="kiri">NSS</td><td id="kiri">: <b><?=$profil->nss?></b></td></tr>
		<tr><td id="kiri">NIS</td><td id="kiri">: <b><?=$profil->nis?></b></td></tr>
		<tr><td id="kiri">NPSN</td><td id="kiri">: <b><?=$profil->npsn?></b></td></tr>
		<tr><td id="kiri">NSS</td><td id="kiri">: <b><?=$profil->nss?></b></td></tr>
		<tr><td id="kiri">Status</td><td id="kiri">: <b><?=$profil->status?></b></td></tr>
		<tr><td id="kiri">Status Akreditasi</td><td id="kiri">: <b><?=$profil->akre." Tahun ".$profil->akre_th?></b></td></tr>
		
</table>


</div>

<div style="margin: 0 20px 20px 10px; width: 560px; float: left;">
<ul id="countrytabs" class="shadetabs">
<li><a href="#" rel="country2">Alamat</a></li>
<li><a href="#" rel="country3">Geografis</a></li>
<li><a href="#" rel="country4">Akademik</a></li>
<li><a href="#" rel="country5">Legalitas</a></li>
<li><a href="#" rel="country6">Kepala Sekolah</a></li>
</ul>

<div style="border:1px solid gray; width:550px; margin-bottom: 1em; padding: 10px; background-color: #FFFFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px">

<div id="country2" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Provinsi</td><td><b><?=$profil->prov?></b></td></tr>
		<tr><td width="30%">Kabupaten</td><td><b><?=$profil->kab?></b></td></tr>
		<tr><td width="30%">Kecamatan</td><td><b><?=$profil->kec?></b></td></tr>
		<tr><td width="30%">Desa</td><td><b><?=$profil->desa?></b></td></tr>
		<tr><td width="30%">Jalan</td><td><b><?=$profil->jl?></b></td></tr>
		<tr><td width="30%">Kode Pos</td><td><b><?=$profil->kd_pos?></b></td></tr>
		<tr><td width="30%">Telp / Fax</td><td><b><?=$profil->telp." / ".$profil->fax?></b></td></tr>
	</table>
</div>

<div id="country3" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Daerah/Lingkungan</td><td><b><?=$profil->daerah?></b></td></tr>
		<tr><td width="30%">Lintasan</td><td><b><?=$profil->lintasan?></b></td></tr>
		<tr><td width="30%">Jarak ke Kecamatan</td><td><b><?=$profil->jrk_kec?></b></td></tr>
		<tr><td width="30%">Jarak ke Kabupaten</td><td><b><?=$profil->jrk_kab?></b></td></tr>
		<tr><td width="30%">Lintang / Bujur </td><td><b><?=$profil->lintang."  /  ".$profil->bujur?></b></td></tr>
	</table>
</div>

<div id="country4" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Program Studi</td><td><b><?=$profil->prodi?></b></td></tr>
		<tr><td width="30%">Kompetensi</td><td><b><?=$profil->kompetensi?></b></td></tr>
		<tr><td width="30%">Jumlah Guru</td><td><b><?=$profil->jml_guru?></b></td></tr>
		<tr><td width="30%">Waktu KBM</td><td><b><?=$profil->waktu_kbm?></b></td></tr>
	</table>

</div>

<div id="country5" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">SK Berdiri</td><td><b><?=$profil->sk?></b></td></tr>
		<tr><td width="30%">Tanggal SK</td><td><b><?=tgl_indo($profil->sk_tgl)?></b></td></tr>
		<tr><td width="30%">Penandatangan SK</td><td><b><?=$profil->sk_ttd?></b></td></tr>
		<tr><td width="30%">Thn Berdiri / Thn. Penegrian</td><td><b><?=$profil->th_berdiri." / ".$profil->th_negeri?></b></td></tr>
		<tr><td width="30%">NPWP Rutin</td><td><b><?=$profil->npwp_rutin?></b></td></tr>
		<tr><td width="30%">NPWP BOP</td><td><b><?=$profil->npwp_bop?></b></td></tr>
		<tr><td width="30%">Status Gedung</td><td><b><?=$profil->stat_gedung?></b></td></tr>
		<tr><td width="30%">Penyelenggara</td><td><b><?=$profil->penyelenggara?></b></td></tr>
	</table>
</div>

<div id="country6" class="tabcontent">	
	<table class="no-bordered">
		<tr><td width="30%">Nama Kepala Sekolah</td><td><b><?=$profil->kepsek_nama?></b></td></tr>
		<tr><td width="30%">NIP</td><td><b><?=$profil->kepsek_nip?></b></td></tr>
		<tr><td width="30%">Pangkat / Gol / TMT</td><td><b><?=$profil->kepsek_pkt." / ".$profil->kepsek_gol." / ".tgl_indo($profil->kepsek_pkt_tmt)?></b></td></tr>
		<tr><td width="30%">Pendidikan Terakhir</td><td><b><?=$profil->kepsek_pend." (".$profil->kepsek_jur.")"?></b></td></tr>
		<tr><td width="30%">SK Kepala Sekolah</td><td><b><?=$profil->kepsek_sk." (TMT : ".tgl_indo($profil->kepsek_tmt).")"?></b></td></tr>
		<tr><td width="30%">No. HP</td><td><b><?=$profil->kepsek_nope1.", ".$profil->kepsek_nope2?></b></td></tr>
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
	