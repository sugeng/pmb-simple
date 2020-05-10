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
                                @else
                                    TIDAK LULUS
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @if ($registrant->sttes == 'L')
                    @include('graduate.partials.lulus')
                @elseif ($registrant->sttes == 'C')
                    @include('graduate.partials.cadangan')
                @else
                    @include('graduate.partials.tidak_lulus')
                @endif
            </section>
        </div>
    </div>
@endsection
