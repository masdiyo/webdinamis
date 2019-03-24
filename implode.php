<!DOCTYPE html>
<html>
<head>
	<title>Contoh Penggunaan Implode</title>
</head>
<body>
<?php
	echo "<h3>Penerapan Explode [1] - <em><strong>Format Tanggal</strong></em></h3>";
	$tgl = array("tanggal"=>"01","bulan"=>"03","tahun"=>"2019");	
	echo "Contoh terdapat data tanggal dari hasil entri form sbb :";
	echo "<pre>";
	print_r($tgl);
	echo "</pre>";	
	$tglimplode = implode("/", $tgl);
	echo 'Tanggal ditampilkan dengan implode menggunakan karakter "/" : '.$tglimplode;

	echo "<p>";
	echo "<h3>Penerapan Explode [2] - <em><strong>Penomoran TNKB</strong></em></h3>";	
	$tnkb = array("kode_wilayah"=>"AB","no_urut"=>"3079","kode_sub_wilayah"=>"OG");
	echo "Contoh terdapat data TNKB dari hasil entri form sbb :";
	echo "<pre>";
	print_r($tnkb);
	echo "</pre>";	
	$tnknimplode = implode(' ', $tnkb);
	echo 'TNKB ditampilkan dengan implode menggunakan karakter " " : '.$tnknimplode;

	echo "<p>";
	echo "<h3>Penerapan Explode [3] - <em><strong>Penomoran Kode NPWP</strong></em></h3>";
	$npwp = array('jenis' => '02','urut' => "345.678",'kode_kpp' => '9-111',"status_kpp" => "000" );
	echo "Contoh terdapat data NPWP dari hasil entri form sbb` :";
	echo "<pre>";	
	print_r($npwp);
	echo "</pre>";
	$npwpimplode = implode('.', $npwp);
	echo 'NPWP ditampilkan dengan implode menggunakan karakter "." : '.$npwpimplode;

	echo "<p>";
	echo "<h3>Penerapan Implode [4] - <em><strong>Uraian data gejala penyakit</strong></em></h3>";
	$gejala = ["Pilek","Demam","Pusing","Pusing"]; 	
	echo "Contoh terdapat data gejala penyakit dari hasil entri (CheckBox) form sbb : <br />";
	echo "<pre>";
	print_r($gejala);
	echo "</pre>";
	$gejalaimplode = implode(', ', $gejala);
	echo 'Gejala akan ditampilkan dengan implode menggunakan karakter ", " : sbb <br />';
	echo "Gejala yang dialami penderita adalah : $gejalaimplode";
	
	echo "<h3>Penerapan Implode [5] - <em><strong>Format Penomoran Surat pada Instansi</strong></em></h3>";
	$nosurat = array("jenis"=>"555","no_urut"=>"1003","bidang"=>"program");
	echo "Contoh terdapat data Nomor Penulisan surat dari entri form sbb :";
	echo "<pre>";
	print_r($nosurat);
	echo "</pre>";
	$nosuratimplode = implode('/', $nosurat);
	echo 'Nomor surat akan ditampilkan dengan fungsi implode menggunakan karakter "-" :'.$nosuratimplode;

	echo "<h3>Penerapan Implode [6] - <em><strong>Format Penomoran Inventaris / Aset</strong></em></h3>";
	$noaset = array("golongan"=>"02","bidang"=>"06","Kelompok"=>"02",
		"sub_kelompok"=>"01","barang"=>"37","no_urut"=>"00212");
	echo "Contoh terdata data penomoran aset dari hasil entri form sbb :";
	echo "<pre>";
	print_r($noaset);
	echo"</pre>";
	$noasetimplode = implode('.', $noaset);
	echo 'Maka Nomor Aset akan ditampilkan dengan fungsi implode menggunakan karakter "." :'.$noasetimplode;

?>
</body>
</html>