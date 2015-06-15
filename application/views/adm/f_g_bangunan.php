<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	
	$nama			= "<input type='text' name='nama' size='40' value='' class='required'>";
	$luas			= 0;
	$jml_lt			= "";
	$thn_sls		= "";
	$thn_pake		= "";
	$no_imb			= "";
	$tgl_imb		= "";
	$alamat			= "";
	$asal			= "";
	$sumber_dana	= "";
	$harga			= "";
	$rekanan		= "";
	$no_bukti		= "";
	$tgl_buku		= "";
	$kondisi		= "";
	$status			= "";
	$lantai			= "";
	$tembok			= "";
	$atap			= "";
	
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $bgn->id_bgn;
	
	$nama			= "<b>".$bgn->nama."</b>";
	$luas			= $bgn->luas;
	$jml_lt			= $bgn->jml_lt;
	$thn_sls		= $bgn->thn_sls;
	$thn_pake		= $bgn->thn_pake;
	$no_imb			= $bgn->no_imb;
	$tgl_imb		= $bgn->tgl_imb;
	$alamat			= $bgn->alamat;
	$asal			= $bgn->asal;
	$sumber_dana	= $bgn->sumber_dana;
	$harga			= $bgn->harga;
	$rekanan		= $bgn->rekanan;
	$no_bukti		= $bgn->no_bukti;
	$tgl_buku		= $bgn->tgl_buku;
	$kondisi		= $bgn->kondisi;
	$status			= $bgn->status;
	$lantai			= $bgn->lantai;
	$tembok			= $bgn->tembok;
	$atap			= $bgn->atap;
	
}

?>

<div id="isi">
	<h2>Form Data Bangunan</h2>
	
	<?=$info?>
	
	<div style="margin: -7px 0px -25px 0px; background: #fff;">

	<form action="<?=base_URL()?>index.php/adm/g_bangunan/<?=$act_?>/<?=$id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_bangunan" id="f_bangunan" onsubmit="return tanah_valid()">
	<input type="hidden" name="id" value="<?=$id?>">
	<table width="95%" class="form">
			<tr><td width="20%">Nama Bangunan</td><td><?=$nama?></td></tr>
			<tr><td>Luas Bangunan</td><td><input type="text" name="luas" size="10" value="<?=$luas?>"  onkeypress="return onlyNumbers();" class="required"> m2</td></tr>
			<tr><td>Jumlah Lantai</td><td><input type="text" name="jml_lt" size="2" maxlength="2" value="<?=$jml_lt?>"  onkeypress="return onlyNumbers();" class="required"> &nbsp;&nbsp;&nbsp;Tahun Selesai <input type="text" name="thn_sls" size="4" maxlength="4" value="<?=$thn_sls?>"  onkeypress="return onlyNumbers();" class="required"> &nbsp;&nbsp;Tahun Dipakai <input type="text" name="thn_pake" size="4" maxlength="4" value="<?=$thn_pake?>" onkeypress="return onlyNumbers();" class="required"></td></tr>
			<tr><td>Nomor IMB</td><td><input type="text" name="no_imb" size="40" value="<?=$no_imb?>" class="required"></td></tr>
			<tr><td>Tanggal IMB</td><td><input type="text" name="tgl_imb" size="10"  id="tgl_imb"  value="<?=$tgl_imb?>" readonly class="required"></td></tr>
			<tr><td>Alamat</td><td><input type="text" name="alamat" size="40" value="<?=$alamat?>" placeholder="Dusun, Desa, Kecamatan, Kabupaten" class="required"></td></tr>
			<tr><td>Asal Perolehan</td><td><input type="text" name="asal" size="20" value="<?=$asal?>"> &nbsp;&nbsp;Sumber Dana &nbsp;&nbsp;<input type="text" name="sumber_dana" size="20" value="<?=$sumber_dana?>"></td></tr>
			<tr><td>Rekanan</td><td><input type="text" name="rekanan" size="20" value="<?=$rekanan?>"> &nbsp;&nbsp;&nbsp;No. Bukti Perolehan &nbsp;&nbsp;<input type="text" name="no_bukti" size="20" value="<?=$no_bukti?>"></td></tr>
			<tr><td>Tanggal Pembukuan</td><td><input type="text" name="tgl_buku" size="10"  id="tgl_buku"  value="<?=$tgl_buku?>" readonly></td></tr>
			<tr><td>Kondisi</td><td><select name="kondisi"  class="required"><option value="">-Pilih Kondisi-</option>
			<?php
			$val_sk	= array("B", "RR", "RB", "H");
			$nam_sk	= array("Baik", "Rusak Ringan", "Rusak Berat", "Hilang");
			
			for($a=0; $a < 4; $a++) {
				if ($val_sk[$a] == $kondisi) {
					echo "<option value='".$val_sk[$a]."' selected>".$nam_sk[$a]."</option>";
				} else {
					echo "<option value='".$val_sk[$a]."'>".$nam_sk[$a]."</option>";			
				}
			}
			
			?>
			</select>
			</td></tr>
			<tr><td>Bahan Material Lantai</td><td><input type="text" name="lantai" size="20" value="<?=$lantai?>"></td></tr>
			<tr><td>Bahan Material Tembok</td><td><input type="text" name="tembok" size="20" value="<?=$tembok?>"></td></tr>
			<tr><td>Bahan Material Atap</td><td><input type="text" name="atap" size="20" value="<?=$atap?>"></td></tr>
			<tr><td>Nilai Aset </td><td><input type="text" name="harga" size="20" value="<?=$harga?>" onkeypress="return onlyNumbers();"  class="required"></td></tr>
			
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

		</table>

	</form>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_bangunan").validate();
});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "tgl_imb",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tgl_buku",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>