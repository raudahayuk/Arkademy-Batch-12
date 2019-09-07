<?php
function cek_username($nama){
	 return preg_match('/^[a-z]{5,9}$/', $nama)?'true':'false';
	
}

echo cek_username('raudah');
echo cek_username('raud');
echo cek_username('raudah1');

?>