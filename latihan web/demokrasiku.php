<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Demokrasi Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="page">
    <div id="header">
        <div id="section">
            <div>
                <a href="index.html">
                    <img src="358551670_289963213597170_1848850721308818140_n[1].jpg"
                         alt="Logo Sekolah" width="200" height="200">
                </a>
            </div>
            <span>
                SMK Bisa!!!<br><br>
                Belajar teknologi untuk membangun bangsa
            </span>
        </div>

        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="profil.html">Profil</a></li>
            <li class="current"><a href="demokrasiku.php">Demokrasi Sekolah</a></li>
            <li><a href="kritik.html">Kritik dan Saran</a></li>
        </ul>
    </div>

    <div id="content">
        <h3>Suara Demokrasi</h3>
        <h2>Pemilihan Ketua Kelas dan Pengurus Kelas</h2>

        <!-- FORM -->
        <form method="get">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Ketua Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="ketua"></td>
                </tr>
                <tr>
                    <td>Wakil Ketua</td>
                    <td>:</td>
                    <td><input type="text" name="wakil"></td>
                </tr>
                <tr>
                    <td>Sekretaris</td>
                    <td>:</td>
                    <td><input type="text" name="sekretaris"></td>
                </tr>
                <tr>
                    <td>Bendahara</td>
                    <td>:</td>
                    <td><input type="text" name="bendahara"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="SIMPAN">
        </form>

        <br><hr><br>

        <!-- HASIL INPUT -->
        <?php
        if (isset($_GET['nama'])) {
            echo "<h3>Hasil Input</h3>";
            echo "Nama : " . $_GET['nama'] . "<br>";
            echo "Ketua Kelas : " . $_GET['ketua'] . "<br>";
            echo "Wakil Ketua : " . $_GET['wakil'] . "<br>";
            echo "Sekretaris : " . $_GET['sekretaris'] . "<br>";
            echo "Bendahara : " . $_GET['bendahara'] . "<br>";
        }
        ?>
    </div>
</div>

</body>
</html>
