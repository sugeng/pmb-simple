<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pendaftaran Mahasiswa Baru Universitas Prof. Dr. Moestopo (Beragama)">
    <meta name="author" content="BAPSI UPDM(B)">
    <title>Formulir Pendaftaran Peserta Ujian Mahasiswa Baru | Universitas Prof. Dr. Moestopo (Beragama)</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{!! asset("assets/registration/img/favicon.ico") !!}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon"
          href="{!! asset("assets/registration/img/apple-touch-icon-57x57-precomposed.png") !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="{!! asset("assets/registration/img/apple-touch-icon-72x72-precomposed.png") !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="{!! asset("assets/registration/img/apple-touch-icon-114x114-precomposed.png") !!}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="{!! asset("assets/registration/img/apple-touch-icon-144x144-precomposed.png") !!}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{!! asset("assets/registration/css/bootstrap.min.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/registration/css/menu.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/registration/css/style.css") !!}" rel="stylesheet">
    <link href="{!! asset("assets/registration/css/vendors.css") !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset("assets/registration/datepicker/css/bootstrap-datepicker.min.css") !!}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>

    <!-- YOUR CUSTOM CSS -->
    <link href="{!! asset("assets/registration/css/custom.css") !!}" rel="stylesheet">

    <!-- MODERNIZR MENU -->
    <script src="{!! asset("assets/registration/js/modernizr.js") !!}"></script>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<div class="container-fluid">
    <div class="row row-height" style="margin-top: 100px;">
        <div class="col-xl-8 col-lg-8 offset-lg-2">
            <div style="background: #F3565D; padding: 25px;">
                <div class="pricing hover-effect">
                    <div class="pricing-head" style="text-align: center">
                        <h3>Konfirmasi Pendaftaran Online
                            <span>Ujian Saringan Masuk (USM) Universitas Prof. Dr. Moestopo (Beragama)</span>
                        </h3>
                        <h4>Selamat Anda telah berhasil melakukan Pendaftaran Online</h4>
                    </div>
                    <ul class="pricing-content list-unstyled" style="color: #f7ffec; margin-left: 50px; font-weight: bolder;">
                        <li>
                            <i class="fa fa-tags"></i> Terdaftar pada tahun : <strong>{!! $registrant->thusm ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart"></i> Terdaftar untuk Program Studi : <strong>{!! $registrant->departement->nmjur ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-asterisk"></i> Nama : <strong>{!! $registrant->nmmhs ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-heart"></i> Nomor Registrasi : <strong> {!! $registrant->noreg ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-star"></i> Tanggal CBT Online : <strong>{!! $registrant->tgtes->format("d F Y") ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-star"></i> Password CBT Online : <strong>{!! $registrant->nospc ?? "" !!}</strong>
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart"></i> Harga Formulir :
                            <strong>
                                @if ($registrant->kdju1 == '11')
                                    Rp. 500.000
                                @else
                                    Rp. 0
                                @endif
                            </strong>
                        </li>
                        <li><i class="fa fa-asterisk"></i>No. SPC :
                            <strong>
                                @if ($registrant->kdju1 == '11')
                                    {!! $registrant->nospc !!}
                                @else
                                    -
                                @endif
                            </strong>
                        </li>
                    </ul>
                </div>
                <!--//End Pricing -->
            </div>
            <div style="padding: 15px; background: #DB3A1B; color: #f7ffec"><a href="{!! url("/") !!}" style="color:#ffffff;">Kembali ke Halaman Utama</a></div>
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
      <!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
      <!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
      <!-- /cd-overlay-content -->

      <!-- COMMON SCRIPTS -->
<script src="{!! asset("assets/registration/js/jquery-3.2.1.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/common_scripts.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/velocity.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/common_functions.js") !!}"></script>
<script src="{!! asset("assets/registration/js/file-validator.js") !!}"></script>
<script src="{!! asset("assets/registration/datepicker/js/bootstrap-datepicker.min.js") !!}"></script>
<script src="{!! asset("assets/registration/datepicker/locales/bootstrap-datepicker.id.min.js") !!}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</body>
</html>
