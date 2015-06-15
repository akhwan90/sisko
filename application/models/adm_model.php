<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adm_model extends CI_Model {

	function getAll($tabel) {
		$q = $this->db->query("SELECT * FROM $tabel");
		return $q->result();
	}
	
	function getLimit($tabel, $awal, $akhir) {
		$q = $this->db->query("SELECT * FROM $tabel LIMIT $awal, $akhir")->result();
		return $q;
	}
	
	function getAll_Paging() {
		$string_query       	= "select * from ti_tanah order by id_tnh asc";  
		$query          	= $this->db->query($string_query);              
		$config['base_url']     = base_url().'index.php/adm/tanah/hal/';  
		$config['total_rows']	= $query->num_rows();  
		$config['per_page']     = '2';  
		$num            	= $config['per_page'];  
		$offset         	= $this->uri->segment(3);  
		$offset         	= ( ! is_numeric($offset) || $offset < 1) ? 0 : $offset;  
		  
		if(empty($offset))  
		{  
		    $offset=0;  
		}  
		  
		$this->pagination->initialize($config);         
		  
		$data_guest= $this->db->query($string_query." limit $offset,$num");    
		//$data_guest['base']	= $this->config->item('base_url');  
	      
		return $data_guest->result();		
		
	/*
		$string_query       	= "select * from $tabel";
		$query          		= $this->db->query($string_query);
		$config['base_url'] 	= base_url().'index.php/adm/'.$url.'/hal/';
		$config['total_rows']	= $query->num_rows();
		$config['per_page'] 	= $per_page;
		$num            		= $config['per_page'];
		$page	         		= $this->uri->segment(4);
		if(!$page):
			$offset = 0;
		else:
			$offset = $page;
		endif;
		
		$config['full_tag_open']= '<div class="paging">';
		$config['full_tag_close']= '</div>';
		$config['cur_tag_open'] = '<span class="p_aktif">';
		$config['cur_tag_close']= '</span>';
		$config['num_tag_open'] = '<span class="p">';
		$config['num_tag_close']= '</span>';
		$config['next_tag_open'] = '<span class="p_next">';
		$config['next_tag_close'] = '</span>';
		$config['last_tag_open']= '<span class="p_last">';
		$config['last_tag_close']= '</span>';


		$this->pagination->initialize($config);
		$data_guest				= $this->db->query($string_query." limit ".$offset.", ".$num."");
		return $data_guest;
	*/
	}
	
	function getSpesific($tabel, $where) {
		$q = $this->db->query("SELECT * FROM $tabel $where");
		return $q->result();	
	}
	
	function getDataByID($tabel, $kunci, $data) {
		$q = $this->db->query("SELECT * FROM $tabel WHERE $kunci='$data'");
		return $q->row();	
	}
	
	function delData($tabel, $field_mana, $id) {
		$q = $this->db->query("DELETE FROM $tabel WHERE $field_mana = '$id'");
		return $q;
	}
	
	function getValueOneField($field, $tabel, $kunci, $data) {
		$q = $this->db->query("SELECT $field FROM $tabel WHERE $kunci='$data'");
		return $q->row();	
	}
	
	function EDIT($q, $id, $tabel, $data) {
		$this->db->where($q, $id);
		$q = $this->db->update($tabel, $data);
		return $q;
	}
	function ADD($tabel, $data) {
		$q = $this->db->insert($tabel, $data);
		return $q;
	}
	
	//qhususon...
	
	//Galeri 
	function getKategoriGaleri() {
		$q 	= $this->db->query("select * from galeriKategori");
		return $q->result();
	}
	function addAlbum($data) {
		$q = $this->db->insert('galerikategori', $data);
		return $q;
	}
	function getFileFoto($idAlbum) {
		$q 	= $this->db->query("select file from galeri where kategori = '".$idAlbum."' ");
		return $q->result();
	}
	function editNamaAlbum($id, $data) {
		$this->db->where('idKategori', $id);
		$q = $this->db->update('galerikategori', $data);
		return $q;
	}
	function uploadFoto($data) {
		$q = $this->db->insert('galeri', $data);
		return $q;
	}
	
}