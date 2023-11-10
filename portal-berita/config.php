<?php

$db_user = 'root';
$db_pass = '';
$db_name = 'pegawai';
$db_host = '127.0.0.1'; // localhost

if (!$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name)) {
    die('Error Database: ' . mysqli_connect_error());
}

// $sql = 'SELECT * FROM jabatan';
// $result = mysqli_query($conn, $sql);

// while ($row = mysqli_fetch_assoc($result)) {
//     echo '<p>' . $row['nama_jabatan'] . '</p>';
// }

// foreach($result as $key => $value) {
//     echo '<p>' . $value['nama_jabatan'] . '</p>';
// }