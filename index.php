<!DOCTYPE html>
<html lang="en">
<head>
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&display=swap" rel="stylesheet">
</head>
<body>
    <p class="Judul">Undangan Pernikahan</p>
    <h1>Putra & Putri</h1>
    <img src="wedding.jpg" alt="Foto pasangan mempelai">
    <br>
    <h2>Pernikahan</h2>
    <h2>Putra Anak dari Udin</h2>
    <h2>dengan</h2>
    <h2>Putri anak dari Asep</h2>
    <p>Minggu, 30 Desember 2030</p>
    <p>9.00 Wita s.d Selesai</p>
    <p>Mangkupalas</p>
    <h2>Peta Lokasi</h2>
    <div style="width: 100%">
        <iframe width="30%" height="500" frameborder="0" scrolling="0" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6738.478682136223!2d117.15275207219305!3d-0.5207610613970456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1723682346619!5m2!1sen!2sid"></iframe>
    </div>
    <section id="rsvp">
        <h2>RSVP</h2>
        <p>Berikan ucapan harapan & do'a kepada kedua mempelai serta konfirmasi kehadiran</p>

        <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <textarea name="ucapan" cols="20" rows="5" placeholder="Ucapan" required></textarea> <br>
            <select name="keterangan" required>
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select>
            <button type="submit">KIRIM</button>
        </form>

        <?php
        include 'koneksi.php';
        $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($SQL2);
        ?>
        <div style="height:200px; width:300px; overflow:scroll;">\
        <?php
        while ($baris = $hasil->fetch_row()) {
        ?>
        <div style = "border-style:solid; border-color:black; margin:10px;">
        <p style="font-weight:bold;"><?=$baris[1] ?></p>
        <p><?=$baris[2] ?></p>
        </div>

        <?php
        }

        $hasil->free_result();
        ?>
        </div>
    </section>
    <p><audio controls autoplay>
        <source src="mahalini.mp3" type="audio/mpeg">
        Browser Anda Tidak Support, Upgrade Dong!!.
    </audio></p>
</body>
</html>