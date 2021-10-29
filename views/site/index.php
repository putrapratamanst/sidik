<html lang="en" class="js-focus-visible" data-js-focus-visible="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Book-cd7d2bcec649b1243839a15d5eb8f0a3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Medium-d74eac43c78bd5852478998ce63dceb3.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Bold-83b8ceaf77f49c7cffa44107561909e4.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: 'Circular-Loom';

            src: url('https://cdn.loom.com/assets/fonts/circular/CircularXXWeb-Black-bf067ecb8aa777ceb6df7d72226febca.woff2') format('woff2');
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1029.0" data-gr-ext-installed="">

    <main role="main">
        <marquee>
            <h2>-Selamat Datang di Sistem Informasi Diklat (SIDIK)-</h2>
        </marquee>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl ?>/image/1.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>DIKLAT CALON KEPALA SEKOLAH</h5>
                        <p>Diadakan pada 02 s/d 04 Juni 2021 di Kabupaten Padang Lawas</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl ?>/image/2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl ?>/image/3.jpeg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= Yii::$app->request->baseUrl ?>/image/4.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Diklat Struktural</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="/peserta/list?type=struktural" role="button">Selengkapnya »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= Yii::$app->request->baseUrl ?>/image/5.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Diklat Fungsional</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="/peserta/list?type=fungsional" role="button">Selengkapnya »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="<?= Yii::$app->request->baseUrl ?>/image/6.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Diklat Teknis</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="/peserta/list?type=teknis" role="button">Selengkapnya »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <hr>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Permohonan Tugas Belajar
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">

                            <div class="row featurette">
                                <div class="col-md-7">
                                    <h2 class="featurette-heading">PNS yang mengajukan permohonan Tugas Belajar harus melampirkan kelengkapan administrasi sebagai berikut : </h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Surat Pengantar dari Kepala SKPD</li>
                                        <li>Surat Permohonan dari PNS yang Bersangkutan</li>
                                        <li>Foto copy SK Pangkat Terakhir Dilegalisir;</li>
                                        <li>Foto copy SKP 1(satu) tahun terakhir yang dilegalisir;</li>
                                        <li>Foto copy Ijazah dan Transkip nilai terakhir yang dilegalisir;</li>
                                        <li>Surat Keterangan dari Kepala SKPD yang menerangkan bahwa keterkaitan antara pendidikan yang ditempuh dengan tugas yang dijalankan;</li>
                                        <li>Surat Keterangan tidak sedang menjalani hukuman disiplin dari Kepala SKPD;</li>
                                        <li>Surat Keterangan uraian tugas PNS yang bersangkutan dari Kepala SKPD;</li>
                                        <li>Surat Keterangan dari Pimpinan Lembaga Pendidikan bahwa PNS yang bersangkutan lulus ujian masuk;</li>
                                        <li>Foto copy Surat Keterangan Akreditasi Perguruan Tinggi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dilegalisir.</li>
                                        <li>Surat Pernyataan Tidak Menuntut Penyesuaian Ijazah kepangkat yang lebihtinggi kecuali formasi mengijinkan.</li>
                                        <li>Surat Pernyataan Bersedia Mengabdi pada Pemerintah Daerah setelah menyelesaikan pendidikan di atas materai.</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: auto; height: auto;" src="<?= Yii::$app->request->baseUrl ?>/image/2.jpeg" data-holder-rendered="true">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                SYARAT PENGURUSAN DIKLAT PKN (PIM TK.II)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row featurette">
                                <div class="col-md-7">
                                    <h2 class="featurette-heading">SYARAT PENGURUSAN DIKLAT PKN (PIM TK.II) :</h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Surat Usulan Dari Pejabat Yang Berwenang/Sekretaris Daerah Kabupaten Kepada Deputi Bidang Diklat Aparatur LAN Melalui Sistem Aplikasi “SIPENDAR”;</li>
                                        <li>Foto Copy SK Pangkat Terakhir Minimal Berpangakat Pembina (IV/a)</li>
                                        <li>Foto copy SK Jabatan Eselon II, Bagi Yang Eselon III Harus Sudah Lulus Ujian Seleksi Calon Peserta Diklat PKN (PIM TK.II);</li>
                                        <li>Batas Usia Minimal Kelahiran 1968. </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?= Yii::$app->request->baseUrl ?>/image/5.jpeg" data-holder-rendered="true" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                SYARAT PENGURUSAN DIKLAT PKP (PIM TK.IV)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row featurette">
                                <div class="col-md-7">
                                    <h2 class="featurette-heading">SYARAT PENGURUSAN DIKLAT PKP (PIM TK.IV) :</h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Surat Usulan Dari Pejabat Yang Berwenang/Sekeretaris Daerah Kabupaten Kepada Kepala Badan Pengembangan SDM Provinsi Sumatera Utara Melalui Badan Kepegawaian dan Pengembangan SDM Kabupaten Padang Lawas;</li>
                                        <li>Foto Copy SK Pangkat Terakhir Minimal Berpangkat Penata Muda (III/a)</li>
                                        <li>Foto copy SK Jabatan Eselon IV, Bagi Sudah Fungsional Umum Harus Sudah Lulus Ujian Seleksi Calon Peserta Diklat PIM TK.IV;</li>
                                        <li>Batas Usia Minimal Kelahiran 1968. </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?= Yii::$app->request->baseUrl ?>/image/3.jpeg" data-holder-rendered="true" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                SYARAT PENGURUSAN DIKLAT PKA (PIM TK.III)
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row featurette">
                                <div class="col-md-7 order-md-2">
                                    <h2 class="featurette-heading">SYARAT PENGURUSAN DIKLAT PKA (PIM TK.III) :</h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Surat Usulan Dari Pejabat Yang Berwenang/Sekeretaris Daerah Kabupaten Kepada Kepala Badan Pengembangan SDM Provinsi Sumatera Utara Melalui Badan Kepegawaian dan Pengembangan SDM Kabupaten Padang Lawas;</li>
                                        <li>Foto Copy SK Pangkat Terakhir Minimal Berpangkat Penata (III/c)</li>
                                        <li>Foto Copy Sertifikat Diklat PIM TK.IV</li>
                                        <li>Foto copy SK Jabatan Eselon III, Bagi Yang Eselon IV Harus Sudah Lulus Ujian Seleksi Calon Peserta Diklat PKA (PIM TK.III);</li>
                                        <li>Batas Usia Minimal Kelahiran 1968. </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5 order-md-1">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?= Yii::$app->request->baseUrl ?>/image/4.jpeg" data-holder-rendered="true" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                SYARAT PENGURUSAN DIKLAT CAMAT
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row featurette">
                                <div class="col-md-7 order-md-2">
                                    <h2 class="featurette-heading">SYARAT PENGURUSAN DIKLAT CAMAT :</h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Surat Usulan Dari Pejabat Yang Berwenang/Sekeretaris Daerah Kabupaten Kepada Kepala Badan Pengembangan SDM Kemendagri Melalui Badan Kepegawaian dan Pengembangan SDM Kabupaten Padang Lawas;</li>
                                        <li>Foto Copy SK Pangkat Terakhir Minimal Berpangkat Penata TK.I (III/d)</li>
                                        <li>Foto copy SK Jabatan Eselon III.a (Administrator};</li>
                                        <li>Batas Usia Minimal Kelahiran 1968. </li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5 order-md-1">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?= Yii::$app->request->baseUrl ?>/image/2.jpeg" data-holder-rendered="true" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                SYARAT PENGURUSAN DIKLAT CALON KEPALA SEKOLAH
                            </button>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row featurette">
                                <div class="col-md-7">
                                    <h2 class="featurette-heading">SYARAT PENGURUSAN DIKLAT CALON KEPALA SEKOLAH :</h2>
                                    <p class="lead">
                                    <ul>
                                        <li>Memiliki kualifikasi akademik paling rendah Sarjana (S1) atau Diploma Empat (D- IV) kependidikan atau non kependidikan Perguruan Tinggi yang terakreditasi;</li>
                                        <li>Berusia setinggi – tingginya 54 tahun pada 01 februari 2022;</li>
                                        <li>Memiliki sertifikat pendidik;</li>
                                        <li>Pengalaman mengajar sekurang – kurangnya 5 (lima) tahun menurut jenis dan jenjang Sekolah/Madrasyah masing – masing dan memiliki pengalaman mengajar sekurang – kurangnya 3 (tiga) tahun di Taman Kanak-kanak/Raudhatul Athfal/ Taman Kanak-kanak Luar Biasa (TKA/RA/TKLB); </li>
                                        <li>Memiliki pangkat paling rendah Penata, golongan ruang III/c;</li>
                                        <li>SKP 2 tahun terakhir (2019 dan 2020);</li>
                                        <li>Semua berkas rangkap 2 (dua);</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="col-md-5 ">
                                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?= Yii::$app->request->baseUrl ?>/image/1.jpeg" data-holder-rendered="true" style="width: auto; height: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /END THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">BKPSDM Palas Gelar Ujian Dinas di Hotel</h2>
                        <p class="lead">
                        <div class="entry-content entry-content-single" itemprop="text">
                            <div class="entry-main-single">
                                <p><strong>PALAS, METRODAILY.id – Badan</strong> Kepegawaian dan Sumber Daya Manusia (BKPSDM) Kabupaten Palas menggelar ujian dinas tingkat I, II dan Ujian Kenaikan Pangkat Penyesuaian Ijazah (UKPPI) di Aula Hotel Al-Marwah Sibuhuan. Ujian ini dilaksanakan selama dua hari berturut, tanggal 6-7 Juli 2021.</p>
                                <p>Fitri Yani Lubis selaku Kabid Pengembangan Sumber Daya Manusia menyebut, giat ini diikuti 43 peserta, terdiri dari 16 peserta ujian dinas Tk II, 5 peserta ujian dinas Tk I, dan 22 peserta UKPPI.</p>
                                <p>“Di antara ujian penyesuaian ini, untuk S1 ada 19 orang, dan ujian penyesuaian paket ijazah ada 3 orang,” sebut Fitri.</p>
                                <p>Acara dihadiri sekaligus dibuka Wakil Bupati Padang Lawas Ahmad Zarnawi Pasaribu. Hadir juga dalam acara itu Asisten III Ali Irfan Hasibuan, Kepala Badan Kepegawaian Negara Kantor Regional 6 Medan Aidu Tauhid, didampingi Tim Penguji antara lain Kabag Tata Usaha Iwan Setyo Prihatin, Kabid Informasi Kepegawaian Jossy Sahat P, Analis Hukum Tuti Hutabalian.</p>
                                <p>Diketahui, ujian dinas maupun UKPPI ini merupakan salah satu syarat bagi Aparatur Sipil Negara (ASN) yang akan naik pangkat seusai dengan tingkatan masing-masing. Tentu ini adalah salah satu langkah pemerintah kabupaten padang lawas untuk meningkatkan SDM pegawai.</p>
                                <p>“Saya mengimbau para peserta agar serius dalam mengikuti ujian dinas ini sehingga nantinya bisa lulus dan mendapatkan sertifikat,” kata Wakil Bupati.<strong> (tan)</strong></p>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: auto; height: auto;" src="https://metrodaily.id/wp-content/uploads/2021/07/Uujian-dinas-BKPSDM-Palas-di-hotel.jpg" data-holder-rendered="true">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">BKPSDM Palas Gelar Ujian Dinas dan UKPPI :</h2>
                        <p class="lead">
                        <div class="entry-content entry-content-single" itemprop="text">
                            <p>Waktu pelaksanaan diselenggarakan selama dua hari, mulai tanggal 6 Juli sampai tanggal 7 Juli 2021.</p>
                            <p>Jumlah Peserta sebanyak 43 orang terdiri dari 16 orang peserta Ujian Dinas Tk. II, 5 orang peserta Ujian Dinas Tk. I, dan 22 orang peserta UKPPI yang terdiri dari Ujian Penyesuaian S1 19 orang, serta Ujian Penyesuaian Paket Ijazah 3 orang. </p>
                            <p>Acara dibuka oleh Wakil Bupati Palas drg.H.Ahmad Zarnawi Pasaribu , C.Ht, MM, MSi.</p>
                            <p>Hadir pada acara pembukaan Asisten III, kepala BKPSDM Palas , dan Kepala Badan Kepegawaian Negara Kantor Regional 6 Medan Bapak Aidu Tauhid.</p>
                            <p>Terlihat juga para Tim Penguji antara lain Kabag Tata Usaha Bapak Iwan Setyo Prihatin, Kabid Informasi Kepegawaian Bapak Jossy Sahat P, Analis Hukum Ibu Tuti Hutabalian.</p>
                            <p>Wabup Zarnawi dalam arahan dan bimbingannya mengatakan bahwa Ujian Dinas maupun UKPPI ini merupakan salah satu syarat bagi Aparatur Sipil Negara (ASN) yang akan naik pangkat seusai dengan tingkatan masing-masing.</p>
                            <p>Wakil Bupati menghimbau para peserta agar serius dalam mengikuti Ujian Dinas ini sehingga nantinya bisa lulus dan mendapatkan Sertifikat.</p>
                            <p>Acara berlangsung dengan tetap mematuhi protokol kesehatan ( Prokes ) Covid – 19. ( MN.02 ).</p>
                        </div>
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://mitanews.co.id/wp-content/uploads/2021/07/IMG-20210707-WA0009.jpg" data-holder-rendered="true" style="width: auto; height: auto;">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">80 Guru SD dan SMP Palas Ikuti Diklat Penilaian Angka Kredit Guru</h2>
                        <p class="lead">
                        <div class="td-post-content tagdiv-type">
                            <!-- image -->
                            <!-- content -->
                            <p><strong>PALAS | MIMBARRAKYAT.CO.ID –</strong>Pemerintah Daerah Kabupaten Kabupaten Padanglawas (Palas) melalui Dinas Pendidikan dan Kebudayaan (Disdikbud ) menggelar Diklat penilaian angka kredit guru di lingkungan pemerintah bekerjasama dengan Badan Kepegawaian dan Pengembangan SDM (BKPSDM).</p>
                            <p>Kegiatan tersebut dibuka secara resmi oleh Wakil Bupati Padanglawas, drg H Ahmad Zarnawi Pasaribu CHt, MM, MSi di Aula Hotel Al Marwah Sibuhuan, Senin (08/03/2021).</p>
                            <p><img loading="lazy" class="size-medium wp-image-4733 aligncenter td-animation-stack-type0-2" src="https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-300x225.jpg" alt="" width="300" height="225" srcset="https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-300x225.jpg 300w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-1024x768.jpg 1024w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-768x576.jpg 768w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-80x60.jpg 80w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-265x198.jpg 265w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-696x522.jpg 696w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-1068x801.jpg 1068w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075-560x420.jpg 560w, https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0075.jpg 1152w" sizes="(max-width: 300px) 100vw, 300px"></p>
                            <p>Diklat yang menghadirkan narasumber dari Lembaga Penjaminan Mutu Pendidikan (LPMP) Provinsi Sumut itu berlangsung selama 4 hari mulai 08 – 11 Maret 2021 yang&nbsp; diikuti sebanyak 80 peserta&nbsp; guru SD dan SMP.</p>
                            <p>Dalam sambutannya Wakil Bupati, drg H Ahmad Zarnawi Pasaribu mengatakan kegiatan Diklat penilaian angka kredit guru sangat penting bagi guru menuju profesional. Sehingga mampu membuat peserta didik menjadi nyaman dalam menuntut ilmu.</p>
                            <p>Kata Wabup, dengan adanya Peraturan Menpan dan RB No.16 Tahun 2009 tentang jabatan fungsional guru dan angka kreditnya. Maka guru harus mengetahui kinerjanya yang dapat dikonversikan menjadi angka kredit, sehingga kenaikan pangkat dapat berjalan lancar.</p>
                            <p>“Penilaian ini pada dasarnya merupakan upaya peningkatan pelayanan kepangkatan kepada aparatur pemerintah dengan kualifikasi jabatan fungsional guru, “kata Wabup Zarnawi.</p>
                            <p>Wabup berharap pelaksanaan pelatihan dapat meningkatkan pemahaman dan kemampuan teknis PNS jabatan fungsional dalam kepangkatan dan penilaian angka kredit khususnya bagi tenaga fungsional guru.</p>
                            <p>Peserta yang mengikuti pendidikan dan pelatihan ini kata Wabup, berharap dapat memberikan ilmunya kepada guru -guru lain yang ada di sekolah masing -masing.</p>
                            <p>“Saya yakin ke depan tidak ada lagi alasan pangkat guru terhenti pada golongan IV/a karena sesuai dengan Peraturan Menpan dan RB No 16 Tahun 2009 ,”terang Zarnawi.</p>
                            <p>Guru pada waktu tertentu tidak naik -naik pangkatnya maka guru yang bersangkutan dapat diusulkan untuk diberhentikan dari jabatan fungsional guru dan dipindahkan menjadi pegawai biasa.</p>
                            <!-- INLINE RELATED POSTS 1/3 //-->
                            <p>“Kita harapkan tidak terjadi di lingkungan Pemerintah Kabupaten Padanglawas,” ujarnya seraya berharap agar para peserta dapat mengikuti kegiatan ini dengan sungguh-sungguh dan memahami pentingnya penilaian angka kredit sebagai pedoman dalam penyelenggaraan pelayanan di unit kerja masing -masing.</p>
                            <p>“Melalui kegiatan pelatihan diharapkan hasilnya adanya kesamaan pemahaman dalam prosedur penyusunan dan kelengkapan penilaian angka kredit secara efektif, efesien, dinamis dan lebih bermakna, “pungkasnya.</p>
                            <p>Tampak hadir di acara pembukaan Diklat penilaian angka kredit guru, Plt Asisten II, Panguhum Nasution, Kepala Inspektorat, Inspektur Harjusli, Fahri Siregar SSTP, Plt Kadis Pendidikan dan Kebudayaan, Hj Rosidawati Suryani SPd dan Plt Kaban BKPSDM, Adi Putra Hasibuan. (ISN)</p>
                        </div>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="https://mimbarrakyat.co.id/wp-content/uploads/2021/03/IMG-20210308-WA0074.jpg" data-holder-rendered="true" style="width: auto; height: auto;">
                    </div>
                </div>

                <hr class="featurette-divider">

            </div><!-- /.container -->

            <p>

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>


    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
        <defs>
            <style type="text/css"></style>
        </defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
    </svg>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
<loom-container id="lo-engage-ext-container">
    <loom-shadow classname="resolved"></loom-shadow>
</loom-container>

</html>