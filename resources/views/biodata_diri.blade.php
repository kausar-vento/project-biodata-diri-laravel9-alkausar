<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css_biodata/style.css">
    <title>Biodata Diri</title>
</head>
<body>
    <div id="loading"></div>
    <div class="box">
        <div class="gambar" id="image">
            <img id="sliderImage1" src="images/foto1.png" style="width: 40%" alt="">
            <img id="sliderImage2" src="images/foto2.png" style="width: 40%" alt="">
        </div>
        <div>
            <b><p class="jdl">BIDOATA MUHAMAD AL KAUSAR RAMADHAN</p></b>
        </div>
        <div class="form">
            <form action="" method="GET">
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" class="text1" value="Muhamad Al Kausar Ramadhan" disabled></td> <br>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" class="text2" value="19 Tahun" disabled></td> <br>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" class="text3" value="Depok" disabled></td> <br>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="text" class="text4" value="13 November 2002" disabled></td> <br>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td><input type="text" class="text5" value="Software Developer / Web Developer" disabled></td> <br>
                </tr>
                <br>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" class="text6" cols="30" rows="5" disabled>Jalan Merapi Raya, Depok Timur. Jawa Barat</textarea></td> <br>
                </tr>
                <tr>
                    <td>Lokasi Kota Tinggal Sekarang</td>
                    <td><input type="text" class="text7" value="Malang" disabled></td> <br>
                </tr>
                <tr>
                    <td>Nomor Telp / HP</td>
                    <td><input type="text" class="text8" value="0855-7107-548" disabled></td> <br>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td><input type="text" class="text9" value="SMK Taruna Bhakti" disabled></td> <br>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td><input type="text" class="text10" value="Islam" disabled></td> <br>
                </tr>
                <tr>
                    <td><a href="/project_alka"><input type="button" class="sbt" value="Project"></td></a>
                    <td><a href="/pendidikan_alka"><input type="button" class="sbt2" value="Pendidikan"></td></a>
                </tr>
            </form>
        </div>
    </div>
    <script src="js_biodata/jquery-3.6.0.js"></script>
    <script src="js_biodata/animasi.js"></script>
    <script>
        var loading = document.getElementById('loading');

        window.addEventListener('load', function(){
            loading.style.display = "none";
        });
    </script>
</body>
</html>