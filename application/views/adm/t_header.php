<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_URL()?>asset/css/mystyle.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_URL()?>asset/css/tabcontent.css" />
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/tabcontent.js"></script>
<!--KALENDER -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_URL()?>asset/js/kalender/calendar-green.css"/>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/kalender/calendar.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/kalender/lang/calendar-ina.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/kalender/calendar-setup.js"></script>
<!--END KALENDER -->
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/my_JS.js"></script>

<script type="text/javascript" src="<?php echo base_URL()?>asset/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/tooltip.js"></script>


<style type="text/css">
input.error, select.error {
      background: #FED801;
	  border: solid 1px red;
} 
</style>
<title>Sistem Informasi Sekolah :: SMAN 1 Zimbabwe</title>
</head>

<body>
<header>
<img id="logo" src="<?php echo base_URL()?>asset/images/logo.gif">
<h2 id="atas">Sistem Informasi Sekolah, Tahun Ajaran <?php echo $this->session->userdata('ta')."/".($this->session->userdata('ta')+1)?></h2>
<h3 id="atas">SMAN 1 Zimbabwe</h3>
<h5 id="atas">Zimbabwe, Amerika Latin</h5>
</header>

<nav>
	<ul>
		<li><a href="<?php echo base_url(); ?>index.php/adm">Beranda</a></li>
		<li><a href="#">Tabel</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/ruang/">Ruangan</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/kelas/">Kelas</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/mapel/">Mata Pelajaran</a></li>

			</ul>
		</li>
		
		
		<li><a href="#">Data</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/profil_sekolah/">Profil Sekolah</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/buku_induk/">Buku Induk Siswa</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/siswa_kelas">Data Siswa per Kelas</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/alumni">Data Alumni</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/guru_data/">Guru</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/guru_duk/">Daftar DUK</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/ledger/">Data Ledger Siswa</a></li>
			</ul>
		</li>
		
		<li><a href="#">Inventaris</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/tanah/">Tanah</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/g_bangunan/">Gedung Bangunan</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/no_tanah_bgn/">Selain Tanah & Gedung</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/dir/">Inventaris Ruangan</a></li>
			</ul>
		</li>

		<li><a href="#">Proses</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/pindah_kelas">Pindah Kelas</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/input_nilai_per_kelas">Input Ledger</a></li>
			</ul>
		</li>
		
		<!--<li><a href="<?php echo base_URL()?>index.php/adm/galeri">Gallery Foto</a></li>-->
		<li><a href="#">Jadwal PBM</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/jadwal">Administrasi Jadwal</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/jadwal_by_guru">Lihat Jadwal Per Guru</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/jadwal_by_kelas">Lihat Jadwal Per Kelas</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/jadwal_by_hari">Lihat Jadwal Per Hari</a></li>
			</ul>
		</li>
		<li><a href="#">Administrator</a>
			<ul>
				<li><a href="<?php echo base_URL()?>index.php/adm/backup">Backup Database</a></li>
				<li><a href="<?php echo base_URL()?>index.php/adm/edit_passwod">Edit Passwod</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_URL()?>index.php/adm/logout" onclick="return confirm('Anda ingin Logout');"><font color="red">Logout</font></a></li>
	</ul>
</nav>
<div style="min-height: 320px;">