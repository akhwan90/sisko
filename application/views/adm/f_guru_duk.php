<?php
$act = $this->uri->segment(3);


if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= $detil_pgw->id;
	
	$nama  			= $detil_pgw->nama;
	$nip  			= $detil_pgw->nip;
	if (!empty($gol_pgw)) {
		$gol  			= $gol_pgw->panggol;
		$gol_tmt  		= $gol_pgw->tmt;
		$mk_th_terakhir = $gol_pgw->mker_th;
		$mk_bl_terakhir = $gol_pgw->mker_bl;
	
	} else {
		$gol  			= "";
		$gol_tmt  		= "";
		$mk_th_terakhir = "";
		$mk_bl_terakhir = "";
	}
	$angka_kredit  	= "";
	$jab_nama  		= "";
	$jab_tmt 		= "";
	$mk_tmt  		= "";
	$latjab_nama  	= "";
	$latjab_blth  	= "";
	$latjab_jam  	= "";

	if (!empty($pend_pgw)) {
		$prodi  		= $pend_pgw->fak." (".$pend_pgw->jur.")";
		$lembaga  		= $pend_pgw->nama;
		$thn_lulus  	= $pend_pgw->th_lulus;
		$tkt  			= $pend_pgw->jenjang;
	} else {
		$prodi  		= "";
		$lembaga  		= "";
		$thn_lulus  	= "";
		$tkt  			= "";
	}	
	$cat  			= "";
	$ket  			= "";
	$usia			= $detil_pgw->usia;


	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $duk_pgw->no;
	
	$nama  			= $duk_pgw->nama;
	$nip  			= $duk_pgw->nip;
	$gol  			= $duk_pgw->gol;
	$gol_tmt  		= $duk_pgw->gol_tmt;
	$angka_kredit  	= $duk_pgw->angka_kredit;
	$jab_nama  		= $duk_pgw->jab_nama;
	$jab_tmt 		= $duk_pgw->jab_tmt;
	$mk_tmt  		= $duk_pgw->mk_tmt;
	$mk_th_terakhir = $duk_pgw->mk_th_terakhir;
	$mk_bl_terakhir = $duk_pgw->mk_bl_terakhir;
	$latjab_nama  	= $duk_pgw->latjab_nama;
	$latjab_blth  	= $duk_pgw->latjab_blth;
	$latjab_jam  	= $duk_pgw->latjab_jam;
	$prodi  		= $duk_pgw->prodi;
	$lembaga  		= $duk_pgw->lembaga;
	$thn_lulus  	= $duk_pgw->thn_lulus;
	$tkt  			= $duk_pgw->tkt;
	$cat  			= $duk_pgw->cat;
	$ket  			= $duk_pgw->ket;
	//$usia			= $duk_pgw->usia;
}

?>
<div id="isi">
	<h2>Form Daftar Urut Kepegawaian</h2>
	
	<div style="margin: -8px 0px -30px 0px; background: #fff; padding-bottom: 15px">
	
	<form action="<?php echo base_URL()?>index.php/adm/guru_duk/<?php echo $act_?>/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" id="f_guru_duk" onsubmit="return tanah_valid()">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<table width="97.5%" class="form">
	
	
		<tr><td>Nama</td><td><input type="text" name="nama" size="40" value="<?php echo $nama?>" readonly></td></tr>
		<tr><td>NIP</td><td><input type="text" name="nip" size="20" value="<?php echo $nip?>" readonly></td></tr>
		<tr><td>Pangkat Golongan</td><td><select name="gol" class="required">
		<?php
		$val_gol = $this->db->query("SELECT * FROM tg_panggol ORDER BY id ASC")->result();
		
		foreach ($val_gol as $vg) {
			if ($vg->id == $gol) {
				echo "<option value='".$vg->id."' selected>".$vg->gol." - ".$vg->pangkat."</option>";
			} else {
				echo "<option value='".$vg->id."'>".$vg->gol." - ".$vg->pangkat."</option>";			
			}
		}
		
		?>
		</select>
		</td></tr>
		<tr><td>TMT Golongan</td><td><input type="text" name="gol_tmt" size="10"  id="gol_tmt"  value="<?php echo $gol_tmt?>" readonly></td></tr>
		<tr><td>Angka Kredit</td><td><input type="text" name="angka_kredit" size="10" value="<?php echo $angka_kredit?>"></td></tr>
		<tr><td>Jabatan</td><td><input type="text" name="jab_nama" size="30" value="<?php echo $jab_nama?>"  class="required"></td></tr>
		<tr><td>TMT Jabatan</td><td><input type="text" name="jab_tmt" size="10"  id="jab_tmt"  value="<?php echo $jab_tmt?>" readonly class="required"></td></tr>
		<tr><td>Masa Kerja</td><td><input type="text" name="mk_th_terakhir" size="3" value="<?php echo $mk_th_terakhir?>"  class="required" onkeypress="return onlyNumbers();"> tahun <input type="text" name="mk_bl_terakhir" size="3" value="<?php echo $mk_bl_terakhir?>"  class="required" onkeypress="return onlyNumbers();"> bulan </td></tr>
		<tr><td>Latihan Jabatan</td><td><input type="text" name="latjab_nama" size="40" value="<?php echo $latjab_nama?>"></td></tr>
		<tr><td>Waktu Lat Jab</td><td><input type="text" name="latjab_blth" size="20" value="<?php echo $latjab_blth?>"></td></tr>
		<tr><td>Lama Lat Jab</td><td><input type="text" name="latjab_jam" size="3" value="<?php echo $latjab_jam?>" onkeypress="return onlyNumbers();"> jam</td></tr>
		<tr><td>Prodi</td><td><input type="text" name="prodi" size="40" value="<?php echo $prodi?>" readonly></td></tr>
		<tr><td>Nama Lembaga</td><td><input type="text" name="lembaga" size="40" value="<?php echo $lembaga?>" readonly></td></tr>
		<tr><td>Tahun Lulus</td><td><input type="text" name="thn_lulus" size="10" value="<?php echo $thn_lulus?>" readonly></td></tr>
		<tr><td>Jenjang</td><td><input type="text" name="tkt" size="10" value="<?php echo $tkt?>" readonly></td></tr>
		<tr><td>Catatan</td><td><input type="text" name="cat" size="40" value="<?php echo $cat?>" ></td></tr>
		<tr><td>Keterangan</td><td><input type="text" name="ket" size="40" value="<?php echo $ket?>" ></td></tr>
		
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>

	</form>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#f_guru_duk").validate();
});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "gol_tmt",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "jab_tmt",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});

</script>