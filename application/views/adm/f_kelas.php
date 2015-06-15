<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	
	$prodi			= "";
	$tkt			= "";
	$nama			= "";	
	$kapasitas		= "";
	$wali			= "";
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $kelas->id;
	
	$prodi			= $kelas->prodi;
	$tkt			= $kelas->tkt;
	$nama			= $kelas->nama;
	$kapasitas		= $kelas->kapasitas;
	$wali			= $kelas->wali;
}

?>

<div id="isi">
	<h2>Form Data Kelas</h2>
	
	<?=$info?>
	
	<div style="margin: -10px 0px -25px 0px; background: #fff;">
	<form action="<?=base_URL()?>index.php/adm/kelas/<?=$act_?>/<?=$id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_kelas">
	
	<input type="hidden" name="id" value="<?=$id?>">
	
	
	<table width="100%" class="form">
		<tr><td>Prodi</td><td>
		<select name="prodi" class="required"><option value="">Pilih Prodi</option>
		<?php
		$progdi= array("IPA", "IPS");
		foreach($progdi as $prod) {
			if ($prodi == $prod) {
				echo "<option value='$prod' selected>$prod</option>";
			} else {
				echo "<option value='$prod'>$prod</option>";
			}
		}
		?>
		</select>
		</td></tr>
		<tr><td>Tingkat</td><td>
		<select name="tkt" class="required"><option value="">Pilih Tingkat</option>
		<?php
		$tingkat = array("X", "XI", "XII");
		foreach($tingkat as $tgkt) {
			if ($tgkt == $tkt) {
				echo "<option value='$tgkt' selected>$tgkt</option>";
			} else {
				echo "<option value='$tgkt'>$tgkt</option>";
			}
		}
		?>
		</select>
		</td></tr>
		<tr><td>Nama Kelas</td><td><input type="text" name="nama" size="30" value="<?=$nama?>" class="required"></td></tr>
		<tr><td>Kapasitas Kelas</td><td><input type="text" name="kapasitas" size="10" value="<?=$kapasitas?>" class="required"></td></tr>
		<tr><td>Nama Wali</td><td><input type="text" name="wali" size="30" value="<?=$wali?>" class="required"></td></tr>
		
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>
	</form>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#f_kelas").validate();
});
</script>