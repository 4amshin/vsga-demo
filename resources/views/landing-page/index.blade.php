<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/lp-style.css') }}" />
  <title>Desa Wisata | Kambo</title>
</head>

<body>
  <!--NAVBAR-->
  <nav>
    <div class="nav__logo">Kambo<span>.</span></div>
    <ul class="nav__links">
      <li class="link"><a href="#">Home</a></li>
      <li class="link"><a href="#destinasi">Destinasi</a></li>
      <li class="link"><a href="#atraksi">Atraksi</a></li>
      <li class="link"><a href="#souvenir">Souvenir</a></li>
    </ul>
    <a href="/login" class="btn">Login</a>
  </nav>

  <!--HOME-->
  <header>
    <div class="section__container header__container">
      <div class="header__image">
        <img src="{{ asset('assets//img/header-1.jpg') }}" alt="header" />
        <img src="{{ asset('assets/img/header-2.jpg') }}" alt="header" />
      </div>
      <div class="header__content">
        <div>
          <h1>Keindahan Alam & Budaya Unik Kambo</h1>
          <p class="section__subtitle">
            Selamat datang di Desa Wisata Kambo. Nikmati keindahan alam, budaya yang kaya, dan keramahan masyarakat
            lokal. Ciptakan kenangan indah bersama kami.
          </p>
          <div class="action__btns">
            <button class="btn">Jelajahi Sekarang</button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--DESTINASI WISATA-->
  <section id="destinasi" class="section__container destination__container">
    <div class="section__header">
      <div>
        <h2 class="section__title">Destinasi Wisata Kambo</h2>
        <p class="section__subtitle">
          Jelajahi keindahan Desa Wisata Kambo melalui berbagai destinasi menakjubkan. Temukan tempat-tempat yang akan
          membuat kunjungan Anda tak terlupakan.
        </p>
      </div>
    </div>

    <!--List Destinasi-->
    <div class="destination__grid">
      <div class="destination__card">
        <img src="{{ asset('assets/img/destination-1.jpg') }}" alt="destination" />
        <div class="destination__details">
          <p class="destination__title">Tebing</p>
          <p class="destination__subtitle">Kambo</p>
        </div>
      </div>
      <div class="destination__card">
        <img src="{{ asset('assets/img/destination-2.jpg') }}" alt="destination" />
        <div class="destination__details">
          <p class="destination__title">Sarang Sarang</p>
          <p class="destination__subtitle">Kambo</p>
        </div>
      </div>
      <div class="destination__card">
        <img src="{{ asset('assets/img/destination-3.jpg') }}" alt="destination" />
        <div class="destination__details">
          <p class="destination__title">Kebun Organik</p>
          <p class="destination__subtitle">Kambo</p>
        </div>
      </div>
      <div class="destination__card">
        <img src="{{ asset('assets/img/destination-4.jpg') }}" alt="destination" />
        <div class="destination__details">
          <p class="destination__title">Bukit Bintang</p>
          <p class="destination__subtitle">Kambo</p>
        </div>
      </div>
    </div>
  </section>

  <!--ATRAKSI WISATA-->
  <section id="atraksi" class="trip">
    <div class="section__container trip__container">
      <h2 class="section__title">Atraksi Wisata</h2>
      <p class="section__subtitle">
        Desa Wisata Kambo menawarkan beragam atraksi menarik, mulai dari upacara adat yang unik hingga seni tradisional
        yang memukau. Rasakan pengalaman budaya yang autentik.
      </p>

      <!--List Atraksi-->
      <div class="trip__grid">
        @foreach ($daftarAtraksi as $item)
        <div class="trip__card">
            <img src="{{ asset($item->gambar) }}" alt="trip" />
            <div class="trip__details">
              <p>{{ $item->nama_atraksi }}</p>
              <div class="rating"><i class="ri-star-fill"></i> {{ $item->rating }}</div>
              <div class="booking__price">
                <div class="price"><span>Rp</span> {{ number_format($item->harga, 0, ',', '.') }}</div>
                <a href="{{ route('atraksi.pesan', $item->id) }}" class="book__now">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </section>

  <!--SOUVENIR-->
  <section id="souvenir" class="gallary">
    <div class="section__container gallary__container">
      <div class="image__gallary">
        <div class="gallary__col">
          <img src="{{ asset('assets/img/gallery-1.jpg') }}" alt="gallary" />
        </div>
        <div class="gallary__col">
          <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt="gallary" />
          <img src="{{ asset('assets/img/gallery-3.jpg') }}" alt="gallary" />
        </div>
      </div>
      <div class="gallary__content">
        <div>
          <h2 class="section__title">
            Souvenir Desa Wisata Kambo
          </h2>
          <p class="section__subtitle">
            Bawa pulang keajaiban Desa Wisata Kambo dalam setiap cendera mata kami. Sentuhan tangan terampil dan
            kekayaan budaya terpatri dalam setiap detail. Jadikan kenangan Anda abadi dengan potongan kecil dari pesona
            kami.
          </p>
          <!-- <button class="btn">View All</button> -->
        </div>
      </div>
    </div>
  </section>

  <!--FOOTER-->
  <footer id="kontak" class="footer">
    <div class="section__container footer__container">
      <div class="footer__col">
        <h3>Kambo<span>.</span></h3>
        <img class="deswit" src="{{ asset('assets/img/deswit.png') }}" alt="Logo Desa Wisata">
        <img class="deswit" src="{{ asset('assets/img/jadesta.png') }}" alt="Logo Jadesta">
      </div>
      <div class="footer__col">
        <h4>Desa Wisata</h4>
        <p>FAQs</p>
        <p>Terms & Conditions</p>
        <p>Privacy Policy</p>
        <p>Contact Us</p>
      </div>

      <div class="footer__col">
        <h4>Kontak</h4>
        <p><span>Email:</span> info@jadesta.com</p>
        <p><span>Telepon:</span> 0812-1000-2190</p>
        <p>
          <span>Alamat:</span> Kelurahan Kambo, Kecamatan Mungkajang, Kota Palopo, Sulawesi Selatan, Indonesia
        </p>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Desa Wisata Kambo
    </div>
  </footer>
</body>

</html>
