<!DOCTYPE html>
<html>
        <head>
            <title>pertemuan 4</title>
        </head>
    <body>
<?php
    $nim1= "Ismail bin Mail";
    $nim2= "Mei-mei";
    $nim3= "Fizi";
    $nim4= "Jarjit Singh";
    $nim5= "Susanti";
?>

<h1>Daftar Siswa Tadika Mesra</h1>

<?php echo "$nim1";?><br>
<?php echo "$nim2";?><br>
<?php echo "$nim3";?><br>
<?php echo "$nim4";?><br>
<?php echo "$nim5";?><br>
    </body>
</html>
<br>
<?php
$array1 = array("elemen","elemen");
$array2 = ["elemen","elemen"];

$minuman = array("Kopi","Teh","Susu");
$makanan = ["Ayam goreng","Es ABCD","Nasi Lemak"];
?>


<?php
var_dump ($minuman);
?>


<?php
var_dump ($makanan);
?>
<br>
<?php
$nim= ["Ismail bin Mail","Mei-mei","Fizi","Jarjit Singh","Susanti"];
?>
<br>
<?php
for($i=0; $i < count($nim); $i++){
    echo $nim[$i]."<br>";
}
?>
<br>
<?php
$books=["Belajar Menghitung","Kampung Durian Runtuh"];
foreach($books as $book){
    echo $book."<br>";
}
?>
<br>
<?php
$hobi=[
    "Bermain",
    "Tidur",
    "Makan"
    ];

$hobi[2] = "Mengaji";
$hobi[3] = "Membaca";
$hobi[]= "Bermain";
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>
<br>
<hr>
<?php
$mhs =[
    "nim" => "1904030088",
    "nama" => "Hera Amalia Agustin",
    "fakultas" => "Teknik Unis",
    "jurusan" => "Teknik Informatika",
];

echo "<h1>Data Mahasiswa</h1>";
echo "<p>Nim: ".$mhs["nim"]."</br>";
echo "<p>Nama: ".$mhs["nama"]."</br>";
echo "<p>Fakultas: ".$mhs["fakultas"]."</br>";
echo "<p>Jurusan: ".$mhs["jurusan"]."</br>";
?>
<br>
<?php
$matrik=[
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

echo $matrik[1][0];
?>
<hr>

<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 4</title>
</head>
<body>
	<h1>Membuat Array</h1>
	<?php 
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>";
	echo($values[1]);

	echo"<br>";

	$prodi = ["Sipil","Industri","Informatika","Kimia"];
	var_dump($prodi);
	echo"<br>";
	echo($prodi[2]);

	echo"<br>";
	//mengganti isi value
	$prodi[0] = "Nuklir";
	var_dump($prodi);

	echo"<br>";
	//menambahkan value
	$prodi[] = "T.Komputer";
	var_dump($prodi);
	echo"<br>";

	//menghapus salah satu value
	unset($prodi[0]);
	var_dump($prodi);

	echo"<br>";
	//menghitung total array
	var_dump(count($prodi));

	?>
<hr>
	<h1>map dengan array</h1>
<?php 
$bulan = array(
			"id" =>"bulan",
			"nama" =>"Bulan Bintang",
			"umur" =>"17"
			);
var_dump($bulan);
echo"<br>";

$surya = [
		"id" =>"Ssurya",
		"nama" =>"Sang Surya.",
		"umur" =>29,
		"alamat" => [
				"kota" => "Tangerang",
				"prov" => "Banten"
				]
		];
var_dump($surya);
echo"<br>";
echo("nama id :" . $surya["id"]);
echo"<br>";
echo("nama lengkap : " . $surya["nama"]);
echo"<br>";
echo("umur : " . $surya["umur"]);

 ?>

<hr>
<h1>Operator MTK</h1>
<?php 
$tambah = 10 + 29;
$kurang = 18 - 145;
$kali = 9*120;
$bagi = 150 / 2;
$modular = 100 % 3;
$pangkat = 5**6;
echo "tambah: "  . $tambah . "<br>";
echo "kurang: "  . $kurang . "<br>";
echo "kali: "  . $kali . "<br>";
echo "bagi: "  . $bagi . "<br>";
echo "modular: "  . $modular . "<br>";
echo "pangkat: "  . $pangkat . "<br>";

 ?>
<hr>
<h2>Increment</h2>
<?php 
$a = 10;
$a++;
$a--;

echo($a);
 ?>
</body>
</html>
