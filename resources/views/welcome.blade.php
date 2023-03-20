<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CV OWEN EVANDER</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="CV WEBSITE/front end/style.css" />
  </head>
  <body>
    <!--navbar-->
    <nav
      class="navbar navbar-expand-lg navbar-dark fixed-top"
      style="background-color: #090042"
    >
      <div class="container">
        <a class="navbar-brand" href="#" style="color: white">Personal CV</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                style="color: white"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hobby">Hobi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href = "#skill">Skill</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href = "#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--navbar end-->

    <!--jumbotron-->
    <div class="wrapper">
      <div class="jumbotron" style="display: flex; justify-content: center">
        <img data-aos="flip-left"
          src="CV WEBSITE/asset/profile.jpeg"
          width="225px"
          class="rounded-circle img-fluid img-thumbnail"
        />
      </div>

      <div style="display: flex; justify-content: center">
        <p
          style="
            color: white;
            margin-top: 30px;
            font-weight: 700;
            font-size: 2.5vmax;
          "
        >
          Owen Evander | Beban Orang Tua
        </p>
      </div>
    </div>
    <!--jumbotron end-->

    <!--about me-->
    <div class="about" id = "about">
      <div data-aos="fade-up">
        <h2
          style="font-weight: 400; padding-top: 200px; padding-bottom: 40px"
          class="text-center"
        >
          Tentang Saya
        </h2>
        <div class="info">
          <p class="introduceInfo">
            Nama saya Owen Evander, biasanya dipanggil owen. Saya sekarang
            sedang menjalani program studi S1 Sistem Informasi di Universitas
            International Batam.
          </p>
        </div>
      </div>
    </div>
    <!--about me end-->

    <!--hobi-->
    <div class="hobby" id = "hobby">
      <h2 class="text-center" style="padding-bottom: 30px" data-aos="fade-up">Hobby</h2>

      <!--grid-->
      <div class="container text-center">
        <div class="row">
          <div data-aos="flip-right"
            class="col-md-4"
            style="display: flex; justify-content: center; margin-bottom: 20px"
          >
            <div
              style="
                background-color: #090042;
                padding-top: 30px;
                border-radius: 30px;
                width: 300px;
                height: 280px;
              "
            >
              <img src="CV WEBSITE/asset/gitar.jpg" height="200px" width="250px" />
              <p style="padding-top: 10px">Bermain Gitar</p>
            </div>
          </div>
          <div data-aos="flip-right"
            class="col-md-4"
            style="display: flex; justify-content: center; margin-bottom: 20px"
          >
            <div
              style="
                background-color: #090042;
                padding-top: 30px;
                border-radius: 30px;
                width: 300px;
                height: 280px;
              "
            >
              <img src="CV WEBSITE/asset/gamepad.webp" height="200px" width="250px" />
              <p style="padding-top: 10px">Bermain Game</p>
            </div>
          </div>
          <div data-aos="flip-right"
            class="col-md-4"
            style="display: flex; justify-content: center; margin-bottom: 20px"
          >
            <div
              style="
                background-color: #090042;
                padding-top: 30px;
                border-radius: 30px;
                width: 300px;
                height: 280px;
              "
            >
              <img src="CV WEBSITE/asset/baca buku.jpg" height="200px" width="250px" />
              <p style="padding-top: 10px">Membaca Komik</p>
            </div>
          </div>
        </div>
      </div>
      <!--grid end-->
    </div>
    <!--hobi end-->

    <!--skill-->
    <div class="skill" id = "skill">
      <h2 data-aos="zoom-in" style="padding-bottom: 40px" class="text-center">Skills</h2>

      <div data-aos="zoom-in" style="display: flex; justify-content: center">
        <div style="width: 90%">
          <p>HTML</p>
          <div
            class="progress"
            role="progressbar"
            aria-label="Basic example"
            aria-valuenow="0"
            aria-valuemin="0"
            aria-valuemax="100"
            style="margin-bottom: 30px"
          >
            <div class="progress-bar" style="width: 70%"></div>
          </div>
          <p>CSS</p>
          <div
            class="progress"
            role="progressbar"
            aria-label="Basic example"
            aria-valuenow="25"
            aria-valuemin="0"
            aria-valuemax="100"
            style="margin-bottom: 30px"
          >
            <div class="progress-bar" style="width: 50%"></div>
          </div>
          <p>Bootstrap</p>
          <div
            class="progress"
            role="progressbar"
            aria-label="Basic example"
            aria-valuenow="50"
            aria-valuemin="0"
            aria-valuemax="100"
            style="margin-bottom: 30px"
          >
            <div class="progress-bar" style="width: 55%"></div>
          </div>
          <p>Javascript</p>
          <div
            class="progress"
            role="progressbar"
            aria-label="Basic example"
            aria-valuenow="75"
            aria-valuemin="0"
            aria-valuemax="100"
            style="margin-bottom: 30px"
          >
            <div class="progress-bar" style="width: 10%"></div>
          </div>
        </div>
      </div>
    </div>
    <!--skill end-->

    <!--contact-->

    <div class="contact" id = "contact">
      <h2 data-aos="flip-down" class="text-center" style="margin-bottom: 40px">Contact</h2>

      <div data-aos="flip-down" class="container text-center">
        <div class="row">
          <div class="col-lg sosmed" style = "padding-bottom: 20px;">
            <img
              src="CV WEBSITE/asset/instagram.png"
              width="40px"
              style="margin-right: 20px"
            />
            owenevanderrr
          </div>
          <div class="col-lg sosmed" style = "padding-bottom: 20px;">
            <img
              src="CV WEBSITE/asset/whatsapp logo.png"
              width="40px"
              style="margin-right: 20px"
            />
            082171868315
          </div>
          <div class="col-lg sosmed" style = "padding-bottom: 20px;">
            <img
              src="CV WEBSITE/asset/gmail.png"
              width="40px"
              style="margin-right: 20px"
            />
            owenevander24@gmail.com
          </div>
        </div>
      </div>
    </div>

    <!--contact end-->

    <!--footer-->
    <div class="footer">
      <p data-aos="zoom-in-left" class = "text-center">made by @owen evander</p>
    </div>
    <!--footer end-->

<!--script-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
     AOS.init();
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
<!--script end-->
  </body>
</html>
