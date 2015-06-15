<!DOCTYPE html>
<head>
<link rel="stylesheet"  type="text/css" href="<?php echo base_URL()?>asset/css/style.css" />
<link rel="stylesheet"  type="text/css" href="<?php echo base_URL()?>asset/css/tabcontent.css" />
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/tooltip.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/tabcontent.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/js/auto_complete/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>  

<script type="text/javascript" src="<?php echo base_URL()?>asset/plugin/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_URL()?>asset/plugin/fancybox/jquery.mousewheel.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_URL()?>asset/plugin/fancybox/jquery.fancybox.css" media="screen" />
<script type="text/javascript"> 
	jQuery(document).ready(function(){
		$('#search_siswa').autocomplete({source:'<?php echo base_URL()?>asset/js/auto_complete/suggest_zip.php', minLength:1});
		$('#search_pegawe').autocomplete({source:'<?php echo base_URL()?>asset/js/auto_complete/suggest_pgw.php', minLength:1});
		
		$('.fancybox').fancybox();
	});

</script> 
<title><?php echo $title?></title>
<link rel="stylesheet" href="<?php echo base_URL()?>asset/js/auto_complete/jquery/css/smoothness/jquery-ui-1.8.2.custom.css" /> 
<style type="text/css"><!--

		/* style the auto-complete response */
		li.ui-menu-item { font-size:12px !important; }

--></style> 
	
<script>
    function initMenu() {
      $('#menu ul').hide(); // Hide the submenu
      if ($('#menu li').has('ul')) $('#menu ul').prev().addClass('expandable'); // Expand/collapse a submenu when it exists  
      $('.expandable').click(
        function() {
            $(this).next().slideToggle();
            $(this).toggleClass('expanded');
          }
        );
      }
    
    // When document ready, call initMenu() function 
    $(document).ready(function() {initMenu();});    
</script>
</head>
<header> 
	<div class="logo">
	<img src="<?php echo base_URL()?>asset/images/logo.gif" width="80px" height="80px">
	</div>
    <hgroup class="clearfix"> 
        <h1 style="color: #fff; margin-left: -10px">Sistem Informasi <span>Sekolah</span></h1> 
		<h4 style="color: #DBDBB5; font-family: arial; font-size: 140%; margin: 40px 0 10px -315px; padding: 0; float: left; display: block">SMAN 1 Zimbabwe</h4>
		<h6 style="color: #B4B4DB; font-family: verdana; font-size: 110%; margin: 65px 0 10px -315px; padding: 0; float: left; display: block">Zimbabwe, Amerika Latin</h6>
    </hgroup>
</header>  
<!-- H- Menu -->
<ul id="hmenu">
	<li><a href="<?php echo base_URL()?>index.php/depan">Beranda</a></li>
	<li><a href="<?php echo base_URL()?>index.php/depan/profil">Profil Sekolah</a></li>
	<li><a href="<?php echo base_URL()?>index.php/depan/buku_induk">Buku Induk Siswa</a></li>
	<li><a href="<?php echo base_URL()?>index.php/depan/guru">Guru & TU</a></li>
	
	<li><a href="">Inventaris</a>
		<ul>
			<li><a href="<?php echo base_URL()?>index.php/depan/tanah">Tanah</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/gedung">Gedung Bangunan</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/inventaris/PM">Peralatan Mesin</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/inventaris/AT">Aset Tetap Lainya</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/inventaris/JI">Jalan, Irigasi, Jaringan</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/inventaris/BR">Barang</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/dir">Inventaris Ruangan</a></li>
		</ul>
	</li>
	
	<li><a href="#">Ledger Siswa</a>
		<ul>
			<li><a href="<?php echo base_URL()?>index.php/depan/pilih_jur/IPA">Jurusan IPA</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/pilih_jur/IPS">Jurusan IPS</a></li>
		</ul>
	</li>
	<li><a href="#">Rekapitulasi</a>
		<ul>
			<li><a href="<?php echo base_URL()?>index.php/depan/rekap_keahlian">Siswa Per Keahlian</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/rekap_kelas">Siswa Per Kelas</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/rekap_agama">Siswa Per Agama</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/guru_duk">Daftar Urut Kepangkatan</a></li>
			<li><a href="<?php echo base_URL()?>index.php/depan/guru">Data Guru/Pegawai</a></li>
		</ul>
	</li>
	<li><a href="<?php echo base_URL()?>index.php/depan/jadwal">Jadwal PBM</a></li>
</ul>
<!-- end HMENU -->