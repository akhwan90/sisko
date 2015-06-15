<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_		= "act_add";
	$id			= "";
	$tipe		= "";
	$sk_no		= "";
	$sk_tgl		= "";
	$tmt		= "";
	$mk_th		= "";
	$mk_bl		= "";
	$panggol	= "";
	$gapok		= "";
	$di			= "";
	$sebagai	= "";
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	$id			= $kepeg_detil->id;
	$tipe		= $kepeg_detil->tipe;
	$sk_no		= $kepeg_detil->sk_no;
	$sk_tgl		= $kepeg_detil->sk_tgl;
	$tmt		= $kepeg_detil->tmt;
	$mk_th		= $kepeg_detil->mk_th;
	$mk_bl		= $kepeg_detil->mk_bl;
	$panggol	= $kepeg_detil->panggol;
	$gapok		= $kepeg_detil->gapok;
	$di			= $kepeg_detil->di;
	$sebagai	= $kepeg_detil->sbg;
}

?>

<div id="isi">
	<h2>Form Riwayat Kepegawaian Guru</h2>
	
	<div style="margin: -5px 0px -30px 0px; background: #fff; padding-bottom: 15px">
	<?php echo $info?>

	
	<span id="tambah_data" style="position: relative">
	<a href="<?php echo base_URL()?>index.php/adm/guru_kepeg/add/<?php echo $this->uri->segment(4)?>">Tambah Data</a>
	</span>
	
<table width="97.5%" align="center" class="data" border="1">
<tr>
	<th>No</th><th>Jenis</th>
	<th>No. SK<br>Tgl. SK</th><th>TMT</th><th>Masa Kerja</th><th>Pangkat Gol.</th><th>Tempat</th><th>Sebagai</th><th>Action</th>
</tr>

<?php $i = 0 ?>
<?php foreach ($guru_kepeg as $gk) {
$i++;
?>

<tr>
<td class='tengah'><?php echo $i?></td>
<td class='ki'><?php echo $gk->tipe?></td>
<td class='ki'><?php echo $gk->sk_no."<br>".$gk->sk_tgl?></td>
<td class='ki'><?php echo $gk->tmt?></td>
<td class='tengah'><?php echo $gk->mk_th." th ".$gk->mk_bl." bl"?></td>
<td class='tengah'><?php echo $gk->panggol?></td>
<td class='tengah'><?php echo $gk->di?></td>
<td class='tengah'><?php echo $gk->sbg?></td>
<td class='tengah'>
<a href="<?php echo base_URL()?>index.php/adm/guru_kepeg/edt/<?php echo $gk->id_guru?>/<?php echo $gk->id?>">Edit</a> - 
<a href="<?php echo base_URL()?>index.php/adm/guru_kepeg/hps/<?php echo $gk->id_guru?>/<?php echo $gk->id?>">Hapus</a></td>

</tr>

<?php } ?>

</table>



<form action="<?php echo base_URL()?>index.php/adm/guru_kepeg/<?php echo $act_?>/<?php echo $this->uri->segment(4)?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_g_kepeg" id="f_g_kepeg" onsubmit="return tanah_valid()" style="border-radius: 5px; border: solid 1px #D4D0C8; margin-bottom: 10px">
<input type="hidden" value="<?php echo $id?>" name="id">
<table width="55%" class="form" align="center">

	<tr><td>Tipe</td><td>
	<select name="tipe" class="required"><option value="">-Pilih Tipe-</option>
	<?php
	$data_tipe	= array("CPNS", "PNS", "Kenaikan Pangkat", "Gaji Berkala", "Mutasi Masuk", "Mutasi Keluar", "Lainnya");
	foreach($data_tipe as $dt) {
		if ($dt == $tipe) {
			echo "<option value='".$dt."' selected>".$dt."</option>";
		} else  {
			echo "<option value='".$dt."'>".$dt."</option>";		
		}
	}
	?>
	</select>
	</td></tr>
	<tr><td>Nomor SK</td><td><input type="text" name="sk_no" size="40" value="<?php echo $sk_no?>" class="required"></td></tr>
	<tr><td>Tanggal SK</td><td><input type="text" name="sk_tgl" size="10" id="sk_tgl"  value="<?php echo $sk_tgl?>" readonly  class="required"></td></tr>
	<tr><td>Terhitung Mulai Tgl</td><td><input type="text" name="tmt" size="10" id="tmt"  value="<?php echo $tmt?>" readonly  class="required"></td></tr>
	<tr><td>Masa Kerja</td><td><input type="text" name="mk_th" size="10" id="mk_th"  value="<?php echo $mk_th?>" onkeypress="return onlyNumbers();"  class="required"> tahun <input type="text" name="mk_bl" size="10" id="mk_bl"  value="<?php echo $mk_bl?>" onkeypress="return onlyNumbers();"  class="required"> bulan </td></tr>
	<tr><td>Pangkat Golongan</td><td>
	<select name="panggol"  class="required"><option value="">-Pilih Golongan-</option>
	<?php
	$data_panggol	= array("Ia", "Ib", "Ic", "Id", "IIa", "IIb", "IIc", "IId", "IIIa", "IIIb", "IIIc", "IIId", "IVa", "IVb", "IVc", "IVd", "IVe");
	foreach($data_panggol as $dp) {
		if ($dp == $panggol) {
			echo "<option value='".$dp."' selected>".$dp."</option>";
		} else  {
			echo "<option value='".$dp."'>".$dp."</option>";		
		}
	}
	?>
	</select>
	</td></tr>
	
	<tr><td>Gaji Pokok</td><td><input type="text" name="gapok" size="20" value="<?php echo $gapok?>"onkeypress="return onlyNumbers();"></td></tr>
	<tr><td>Ditempatkan di</td><td><input type="text" name="di" size="40" value="<?php echo $di?>"></td></tr>
	<tr><td>Sebagai</td><td><input type="text" name="sebagai" size="40" value="<?php echo $sebagai?>"></td></tr>
	<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
</table>
</form>
</div>


</div>
</div>



<script type="text/javascript">
$(document).ready(function(){
	$("#f_g_kepeg").validate();
});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "sk_tgl",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
Calendar.setup({
	inputField     :    "tmt",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>