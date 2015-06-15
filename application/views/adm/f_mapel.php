<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	
		
	$prodi 			= $this->input->post('prodi');
	$jenis 			= $this->input->post('jenis');
	$nama_mapel		= $this->input->post('nama_mapel');
	$semester		= $this->input->post('semester');
	$kkm 			= $this->input->post('kkm');
		
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $mapel->id;
	
	$prodi  			= $mapel->prodi;
	$jenis  			= $mapel->jenis;
	$nama_mapel  		= $mapel->nama_mapel;
	$semester  			= $mapel->semester;
	$kkm	  			= $mapel->kkm;
	
}

?>

<div id="isi">
	<h2>Form Data Mata Pelajaran</h2>
	
	<?=$info?>
		
	<div style="margin: -10px 0px -25px 0px; background: #fff;">
	<form action="<?=base_URL()?>index.php/adm/mapel/<?=$act_?>/<?=$id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()" id="f_mapel">
	<input type="hidden" name="id" value="<?=$id?>">

	<table width="100%" class="form">
		<tr><td width="15%">Prodi</td><td>
		<select name="prodi" class="required"><option value="">-Pilih Prodi-</option>
		<?php
		$prodi_list	= array("IPA", "IPS");
		foreach ($prodi_list as $p) {
			if ($p == $prodi) {
				echo "<option value='".$p."' selected>".$p."</option>";
			} else {
				echo "<option value='".$p."'>".$p."</option>";
			}
		}
		?>
		</td></tr>
		<!--
		<tr><td width="15%">Jenis</td><td>
		<select name="jenis" class="required"><option value="">-Pilih Jenis-</option>
		<?php
		$jenis_list	= array("NORMATIF", "ADAPTIF", "KOMP. KEJURUAN", "DASAR KEJURUAN");
		foreach ($jenis_list as $j) {
			if ($j == $jenis) {
				echo "<option value='".$j."' selected>".$j."</option>";
			} else {
				echo "<option value='".$j."'>".$j."</option>";
			}
		}
		?>
		</td></tr>
		-->
		<tr><td>Nama Mapel</td><td><textarea class="required" name="nama_mapel" cols="60" rows="3"><?=$nama_mapel?></textarea></td></tr>
		
		<tr><td width="15%">Semester</td><td>
		<select name="semester" class="required"><option value="">-Pilih Semester-</option>
		<?php
		$semester_list	= array("1", "2");
		foreach ($semester_list as $s) {
			if ($s == $semester) {
				echo "<option value='".$s."' selected>Semester ".$s."</option>";
			} else {
				echo "<option value='".$s."'>Semester ".$s."</option>";
			}
		}
		?>
		</td></tr>
		
		<tr><td>Nilai KKM</td><td><input class="required" type="text" name="kkm" size="5" value="<?=$kkm?>" onkeypress="return onlyNumbers();"></td></tr>
		
		
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>

</form>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_mapel").validate();


});

</script>
