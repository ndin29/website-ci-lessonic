<?php
require 'koneksi.php';
//$lessonic = query("SELECT * FROM lessonic");

error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--My CSS-->
  <link rel="stylesheet" href="css/style.css">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Lessonic.com</title>
</head>

<body id="home" class="scrollspy">


  <!--navbar-->

  <div class="navbar-fixed">
    <nav class="yellow accent-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">
            <font face="impact">
              <font color="black">Lessonic</font>
            </font>
          </a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#portfolio">Portofolio</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login/auth/registration">Login to Member</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  <!--sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="">Home</a></li>
    <li><a href="">Pricing</a></li>
    <li><a href="">Service</a></li>
    <li><a href="">Portofolio</a></li>
    <li><a href="">About Us</a></li>
    <li><a href="">Contact</a></li>
  </ul>

  <!--slider-->
  <div class="slider">
    <div class="row">
      <ul class="slides">
        <?php
        $i = 1;
        $sql = mysqli_query($con, "SELECT * FROM slider");
        while ($data = mysqli_fetch_assoc($sql)) {
          ?>
          <li>
            <img src="img/slider/<?php echo $data["gambar"]; ?>">
            <div class="caption right-align">
              <h3>
                <font face="forte"><?php echo $data["judul"]; ?></font>
              </h3>
              <h5 class="light grey-text text-lighten-3">
                <font face="Monotype Corsiva"><?php echo $data["deskripsi"]; ?></font>
              </h5>
            </div>
          </li>
        <?php $i++;
        } ?>
      </ul>
    </div>>
  </div>



  <!--Home-->
  <section id="home" class="home scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">
          <font face="forte">Home</font>
        </h3>
        <?php
        $i = 1;
        $sql = mysqli_query($con, "SELECT * FROM home");
        while ($data = mysqli_fetch_assoc($sql)) {
          ?>
          <?php
            if ($i % 4 == 1) {
              echo '<div class="row">';
            }
            ?>
          <div class="col m6 light">
            <h5>
              <font face="impact"><?php echo $data["judul"]; ?></font>
            </h5>
            <P><?php echo $data["deskripsi"]; ?></P>
          </div>
          <div class="col m6 light">
            <img width="350px" src="img/portfolio/<?php echo $data["gambar"]; ?>" align="right">
          </div>
          <?php if ($i % 4 == 0) {
              echo '</div>';
            } ?>
        <?php $i++;
        } ?>
      </div>
    </div>
  </section>


  <!--Client-->
  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="img/slider/4.png"></div>



    <div class="container clients">
      <h3 class="center-align white-text">
        <font face="forte">Our Clients</font>
      </h3>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="img/clients/aca.png">
        </div>
        <br>
        <div class="col m4 s12 center">
          <img src="img/clients/telkom.png">
        </div>
        <br>
        <div class="col m4 s12 center">
          <img src="img/clients/bca.png">
        </div>
        <br>
        <div class="col m4 s12 center">
          <img src="img/clients/detikcom.png">
        </div>
        <br>
        <div class="col m4 s12 center">
          <img src="img/clients/djarum.png">
        </div>
        <br>
        <div class="col m4 s12 center">
          <img src="img/clients/kompascom.png">
        </div>
      </div>
    </div>
  </div>


  <!-- Pricing -->
  <section id="pricing" class="pricing yellow lighten-4 scrollspy">
    <div class="container center">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">
          <font face="forte">Pricing</font>
        </h3>
        <p>Daftar harga yang tertera berlaku untuk pemesanan 1 orang siswa.Cara pembayaran les privat dilakukan di setiap akhir bulan setelah proses pembelajaran privat dilaksanakan.Durasi kegiatan belajar-mengajar 1 jam 30 menit (90 menit) sesuai dengan standar jam KBM efektif di sekolah pada umumnya.</p>
        <?php
        $i = 1;
        $sql = mysqli_query($con, "SELECT * FROM pricing");
        while ($data = mysqli_fetch_assoc($sql)) {
          ?>
          <div class="col m3 s12">
            <div class="card-panel">
              <h5 class="center">
                <font face="impact"><?php echo $data["judul"]; ?></font>
              </h5>
              <p><?php echo $data["deskripsi"]; ?></p>
            </div>
          </div>
        <?php $i++;
        } ?>
      </div>
    </div>
  </section>




  <!-- service -->

  <section id="service" class="service scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">
          <font face="forte">Service</font>
        </h3>
        <p class="center">Kami menyediakan beberapa pelayanan untuk les privat, yang bisa di pilih sesuai minat dan bakat siswa.Untuk informasi lebih lengkap bisa langsung menghubungi kami di contak yang sudah kami sediakan di bawah.</p>
        <!--<?php
            $i = 1;
            $sql = mysqli_query($con, "SELECT * FROM service");
            while ($data = mysqli_fetch_assoc($sql)) {
              ?>-->
        <?php
          if ($i % 4 == 1) {
            echo '<div class="row">';
          }
          ?>
        <div class="col m6 light">
          <ul class="collection with-header">
            <?php
              $i = 1;
              $sql = mysqli_query($con, "SELECT * FROM service");
              while ($data = mysqli_fetch_assoc($sql)) {
                ?>
              <li class="collection-item">
                <font face="times new roman"><?php echo $data["judul"]; ?></font>
              </li>
            <?php
                $gambarService[$i] = $data["gambar"];
                $i++;
              } ?>

          </ul>
        </div>
        <div class="col m6 light">
          <img width="300px" src="img/portfolio/<?php echo $gambarService[6]; ?>" align="right" class="circle">
        </div>
        <?php if ($i % 4 == 0) {
            echo '</div>';
          } ?>
        <!--<?php $i++;
            } ?>-->
      </div>
    </div>
  </section>



  <!-- Portfolio -->

  <section id="portfolio" class="portfolio yellow lighten-4 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">
        <font face="forte">Portfolio</font>
      </h3>
      <div class="row">
        <?php
        $i = 1;
        $sql = mysqli_query($con, "SELECT * FROM tb_gambar");
        while ($data = mysqli_fetch_assoc($sql)) {
          ?>
          <?php
            if ($i % 4 == 1) {
              echo '<div class="row">';
            }
            ?>
          <div class="col m3 s12">
            <img src="img/portfolio/<?php echo $data["nama_gambar"]; ?>" class="responsive-img materialboxed">
          </div>
          <?php if ($i % 4 == 0) {
              echo '</div>';
            } ?>
        <?php $i++;
        } ?>
      </div>
  </section>





  <!-- About Us -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">
        <font face="forte">About Us</font>
      </h3>
      <div class="row">
        <?php
        $i = 1;
        $sql = mysqli_query($con, "SELECT * FROM about_us");
        while ($data = mysqli_fetch_assoc($sql)) {
          ?>
          <?php
            if ($i % 4 == 1) {
              echo '<div class="row">';
            }
            ?>

          <div class="col m5 s12">
            <img src="img/portfolio/<?php echo $data["gambar"]; ?>" width="100%" height="650px">
          </div>
          <div class="col m7 s12">
            <h5>
              <font face="impact"><?php echo $data["judul"]; ?></font>
            </h5>
            <p><?php echo $data["deskripsi"]; ?></p>
          </div>
      </div>
    </div>
    </div>
    <?php if ($i % 4 == 0) {
        echo '</div>';
      } ?>
  <?php $i++;
  } ?>
  </section>

  <!-- Contact Us -->
  <section id="contact" class="contact yellow lighten-4 scrollspy">
    <div class="container">
      <h3 class="ligt center grey-text text-darken-3">
        <font face="forte">Contact Us</font>
      </h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel amber accent-3  center black-text">
            <h5>
              <font face="impact">Contact</font>
            </h5>
            <p>Email : Lessonic19@gmail.com</p>
            <p>Phone : (0361) 227 7468</p>
            </p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h5>
                <font face="impact">Our Office</font>
              </h5>
            </li>
            <li class="collection-item">
              <font face="times new roman">Lessonic Les Privat</font>
            </li>
            <li class="collection-item">
              <font face="times new roman">Jl. Gunung Agung, Denpasar, Bali, Indonesia</font>
            </li>
          </ul>
        </div>

        <div class="col m7 s12">
          <form action="send.php" method="post">
            <div class="card-panel">
              <h5>
                <font face="impact">Submit Your Question or Messages!</font>
              </h5>
              <div class="input-field">
                <input type="text" name="nama" id="nama" required class="validate">
                <label for="nama">Name</label>
              </div>

              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>

              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <button type="submit" class="btn amber accent-3 black-text">
                <font face="impact">Send</font>
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="yellow accent-4 center ">
    <p class="flow-text">
      <font face="times new roman"> Copyright &copy;Lessonic 2019 </font>
    </p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);


    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scrool = document.querySelectorAll('.scrollspy')
    M.ScrollSpy.init(scroll, {
      scroolOffset: 80
    });
  </script>

</body>

</html>