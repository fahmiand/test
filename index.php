<?php 

require_once __DIR__ . '\function.php';

$siswa = siswa();

$kelasBIndo = kelasMPUtama(4);
$kelasBInggris = kelasMPUtama(4);
$kelasMatematika = kelasMPUtama(4);
$kelasMatematika = kelasMPUtama(4);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siswa</title>
</head>
<body>
    <table>
        <tbody>
            <th>No</th>
            <th>nama</th>
            <th>telepon</th>
            <th>alamat rumah</th>
            <th>jenis kelamin</th>
        </tbody>
            <?php 
            $i = 1;
            foreach ($siswa as $s) : ?>
            <tbody>
                <td><?= $i ?></td>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['telepon']; ?></td>
                <td><?= $s['alamat']; ?></td>
                <td><?= $s['jk']; ?></td>
            </tbody>
            <?php
                $i++;
                endforeach;
            ?>
        
    </table>
</body>
</html>