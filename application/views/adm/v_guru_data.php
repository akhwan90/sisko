<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<div id="isi">
	<h2>Data Guru</h2>
	
<?php echo $info?>

	<span id="tambah_data">
	<a href="<?php echo base_URL()?>index.php/adm/guru_data/add">Tambah Data</a>
	</span>
	
	<form action="<?php echo base_URL()?>index.php/adm/guru_data/cari" method="post" class="tengah" id="f_cari">
	<input type="text" name="q" size="40" placeholder="Masukkan Sebuah Nama" class="required">
	<input type="submit" class="tombol" name="tombol" value="Cari">
	</form>

<table width="97.5%" align="center" class="data" border="1">
<tr>
	<th>NIP</th><th>NUPTK</th><th>Nama</th><th>JK</th><th>Pendidikan / Riwayat Pekerjaan<th>Action</th>
</tr>

<?php $i = 0 ?>
<?php foreach ($datgur as $dg) {
$i++;
?>

<tr><td class='tengah'><?php echo $dg->nip?></td>
<td class='tengah'><?php echo $dg->nuptk?></td>
<td class='tengah'><?php echo $dg->nama?></td>
<td class='tengah'><?php echo $dg->jk?></td>
<td class='tengah'>
<a href="<?php echo base_URL()?>index.php/adm/guru_pend/add/<?php echo $dg->id?>">Pendidikan</a> - 
<a href="<?php echo base_URL()?>index.php/adm/guru_kepeg/add/<?php echo $dg->id?>">Kepegawaian</a> 
</td>
<td class='tengah'>
<a href="<?php echo base_URL()?>index.php/adm/guru_data/edt/<?php echo $dg->id?>">Edit</a><!-- - 
<a href="<?php echo base_URL()?>index.php/adm/guru_data/hps/<?php echo $dg->id?>">Hapus</a></td>-->
</tr>

<?php 
}
?>

</table>
	<div class="paging"><?php echo $this->pagination->create_links(); ?></div>
</div>