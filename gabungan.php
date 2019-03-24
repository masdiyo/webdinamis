<!DOCTYPE html>
<html>
<head>
	<title>Contoh Penggunaan Explode - Implode</title>
</head>
<body>
<?php
	echo "<h3>Contoh Implode - Explode [1]</h3>";
	$tglsql = "2019-03-23";
	echo "Contoh Tanggal SQL : $tglsql <br />";
	$tglexplode = explode("-", $tglsql);
	echo "Explode Tanggal SQL :";
	echo "<pre>";
	print_r($tglexplode);
	echo "</pre>";
	$bulan = array("01"=>"Januari","02"=>"Februari","03"=>"Maret");
	echo "Tanggal Indonesia : $tglexplode[2]-$tglexplode[1]-$tglexplode[0]<br />";
	$bulanke = $tglexplode[1];
	echo "Format Panjang : Tanggal $tglexplode[2] Bulan $bulan[$bulanke] Tahun $tglexplode[0]<br />";
	$tglimplode = implode("/", $tglexplode);
	echo 'Implode Tanggal dengan karakter "/" : '.$tglimplode;

	echo "<p>";
	echo "<h3>Contoh Implode - Explode [2]</h3>";
	$tnkb = "AB 3079 OG";
	echo "Contoh TNKB : $tnkb <br />";
	$tnkbexplode = explode(" ", $tnkb);
	echo "Explode TNKB : ";
	echo "<pre>";
	print_r($tnkbexplode);
	echo "</pre>";
	echo "2 Digit awal ($tnkbexplode[0]) = wilayah karisidenan <br />";
	echo "4 Digit tengah ($tnkbexplode[1]) = wilayah nomor urut <br />";
	echo "2 Digit akhir ($tnkbexplode[2]) = wilayah kabupaten <br />";
	$tnknimplode = implode('-', $tnkbexplode);
	echo 'Implode TNKB dengan karakter "-" : '.$tnknimplode;

	echo "<p>";
	echo "<h3>Contoh Implode - Explode [3]</h3>";
	$npwp = "12.345.678.9-111.000";
	echo "Contoh NPWP : $npwp <br />";
	$npwpexplode = explode('.', $npwp);
	echo "Explode NPWP :";
	echo "<pre>";
	$npwpexplode2 = explode('-', $npwpexplode[3]);
	$npwpexplode[3] = $npwpexplode2;
	print_r($npwpexplode);
	echo "</pre>";
	echo "2 Digit pertama <strong>($npwpexplode[0])</strong> : Jenis Wajib Pajak <br />";	
	echo "6 Digit selanjutnya <strong>($npwpexplode[1].$npwpexplode[2])</strong> : Nomor urut tetentu <br />";
	echo "1 Digit selanjutnya <strong>($npwpexplode2[0])</strong> : Kode pengaman pemalsudan <br />";
	echo "3 Digit selanjutnya <strong>($npwpexplode2[1])</strong> : Kantor Penerbit <br />";
	echo "3 Digit terakhir <strong>($npwpexplode[4])</strong> : Kode cabang/pusaat <br />";
	$npwpimplode2 = implode('-', $npwpexplode2);
	$npwpexplode[3] = $npwpimplode2;
	$npwpimplode = implode('.', $npwpexplode);
	echo "Implode NPWP : $npwpimplode";

	echo "<p>";
	echo "<h3>Contoh Implode - Explode [4]</h3>";
	$tag = "kesehatan,obat,demam,pilek";
	echo "Contoh tag / kata pencarian : $tag <br />";
	$tagexplode = explode(',', $tag);
	echo "Explode tag / kata pencarian : <br />";
	echo "<pre>";
	print_r($tagexplode);
	echo "</pre>";
	echo "Hasil Implode untuk menyusun query : <br />";
	$query = "select * from artikel where ";
	$jumlah = count($tagexplode);
	$querylike=""; $i = 0;
	for ($i;$i<$jumlah;$i++){
		$querylike = $querylike."(uraian like '%$tagexplode[$i]%') ";
		if ($i < $jumlah-1) {$querylike = $querylike." or ";}
	}	
	echo $query.$querylike."<br />";
	$tagimplode = implode(',', $tagexplode);
	echo "Kata Pencarian = $tagimplode";

	echo "<h3>Contoh Implode - Explode [5]</h3>";
	$nosurat = "555/1003/program";
	echo "Contoh Penulisan Kode Surat : $nosurat  <br />";
	$nosuratexplode = explode('/', $nosurat);
	echo "Explode No Surat :";
	echo "<pre>";
	print_r($nosuratexplode);
	echo"</pre>";
	echo "Hasil Explode untuk mengetahui kode surat :<br /> ";
	echo "bagian pertama ($nosuratexplode[0]) adalah jenis surat, misal : undangan [555], peminjaman alat, surat tugas, pengiriman data dll <br />";
	echo "bagian selanjutnya ($nosuratexplode[1]) adalah Nomor Urut Surat <br />";
	echo "bagian terakhir ($nosuratexplode[2]) adalah Bidang atau Bagian yang mengeluarkan surat tersebut.
	pada contoh, surat dikeluarkan dari Sub Bagian Program<br />";
	$nosuratimplode = implode('/', $nosuratexplode);
	echo "Hasil <em>implode</em> dari <em>Explode</em> adalah : $nosuratimplode";

	echo "<h3>Contoh Implode - Explode [6]</h3>";
	$noaset = "02.06.02.01.37.00212";
	echo "Contoh Penulisan Kode Aset / Inventaris : $noaset  <br />";
	$noasetexplode = explode('.', $noaset);
	echo "Explode No Aset / Inventaris :";
	echo "<pre>";
	print_r($noasetexplode);
	echo"</pre>";
	echo "Hasil Explode untuk mengetahui jenis dan asal barang :<br /> ";
	echo "bagian 1 ($noasetexplode[0]) adalah Kode Golongan (Misal : Peralatan dan Mesin, kode 02) <br />";
	echo "bagian 2 ($noasetexplode[1]) adalah Kode Bidang (Misal : Bidang alat kantor dan rumah tangga, kode 06) <br />";
	echo "bagian 3 ($noasetexplode[2]) adalah Kode Kelompok (Misal : Alat tumah tangga, kode 02<br />";
	echo "bagian 4 ($noasetexplode[3]) adalah Kode Sub Kelompok (Misal : Mebel, kode 01<br />";
	echo "bagian 5 ($noasetexplode[4]) adalah Kode Sub Sub Kelompok (Misal : Meja Komputer, kode 37<br />";
	echo "bagian 6 ($noasetexplode[5]) adalah barang ke ... (misal : meja komputer ke 212) <br />";
	$noasetimplode = implode('.', $noasetexplode);
	echo "Maka Kode barang ditulis : $noasetimplode";

?>
</body>
</html>