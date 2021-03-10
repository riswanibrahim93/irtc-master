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
                            <center><h1 class="h1-kompetisi"><span class="idea">Game</span> Development</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/Game Dev.png" alt="">
                            </div>
                            <p class="event-description">
                                Game Development pada Credia.id merupakan kompetisi pengembangan game yang terdiri dari maksimal 3 anggota tim. Setiap peserta akan ditantang untuk membuat sebuah game yang memiliki nilai entertainment yang bagus, memiliki daya jual, dan dapat bersaing dengan game buatan developer luar negeri. Kompetisi ini terdiri dari 3 tahapan mulai dari pengumpulan GDD (Game Design Document), Video teaser dan sesi final berupa presentasi dan pameran. Kriteria penilaian berdasarkan eksekusi, fungsi utama dan sale value game yang dilombakan.
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 contact-person">
                                    <h6>Contact Person : </h6>
                                    <ul class="float-left list-contact">
                                        <li>Naufal : +62 813-3456-5116</li>
                                        <li>Nadila : +62 812-4964-2745</li>
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
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 4.000.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/2nd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 3.000.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/3rd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 2.000.000,-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 80px; text-align: center;">
                            <ul class="best-hadiah">
                                <li>
                                    <span class="tag-best-hadiah">Juara Terfavorit 1 GameDev</span>
                                    <h1>Rp. 1.000.000</h1>
                                </li>
                                <li>
                                    <span class="tag-best-hadiah">Juara Terfavorit 2 GameDev</span>
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
                                                                <li><a href="#" class="importo">Pembukaan registrasi lomba game dev Credia ID dan submit GDD peserta</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">11 September 2019</span></span> </li>
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
                                                                <li><a href="#" class="importo">Penutupan registrasi</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">25 September 2019</span></span> </li>
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
                                                                <li><a href="#" class="importo">Pengumpulan GDD peserta</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">11 September – 15 Oktober 2019 </span></span> </li>
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
                                                                <li><a href="#" class="importo">Pengumuman lolos tahap GDD </a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">20 Oktober 2019</span></span> </li>
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
                                        <div class="col-sm-12 col-md-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Technical Meeting untuk Expo dan Persentasi</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">29 November 2019</span></span> </li>
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
                                        1. Game seperti apa yang bisa dilombakan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        game yang boleh diikutsertakan adalah game yang belum pernah dilombakan di kompetisi manapun, dibuat oleh tim anda sendiri, serta tidak melanggar hukum yang berlaku.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        2. apakah game harus selesai secara sepenuhnya saat presentasi nanti ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        pada tahap akhir, aplikasi permainan minimal sudah mencapai 80% dari draft atau GDD yang sudah dikirimkan.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        3. Saya sudah mendaftar, tetapi saya salah meng-input-kan informasi. Apa yang harus saya lakukan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Silakan hubungi credia@credia.id
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        4. Saya tertarik untuk mendaftar kompetisi, tetapi saya belum membentuk tim. Apakah mungkin untuk tetap mendaftar kompetisi ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Ya, bisa, anda tetap dihitung satu tim walaupun hanya anda sendiri anggotanya, disarankan mencari anggota lagi sampai jumlah maksimal anggota dalam satu tim.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        5. Bolehkah satu orang ikut dalam beberapa tim ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Tidak boleh, satu orang hanya bisa ikut dalam satu tim.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        6. Bisakah saya mengirim beberapa game ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        tidak boleh. Satu orang yang terdaftar secara tim maupun perorangan hanya dapat mengirimkan maksimal satu game.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        7. Apakah diperbolehkan menggunakan asset tambahan diluar buatan tim kami ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Ya, selama asset tersebut dimiliki secara legal, tidak melanggar hukum, dan peserta memiliki kuasa penuh untuk menggunakannya.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        8. Apakah diperbolehkan menggunakan  Framework, plugin  atau teknologi manapun untuk pengembangan game ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        ya, selama teknologi tersebut dimiliki secara legal dan tidak melanggar hukum. Disarankan menggunakan asset yang gratis dan lisensi yang tidak memberatkan tim.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        9. apakah game yang kami buat akan jadi milik penyelenggara ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        tidak, kekayaan intelektual aplikasi permainan tetap menjadi milik pencipta.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        10. Saya masih memiliki banyak pertanyaan, bagaimana saya bisa menghubungi panitia ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Kamu dapat menghubungi kami secara langsung melalui email melalui credia@credia.id atau hubungi kami melalui instagram @credia.id.
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