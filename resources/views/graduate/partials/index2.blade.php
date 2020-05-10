@extends("graduate.main")

@section("content")
    <div class="container">
        <div class="letter">
            <section class="triangle-blue">
                <div class="box-blue">
                </div>
                <div class="triangle"></div>
            </section>
            <div class="clearfix"></div>
            <section class="letter-container">
                <div class="content-left pull-left">
                    <div class="wrapper">
                        <div class="content title">
                            <span>No. Registrasi</span>
                            <span>{!! $registrant->noreg !!}</span>
                        </div>
                        <div class="content amount">
                    <span><i class="fa fa-user" aria-hidden="true"></i>

                     Nama Peserta:</span>
                            <span>{!! $registrant->nmmhs !!}</span>
                        </div>
                        <div class="content date">
                    <span><i class="fa fa-calendar" aria-hidden="true"></i>
                    Tanggal Ujian:</span>
                            <span>{{ $registrant->tgtes->format('d F Y') }}</span>
                        </div>
                        <div class="content issuer">
                    <span><i class="fa fa-star-o" aria-hidden="true"></i>
                     Program Studi Pilihan:</span>
                            <span>{{ $registrant->departement->nmjur }}</span>
                        </div>
                        <div class="confirmation">
                    <span><i class="fa fa-wpforms" aria-hidden="true"></i>
                        Status Ujian:</span>
                            <span>
                                @if ($registrant->sttes == 'L')
                                    LULUS
                                @elseif ($registrant->sttes == 'C')
                                    CADANGAN
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="content-right pull-right">
                    <div class="wrapper">
                        <header class="ligne">
                            <div class="logo pull-left">
                                <img src="{!! asset("assets/registration/img/logo-updm.png") !!}" width="80" alt="UPDM(B) Logo">
                            </div>
                            <div class="time pull-right">
                                <h3>Status Kelulusan Ujian <br>CBT Online</h3>
                                <h5>Periode Penerimaan Tahun {{ $registrant->thusm }} Gelombang {{ $registrant->kdgel }}</h5>
                            </div>
                        </header>
                        <section class="body">

                        </section>
                        <footer>
                            <a href="{!! url("/") !!}">Halaman Utama</a>
                            <span><a href="#"><i class="fa fa-download"></i> Surat Keterangan Lulus</a></span>
                        </footer>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
