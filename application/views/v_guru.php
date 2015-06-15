<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

			
			
<form class="form-wrapper" action="<?=base_URL()?>index.php/depan/guru/cari" method="post">
	<input type="text" class="search" id="search_pegawe" name="cari" placeholder="Ketikkan kata kunci...." required>
	<input type="submit" value="go" id="submit">
</form>

<table class="bordered">
<thead>
<tr>
	<th width="2%">No</th><th width="20%">NIP</th>
	<th width="18%">Nama</th><th width="5%">Jns. Kel.</th>
	<th width="20%">Tempat, Tanggal Lahir</th>
	<th width="30%">Alamat</th><th width="5%">Detil</th>
</tr>
</thead>

<?php $i = 0 ?>
<?php foreach ($guru as $g) {
$i++;
?>

<tr><td class='tengah'><?=$i?></td>
<td class='tengah'><?=$g->nip?></td>
<td><?=$g->nama?></td>
<td class='tengah'><?=$g->jk?></td>
<td><?=$g->tmp_lhr.", ".tgl_indo($g->tgl_lhr)?></td>
<td><?=substr($g->alamat, 0, 50)?></td>
<td class='tengah'><a href="<?=base_URL()?>index.php/depan/detil_guru/<?=$g->id?>">Detil</a></td>
</tr>

<?php } ?>

</table>


            </section>    
        </article>        
    </div>
</div>
	
	
	


