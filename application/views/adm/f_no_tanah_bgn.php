<?php
$act = $this->uri->segment(3);

if ($act == "add" || $act == "act_add") {
	$act_			= "act_add";

	$id				= "";
	$tipe_inv		= "	<tr><td>Tipe Barang</td><td>
						<select name='tipe_inv'>
						<option value=''>-- Pilih Tipe --</option>
						<option value='PM'>Peralatan Mesin</option>
						<option value='AT'>Aset Tetap Lainnya</option>
						<option value='JI'>Jaringan, Irigasi, Jalan</option>
						<option value='BR'>Barang</option>
						</select>
						</td></tr>
	";
	
	
	$nama_brg		= "<input type='text' name='nama_brg' size='40' value='' class='required'>";
	$satuan			= "";
	$tgl_dapat		= "";
	$letak			= "";
	$kondisi		= "";
	$penggunaan		= "";
	$asal			= "";
	$harga			= "";
	$merk			= "";
	$tipe			= "";
	$rekanan		= "";
	$no_bukti		= "";
	$ket			= "";
	
} else if ($act == "edt"  || $act == "act_edt") {
	$act_	= "act_edt";
	
	$id				= $inv->id_brg;
	
	$tipe_inv		= "";
	
	$nama_brg		= "<b>".$inv->nama_brg."</b>";
	$satuan			= $inv->satuan;
	$tgl_dapat		= $inv->tgl_dapat;
	$letak			= $inv->letak;
	$kondisi		= $inv->kondisi;
	$penggunaan		= $inv->penggunaan;
	$asal			= $inv->asal;
	$harga			= $inv->harga;
	$merk			= $inv->merk;
	$tipe			= $inv->tipe;
	$rekanan		= $inv->rekanan;
	$no_bukti		= $inv->no_bukti;
	$ket			= $inv->ket;
	
}

?>

<div id="isi">
	<h2>Form Data Barang</h2>
	
	<?php echo $info?>
	
	<div style="margin: -7px 0px -25px 0px; background: #fff;">
	
		
	<form action="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/<?php echo $act_?>/<?php echo $id?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" name="f_barang" id="f_barang" onsubmit="return tanah_valid()">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<table width="95%" class="form">
			<?php echo $tipe_inv?>
			<tr><td>Nama Barang</td><td><?php echo $nama_brg?></td></tr>
			<tr><td>Satuan</td><td><input type="text" name="satuan" size="30" value="<?php echo $satuan?>"></td></tr>
			<tr><td>Tanggal Diperoleh</td><td><input type="text" name="tgl_dapat" size="10"  id="tgl_dapat"  value="<?php echo $tgl_dapat?>" readonly  class="required"></td></tr>
			<tr><td>Letak</td><td><select name="letak"  class="required"><option value="">-Pilih Ruang</option>
			<?php
			foreach ($ruang as $r) {
				if ($r->id == $letak) {
					echo "<option value='".$r->id."' selected>".$r->nama."</option>";
				} else {
					echo "<option value='".$r->id."'>".$r->nama."</option>";			
				}
			}
			?>
			</select>
			</td></tr>
			<tr><td>Kondisi</td><td><select name="kondisi"  class="required"><option value="">-Pilih Kondisi-</option>
			<?php
			$val_sk	= array("B", "RR", "RB", "H");
			$nam_sk	= array("Baik", "Rusak Ringan", "Rusak Berat", "Hilang");
			
			for($a=0; $a < 4; $a++) {
				if ($val_sk[$a] == $kondisi) {
					echo "<option value='".$val_sk[$a]."' selected>".$nam_sk[$a]."</option>";
				} else {
					echo "<option value='".$val_sk[$a]."'>".$nam_sk[$a]."</option>";			
				}
			}
			
			?>
			</select>
			</td></tr>
		
			<tr><td>Penggunaan</td><td><input type="text" name="penggunaan" size="30" value="<?php echo $penggunaan?>"></td></tr>
			<tr><td>Asal Perolehan</td><td><input type="text" name="asal" size="20" value="<?php echo $asal?>"></td></tr>
			<tr><td>Nilai Aset </td><td><input type="text" name="harga" size="20" value="<?php echo $harga?>" onkeypress="return onlyNumbers();"  class="required"></td></tr>
			<tr><td>Merk</td><td><input type="text" name="merk" size="40" value="<?php echo $merk?>"></td></tr>
			<tr><td>Tipe</td><td><input type="text" name="tipe" size="20" value="<?php echo $tipe?>"></td></tr>
			<tr><td>Rekanan</td><td><input type="text" name="rekanan" size="20" value="<?php echo $rekanan?>"></td></tr>
			<tr><td>No. Bukti Perolehan</td><td><input type="text" name="no_bukti" size="20" value="<?php echo $no_bukti?>"></td></tr>
			
			<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

		</table>

	</form>
	</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	$("#f_barang").validate();
});

function catcalc(cal) {
	var date = cal.date;
	var time = date.getTime()
}
Calendar.setup({
	inputField     :    "tgl_dapat",   // id of the input field
	ifFormat       :    "%Y-%m-%d",       // format of the input field
	showsTime      :    true,
	timeFormat     :    "24",
	onUpdate       :    catcalc
});
</script>