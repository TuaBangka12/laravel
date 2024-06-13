<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>KILAS | CARI SURAT</title>
  <style>
    /* Gaya CSS tetap sama */
  </style>
</head>

<body>
  <nav>
    <div class="nav__logo"><a href="index.php">KILAS KIRIM LACAK SURAT</a></div>
    <ul class="nav__links">
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="profil.php">Profil</a></li>
      <li class="link"><a href="kontak.php">Kontak</a></li>
      <li class="link"><a href="buat_surat.php" class="nav__btn">Buat Surat</a></li>
    </ul>
  </nav>

  <div class="modal-header">
    <h1 style="color: white;" class="modal-title"> Lihat dan Lacak Surat Anda</h1>
    <br>
    <p>
      <form action="cari_surat.php" method="GET">
        <div style="text-align: center;"><input type="text" name="keyword" placeholder="Cari Surat Anda..." /></div>
        <div style="text-align: center;"><button type="submit" class="link">LACAK SURAT</button></div>
        <br>
      </form>
    </p>
  </div>

  <div class="container">
    <table>
      <tr>
        <th>No Surat</th>
        <th>Tanggal Surat</th>
        <th>Pengirim Surat</th>
        <th>Penerima Surat</th>
      </tr>
      <tr>
        <td>0001</td>
        <td>11 Desember 1911</td>
        <td>DUMMY SURAT</td>
        <td>DUMMY SURAT</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>16 Desember 1911</td>
        <td>DUMMY SURAT</td>
        <td>DUMMY SURAT</td>
      </tr>
      <!-- Sisipkan data surat lainnya di sini -->
    </table>
  </div>

</body>

<footer>
  <p> KILAS ©<?php echo date("Y"); ?> Pemerintah Kota Yogyakarta<br>
    <a href="https://www.instagram.com/umumprotokol_kotajogja?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="assets/ig.png" alt="instagram" style="width:42px;height:42px;"></a>
  </p>
</footer>

</html>
