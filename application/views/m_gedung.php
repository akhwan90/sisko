<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

<center><h3>Data Inventaris Gedung dan Bangunan</h3></center>

<!--			
<form class="form-wrapper" action="<?php echo base_URL()?>index.php/depan/cari" method="post">
	<input type="text" id="search" placeholder="Ketikkan kata kunci...." required>
	<input type="submit" value="go" id="submit">
</form>
-->

<table class="bordered">
<thead>
<tr>
	<th>Kode</th><th>Nama</th>
	<th>Tgl. Dapat</th><th>Luas</th><th>Jml. Lantai</th>
	<th>Asal</th>
	<th>Harga</th><th>No. IMB</th>
</tr>
</thead>

<?php $i = 0 ?>
<?php foreach ($gedung as $gd) {
$i++;
?>

<tr><td class='tengah'><?php echo $gd->kd_brg?></td>
<td class='tengah'><?php echo $gd->nama?></td>
<td class='tengah'><?php echo tgl_indo($gd->tgl_buku)?></td>
<td><?php echo $gd->luas?></td>
<td class='tengah'><?php echo $gd->jml_lt?></td>
<td><?php echo $gd->asal?></td>
<td><?php echo $gd->harga?></td>
<td class='tengah'><?php echo $gd->no_imb."<br>Tgl. : ".tgl_indo($gd->tgl_imb)?></td>
</tr>

<?php } ?>

</table>


            </section>    
        </article>        
    </div>
</div>