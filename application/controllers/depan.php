<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Depan extends CI_Controller {
	function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('web_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('Pagination','image_lib'));
		$this->load->library('form_validation');
		$this->load->helper(array('file','number'));
	}
	
	public function index() {
		$web['title']	= "Selamat datang di Sistem Informasi Sekolah SMK N 1 Pangkalan Banteng";
		$this->load->view('t_header', $web);
		$this->load->view('t_tengah');
		$this->load->view('t_footer');
	}
	
	public function profil() {
		$web['title']	= "Profil Sekolah SMK N 1 Pangkalan Banteng";
		$web['profil']	= $this->web_model->getDataByID("t_sekolah", "id", "1");
		
		$this->load->view('t_header', $web);
		$this->load->view('v_profil', $web);
		$this->load->view('t_footer');
	}
	
	public function buku_induk() {
		$ke	= $this->uri->segment(3);
		
		
		$web['title']		= "Buku Induk Siswa";
		
		$this->load->view('t_header', $web);
		
		if ($ke	== "cari") {
			$web['buku_induk']	= $this->db->query("SELECT * FROM ts_data_siswa WHERE nama LIKE '%".$this->input->post('cari')."%' OR nama_pgl LIKE '%".$this->input->post('cari')."%'")->result();
			$this->load->view('m_buku_induk', $web);
		} else {
			$web['buku_induk'] 	= $this->web_model->getAll('ts_data_siswa');
			$this->load->view('m_buku_induk', $web);
		}		
		$this->load->view('t_footer');
	}
	
	public function guru() {
		$ke	= $this->uri->segment(3);
		
		$web['title']		= "Guru dan Tata Usaha";

		$this->load->view('t_header', $web);
		
		if ($ke	== "cari") {
			$web['guru']	= $this->db->query("SELECT * FROM tg_data WHERE nama LIKE '%".$this->input->post('cari')."%'")->result();
			
			$this->load->view('v_guru', $web);
		} else {
			$web['guru'] 	= $this->web_model->getAll('tg_data');
			$this->load->view('v_guru', $web);
		}		
		$this->load->view('t_footer');
	}
	
	public function pilih_jur() {
		$web['title']		= "Pilih Kelas";
		
		$prodi	= $this->uri->segment(3);
		$web['kelas_pilih']	= $this->db->query("SELECT * FROM tl_kelas WHERE prodi = '".$prodi."'")->result();
		
		$this->load->view('t_header', $web);
		$this->load->view('m_pilih_kelas', $web);
		$this->load->view('t_footer');
	}
	
	public function ledger() {
		$web['title']		= "Pilih Kelas";
		
		$kelas	= $this->uri->segment(3);
		$web['kelas']	= $kelas;
		$web['ledger']	= $this->db->query("SELECT tl_nilai.*, tl_kelas.nama, tl_mapel.id, tl_mapel.nama_mapel, 
		ts_data_siswa.nama FROM tl_nilai, tl_kelas, tl_mapel, ts_data_siswa 
		WHERE id_kelas = '".$kelas."' AND ta = YEAR(NOW()) AND tl_nilai.id_kelas = tl_kelas.id 
		AND tl_nilai.id_mapel = tl_mapel.id AND tl_nilai.id_siswa = ts_data_siswa.id")->result();
		
		//echo $this->db->last_query();
		$this->load->view('t_header', $web);
		$this->load->view('m_ledger', $web);
		$this->load->view('t_footer');
	}
	
	public function guru_duk() {
		$web['title']		= "Daftar Urut Kepangkatan PNS";
		$web['duk'] 		= $this->db->query("SELECT * FROM tg_duk ORDER BY gol DESC, gol_tmt ASC ")->result();
		
		$this->load->view('t_header', $web);
		$this->load->view('m_guru_duk', $web);
		$this->load->view('t_footer');
	}
	
	public function galeri() {
		$web['title']		= "Galeri Foto";
		
		$ke	= $this->uri->segment(3);
		$id	= $this->uri->segment(4);
		$web['galeri']				= $this->web_model->getAll('galeriKategori');
	
		$this->load->view('t_header', $web);
		if ($ke == "det") {
			$web['ket_galeri']	= $this->db->query("SELECT * FROM galeriKategori WHERE idKategori = '".$id."'")->row();
			$web['gal_det']		= $this->db->query("SELECT * FROM galeri WHERE kategori = '".$id."'")->result();
			
			$this->load->view('m_album_det', $web);
			
		} else {
			$this->load->view('m_album', $web);
		}
		$this->load->view('t_footer');
	}
	
	public function jadwal() {
		$ta		= date('Y');
		
		$web['jumlah_jadwal_pada_ta']	=	$this->db->query("SELECT * FROM t_jadwal WHERE ta = '".$ta."'")->num_rows();
		$web['hari_']	= $this->db->query("SELECT * FROM t_jadwal WHERE ta = YEAR(NOW()) GROUP BY hari 
		ORDER BY hari DESC")->result();
		$web['ta']	= $ta;
		
		$web['title']	= "Djadwal Pelajaran";
		$this->load->view('t_header', $web);
		$this->load->view('m_jadwal', $web);
		$this->load->view('t_footer');		
	}
	
	
	public function detil_siswa() {
		$id	= $this->uri->segment(3);
		$web['data_siswa']	= $this->web_model->getDataByID("ts_data_siswa", "id", $id);
		$web['gemar']		= $this->web_model->getDataByID("ts_gemar", "id_siswa", $id);
		$web['kembang_siswa']= $this->web_model->getDataByID("ts_kembang_siswa", "id_siswa", $id);
		$web['kesehatan']	= $this->web_model->getDataByID("ts_kesehatan", "id_siswa", $id);
		$web['ortu_ayah']	= $this->web_model->getDataByID("ts_ortu_ayah", "id_siswa", $id);
		$web['ortu_ibu']	= $this->web_model->getDataByID("ts_ortu_ibu", "id_siswa", $id);
		$web['ortu_wali']	= $this->web_model->getDataByID("ts_ortu_wali", "id_siswa", $id);
		$web['pend_sebelum']= $this->web_model->getDataByID("ts_pend_sebelum", "id_siswa", $id);
		$web['setelah']		= $this->web_model->getDataByID("ts_setelah", "id_siswa", $id);
		$web['tmp_tinggal']	= $this->web_model->getDataByID("ts_tmp_tinggal", "id_siswa", $id);
		
		$web['title']	= "Data Detil Siswa";
		$this->load->view('t_header', $web);
		$this->load->view('m_detil_siswa', $web);
		$this->load->view('t_footer');
	}
	
	public function detil_guru() {
		$id	= $this->uri->segment(3);
		$web['data']		= $this->web_model->getDataByID("tg_data", "id", $id);
		$web['kepeg']		= $this->web_model->getSpesific("tg_kepeg", "WHERE id_guru = '".$id."'");
		$web['pend']		= $this->web_model->getSpesific("tg_pend", "WHERE id_guru = '".$id."'");
		
		
		$web['title']	= "Data Detil Guru";
		$this->load->view('t_header', $web);
		$this->load->view('m_detil_guru', $web);
		$this->load->view('t_footer');
	}
	
	public function inventaris() {
		$tipe_brg	= $this->uri->segment(3);
		if ($tipe_brg == "") {
			$wh	= "";
		} else {
			$wh = "WHERE LEFT(kd_brg, 2) = '".$tipe_brg."'";
		} 
		$web['title']		= "Data Inventaris";
		$web['inventaris'] = $this->web_model->getSpesific('ti_invent', $wh);
		
		$this->load->view('t_header', $web);
		$this->load->view('m_inventaris', $web);
		$this->load->view('t_footer');
	}
	
	public function tanah() {
		$web['title']	= "Data Tanah";
		$web['tanah'] = $this->web_model->getAll('ti_tanah');
		
		$this->load->view('t_header', $web);
		$this->load->view('m_tanah', $web);
		$this->load->view('t_footer');
	}
	
	public function gedung() {
		$web['title']	= "Data Gedung";
		$web['gedung'] = $this->web_model->getAll('ti_bangunan');
		
		$this->load->view('t_header', $web);
		$this->load->view('m_gedung', $web);
		$this->load->view('t_footer');
	}
	
	
	public function rekap_keahlian() {
		$web['title']	= "Rekap Per Keahlian";
		
		
		$this->load->view('t_header', $web);

		$web['data_rekap']	= $this->db->query("
			SELECT prodi, SUM( IF( jk =  'L'
			AND tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiX, SUM( IF( jk =  'P'
			AND tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prX, SUM( IF( tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jX, SUM( IF( jk =  'L'
			AND tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXI, SUM( IF( jk =  'P'
			AND tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXI, SUM( IF( tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXI, SUM( IF( jk =  'L'
			AND tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXII, SUM( IF( jk =  'P'
			AND tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXII, SUM( IF( tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXII, SUM( IF( jk =  'L'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jL, SUM( IF( jk =  'P'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jP, COUNT( * ) AS total
			FROM tl_siswa_kelas
			WHERE kelas != '99' AND  ta = YEAR(NOW()) GROUP BY prodi
			LIMIT 0 , 30")->result();
			
		$this->load->view('m_rekap_keahlian', $web);	
		$this->load->view('t_footer');
	}
	
	public function rekap_agama() {
		$web['title']	= "Rekap Per Agama";
		
		
		$this->load->view('t_header', $web);

		$web['data_rekap']	= $this->db->query("
			SELECT agama, SUM( IF( jk =  'L'
			AND tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiX, SUM( IF( jk =  'P'
			AND tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prX, SUM( IF( tkt =  'X'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jX, SUM( IF( jk =  'L'
			AND tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXI, SUM( IF( jk =  'P'
			AND tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXI, SUM( IF( tkt =  'XI'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXI, SUM( IF( jk =  'L'
			AND tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXII, SUM( IF( jk =  'P'
			AND tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXII, SUM( IF( tkt =  'XII'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXII, SUM( IF( jk =  'L'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jL, SUM( IF( jk =  'P'
			AND ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jP, COUNT( * ) AS total
			FROM tl_siswa_kelas 
			WHERE kelas != '99'  AND  ta = YEAR(NOW()) GROUP BY agama
			LIMIT 0 , 30")->result();
			
		$this->load->view('m_rekap_agama', $web);	
		$this->load->view('t_footer');
	}
	
	public function rekap_kelas() {
		$web['title']	= "Rekap Per Kelas";
		
		
		$this->load->view('t_header', $web);

		$web['data_rekap']	= $this->db->query("
			SELECT tl_kelas.nama, SUM( IF( tl_siswa_kelas.jk =  'L'
			AND tl_siswa_kelas.tkt =  'X'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiX, SUM( IF( tl_siswa_kelas.jk =  'P'
			AND tl_siswa_kelas.tkt =  'X'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prX, SUM( IF( tl_siswa_kelas.tkt =  'X'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jX, SUM( IF( tl_siswa_kelas.jk =  'L'
			AND tl_siswa_kelas.tkt =  'XI'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXI, SUM( IF( tl_siswa_kelas.jk =  'P'
			AND tl_siswa_kelas.tkt =  'XI'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXI, SUM( IF( tl_siswa_kelas.tkt =  'XI'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXI, SUM( IF( tl_siswa_kelas.jk =  'L'
			AND tl_siswa_kelas.tkt =  'XII'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS lakiXII, SUM( IF( tl_siswa_kelas.jk =  'P'
			AND tl_siswa_kelas.tkt =  'XII'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS prXII, SUM( IF( tl_siswa_kelas.tkt =  'XII'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jXII, SUM( IF( tl_siswa_kelas.jk =  'L'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jL, SUM( IF( tl_siswa_kelas.jk =  'P'
			AND tl_siswa_kelas.ta = YEAR( NOW( ) ) , 1, 0 ) ) AS jP, COUNT( * ) AS total
			FROM tl_siswa_kelas, tl_kelas
			WHERE tl_siswa_kelas.kelas = tl_kelas.id AND tl_siswa_kelas.kelas != '99'  AND  tl_siswa_kelas.ta = YEAR(NOW()) GROUP BY kelas
			LIMIT 0 , 30")->result();
			
		$this->load->view('m_rekap_kelas', $web);	
		$this->load->view('t_footer');
	}
	
	public function dir() {
		$ke	= $this->uri->segment(3);
		
		$web['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_invent.kondisi, ti_ruang.nama FROM ti_invent, ti_ruang WHERE ti_invent.letak = ti_ruang.id ORDER BY ti_ruang.nama ASC")->result();
		$web['info']		= "";
		$web['ruang']		= $this->db->query("SELECT id, nama FROM ti_ruang")->result();
		
		$web['title']	= "Daftar Inventaris Ruangan";
		$this->load->view('t_header', $web);
		
		if ($ke == "det") {
			$id_ruang	= $this->uri->segment(4);
			if (empty($id_ruang)) {
				$web['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_invent.kondisi, ti_ruang.nama FROM ti_invent, ti_ruang WHERE ti_invent.letak = ti_ruang.id  ORDER BY ti_invent.kd_brg ASC")->result();
			} else {
				$web['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_invent.kondisi, ti_ruang.nama FROM ti_invent, ti_ruang WHERE ti_invent.letak = '".$id_ruang."' AND ti_invent.letak = ti_ruang.id  ORDER BY ti_invent.kd_brg ASC")->result();			
			}
			$this->load->view('m_dir', $web);
		} else {
			$this->load->view('m_dir', $web);	
		}
		$this->load->view('t_footer');
	}

}