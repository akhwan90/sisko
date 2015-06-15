<div id="isi">
	<h2>Manajemen Galeri</h2>
	
	<div style="padding: 0px 20px 20px 20px">
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?=$info?></div>	
	
	<h4>Tambah Album</h4>
	
	<form id="f_album" method="post" action="<?=base_URL()?>index.php/adm/galeri/add_kategori/">
	<table width="97.5%"  class="form">
	<tr><td width="20%">Nama Album</td><td><input type="text" name="nama_album" size="50" class="required">
	&nbsp;&nbsp;<input type="submit" name="btn" value="Tambah Album"></td></tr>
	</table>
	</form>
	
	<h4>Daftar Album</h4>
	<?php 
	$i = 0;
	foreach ($galeri as $g):
	$i++;
	$q_jumlah_foto	= $this->db->query("SELECT idGaleri FROM galeri WHERE kategori = '".$g->idKategori."'")->num_rows();
	$q = $this->db->query("SELECT * FROM galeri WHERE kategori='".$g->idKategori."'  LIMIT 1");
	if ($q->num_rows() != 0) {
		$a 		= $q->row();
		$foto 	= $a->file;
	} else {
		$foto	= "no_foto.jpg";
	}
	
	?>

		<div class="img">
		<h3><?=$g->nama?></h3>
		
		<a href="#" class="tooltip" title="Ada <?=$q_jumlah_foto?> foto"><img src="<?=base_URL()?>/upload/galeri/<?=$foto?>" width="150" height="150" ></a>
		
		<h4>
		<a href="<?=base_URL()?>index.php/adm/galeri/f_edit_kategori/<?=$g->idKategori?>">Edit</a> |  
		<a href="<?=base_URL()?>index.php/adm/galeri/hapus_album/<?=$g->idKategori?>">Hapus</a>
		</h4>
		</div>
		
	<?php endforeach ?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#f_album").validate();
});
</script>