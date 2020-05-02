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
    <link rel="shortcut icon" href="{!! asset("favicon.ico") !!}" type="image/x-icon">

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
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
                <a href="{!! url('/') !!}" id="logo" style="left: unset"><img src="{!! asset("assets/registration/img/logo-updm.png") !!}" alt="Logo UPDM" height="150"></a>
                <div>
                    <h2>Pendaftaran ONLINE UPDM(B) Periode Registrasi {{ $registration_period->thusm }}</h2>
                    <p>Anda akan mendaftar untuk Program Studi <strong style="font-weight: bolder">{{ $departement->nmjur }} ({{ $departement->kdjur  }})</strong></p>
                    <ul>
                        <li>Pastikan Anda sudah menyiapkan berkas digital raport kelas X, XI dan XII untuk upload.</li>
                    </ul>
                </div>
                <div class="copy">© 2020 Pendaftaran Online Universitas Prof. Dr. Moestopo (Beragama)</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form id="wrapped" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" id="registration_period" name="registration_period" value="{{ $registration_period->thusm }}">
                    <input type="hidden" id="departement_code" name="departement_code" value="{{ $departement->kdjur }}">
                    <input type="hidden" id="registration_status" name="registration_status" value="{{ $data['stpid'] }}">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                        <div class="step">
                            <h2 class="section_title">Formulir Pendaftaran</h2>
                            <h3 class="main_question">Biodata Peserta</h3>

                            <div class="form-group add_top_10">
                                <label for="name">Nama Lengkap (Sesuai Akta/Ijasah terakhir)</label>
                                <input type="text" name="name" id="name" value="{!! $registrant->nmmhs ?? "" !!}" class="form-control required"
                                       onchange="getVals(this, 'name_field');">
                            </div>

                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" name="email" id="email" readonly="readonly" value="{{ $data['email'] }}" class="form-control disabled required"
                                       onchange="getVals(this, 'email_field');">
                            </div>

                            <div class="form-group">
                                <label for="phone">Mobile Phone</label>
                                <input type="text" name="mobile_phone" id="phone" value="{!! $registrant->hpper ?? "" !!}" class="form-control required">
                            </div>

                            <label>Pilih Tanggal CBT Online</label>
                            <div class="form-group">
                                <label for="exam_cbt">Pilih Tanggal CBT Online</label>
                                <select id="exam_cbt" name="exam_cbt" class="form-control required"
                                        style="width: 100%"></select>
                            </div>
                            <div class="form-group add_bottom_30 add_top_20">
                                <label>Upload Foto Peserta<br><small>(Files yang diterima: .jpg/.jpeg, .png - Ukuran Max
                                                                     file: 500KB)</small></label>
                                <div class="fileupload">
                                    <input type="file" name="fileupload" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Sekolah</h2>
                            <h3 class="main_question">Dari asal sekolah Anda?</h3>

                            <div class="form-group add_top_10">
                                <label for="nisn">N.I.S.N (Nomor Induk Sekolah Nasional)</label>
                                <input type="text" name="nisn" id="nisn" value="{!! $registrant->nisn ?? "" !!}" class="form-control required" maxlength="10"
                                       ">
                            </div>

                            <div class="form-group">
                                <label for="province">Propinsi</label>
                                <select id="province" name="school_province" class="form-control required"
                                        style="width: 100%">
                                    @if (isset($registrant->prsma))
                                        <option value="{!! $registrant->prsma !!}" selected="selected">{!! $registrant->schoolProvince()->first()->name !!}</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="regency">Kabupaten</label>
                                <select id="regency" name="school_regency" class="form-control required"
                                        style="width: 100%">
                                    @if (isset($registrant->kbsma))
                                        <option value="{!! $registrant->kbsma !!}" selected="selected">{!! $registrant->schoolRegency()->first()->name !!}</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group add_top_10" id="school_old">
                                <label for="school_name">Nama Sekolah</label>
                                <select id="school_name" name="school_name" class="form-control required"
                                        style="width: 100%">
                                    @if (isset($registrant->kdsma) && !empty($registrant->kdsma))
                                        <option value="{!! $registrant->kdsma !!}" selected="selected">{!! $registrant->school()->first()->nama_sekolah !!}</option>
                                    @endif
                                </select>
                                <span style="font-size: 10px; text-decoration: underline">
                                    <a href="#" class="show-school">Nama Sekolah tidak ditemukan.</a>
                                </span>
                            </div>

                            <div id="school_new" style="display: none">
                                <div class="form-group">
                                    <label for="school_name_new">Nama Sekolah</label>
                                    <input type="text" name="school_name_new" id="school_name_new" value="{!! $registrant->nmsma ?? "" !!}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="school_address">Alamat Sekolah</label>
                                    <input type="text" name="school_address" id="school_address" value="{!! $registrant->alsma ?? "" !!}" class="form-control">
                                    <span style="font-size: 10px; text-decoration: underline">
                                    <a href="#" class="hide-school">Kembali</a>
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Upload Data Raport</h2>
                            <h3 class="main_question">Silakan Upload data raport Anda.</h3>

                            <div class="form-group add_bottom_30 add_top_20">
                                <label>Upload Raport Kelas X (Semester 1 & 2)</label>
                                <div class="fileupload">
                                    <input type="file" name="raport[10][1]" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                                <div class="fileupload">
                                    <input type="file" name="raport[10][2]" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                            </div>

                            <div class="form-group add_bottom_30 add_top_20">
                                <label>Upload Raport Kelas XI (Semester 1 & 2)</label>
                                <div class="fileupload">
                                    <input type="file" name="raport[11][1]" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                                <div class="fileupload">
                                    <input type="file" name="raport[11][2]" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                            </div>

                            <div class="form-group add_bottom_30 add_top_20">
                                <label>Upload Raport Kelas XII (Semester 1 & 2)</label>
                                <div class="fileupload">
                                    <input type="file" name="raport[12][1]" accept=".jpeg,.jpg,.png" class="required">
                                </div>
                                <div class="fileupload">
                                    <input type="file" name="raport[12][2]" accept=".jpeg,.jpg,.png">
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Quizioner</h2>
                            <h3 class="main_question">Alasan Anda memilih Universitas Prof. Dr. Moestopo (Beragama)?</h3>

                            <div class="form-group row">
                                @foreach($quizes->chunk(7) as $rows)
                                    <div class="col-md-6">
                                        @foreach($rows as $quiz)
                                            <label class="container_check version_2">{{ $quiz->answer }}
                                                <input type="checkbox" name="quiz[]" value="{{ $quiz->id  }}" class="required {{ $quiz->else }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group" id="option_else" style="display: none">
                                <label for="quiz_else">Sebutkan Alasan Lainnya</label>
                                <input type="text" name="quiz_else" id="quiz_else" value="" class="form-control">
                            </div>
                        </div>

                        <div class="submit step" id="end">
                            <div class="summary">
                                <div class="wrapper">
                                    <h3>Terima kasih atas waktu Anda <br><span id="name_field"></span>!</h3>
                                    <p>Kami akan segera mengirimkan email notifikasi melalui email Anda di <strong>
                                            {!! $data['email'] !!}
                                        </strong></p>
                                </div>
                            </div>
                        </div>
                        <!-- /step last-->

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Sebelumnya</button>
                        <button type="button" name="forward" class="forward">Selanjutnya</button>
                        <button type="submit" name="process" class="submit">Registrasi</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
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

      <!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Nama Sekolah Tidak ditemukan.</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Jika nama asal sekolah tidak ditemukan, Anda dapat menambahkanya melalui form dibawah.</p>
                <div>
                    <form id="form-add-school">
                        <div class="form-group">
                            <label for="school_name_new">Nama Sekolah</label>
                            <input type="text" name="school_name_new" id="school_name_new" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="school_address">Alamat Sekolah</label>
                            <input type="text" name="school_address" id="school_address" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
      <!-- /.modal -->

      <!-- COMMON SCRIPTS -->
<script src="{!! asset("assets/registration/js/jquery-3.2.1.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/common_scripts.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/velocity.min.js") !!}"></script>
<script src="{!! asset("assets/registration/js/common_functions.js") !!}"></script>
<script src="{!! asset("assets/registration/js/file-validator.js") !!}"></script>
<script src="{!! asset("assets/registration/datepicker/js/bootstrap-datepicker.min.js") !!}"></script>
<script src="{!! asset("assets/registration/datepicker/locales/bootstrap-datepicker.id.min.js") !!}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

      <!-- Wizard script-->
<script src="{!! asset("assets/registration/js/func_1.js") !!}"></script>

<script>
    $('.datepicker').datepicker({
        startView: 2,
        defaultViewDate: {
            year: 2000,
            month: 0,
            day: 1
        },
        format   : 'yyyy-mm-dd',
        autoclose: true
    }).on("changeDate", function (e) {

    });

    $(".show-school").on("click", function (e) {
        $('#school_name').removeClass("required");
        $('#school_name_new').addClass("required");
        $('#school_address').addClass("required");
        $('#school_new').show();
        $('#school_old').hide();
    });

    $(".hide-school").on("click", function (e) {
        $('#school_new').hide();
        $('#school_old').show();
        $('#school_name_new').removeClass("required");
        $('#school_address').removeClass("required");
        $('#school_name').addClass("required");
    });

    $(".else").on("click", function (e) {
       $('#option_else').show();
       $('#option_else').addClass("required");
    });

    document.getElementById('phone').addEventListener('input', function (e) {
        let x = e.target.value.replace(/\D/g, '').match(/(\d{0,4})(\d{0,4})(\d{0,6})/);

        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    let $exam = $('#exam_cbt');
    $exam.select2({
        placeholder: "Pilih Tanggal CBT Online",
        allowClear : true,
        ajax       : {
            url           : '/api/exam',
            delay         : 300,
            data          : function (param) {
                return {
                    registration_period: "{!! $registration_period->thusm !!}",
                    departement_code: "{!! $departement->kdjur !!}",
                    term: param.term
                };
            },
            processResults: function (data) {
                return {
                    results: data.results
                };
            }
        }
    });

    $exam.on('select2:select', function (e) {
        $.ajax({
            url: '/api/exam/check',
            data: {
                email: "{{ $data['email'] }}",
                date: e.params.data.id
            }
        }).done(function (response) {
            if (response.result === 'error') {
                alert(response.message);
                $exam.val(null).trigger('change');
            }
        });
    });

    $('#province').select2({
        placeholder: "Propinsi Asal Sekolah",
        allowClear : true,
        ajax       : {
            url           : '/api/province',
            delay         : 300,
            data          : function (param) {
                return {
                    term: param.term
                };
            },
            processResults: function (data) {
                return {
                    results: data.results
                };
            }
        }
    });

    $('#regency').select2({
        placeholder: "Kabupaten Asal Sekolah",
        allowClear : true,
        ajax       : {
            url           : '/api/regency',
            delay         : 250,
            allowClear    : true,
            data          : function (param) {
                let province_id = $(this).parent().parent().find("#province").val()
                return {
                    province_id: province_id,
                    term       : param.term
                }
            },
            processResults: function (data) {
                return {
                    results: data.results
                };
            }
        }
    });

    $('#school_name').select2({
        placeholder       : "Nama Asal Sekolah",
        allowClear        : true,
        minimumInputLength: 3,
        ajax              : {
            url           : '/api/school',
            delay         : 250,
            allowClear    : true,
            data          : function (param) {
                let province_id = $(this).parent().parent().find("#province").val()
                let regency_id  = $(this).parent().parent().find("#regency").val()
                return {
                    province_id: province_id,
                    regency_id : regency_id,
                    term       : param.term
                }
            },
            processResults: function (data) {
                return {
                    results: data.results
                };
            }
        }
    });
</script>

</body>
</html>
