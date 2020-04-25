<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="id">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Pendaftaran Online Mahasiswa Baru | Universitas Prof. Dr. Moestopo (Beragama)</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Pendaftaran Online Universitas Prof. Dr. Moestopo (Beragama)" name="description">
    <meta content="Pendaftaran Online" name="keywords">
    <meta content="BAPSi UPDM(B)" name="author">

    <meta property="og:site_name" content="pmb.moestopo.ac.id">
    <meta property="og:title" content="Pendaftaran Online Universitas Prof. Dr. Moestopo (Beragama)">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">
                                                         <!-- Fonts START -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Pathway+Gothic+One|PT+Sans+Narrow:400+700|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all"
        rel="stylesheet" type="text/css">
                                                         <!-- Fonts END -->
                                                         <!-- Global styles BEGIN -->
    <link href="{!! asset("assets/plugins/bootstrap/css/bootstrap.min.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/plugins/font-awesome/css/font-awesome.min.css") !!}" rel="stylesheet">
                                                         <!-- Global styles END -->
                                                         <!-- Page level plugin styles BEGIN -->
    <link href="{!! asset("assets/pages/css/animate.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/plugins/fancybox/source/jquery.fancybox.css") !!}" rel="stylesheet">
                                                         <!-- Page level plugin styles END -->
                                                         <!-- Theme styles BEGIN -->
    <link href="{!! asset("assets/pages/css/components.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/pages/css/slider.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/onepage/css/style.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/onepage/css/style-responsive.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/onepage/css/themes/red.css") !!}" rel="stylesheet" id="style-color">
    <link href="{!! asset("assets/onepage/css/custom.css") !!}" rel="stylesheet">
                                                         <!-- Theme styles END -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8.19.0/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class="menu-always-on-top">

<!-- Header BEGIN -->
<div class="header header-mobi-ext">
    <div class="container">
        <div class="row">
            <!-- Logo BEGIN -->
            <div class="col-md-2 col-sm-2">
                <a class="scroll site-logo" href="#promo-block"><img
                        src="{!! asset("") !!}assets/onepage/img/logo/red.png" alt="Metronic One Page"></a>
            </div>
            <!-- Logo END -->
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Navigation BEGIN -->
            <div class="col-md-10 pull-right">
                <ul class="header-navigation">
                    <li class="current"><a href="#promo-block">Halaman Utama</a></li>
                    <li><a href="#gelombang">Gelombang</a></li>
                    <li><a href="#program-studi">Program Studi</a></li>
                    <li><a href="#ujian">Ujian</a></li>
                    <li><a href="#persyaratan">Persyaratan</a></li>
                    <li><a href="#formulir">Biaya Formulir</a></li>
                </ul>
            </div>
            <!-- Navigation END -->
        </div>
    </div>
</div>
<!-- Header END -->

<!-- Promo block BEGIN -->
<div class="promo-block" id="promo-block">
    <div id="carousel-example-generic" class="carousel slide carousel-slider" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-one active">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v1"
                                data-animation="animated fadeInDown">
                                Universitas Prof. Dr. Moestopo (Beragama) Peduli <span class="color-red">COVID-19</span>
                            </h2>
                            <div class="animated flipInX">
                                <div class="hidden-xs">
                                    <i class="promo-like fa fa-thumbs-up"></i>
                                    <div class="promo-like-text">
                                        <h2>Gratis Biaya Pendaftaran Mahasiswa Baru.</h2>
                                        <p>Ujian Saringan Masuk (USM) via <a href="https://pmb-cbt.moestopo.ac.id/" target="_blank">Online CBT (Computer Based Test)</a> atau bebas Ujian bagi yang memiliki raport yang memenuhi syarat.</p>
                                        <p>Buruan segera daftar fakultas yang Anda minati.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promo block END -->

<!-- About block BEGIN -->
<div class="about-block content content-center" id="gelombang">
    <div class="container">
        <h2>Pendaftaran Mahasiswa Baru <strong>Kampus Merah Putih</strong></h2>
        <h4>Universitas Prof. Dr. Moestopo (Beragama) membuka pendaftaran untuk Mahasiswa Baru <strong>Angkatan {{ $registration_period->thsms }}</strong>.
            Penerimaan Mahasiswa Baru akan dibagi menjadi <strong>beberapa gelombang</strong> pendaftaran.<br/>
            Anda dapat menentukan gelombang berapa untuk menjalankan Ujian Saringan Masuk melalui <strong>https://cama.moestopo.ac.id</strong>.
        </h4>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="2">
                    Tahun Semester Perkuliahan {{ $registration_period->thsms }}</th>
            </tr>
            <tr>
                <th style="text-align: center">Gelombang</th>
                <th style="text-align: center">Tanggal Ujian</th>
                <th style="text-align: center">Program Studi</th>
            </tr>
            </thead>
            <tbody>
            @if (sizeof($exams) > 0)
                @foreach ($exams as $row)
                    <tr>
                        <td>Gelombang {{ $row->kdgel }}</td>
                        <td>{{ monthName($row->tgtes) }}</td>
                        <td>{!! jurusan($row->kdjur) !!}  </td>
                    </tr>
                @endforeach
            @else
                <td colspan="2">Data tanggal ujian belum didatakan.</td>
            @endif
            </tbody>
        </table>


    </div>
</div>
<!-- About block END -->

<div class="about-block content content-center" id="biaya-kuliah">
    <div class="container">
        <h2>Biaya kuliah Program Studi <strong>Kampus Merah Putih</strong></h2>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="5">Program Studi Kedokteran Gigi</th>
            </tr>
            <tr>
                <th style="text-align: center" rowspan="2">Gelombang</th>
                <th style="text-align: center" colspan="4">Peringkat</th>
            </tr>
            <tr>
                <th style="text-align: center">1</th>
                <th style="text-align: center">2</th>
                <th style="text-align: center">3</th>
                <th style="text-align: center">Cadangan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Satu (1)</td>
                <td>233.000.000</td>
                <td>238.000.000</td>
                <td>243.000.000</td>
                <td>253.000.000</td>
            </tr>
            <tr>
                <td>Dua (2)</td>
                <td>238.000.000</td>
                <td>243.000.000</td>
                <td>253.000.000</td>
                <td>263.000.000</td>
            </tr>
            <tr>
                <td>Tiga (3)</td>
                <td>248.000.000</td>
                <td>253.000.000</td>
                <td>263.000.000</td>
                <td>273.000.000</td>
            </tr>
            <tr>
                <td>Empat (4)</td>
                <td>253.000.000</td>
                <td>263.000.000</td>
                <td>273.000.000</td>
                <td>283.000.000</td>
            </tr>
            <tr>
                <td>Lima (5)</td>
                <td>263.000.000</td>
                <td>273.000.000</td>
                <td>283.000.000</td>
                <td>293.000.000</td>
            </tr>
            <tr>
                <td>Enam (6)</td>
                <td>273.000.000</td>
                <td>283.000.000</td>
                <td>293.000.000</td>
                <td>303.000.000</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="2">Fakultas Ilmu Sosial dan Ilmu Politik</th>
            </tr>
            <tr>
                <th style="text-align: center">Program Studi</th>
                <th style="text-align: center">Total Biaya Kuliah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Program Studi Administrasi Publik</td>
                <td>17.230.000</td>
            </tr>
            <tr>
                <td>Program Studi Hubungan Internasional (HI)</td>
                <td>17.870.000</td>
            </tr>
            </tbody>
        </table>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="2">Fakultas Teknik</th>
            </tr>
            <tr>
                <th style="text-align: center">Program Studi</th>
                <th style="text-align: center">Total Biaya Kuliah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Program Studi Teknik Pertambangan</td>
                <td>13.350.000</td>
            </tr>

            <tr>
                <td>Program Studi Teknik Industri</td>
                <td>9.990.000</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="2">Fakultas Ilmu Ekonomi Bisnis</th>
            </tr>
            <tr>
                <th style="text-align: center">Program Studi</th>
                <th style="text-align: center">Total Biaya Kuliah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Program Studi Manajemen</td>
                <td>16.495.000</td>
            </tr>
            <tr>
                <td>Program Studi Akuntansi</td>
                <td>16.695.000</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="2">Fakultas Ilmu Komunikasi</th>
            </tr>
            <tr>
                <th style="text-align: center">Program Studi</th>
                <th style="text-align: center">Total Biaya Kuliah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Program Studi Ilmu Komunikasi</td>
                <td>20.910.000</td>
            </tr>
            </tbody>
        </table>

        <hr>

        <table class="table">
            <thead>
            <tr>
                <th style="text-align: center" colspan="3">Pasca Sarjana</th>
            </tr>
            <tr>
                <th style="text-align: center">Beasiswa</th>
                <th style="text-align: center">Alumni</th>
                <th style="text-align: center">Non Alumni</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="text-align: center;">22.000.000</td>
                <td style="text-align: center;">30.000.000</td>
                <td style="text-align: center;">32.000.000</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Services block BEGIN -->
<div class="services-block content content-center" id="ujian">
    <div class="container">
        <h2>Pendaftaran <strong>Online</strong> Universitas Prof. Dr. Moestopo (Beragama)</h2>
        <h4>Ujian yang akan diujikan untuk masing-masing Fakultas</h4>

        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 item"><i class="fa fa-heart"></i>
                <h3>Fakultas Kedokteran Gigi</h3>
                <p>BAHASA INGGRIS, BIOLOGI, KIMIA, TES IQ, WAWANCARA, TES KESEHATAN</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item"><i class="fa fa-group"></i>
                <h3>Fakultas Ilmu Sosial dan Ilmu Politik, Fakultas Ekonomi Bisnis, Fakultas Ilmu Komunikasi</h3>
                <p>BAHASA INDONESIA, BAHASA INGGRIS, PENGETAHUAN UMUM, WAWANCARA, KESEHATAN</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item"><i class="fa fa-gear"></i>
                <h3>Fakultas Teknik</h3>
                <p>FISIKA, KIMIA, MATEMATIKA, BAHASA INGGRIS, TPA</p>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 item"><i class="fa fa-institution"></i>
                <h3>Program Pasca Sarjana</h3>
                <p>TES POTENSI AKADEMIK</p>
            </div>
        </div>
    </div>
</div>
<!-- Services block END -->

<!-- Message block BEGIN -->
<div class="message-block content content-center valign-center" id="message-block">
    <div class="valign-center-elem">
        <h2>The details are not the details <strong>They make the design</strong></h2>
        <em>KEEN THEMES</em>
    </div>
</div>
<!-- Message block END -->

<!-- Team block BEGIN -->
<div class="team-block content content-center margin-bottom-40" id="program-studi">
    <div class="container">
        <h2>Program Studi <strong>Kampus Merah Putih</strong></h2>
        <h4>Anda dapat segera mendaftarkan diri menjadi mahasiswa pada program studi pilihan.</h4>

        <div class="row">
            <div class="col-md-4 item">
                <a href="http://fkg.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/kedokteran-gigi.jpg" alt="" class="img-responsive">
                </a>
                <h3>Kedokteran Gigi</h3>
                <em>Jenjang S1</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://fikom.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/ilmu-komunikasi.jpg" alt="" class="img-responsive">
                </a>
                <h3>Ilmu Komunikasi</h3>
                <em>Jenjang S1</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://feb.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/ilmu-manajemen.jpg" alt="" class="img-responsive">
                </a>
                <h3>Manajemen</h3>
                <em>Jenjang S1</em>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <a href="http://feb.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/ilmu-akuntansi.jpg" alt="" class="img-responsive">
                </a>
                <h3>Akuntansi</h3>
                <em>Jenjang S1</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://fisip.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/ilmu-administrasi-negara.jpg" alt=""
                         class="img-responsive">
                </a>
                <h3>Ilmu Administrasi Publik</h3>
                <em>Jenjang S1</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://fisip.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/hubungan-international.jpg" alt=""
                         class="img-responsive">
                </a>
                <h3>Ilmu Hubungan Internasional</h3>
                <em>Jenjang S1</em>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <a href="http://teknik.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/teknik-industri.jpg" alt="" class="img-responsive">
                </a>
                <h3>Teknik Industri</h3>
                <em>Jenjang S1</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://teknik.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/teknik-pertambangan.jpg" alt="" class="img-responsive">
                </a>
                <h3>Teknik Pertambangan</h3>
                <em>Jenjang S1</em>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 item">
                <a href="http://pps.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/magister-manajemen.jpg" alt="" class="img-responsive">
                </a>
                <h3>Magister Manajemen</h3>
                <em>Jenjang S2</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://pps.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/magister-ilmu-komunikasi.jpg" alt=""
                         class="img-responsive">
                </a>
                <h3>Magister Ilmu Komunikasi</h3>
                <em>Jenjang S2</em>
            </div>
            <div class="col-md-4 item">
                <a href="http://pps.moestopo.ac.id" target="_blank">
                    <img src="assets/onepage/img/program-study/magister-administrasi.jpg" alt="" class="img-responsive">
                </a>
                <h3>Magister Ilmu Administrasi</h3>
                <em>Jenjang S2</em>
            </div>
        </div>
    </div>
</div>
<!-- Team block END -->

<div class="prices-block content content-center" id="biaya">
    <div class="container">
        <h2 class="margin-bottom-50"><strong>Biaya</strong> Pendaftaran USM</h2>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>EKONOMI DAN BISNIS</h3>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong><strike>350.000</strike><br> Rp. 0</strong>
                            <p>Per Pendaftaran</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="#online-registration" data-toggle="modal"
                           data-target="#registration-fe">
                            Registrasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>ILMU KOMUNIKASI</h3>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong><strike>350.000</strike><br> Rp. 0</strong>
                            <p>Per Pendaftaran</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="#online-registration" data-toggle="modal"
                           data-target="#registration-non-fkg">
                            Registrasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>KEDOKTERAN GIGI</h3>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong><strike>500.000</strike><br> Rp. 0</strong>
                            <p>Per Pendaftaran</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="#lokasi">Registrasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>TEKNIK</h3>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong><strike>400.000</strike><br> Rp. 0</strong>
                            <p>Per Pendaftaran</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="#lokasi">Registrasi</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pricing-item">
                    <div class="pricing-head">
                        <h3>ILMU SOSIAL DAN POLITIK</h3>
                    </div>
                    <div class="pricing-content">
                        <div class="pi-price">
                            <strong><strike>350.000</strike><br> Rp. 0</strong>
                            <p>Per Pendaftaran</p>
                        </div>
                    </div>
                    <div class="pricing-footer">
                        <a class="btn btn-default" href="#online-registration" data-toggle="modal"
                           data-target="#registration-fisip">
                            Registrasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Choose us block BEGIN -->
<div class="choose-us-block content text-center margin-bottom-40" id="persyaratan">
    <div class="container">
        <h2>Syarat Pendaftaran <strong>Ujian Saringan Masuk (USM)</strong></h2>
        <h4>Untuk mengikuti USM Universitas Prof. Dr. Moestopo (Beragama) harap memenuhi persyaratan-persyaratan berikut
            :</h4>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <img src="{!! asset("assets/onepage/img/choose-us-2.png") !!}" alt="Persyaratan" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="panel-group" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_1">Melunasi Pembayaran Formulir Pendaftaran.</a>
                            </h5>
                        </div>
                        <div id="accordion1_1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Calon peserta USM harap melunasi pembayaran Formulir pendaftaran sesuai dengan
                                   pilihan program studi.
                                   Bagi peserta yang mendaftar melalui pendaftaran online dapat melunasinya dengan
                                   membayar melalui Bank BNI berdasarkan No. SPC.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_2">Melengkapi pengisian data-data peserta USM</a>
                            </h5>
                        </div>
                        <div id="accordion1_2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Peserta harus melengkapi data-data melalui Anjungan Peserta Ujian untuk dapat
                                   mencetak Kartu Ujian Saringan Masuk</p>
                                <p>Kelengkapan data yang dimasukkan harus dilengkapi agar peserta dapat mencetak Kartu
                                   Ujian sebagai bukti yang akan dibawa pada saat ujian dilaksanakan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1"
                                   href="#accordion1_3">Menyiapkan Foto ukuran 4x6</a>
                            </h5>
                        </div>
                        <div id="accordion1_3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p></p>
                                <p>Peserta diharapkan menyediakan foto dengan ukuran 4x6cm sebanyak 2 buah yang akan
                                   digunakan untuk identifikasi pada saat ujian dilaksanakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose us block END -->

<!-- Partners block BEGIN -->
<div class="partners-block">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/cisco.png" alt="cisco">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/walmart.png" alt="walmart">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/gamescast.png" alt="gamescast">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/spinwokrx.png" alt="spinwokrx">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/ngreen.png" alt="ngreen">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <img src="{!! asset("") !!}assets/onepage/img/partners/vimeo.png" alt="vimeo">
            </div>
        </div>
    </div>
</div>
<!-- Partners block END -->

<!-- BEGIN PRE-FOOTER -->
<div class="pre-footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 pre-footer-col">
                <!-- BEGIN BOTTOM CONTACTS -->
                <h2>Lokasi</h2>
                <address class="margin-bottom-20">
                    Kampus I : Jl Hanglekir I No 8, Jakarta Pusat 10270 <br/>Telp : (021) 7220269, (021) 7252225 <br/>
                    Fax : (021) 7395333
                </address>

                <address class="margin-bottom-20">
                    Kampus II : Jl Bintaro Permai Raya No 3, Jakarta Selatan 12330 <br/>Telp : (021) 73885254 <br/> Fax
                    : (021) 73885253
                </address>

                <address class="margin-bottom-20">
                    Website : moestopo.ac.id<br/>
                    Email : pmb@moestopo.ac.id
                </address>

                <address class="margin-bottom-20">
                    Whatsapp : <a href="http://bit.ly/hallopmbupdm">0821 2450 8565</a> <br/>
                    Telepon & SMS : 0812 9947 7801
                </address>
                <!-- END BOTTOM CONTACTS -->
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->

<div id="registration-non-fkg" class="modal fade bd-example-modal-lg" data-backdrop="static" style="margin-top: 80px;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pendaftaran Online NON Kedokteran Gigi</h5>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <div class="portlet-body">
                                @if ($errors->has("error"))
                                    <div class="alert alert-danger" style="text-align: left;">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                @if($messages = Session::get('messages'))
                                    <div class="alert alert-danger" style="text-align: left;">
                                        <strong>Peringatan!</strong>
                                        <p>Alamat email Anda sudah terdaftar sebagai Peserta USM.
                                           Anda tidak dapat mendaftar dengan alamat email yang sama karena :</p><br/>
                                        <ul>
                                            @foreach($messages as $message)
                                                <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                        <br/>
                                        {{ Form::open(['route' => 'registration.resend', 'id' => 'resend-form']) }}
                                        {{ Form::hidden('email', Session::get('email')) }}
                                        <button type="submit" id="resend" class="btn btn-lg red">Kirim Ulang Email
                                                                                                 Konfirmasi
                                        </button>
                                        {{ Form::close() }}
                                    </div>
                                @endif
                                {{ Form::open(['route' => "registration.registered", 'class' => 'form registration', 'role' => 'form', 'method' => 'get']) }}
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                        {{ Form::text('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Alamat Email']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-sun-o"></i></span>
                                                        {{ Form::select('stpid', ["" => "", "B" => "BARU", "P" => "PINDAHAN"], '', ['class' => 'form-control', 'id' => 'status-masuk']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-graduation-cap"></i></span>
                                                        {{ Form::select('kdju1', ["" => "", "11" => "KEDOKTERAN GIGI", "21" => "ILMU ADMINISTRASI PUBLIK", "22" => "ILMU HUBUNGAN INTERNASIONAL", "31" => "MANAJEMEN", "32" => "AKUNTANSI", "41" => "ILMU KOMUNIKASI", "51" => "TEKNIK PERTAMBANGAN", "52" => "TEKNIK INDUSTRI"], '', ['class' => 'form-control', 'id' => 'program-studi']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" id="registration-button" class="btn btn-success">Registrasi</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-4 col-sm-4">
                <div class="copyright">2014 © Metronic One Page. ALL Rights Reserved.</div>
            </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN SOCIAL ICONS -->
            <div class="col-md-4 col-sm-4">
                <ul class="social-icons">
                    <li><a class="rss" data-original-title="rss" href="javascript:void(0);"></a></li>
                    <li><a class="facebook" data-original-title="facebook" href="javascript:void(0);"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:void(0);"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:void(0);"></a></li>
                    <li><a class="linkedin" data-original-title="linkedin" href="javascript:void(0);"></a></li>
                    <li><a class="youtube" data-original-title="youtube" href="javascript:void(0);"></a></li>
                    <li><a class="vimeo" data-original-title="vimeo" href="javascript:void(0);"></a></li>
                    <li><a class="skype" data-original-title="skype" href="javascript:void(0);"></a></li>
                </ul>
            </div>
            <!-- END SOCIAL ICONS -->
            <!-- BEGIN COPYRIGHT -->
            <div class="col-md-4 col-sm-4 text-right">
                <p class="powered">Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
            </div>
            <!-- END COPYRIGHT -->
        </div>
    </div>
</div>
<!-- END FOOTER -->
<a href="#promo-block" class="go2top scroll"><i class="fa fa-arrow-up"></i></a>

<!--[if lt IE 9]>
<script src="{!! asset("assets/plugins/respond.min.js") !!}"></script>
<![endif]-->
<!-- Load JavaScripts at the bottom, because it will reduce page load time -->
<!-- Core plugins BEGIN (For ALL pages) -->
<script src="{!! asset("assets/plugins/jquery.min.js") !!}" type="text/javascript"></script>
<script src="{!! asset("assets/plugins/jquery-migrate.min.js") !!}" type="text/javascript"></script>
<script src="{!! asset("assets/plugins/bootstrap/js/bootstrap.min.js") !!}" type="text/javascript"></script>
<!-- Core plugins END (For ALL pages) -->
<!-- Core plugins BEGIN (required only for current page) -->
<script src="{!! asset("assets/plugins/fancybox/source/jquery.fancybox.pack.js") !!}" type="text/javascript"></script>
<!-- pop up -->
<script src="{!! asset("assets/plugins/jquery.easing.js") !!}"></script>
<script src="{!! asset("assets/plugins/jquery.parallax.js") !!}"></script>
<script src="{!! asset("assets/plugins/jquery.scrollTo.min.js") !!}"></script>
<script src="{!! asset("assets/onepage/scripts/jquery.nav.js") !!}"></script>
<!-- Core plugins END (required only for current page) -->
<!-- Global js BEGIN -->
<script src="{!! asset("assets/onepage/scripts/layout.js") !!}" type="text/javascript"></script>
<script src="{!! asset("assets/pages/scripts/bs-carousel.js") !!}" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.19.0/dist/sweetalert2.all.min.js"></script>
<script>
    jQuery(document).ready(function () {
        Layout.init();

        $(".registration").submit(function(e) {
            e.preventDefault();

            let form = $(this);
            let url = form.attr('action');

            $.ajax({
                type: "GET",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    if (data.result === "error") {
                        Swal.fire({
                            icon: 'error',
                            title: 'Email Sudah Terdaftar',
                            text: data.message,
                        })
                    }
                }
            });


        });
    });
</script>
<!-- Global js END -->
</body>
</html>
