<?php
$act = $this->uri->segment(3);

$s_L	= ""; $s_P	= "";
$sk_K	= ""; $sk_BK	= "";

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	$lihat_foto		= "";
	$foto			= "";
		
	$nama 			= $this->input->post('nama');
	$nip 			= $this->input->post('nip');
	$nuptk 			= $this->input->post('nuptk');
	$nrg 			= $this->input->post('nrg');
	$npwp 			= $this->input->post('npwp');
	$tmp_lhr 		= $this->input->post('tmp_lhr');
	$tgl_lhr 		= $this->input->post('tgl_lhr');
	$jk 			= $this->input->post('jk');
	$panggol 		= $this->input->post('panggol');
	$stat 			= $this->input->post('stat');
	$gol_drh 		= $this->input->post('gol_drh');
	$agama 			= $this->input->post('agama');
	$nope 			= $this->input->post('nope');
	$alamat 		= $this->input->post('alamat');
	$klg_ay 		= $this->input->post('klg_ay');
	$klg_ibu 		= $this->input->post('klg_ibu');
	$klg_suami_istri= $this->input->post('klg_suami_istri');
	$klg_anak 		= $this->input->post('klg_anak');
	$klg_nope_isuam = $this->input->post('klg_nope_isuam');
	$mapel_1 		= $this->input->post('mapel_1');
	$mapel_2 		= $this->input->post('mapel_2');
	$mapel_3 		= $this->input->post('mapel_3');
	$mapel_4 		= $this->input->post('mapel_4');
	$jml_jam 		= $this->input->post('jml_jam');
	$tgs_1 			= $this->input->post('tgs_1');
	$tgs_2 			= $this->input->post('tgs_2');
	$tgs_3 			= $this->input->post('tgs_3');
	$tgs_4 			= $this->input->post('tgs_4');
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $datgur->id;
	$lihat_foto		= "| <a href='#' id='klik'>Lihat Foto</a> <div id='fotonya' style='display: none; margin-left: 57'><img src='".base_URL()."upload/foto_guru/".$datgur->foto."' width='100px' height='100px'></div>";
	$foto			= $datgur->foto;
	
	$nama  			= $datgur->nama;
	$nip  			= $datgur->nip;
	$nuptk  		= $datgur->nuptk;
	$nrg  			= $datgur->nrg;
	$npwp  			= $datgur->npwp;
	$tmp_lhr  		= $datgur->tmp_lhr;
	$tgl_lhr  		= $datgur->tgl_lhr;
	$jk  			= $datgur->jk;
	$panggol  		= $datgur->panggol;
	$stat  			= $datgur->stat;
	$gol_drh  		= $datgur->gol_drh;
	$agama  		= $datgur->agama;
	$nope  			= $datgur->nope;
	$alamat  		= $datgur->alamat;
	$klg_ay  		= $datgur->klg_ay;
	$klg_ibu  		= $datgur->klg_ibu;
	$klg_suami_istri= $datgur->klg_suami_istri;
	$klg_anak  		= $datgur->klg_anak;
	$klg_nope_isuam = $datgur->klg_nope_isuam;
	$mapel_1  		= $datgur->mapel_1;
	$mapel_2  		= $datgur->mapel_2;
	$mapel_3  		= $datgur->mapel_3;
	$mapel_4  		= $datgur->mapel_4;
	$jml_jam  		= $datgur->jml_jam;
	$tgs_1  		= $datgur->tgs_1;
	$tgs_2  		= $datgur->tgs_2;
	$tgs_3  		= $datgur->tgs_3;
	$tgs_4  		= $datgur->tgs_4;	
}

?>

<div id="isi">
	<h2>Form Tambah Data Guru</h2>
	
	<?php echo $info?>
<div style="margin: -3px 0px -25px 0px; background: #fff;">
<form action="<?php echo base_URL()?>index.php/adm/guru_data/<?php echo $act_?>/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()" id="f_data_guru">
<input type="hidden" name="id" value="<?php echo $id?>">

<table width="100%" class="form">
		<tr><td width="15%">Nama</td><td><input type="text" name="nama" size="40" value="<?php echo $nama?>" class="required"></td></tr>
		<tr><td>NIP</td><td><input type="text" name="nip" size="20" value="<?php echo $nip?>"> &nbsp;&nbsp; NUPTK 
		<input type="text" name="nuptk" size="20" value="<?php echo $nuptk?>"></td></tr>
		<tr><td>NRG</td><td><input type="text" name="nrg" size="20" value="<?php echo $nrg?>"> &nbsp;&nbsp; NPWP 
		<input type="text" name="npwp" size="20" value="<?php echo $npwp?>"></td></tr>
		<tr><td>Tempat, Tanggal Lahir</td><td><input type="text" name="tmp_lhr" size="20" value="<?php echo $tmp_lhr?>" class="required">, <input type="text" name="tgl_lhr" size="10"  id="tgl_lhr"  value="<?php echo $tgl_lhr?>" readonly  class="required"></td></tr>
		<tr><td>Jenis Kelamin</td><td>
		<?php if ($jk == "L") { $s_L = "checked"; } else if ($jk == "P") { $s_P == "checked"; } else { $s_L = ""; $s_P = ""; } ?>
		<input type="radio" name="jk" value="L" id="l" <?php echo $s_L?>  class="required"><label for="l">Laki Laki</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="jk" value="P" id="p" <?php echo $s_P?>  class="required"><label for="p">Perempuan</label>
		</td></tr>
		<tr><td>Pangkat Golongan</td><td><select name="panggol">
		<option value="">-Pilih Pangkat-</option>
		<?php
		$val_gol = array("Ia", "Ib", "Ic", "Id", "IIa", "IIb", "IIc", "IId", "IIIa", "IIIb", "IIIc", "IIId", "IVa", "IVb", "IVc", "IVd",);
		
		for($a=0; $a < 16; $a++) {
			if ($val_gol[$a] == $panggol) {
				echo "<option value='".$val_gol[$a]."' selected>".$val_gol[$a]."</option>";
			} else {
				echo "<option value='".$val_gol[$a]."'>".$val_gol[$a]."</option>";			
			}
		}
		
		?>
		</select>
		</td></tr>
		<tr><td>Status Kawin</td><td>
		<?php 
		if ($stat == "Kawin") { 
			$sk_K = "checked"; 
		} else if (trim($stat) == "Belum Kawin") { 
			$sk_BK = "checked"; 
		} else { 
			$sk_K = ""; $sk_BK = ""; 
		} 
		?>
		<input type="radio" name="stat" value="Kawin" id="k" <?php echo $sk_K?>><label for="k">Kawin</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" name="stat" value="Belum Kawin" id="bk" <?php echo $sk_BK?>><label for="bk">Belum Kawin</label>
		</td></tr>
		<tr><td>Gol. Darah</td><td><select name="gol_drh">
		<?php
		$val_gd	= array("A", "B", "O", "AB", "-");
		
		for($b=0; $b < 5; $b++) {
			if ($val_gd[$b] == $gol_drh) {
				echo "<option value='".$val_gd[$b]."' selected>".$val_gd[$b]."</option>";
			} else {
				echo "<option value='".$val_gd[$b]."'>".$val_gd[$b]."</option>";			
			}
		}
		
		?>
		</select>
		</td></tr>
		<tr><td>Agama</td><td><select name="agama" class="required">
		<?php
		$val_ag	= array("Islam", "Krist. Protestan", "Krist. Katolik", "Hindu", "Budha", "Konghucu");
		
		for($c=0; $c < 6; $c++) {
			if ($val_ag[$c] == $agama) {
				echo "<option value='".$val_ag[$c]."' selected>".$val_ag[$c]."</option>";
			} else {
				echo "<option value='".$val_ag[$c]."'>".$val_ag[$c]."</option>";			
			}
		}
		
		?>
		</select>
		</td></tr>
		<tr><td>No. HP</td><td><input type="text" name="nope" size="12" value="<?php echo $nope?>"onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Alamat</td><td><input type="text" name="alamat" size="40" value="<?php echo $alamat?>"  class="required"></td></tr>
		<tr><td>Nama Ayah</td><td><input type="text" name="klg_ay" size="30" value="<?php echo $klg_ay?>"></td></tr>
		<tr><td>Nama Ibu</td><td><input type="text" name="klg_ibu" size="30" value="<?php echo $klg_ibu?>"></td></tr>
		<tr><td>Nama Suami/Istri</td><td><input type="text" name="klg_suami_istri" size="30" value="<?php echo $klg_suami_istri?>"></td></tr>
		<tr><td>Jumlah Anak</td><td><input type="text" name="klg_anak" size="5" value="<?php echo $klg_anak?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>No. HP Suami/Istri</td><td><input type="text" name="klg_nope_isuam" size="12" value="<?php echo $klg_nope_isuam?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Mapel 1</td><td>
		<select name="mapel_1"><option value="">-Pilih Mapel 1-</option>
		<?php
		foreach($mapel as $mp) {
			if ($mapel_1 == $mp->id) {
				echo "<option value='".$mp->id."' selected>".substr($mp->nama_mapel, 0, 35)."</option>";		
			} else {
				echo "<option value='".$mp->id."'>".substr($mp->nama_mapel, 0, 35)."</option>";			
			}
		}
		?>
		</select>, Tugas Tambahan 1 <input type="text" name="tgs_1" size="30" value="<?php echo $tgs_1?>">
		</td></tr>
		<tr><td>Mapel 2</td><td>
		<select name="mapel_2"><option value="">-Pilih Mapel 2-</option>
		<?php
		foreach($mapel as $mp) {
			if ($mapel_2 == $mp->id) {
				echo "<option value='".$mp->id."' selected>".substr($mp->nama_mapel, 0, 35)."</option>";		
			} else {
				echo "<option value='".$mp->id."'>".substr($mp->nama_mapel, 0, 35)."</option>";			
			}
		}
		?>
		</select>, Tugas Tambahan 2 <input type="text" name="tgs_2" size="30" value="<?php echo $tgs_2?>">
		</td></tr>
		<tr><td>Mapel 3</td><td>
		<select name="mapel_3"><option value="">-Pilih Mapel 3-</option>
		<?php
		foreach($mapel as $mp) {
			if ($mapel_3 == $mp->id) {
				echo "<option value='".$mp->id."' selected>".substr($mp->nama_mapel, 0, 35)."</option>";		
			} else {
				echo "<option value='".$mp->id."'>".substr($mp->nama_mapel, 0, 35)."</option>";			
			}
		}
		?>
		</select>, Tugas Tambahan 3 <input type="text" name="tgs_3" size="30" value="<?php echo $tgs_3?>">
		</td></tr>
		<tr><td>Mapel 4</td><td>
		<select name="mapel_4"><option value="">-Pilih Mapel 4-</option>
		<?php
		foreach($mapel as $mp) {
			if ($mapel_4 == $mp->id) {
				echo "<option value='".$mp->id."' selected>".substr($mp->nama_mapel, 0, 35)."</option>";		
			} else {
				echo "<option value='".$mp->id."'>".substr($mp->nama_mapel, 0, 35)."</option>";			
			}
		}
		?>
		</select>, Tugas Tambahan 4 <input type="text" name="tgs_4" size="30" value="<?php echo $tgs_4?>">
		</td></tr>
		
		<tr><td>Total Jam Beban Kerja</td><td><input type="text" name="jml_jam" size="10" value="<?php echo $jml_jam?>" onkeypress="return onlyNumbers();"></td></tr>
		<tr><td>Foto <?php echo $lihat_foto?></td><td>
		<input type="hidden" name="file_foto" value="<?php echo $foto?>">
		<input type="file" name="foto" id="foto_guru"></td></tr>
		
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>

</form>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_data_guru").validate();

	$("#klik").click(function () {
		$("#fotonya").toggle();
		return false;
	});

});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "tgl_lhr",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>
