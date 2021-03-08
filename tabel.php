<?php
    include "koneksi.php"
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="icon" href="https://pbs.twimg.com/profile_images/601620744439631872/2l8SUfq-_400x400.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <header class="w3-container w3-teal">
        <h1>TABEL KEGIATAN SP</h1>
    </header>

    <div class="w3-container w3-half w3-margin-top" style="overflow-x:auto;">
        <table class="w3-table-all w3-card-4">
            <?php
                $no=1;
                $query="SELECT * FROM form_kegiatan";
                $arsip1 = $db1->prepare($query);
                $arsip1->execute();
                $res1 = $arsip1->get_result();
                $key = "qrcode";
		        $workDir = $_SERVER['HTTP_HOST'];
                while ($row = $res1->fetch_assoc()) {
                    $nama=$row['nama_isi'];
                    $nim=$row['nim_isi'];
                    $file=$row['file_isi'];
                    $keterangan=$row['keterangan_isi'];
                    $tanggal=$row['date'];
            ?>
            <tr>
                <th>No.</th>
                <th>Nama SP</th>
                <th>NIM SP</th>
                <th>File</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $nim; ?></td>
                <td><img src="file/<?php echo $file; ?>" width="100px"></td>
                <td><?php echo $keterangan; ?></td>
                <td><?php echo $tanggal; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="w3-container w3-half w3-margin-top">
        <a href="index.php">Form Kegiatan SP</a>
    </div>
</body>

</html>
