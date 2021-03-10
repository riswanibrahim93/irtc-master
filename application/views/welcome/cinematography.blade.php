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
                            <center><h1 class="h1-kompetisi">Cinematography</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/Cinema.png" alt="">
                            </div>
                            <p class="event-description">
                                 Cinematography Competition ini merupakan kompetisi pembuatan film dengan mengangkat tema “Culture Developments in Millennial Era”. Dari kompetisi ini diharapkan munculnya generasi-generasi film-maker yang memiliki inovasi dan kreativitas dalam industri perfilman sebagai salah satu teknologi entertain yang sangat berpengaruh dalam revolusi industri 4.0. Rule kompetisi ini diawali dengan pengumpulan proposal dan film, lalu film akan di seleksi pada tahap pertama, dan film yang lolos pada tahap pertama akan di screening pada hari kompetisi serta mendapat penilaian dan penjurian. Beberapa kriteria penilainnya dari segi kesesuaian dengan tema, alur cerita, pengambilan gambar, seni berakting aktor, dll. Penghargaan akan diberikan pada 3 film terbaik dan 1 film favorit penonton. 
                            </p>
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
                                    <span class="tag-best-hadiah">Juara Favorit Cinematografi</span>
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
                                                                <li><a href="#" class="importo">Pendaftaran dan Pengumpulan Film </a></li>
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
                                                                <li><a href="#" class="importo">Penjurian Film</a></li>
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
                                                                <li><a href="#" class="importo">Pengumuman besar</a></li>
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
                                                                <li><a href="#" class="importo">Konfirmasi Kehadiran </a></li>
                                                                <li><span class="causale" style="color:#000; font-weight: 600;"><span class="causale">31 Desember 2019</span></span> </li>
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
                                                                <li><a href="#" class="importo">Final Exhibition dan Penjurian Final</a></li>
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
                                        1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                            <div class="card faq--item">
                                <div class="card-header" id="heading-2">
                                    <h5 class="mb-0">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ?
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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