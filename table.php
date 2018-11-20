<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Artis muda Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>Artis Muda Indonesia</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <!-- <h1 class="masthead-heading mb-0">Daftar Artis</h1> -->
          <h3 class="masthead-subheading mb-0">Daftar Artis muda Indonesia</h3>
          
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div> 
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
        <?php
            $kumpulan_karyawan = array(
          array(
                "nama" => "Chelsea Islan",
                "jk" => "Perempuan",
                "film" => "Refrain, Ayat-ayat Cinta 2, 5 CM"
          ),
          array(
              "nama" => "Tajtjana Saphira",
              "jk" => "Perempuan",
              "film" => "Stip & Pensil"
          ),
          array(
              "nama" => "Prilly Latuconsina",
              "jk" => "Perempuan",
              "film" => "Fall In Love, Sahabat Hidup, Itu Aku Dulu, Hidup Hanya Sekali, Kau Berubah"
          ),
          array(
             "nama" => "Michelle Ziudith",
              "jk" => "Perempuan",
              "film" => "Remember When, Magic Hour, London Love Story 1 & 2 dan ILY from 38.000 Ft."
         ),
          array(
             "nama" => "Amanda Rawles",
              "jk" => "Perempuan",
              "film" => "Promise, Dear Nathan, Jailangkung, A: Aku, Benci & Cinta dan One Fine Day"
         ),
          array(
             "nama" => "Indah Permatasari",
              "jk" => "Perempuan",
              "film" => "Rudy Habibie, Stip & Pensil, A: Aku, Benci & Cinta, Jomblo Reebot dan Takut Kawin"
         ),
          array(
             "nama" => "Natasha Wilona",
              "jk" => "Perempuan",
              "film" => "Anak Jalanan, Anak Sekolahan, Mawar & Melati dan Siapa Takut Jatuh Cinta"
         ),
          array(
             "nama" => "Caitlin Halderman",
              "jk" => "Perempuan",
              "film" => "Surat Cinta Untuk Starla"
         )
          ,
          array(
             "nama" => "Syifa Hadju",
              "jk" => "Perempuan",
              "film" => "Selebgram dan A: Aku, Benci & Cinta, Ayat-ayat Cinta 2"
         ),
          array(
             "nama" => "Ariel Tatum",
              "jk" => "Perempuan",
              "film" => "Ariel & Raja Langit, Oh Baby, Kawin Laris"
         ),
          array(
             "nama" => "Jessica Mila",
              "jk" => "Perempuan",
              "film" => "ASlank Nggak Ada Matinya, Marmut Merah Jambu, Surga Di Telapak Kaki Ibu, Pacarku Anak Koruptor"
         ),
          array(
             "nama" => "Vanesha Prescilla",
              "jk" => "Perempuan",
              "film" => "Dilan 1990, #TemanTapiMenikah"
         ),
          array(
             "nama" => "Cut Syifa",
              "jk" => "Perempuan",
              "film" => "Sodrun Merayu Tuhan, Jodoh Yang Tertukar, Anak Sekolahan"
         ),
          array(
             "nama" => "M Iqbaal",
              "jk" => "Laki-Laki",
              "film" => "Dilan 1990"
         ),
          array(
             "nama" => "Giulio Parengkuan",
              "jk" => "Laki-Laki",
              "film" => "Dilan 1990"
         )
        );
      ?>
    <div class="container">
      <h1 style="text-align: center; color: white">Daftar Artis muda Indonesia</h1>   
      <table class="table table-bordered table-hover" border="0" width="100%" style="text-align: center">
         <thead class="thead-dark">
          <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Daftar Film</th>
          </tr>
        </thead>
      <tbody>
      <?php
        foreach($kumpulan_karyawan as $karyawan){
          echo "<tr>";
            echo "<td>".$karyawan["nama"]."</td>";
            echo "<td>".$karyawan["jk"]."</td>";
            echo "<td>".$karyawan["film"]."</td>";
          echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </section>
    
      <section>
        </br>
      </section>
    </div>
<!-- 
    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/bni.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">Melayani Negeri, Kebanggaan Bangsa</h2>
              <ul style="color: #009999">Visi
                <li>Menjadi Lembaga Keuangan yang Unggul dalam Layanan dan Kinerja</li>
              </ul>
              <ul style="color: #009999">Misi
                  <li>Memberikan layanan prima</li>
                  <li>Meningkatkan nilai investasi</li>
                  <li>Menciptakan kondisi terbaik bagi karyawan</li>
                  <li>Meningkatkan kepedulian dan tanggung jawab</li>
                  <li>Menjadi acuan pelaksanaan kepatuhan dan tata kelola perusahaan yang baik</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/bri.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-5">Melayani Dengan Setulus Hati</h2>
              <ul style="color: blue">Visi
                  <li>Menjadi bank komersial terkemuka yang selalu mengutamakan kepuasan nasabah</li>
              </ul>
              <ul style="color: blue">Misi
                    <li>Melakukan kegiatan perbankan yang terbaik dengan mengutamakan pelayanan kepada UMKM</li>
                    <li>Memberikan pelayanan prima kepada nasabah melalui jaringan kerja yang tersebar luas</li>
                    <li>Memberikan keuntungan dan manfaat yang optimal kepada pihak-pihak yang berkepentingan</li>                    
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/mandiri.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-5">Terdepan. Terpercaya. Tumbuh bersama Anda</h2>
              <ul style="color: #0033cc">Visi
                  <li>Menjadi Lembaga Keuangan Indonesia yang paling dikagumi dan selalu progresif</li>
              </ul>
              <ul style="color: #0033cc">Misi
                    <li>Berorientasi pada pemenuhan kebutuhan pasar</li>
                    <li>Mengembangkan sumber daya manusia professional</li>
                    <li>Memberi keuntungan yang maksimal bagi stakeholder</li>                    
                    <li>Melaksanakan manajemen terbuka</li>
                    <li>Peduli terhadap kepentingan masyarakat dan lingkungan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/btn.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-5">Sahabat Keluarga Indonesia</h2>
              <ul style="color: blue">Visi
                  <li>Menjadi bank yang terkemuka dalam pembiayaan perumahan</li>
              </ul>
              <ul style="color: blue">Misi
                    <li>Memberikan pelayanan unggul dalam pembiayaan perumahan dan industri terkait</li>
                    <li>Meningkatkan keunggulan kompetitif melalui inovasi pengembangan produk, jasa dan jaringan strategis berbasis IT</li>
                    <li>Menyiapkan dan mengembangkan Human Capital yang berkualitas, profesional dan memiliki integritas tinggi</li>                    
                    <li>Melaksanakan manajemen perbankan yang sesuai dengan prinsip kehati-hatian dan <em>good corporate governance</em></li>
                    <li>Mempedulikan kepentingan masyarakat dan lingkungannya</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; amrunhakim 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
