<?php
header("Content-Type: application/json; charset=UTF-8");

$bidota=array();
$bidota['nama']='Raudah Ayu Setyowati';
$bidota['age']=24;
$bidota['address']='Jalan Limbungan No 7, Rumbai , Pekanbaru';
$bidota['hobbies']=array('traveling','membaca','bersepeda');
$bidota['is_married']=false;
$bidota['list_school'][]=array('name'=>'TK Global Andalan','year_in'=>'2000','year_out'=>'2001','major'=>null);
$bidota['list_school'][]=array('name'=>'SDN 005 Rumbai','year_in'=>'2001','year_out'=>'2007','major'=>null);
$bidota['list_school'][]=array('name'=>'SMPN 6 Pekanbaru','year_in'=>'2007','year_out'=>'2010','major'=>null);
$bidota['list_school'][]=array('name'=>'SMKN 7 Pekanbaru','year_in'=>'2010','year_out'=>'2013','major'=>'RPL');
$bidota['list_school'][]=array('name'=>'Universitas Negeri Sultan Syarif Qasim','year_in'=>'2013','year_out'=>'2019','major'=>'Teknik Informatika');
$bidota['interest_in_coding']=true;

function cetak_bio($bio){
	return json_encode($bio);
}

echo cetak_bio($bidota);
?>