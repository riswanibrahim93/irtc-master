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
                            <center><h1 class="h1-kompetisi"><span class="idea">Line</span> Follower</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/Line Follower.png" alt="">
                            </div>
                            <p class="event-description">
                                Line follower robotic adalah sebuah robot yang dapat mengikuti garis secara otomatis. Robot didukung oleh rangkaian komponen elektronika yang dilengkapi dengan roda dan digerakan oleh motor. Robot tersebut dirancang untuk bernavigasi dan bergerak secara otomatis mengikuti sebuah alur garis yang dibuat. Secara garis besar teknis perlombaanya dengan beradu kecepatan dan keakurasian robot. Kompetisi dilaksakanan dengan format system gugur hingga babak final, selain itu juga terdapat penghargaan untuk robot dengan desain terbaik.
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 contact-person">
                                    <h6>Contact Person : </h6>
                                    <ul class="float-left list-contact">
                                        <li>Hafid : +62 812-3426-6486</li>
                                        <li>Dian : +62 877-5432-1549</li>
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
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 2.500.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/2nd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 1.500.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/3rd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 1.000.000,-</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 80px; text-align: center;">
                            <ul class="best-hadiah">
                                <li>
                                    <span class="tag-best-hadiah">Best Desain 1 Line Tracer Micro</span>
                                    <h1>Rp. 500.000</h1>
                                </li>
                                <li>
                                    <span class="tag-best-hadiah">Best Desain 2 Line Tracer Micro</span>
                                    <h1>Rp. 500.000</h1>
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
                                                                <li><a href="#" class="importo">Pendaftaran Gelombang 1</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 September 2019 - 1 Oktober 2019</span></span> </li>
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
                                                                <li><a href="#" class="importo">Pengumpulan Video Teaser</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">1 Oktober 2019 - 15 Oktober 2019</span></span> </li>
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
                                                                <li><a href="#" class="importo">Pengumuman</a></li>
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
                                        <div class="timeline-badge center-right">
                                            
                                        </div>
                                        <div class="offset-md-6 col-sm-12 col-md-6  timeline-item">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <div class="timeline-panel credits  anim animate fadeInLeft">
                                                        <ul class="timeline-panel-ul">
                                                            <div class="righting-wrap">
                                                                <li><a href="#" class="importo">Exhibition & Awarding</a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">31 Desember 2019</span></span> </li>
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
                                        1. Berkas apa saja yang diperlukan untuk mendaftar Sumo Robot Championship ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Scan KTM, jika tidak ada bisa menggunakan kartu identitas lainnya (KTP, PASPOR, SIM)
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        2. Apa format lomba Sumo Robot Championship ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Sumo Robot Championship ini dilaksanakan dengan format cup atau sistem gugur dimana lawan yang gugur tidak bisa melanjutkan ke babak selanjutnya, hingga babak penentuan akhir atau final untuk menentukan siapa yang menjadi juaranya.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        3. Dimana lombanya dilaksanakan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Gedung Sport Center UIN Maulana Malik Ibrahim Malang
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        4. Apakah peserta harus berasal dari satu universitas yang sama ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Ya, peserta diwajibkan berasal dari satu universitas yang sama.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        5. Apakah terdapat karantina robot selama perlombaan ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Ya, robot akan dikarantina selama perlombaan dan bisa diambil setelah ada intruksi dari panitia
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