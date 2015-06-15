<link rel="stylesheet"  type="text/css" href="<?php echo base_URL()?>asset/css/style.css" />
<form id="login" action="<?php echo base_URL()?>index.php/login/process" method="post">
    <h1>Log In</h1>
	<center style="margin: -20px 0 15px 0"><b><?php echo $info;?></b></center>
    <fieldset id="inputs">
        <input id="username" name="username" type="text" placeholder="Username" autofocus required>   
        <input id="password" name="password" type="password" placeholder="Password" required>
		<select id="ta" name="ta" required>
			<option value=""> -- </option>
			<?php
			$x = date('Y');
			for ($i = ($x-2); $i < ($x+1); $i++) {
				if ($i == $x) {
					echo "<option selected value='$i'>$i/".($i+1)."</option>";
				} else {
					echo "<option value='$i'>$i/".($i+1)."</option>";
				}
			}
			?>
		</select>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
        <a href="<?php echo base_URL()?>">Kembali ke Depan</a>
    </fieldset>
</form>