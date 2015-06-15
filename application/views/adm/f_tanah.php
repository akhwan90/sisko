<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	
	$nama			= "<input type='text' name='nama' size='40' value='' class='required'>";
	$luas			= 0;
	$uk_bangunan	= 0;
	$uk_kosong		= 0;
	$letak			= "";
	$batas_u		= "";
	$batas_t		= "";
	$batas_s		= "";
	$batas_b		= "";
	$asal_dpt		= "";
	$dana_dari		= "";
	$stfk_hak		= "";
	$stfk_no		= "";
	$stfk_tgl		= "";
	$njop_m2		= "";
	$tgl_dapat		= "";
	$nilai_aset		= "";
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $tanah->id_tnh;
	
	$nama			= $tanah->nama;
	$luas			= $tanah->luas;
	$uk_bangunan	= $tanah->uk_bangunan;
	$uk_kosong		= $tanah->uk_kosong;
	$letak			= $tanah->letak;
	$batas_u		= $tanah->bts_u;
	$batas_t		= $tanah->bts_t;
	$batas_s		= $tanah->bts_s;
	$batas_b		= $tanah->bts_b;
	$asal_dpt		= $tanah->asal_dpt;
	$dana_dari		= $tanah->dana_dari;
	$stfk_hak		= $tanah->stfk_hak;
	$stfk_no		= $tanah->stfk_no;
	$stfk_tgl		= $tanah->stfk_tgl;
	$njop_m2		= $tanah->njop_m2;
	$tgl_dapat		= $tanah->tgl_dapat;
	$nilai_aset		= $tanah->nilai_aset;
}

?>
<div id="isi">
	<h2>Form Data Tanah</h2>
	
	<?php echo $info?>
	
	<div style="margin: -7px 0px -25px 0px; background: #fff;">

	<form action="<?php echo base_URL()?>index.php/adm/tanah/<?php echo $act_?>/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" id="f_tanah" onsubmit="return tanah_valid()">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<table width="95%" class="form">
		
			<tr><td>Nama Barang</td><td><?php echo $nama?></td></tr>
			
			<tr><td>Untuk Bangunan</td><td><input type="text" name="uk_bangunan" size="3" value="<?php echo $uk_bangunan?>" onkeypress="return onlyNumbers();" onFocus="startCalc();" onBlur="stopCalc();" class="required"> Kosong : <input type="text" name="uk_kosong" size="3" value="<?php echo $uk_kosong?>"  onkeypress="return onlyNumbers();"  onFocus="startCalc();" onBlur="stopCalc();" class="required"> Total : <input type="text" name="luas" size="5" value="<?php echo $luas?>" readonly></td></tr>
			
			<tr><td>Letak Tanah</td><td><input type="text" name="letak" size="40" value="<?php echo $letak?>" placeholder="Dusun, Desa, Kecamatan, Kabupaten" class="required"></td></tr>
			
			<tr><td>Batas Utara</td><td>
			<input type="text" name="batas_u" size="40" value="<?php echo $batas_u?>" class="required"> 
			Batas Selatan : <input type="text" name="batas_s" size="40" value="<?php echo $batas_s?>" class="required">
			</td></tr>
			
			<tr><td>Batas Timur</td><td>
			<input type="text" name="batas_t" size="40" value="<?php echo $batas_t?>" class="required">
			Batas Barat &nbsp;&nbsp;&nbsp;: <input type="text" name="batas_b" size="40" value="<?php echo $batas_b?>" class="required"></td></tr>
			
			<tr><td>Asal Perolehan</td><td><input type="text" name="asal_dpt" size="40" value="<?php echo $asal_dpt?>">
			Asal Dana &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="dana_dari" size="40" value="<?php echo $dana_dari?>" class="required"></td></tr>
			
			<tr><td>Sertifikat Hak </td><td><input type="text" name="stfk_hak" size="40" value="<?php echo $stfk_hak?>" class="required"></td></tr>
			
			<tr><td>Sertifikat Nomor </td><td><input type="text" name="stfk_no" size="40" value="<?php echo $stfk_no?>" class="required">
			Sertifikat tanggal : <input type="text" name="stfk_tgl" size="10" id="stfk_tgl"  value="<?php echo $stfk_tgl?>" readonly class="required"></td></tr>

			<tr><td>NJOP </td><td><input type="text" name="njop_m2" size="20" value="<?php echo $njop_m2?>" onkeypress="return onlyNumbers();"></td></tr>
			
			<tr><td>Tanggal Dapat</td><td>
			<input type="text" name="tgl_dapat" size="10" id="tgl_dapat"  value="<?php echo $tgl_dapat?>" readonly class="required">
			Nilai Aset : <input type="text" name="nilai_aset" size="20" value="<?php echo $nilai_aset?>" onkeypress="return onlyNumbers();" class="required">
			</td></tr>
			
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

		</table>

	</form>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_tanah").validate();
});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "tgl_dapat",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "stfk_tgl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>
