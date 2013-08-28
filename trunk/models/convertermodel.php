<?php

//ubah split (deprecated) with explode (chan: 2013.08.17)
class converterModel extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	function setFormatTgl($data)
	{
		
		//list($t,$b,$h) = split('[-]', $data);//deprecated
		list($t,$b,$h) = explode('-', $data);
		$tglIndo="$h-$b-$t";
		return $tglIndo;
	}
	function setTanggal($data)
	{
		//"2011-05-30 22:15:34" 
		list($date,$time)	=  array_pad(explode(' ', $data, 2), -2, null);;//explode('[ ]',$data);
		//var_dump($date);
		list($t,$b,$h) =  explode('-', $date);
		$bln="";
		switch($b)
		{
			case"01"; $bln="Januari"; break;
			case"02"; $bln="Februari"; break;
			case"03"; $bln="Maret"; break;
			case"04"; $bln="April"; break;
			case"05"; $bln="Mei"; break;
			case"06"; $bln="Juni"; break;
			case"07"; $bln="Juli"; break;
			case"08"; $bln="Agustus"; break;
			case"09"; $bln="September"; break;
			case"10"; $bln="Oktober"; break;
			case"11"; $bln="November"; break;
			case"12"; $bln="Desember"; break;
		}
		
		$tglIndo="$h $bln $t $time";
		return $tglIndo;
	}
	function hitungPersen($nilai,$jumlah,$tipe)
	{
		$hasil		= explode(".",($nilai/$jumlah)*100);
		$hasil2		= substr($hasil[1],0,1);
		if($hasil2==""){ $hasil2=0; }
		$fixHasil	= "$hasil[0].$hasil2";
		
		if($tipe=="1")
		{
			return "<b>$fixHasil %</b> of <b>$nilai</b> voter";
		}
		else
		{
			return "<b>$fixHasil %</b>";
		}
	}
	function getNama($id)
	{
		$query =$this->db->query("select * from sistem_user WHERE id_user = '$id' ");
		foreach ($query->result() as $row)
		{
			return $row->username;
		}
	}
}
?>
