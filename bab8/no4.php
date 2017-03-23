<?php 
$kal = CAL_GREGORIAN;
$bln = date('m');
$thn = date('Y');
$hr = cal_days_in_month($kal, $bln, $thn); 

switch ($bln){

	case 1: echo "<p>Jumlah hari pada bulan januari adalah ".$hr." hari <p>";break;
	case 2: echo "<p>Jumlah hari pada bulan februari adalah ".$hr." hari <p>";break;
	case 3: echo "<p>Jumlah hari pada bulan maret adalah ".$hr." hari <p>";break;
	case 4: echo "<p>Jumlah hari pada bulan april adalah ".$hr." hari <p>";break;
	case 5: echo "<p>Jumlah hari pada bulan mei adalah ".$hr." hari <p>";break;
	case 6: echo "<p>Jumlah hari pada bulan juni adalah ".$hr." hari <p>";break;
	case 7: echo "<p>Jumlah hari pada bulan juli adalah ".$hr." hari <p>";break;
	case 8: echo "<p>Jumlah hari pada bulan agustus adalah ".$hr." hari <p>";break;
	case 9: echo "<p>Jumlah hari pada bulan september adalah ".$hr." hari <p>";break;
	case 10: echo "<p>Jumlah hari pada bulan oktober adalah ".$hr." hari <p>";break;
	case 11: echo "<p>Jumlah hari pada bulan november adalah ".$hr." hari <p>";break;
	case 12: echo "<p>Jumlah hari pada bulan desember adalah ".$hr." hari <p>";break;
}
?>