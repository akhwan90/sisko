<div id="isi">
	<h2>Manajemen Galeri</h2>
	
	<div id="info" <?php if (empty($info)) { echo "style='display: none'"; }?>><?=$info?></div>

	<div style="padding: 0px 15px 15px 15px">
			
	<h4>Tambah Foto di album "<?=$nama_album->nama?>"</h4>
	
	<?php echo form_open_multipart(base_URL().'index.php/adm/galeri/upload_foto/'.$this->uri->segment(4));?>
				
	<input type="hidden" name="id_album" value="<?=$this->uri->segment(4);?>">
	
	<table width="100%" class="form">
		<tr><td width="20%">Gambar</td><td><input type="file" name="fotonya"></td></tr>
		<tr><td width="20%">Keterangan</td><td><input type="text" name="ket_gambar" size="30"></td></tr>
		<tr><td></td><td><input type="submit" name="btn" value="Upload"></td></tr>
	</table>
	</form>

	<h4>Ubah Nama Album "<?=$nama_album->nama?>" menjadi :</h4>
	
	<form action="<?=base_URL()?>index.php/adm/galeri/edit_album/<?=$this->uri->segment(4)?>" method="post" id="ubah_album">
	
	<input type="hidden" name="id_album" value="<?=$this->uri->segment(4);?>">
	
	<table width="100%"  class="form">
		<tr><td width="20%">Nama Album Baru</td><td><input type="text" name="album_baru" size="30" class="required">&nbsp;&nbsp;
		<input type="submit" name="btn" value="Simpan"></td></tr>
	</table>
	</form>
	
	
	<h4>Foto-Foto dalam Album "<?=$nama_album->nama?>" </h4>
	<?php 
	$i = 0;
	foreach ($foto_per_kategori as $foto):
	$i++;
	?>

		<div class="img">
		<h3><?=$foto->keterangan?></h3>
		<img src="<?=base_URL()?>/upload/galeri/<?=$foto->file?>" width="150px" height="150px">
		<h4> 
		<a href="<?=base_URL()?>index.php/adm/galeri/hapus_foto/<?=$this->uri->segment(4);?>/<?=$foto->idGaleri?>">Hapus</a>
		</h4>
		</div>
		
	<?php endforeach ?>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#ubah_album").validate();
});
</script>