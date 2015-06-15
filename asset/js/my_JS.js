function buku_induk_valid() {
	var f = document.f_buku_induk;
	
	var fup = document.getElementById('foto');
	var fileName = fup.value;
	
	var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
	
		
	if (f.no_induk.value == "") {
		alert("Isikan Nomor Induk (Tab-> DATA SISWA)");
		f.no_induk.focus();
		return false;
	} else if (f.nisn.value == "") {
		alert("Isikan NISN (Tab-> DATA SISWA)");
		f.nisn.focus();
		return false;
	} else if (f.nm_lkp.value == "") {
		alert("Isikan Nama Lengkapnya (Tab-> DATA SISWA)");
		f.nm_lkp.focus();
		return false;
	} else if (f.jk.value == "") {
		alert("Pilih Jenis Kelaminnya (Tab-> DATA SISWA)");
		f.jk.focus();
		return false;
	} else if (f.tmp_lahir.value == "") {
		alert("Isikan Tempat Lahirnya (Tab-> DATA SISWA)");
		f.tmp_lahir.focus();
		return false;
	} else if (f.tgl_lahir.value == "") {
		alert("Isikan Tanggal Lahirnya (Tab-> DATA SISWA)");
		f.tgl_lahir.focus();
		return false;
	} else if (f.agama.value == "") {
		alert("Pilih Agamanya (Tab-> DATA SISWA)");
		f.agama.focus();
		return false;
	} else if (f.anak_ke.value == "") {
		alert("Anak ke Berapa..? (Tab-> DATA SISWA)");
		f.anak_ke.focus();
		return false;
	} /*else if (ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG") {
		alert("Foto tidak boleh kosong. (HARUS GIF atau JPEG)");
		fup.focus();
		return false;
	} */else if (f.alamat.value == "") {
		alert("Isikan alamatny (Tab-> Tempat Tinggal)");
		f.alamat.focus();
		return false;
	} else if (f.tggl_dgn.value == "") {
		alert("Tinggal dengan Siapa..? (Tab-> Tempat Tinggal)");
		f.tggl_dgn.focus();
		return false;
	} else if (f.jarak.value == "") {
		alert("Isikan jarak ke sekolah (Tab-> Tempat Tinggal)");
		f.jarak.focus();
		return false;
	} else if (f.sarana.value == "") {
		alert("Isikan sarana pergi ke sekolah (Tab-> Tempat Tinggal)");
		f.sarana.focus();
		return false;
	} else if (f.tgg_bdn.value == "") {
		alert("Isikan TINGGI BADAN (Tab-> Kesehatan)");
		f.tgg_bdn.focus();
		return false;
	} else if (f.brt_bdn.value == "") {
		alert("Isikan BERAT BADAN (Tab-> Kesehatan)");
		f.brt_bdn.focus();
		return false;
	} else if (f.asal_sklh.value == "") {
		alert("Isikan Asal Sekolahnya (Tab-> Pendidikan)");
		f.asal_sklh.focus();
		return false;
	} else if (f.tgl_ijazah.value == "") {
		alert("Isikan Tanggal Ijazahnya (Tab-> Pendidikan)");
		f.tgl_ijazah.focus();
		return false;
	} else if (f.lama_bljr.value == "") {
		alert("Isikan Lama Belajarnya (Tab-> Pendidikan)");
		f.lama_bljr.focus();
		return false;
	} else if (f.no_ijazah.value == "") {
		alert("Isikan Nomor Ijazahnya (Tab-> Pendidikan)");
		f.no_ijazah.focus();
		return false;
	} else if (f.ay_nama.value == "") {
		alert("Isikan Nama Ayahnya (Tab-> Ayah)");
		f.ay_nama.focus();
		return false;
	} else if (f.ay_agama.value == "") {
		alert("Isikan Agama Ayahnya (Tab-> Ayah)");
		f.ay_agama.focus();
		return false;
	} else if (f.ay_pend.value == "") {
		alert("Isikan Pendidikan Terakhir Ayahnya (Tab-> Ayah)");
		f.ay_pend.focus();
		return false;
	} else if (f.ay_pkj.value == "") {
		alert("Isikan Pekerjaan Ayahnya (Tab-> Ayah)");
		f.ay_pkj.focus();
		return false;
	} else if (f.ay_phasilan.value == "") {
		alert("Isikan Penghasilan Ayahnya (Tab-> Ayah)");
		f.ay_phasilan.focus();
		return false;
	} else if (f.ay_alamat.value == "") {
		alert("Isikan Alamat Ayahnya (Tab-> Ibu)");
		f.ay_alamat.focus();
		return false;
	} else if (f.ib_nama.value == "") {
		alert("Isikan Nama Ibunya (Tab-> Ibu)");
		f.ib_nama.focus();
		return false;
	} else if (f.ib_agama.value == "") {
		alert("Isikan Agama Ibunya (Tab-> Ibu)");
		f.ib_agama.focus();
		return false;
	} else if (f.ib_pend.value == "") {
		alert("Isikan Pendidikan Terakhir Ibunya (Tab-> Ibu)");
		f.ib_pend.focus();
		return false;
	} else if (f.ib_pkj.value == "") {
		alert("Isikan Pekerjaan Ibunya (Tab-> Ibu)");
		f.ib_pkj.focus();
		return false;
	} else if (f.ib_phasilan.value == "") {
		alert("Isikan Penghasilan Ibunya (Tab-> Ibu)");
		f.ib_phasilan.focus();
		return false;
	} else if (f.ib_alamat.value == "") {
		alert("Isikan Alamat Ibunya (Tab-> Ibu)");
		f.ib_alamat.focus();
		return false;
	} else {
		return true;
	}
}


function tanah_valid() {
	var f = document.f_tanah;
	
	if (f.nama.value == "") {
		alert("Nama masih kosong");
		f.nama.focus();
		return false;
	} else if (f.uk_bangunan.value == "") {
		alert("Isikan luas tanah untuk bangunan..");
		f.uk_bangunan.focus();
		return false;
	} else if (f.uk_kosong.value == "") {
		alert("Isikan luas tanah kosongnya..");
		f.uk_kosong.focus();
		return false;
	} else {
		return true;
	}
}


function validateEmail(mail) {
	var x 		= mail;
	var atpos 	= x.indexOf("@"); 		// posisi simbol @ (at)
	var dotpos	= x.lastIndexOf(".");	// posisi simbol . (dot)
	
	if (atpos < 1 || dotpos < atpos+2 || dotpos+2 >= x.length) {
		return false;
	} else {
		return true;
	}
}

function onlyNumbers(evt) {
    var e = event || evt; // for trans-browser compatibility
    var charCode = e.which || e.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        alert('Hanya Angka');
		return false;
	} else {
		return true;
	}
}

function oto_Jumlah() {

}

function startCalc(){
interval = setInterval("calc()",1);
}
function calc(){
_1 = document.f_tanah.uk_bangunan.value;
_2 = document.f_tanah.uk_kosong.value;
document.f_tanah.luas.value = (parseFloat(_1) + parseFloat(_2));
}
function stopCalc(){
clearInterval(interval);
}


function validateR(){
	var selectedCombobox=(form2.selectCombo.value);
	if (selectedCombobox=='All') {
		alert("Please select something");
		return false;
	}
	return true;
}