<div id="isi">
	<h2>Form Edit Password</h2>
	
	<div style="margin: -10px 0px -25px 0px; background: #fff;">
	<form action="<?php echo base_URL()?>index.php/adm/edit_passwod/simpan" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="f_passwod" name="f_passwod" onsubmit="return cek_kesamaan()">
	<input type="hidden" value="<?php echo $admin->u?>" name="u_lama1" id="u_lama1">
	<input type="hidden" value="<?php echo $admin->p?>" name="p_lama1" id="p_lama1">
	
	
	<table width="97.5%" class="form">
		<tr><td>Username Lama</td><td><input type="text" name="u_lama" class="required"></td></tr>
		<tr><td>Username Baru</td><td><input type="text" name="u_baru" class="required"></td></tr>
		<tr><td>Password Lama</td><td><input type="text" name="p_lama" class="required"></td></tr>
		<tr><td>Password Baru</td><td><input type="text" name="p_baru" class="required"></td></tr>
		
		<tr><td></td><td><input type="submit" value="Simpan"></td></tr>

	</table>
	</form>
	</div>
</div>

<script type="text/javascript">
function cek_kesamaan() {
	var f = document.f_passwod;
	var u_lama1 = document.getElementById('u_lama1').value;
	var p_lama1 = document.getElementById('p_lama1').value;
	
	if (f.u_lama.value != u_lama1) {
		alert("Username lama tidak sesuai/ tidak sama");
		f.u_lama.focus();
		return false;
	} else if (f.p_lama.value != p_lama1) {
		alert("Password lama tidak sesuai/ tidak sama");
		f.p_lama.focus();
		return false;
	} else {
		return true;
	}	
}

$(document).ready(function(){
	$("#f_passwod").validate();
});
</script>