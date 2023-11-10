<?php
require("config.php");
// include("confi.php");

$sql_jabatan = 'SELECT * FROM jabatan';
$result_jabatan = mysqli_query($conn, $sql_jabatan);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="/">Portal Berita</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <a href="create.php" class="btn btn-primary">Tambah jabatan</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Jabatan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($result_jabatan as $key => $data): ?>
                            <tr>
                                <th>
                                    <?php echo $no ?>
                                </th>
                                <td>
                                    <?= $data['nama_jabatan'] ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $data['id_jabatan']?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="delete.php?id=<?= $data['id_jabatan']?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>