<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form tambah</h1>

    <form action="proses_tambah.php" method="get">
        <label for="">Judul</label>
        <input type="text" name="judul" id=""> <br>

        <label for="">Teks</label><br>
        <textarea name="teks" id="" cols="30" rows="10"></textarea><br><br>

        <label for="">Tanggal</label>
        <input type="date" name="tanggal" id=""> <br><br>

        <input type="submit" value="tambah">
    </form>
</body>
</html>