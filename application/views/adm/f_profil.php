<?php
$act = $this->uri->segment(3);

if ($act == "edit"  || $act == "act_edit") {
	$id			= $profil_sekolah->id;
	
	$nama 		= "<input type='text' name='nama' size='40' value='".$profil_sekolah->nama."'>";
	$nss 		= "<input type='text' name='nss' size='30' value='".$profil_sekolah->nss."' onkeypress='return onlyNumbers();'>";
	$nis 		= "<input type='text' name='nis' size='20' value='".$profil_sekolah->nis."' onkeypress='return onlyNumbers();'>";
	$npsn 		= "<input type='text' name='npsn' size='20' value='".$profil_sekolah->npsn."' onkeypress='return onlyNumbers();'>";
	$prov 		= "<input type='text' name='prov' size='30' value='".$profil_sekolah->prov."'>";
	$kab 		= "<input type='text' name='kab' size='30' value='".$profil_sekolah->kab."'>";
	$kec 		= "<input type='text' name='kec' size='30' value='".$profil_sekolah->kec."'>";
	$desa 		= "<input type='text' name='desa' size='30' value='".$profil_sekolah->desa."'>";
	$jl 		= "<input type='text' name='jl' size='40' value='".$profil_sekolah->jl."'>";
	$kd_pos 	= "<input type='text' name='kd_pos' size='5' value='".$profil_sekolah->kd_pos."' onkeypress='return onlyNumbers();'>";
	$telp 		= "<input type='text' name='telp' size='10' value='".$profil_sekolah->telp."' onkeypress='return onlyNumbers();'>";
	$fax 		= "<input type='text' name='fax' size='10' value='".$profil_sekolah->fax."' onkeypress='return onlyNumbers();'>";
	$daerah 	= "<input type='text' name='daerah' size='30' value='".$profil_sekolah->daerah."'>";
	$status 	= "<input type='text' name='status' size='30' value='".$profil_sekolah->status."'>";
	$prodi 		= "<input type='text' name='prodi' size='40' value='".$profil_sekolah->prodi."'>";
	$kompetensi = "<textarea cols='60' rows='5' name='kompetensi'>".$profil_sekolah->kompetensi."</textarea> *) ganti baris pakai \"".htmlentities("<br>")."\"";
	$akre 		= "<input type='text' name='akre' size='3' value='".$profil_sekolah->akre."'>";
	$akre_th 	= "<input type='text' name='akre_th' size='3' value='".$profil_sekolah->akre_th."' onkeypress='return onlyNumbers();' maxlength='4'>";
	$npwp_rutin = "<input type='text' name='npwp_rutin' size='30' value='".$profil_sekolah->npwp_rutin."'>";
	$npwp_bop 	= "<input type='text' name='npwp_bop' size='30' value='".$profil_sekolah->npwp_bop."'>";
	$sk 		= "<input type='text' name='sk' size='40' value='".$profil_sekolah->sk."'>";
	$sk_tgl 	= "<input type='text' name='sk_tgl' id='sk_tgl' readonly size='10' value='".$profil_sekolah->sk_tgl."'>";
	$sk_ttd 	= "<input type='text' name='sk_ttd' size='30' value='".$profil_sekolah->sk_ttd."'>";
	$jml_guru 	= "<input type='text' name='jml_guru' size='2' value='".$profil_sekolah->jml_guru."' onkeypress='return onlyNumbers();'>";
	$th_berdiri = "<input type='text' name='th_berdiri' size='2' value='".$profil_sekolah->th_berdiri."' onkeypress='return onlyNumbers();' maxlength='4'>";
	$th_negeri 	= "<input type='text' name='th_negeri' size='2' value='".$profil_sekolah->th_negeri."' onkeypress='return onlyNumbers();' maxlength='4'>";
	$waktu_kbm 	= "<input type='text' name='waktu_kbm' size='20' value='".$profil_sekolah->waktu_kbm."'>";
	$stat_gedung = "<input type='text' name='stat_gedung' size='20' value='".$profil_sekolah->stat_gedung."'>";
	$jrk_kec 	= "<input type='text' name='jrk_kec' size='2' value='".$profil_sekolah->jrk_kec."' onkeypress='return onlyNumbers();'>";
	$jrk_kab 	= "<input type='text' name='jrk_kab' size='2' value='".$profil_sekolah->jrk_kab."' onkeypress='return onlyNumbers();'>";
	$lintasan 	= "<input type='text' name='lintasan' size='20' value='".$profil_sekolah->lintasan."'>";
	$lintang 	= "<input type='text' name='lintang' size='20' value='".$profil_sekolah->lintang."'>";
	$bujur 		= "<input type='text' name='bujur' size='20' value='".$profil_sekolah->bujur."'>";
	$penyelenggara 	= "<input type='text' name='penyelenggara' size='20' value='".$profil_sekolah->penyelenggara."'>";
	$kepsek_nama 	= "<input type='text' name='kepsek_nama' size='30' value='".$profil_sekolah->kepsek_nama."'>";
	$kepsek_nip 	= "<input type='text' name='kepsek_nip' size='20' value='".$profil_sekolah->kepsek_nip."'>";
	$kepsek_pkt 	= "<input type='text' name='kepsek_pkt' size='20' value='".$profil_sekolah->kepsek_pkt."'>";
	$kepsek_gol 	= "<input type='text' name='kepsek_gol' size='3' value='".$profil_sekolah->kepsek_gol."'>";
	$kepsek_pkt_tmt = "<input type='text' name='kepsek_pkt_tmt' id='kepsek_pkt_tmt' size='6' readonly value='".$profil_sekolah->kepsek_pkt_tmt."'>";
	$kepsek_pend 	= "<input type='text' name='kepsek_pend' size='30' value='".$profil_sekolah->kepsek_pend."'>";
	$kepsek_jur 	= "<input type='text' name='kepsek_jur' size='20' value='".$profil_sekolah->kepsek_jur."'>";
	$kepsek_sk 		= "<input type='text' name='kepsek_sk' size='20' value='".$profil_sekolah->kepsek_sk."'>";
	$kepsek_tmt 	= "<input type='text' name='kepsek_tmt' id='kepsek_tmt' size='6' readonly value='".$profil_sekolah->kepsek_tmt."'>";
	$kepsek_nope1 	= "<input type='text' name='kepsek_nope1' size='20' value='".$profil_sekolah->kepsek_nope1."' onkeypress='return onlyNumbers();'>";
	$kepsek_nope2 	= "<input type='text' name='kepsek_nope2' size='20' value='".$profil_sekolah->kepsek_nope2."' onkeypress='return onlyNumbers();'>";
	
	$tombol			= '<div class="tombol_submit" style="float: left; display: inline; margin-left: 30px">
						<input type="submit" name="kirim" value="Simpan" style="display: inline; cursor: pointer; font-size: 20px; padding: 30px; font-weight: bold">
						</div>';
	$jscript		= 'function catcalc(cal) {
							var date = cal.date;
							var time = date.getTime()
						}';



} else {
	$act_	= "act_edt";
	$foto	= "";
	
	$id			= $profil_sekolah->id;
	
	
	$nama  		= $profil_sekolah->nama;
	$nss  		= $profil_sekolah->nss;
	$nis  		= $profil_sekolah->nis;
	$npsn 	 	= $profil_sekolah->npsn;
	$prov  		= $profil_sekolah->prov;
	$kab  		= $profil_sekolah->kab;
	$kec  		= $profil_sekolah->kec;
	$desa  		= $profil_sekolah->desa;
	$jl  		= $profil_sekolah->jl;
	$kd_pos  	= $profil_sekolah->kd_pos;
	$telp  		= $profil_sekolah->telp;
	$fax  		= $profil_sekolah->fax;
	$daerah  	= $profil_sekolah->daerah;
	$status  	= $profil_sekolah->status;
	$prodi  	= $profil_sekolah->prodi;
	$kompetensi = $profil_sekolah->kompetensi;
	$akre  		= $profil_sekolah->akre;
	$akre_th  	= $profil_sekolah->akre_th;
	$npwp_rutin = $profil_sekolah->npwp_rutin;
	$npwp_bop  	= $profil_sekolah->npwp_bop;
	$sk  		= $profil_sekolah->sk;
	$sk_tgl  	= $profil_sekolah->sk_tgl;
	$sk_ttd  	= $profil_sekolah->sk_ttd;
	$jml_guru  	= $profil_sekolah->jml_guru;
	$th_berdiri = $profil_sekolah->th_berdiri;
	$th_negeri  = $profil_sekolah->th_negeri;
	$waktu_kbm  = $profil_sekolah->waktu_kbm;
	$stat_gedung= $profil_sekolah->stat_gedung;
	$jrk_kec  	= $profil_sekolah->jrk_kec;
	$jrk_kab  	= $profil_sekolah->jrk_kab;
	$lintasan  	= $profil_sekolah->lintasan;
	$lintang  	= $profil_sekolah->lintang;
	$bujur  	= $profil_sekolah->bujur;
	$penyelenggara  = $profil_sekolah->penyelenggara;
	$kepsek_nama  	= $profil_sekolah->kepsek_nama;
	$kepsek_nip  	= $profil_sekolah->kepsek_nip;
	$kepsek_pkt  	= $profil_sekolah->kepsek_pkt;
	$kepsek_gol  	= $profil_sekolah->kepsek_gol;
	$kepsek_pkt_tmt = $profil_sekolah->kepsek_pkt_tmt;
	$kepsek_pend  	= $profil_sekolah->kepsek_pend;
	$kepsek_jur  	= $profil_sekolah->kepsek_jur;
	$kepsek_sk  	= $profil_sekolah->kepsek_sk;
	$kepsek_tmt  	= $profil_sekolah->kepsek_tmt;
	$kepsek_nope1  	= $profil_sekolah->kepsek_nope1;
	$kepsek_nope2  	= $profil_sekolah->kepsek_nope2;
	$tombol			= '<div class="tombol_submit" style="float: left; display: inline; margin-left: 30px">
						<input type="button" name="kirim" value="Edit" style="display: inline; cursor: pointer; font-size: 20px; padding: 30px; font-weight: bold" onclick="window.open(\''.base_URL().'index.php/adm/profil_sekolah/edit\', \'_self\');">
						</div>';
	$jscript		= "";
}

?>

<div id="isi">
	<h2>Profil Sekolah</h2>
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/profil_sekolah" target="blank">Cetak Data Profil Sekolah</a>
	</span>
	-->
	
<ul id="countrytabs" class="shadetabs" style="width: 1000px">
<li><a href="#" rel="country1" class="selected">Data Sekolah</a></li>
<li><a href="#" rel="country2">Alamat</a></li>
<li><a href="#" rel="country3">Geografis</a></li>
<li><a href="#" rel="country4">Akademik</a></li>
<li><a href="#" rel="country5">Legalitas</a></li>
<li><a href="#" rel="country6">Kepala Sekolah</a></li>
</ul>


<div style="border:1px solid gray; float: left; width:790px; margin: 0 0 1em 10px; padding: 10px; background-color: #FFFFFF; border-radius: 5px;">
<!--<form action="<?php echo base_URL()?>index.php/depan/add_buku_induk" method="post" name="f_buku_induk" onsubmit="...return buku_induk_valid()">-->

<form action="<?php echo base_URL()?>index.php/adm/profil_sekolah/simpan/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_buku_induk" onsubmit="return buku_induk_valid()">


<div id="country1" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">Nama</td><td><?php echo $nama?></td></tr>
		<tr><td>NSS</td><td><?php echo $nss?></td></tr>
		<tr><td>NIS</td><td><?php echo $nis?></td></tr>
		<tr><td>NPSN</td><td><?php echo $npsn?></td></tr>
		<tr><td>Status</td><td><?php echo $status?></td></tr> 
		<tr><td>Akreditasi</td><td><?php echo $akre?> Tahun <?php echo $akre_th?></td></tr>
		</td></tr>
	</table>
</div>


<div id="country2" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">Provinsi</td><td><?php echo $prov?></td></tr>
		<tr><td>Kabupaten</td><td><?php echo $kab?></td></tr>
		<tr><td>Kecamatan</td><td><?php echo $kec?></td></tr>
		<tr><td>Desa</td><td><?php echo $desa?></td></tr>	
		<tr><td>Jalan</td><td><?php echo $jl?></td></tr>
		<tr><td>Kode Pos</td><td><?php echo $kd_pos?></td></tr>	
		<tr><td>Telepon</td><td><?php echo $telp?>, Nomor  Fax  : <?php echo $fax?></td></tr>	
	</table>
</div>

<div id="country3" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">Daerah</td><td><?php echo $daerah?></td></tr>
		<tr><td>Lintasan</td><td><?php echo $lintasan?></td></tr>
		<tr><td>Jarak ke Kecamatan</td><td><?php echo $jrk_kec?> kilometer</td></tr>
		<tr><td>Jarak ke Kabupaten</td><td><?php echo $jrk_kab?> kilometer</td></tr>	
		<tr><td>Lintang</td><td><?php echo $lintang?> Bujur <?php echo $lintang?></td></tr>
	</table>
</div>

<div id="country4" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">Program Studi</td><td><?php echo $prodi?></td></tr>
		<tr><td>Kompetensi</td><td><?php echo $kompetensi?></td></tr>
		<tr><td>Jumlah Guru</td><td><?php echo $jml_guru?> orang</td></tr>
		<tr><td>Waktu KBM</td><td><?php echo $waktu_kbm?></td></tr>	
	</table>
</div>

<div id="country5" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">SK Berdiri</td><td><?php echo $sk?></td></tr>
		<tr><td>SK Tanggal</td><td><?php echo $sk_tgl?></td></tr>
		<tr><td>Penanda Tangan SK</td><td><?php echo $sk_ttd?></td></tr>
		<tr><td>Tahun Berdiri</td><td><?php echo $th_berdiri?> Tahun Penegrian <?php echo $th_negeri?></td></tr>
		<tr><td>NPWP Rutin</td><td><?php echo $npwp_rutin?></td></tr>
		<tr><td>NPWP BOP</td><td><?php echo $npwp_bop?></td></tr>
		<tr><td>Status Gedung</td><td><?php echo $stat_gedung?></td></tr>
		<tr><td>Penyelenggara</td><td><?php echo $penyelenggara?></td></tr>
	</table>
</div>

<div id="country6" class="tabcontent">
	<table width="95%" class="form">
		<tr><td width="20%">Nama Kepala Sekolah</td><td><?php echo $kepsek_nama?></td></tr>
		<tr><td>NIP</td><td><?php echo $kepsek_nip?></td></tr>
		<tr><td>Pangkat</td><td><?php echo $kepsek_pkt?> Gol : <?php echo $kepsek_gol?> TMT : <?php echo $kepsek_pkt_tmt?></td></tr>
		<tr><td>Pendidikan Terakhir</td><td><?php echo $kepsek_pend?></td></tr>
		<tr><td>Jurusan</td><td><?php echo $kepsek_jur?></td></tr>
		<tr><td>SK Jadi Kepala Sekolah</td><td><?php echo $kepsek_sk?> TMT : <?php echo $kepsek_tmt?></td></tr>
		<tr><td>Nomor HP 1</td><td><?php echo $kepsek_nope1?></td></tr>
		<tr><td>Nomor HP 2</td><td><?php echo $kepsek_nope2?></td></tr>
	</table>
</div>


</div>
<?php echo $tombol?>
</form>

</div>


<script type="text/javascript">

var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

<?php echo $jscript?>

Calendar.setup({
	inputField     :    "kepsek_tmt",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "kepsek_pkt_tmt",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "sk_tgl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>
