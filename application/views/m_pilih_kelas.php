<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

			<center><h3>Silakan Pilih Kelasnya</h3>
			<br><br><br>
			
				<?php
				foreach($kelas_pilih as $k) {
				?>
				<a href="<?php echo base_URL()?>index.php/depan/ledger/<?php echo $k->id?>" id="pilih_pilih">
				<span><?php echo $k->nama?></span>
				</a>
				<?php
				}
				?>
				
				<!--
				Pilih Kelasnya : <select name="kelas" onchange="window.location.href=this.options
		[this.selectedIndex].value"><option value="">--Pilih Kelas</option>
				<?php
				foreach($kelas_pilih as $k) {
					echo "<option value='".base_URL()."index.php/depan/ledger/".$k->id."'>".$k->nama."</option>";
				}
				?>
				</select>-->
			</center>
			<br><br><br><br><br>
			</section>    
        </article>        
    </div>
</div>