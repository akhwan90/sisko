<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function koversi_kondisi($kond) {
	if ($kond == "B") {
		$kondisi = "Baik";
	} else if ($kond == "RR") {
		$kondisi = "Rusak Ringan";
	} else if ($kond == "RB") {
		$kondisi = "Rusak Berat";
	} else if ($kond == "H") {
		$kondisi = "Hilang";
	}
	return $kondisi;	
}
