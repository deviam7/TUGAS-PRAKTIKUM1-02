  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h2 class="form-login-heading"> <span class="glyphicon glyphicon-lock"></span> Praktikum 1 </h2>
    <div class="container mt-5">
    <div class="form-group">
    <input type="hidden" name="id" id="id">
        <form method="GET" action="array_siswa.php">
Nama : <input type="text" name="nama" value="" size="30"/><br/>
Mata Kuliah :
<select name="matkul">
<option value="DDP">Dasar-Dasar Pemrograman</option>
<option value="BDI">Basis Data I</option>
<option value="WEB1">Pemrograman Web</option>
</select><br/>
Nilai UTS : <input type="text" name="nilai_uts" value=""
size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas" value=""
size="6"/><br/>
Nilai Tugas/Praktikum : <input type="text" name="nilai_tugas"
value="" size="6"/><br/>
</div>
<div class="modal-footer">
<input type="submit" value="Simpan" name="proses"/>
</div>
            </form>
    </div>
<?php
$proses= $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
echo 'Proses : '.$proses;
echo '<br/>Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>
</body>
</html>