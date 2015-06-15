<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (empty($nama_guru->nama_guru)) {
	$nama_gur = "";
} else {
	$nama_gur = $nama_guru->nama_guru;
}
/*
$bulan = date('n');

if ($bulan < 7) {
	$semester = 1;
} else if ($bulan >= 7 OR $bulan < 13) {
	$semester = 2;
}
*/
?>


<div id="isi">
	<h2>Nilai Mapel "<i><?php echo substr($det_mpl->nama_mapel,0,20)?></i>" Kelas "<i><?php echo $det_kls->nama?></i>"</h2>

	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?php echo $info?></div>
	
	<form action="<?php echo base_URL();?>index.php/adm/input_nilai_per_kelas/simpan_nilai" method="post"  id="input_nilai">
	<input type="hidden" name="semester" value="<?php echo $sem?>">
	<table width="90%" align="center" class="form">
	<tr>
	<td class='ki'>Mata Pelajaran</td><td>
	<input type="hidden" name="id_mapel" value="<?php echo $det_mpl->id?>">: <?php echo $det_mpl->prodi." - ".$det_mpl->nama_mapel?>
	</td></tr>

	<tr>
	<td class='ki'>Kelas</td><td>
	<input type="hidden" name="jum_data" value="<?php echo $jum_data?>">
	<input type="hidden" name="id_kelas" value="<?php echo $det_kls->id?>">: <?php echo $det_kls->nama?>
	</td></tr>

	<tr>
	<td class='ki'>Nama Guru / Wali </td><td>
	<input type="text" name="guru" value="<?php echo $nama_gur?>" size="30" class="required">
	</td></tr>

	<tr><td colspan="2">

	<table class="form" width="70%" align="center">
	<tr><th>#</th><th>Nama</th><th>Nilai</th></tr>
	<?php $i = 0 ?>
	<?php foreach ($siswa_kelas as $sk) {
	$i++;

	?>
	<tr>
	<td class="tengah" width="10%"><?php echo $i?></td><td width="70%"><?php echo $sk->nama?></td><td class="tengah" width="20%">
	<input type="hidden" name="id_siswa_<?php echo $i?>" value="<?php echo $sk->id?>">

	<?php
	$q_ambil_nilai	= $this->db->query("SELECT * FROM tl_nilai WHERE id_siswa = '".$sk->id."' AND id_mapel = '".$det_mpl->id."' AND ta = YEAR(NOW())")->row();

	if (empty($q_ambil_nilai)) {
		$nil = "";
	} else {
		$nil = $q_ambil_nilai->nilai;
	}	
	
	?>
	<input type="text" name="nilai_<?php echo $i?>" size="5" value="<?php echo $nil?>" onkeypress="return onlyNumbers();" class="required"></td></tr>
	<?php } ?>
	</table>
	</td></tr>



	<tr><td></td><td><input type="submit" value="Simpan Nilai"></td></tr>
	</table>
	</form>
	
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#input_nilai").validate();
});
</script>