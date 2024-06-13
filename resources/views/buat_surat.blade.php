<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>KILAS | CARI SURAT</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

:root {
    --primary-color: #1fca19;
    --primary-color-dark: #004200;
    --secondary-color: #f9fafe;
    --text-color: #ffffff;
    --white: #ffffff;
    --max-width: 1200px;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: "Poppins", sans-serif;
    background-color: var(--secondary-color);
    background-image: url(img/bg_1.jpeg);
    background-position: center;
    background-size: cover;
    /* background-repeat: no-repeat; */
}

nav {
    max-width: var(--max-width);
    margin: auto;
    padding: 1rem;
    height: 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav__logo a {
    font-size: 1.5rem;
    font-weight: 500;
    color: var(--primary-color);
    text-decoration: none;
    transition: 0.3s;
}

.nav__links {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.link a {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    font-weight: 500;
    color: var(--text-color);
    text-decoration: none;
    transition: 0.3s;
}

.link a:hover {
    color: var(--primary-color);
}

.link .nav__btn {
    padding: 0.5rem 2rem;
    color: var(--white) !important;
    background-color: var(--primary-color);
    border-radius: 5px;
}

.link .nav__btn:hover {
    background-color: var(--primary-color-dark);
}

.container {
    max-width: var(--max-width);
    margin: auto;
    padding: 1rem;
    min-height: calc(100vh - 100px);
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5rem;
}

.content__container {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.content__container h1 {
    font-size: 3rem;
    font-weight: 400;
    line-height: 3.5rem;
    color: var(--primary-color-dark);
    margin-bottom: 1rem;
}

.heading__1 {
    font-weight: 700;
}

.heading__2 {
    font-weight: 700;
    color: var(--primary-color);
}

.content__container p {
    font-size: 1rem;
    color: var(--text-color);
    margin-bottom: 2rem;
}

.content__container form {
    display: flex;
    align-items: center;
}

.content__container input {
    width: 100%;
    max-width: 300px;
    padding: 1rem;
    font-size: 0.8rem;
    outline: none;
    border: none;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
}

.content__container button {
    width: fit-content;
    padding: 1rem;
    font-size: 0.8rem;
    white-space: nowrap;
    background-color: var(--primary-color);
    color: var(--white);
    outline: none;
    border: none;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    cursor: pointer;
}

.content__container button:hover {
    background-color: var(--primary-color-dark);
}

.image__container {
    position: relative;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    place-content: center;
}

.image__container img {
    width: 100%;
    max-width: 300px;
    margin: auto;
    border-radius: 10px;
}

.image__container img:nth-child(1) {
    transform: translateY(70px);
}

.image__container img:nth-child(2) {
    transform: translateY(-70px);
}

.image__content {
    position: absolute;
    width: 100%;
    max-width: 310px;
    left: 50%;
    top: 50%;
    transform: translate(-35%, 50%);
    background: linear-gradient(
        to right,
        var(--primary-color),
        var(--primary-color-dark)
    );
    color: var(--white);
    padding: 1rem 2rem;
    border-radius: 10px;
}

.image__content li {
    margin-bottom: 0.5rem;
}

@media (width < 900px) {
    .link a:not(.nav__btn) {
        display: none;
    }

    .container {
        grid-template-columns: repeat(1, 1fr);
    }

    .content__container {
        text-align: center;
    }

    .content__container form {
        margin-right: auto;
        margin-left: auto;
    }

    .image__container {
        grid-area: 1/1/2/2;
    }

    .image__container img {
        transform: translateY(0) !important;
    }

    video {
        transform: translate(-50%, -50%);
        position: absolute;
        top: 50%;
        left: 50%;
    }

  
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ddd;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}
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


  <div class="container">
    <form method ="POST" id="buatsuratform" action="/tambah">
      @csrf
      <h2>Data surat</h2>

      <table style="width:120%">
        Input fields
        <tr>
          <td><label for="nomor">Nomor :</label></td>
          <td><label for="jenis">Jenis :</label></td>
        </tr>
        <tr>
          <td><input type="text" id="nomor" name="nomor" placeholder="Nomor..." style="width:300px;"></td>
          {{-- {{-- <td>< --}}
            <td><input type="text" id="jenis" name="jenis" placeholder="jenis..." style="width:300px;"></td>
            {{-- <select name="jenis">
              <option value="0">Jenis Surat:</option>
              <option value="1">Surat Biasa</option>
              <option value="2">Surat Undangan</option>
            </select> --}}
          {{-- </td> --}}
        </tr>
        
        <tr>
            <td><label for="dari">Dari :</label></td>
            <td><label for="kotaAsal">Kota asal :</label></td>
        </tr>
        <tr>
            <td><input type="text" id="dari" name="dari" placeholder="Dari..." style="width:300px;"></td>
            <td><input type="text" id="kotaAsal" name="KotaAsal" placeholder="Kota asal..." style="width:300px;"></td>
        </tr>
        <tr>
            <td><label for="tanggal">Tanggal :</label></td>
            <td><label for="kepada">Kepada Yth :</label></td>
        </tr>
        <tr>
            <td><input type="text" id="tanggal" name="tanggal" placeholder="Tanggal..." style="width:300px;"></td>
            <td><input type="text" id="kepada" name="kepada" placeholder="Kepada Yth..." style="width:300px;"></td>
        </tr>
        <tr>
            <td><label for="sifat">Sifat :</label></td>
            <td><label for="lampiran">Lampiran :</label></td>
        </tr>
        <tr>
            <td><input type="text" id="sifat" name="sifat" placeholder="Sifat..." style="width:300px;"></td>
            <td><input type="text" id="lampiran" name="lampiran" placeholder="Lampiran..." style="width:300px;"></td>
        </tr>
        <tr>
            <td><label for="nomor">Hal :</label></td>
            <td><label for="jenis">Ringkasan :</label></td>
        </tr>
        <tr>
            <td><input type="text" id="hal" name="hal" placeholder="Hal..." style="width:300px;"></td>
            <td><input type="text" id="ringkasan" name="ringkasan" placeholder="Ringkasan..." style="width:300px;"></td>
        </tr>
      </table>

      <h2>Yang menandatangani surat: </h2> <br>

      <table style="width:120%">
        
        <tr>
          <td><label for="nip">NIP :</label></td>
          <td><label for="nama">Nama :</label></td>
        </tr>
        <tr>
          <td><input type="text" id="nip" name="nip" placeholder="NIP..." style="width:300px;"></td>
          <td><input type="text" id="nama" name="nama" placeholder="Nama..." style="width:300px;"></td>
        </tr>
        <tr>
          <td><label for="nip">Jabatann :</label></td>
          <td><label for="nama">File :</label></td>
        </tr>
        <tr>
          <td><input type="text" id="jabatan" name="jabatan" placeholder="Jabatan..." style="width:300px;"></td>
          <td><input type="text" id="file" name="file" placeholder="File..." style="width:300px;"></td>
        </tr>
      </table> <br>

      <input type="submit" value="Submit">
    </form>
  </div>

  <footer>
  <p style="text-align: center;">KILAS ©2024 Pemerintah Kota Yogyakarta<br></p>
      <a href="https://www.instagram.com/umumprotokol_kotajogja?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
      <div style="text-align: center;">
    <img src="assets/ig.png" alt="Instagram" style="width:42px; height:42px;">
    </div>

    </p>
  </footer>

</body>

</html> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$document.ready(function() {
  $('#buatsuratform').submit(function(e) {
    e.preventDefault();

    var nomor = $('#nomor').val();
    var jenis = $('#jenis').val();
    var dari = $('#dari').val();
    var kotaAsal = $('#kotaAsal').val();
    var tanggal = $('#tanggal').val();
    var kepada = $('#kepada').val();
    var sifat = $('#sifat').val();
    var lampiran = $('#lampiran').val();
    var hal = $('#hal').val();
    var ringkasan = $('#ringkasan').val();
    var nip = $('#nip').val();
    var nama = $('#nama').val();
    var jabatan = $('#jabatan').val();
    var file = $('#file').val();


    $.ajax({
        url: '/web/tambah',
        method: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            nomor: nomor,
            jenis: jenis,
            dari: dari,
            kotaAsal: kotaAsal,
            tanggal: tanggal,
            kepada: kepada,
            sifat: sifat,
            lampiran: lampiran,
            hal: hal,
            ringkasan: ringkasan,
            nip: nip,
            nama: nama,
            jabatan: jabatan,
            file: file
        },
        success: function(response) {
          $('#message').html('<div class="alert alert-success">Penambahan surat berhasil!</div>');
        },
        error: function(xhr, status, error) {
            $('#message').html('<div class="alert alert-danger">Gagal menambahkan surat. Periksa kembali data yang dimasukkan.</div>');
        }
    });

  });


});



</script>
