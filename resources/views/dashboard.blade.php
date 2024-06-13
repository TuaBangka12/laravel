<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css\styles.css" />
  <title>KILAS | HOME</title>

  <style>
    footer {
      text-align: center;
      padding: 3px;
      background-color: #1fca19;
      color: rgb(0, 0, 0);
    }
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

  </style>
</head>

<body>
  <nav>
    <div class="nav__logo"><a href="index.php">KILAS KIRIM LACAK SURAT</a></div>
    <ul class="nav__links">
      <li class="link"><a href="index.php">Home</a></li>
      <li class="link"><a href="profil.php">Profil</a></li>
      <li class="link"><a href="kontak.php">Kontak</a></li>
      <li class="link"><a href="/tampilsurat" class="nav__btn">Buat Surat</a></li>
    </ul>
  </nav>
  <section class="container">
    <div class="content__container">
      <h1>
        PEMERINTAH KOTA YOGYAKARTA<br />
        <span class="heading__1">PLatform Persuratan</span><br />
        <span class="heading__2">Kota Yogyakarta</span>
      </h1>
      <p>
        Lacak surat untuk mengetahui posisi surat yang sudah anda kirimkan ke Pemkot Jogja. Sebutkan ID JSS anda
        (JSS-O4596) kepada petugas agar bisa melacak surat yang sudah anda serahkan
      </p>
      <form action="cari_surat.php" method="GET">
        <input type="text" name="surat_id" placeholder="Lacak surat anda..." />
        <button type="submit" class="link">LACAK SURAT</button>
      </form>
    </div>
    <div class="image__container">
      <div class="image__content">
        <ul>
          <li>PLATFORM PENGIRIMAN SURAT SECARA ONLINE </li>
          <li>Kirim surat dinas kepada Pemkot Jogja tanpa harus datang langsung. Silahkan pindai (scan) dokumen/surat
            kemudian upload dan isi keterangan pada form yang disediakan.</li>
        </ul>
      </div>
    </div>
  </section>

  <div style="text-align: center; color: aliceblue; font-style: inherit;" class="content_video">
    <h2>
      VIDEO CARA PENGGUNAAN KILAS<br />
    </h2>

    <div style="text-align: center;" class="video">
      <video width="720" height="480" controls>
        <source src="video/tutorial_lacak.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
</body>

<footer class="main-footer">
  <div class="footer-left">
    KILAS ©<?php echo date("Y"); ?> Pemerintah Kota Yogyakarta
    <br>
    <a href="https://www.instagram.com/umumprotokol_kotajogja?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
      <img src="assets/ig.png" alt="instagram" style="width:42px;height:42px;"></a>
    <div class="footer-right">

    </div>
  </div>
</footer>

</html>
