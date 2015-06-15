<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

		<center><h2>Rekap Siswa Per Agama, Tahun Ajaran <?php echo date('Y')."/".(date('Y')+1)?></h2></center>

		
<table class="bordered">
<thead>
<tr>
	<th>Agama</th><th>X (L)</th><th>X (P)</th><th>Jumlah X</th>
	<th>XI (L)</th><th>XI (P)</th><th>Jumlah XI</th>
	<th>XII (L)</th><th>XII (P)</th><th>Jumlah XII</th>
	<th>Jml L</th><th>Jml P</th><th>Total</th>
</tr>
</thead>

<?php 
$total_lkX	= 0;
$total_prX	= 0;
$total_X	= 0;
$total_lkXI	= 0;
$total_prXI	= 0;
$total_XI	= 0;
$total_lkXII= 0;
$total_prXII= 0;
$total_XII	= 0;
$total_jmL	= 0;
$total_jmP	= 0;
$total_total= 0;

$i = 0 ?>
<?php foreach ($data_rekap as $rk) {
$i++;
$total_lkX	= $total_lkX + $rk->lakiX;
$total_prX	= $total_prX + $rk->prX;
$total_X	= $total_X + $rk->jX;
$total_lkXI	= $total_lkXI + $rk->lakiXI;
$total_prXI	= $total_prXI + $rk->prXI;
$total_XI	= $total_XI + $rk->jXI;
$total_lkXII= $total_lkXII + $rk->lakiXII;
$total_prXII= $total_prXII + $rk->prXII;
$total_XII	= $total_XII + $rk->jXII;
$total_jmL	= $total_jmL + $rk->jL;
$total_jmP	= $total_jmP + $rk->jP;
$total_total= $total_total + $rk->total;

?>

<tr>
	<td><?php echo $rk->nama?></td><td id="tengah"><?php echo $rk->lakiX?></td><td id="tengah"><?php echo $rk->prX?></td><td id="tengah"><?php echo $rk->jX?></td>
	<td id="tengah"><?php echo $rk->lakiXI?></td><td id="tengah"><?php echo $rk->prXI?></td><td id="tengah"><?php echo $rk->jXI?></td>
	<td id="tengah"><?php echo $rk->lakiXII?></td><td id="tengah"><?php echo $rk->prXII?></td><td id="tengah"><?php echo $rk->jXII?></td>
	<td id="tengah"><?php echo $rk->jL?></td><td id="tengah"><?php echo $rk->jP?></td><td id="tengah"><?php echo $rk->total?></td>
</tr>

<?php } ?>
<tr>
	<td><b>TOTAL</b></td><td id="tengah"><?php echo $total_lkX?></td><td id="tengah"><?php echo $total_prX?></td><td id="tengah"><?php echo $total_X?></td>
	<td id="tengah"><?php echo $total_lkXI?></td><td id="tengah"><?php echo $total_prXI?></td><td id="tengah"><?php echo $total_XI?></td>
	<td id="tengah"><?php echo $total_lkXII?></td><td id="tengah"><?php echo $total_prXII?></td><td id="tengah"><?php echo $total_XII?></td>
	<td id="tengah"><?php echo $total_jmL?></td><td id="tengah"><?php echo $total_jmP?></td><td id="tengah"><?php echo $total_total?></td>
</tr>

</table>


            </section>    
        </article>        
    </div>
</div>
	
	
	


