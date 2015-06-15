<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm extends CI_Controller {
	function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('adm_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('Pagination','image_lib', 'session', 'form_validation'));
		$this->load->helper("file");
	}
	
	public function index() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$this->load->view('adm/t_header');
		$this->load->view('adm/t_tengah');
		$this->load->view('adm/t_footer');
	}
	
	/* Data */
	
	//Ruang - untuk data referensi ruangan
	public function ruang() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		$adm['info']		= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['ruang'] = $this->db->query("SELECT * FROM ti_ruang WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_ruang', $adm);
		} else if ($ke == "hps") {
			$id_ruang				= $this->uri->segment(4);
			$this->adm_model->delData('ti_ruang', 'id', $id_ruang);
			redirect('adm/ruang');
		} else if ($ke == "add") {	
			$adm['ruang']		= $this->adm_model->getAll('ti_ruang');
			$this->load->view('adm/f_ruang', $adm);
		} else if ($ke == "act_add") {
			
				$q_kd = $this->db->query("SELECT MAX(RIGHT(id, 4)) AS kd FROM ti_ruang")->row();
				
				if (empty($q_kd)) {
					$id_akhir	= "R-".str_pad(1, 4, '0', STR_PAD_LEFT);
				} else {
					$id_akhir	= "R-".str_pad((intval(($q_kd->kd))+1), 4, '0', STR_PAD_LEFT);
				}
						
			$this->db->query("INSERT INTO ti_ruang VALUES ('".$id_akhir."', '".$this->input->post('nama')."', '".
				$this->input->post('tgg_jwb')."', '".$this->input->post('nip_tgg_jwb')."')");
			
			redirect('adm/ruang');
		} else if ($ke == "edt") {
			$adm['ruang']		= $this->adm_model->getAll('ti_ruang');
			$adm['ruang'] = $this->adm_model->getDataByID('ti_ruang', 'id', $this->uri->segment(4));
			$this->load->view('adm/f_ruang', $adm);
		} else if ($ke == "act_edt") {

			$this->db->query("UPDATE ti_ruang SET nama = '".$this->input->post('nama')."', tgg_jwb = '".
				$this->input->post('tgg_jwb')."', nip_tgg_jwb = '".
				$this->input->post('nip_tgg_jwb')."' WHERE id = '".$this->input->post('id')."'");

			redirect('adm/ruang');
		} else {
			$adm['ruang'] 		= $this->adm_model->getAll('ti_ruang');
			$this->load->view('adm/v_ruang', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	
	//end Ruang
	
	//Kelas - Untuk menajemen data kelas
	public function kelas() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		
		$adm['info']		= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['kelas'] = $this->db->query("SELECT * FROM tl_kelas WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_kelas', $adm);
		} else if ($ke == "hps") {
			$id_kelas				= $this->uri->segment(4);
			$this->adm_model->delData('tl_kelas', 'id', $id_kelas);
			redirect('adm/kelas');
		} else if ($ke == "add") {	
			$adm['kelas']		= $this->adm_model->getAll('tl_kelas');
			$this->load->view('adm/f_kelas', $adm);
		} else if ($ke == "act_add") {
			
			$this->db->query("INSERT INTO tl_kelas VALUES ('', '".$this->input->post('prodi')."', '".
				$this->input->post('tkt')."', '".$this->input->post('nama')."', '".$this->input->post('kapasitas')."', '".$this->input->post('wali')."')");
			
			redirect('adm/kelas');
		} else if ($ke == "edt") {
			$adm['kelas']		= $this->adm_model->getAll('tl_kelas');
			$adm['kelas'] 		= $this->adm_model->getDataByID('tl_kelas', 'id', $this->uri->segment(4));
			$this->load->view('adm/f_kelas', $adm);
		} else if ($ke == "act_edt") {

			$this->db->query("UPDATE tl_kelas SET prodi = '".$this->input->post('prodi')."', tkt = '".
				$this->input->post('tkt')."', nama = '".
				$this->input->post('nama')."', kapasitas = '".$this->input->post('kapasitas')."', wali = '".$this->input->post('wali')."' WHERE id = '".$this->input->post('id')."'");

			redirect('adm/kelas');
		} else {
			$adm['kelas'] 		= $this->db->query("SELECT * FROM tl_kelas WHERE id != 99")->result();
			$this->load->view('adm/v_kelas', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	
	//End kelas
	
	//Mapel - untuk manajemen data mata pelajaran
	public function mapel() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		$adm['info']	= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['mapel'] = $this->db->query("SELECT * FROM tl_mapel WHERE nama_mapel LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_mapel', $adm);
		} else if ($ke == "hps") {
			$id_mapel				= $this->uri->segment(4);
			$this->adm_model->delData('tl_mapel', 'id', $id_mapel);
			redirect("adm/mapel");
		} else if ($ke == "add") {	
			$adm['mapel']		= $this->adm_model->getAll('tl_mapel');
			$this->load->view('adm/f_mapel', $adm);
		} else if ($ke == "act_add") {			
			$this->db->query("INSERT INTO tl_mapel VALUES ('', '".$this->input->post('prodi')."', '-', '".$this->input->post('nama_mapel')."', '".$this->input->post('semester')."', '".$this->input->post('kkm')."')");
			
			/*$this->db->query("INSERT INTO tl_mapel VALUES ('', '".$this->input->post('prodi')."', '".
				$this->input->post('jenis')."', '".$this->input->post('nama_mapel')."', '".$this->input->post('semester')."', '".$this->input->post('kkm')."')");
			*/
			$adm['mapel'] 		= $this->adm_model->getAll('tl_mapel');
			$this->load->view('adm/v_mapel', $adm);
			redirect("adm/mapel");
		} else if ($ke == "edt") {
			$adm['mapel']		= $this->adm_model->getAll('tl_mapel');
			$adm['mapel'] = $this->adm_model->getDataByID('tl_mapel', 'id', $this->uri->segment(4));
			$this->load->view('adm/f_mapel', $adm);
		} else if ($ke == "act_edt") {

			/*$this->db->query("UPDATE tl_mapel SET prodi = '".$this->input->post('prodi')."', jenis = '".
				$this->input->post('jenis')."', nama_mapel = '".
				$this->input->post('nama_mapel')."', semester = '".$this->input->post('semester')."', kkm = '".$this->input->post('kkm')."' WHERE id = '".$this->input->post('id')."'");
			*/
			$this->db->query("UPDATE tl_mapel SET prodi = '".$this->input->post('prodi')."', jenis = '-', nama_mapel = '".
			$this->input->post('nama_mapel')."', semester = '".$this->input->post('semester')."', kkm = '".$this->input->post('kkm')."' WHERE id = '".$this->input->post('id')."'");
				
			redirect("adm/mapel");
		} else {
			$adm['mapel'] 	= $this->adm_model->getAll('tl_mapel');
			$this->load->view('adm/v_mapel', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	// End Mapel
	//END MENU DATAAA //
	
	
/*======================================================================================================
// MENU KEDUA : DATA 
/*====================================================================================================== */
	
	//Profil Sekolah - Manajemen Data Profil Sekolah
	public function profil_sekolah() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$adm['profil_sekolah']	= $this->db->query("SELECT * FROM t_sekolah WHERE id = '1' LIMIT 1")->row();
		
		$this->load->view('adm/t_header');	
		if ($this->uri->segment(3) == "simpan") {
			$this->db->query("UPDATE t_sekolah SET nama = '".$this->input->post('nama')."', nss ='".$this->input->post('nss')."', nis ='".$this->input->post('nis')."', npsn ='".$this->input->post('npsn')."', prov ='".$this->input->post('prov')."', kab ='".$this->input->post('kab')."', kec ='".$this->input->post('kec')."', desa ='".$this->input->post('desa')."', jl ='".$this->input->post('jl')."', kd_pos ='".$this->input->post('kd_pos')."',  telp ='".$this->input->post('telp')."', fax ='".$this->input->post('fax')."', daerah ='".$this->input->post('daerah')."', status ='".$this->input->post('status')."', prodi ='".$this->input->post('prodi')."', kompetensi ='".$this->input->post('kompetensi')."', akre ='".$this->input->post('akre')."', akre_th ='".$this->input->post('akre_th')."', npwp_rutin ='".$this->input->post('npwp_rutin')."', npwp_bop ='".$this->input->post('npwp_bop')."', sk ='".$this->input->post('sk')."', sk_tgl ='".$this->input->post('sk_tgl')."', sk_ttd ='".$this->input->post('sk_ttd')."', jml_guru ='".$this->input->post('jml_guru')."', th_berdiri ='".$this->input->post('th_berdiri')."',  th_negeri ='".$this->input->post('th_negeri')."',  waktu_kbm ='".$this->input->post('waktu_kbm')."', stat_gedung ='".$this->input->post('stat_gedung')."', jrk_kec ='".$this->input->post('jrk_kec')."', jrk_kab ='".$this->input->post('jrk_kab')."', lintasan ='".$this->input->post('lintasan')."', lintang ='".$this->input->post('lintang')."', bujur ='".$this->input->post('bujur')."', penyelenggara ='".$this->input->post('penyelenggara')."', kepsek_nama ='".$this->input->post('kepsek_nama')."', kepsek_nip ='".$this->input->post('kepsek_nip')."', kepsek_pkt ='".$this->input->post('kepsek_pkt')."', kepsek_gol ='".$this->input->post('kepsek_gol')."', kepsek_pkt_tmt ='".$this->input->post('kepsek_pkt_tmt')."', kepsek_pend ='".$this->input->post('kepsek_pend')."', kepsek_jur ='".$this->input->post('kepsek_jur')."', kepsek_sk ='".$this->input->post('kepsek_sk')."', kepsek_tmt ='".$this->input->post('kepsek_tmt')."', kepsek_nope1 ='".$this->input->post('kepsek_nope1')."', kepsek_nope2 ='".$this->input->post('kepsek_nope2')."' WHERE id = '".$this->uri->segment(4)."'");
			redirect('adm/profil_sekolah');
		} else {
			$this->load->view('adm/f_profil', $adm);			
		}
		$this->load->view('adm/t_footer');
	}
	//End Profil 

	/* BUKU INDUK  : last edited @ 26/10/2012 */
	public function buku_induk() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		//konfigurasi upload file
		$config['upload_path'] 		= 'upload/foto_siswa';
		$config['allowed_types'] 	= 'png|jpg|gif|bmp';
		$config['max_size']			= '3000';
		$config['max_width']  		= '3000';
		$config['max_height']  		= '3000';
		
		$this->load->library('upload', $config);
		
		$ke	= $this->uri->segment(3);
		
		$config['base_url'] 	= base_url().'index.php/adm/buku_induk/hal';
		$config['total_rows'] 	= $this->db->query("SELECT * FROM ts_data_siswa")->num_rows();
		$config['per_page'] 	= 15;
		$config['uri_segment'] 	= 4;
		$config['first_link'] 	= "<div class='p'>Awal</div>";		
		$config['last_link'] 	= "<div class='p'>Akhir</div>";
		$config['cur_tag_open'] = '<div class="p_aktif">';
		$config['cur_tag_close']= '</div>';
		$config['num_tag_open'] = '<div class="p">';
		$config['num_tag_close']= '</div>';
		$config['next_tag_open']= "<div class='p'>"; 
		$config['next_tag_close']= "</div>"; 
		$config['prev_tag_open']= "<div class='p'>"; 
		$config['prev_tag_close']= "</div>"; 

		
		$this->pagination->initialize($config); 		
		
		$awal	= $this->uri->segment(4); 
		if (empty($awal) || $awal == 1) { $awal = 0; } { $awal = $awal; }
		$akhir	= $config['per_page'];
		
		$adm['buku_induk'] 	= $this->adm_model->getLimit('ts_data_siswa', $awal, $akhir);
		$adm['info']		= "";
		
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['buku_induk'] = $this->db->query("SELECT * FROM ts_data_siswa WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_buku_induk', $adm);
		} else if ($ke == "add") {
			$q = $this->db->query("select id from ts_data_siswa order by id desc limit 1")->row();
			if (empty($q)) {
				$adm['id_terakhir']	= 1;
			} else {
				$adm['id_terakhir'] = (($q->id)+1);
			}
			
			$this->load->view('adm/f_buku_induk', $adm);
		} else if ($ke == "act_add") {
			//validasi form
			$this->form_validation->set_rules('nm_lkp', 'Nama', 'trim|required|strip_tags|xss_clean');
				
			if ($this->form_validation->run() == TRUE) {
					$this->upload->do_upload('foto');
					$up_data	 	= $this->upload->data();
					
					$this->db->query("INSERT INTO ts_data_siswa VALUES ('".$this->input->post('id')."', '".
										strtoupper($this->input->post('nm_lkp'))."', '".$this->input->post('nm_pggl')."', '".
										$this->input->post('no_induk')."', '".$this->input->post('nisn')."', '".
										$this->input->post('jk')."', '".$this->input->post('tmp_lahir')."', '".
										$this->input->post('tgl_lahir')."', '".$this->input->post('umur')."', '".
										$this->input->post('agama')."', '".$this->input->post('wn')."', '".
										$this->input->post('anak_ke')."', '".$this->input->post('sdr_kandung')."', '".
										$this->input->post('sdr_tiri')."', '".$this->input->post('sdr_angkat')."', '".
										$this->input->post('stat_anak')."', '".$this->input->post('bahasa')."', '".
										$up_data['file_name']."', '".$this->input->post('stat_aktif')."')");
					
					$this->db->query("INSERT INTO ts_gemar VALUES ('".$this->input->post('id')."', '".
										$this->input->post('seni')."', '".$this->input->post('olahraga')."', '".
										$this->input->post('organisasi')."', '".$this->input->post('lain')."')");
										
					$this->db->query("INSERT INTO ts_kembang_siswa VALUES ('".$this->input->post('id')."', '".
										$this->input->post('bs_1_th')."-".$this->input->post('bs_1_nama')."', '".
										$this->input->post('bs_2_th')."-".$this->input->post('bs_2_nama')."', '".
										$this->input->post('bs_3_nama')."-".$this->input->post('bs_3_th')."', '".
										$this->input->post('tgl_pindah')."', '".$this->input->post('tgl_pindah')."', '".
										$this->input->post('tgl_lulus')."', '".$this->input->post('lls_tgl_ijazah')."', '".
										$this->input->post('lls_no_ijazah')."', '".$this->input->post('lls_tgl_stl')."', '".
										$this->input->post('lls_no_stl')."')");
					
					$this->db->query("INSERT INTO ts_kesehatan VALUES ('".$this->input->post('id')."', '".
										$this->input->post('gol_darah')."', '".$this->input->post('penyakit')."', '".
										$this->input->post('kelainan')."', '".$this->input->post('tgg_bdn')."', '".
										$this->input->post('brt_bdn')."')");
										
					$this->db->query("INSERT INTO ts_ortu_ayah VALUES ('".$this->input->post('id')."', '".
										$this->input->post('ay_nama')."', '".$this->input->post('ay_tmp_lahir')."', '".
										$this->input->post('ay_tgl_lahir')."', '".$this->input->post('ay_agama')."', '".
										$this->input->post('ay_wn')."', '".$this->input->post('ay_pend')."', '".
										$this->input->post('ay_pkj')."', '".$this->input->post('ay_phasilan')."', '".
										$this->input->post('ay_stat')."', '".$this->input->post('ay_alamat')."')");
										
					$this->db->query("INSERT INTO ts_ortu_ibu VALUES ('".$this->input->post('id')."', '".
										$this->input->post('ib_nama')."', '".$this->input->post('ib_tmp_lahir')."', '".
										$this->input->post('ib_tgl_lahir')."', '".$this->input->post('ib_agama')."', '".
										$this->input->post('ib_wn')."', '".$this->input->post('ib_pend')."', '".
										$this->input->post('ib_pkj')."', '".$this->input->post('ib_phasilan')."', '".
										$this->input->post('ib_stat')."', '".$this->input->post('ib_alamat')."')");
										
					$this->db->query("INSERT INTO ts_ortu_wali VALUES ('".$this->input->post('id')."', '".
										$this->input->post('wa_nama')."', '".$this->input->post('wa_tmp_lahir')."', '".
										$this->input->post('wa_tgl_lahir')."', '".$this->input->post('wa_agama')."', '".
										$this->input->post('wa_wn')."', '".$this->input->post('wa_pend')."', '".
										$this->input->post('wa_pkj')."', '".$this->input->post('wa_phasilan')."', '".
										$this->input->post('wa_stat')."', '".$this->input->post('wa_alamat')."')");
					
					$this->db->query("INSERT INTO ts_pend_sebelum VALUES ('".$this->input->post('id')."', '".
										$this->input->post('asal_sklh')."', '".$this->input->post('tgl_ijazah')."', '".
										$this->input->post('no_ijazah')."', '".$this->input->post('tgl_stl')."', '".
										$this->input->post('no_stl')."', '".$this->input->post('no_ujian')."', '".
										$this->input->post('lama_bljr')."', '".$this->input->post('stat_sasal')."', '".
										$this->input->post('pindah_dari')."', '".$this->input->post('alasan_pindah')."', '".
										$this->input->post('msk_kelas')."', '".$this->input->post('msk_tgl')."', '".
										$this->input->post('bid_studi')."', '".$this->input->post('prodi')."', '".
										$this->input->post('kompetensi')."')");	
					
					$this->db->query("INSERT INTO ts_setelah VALUES ('".$this->input->post('id')."', '".
										$this->input->post('klh_tmp')."', '".$this->input->post('klh_jrs')."', '".
										$this->input->post('klh_kota')."', '".$this->input->post('krj_tgl_mulai')."', '".
										$this->input->post('krj_namapt')."', '".$this->input->post('krj_lembaga')."', '".
										$this->input->post('krj_mandiri')."', '".$this->input->post('krj_lainnya')."', '".
										$this->input->post('krj_hasil')."')");	
					
					$this->db->query("INSERT INTO ts_tmp_tinggal VALUES ('".$this->input->post('id')."', '".
										$this->input->post('alamat')."', '".$this->input->post('no_telp')."', '".
										$this->input->post('tggl_dgn')."', '".$this->input->post('alamat_kos')."', '".
										$this->input->post('jarak')."', '".$this->input->post('sarana')."')");	
					
					redirect('adm/buku_induk');
			} else {
				$adm['info']			= "Nama HARUS Diisi, bos... ";
				$q = $this->db->query("select id from ts_data_siswa order by id desc limit 1")->row();
				if (empty($q)) {
					$adm['id_terakhir']	= 1;
				} else {
					$adm['id_terakhir'] = (($q->id)+1);
				}
				
				$this->load->view('adm/f_buku_induk', $adm);
			}	
		} else if ($ke == "edt") {
			$id	= $this->uri->segment(4);
			$adm['data_siswa']	= $this->adm_model->getDataByID("ts_data_siswa", "id", $id);
			$adm['gemar']		= $this->adm_model->getDataByID("ts_gemar", "id_siswa", $id);
			$adm['kembang_siswa']= $this->adm_model->getDataByID("ts_kembang_siswa", "id_siswa", $id);
			$adm['kesehatan']	= $this->adm_model->getDataByID("ts_kesehatan", "id_siswa", $id);
			$adm['ortu_ayah']	= $this->adm_model->getDataByID("ts_ortu_ayah", "id_siswa", $id);
			$adm['ortu_ibu']	= $this->adm_model->getDataByID("ts_ortu_ibu", "id_siswa", $id);
			$adm['ortu_wali']	= $this->adm_model->getDataByID("ts_ortu_wali", "id_siswa", $id);
			$adm['pend_sebelum']= $this->adm_model->getDataByID("ts_pend_sebelum", "id_siswa", $id);
			$adm['setelah']		= $this->adm_model->getDataByID("ts_setelah", "id_siswa", $id);
			$adm['tmp_tinggal']	= $this->adm_model->getDataByID("ts_tmp_tinggal", "id_siswa", $id);
			
			$this->load->view('adm/f_buku_induk', $adm);
		} else if ($ke == "act_edt") {
			//validasi form
			$this->form_validation->set_rules('nm_lkp', 'Nama', 'trim|required|strip_tags|xss_clean');
				
			if ($this->form_validation->run() == TRUE) {
				
				if ($this->upload->do_upload('foto')) {
					$up_data	 	= $this->upload->data();
					@unlink('./upload/foto_siswa/'.$this->input->post('file_foto').'');
					$this->db->query("UPDATE ts_data_siswa SET foto = '".$up_data['file_name']."' WHERE id = '".$this->input->post('id')."'");
				}				
				
				$this->db->query("UPDATE ts_data_siswa SET nama = '".
						strtoupper($this->input->post('nm_lkp'))."', nama_pgl = '".$this->input->post('nm_pggl')."', nis = '".
						$this->input->post('no_induk')."', nisn = '".$this->input->post('nisn')."', jk = '".
						$this->input->post('jk')."', tmp_lahir = '".$this->input->post('tmp_lahir')."', tgl_lahir = '".
						$this->input->post('tgl_lahir')."', umur = '".$this->input->post('umur')."', agama = '".
						$this->input->post('agama')."', warga_negara = '".$this->input->post('wn')."', anak_ke = '".
						$this->input->post('anak_ke')."', sdr_kandung = '".$this->input->post('sdr_kandung')."', sdr_tiri = '".
						$this->input->post('sdr_tiri')."', sdr_angkat = '".$this->input->post('sdr_angkat')."', stat_anak = '".
						$this->input->post('stat_anak')."', bahasa = '".$this->input->post('bahasa')."', stat_aktif = '".$this->input->post('stat_aktif')."' WHERE id = '".$this->input->post('id')."'");
				$this->db->query("UPDATE tl_siswa_kelas SET jk = '".$this->input->post('jk')."', agama = '".$this->input->post('agama')."' WHERE id_siswa = '".$this->input->post('id')."'");
				
					$this->db->query("UPDATE ts_gemar SET seni = '".
						$this->input->post('seni')."', olahraga = '".$this->input->post('olahraga')."', organisasi = '".
						$this->input->post('organisasi')."', lain = '".$this->input->post('lain')."' WHERE id_siswa = '".$this->input->post('id')."'");
										
					$this->db->query("UPDATE ts_kembang_siswa SET bs_1 = '".
						$this->input->post('bs_1_nama')."-".$this->input->post('bs_1_th')."', bs_2 = '".
						$this->input->post('bs_2_nama')."-".$this->input->post('bs_2_th')."', bs_3 = '".
						$this->input->post('bs_3_nama')."-".$this->input->post('bs_3_th')."', tgl_tggl_sek = '".
						$this->input->post('tgl_pindah')."', alasan = '".$this->input->post('alasan_pindah_keluar')."', tamat_tgl = '".
						$this->input->post('tgl_lulus')."', ijazah_tgl = '".$this->input->post('lls_tgl_ijazah')."', ijazah_no = '".
						$this->input->post('lls_no_ijazah')."', skhu_tgl = '".$this->input->post('lls_tgl_stl')."', skhu_no = '".
						$this->input->post('lls_no_stl')."' WHERE id_siswa = '".$this->input->post('id')."'");
					
					$this->db->query("UPDATE ts_kesehatan SET gol_darah = '".
										$this->input->post('gol_darah')."', penyakit = '".$this->input->post('penyakit')."', kelainan = '".
										$this->input->post('kelainan')."', tgg_bdn = '".$this->input->post('tgg_bdn')."', brt_bdn = '".
										$this->input->post('brt_bdn')."' WHERE id_siswa = '".$this->input->post('id')."'");
										
					$this->db->query("UPDATE ts_ortu_ayah SET nama =  '".
										$this->input->post('ay_nama')."', tmp_lahir = '".$this->input->post('ay_tmp_lahir')."', tgl_lahir = '".
										$this->input->post('ay_tgl_lahir')."', agama = '".$this->input->post('ay_agama')."', kwarga = '".
										$this->input->post('ay_wn')."', pddk = '".$this->input->post('ay_pend')."', pkj = '".
										$this->input->post('ay_pkj')."', phasilan = '".$this->input->post('ay_phasilan')."', stat = '".
										$this->input->post('ay_stat')."', alamat_telp = '".$this->input->post('ay_alamat')."' WHERE id_siswa = '".$this->input->post('id')."'");
										
					$this->db->query("UPDATE ts_ortu_ibu SET nama =  '".
										$this->input->post('ib_nama')."', tmp_lahir = '".$this->input->post('ib_tmp_lahir')."', tgl_lahir = '".
										$this->input->post('ib_tgl_lahir')."', agama = '".$this->input->post('ib_agama')."', kwarga = '".
										$this->input->post('ib_wn')."', pddk = '".$this->input->post('ib_pend')."', pkj = '".
										$this->input->post('ib_pkj')."', phasilan = '".$this->input->post('ib_phasilan')."', stat = '".
										$this->input->post('ib_stat')."', alamat_telp = '".$this->input->post('ib_alamat')."' WHERE id_siswa = '".$this->input->post('id')."'");
										
					$this->db->query("UPDATE ts_ortu_wali SET nama =  '".
										$this->input->post('wa_nama')."', tmp_lahir = '".$this->input->post('wa_tmp_lahir')."', tgl_lahir = '".
										$this->input->post('wa_tgl_lahir')."', agama = '".$this->input->post('wa_agama')."', kwarga = '".
										$this->input->post('wa_wn')."', pddk = '".$this->input->post('wa_pend')."', pkj = '".
										$this->input->post('wa_pkj')."', phasilan = '".$this->input->post('wa_phasilan')."', stat = '".
										$this->input->post('wa_stat')."', alamat_telp = '".$this->input->post('wa_alamat')."' WHERE id_siswa = '".$this->input->post('id')."'");
					
					$this->db->query("UPDATE ts_pend_sebelum SET lulus_dari =  '".
										$this->input->post('asal_sklh')."', tgl_ijazah = '".$this->input->post('tgl_ijazah')."', no_ijazah = '".
										$this->input->post('no_ijazah')."', tgl_stl = '".$this->input->post('tgl_stl')."', no_stl = '".
										$this->input->post('no_stl')."', no_un_asal = '".$this->input->post('no_ujian')."', lama_bljr = '".
										$this->input->post('lama_bljr')."', status_sasal = '".$this->input->post('stat_sasal')."', pndh_dari = '".
										$this->input->post('pindah_dari')."', alasan = '".$this->input->post('alasan_pindah')."', msk_kelas = '".
										$this->input->post('msk_kelas')."', msk_tgl = '".$this->input->post('msk_tgl')."', bid_studi = '".
										$this->input->post('bid_studi')."', prodi = '".$this->input->post('prodi')."', kompetensi = '".
										$this->input->post('kompetensi')."' WHERE id_siswa = '".$this->input->post('id')."'");
					
					$this->db->query("UPDATE ts_setelah SET klh_tmp = '".
										$this->input->post('klh_tmp')."', klh_jrs = '".$this->input->post('klh_jrs')."', klh_kota = '".
										$this->input->post('klh_kota')."', krj_tgl_mulai = '".$this->input->post('krj_tgl_mulai')."', krj_namapt = '".
										$this->input->post('krj_namapt')."', krj_lembaga = '".$this->input->post('krj_lembaga')."', krj_mandiri = '".
										$this->input->post('krj_mandiri')."', krj_lainnya = '".$this->input->post('krj_lainnya')."', krj_hasil = '".
										$this->input->post('krj_hasil')."' WHERE id_siswa = '".$this->input->post('id')."'");
					
					$this->db->query("UPDATE ts_tmp_tinggal SET alamat = '".
										$this->input->post('alamat')."', no_tlp = '".$this->input->post('no_telp')."', ket_tinggal = '".
										$this->input->post('tggl_dgn')."', kos_di = '".$this->input->post('alamat_kos')."', jarak = '".
										$this->input->post('jarak')."', transport = '".$this->input->post('sarana')."' WHERE id_siswa = '".$this->input->post('id')."'");	
					
					redirect('adm/buku_induk');
				} else {
					$adm['info']			= "Nama tak boleh KOSONG gan.. ";
					$id	= $this->uri->segment(4);
					$adm['data_siswa']	= $this->adm_model->getDataByID("ts_data_siswa", "id", $id);
					$adm['gemar']		= $this->adm_model->getDataByID("ts_gemar", "id_siswa", $id);
					$adm['kembang_siswa']= $this->adm_model->getDataByID("ts_kembang_siswa", "id_siswa", $id);
					$adm['kesehatan']	= $this->adm_model->getDataByID("ts_kesehatan", "id_siswa", $id);
					$adm['ortu_ayah']	= $this->adm_model->getDataByID("ts_ortu_ayah", "id_siswa", $id);
					$adm['ortu_ibu']	= $this->adm_model->getDataByID("ts_ortu_ibu", "id_siswa", $id);
					$adm['ortu_wali']	= $this->adm_model->getDataByID("ts_ortu_wali", "id_siswa", $id);
					$adm['pend_sebelum']= $this->adm_model->getDataByID("ts_pend_sebelum", "id_siswa", $id);
					$adm['setelah']		= $this->adm_model->getDataByID("ts_setelah", "id_siswa", $id);
					$adm['tmp_tinggal']	= $this->adm_model->getDataByID("ts_tmp_tinggal", "id_siswa", $id);
							
					$this->load->view('adm/f_buku_induk', $adm);
				}
			} else {
			$this->load->view('adm/v_buku_induk', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	/* End Buku Induk */
	
	//Siswa Kelas - Untuk menampilkan data siswa berdasarkan kelas yang ada
	public function siswa_kelas() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$adm['pil_kelas']	= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id != '99'")->result();
		$id_k	= $this->uri->segment('3');
		
		if (empty($id_k)) {
			$pil_kls	= "";
		} else {
			$pil_kls	= "AND tl_siswa_kelas.kelas = '".$this->uri->segment('3')."'";
		}
		
		$q	= $this->db->query("SELECT tl_siswa_kelas.ta, ts_data_siswa.nama as nama_ssw, tl_siswa_kelas.agama, tl_siswa_kelas.jk, tl_siswa_kelas.prodi, tl_siswa_kelas.tkt, tl_kelas.nama FROM tl_siswa_kelas, tl_kelas, ts_data_siswa WHERE tl_siswa_kelas.kelas = tl_kelas.id AND tl_siswa_kelas.id_siswa = ts_data_siswa.id AND tl_siswa_kelas.ta = '".$this->session->userdata('ta')."' AND tl_siswa_kelas.kelas != '99' ".$pil_kls);
		
		$adm['siswa_kelas']	= $q->result();
		$adm['jml_siswa']	= $q->num_rows();
		
		$this->load->view('adm/t_header');
		$this->load->view('adm/v_siswa_per_kelas', $adm);
		$this->load->view('adm/t_footer');
		
	}
	//End Siswa Kelas
	
	public function alumni() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$th_a	= $this->uri->segment('3');
		//echo $th_a;
		if (empty($th_a)) {
			$ta	= "";
		} else {
			$ta	= "AND tl_siswa_kelas.ta = '".$th_a."'";
		}

		$q	= $this->db->query("SELECT tl_siswa_kelas.ta, ts_data_siswa.nama as nama_ssw, tl_siswa_kelas.agama, tl_siswa_kelas.jk, tl_siswa_kelas.prodi, tl_siswa_kelas.tkt, tl_kelas.nama FROM tl_siswa_kelas, tl_kelas, ts_data_siswa WHERE tl_siswa_kelas.kelas = tl_kelas.id AND tl_siswa_kelas.id_siswa = ts_data_siswa.id AND tl_siswa_kelas.kelas = '99' ".$ta);
		
		$adm['alumni']	= $q->result();
		$adm['jml_siswa']	= $q->num_rows();
		
		
		$this->load->view('adm/t_header');
		$this->load->view('adm/v_alumni', $adm);
		$this->load->view('adm/t_footer');
		
	}
	
	//Menu Data Guru - untuk memanajemen data guru, menginput data pendidikan dan riwayat kepegawaian
	public function guru_data() {
		if(! $this->session->userdata('validated')){
			redirect('login');
		}
		//konfigurasi upload file
		$config['upload_path'] 		= 'upload/foto_guru';
		$config['allowed_types'] 	= 'png|jpg|gif|bmp';
		$config['max_size']			= '3000';
		$config['max_width']  		= '3000';
		$config['max_height']  		= '3000';
		
		$this->load->library('upload', $config);
			
		$ke	= $this->uri->segment(3);
				
		$config['base_url'] 	= base_url().'index.php/adm/guru_data/hal';
		$config['total_rows'] 	= $this->db->query("SELECT * FROM tg_data")->num_rows();
		$config['per_page'] 	= 15;
		$config['uri_segment'] 	= 4;
		$config['first_link'] 	= "Awal";		
		$config['last_link'] 	= "Akhir";
		$config['cur_tag_open'] = '<div class="p_aktif">';
		$config['cur_tag_close']= '</div>';
		$config['num_tag_open'] = '<div class="p">';
		$config['num_tag_close']= '</div>';
		
		$this->pagination->initialize($config); 		
		
		$awal	= $this->uri->segment(4); if (empty($awal)) { $awal = 0; } { $awal = $awal; }
		$akhir	= $config['per_page'];
		
		$adm['datgur'] 		= $this->adm_model->getLimit('tg_data', $awal, $akhir);
		$adm['mapel']		= $this->adm_model->getAll('tl_mapel');
		$adm['info']		= "";

		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['datgur'] = $this->db->query("SELECT * FROM tg_data WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_guru_data', $adm);
		} else if ($ke == "hps") {
			$id_guru			= $this->uri->segment(4);
			$this->adm_model->delData('tg_data', 'id', $id_guru);
			$adm['datgur'] 		= $this->adm_model->getLimit('tg_data', $awal, $akhir);
			$this->load->view('adm/v_guru_data', $adm);
		} else if ($ke == "add") {	
			$this->load->view('adm/f_guru_data', $adm);
		} else if ($ke == "act_add") {
		
			if ($this->upload->do_upload('foto')) {
					$up_data	 	= $this->upload->data();
					
			$this->db->query("INSERT INTO tg_data VALUES ('', '".strtoupper($this->input->post('nama'))."', '".
				$this->input->post('nip')."', '".$this->input->post('nuptk')."', '".
				$this->input->post('nrg')."', '".$this->input->post('npwp')."', '".
				$this->input->post('tmp_lahir')."', '".$this->input->post('tgl_lahir')."', '".
				$this->input->post('jk')."', '".$this->input->post('panggol')."', '".
				$this->input->post('stat')."', '".$this->input->post('gol_drh')."', '".
				$this->input->post('agama')."', '".$this->input->post('nope')."', '".
				$this->input->post('alamat')."', '".$this->input->post('klg_ay')."', '".
				$this->input->post('klg_ibu')."', '".$this->input->post('klg_suami_istri')."', '".
				$this->input->post('klg_anak')."', '".$this->input->post('klg_nope_isuam')."', '".
				$this->input->post('mapel_1')."', '".$this->input->post('mapel_2')."', '".
				$this->input->post('mapel_3')."', '".$this->input->post('mapel_4')."', '".
				$this->input->post('jml_jam')."', '".$this->input->post('tgs_1')."', '".
				$this->input->post('tgs_2')."', '".$this->input->post('tgs_3')."', '".
				$this->input->post('tgs_4')."', '".$up_data['file_name']."', 'Aktif')");
										
										
				redirect('adm/guru_data');
			} else {
				$adm['info']			= "Fotonya masih KOSONG gan.. ";				
				$this->load->view('adm/f_guru_data', $adm);
			}
		} else if ($ke == "edt") {
			$adm['datgur'] = $this->adm_model->getDataByID('tg_data', 'id', $this->uri->segment(4));
			$this->load->view('adm/f_guru_data', $adm);
		} else if ($ke == "act_edt") {
			
			if ($this->upload->do_upload('foto')) {
					$up_data	 	= $this->upload->data();
					@unlink('./upload/foto_guru/'.$this->input->post('file_foto').'');
					$this->db->query("UPDATE tg_data SET foto = '".$up_data['file_name']."' WHERE id = '".$this->input->post('id')."'");
			}		
			
			$this->db->query("UPDATE tg_data SET nama ='".strtoupper($this->input->post('nama'))."', nip = '".
				$this->input->post('nip')."', nuptk = '".
				$this->input->post('nuptk')."', nrg = '".
				$this->input->post('nrg')."', npwp = '".
				$this->input->post('npwp')."', tmp_lhr = '".
				$this->input->post('tmp_lhr')."', tgl_lhr = '".
				$this->input->post('tgl_lhr')."', jk = '".
				$this->input->post('jk')."', panggol = '".
				$this->input->post('panggol')."', stat =  '".
				$this->input->post('stat')."', gol_drh = '".
				$this->input->post('gol_drh')."', agama = '".
				$this->input->post('agama')."', nope = '".
				$this->input->post('nope')."', alamat = '".
				$this->input->post('alamat')."', klg_ay = '".
				$this->input->post('klg_ay')."', klg_ibu = '".
				$this->input->post('klg_ibu')."', klg_suami_istri = '".
				$this->input->post('klg_suami_istri')."', klg_anak = '".
				$this->input->post('klg_anak')."', klg_nope_isuam = '".
				$this->input->post('klg_nope_isuam')."', mapel_1 = '".
				$this->input->post('mapel_1')."', mapel_2 = '".
				$this->input->post('mapel_2')."', mapel_3 = '".
				$this->input->post('mapel_3')."', mapel_4 = '".
				$this->input->post('mapel_4')."', jml_jam = '".
				$this->input->post('jml_jam')."', tgs_1 = '".
				$this->input->post('tgs_1')."', tgs_2 = '".
				$this->input->post('tgs_2')."', tgs_3 = '".
				$this->input->post('tgs_3')."', tgs_4 = '".
				$this->input->post('tgs_4')."' WHERE id = '".
				$this->input->post('id')."'");
				
			redirect('adm/guru_data');
		} else {
			$this->load->view('adm/v_guru_data', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	//End Data GUru
	
	//Guru DUK - Untuk menampilkan dan manajemen data DUK Pegawai
	public function guru_duk() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke		= $this->uri->segment(3);
		$adm['duk'] 		= $this->db->query("SELECT * FROM tg_duk ORDER BY gol DESC, gol_tmt ASC ")->result();
		$adm['info']	 	= "";
		
		$this->load->view('adm/t_header');	
		
		if ($ke == "pilih_pegawai") {
			$adm['data_pegawai'] 		= $this->db->query("SELECT id, nama FROM tg_data")->result();
			$this->load->view('adm/f_guru_duk_pilih_pegawai.php', $adm);
			
		} else if ($ke == "add") {
			$id_pegawai	= $this->uri->segment(4);
			$q_cek_pgw	= $this->db->query("SELECT * FROM tg_duk WHERE id_pegawe = '".$id_pegawai."'");
			$cek_pgw_jml= $q_cek_pgw->num_rows();
			$cek_pgw_hsl= $q_cek_pgw->row();
			
			if ($cek_pgw_jml == 0) {
				$adm['detil_pgw'] 		= $this->db->query("SELECT id, nama, nip, round((datediff(NOW(), tgl_lhr)/365)) as usia FROM tg_data WHERE id = '".$id_pegawai."'")->row();
				$adm['pend_pgw'] 		= $this->db->query("SELECT * FROM tg_pend WHERE id_guru = '".$id_pegawai."' ORDER BY id DESC LIMIT 1")->row();
				$adm['gol_pgw'] 		= $this->db->query("SELECT *, ((YEAR(now())-YEAR(tmt))+mk_th) as mker_th,  ((YEAR(now())-YEAR(tmt))+mk_bl) as mker_bl  FROM tg_kepeg WHERE id_guru = '".$id_pegawai."' ORDER BY id DESC LIMIT 1")->row();
				$this->load->view('adm/f_guru_duk.php', $adm);
			} else {				
				redirect('adm/guru_duk/edt/'.$cek_pgw_hsl->no.'/'.$id_pegawai);
			}
		} else if ($ke == "edt") {
			$adm['duk_pgw']	= $this->db->query("SELECT * FROM tg_duk WHERE no = '".$this->uri->segment(4)."' AND id_pegawe = '".$this->uri->segment(5)."'")->row();
			$this->load->view('adm/f_guru_duk.php', $adm);
		} else if ($ke == "act_add") {
		$this->db->query("INSERT INTO tg_duk VALUES ('', '".$this->input->post('id')."', '".$this->input->post('nama')."', '".
								$this->input->post('nip')."', '".$this->input->post('gol')."', '".
								$this->input->post('gol_tmt')."', '".$this->input->post('angka_kredit')."', '".
								$this->input->post('jab_nama')."', '".$this->input->post('jab_tmt')."', '', '".
								$this->input->post('mk_th_terakhir')."', '".$this->input->post('mk_bl_terakhir')."', '".
								$this->input->post('latjab_nama')."', '".$this->input->post('latjab_blth')."', '".
								$this->input->post('latjab_jam')."', '".$this->input->post('prodi')."', '".
								$this->input->post('lembaga')."', '".$this->input->post('thn_lulus')."', '".
								$this->input->post('tkt')."', '".$this->input->post('cat')."', '".
								$this->input->post('ket')."')");
			redirect('adm/guru_duk');
		} else if ($ke == "act_edt") {
		$this->db->query("UPDATE tg_duk SET nama =  '".$this->input->post('nama')."', nip = '".
								$this->input->post('nip')."', gol = '".$this->input->post('gol')."', gol_tmt = '".
								$this->input->post('gol_tmt')."', angka_kredit = '".$this->input->post('angka_kredit')."', jab_nama = '".
								$this->input->post('jab_nama')."', jab_tmt = '".$this->input->post('jab_tmt')."', mk_th_terakhir =  '".
								$this->input->post('mk_th_terakhir')."', mk_bl_terakhir = '".$this->input->post('mk_bl_terakhir')."', latjab_nama = '".
								$this->input->post('latjab_nama')."', latjab_blth = '".$this->input->post('latjab_blth')."', latjab_jam = '".
								$this->input->post('latjab_jam')."', prodi = '".$this->input->post('prodi')."', lembaga = '".
								$this->input->post('lembaga')."', thn_lulus = '".$this->input->post('thn_lulus')."', tkt = '".
								$this->input->post('tkt')."', cat = '".$this->input->post('cat')."', ket = '".
								$this->input->post('ket')."' WHERE no = '".$this->uri->segment(4)."'");
			redirect('adm/guru_duk');
		} else {		
			$this->load->view('adm/v_guru_duk.php', $adm);
		}
		
		
		$this->load->view('adm/t_footer');
	}
	//End Guru DUK
	
	
	
	public function guru_pend() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		//$id_guru = 
		$this->load->view('adm/t_header');		
		$ke		= $this->uri->segment(3);
		
		if ($ke == "add") {
			$id_guru = $this->uri->segment(4);
			$adm['guru_pend']	= $this->db->query("SELECT * FROM tg_pend WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_pend', $adm);
		} else if ($ke == "edt") {
			$adm['pend_detil'] = $this->adm_model->getDataByID('tg_pend', 'id', $this->uri->segment(5));
			$id_guru = $this->uri->segment(4);
			$adm['guru_pend']	= $this->db->query("SELECT * FROM tg_pend WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_pend', $adm);
		} else if ($ke == "act_add") {
			$id_guru	= $this->uri->segment(4);
			
			$this->db->query("INSERT INTO tg_pend VALUES ('', '".$id_guru."', '".$this->input->post('nama')."', '".$this->input->post('kota')."', '".$this->input->post('th_lulus')."', '".$this->input->post('fak')."', '".$this->input->post('jur')."', '".$this->input->post('jenjang')."')");
			$adm['guru_pend']	= $this->db->query("SELECT * FROM tg_pend WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_pend', $adm);
		} else if ($ke == "act_edt") {
			$id_guru	= $this->uri->segment(4);
			
			$this->db->query("UPDATE tg_pend SET id_guru = '".$id_guru."', nama = '".$this->input->post('nama')."', kota = '".$this->input->post('kota')."', th_lulus = '".$this->input->post('th_lulus')."', fak = '".$this->input->post('fak')."', jur = '".$this->input->post('jur')."', jenjang = '".$this->input->post('jenjang')."' WHERE id = '".$this->input->post('id')."'");
			
			redirect('adm/guru_pend/add/'.$id_guru);
		} else if ($ke == "hps") {
			$id_guru	= $this->uri->segment(4);
			$id_data	= $this->uri->segment(5);
			
			$this->adm_model->delData('tg_pend', 'id', $id_data);
			redirect('adm/guru_pend/add/'.$id_guru);
		} else {
			redirect('adm/guru_data');
		}
		$this->load->view('adm/t_footer');
	}
	
	public function guru_kepeg() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		//$id_guru = 
		$this->load->view('adm/t_header');		
		$ke		= $this->uri->segment(3);
		$adm['info']	= "";
		
		
		if ($ke == "add") {
			$id_guru = $this->uri->segment(4);
			$adm['guru_kepeg']	= $this->db->query("SELECT * FROM tg_kepeg WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_kepeg', $adm);
		} else if ($ke == "edt") {
			$adm['kepeg_detil'] = $this->adm_model->getDataByID('tg_kepeg', 'id', $this->uri->segment(5));
			$id_guru = $this->uri->segment(4);
			$adm['guru_kepeg']	= $this->db->query("SELECT * FROM tg_kepeg WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_kepeg', $adm);
		} else if ($ke == "act_add") {
			$id_guru	= $this->uri->segment(4);
			
			$this->db->query("INSERT INTO tg_kepeg VALUES ('', '".$id_guru."', '".$this->input->post('tipe')."', '".$this->input->post('sk_no')."', '".$this->input->post('sk_tgl')."', '".$this->input->post('tmt')."', '".$this->input->post('mk_th')."', '".$this->input->post('mk_bl')."', '".$this->input->post('panggol')."', '".$this->input->post('gapok')."', '".$this->input->post('di')."', '".$this->input->post('sebagai')."')");
			
			$adm['guru_kepeg']	= $this->db->query("SELECT * FROM tg_kepeg WHERE id_guru = '".$id_guru."'")->result();
			$this->load->view('adm/f_guru_kepeg', $adm);
		} else if ($ke == "act_edt") {
			$id_guru	= $this->uri->segment(4);
			
			$this->db->query("UPDATE tg_kepeg SET tipe =  '".$this->input->post('tipe')."', sk_no = '".$this->input->post('sk_no')."', sk_tgl = '".$this->input->post('sk_tgl')."', tmt = '".$this->input->post('tmt')."', mk_th = '".$this->input->post('mk_th')."', mk_bl = '".$this->input->post('mk_bl')."', panggol = '".$this->input->post('panggol')."', gapok = '".$this->input->post('gapok')."', di = '".$this->input->post('di')."', sbg = '".$this->input->post('sebagai')."' WHERE id = '".$this->input->post('id')."'");
			
			redirect('adm/guru_kepeg/add/'.$id_guru);
		} else if ($ke == "hps") {
			$id_guru	= $this->uri->segment(4);
			$id_data	= $this->uri->segment(5);
			
			$this->adm_model->delData('tg_kepeg', 'id', $id_data);
			redirect('adm/guru_kepeg/add/'.$id_guru);
		} else {
			redirect('adm/guru_data');
		}
		$this->load->view('adm/t_footer');
	}
	
	
	/*Akhir di Menu Utama > Guru dan TU */
	
	
	
	
	
	
	
	public function tanah() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		
		$adm['info']		= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['tanah'] = $this->db->query("SELECT * FROM ti_tanah WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_tanah', $adm);
		} else if ($ke == "hps") {
			$id_tnh				= $this->uri->segment(4);
			$this->adm_model->delData('ti_tanah', 'id_tnh', $id_tnh);
			$adm['tanah'] 		= $this->adm_model->getAll('ti_tanah');
			$this->load->view('adm/v_tanah', $adm);
		} else if ($ke == "add") {	
			$this->load->view('adm/f_tanah', $adm);
		} else if ($ke == "act_add") {
			
			$q_cek_eksis_nama	= $this->db->query("SELECT nama FROM ti_tanah WHERE nama='".trim($this->input->post('nama'))."'")->num_rows();
			
			if ($q_cek_eksis_nama == 0) {
				$q_kd = $this->db->query("SELECT MAX(RIGHT(kd_brg, 3)) AS kd FROM ti_tanah")->row();

				if (empty($q_kd)) {
					$id_akhir	= "TN-".str_pad(1, 3, '0', STR_PAD_LEFT);
				} else {
					$id_akhir	= "TN-".str_pad((intval(($q_kd->kd))+1), 3, '0', STR_PAD_LEFT);
				}
				
			$this->db->query("INSERT INTO ti_tanah VALUES ('', '".$id_akhir."', '1', '".
				$this->input->post('nama')."', '".$this->input->post('luas')."', '".
				$this->input->post('uk_bangunan')."', '".$this->input->post('uk_kosong')."', '".
				$this->input->post('letak')."', '".$this->input->post('batas_u')."', '".
				$this->input->post('batas_t')."', '".$this->input->post('batas_s')."', '".
				$this->input->post('batas_b')."', '".$this->input->post('asal_dpt')."', '".
				$this->input->post('dana_dari')."', '".$this->input->post('stfk_hak')."', '".
				$this->input->post('stfk_no')."', '".$this->input->post('stfk_tgl')."', '".
				$this->input->post('njop_m2')."', '".$this->input->post('tgl_dapat')."', '".
				$this->input->post('nilai_aset')."', NOW(), 'admin')");
			
			
			} else {
				$q_kode_brg	= $this->db->query("SELECT kd_brg, nama FROM ti_tanah WHERE nama='".trim($this->input->post('nama'))."'")->row();
				$q_id_akhir	= $this->db->query("SELECT no_aset FROM ti_tanah WHERE nama='".trim($this->input->post('nama'))."' AND kd_brg = '".$q_kode_brg->kd_brg."' ORDER BY no_aset DESC LIMIT 1")->row();
			
				$kode		= $q_kode_brg->kd_brg;
				$nama		= $q_kode_brg->nama;
				$no_aset	= (intval(($q_id_akhir->no_aset))+1); //
							
			
			$this->db->query("INSERT INTO ti_tanah VALUES ('', '".$kode."', '".$no_aset."', '".
				$nama."', '".$this->input->post('luas')."', '".
				$this->input->post('uk_bangunan')."', '".$this->input->post('uk_kosong')."', '".
				$this->input->post('letak')."', '".$this->input->post('batas_u')."', '".
				$this->input->post('batas_t')."', '".$this->input->post('batas_s')."', '".
				$this->input->post('batas_b')."', '".$this->input->post('asal_dpt')."', '".
				$this->input->post('dana_dari')."', '".$this->input->post('stfk_hak')."', '".
				$this->input->post('stfk_no')."', '".$this->input->post('stfk_tgl')."', '".
				$this->input->post('njop_m2')."', '".$this->input->post('tgl_dapat')."', '".
				$this->input->post('nilai_aset')."', NOW(), 'admin')");
			}
			redirect('adm/tanah');		
		} else if ($ke == "edt") {
			$adm['tanah'] = $this->adm_model->getDataByID('ti_tanah', 'id_tnh', $this->uri->segment(4));
			$this->load->view('adm/f_tanah', $adm);
		} else if ($ke == "act_edt") {
			
			$this->db->query("UPDATE ti_tanah SET luas = '".
				$this->input->post('luas')."', uk_bangunan = '".
				$this->input->post('uk_bangunan')."', uk_kosong = '".$this->input->post('uk_kosong')."', letak = '".
				$this->input->post('letak')."', bts_u = '".$this->input->post('batas_u')."', bts_t = '".
				$this->input->post('batas_t')."', bts_s = '".$this->input->post('batas_s')."', bts_b = '".
				$this->input->post('batas_b')."', asal_dpt = '".$this->input->post('asal_dpt')."', dana_dari = '".
				$this->input->post('dana_dari')."', stfk_hak = '".$this->input->post('stfk_hak')."', stfk_no = '".
				$this->input->post('stfk_no')."', stfk_tgl = '".$this->input->post('stfk_tgl')."', njop_m2 = '".
				$this->input->post('njop_m2')."', tgl_dapat = '".$this->input->post('tgl_dapat')."', nilai_aset = '".
				$this->input->post('nilai_aset')."' WHERE id_tnh = '".$this->input->post('id')."'");

			redirect('adm/tanah');
		} else {
			$adm['tanah'] 		= $this->adm_model->getAll('ti_tanah');
			$this->load->view('adm/v_tanah', $adm);
		}
		$this->load->view('adm/t_footer');
	}

	public function g_bangunan() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		
		$adm['info']		= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['bgn'] = $this->db->query("SELECT * FROM ti_bangunan WHERE nama LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_g_bangunan', $adm);
		} else if ($ke == "hps") {
			$id_bgn				= $this->uri->segment(4);
			$this->adm_model->delData('ti_bangunan', 'id_bgn', $id_bgn);
			$adm['bgn'] 		= $this->adm_model->getAll('ti_bangunan');
			$this->load->view('adm/v_g_bangunan', $adm);
		} else if ($ke == "add") {	
			$this->load->view('adm/f_g_bangunan', $adm);
		} else if ($ke == "act_add") {
			
			$q_cek_eksis_nama	= $this->db->query("SELECT nama FROM ti_bangunan WHERE nama='".trim($this->input->post('nama'))."'")->num_rows();
			
			if ($q_cek_eksis_nama == 0) {
				$q_kd = $this->db->query("SELECT MAX(RIGHT(kd_brg, 3)) AS kd FROM ti_bangunan")->row();

				if (empty($q_kd)) {
					$id_akhir	= "BG-".str_pad(1, 3, '0', STR_PAD_LEFT);
				} else {
					$id_akhir	= "BG-".str_pad((intval(($q_kd->kd))+1), 3, '0', STR_PAD_LEFT);
				}
	
			$this->db->query("INSERT INTO ti_bangunan VALUES ('', '".$id_akhir."', '1', '".
				$this->input->post('nama')."', '".$this->input->post('luas')."', '".
				$this->input->post('jml_lt')."', '".$this->input->post('thn_sls')."', '".
				$this->input->post('thn_pake')."', '".$this->input->post('no_imb')."', '".
				$this->input->post('tgl_imb')."', '".$this->input->post('alamat')."', '".
				$this->input->post('asal')."', '".$this->input->post('sumber_dana')."', '".
				$this->input->post('harga')."', '".$this->input->post('rekanan')."', '".
				$this->input->post('no_bukti')."', '".$this->input->post('tgl_buku')."', '".
				$this->input->post('kondisi')."', '".$this->input->post('status')."', '".
				$this->input->post('lantai')."', '".$this->input->post('tembok')."', '".
				$this->input->post('atap')."', NOW(), 'admin')");
			
			
			} else {
				$q_kode_brg	= $this->db->query("SELECT kd_brg, nama FROM ti_bangunan WHERE nama='".trim($this->input->post('nama'))."'")->row();
				$q_id_akhir	= $this->db->query("SELECT no_aset FROM ti_bangunan WHERE nama='".trim($this->input->post('nama'))."' AND kd_brg = '".$q_kode_brg->kd_brg."' ORDER BY no_aset DESC LIMIT 1")->row();
			
				$kode		= $q_kode_brg->kd_brg;
				$nama		= $q_kode_brg->nama;
				$no_aset	= (intval(($q_id_akhir->no_aset))+1); //
							
			
			$this->db->query("INSERT INTO ti_bangunan VALUES ('', '".$kode."', '".$no_aset."', '".
				$nama."',  '".$this->input->post('luas')."', '".
				$this->input->post('jml_lt')."', '".$this->input->post('thn_sls')."', '".
				$this->input->post('thn_pake')."', '".$this->input->post('no_imb')."', '".
				$this->input->post('tgl_imb')."', '".$this->input->post('alamat')."', '".
				$this->input->post('asal')."', '".$this->input->post('sumber_dana')."', '".
				$this->input->post('harga')."', '".$this->input->post('rekanan')."', '".
				$this->input->post('no_bukti')."', '".$this->input->post('tgl_buku')."', '".
				$this->input->post('kondisi')."', '".$this->input->post('status')."', '".
				$this->input->post('lantai')."', '".$this->input->post('tembok')."', '".
				$this->input->post('atap')."', NOW(), 'admin')");
			}
			redirect('adm/g_bangunan');		
		} else if ($ke == "edt") {
			$adm['bgn'] = $this->adm_model->getDataByID('ti_bangunan', 'id_bgn', $this->uri->segment(4));
			$this->load->view('adm/f_g_bangunan', $adm);
		} else if ($ke == "act_edt") {

			$this->db->query("UPDATE ti_bangunan SET nama = '".$this->input->post('nama')."', luas = '".
				$this->input->post('luas')."', jml_lt = '".
				$this->input->post('jml_lt')."', thn_sls = '".$this->input->post('thn_sls')."', thn_pake = '".
				$this->input->post('thn_pake')."', no_imb = '".$this->input->post('no_imb')."', tgl_imb = '".
				$this->input->post('tgl_imb')."', alamat = '".$this->input->post('alamat')."', asal = '".
				$this->input->post('asal')."', sumber_dana = '".$this->input->post('sumber_dana')."', harga = '".
				$this->input->post('harga')."', rekanan = '".$this->input->post('rekanan')."', no_bukti = '".
				$this->input->post('no_bukti')."', tgl_buku = '".$this->input->post('tgl_buku')."', kondisi = '".
				$this->input->post('kondisi')."', status = '".$this->input->post('status')."', lantai = '".
				$this->input->post('lantai')."', tembok = '".$this->input->post('tembok')."', atap = '".
				$this->input->post('atap')."' WHERE id_bgn = '".$this->input->post('id')."'");

			$adm['bgn'] 		= $this->adm_model->getAll('ti_bangunan');
			$this->load->view('adm/v_g_bangunan', $adm);
		} else {
			$adm['bgn'] 		= $this->adm_model->getAll('ti_bangunan');
			$this->load->view('adm/v_g_bangunan', $adm);
		}
		$this->load->view('adm/t_footer');
	}
	
	public function no_tanah_bgn() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		
		$adm['info']		= "";
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['inv'] = $this->db->query("SELECT * FROM ti_invent WHERE nama_brg LIKE '%".$this->input->post('q')."%'")->result();
			$this->load->view('adm/v_no_tanah_bgn', $adm);
		} else if ($ke == "hps") {
			$id_inv				= $this->uri->segment(4);
			$this->adm_model->delData('ti_invent', 'id_brg', $id_inv);
			$adm['inv'] 		= $this->adm_model->getAll('ti_invent ORDER BY kd_brg, no_aset');
			$this->load->view('adm/v_no_tanah_bgn', $adm);
		} else if ($ke == "add") {	
			$adm['inv'] 		= $this->adm_model->getAll('ti_invent ORDER BY kd_brg, no_aset');
			$this->load->view('adm/f_no_tanah_bgn', $adm);
		} else if ($ke == "act_add") {
			
			$q_cek_eksis_nama	= $this->db->query("SELECT nama_brg FROM ti_invent WHERE nama_brg='".trim($this->input->post('nama_brg'))."'")->num_rows();
			
			if (empty($q_cek_eksis_nama)) {
				$q_kd = $this->db->query("SELECT MAX(RIGHT(kd_brg, 8)) AS kd FROM ti_invent WHERE LEFT(kd_brg, 2) = '".$this->input->post('tipe_inv')."'")->row();

				if (empty($q_kd)) {
					$id_akhir	= $this->input->post('tipe_inv')."-".str_pad(1, 8, '0', STR_PAD_LEFT);
				} else {
					$id_akhir	= $this->input->post('tipe_inv')."-".str_pad((intval(($q_kd->kd))+1), 8, '0', STR_PAD_LEFT);
				}
				
			$this->db->query("INSERT INTO ti_invent VALUES ('', '".$id_akhir."', '1', '".
				$this->input->post('nama_brg')."', '".$this->input->post('satuan')."', '".
				$this->input->post('tgl_dapat')."', '".$this->input->post('letak')."', '".
				$this->input->post('kondisi')."', '".$this->input->post('penggunaan')."', '".
				$this->input->post('asal')."', '".$this->input->post('harga')."', '".
				$this->input->post('merk')."', '".$this->input->post('tipe')."', '".
				$this->input->post('rekanan')."', '".$this->input->post('no_bukti')."', '".
				$this->input->post('ket')."', NOW(), 'admin')");
			
			
			} else {
				$q_kode_brg	= $this->db->query("SELECT kd_brg, nama_brg FROM ti_invent WHERE nama_brg='".trim($this->input->post('nama_brg'))."'")->row();
				
				$q_id_akhir	= $this->db->query("SELECT no_aset FROM ti_invent WHERE nama_brg='".trim($this->input->post('nama_brg'))."' AND kd_brg = '".$q_kode_brg->kd_brg."' ORDER BY no_aset DESC LIMIT 1")->row();
				
				$kode		= $q_kode_brg->kd_brg;
				$nama		= $q_kode_brg->nama_brg;
				$no_aset	= (intval(($q_id_akhir->no_aset))+1); //
						
			$this->db->query("INSERT INTO ti_invent VALUES ('', '".$kode."', '".$no_aset."', '".
				$nama."',  '".$this->input->post('satuan')."', '".
				$this->input->post('tgl_dapat')."', '".$this->input->post('letak')."', '".
				$this->input->post('kondisi')."', '".$this->input->post('penggunaan')."', '".
				$this->input->post('asal')."', '".$this->input->post('harga')."', '".
				$this->input->post('merk')."', '".$this->input->post('tipe')."', '".
				$this->input->post('rekanan')."', '".$this->input->post('no_bukti')."', '".
				$this->input->post('ket')."', NOW(), 'admin')");
			}
			redirect('adm/no_tanah_bgn');
		} else if ($ke == "edt") {
			$adm['ruang']		= $this->adm_model->getAll('ti_ruang');
			$adm['inv'] = $this->adm_model->getDataByID('ti_invent', 'id_brg', $this->uri->segment(4));
			$this->load->view('adm/f_no_tanah_bgn', $adm);
		} else if ($ke == "act_edt") {

			$this->db->query("UPDATE ti_invent SET nama_brg = '".$this->input->post('nama_brg')."', satuan = '".
				$this->input->post('satuan')."', tgl_dapat = '".
				$this->input->post('tgl_dapat')."', letak = '".$this->input->post('letak')."', kondisi = '".
				$this->input->post('kondisi')."', penggunaan = '".$this->input->post('penggunaan')."', asal = '".
				$this->input->post('asal')."', harga = '".$this->input->post('harga')."', merk = '".
				$this->input->post('merk')."', tipe = '".$this->input->post('tipe')."', rekanan = '".
				$this->input->post('rekanan')."', no_bukti = '".$this->input->post('no_bukti')."', ket = '".
				$this->input->post('ket')."' WHERE id_brg = '".$this->input->post('id')."'");

			redirect('adm/no_tanah_bgn');
		} else {
			$adm['inv'] 		= $this->adm_model->getAll('ti_invent ORDER BY kd_brg, no_aset');
			$this->load->view('adm/v_no_tanah_bgn', $adm);
		}
		$this->load->view('adm/t_footer');
	}

	

	public function dir() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$ke	= $this->uri->segment(3);
		
		
		$adm['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_invent.letak, ti_ruang.nama FROM ti_invent LEFT JOIN ti_ruang ON ti_invent.letak = ti_ruang.id ORDER BY ti_invent.id_brg")->result();
		$adm['info']		= "";
		$adm['ruang']		= $this->db->query("SELECT id, nama FROM ti_ruang")->result();
		
		
		$this->load->view('adm/t_header');
		
		if ($ke == "cari") {
			$adm['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_invent.letak, ti_ruang.nama FROM ti_invent LEFT JOIN ti_ruang ON ti_invent.letak = ti_ruang.id WHERE ti_invent.nama_brg LIKE '%".$this->input->post('q')."%' ORDER BY ti_invent.id_brg")->result();
			$this->load->view('adm/v_dir', $adm);
		} else if ($ke == "pindah_dir") {
			$id_brg	= $this->uri->segment(4);
			$adm['det_dir']	= $this->db->query("SELECT ti_invent.nama_brg, ti_invent.id_brg, ti_invent.letak, ti_ruang.nama FROM ti_invent LEFT JOIN ti_ruang ON ti_invent.letak = ti_ruang.id WHERE ti_invent.id_brg = ".$id_brg."")->row();
			$adm['ruang'] = $this->adm_model->getAll('ti_ruang');
			$this->load->view('adm/f_pindah_dir', $adm);
		} else if ($ke == "act_pindah_dir") {
			$q_update	= $this->db->query("UPDATE ti_invent SET letak = '".$this->input->post('ruang_baru')."' WHERE id_brg = '".$this->uri->segment(4)."'");
			redirect('adm/dir');
		} else if ($ke == "det") {
			$id_ruang	= $this->uri->segment(4);
			if (empty($id_ruang)) {
				$adm['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_ruang.nama FROM ti_invent, ti_ruang WHERE ti_invent.letak = ti_ruang.id  ORDER BY ti_invent.kd_brg ASC")->result();
			} else {
				$adm['dir'] 		= $this->db->query("SELECT ti_invent.id_brg, ti_invent.kd_brg, ti_invent.no_aset, ti_invent.nama_brg, ti_ruang.nama FROM ti_invent, ti_ruang WHERE ti_invent.letak = '".$id_ruang."' AND ti_invent.letak = ti_ruang.id  ORDER BY ti_invent.kd_brg ASC")->result();			
			}
			$this->load->view('adm/v_dir', $adm);
		} else {
			$this->load->view('adm/v_dir', $adm);
		}
		
		$this->load->view('adm/t_footer');
	}
	
	
	
	
	public function pindah_kelas() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$this->load->view('adm/t_header');
		
		$ke				= $this->uri->segment(3);
		$ta_sekarang 	= $this->session->userdata('ta');
		
		//$adm['pindah_kelas'] 		= $this->db->query("SELECT ts_data_siswa.*, tl_siswa_kelas.*, tl_kelas.nama AS kelasnya, tl_kelas.prodi FROM ts_data_siswa, tl_siswa_kelas, tl_kelas WHERE ts_data_siswa.id = tl_siswa_kelas.id_siswa AND tl_kelas.id = tl_siswa_kelas.kelas AND tl_siswa_kelas.ta =  '".$ta_sekarang."'")->result();
		
		$adm['pindah_kelas'] 		= $this->db->query("SELECT ts_data_siswa.id, ts_data_siswa.nis, ts_data_siswa.stat_aktif, ts_data_siswa.nama, ts_data_siswa.jk, ts_data_siswa.agama, tl_siswa_kelas.kelas, tl_kelas.nama AS kelasnya, tl_kelas.prodi, tl_kelas.tkt, tl_siswa_kelas.ta
		FROM (ts_data_siswa LEFT JOIN tl_siswa_kelas ON ts_data_siswa.id=tl_siswa_kelas.id_siswa) LEFT JOIN tl_kelas ON tl_siswa_kelas.kelas=tl_kelas.id WHERE (tl_siswa_kelas.kelas != '99' OR ts_data_siswa.stat_aktif = 'Aktif') ORDER BY tl_siswa_kelas.ta DESC")->result();
		
		
		$adm['kelas']		= $this->db->query("SELECT * FROM tl_kelas WHERE id != 99")->result();
		
		$adm['info']		= "";
		
		if ($ke == "cari") {
			$adm['pindah_kelas'] 		= $this->db->query("SELECT ts_data_siswa.id, ts_data_siswa.nis, ts_data_siswa.stat_aktif, ts_data_siswa.nama, ts_data_siswa.jk, ts_data_siswa.agama, tl_siswa_kelas.kelas, tl_kelas.nama AS kelasnya, tl_kelas.prodi, tl_kelas.tkt, tl_siswa_kelas.ta
		FROM (ts_data_siswa LEFT JOIN tl_siswa_kelas ON ts_data_siswa.id=tl_siswa_kelas.id_siswa) LEFT JOIN tl_kelas ON tl_siswa_kelas.kelas=tl_kelas.id WHERE (tl_siswa_kelas.kelas != '99' OR ts_data_siswa.stat_aktif = 'Aktif') AND ts_data_siswa.nama LIKE '%".$this->input->post('q')."%' ")->result();
			$this->load->view('adm/v_siswa_kelas', $adm);
		} else  if ($ke == "pindahkan") {
			$id_siswa	= $this->uri->segment(4);
			$id_kelas	= $this->uri->segment(5);
			$agama		= $this->uri->segment(6);
			$jk			= $this->uri->segment(7);
			$prodi		= $this->uri->segment(8);
			$tkt		= $this->uri->segment(9);
			
			if (trim($id_siswa)=="" || trim($id_kelas)=="" || trim($agama)=="" || trim($jk)=="" || trim($prodi)=="" || trim($tkt)=="") {
				$adm['info']	= "Data tidak lengkap or corrupted";			
			} else {
				$cek_th_ajr	= $this->db->query("SELECT * FROM tl_siswa_kelas WHERE id_siswa = '".$id_siswa."' AND ta = '".$ta_sekarang."'")->num_rows();
				
				if (empty($cek_th_ajr)) {
					$q_insert	= $this->db->query("INSERT INTO tl_siswa_kelas VALUES ('".$id_siswa."', '".$ta_sekarang."', '".$id_kelas."', '".$agama."', '".$jk."', '".$prodi."', '".$tkt."')");
					$this->db->query("UPDATE tl_nilai SET id_kelas = '".$id_kelas."' WHERE id_siswa = '".$id_siswa."'");
				} else {
					$q_update	= $this->db->query("UPDATE tl_siswa_kelas SET kelas = '".$id_kelas."', agama = '".$agama."', jk = '".$jk."', prodi = '".$prodi."', tkt = '".$tkt."' WHERE id_siswa = '".$id_siswa."' AND ta = '".$ta_sekarang."'");
					$this->db->query("UPDATE tl_nilai SET id_kelas = '".$id_kelas."' WHERE id_siswa = '".$id_siswa."'");
					if ($this->uri->segment(5) == "99") {
						$this->db->query("UPDATE ts_data_siswa SET stat_aktif = 'Lulus' WHERE id = '".$id_siswa."'");
					}
				}
				$adm['info']		= "Data kelas siswa berhasil dipindahkan. Di data nilai juga...";
				$adm['kelas']		= $this->db->query("SELECT * FROM tl_kelas WHERE id != 99")->result();
			}
			
			
			$adm['pindah_kelas'] 		= $this->db->query("SELECT ts_data_siswa.*, tl_siswa_kelas.*, tl_kelas.nama AS kelasnya FROM ts_data_siswa, tl_siswa_kelas, tl_kelas WHERE ts_data_siswa.id = tl_siswa_kelas.id_siswa AND tl_kelas.id = tl_siswa_kelas.kelas AND tl_siswa_kelas.ta =  '".$ta_sekarang."'")->result();
			
			redirect('adm/pindah_kelas');
			//$adm['info']		= "";
			//$this->load->view('adm/v_siswa_kelas', $adm);	
		} else  {
			$this->load->view('adm/v_siswa_kelas', $adm);			
		}
		$this->load->view('adm/t_footer');
	}
	
	public function input_nilai_per_kelas() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$this->load->view('adm/t_header');
		
		$adm['info']		= "";
		$ke					= $this->uri->segment(3);
		$ta_sekarang 		= $this->session->userdata('ta');
		$adm['kelas']		= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id != 99")->result();
		$adm['mapel']		= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel")->result();

		if ($ke == "f_input_per_kelas") {
		
			$id_kelas 	= $this->input->post('kelas');
			$id_mapel 	= $this->input->post('mapel');
			$sem 		= $this->input->post('sem');
			$adm['sem']	= $sem;
			//cek jika belum pilih
			if (trim($id_kelas) == "" || trim($id_mapel) == "" || trim($sem) == "") {
				$adm['info']	= "Pilih dulu kelas, Mata Pelajaran, dan Semesternya";
				$this->load->view('adm/v_input_per_kelas', $adm);	
			} else {
				$cek_sudah	= $this->db->query("SELECT * FROM tl_nilai WHERE id_mapel = '".$id_mapel."' AND ta = '".$ta_sekarang."' AND id_kelas = '".$id_kelas."' AND semester = '".$sem."'")->num_rows();
				
				if ($cek_sudah == 0) {
					$adm['info']	= "Input Baru";
					$adm['det_kls']	= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id = '".$id_kelas."'")->row();
					$adm['det_mpl']	= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel WHERE id = '".$id_mapel."'")->row();
				
					$q_siswa_kelas 	= $this->db->query("SELECT ts_data_siswa.id, ts_data_siswa.nama, tl_siswa_kelas.kelas FROM ts_data_siswa, tl_siswa_kelas WHERE tl_siswa_kelas.kelas = '".$id_kelas."' AND ts_data_siswa.id = tl_siswa_kelas.id_siswa AND tl_siswa_kelas.ta = '".$ta_sekarang."'");
					
					$adm['siswa_kelas']	= $q_siswa_kelas->result();
					
					$adm['jum_data']	= $q_siswa_kelas->num_rows();
					
					$this->load->view('adm/f_input_per_kelas', $adm);	
				} else {
					$adm['info']	= "Data kelas tersebeut sudah pernah diinputkan";
					$adm['data_nilai']	= $this->db->query("SELECT * FROM tl_nilai WHERE id_mapel = '".$id_mapel."' AND ta = '".$ta_sekarang."'")->result();
					
					$adm['nama_guru']	= $this->db->query("SELECT * FROM tl_nilai WHERE id_mapel = '".$id_mapel."' AND ta = '".$ta_sekarang."' LIMIT 1")->row();
					
					
					$adm['det_kls']	= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id = '".$id_kelas."'")->row();
					$adm['det_mpl']	= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel WHERE id = '".$id_mapel."'")->row();
					
					$q_siswa_kelas 	= $this->db->query("SELECT ts_data_siswa.id, ts_data_siswa.nama, tl_siswa_kelas.kelas FROM ts_data_siswa, tl_siswa_kelas WHERE tl_siswa_kelas.kelas = '".$id_kelas."' AND ts_data_siswa.id = tl_siswa_kelas.id_siswa AND tl_siswa_kelas.ta = '".$ta_sekarang."'");
					
					$adm['siswa_kelas']	= $q_siswa_kelas->result();
					
					$adm['jum_data']	= $q_siswa_kelas->num_rows();
					
					$this->load->view('adm/f_input_per_kelas', $adm);
					//$this->load->view('adm/v_input_per_kelas', $adm);	
				}
			}
		} else if ($ke == "simpan_nilai") {
			$jumlah_simpan 	= $this->input->post('jum_data');
			$id_kelas		= $this->input->post('id_kelas');
			$id_mapel		= $this->input->post('id_mapel');
			$nama_guru		= $this->input->post('guru');
			
			for ($i = 1; $i<= $jumlah_simpan; $i++) {
				
				$cek_sudah_ada	= $this->db->query("SELECT * FROM tl_nilai WHERE id_siswa = '".$this->input->post('id_siswa_'.$i)."' AND id_kelas = '".$id_kelas."' AND id_mapel = '".$id_mapel."' AND ta = '".$ta_sekarang."'")->num_rows();
				
				if ($cek_sudah_ada == 0) {
					$this->db->query("INSERT INTO tl_nilai VALUES ('".$this->input->post('id_siswa_'.$i)."', '".$id_kelas."', '".$id_mapel."', '".$this->input->post('nilai_'.$i)."', '".$nama_guru."', '".$this->input->post('semester')."', '".$ta_sekarang."')");
				} else {
					$this->db->query("UPDATE tl_nilai SET nilai = '".$this->input->post('nilai_'.$i)."', nama_guru = '".$this->input->post('guru')."' WHERE id_siswa = '".$this->input->post('id_siswa_'.$i)."' AND id_kelas = '".$id_kelas."' AND id_mapel = '".$id_mapel."' AND ta = '".$ta_sekarang."'");
				}
			}
			
			//data untuk form
			$ta_sekarang 		= $ta_sekarang;
			$adm['kelas']		= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id != 99")->result();
			$adm['mapel']		= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel")->result();
			
			$this->load->view('adm/v_input_per_kelas', $adm);	
		} else  {
			$this->load->view('adm/v_input_per_kelas', $adm);			
		}
		
		$this->load->view('adm/t_footer');
	}
	
	public function ledger() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		
		$kelas	= $this->uri->segment(3);
		$adm['kelas']	= $kelas;
		$adm['kelas_pilih']	= $this->db->query("SELECT * FROM tl_kelas")->result();
		
		
		$this->load->view('adm/t_header');	
		$this->load->view('adm/v_ledger', $adm);	
		$this->load->view('adm/t_footer');
	
	}
	
	public function jadwal() {
		$ke	= $this->uri->segment(3);
		$ta = $this->session->userdata('ta');
		
		$adm['jumlah_jadwal_pada_ta']	=	$this->db->query("SELECT * FROM t_jadwal WHERE ta = '".$ta."'")->num_rows();
		$adm['hari_']	= $this->db->query("SELECT * FROM t_jadwal WHERE ta = '".$ta."' GROUP BY hari ORDER BY hari DESC")->result();
		
		

		if ($ke != "excel") {

			$this->load->view('adm/t_header');	
			if ($ke == "add") {
				$adm['kelas']	= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id != 99")->result();
				$this->load->view('adm/f_jadwal_pilih_hari.php', $adm);
			} else if ($ke == "input_hari") {
				$adm['hari']	= $this->input->post('hari');
				$adm['kelas']	= $this->input->post('kelas');
				
				$q_cek_ada_jadwal	= $this->db->query("SELECT * FROM t_jadwal WHERE hari = '".$this->input->post('hari')."' AND id_kelas = '".$this->input->post('kelas')."' AND ta = '".$ta."'")->num_rows();
				
				if ($q_cek_ada_jadwal == 0) {
					$adm['info']	= "Jadwal Baru";
					$adm['tombol']	= "Simpan";
					if ($this->input->post('hari') == "Jumat") {
						$adm['jml_jam']	= 6;
					} else {
						$adm['jml_jam']	= 8;
					}
								
					$adm['nama_kelas']	= $this->db->query("SELECT nama FROM tl_kelas WHERE id = '".$this->input->post('kelas')."'")->row();
					
					$adm['mapel']	= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel")->result();
					//$adm['mapel']	= $this->db->query("SELECT tl_mapel.id, tl_mapel.prodi, tl_mapel.nama_mapel FROM tl_mapel, tl_kelas WHERE tl_kelas.prodi = '".$prodi."'")->result();
					$adm['guru']	= $this->db->query("SELECT id, nama FROM tg_data")->result();
					$adm['ruang']	= $this->db->query("SELECT id, nama FROM ti_ruang")->result();
					
					$this->load->view('adm/f_jadwal.php', $adm);
				} else {
					$adm['info']	= "Jadwal Sudah Ada, silakan diedit ";
					$adm['tombol']	= "Update";
							
					if ($this->input->post('hari') == "Jumat") {
						$adm['jml_jam']	= 6;
					} else {
						$adm['jml_jam']	= 8;
					}
								
					$adm['nama_kelas']	= $this->db->query("SELECT nama FROM tl_kelas WHERE id = '".$this->input->post('kelas')."'")->row();
					
					$adm['mapel']	= $this->db->query("SELECT id, prodi, nama_mapel FROM tl_mapel")->result();
					$adm['guru']	= $this->db->query("SELECT id, nama FROM tg_data")->result();
					$adm['ruang']	= $this->db->query("SELECT id, nama FROM ti_ruang")->result();
					
					$this->load->view('adm/f_jadwal.php', $adm);
				}
			} else if ($ke == "act_add") {
			
				if ($this->input->post('tombol') == "Simpan") {
					$jumlah_jam	= $this->input->post('jml_jam');
					
					for ($i = 1; $i <= $jumlah_jam; $i++) {
						$this->db->query("INSERT INTO t_jadwal VALUES ('', '".$this->input->post('hari')."', '".$this->input->post('jamke_'.$i)."', '".$this->input->post('guru_'.$i)."', '".$this->input->post('mapel_'.$i)."', '".$this->input->post('id_kelas')."', '".$this->input->post('ruang_'.$i)."', '".$ta."')");
					}
				} else {
					$jumlah_jam	= $this->input->post('jml_jam');
					for ($i = 1; $i <= $jumlah_jam; $i++) {
						$this->db->query("UPDATE t_jadwal SET id_guru = '".$this->input->post('guru_'.$i)."', id_mapel = '".$this->input->post('mapel_'.$i)."', id_ruang = '".$this->input->post('ruang_'.$i)."' WHERE hari = '".$this->input->post('hari')."' AND id_kelas = '".$this->input->post('id_kelas')."' AND id_jam_ke = '".$i."'");
					}			
				}
				redirect('adm/jadwal');
			} else {
				$this->load->view('adm/v_jadwal.php', $adm);
			} 
			$this->load->view('adm/t_footer');		
		} else {
			$this->load->view("excel/jadwal", $adm);
		}
	}
	
	
	public function jadwal_by_guru() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$ke		= $this->uri->segment(3);
		$guru	= $this->uri->segment(4);
		
		$adm['guru'] 	= $this->db->query("SELECT id, nama FROM tg_data ORDER BY id ASC")->result();
		

		$this->load->view('adm/t_header');
		if ($ke == "det") {
			$adm['jadwal']	= $this->db->query("SELECT tg_data.nama as nama_guru, t_jadwal.hari, t_jadwal.id_jam_ke, tl_kelas.nama as nama_kelas, tl_mapel.nama_mapel, ti_ruang.nama as nama_ruang FROM tl_mapel INNER JOIN (ti_ruang INNER JOIN (tl_kelas INNER JOIN (tg_data INNER JOIN t_jadwal ON tg_data.id = t_jadwal.id_guru) ON tl_kelas.id = t_jadwal.id_kelas) ON ti_ruang.id = t_jadwal.id_ruang) ON tl_mapel.id = t_jadwal.id_mapel WHERE tg_data.id = '".$guru."' ORDER BY t_jadwal.hari ASC, t_jadwal.id_jam_ke ASC")->result();
		
			$this->load->view('adm/v_jadwal_by_guru', $adm);		
		} else {
			$this->load->view('adm/v_jadwal_by_guru', $adm);
		}
		$this->load->view('adm/t_footer');	
	}
	
	public function jadwal_by_kelas() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$ke		= $this->uri->segment(3);
		$kelas	= $this->uri->segment(4);
		
		$adm['kelas'] 	= $this->db->query("SELECT id, nama FROM tl_kelas WHERE id != 99 ORDER BY id ASC")->result();
		

		$this->load->view('adm/t_header');
		if ($ke == "det") {
			$adm['jadwal']	= $this->db->query("SELECT tl_kelas.nama as nama_kelas, t_jadwal.hari, t_jadwal.id_jam_ke, tl_mapel.nama_mapel, tg_data.nama as nama_guru, ti_ruang.nama as nama_ruang FROM tl_mapel INNER JOIN (ti_ruang INNER JOIN (tl_kelas INNER JOIN (tg_data INNER JOIN t_jadwal ON tg_data.id = t_jadwal.id_guru) ON tl_kelas.id = t_jadwal.id_kelas) ON ti_ruang.id = t_jadwal.id_ruang) ON tl_mapel.id = t_jadwal.id_mapel WHERE tl_kelas.id = '".$kelas."'  AND t_jadwal.ta = '".$this->session->userdata('ta')."' ORDER BY t_jadwal.hari ASC, t_jadwal.id_jam_ke ASC")->result();
		
			$this->load->view('adm/v_jadwal_by_kelas', $adm);		
		} else {
			$this->load->view('adm/v_jadwal_by_kelas', $adm);
		}
		$this->load->view('adm/t_footer');	
	}
	
	public function jadwal_by_hari() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$ke		= $this->uri->segment(3);
		$hari	= $this->uri->segment(4);
		
		$adm['hari'] 	= array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
		

		$this->load->view('adm/t_header');
		if ($ke == "det") {
			$adm['jadwal']	= $this->db->query("SELECT t_jadwal.hari, tl_kelas.nama as nama_kelas, t_jadwal.id_jam_ke, tl_mapel.nama_mapel, tg_data.nama as nama_guru, ti_ruang.nama as nama_ruang FROM tl_mapel INNER JOIN (ti_ruang INNER JOIN (tl_kelas INNER JOIN (tg_data INNER JOIN t_jadwal ON tg_data.id = t_jadwal.id_guru) ON tl_kelas.id = t_jadwal.id_kelas) ON ti_ruang.id = t_jadwal.id_ruang) ON tl_mapel.id = t_jadwal.id_mapel WHERE t_jadwal.hari = '".$hari."' AND t_jadwal.ta = '".$this->session->userdata('ta')."' ORDER BY tl_kelas.id ASC, t_jadwal.id_jam_ke ASC")->result();
		
			$this->load->view('adm/v_jadwal_by_hari', $adm);		
		} else {
			$this->load->view('adm/v_jadwal_by_hari', $adm);
		}
		$this->load->view('adm/t_footer');	
	}
	
	public function galeri() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		//konfigurasi upload file
		$config['upload_path'] 		= 'upload/galeri';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']			= '2000';
		$config['max_width']  		= '2000';
		$config['max_height']  		= '2000';
		
		$this->load->library('upload', $config);
		
		$adm['upload_error'] 		= "";
		$adm['info'] 				= "";
		$adm['tipe_info']			= "";
		$adm['dis_info']			= "ok";
		
		
		//ambil variabel URL
		$mau_ke						= $this->uri->segment(3);
		$idKategori					= $this->uri->segment(4);
		
		$adm['nama_album']		= $this->adm_model->getDataByID("galerikategori", "idKategori", $idKategori);
		
		$adm['galeri']			= $this->adm_model->getKategoriGaleri();
		$adm['foto_per_kategori']	= $this->adm_model->getSpesific("galeri", "WHERE kategori = '$idKategori'");
		
		
		//view tampilan website (header dan menu)
		$this->load->view('adm/t_header');	
		
		
		if ($mau_ke == "add_kategori") {
			$this->form_validation->set_rules('nama_album', 'Album', 'trim|required|xss_clean');	
			
			if ($this->form_validation->run() == TRUE) {
				$data_album	= array (
					'idKategori'=>"",
					'nama'=>$this->input->post('nama_album')
				);
				$this->adm_model->addAlbum($data_album);
				$adm['info']			= "Album <i><b>".$this->input->post('nama_album')."</b></i> berhasil ditambahkan";
				$adm['tipe_info']		= "msg done";
				$adm['dis_info']		= "ok";	
				$adm['galeri']		= $this->adm_model->getKategoriGaleri();
				$this->load->view('adm/v_galeri', $adm);
			} else {
				$adm['info']		= "Nama Album tidak boleh Kosong";
				$adm['tipe_info']	= "msg error";
				$adm['dis_info']	= "ok";
				$adm['galeri']	= $this->adm_model->getKategoriGaleri();
				$this->load->view('adm/v_galeri', $adm);
			}
		} else if ($mau_ke == "hapus_album") {	
			$file_hapus = $this->adm_model->getFileFoto($idKategori);
			foreach ($file_hapus as $fh) {
				@unlink('./upload/galeri/'.$fh->file);
			}
			$this->adm_model->delData("galeri", "kategori", $idKategori);
			$this->adm_model->delData("galerikategori", "idKategori", $idKategori);
			$adm['info']			= "Album  berhasil dihapuskan. File-file dalam album juga terhapus..";
			$adm['tipe_info']		= "msg done";
			$adm['dis_info']		= "ok";	
			$adm['galeri']		= $this->adm_model->getKategoriGaleri();
			$this->load->view('adm/v_galeri', $adm);
		} else if ($mau_ke == "edit_album") {	
			$data = array (
				'nama'=>$this->input->post('album_baru'),
			);
			$this->adm_model->editNamaAlbum($this->input->post('id_album'), $data);
			
			$adm['info']			= "Nama album berhasil diubah menjadi <i><b>".$this->input->post('album_baru')."</b></i>";
			$adm['tipe_info']		= "msg done";
			$adm['dis_info']		= "ok";	
			$adm['galeri']		= $this->adm_model->getKategoriGaleri();
			$this->load->view('adm/v_galeri', $adm);
			
		} else if ($mau_ke == "upload_foto") {
			$this->form_validation->set_rules('ket_gambar', 'Keterangan Gambar', 'trim|required|xss_clean');
			//$this->form_validation->set_rules('fotonya', 'Fotonya', 'trim|required|xss_clean');
						
			//jixa validasi berhasil...
			if ($this->form_validation->run() == TRUE) {
				
				$this->upload->do_upload('fotonya');
				$up_data	 	= $this->upload->data();
				$i_data	= array (
					'file'=>$up_data['file_name'],
					'kategori'=>$this->input->post('id_album'),
					'keterangan'=>$this->input->post('ket_gambar'),
					'oleh'=>'1',
					'tgl'=>date('Y-m-d h:i:s'),
					'view'=>'1',
					'oleh'=>'1'
				);
					
				//$this->gambarSmall2($up_data);

				$this->adm_model->uploadFoto($i_data);
			
			
				$mau_ke = "";
				$adm['foto_per_kategori']	= $this->adm_model->getSpesific("galeri", "WHERE kategori = '".$this->input->post('id_album')."'");
				$adm['info']		= "Upload  Sukses";
				$adm['tipe_info']	= "msg done";
				$adm['dis_info']	= "ok";
				$this->load->view('adm/f_galeri', $adm);
				
			} else {
				$adm['foto_per_kategori']	= $this->adm_model->getSpesific("galeri", "WHERE kategori = '".$this->input->post('id_album')."'");
				$adm['info']		= "File Upload & Keterangan tidak boleh Kosong";
				$adm['tipe_info']	= "msg error";
				$adm['dis_info']	= "ok";
				$this->load->view('adm/f_galeri', $adm);
			}
		} else if ($mau_ke == "hapus_foto") {
			$adm['info']		= "Hapus data dan file gambar, .... Sukses";
			$file_hps = $this->adm_model->getValueOneField("file", "galeri", "idGaleri", $this->uri->segment(5));
			$this->adm_model->delData("galeri", "idGaleri", $this->uri->segment(5));
			@unlink('./upload/galeri/'.$file_hps->file);
			
			$adm['foto_per_kategori']	= $this->adm_model->getSpesific("galeri", "WHERE kategori = '".$this->uri->segment(4)."'");
			$adm['tipe_info']	= "msg done";
			$adm['dis_info']	= "ok";
			$this->load->view('adm/f_galeri', $adm);
		} else if ($mau_ke == "f_edit_kategori") {
			$this->load->view('adm/f_galeri', $adm);
		} else {
			$this->load->view('adm/v_galeri', $adm);
		}		
		
		$this->load->view('adm/t_footer');	
	}
	
	public function backup() {
		// Load the DB utility class
		$this->load->dbutil();
		$nama_file	= 'bck_sisko_'.date('Y-m-d');
		$prefs = array(
                'tables'      => array(),  // Array of tables to backup.
                'ignore'      => array(),           // List of tables to omit from the backup
                'format'      => 'zip',             // gzip, zip, txt
                'filename'    => $nama_file.'.sql',    // File name - NEEDED ONLY WITH ZIP FILES
                'add_drop'    => TRUE,              // Whether to add DROP TABLE statements to backup file
                'add_insert'  => TRUE,              // Whether to add INSERT data to backup file
                'newline'     => "\n"               // Newline character used in backup file
              );

		// Backup your entire database and assign it to a variable
		$backup =& $this->dbutil->backup($prefs);

		// Load the file helper and write the file to your server
		$this->load->helper('file');
		write_file('/path/to/'.$nama_file.'.gz', $backup); 

		// Load the download helper and send the file to your desktop
		$this->load->helper('download');
		force_download($nama_file.'.gz', $backup);
	}
	
	public function edit_passwod() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$ke	= $this->uri->segment(3);
		$adm['admin']	= $this->db->query("SELECT * FROM t_user LIMIT 1")->row();
		
		if ($ke == "simpan") {
			$this->db->query("UPDATE t_user SET u = '".$this->input->post('u_baru')."', p = '".$this->input->post('p_baru')."' WHERE id = '1'");
			redirect('adm/edit_passwod');
		} else {		
			$this->load->view('adm/t_header');	
			$this->load->view('adm/f_passwod', $adm);	
			$this->load->view('adm/t_footer');
		}
	}
	
	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
