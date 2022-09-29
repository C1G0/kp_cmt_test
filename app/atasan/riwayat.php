<?php
include("../../functions.php");
$db=dbConnect();
if($db->connect_errno==0){
?>

<body>
<div class=" offset-lg-3 col-lg-6">
    <div class="container">
    <br>
    <h2>Riwayat Absensi</h2>
    <table class="table table-striped rounded table-hover mt-3">
    <thead>
        <tr>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama</th>
        <th scope="col">Jam Absen Masuk</th>
        <th scope="col">Keterangan</th>
        </tr>
    </thead>
    <?php
    $k = getAbsenAtasan();
    foreach ($k as $row):
    ?>
    <tbody>
        <tr>
        <th scope="row"><?=$row['tanggal']?></th>
        <td><?=$row['nama']?></td>
        <td><?=$row['jam']?></td>
        <td><?=$row['ket']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    </div>
</div>
<?php } ?>
</body>