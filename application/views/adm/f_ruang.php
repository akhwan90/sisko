<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	
	$nama			= "";
	$tgg_jwb		= "";
	$nip_tgg_jwb	= "";	
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $ruang->id;
	
	$nama			= $ruang->nama;
	$tgg_jwb		= $ruang->tgg_jwb;
	$nip_tgg_jwb	= $ruang->nip_tgg_jwb;	
	
}

?>
<div id="isi">
	<h2>Form Data Ruangan</h2>
	
	<?=$info?>
	
	<div style="margin: -10px 0px -25px 0px; background: #fff;">
	<form action="<?=base_URL()?>index.php/adm/ruang/<?=$act_?>/<?=$id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_tanah" id="f_ruang">
	<input type="hidden" name="id" value="<?=$id?>">
	<table width="100%" class="form">
			<tr><td>Nama</td><td><input type="text" name="nama" size="40" value="<?=$nama?>" class="required"></td></tr>
			<tr><td>Nama Penanggung Jawab</td><td><input type="text" name="tgg_jwb" size="40" value="<?=$tgg_jwb?>"  class="required"></td></tr>
			<tr><td>NIP Penanggung Jawab</td><td><input type="text" name="nip_tgg_jwb" size="40" value="<?=$nip_tgg_jwb?>" class="required"></td></tr>
			
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>

	</form>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#f_ruang").validate();
});
</script>