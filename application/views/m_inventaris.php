<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

			
<center><h3>Data Inventaris</h3></center>		

<table class="bordered">
<thead>
<tr>
	<th>Kode</th><th>Nama</th>
	<th>Tgl. Dapat</th><th>Letak</th><th>Penggunaan</th>
	<th>Asal</th>
	<th>Harga</th><th>Merk/Tipe</th>
</tr>
</thead>

<?php $i = 0 ?>
<?php foreach ($inventaris as $inv) {
$i++;
?>

<tr><td class='tengah'><?php echo $inv->kd_brg?></td>
<td class='tengah'><?php echo $inv->nama_brg?></td>
<td class='tengah'><?php echo tgl_indo($inv->tgl_dapat)?></td>
<td><?php echo $inv->letak?></td>
<td class='tengah'><?php echo $inv->penggunaan?></td>
<td><?php echo $inv->asal?></td>
<td><?php echo $inv->harga?></td>
<td class='tengah'><?php echo $inv->merk." / ".$inv->tipe?></td>
</tr>

<?php } ?>

</table>


            </section>    
        </article>        
    </div>
</div>