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
        <h1>FORM KEGIATAN SP</h1>
    </header>

    <div class="w3-container w3-half w3-margin-top">

        <form method="POST" class="w3-container w3-card-4" action="formac.php" enctype="multipart/form-data">

            <p>
                <input class="w3-input" type="text" style="width:90%" required name="name">
                <label>Nama SP</label>
            </p>
            <p>
                <input class="w3-input" type="text" style="width:90%" required name="nim">
                <label>NIM</label>
            </p>

            <p>
                <input class="w3-file" type="file" name="filehasil">
                <br>
                <label><b>Bukti berupa Gambar atau Foto(File berkas dapat di foto)</b></label>
            </p>
            <p>
                <textarea class="w3-textarea" name="keterangan" cols="30" rows="10"></textarea>
                <br>
                <label>Keterangan</label>
            </p>

            <p>
                <button type="submit" class="w3-button w3-section w3-teal w3-ripple" name="upload" value="SIMPAN"> SUBMIT </button>
            </p>

        </form>

    </div>
    <div class="w3-container w3-half w3-margin-top">
        <a href="tabel.php">Daftar Kegiatan SP</a>
    </div>
</body>

</html>