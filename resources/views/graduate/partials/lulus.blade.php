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
                Anda telah dinyatakan <strong>LULUS</strong> pada program studi pilihan <strong>KEDOKTERAN GIGI.</strong>
                <br /><br />
                Anda dapat mendownload <strong>Surat Keterangan Lulus</strong> sesuai dengan Program Studi yang Anda pilih.
            </p>
        </section>
        <footer>
            <a href="{!! url("/") !!}">Halaman Utama</a>
            <span><a href="#"><i class="fa fa-download"></i> Surat Keterangan Lulus</a></span>
        </footer>
    </div>
</div>
