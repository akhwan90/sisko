<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>
				<center><h3>Daftar Inventaris Ruangan</h3></center>

	Seleksi Ruangan :
	<select style="padding: 10px; border-radius: 10px; border: solid 1px #cccccc; font-size: 15px" name="ctk_dir" onchange="window.location.href=this.options
		[this.selectedIndex].value" target="_blank"><option value="<?php echo base_URL()?>index.php/depan/dir/det/">- SEMUA -</option>
	<?php
	$id_ruang = $this->uri->segment(4);
	foreach ($ruang as $r) {		
		if ($id_ruang == $r->id) {
			echo "<option value='".base_URL()."index.php/depan/dir/det/".$r->id."' selected>".$r->nama."</option>";
		} else {
			echo "<option value='".base_URL()."index.php/depan/dir/det/".$r->id."'>".$r->nama."</option>";
		}
	}
	?>
	</select>
	<br><br>
	<table class="bordered">
	<tr>
		<th>Kode Brg / No Aset</th><th>Nama</th>
		<th>Letak</th><th>Kondisi</th>
	</tr>

	<?php 
	$i = 0;
	if (empty($dir)) {
		echo "<tr><td colspan='4' id='tengah'><b> -- Tidak Ada Data -- </b></td></tr>";
	} else {
		foreach ($dir as $d) {
		$i++;
		if ($d->kondisi == "B") {$kond = "Baik"; } else if ($d->kondisi == "RR") {$kond = "Rusak Ringan"; } else if ($d->kondisi == "RB") {$kond = "Rusak Berat"; } if ($d->kondisi == "H") {$kond = "Hilang"; }
	
	?>

	<tr><td class='tengah'><?php echo $d->kd_brg.".".$d->no_aset?></td>
	<td class='ki'><?php echo $d->nama_brg?></td>
	<td class='ki'><?php echo $d->nama?></td>
	<td class='tengah'><?php echo $kond?></td>
	</tr>

	<?php
		 	}
		}
	?>

	</table>
	
            </section>    
        </article>        
    </div>
</div>