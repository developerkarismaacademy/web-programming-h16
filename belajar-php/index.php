<?php
// Belajar Cetak Teks pada PHP
# Menggunakan echo
echo "<h2>PHP itu mudah</h2>";
echo ("Saya senang belajar \"PHP\" <br>");
/*
    Belajar PHP
    menampilkan teks menggunakan print
*/
print 'Jika terus belajar, ';
print('saya pasti bisa menguasai "PHP"<br>');

// Pendeklarasian variabel
$kalimat = "<h1>Belajar php pada hari ke 5</h1>";
// Assigment string
$kalimat .= "<p>Pada pelatihan prakerja di Karisma Academy</p>";

echo $kalimat;

// Vardump digunakan untuk mengecek tipedata dan isi dari sebuah variabel
var_dump($kalimat);

// Deklarasi konstanta
define("JUDUL", "Materi PHP");
// Concat
echo "<h3>" . JUDUL . "</h3>";

$status = true; // true / false
// Operator Ternary / Pengkondisian
echo ($status) ? "Benar" : "Salah";

// Array
$makanan = array('Rendang', 'Nasi Goreng', 'Sate');
$minuman = ['Air Mineral', 'Es Teh', 'Jus Jeruk'];

echo "
    <ul>
        <li>
            Makanan
            <ul>
                <li>" . $makanan[0] . "</li>
                <li>" . $makanan[1] . "</li>
                <li>" . $makanan[2] . "</li>
            </ul>
        </li>
        <li>
            Minuman
            <ul>
                <li>" . $minuman[0] . "</li>
                <li>" . $minuman[1] . "</li>
                <li>" . $minuman[2] . "</li>
            </ul>
        </li>
    </ul>
";
// Array assosiatif
$profil = [
    'nama' => 'Bariq',
    'alamat' => 'Malang'
];
// Penambahan array
$profil['status'] = 'Bekerja';

echo '<p>Nama saya ' . $profil['nama'] . ', saya tinggal di kota ' . $profil['alamat'] . ', dan status ' . $profil['status'] . '</p>';
// Penghapusan array
unset($profil['status']);

var_dump($profil);

// If
$nilai = 90;
if ($nilai < 80) {
    echo '<p>Nilai Kurang</p>';
} else if ($nilai < 100) {
    echo '<p>Nilai Cukup</p>';
} else {
    echo '<p>Nilai Sempurna</p>';
}

// Switch
$kota = 'Malang';
$output = 'Kota yang kamu pilih ';
switch ($kota) {
    case 'Jakarta':
        echo $output . $kota;
        break;
    case 'Surabaya':
        echo $output . $kota;
        break;
    default:
        echo 'Kota yang dipilih tidak ada dalam daftar';
        break;
}

$a = 1;
echo '<h1>Menggunakan While</h1>';
while ($a <= 10) {
    echo '<p>Angka ke-' . $a . '</p>';
    $a++;
}

$a = 1;
echo '<h1>Menggunakan Do While</h1>';
do {
    echo '<p>Angka ke-' . $a . '</p>';
    $a++;
} while ($a <= 10);

echo '<h1>Menggunakan For</h1>';
for ($i = 1; $i <= 10; $i++) {
    echo '<p>Angka ke-' . $i . '</p>';
}

echo '<h1>Menggunakan Foreach</h1>';
foreach ($makanan as $key => $value) {
    echo '<p>Index = ' . $key . ', value = ' . $value . '</p>';
}
foreach ($profil as $key => $value) {
    echo '<p>Index = ' . $key . ', value = ' . $value . '</p>';
}

// Function
function ucapsalam()
{
    // echo $kota; Error karena scope
    echo $GLOBALS['kota']; // Menggunakan variabel global
    // global $kota;  Variabel global
    
    echo '<p>Selamat datang</p>';
}
ucapsalam();
function salam($nama)
{
    echo '<p>Halo ' . $nama . '</p>';
}
salam('Bariq');
function penambahan($a, $b)
{
    return $a + $b;
}

echo 'Hasil '. penambahan(5,7);
?>