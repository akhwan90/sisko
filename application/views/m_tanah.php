<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

<center><h3>Data Inventaris Tanah</h3></center>			
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
	<th>Tgl. Dapat</th><th>Letak</th><th>Sertifikat</th>
	<th>Luas</th>
	<th>Harga</th><th>Asal Dana</th>
</tr>
</thead>

<?php $i = 0 ?>
<?php foreach ($tanah as $tn) {
$i++;
?>

<tr><td class='tengah'><?php echo $tn->kd_brg?></td>
<td class='tengah'><?php echo $tn->nama?></td>
<td class='tengah'><?php echo tgl_indo($tn->tgl_dapat)?></td>
<td><?php echo $tn->letak?></td>
<td class='tengah'><?php echo $tn->stfk_no."<br>Tgl. : ".tgl_indo($tn->stfk_tgl)?></td>
<td><?php echo $tn->luas?></td>
<td><?php echo $tn->nilai_aset?></td>
<td class='tengah'><?php echo $tn->dana_dari?></td>
</tr>

<?php } ?>

</table>


            </section>    
        </article>        
    </div>
</div>