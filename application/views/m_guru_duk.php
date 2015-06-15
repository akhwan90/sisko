<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>
			
			<center><h3>Daftar Urut Kepangkatan PNS</h3></center>
			<br>
			
			<table class="bordered">
			<thead>
			<tr>
				<th>No<br>Urut</th><th>Nama<br>NIP<br>T T L<br></th><th>Gol. Ruang<br>T M T</th><th>Jabatan<br>TMT</th><th>Masa Kerja</th><th>Prodi <br>Nama Lembaga<br>Tahun Lulus<br>Tingkat<th>Gol</th>
			</tr>
			</thead>

			<?php $i = 0 ?>
			<?php foreach ($duk as $d) {
			$i++;
			$gol 	= $d->gol;
			$q_ambil = $this->db->query("SELECT gol, pangkat FROM tg_panggol WHERE id = '".$gol."'")->row();
			
			?>

			<tr><td class="tengah"><?php echo $i?></td>
			<td class='kiri'><?php echo $d->nama."<br>".$d->nip."<br>"//.$d->tmp_lhr.", ".$d->tgl_lhr?></td>
			<td class='kiri'><?php echo $q_ambil->pangkat." - ".$q_ambil->gol."<br>".tgl_pendek($d->gol_tmt)?></td>
			<td class='kiri'><?php echo $d->jab_nama."<br>".tgl_pendek($d->jab_tmt)?></td>
			<td class='tengah'><?php echo $d->mk_th_terakhir." bl ".$d->mk_bl_terakhir." th"?></td>
			<td class='kiri'><?php echo $d->prodi."<br>".$d->lembaga."<br>".$d->thn_lulus."<br>".$d->tkt?></td>
			<td class='tengah'><?php echo $q_ambil->gol?></td>
			</tr>

			<?php } ?>

			</table>
			<span style="margin-left: 20px">*) <i>Daftar Urut Kepangkatan ini OTOMATIS telah diurutkan berdasarkan Pangkat Gol Tertinggi, dan TMT Golongan Tertua</i></span>

			<br><br><br>
			</section>    
        </article>        
    </div>
</div>