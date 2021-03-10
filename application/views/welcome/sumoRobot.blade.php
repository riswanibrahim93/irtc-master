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
                            <center><h1 class="h1-kompetisi"><span class="idea">Sumo</span> Robot</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/Sumo Robot.png" alt="">
                            </div>
                            <p class="event-description">
                                Sumo Robot Championship pada Creative Idea 2019 merupakan pertandingan antar dua robot sumo yang saling mengalahkan dengan tujuan untuk menjatuhkan lawan dari arena pertandingan yang telah ditentukan. Robot yang digunakan adalah robot autonomous atau otomatis yang diaktifkan melalui satu tombol dan diperbolehkan menonaktifkan robot dengan remote control. Kompetisi dilaksanakan dengan format sistem gugur hingga babak penentuan atau final.
                            </p>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 contact-person">
                                    <h6>Contact Person : </h6>
                                    <ul class="float-left list-contact">
                                        <li>Afrijal : +62 831-2212-2422</li>
                                        <li>Hudan : +62 882-3403-6902</li>
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
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 3.000.000,-</button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="client/images/event/2nd winner.png" alt="" width="200px" class="img-center">
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <button class="btn btn-primary text-juara btn-juara">Rp. 2.000.000,-</button>
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
                                        1. Apa itu Sumo Robot Championship ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Sumo Robot Championship pada Creative Idea 2019  merupakan ajang pertandingan antara dua robot sumo yang akan saling mengalahkan dengan tujuan untuk menjatuhkan lawan dari arena pertandingan yang telah ditentukan. Robot Sumo yang digunakan adalah robot autonomous atau otomatis yang diaktifkan melalui satu tombol dan diperbolehkan menonaktifkan robot dengan remote control.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        2. Bagaimana Format Lomba Autonomous Sumo Robot Competition ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Sumo Robot Championship ini dilaksanakan dengan format cup atau sistem gugur dimana tim yang kalah tidak bisa melanjutkan ke babak selanjutnya, hingga babak penentuan akhir atau final untuk menentukan siapa yang menjadi juaranya.
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
                                        4. Apakah peserta harus berasal dari satu Lembaga/ Organisasi/ Instansi yang sama ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Ya, peserta diwajibkan berasal dari satu Lembaga/ Organisasi/ Instansi yang sama.
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