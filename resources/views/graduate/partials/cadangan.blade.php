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
            <p>
                Selamat <strong>{{ $registrant->nmmhs }}</strong>,
                <br /><br />
                Anda telah dinyatakan <strong>LULUS SEBAGAI CADANGAN</strong> pada program studi pilihan <strong>KEDOKTERAN GIGI.</strong>
                <br /><br />
                Anda dapat mendownload <strong><a href="{{ route('graduated.letter') }}?registration_number={{ $registrant->noreg }}" target="_blank">Surat Keterangan Lulus</a></strong> sesuai dengan Program Studi yang Anda pilih.
            </p>
        </section>
        <footer>
            <a href="{{ route('graduated.letter') }}?registration_number={{ $registrant->noreg }}" target="_blank"><i class="fa fa-download"></i> Surat Keterangan Lulus</a>
            <span><a href="{{ url('/') }}"><i class="fa fa-home"></i> Halaman Utama</a></span>

            <a href="https://moestopo.ac.id/download-berkas-berkas-mahasiswa-baru" target="_blank" style="margin-top: 10px;"><i class="fa fa-asterisk"></i> Download Dokumen Mahasiswa Baru</a>
        </footer>
    </div>
</div>
