@extends('welcome.partials.content')
@section('cssLink')
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('deskripsi')
<section id="event-section" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-transparent">
                    <div class="card-body">
                        <div>
                            <center><h1 class="h1-kompetisi"><span class="idea">Internet</span> Of Things</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/IoT.png" alt="">
                            </div>
                            <p class="event-description">
                                Dalam perlombaan IoT Development pada Credia.id kali ini mengangkat tema “IoT For Advancing Future Smart City”. Pada perlombaan ini peserta yang terdiri dari 3 orang setiap tim ditantang untuk membuat suatu produk IoT yang dapat membangun atau menyukseskan serta mengatasi permasalahan terkait smart city. Tidak hanya itu, hasil akhir produk juga akan dinilai dari segi fungsionalitas, inovasi, dan kreatifitas serta manfaat dan pengaruh. Dalam penentuan pemenangnya perlombaan ini akan dilakukan beberapa tahap seleksi mulai dari seleksi proposal, seleksi perangkat IOT melalui video teaser, pameran, dan presentasi final.
                            </p>
                        <div class="row">
                            <div class="col-md-6 col-xs-12 contact-person">
                                <h6>Contact Person : </h6>
                                <ul class="float-left list-contact">
                                    <li>Ari : +62 812-3150-5524</li>
                                    <li>Damar : +62 812-6478-5129</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <div style="margin-top: 30px">
                            <center><h1 class="h1-kompetisi">Prizes</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="row justify-content-center">
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/1st winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 5.000.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/2nd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 4.000.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/3rd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 3.000.000,-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 80px; text-align: center;">
                            <ul class="best-hadiah">
                                <li>
                                    <span class="tag-best-hadiah">Juara favorit 1 IOT </span>
                                    <h1>Rp. 1.000.000</h1>
                                </li>
                                <li>
                                    <span class="tag-best-hadiah">Juara favorit 2 IOT </span>
                                    <h1>Rp. 750.000</h1>
                                </li>
                            </ul>
                        </div>
                        <div style="margin-top: 100px">
                            <center><h1 class="h1-kompetisi">Timeline</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            
                            <div class="row">
                                <div id="timeline">
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-left">
                                        </div>
                                        <div class="col-sm-12 col-md-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Registrasi, Pembayaran dan pengumpulan proposal.</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 September – 10 Oktober 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-right">
                                            
                                        </div>
                                        <div class="offset-md-6 col-sm-12 col-md-6   timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Pengumuman Tahap Penyisihan</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-left">
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-6   timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Realisasi Karya</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober – 25 November 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-right">
                                            
                                        </div>
                                        <div class="offset-md-6 col-sm-12 col-md-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Pengumpulan Video Teaser</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober - 28 November 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-left">
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-6   timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Realisasi Karya</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober – 25 November 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-right">
                                            
                                        </div>
                                        <div class="offset-md-6 col-sm-12 col-md-6 timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Pengumpulan Video Teaser</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">12 Oktober - 28 November 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-left">
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-6   timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Konfirmasi kehadiran dalam expo dan penjurian final</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">25 November 2019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row timeline-movement">
                                        <div class="timeline-badge center-right">
                                            
                                        </div>
                                        <div class="offset-md-6 col-sm-12 col-md-6 timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Expo dan penjurian</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 Desember 20192019</span></span> </li>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row download-rulebook">
                            <div class="col-md-6 col-sm-12 download-rulebook--heading">
                                <div class="download-rulebook--area">
                                    <h2>Download</h2>
                                    <span class="idea download-rulebook--span">Rulebook</span>
                                </div>
                                <br>
                                <a href="client/rulebook/RULEBOOK Credia.id.pdf">
                                    <img class="shadow" src="client/images/home/rulebook-min.png" alt="" width="200px">
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12 download-rulebook--image">
                                <img src="client/images/event/paper.png" alt="">
                            </div>
                        </div>
                        <div class="faq" id="accordion">
                            <center><h1 class="h1-kompetisi">FAQ</h1>
                            <hr class="hr-kompetisi">
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        1.  Apakah lomba berbayar?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Untuk input abstrak gratis, pembayaran dilakukan jika abstrak terpilih. Biaya pendaftaran sesuai dengan yang tercantum di website Credia.ID.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        2. Bagaimana cara mendaftar di lomba ini?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Silahkan registrasi di sini dengan mengirim abstrak terlebih dahulu dan mengikuti petunjuk pada halaman registrasi.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        3. Siapa saja yang boleh mendaftar di perlombaan ini?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Perlombaan IoT ini bersifat umum, artinya siapa saja boleh mendaftarkan diri.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        4. Apakah setiap tim harus dari Lembaga/ Organisasi/ Instansi yang sama ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Tidak, karena lomba ini bersifat umum.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                        5. Apakah boleh satu orang mendaftar lebih dari satu tim ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Tidak boleh, setiap orang hanya berhak mendaftakan diri pada satu tim dengan satu judul karya.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                        5. Apakah satu tim boleh satu orang ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-6" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Boleh, setiap tim maksimal 3 orang dan salah satunya bertindak sebagai tim leader.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                        6. Apakah boleh mengganti anggota jika sudah terdaftar ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-7" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Tidak boleh, anggota tim adalah mereka yang namanya terdaftar pada waktu registrasi peserta.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                        7. Apa saja judul yang diperbolehkan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-8" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Selama judul sesuai tema maka diperbolehkan dan tidak melanggar hukum.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                        8. Judul karya saya sudah pernah saya lombakan dan mendapat juara, apakah diperbolehkan menggunkan karya tersebut ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-9" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Tidak diperbolehkan mengajukan karya yang pernah dilombakan dan mendapat juara 1, 2 dan 3. Jika terdapat pelanggaran maka akan didiskualifikasi.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                        9. Platform apasaja yang diperbolehkan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-10" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Diperbolehkan menggunakan flatform apapun sesuai dengan kebutuhan karya.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                                        10. Karya yang bagaimana yang masuk kualifikasi ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-11" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Karya yang sesuai tema yang mampu membangun dan memajukan konsep smart city serta mampu mengatasi masalah yang ada. Selain itu sebuah karya harus orisinil dan belum  pernah diproduksi masal
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                                        11. Bagaimana jika ada pelanggaran dari peserta ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-12" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Jika ditemukan pelanggaran maka kami tidak segan-segan untuk melakukan diskualifikasi.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-13" aria-expanded="false" aria-controls="collapse-13">
                                        12. Saya masih belum jelas mengenai perlombaan ini, bagaimana sya bisa mendapatkan informasi ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-13" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Informasi terbaru bisa didapatkan melalui technical guide, IG Credia.ID, kontak person PJ lomba dan grup yang sudah disediakan oleh panitia (lihat technical guide).
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection