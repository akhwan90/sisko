<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main" class="clearfix">
    <div id="content">
        <article>        
            <section>

<!-- mulai -->                  
	

<div style="border: solid 1px gray; width: 350px; float: left; -moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px">
<div style="text-align: center; margin: 10px auto; width:150px; border: 6px solid #E4E4E4;">
<img src="<?php echo base_URL()?>upload/foto_guru/<?php echo $data->foto?>" width="150px" height="170px">
</div>

<table class="free">
		<tr><td id="kiri" width="30%">Nama</td><td id="kiri">: <b><?php echo $data->nama?></b></td></tr>
		<tr><td id="kiri">N I P</td><td id="kiri">: <b><?php echo $data->nip?></b></td></tr>
		<tr><td id="kiri">NUPTK</td><td id="kiri">: <b><?php echo $data->nuptk?></b></td></tr>
		<tr><td id="kiri">N R G</td><td id="kiri">: <b><?php echo $data->nrg?></b></td></tr>
		<tr><td id="kiri">NPWP</td><td id="kiri">: <b><?php echo $data->npwp?></b></td></tr>
		<tr><td id="kiri">TTL</td><td id="kiri">: <b><?php echo $data->tmp_lhr.", ".$data->tgl_lhr?></b></td></tr>
		<tr><td id="kiri">Jns. Kelamin</td><td id="kiri">: <b><?php echo $data->jk?></b></td></tr>
		<tr><td id="kiri">Agama</td><td id="kiri">: <b><?php echo $data->agama?></b></td></tr>
		<tr><td id="kiri">Alamat</td><td id="kiri">: <b><?php echo $data->alamat?></b></td></tr>
		<tr><td id="kiri">Pangkat/Gol</td><td id="kiri">: <b><?php echo $data->panggol?></b></td></tr>
		<tr><td id="kiri">No. Telp/HP</td><td id="kiri">: <b><?php echo $data->nope?></b></td></tr>
	</table>


</div>

<div style="margin: 0 20px 20px 10px; width: 600px; float: left;">
<ul id="countrytabs" class="shadetabs">
<li><a href="#" rel="country2">Keluarga</a></li>
<li><a href="#" rel="country3">Mata Pelajaran</a></li>
<li><a href="#" rel="country4">Riwayat Pendidikan</a></li>
<li><a href="#" rel="country5">Riwayat Kepegawaian</a></li>
</ul>

<div style="border:1px solid gray; width:590px; margin-bottom: 1em; padding: 10px; background-color: #FFFFFF; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px">

<div id="country2" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Gol. Darah</td><td><b><?php echo $data->gol_drh?></b></td></tr>
		<tr><td>Nama Ayah</td><td><b><?php echo $data->klg_ay?></b></td></tr>
		<tr><td>Nama Ibu</td><td><b><?php echo $data->klg_ibu?></b></td></tr>
		<tr><td>Nama Istri/Suami</td><td><b><?php echo $data->klg_suami_istri?></b></td></tr>
		<tr><td>Jumlah Anak</td><td><b><?php echo $data->klg_anak?></b></td></tr>
		<tr><td>No. HP</td><td><b><?php echo $data->klg_nope_isuam?></b></td></tr>
	</table>
</div>

<div id="country3" class="tabcontent">
	<table class="no-bordered">
		<tr><td width="30%">Mata Pelajaran 1</td><td><b><?php echo $data->mapel_1?></b></td></tr>
		<tr><td>Mata Pelajaran 2</td><td><b><?php echo $data->mapel_2?></b></td></tr>
		<tr><td>Mata Pelajaran 3</td><td><b><?php echo $data->mapel_3?></b></td></tr>
		<tr><td>Mata Pelajaran 4</td><td><b><?php echo $data->mapel_4?></b></td></tr>
		<tr><td width="30%">Tugas 1</td><td><b><?php echo $data->tgs_1?></b></td></tr>
		<tr><td>Tugas 2</td><td><b><?php echo $data->tgs_2?></b></td></tr>
		<tr><td>Tugas 3</td><td><b><?php echo $data->tgs_3?></b></td></tr>
		<tr><td>Tugas 4</td><td><b><?php echo $data->tgs_4?></b></td></tr>
		<tr><td>Jumlah Jam</td><td><b><?php echo $data->jml_jam?></b></td></tr>
	</table>
</div>

<div id="country4" class="tabcontent">
	<table class="bordered">
	<thead>
	<tr><th width="2%">No</th><th width="20%">Jenjang</th>
		<th width="18%">Nama</th><th width="5%">Kota</th>
		<th width="20%">Tahun Lulus</th>
		<th width="30%">Fakultas</th><th width="5%">Jursn</th>
	</tr>
	</thead>

	<?php $i = 0 ?>
	<?php foreach ($pend as $pg) { 
	$i++;
	?>

	<tr><td class='tengah'><?php echo $i?></td>
	<td class='tengah'><?php echo $pg->jenjang?></td>
	<td><?php echo $pg->nama?></td>
	<td class='tengah'><?php echo $pg->kota?></td>
	<td><?php echo $pg->th_lulus?></td>
	<td><?php echo $pg->fak?></td>
	<td><?php echo $pg->jur?></td>
	</tr>

	<?php } ?>

	</table>
</div>

<div id="country5" class="tabcontent">
	<table class="bordered">
	<thead>
	<tr><th width="2%">No</th><th width="20%">Jenis SK</th>
		<th width="10%">Pangkat/Gol</th><th width="18%">TMT</th>
		<th width="20%">Masa Kerja</th>
		<th width="30%">Nomor SK (Tanggal)</th>
	</tr>
	</thead>

	<?php $i = 0 ?>
	<?php foreach ($kepeg as $kp) {
	$i++;
	?>

	<tr><td class='tengah'><?php echo $i?></td>
	<td class='tengah'><?php echo $kp->tipe?></td>
	<td><?php echo $kp->panggol?></td>
	<td class='tengah'><?php echo $kp->tmt?></td>
	<td><?php echo $kp->mk_th." th ".$kp->mk_bl." bl"?></td>
	<td><?php echo $kp->sk_no."<br>".$kp->sk_tgl?></td>
	</tr>

	<?php } ?>

	</table>
</div>



</div>

</div>





<script type="text/javascript">

var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>
	
<!-- akhir -->
          </section>        
        </article>        
    </div>
</div>
	