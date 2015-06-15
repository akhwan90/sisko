<div id="isi">
	<h2>Form Pindah Inventaris Ruangan</h2>
	
	<?php echo $info?>
	
	<div style="margin: -7px 0px -25px 0px; background: #fff;">

	<form action="<?php echo base_URL()?>index.php/adm/dir/act_pindah_dir/<?php echo $det_dir->id_brg?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" onsubmit="return tanah_valid()">
	<table width="95%" class="form">
			<tr><td>Nama Barang</td><td><?php echo $det_dir->nama_brg?></td></tr>
			<tr><td>Letak semula</td><td><?php echo $det_dir->nama?></td></tr>
			<tr><td>Pindahkan Ke</td><td><select name="ruang_baru">
			<?php
			foreach ($ruang as $r) {
				if ($det_dir->letak == $r->id) {
					echo "<option value='".$r->id."' selected>".$r->nama."</option>";						
				} else {
					echo "<option value='".$r->id."'>".$r->nama."</option>";			
				}
			}
			?>
			</select>
			</td></tr>
			
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

		</table>

	</form>
	
	</div>
</div>