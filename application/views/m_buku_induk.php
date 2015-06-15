<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

			
			
<form class="form-wrapper" action="<?php echo base_URL()?>index.php/depan/buku_induk/cari" method="post">
	<input type="text" class="search" id="search_siswa" name="cari" placeholder="Ketikkan kata kunci...." required>
	<input type="submit" value="go" id="submit">
</form>

<table class="bordered">
<thead>
<tr>
	<th>No</th><th>No. Induk</th>
	<th>NISN</th><th>Nama</th><th>Jenis Kelamin</th>
	<th>Tempat, Tanggal Lahir</th>
	<th>Alamat</th><th>Detil</th>
</tr>
</thead>

<?php 
$i = 0;
foreach ($buku_induk as $bi) {
$i++;
?>

<tr><td class='tengah'><?php echo $bi->id?></td>
<td class='tengah'><?php echo $bi->nis?></td>
<td class='tengah'><?php echo $bi->nisn?></td>
<td><?php echo $bi->nama?></td>
<td class='tengah'><?php echo $bi->jk?></td>
<td><?php echo $bi->tmp_lahir.", ".tgl_indo($bi->tgl_lahir)?></td>
<td><?php echo $bi->stat_aktif?></td>
<td class='tengah'><a href="<?php echo base_URL()?>index.php/depan/detil_siswa/<?php echo $bi->id?>">Detil</a></td>
</tr>

<?php } ?>

</table>


            </section>    
        </article>        
    </div>
</div>