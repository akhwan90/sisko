<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function kondisi_barang($k) {
	if ($k == "B") {
		return "Baik";
	} elseif ($k == "RR") {
		return "Rusak Ringan";
	} elseif ($k == "RB") {
		return "Rusak Berat";
	} elseif ($k == "H") {
		return "Hilang";
	}
}