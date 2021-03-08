<?php
    include "koneksi.php";

    $filedir = "file/"; 
    if (!file_exists($filedir))
    mkdir($filedir);

    $workDir = $_SERVER['HTTP_HOST'];
    $namef=$_POST["name"];
    $nf=$_POST["nim"];
    $namafile=$_FILES['filehasil']['name'];
	$tmpfile=$_FILES['filehasil']['tmp_name'];
    $keteranganf=$_POST["keterangan"];
    $tgl = date("Y:m:d");
    date_default_timezone_set("Asia/Jakarta");
    move_uploaded_file($tmpfile, 'file/'.$namafile);
    
    

    $sql="INSERT INTO form_kegiatan(nama_isi, nim_isi, file_isi, keterangan_isi, date) VALUES('$namef','$nf','$namafile','$keteranganf','$tgl')";
    $query = mysqli_query($db1, $sql) or die (mysqli_error($db1));

    if($query){
        echo "Data berhasil di insert!";
        header("location:tabel.php");
     } else {
        echo "Error :".$sql."<br>".mysqli_error($db1);
     }
     mysqli_close($db1);
?>