<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_		= "act_add";
	$id			= "";
	$jenjang	= "";
	$nama		= "";
	$kota		= "";
	$th_lulus	= "";
	$fak		= "";
	$jur		= "";
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	$id			= $pend_detil->id;
	$jenjang	= $pend_detil->jenjang;
	$nama		= $pend_detil->nama;
	$kota		= $pend_detil->kota;
	$th_lulus	= $pend_detil->th_lulus;
	$fak		= $pend_detil->fak;
	$jur		= $pend_detil->jur;
}

?>
<div id="isi">
	<h2>Form Riwayat Kepegawaian Guru</h2>
	
	<div style="margin: -5px 0px -30px 0px; background: #fff; padding-bottom: 15px">

	
	<span id="tambah_data" style="position: relative">
	<a href="<?php echo base_URL()?>index.php/adm/guru_pend/add/<?php echo $this->uri->segment(4)?>">Tambah Data</a>
	</span>
	
	<table width="97.5%" align="center" class="data" border="1">
	<tr>
		<th>No</th><th>Jenjang</th>
		<th>Nama</th><th>Kota</th><th>Th. Lulus</th><th>Fakultas</th><th>Jurusan</th><th>Action</th>
	</tr>

	<?php $i = 0 ?>
	<?php foreach ($guru_pend as $gp) {
	$i++;
	?>

	<tr>
	<td class='tengah'><?php echo $i?></td>
	<td class='ki'><?php echo $gp->jenjang?></td>
	<td class='ki'><?php echo $gp->nama?></td>
	<td class='tengah'><?php echo $gp->kota?></td>
	<td class='tengah'><?php echo $gp->th_lulus?></td>
	<td class='tengah'><?php echo $gp->fak?></td>
	<td class='tengah'><?php echo $gp->jur?></td>
	<td class='tengah'>
	<a href="<?php echo base_URL()?>index.php/adm/guru_pend/edt/<?php echo $gp->id_guru?>/<?php echo $gp->id?>">Edit</a> - 
	<a href="<?php echo base_URL()?>index.php/adm/guru_pend/hps/<?php echo $gp->id_guru?>/<?php echo $gp->id?>">Hapus</a></td>

	</tr>

	<?php }
	?>

	</table>

	<form action="<?php echo base_URL()?>index.php/adm/guru_pend/<?php echo $act_?>/<?php echo $this->uri->segment(4)?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_pend" onsubmit="return tanah_valid()" id="f_pend" style="border-radius: 5px; border: solid 1px #D4D0C8; margin-bottom: 10px">
	
	<input type="hidden" value="<?php echo $id?>" name="id">
	<table width="55%" class="form" align="center">

		<tr><td>Jenjang</td><td>
		<select name="jenjang" class="required"><option value="">-Pilih Jenjang-</option>
		<?php
		$data_jenj	= array("SD", "SMP", "SMA", "D1", "D2", "D3", "D4", "S1", "S2", "S3");
		foreach($data_jenj as $dj) {
			if ($dj == $jenjang) {
				echo "<option value='".$dj."' selected>".$dj."</option>";
			} else  {
				echo "<option value='".$dj."'>".$dj."</option>";		
			}
		}
		?>
		</select>
		</td></tr>
		<tr><td>Nama</td><td><input type="text" name="nama" size="40" value="<?php echo $nama?>" class="required"></td></tr>
		<tr><td>Kota</td><td><input type="text" name="kota" size="40" value="<?php echo $kota?>" class="required"></td></tr>
		<tr><td>Th. Lulus</td><td><input type="text" name="th_lulus" size="10" value="<?php echo $th_lulus?>" class="required"  onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Fakultas</td><td><input type="text" name="fak" size="40" value="<?php echo $fak?>"></td></tr>
		<tr><td>Jurusan</td><td><input type="text" name="jur" size="40" value="<?php echo $jur?>"></td></tr>
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>
	</table>
	</form>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_pend").validate();
});
</script>