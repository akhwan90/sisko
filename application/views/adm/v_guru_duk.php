<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="isi">
	<h2>Daftar Urut Kepangkatan</h2>
	
	<?php echo $info?>

	<span id="tambah_data"><a  href="<?php echo base_URL()?>index.php/adm/guru_duk/pilih_pegawai">Tambah Data</a></span>
	
	<!--
	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/cetak/duk" target="blank">Cetak Data</a>
	</span>
	-->
	
	<table width="97.5%" align="center" class="data" border="1" style="font-size: 12px">
	<tr>
		<th>No<br>Urut</th><th>Nama<br>NIP<br>T T L<br></th><th>Gol. Ruang<br>T M T</th><th>Jabatan<br>TMT</th><th>Masa Kerja</th><th>Prodi <br>Nama Lembaga<br>Tahun Lulus<br>Tingkat<th>Gol</th><th>Action</th>
	</tr>

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
	<td class='tengah'>
	<!--<a href="<?php echo base_URL()?>index.php/adm/guru_data/edt/<?php echo $d->no?>">Edit</a> - 
	<a href="<?php echo base_URL()?>index.php/adm/guru_data/hps/<?php echo $d->no?>">Hapus</a></td>--> --
	</tr>

	<?php } ?>

	</table>
	<span style="margin-left: 20px"><b>*) <i>Daftar Urut Kepangkatan ini OTOMATIS telah diurutkan berdasarkan Pangkat Gol Tertinggi, dan TMT Golongan Tertua</i></b></span>
</div>
