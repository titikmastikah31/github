<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Isi Mahasiawa</h2>
    <form action="proses_tambah.php" method="POST">
    
    <label>Nama:</label>
    <input type="text" name="nama" required><br>

    <label>Nim:</lable>
    <input type="text" name="nim" required><br>

    <label>Email:</lable>
    <input type="email" name="email" required><br>

    <label>Nomor:</lable>
    <input type="text" name="nomor" required><br>

    <label>Jurusan:</lable>
    <input type="text" name="jurusan" required><br>

   
    <input type="submit" value="Tambah">
</form>
</body>

</html>