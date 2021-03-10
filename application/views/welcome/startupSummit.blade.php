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
                            <center><h1 class="h1-kompetisi"><span class="idea">Startup</span> Summit</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/home/startup summit.png" alt="">
                            </div>
                            <p class="event-description">
                                Startup Summit adalah event pertemuan dan eksibisi yang memberikan akses kolaborasi bagi para startup enthusiast terhadap ekosistem bisnis untuk penguatan branding maupun peningkatan kapasitas startup. Event ini memiliki dua sub event yaitu National Talkshow dan juga Startup Class yang akan di isi oleh beberapa Startup expert ternama di Indonesia.
                            </p>
                        </div>
                        <div style="margin-top: 50px">
                            <center><h1 class="h1-kompetisi">CREDIA TALK</h1>
                                <span class="sub-h1-kompetisi">NATIONAL TALKSHOW</span>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/talkshow flatdesign.png" alt="">
                            </div>
                            <p class="event-description">
                                Talkshow interaktif Bersama praktisi nasional di bidang bisnis yang berbasis teknologi untuk memberikan informasi dan diseminasi terhadap proses perjalanan membangun bisnis Startup. National Talkshow ini akan di isi oleh Startup expert seperti Bukalapak, kitabisa.com, warung pintar dll.
                            </p>
                        </div>
                        <div style="margin-top: 50px">
                            <center><h1 class="h1-kompetisi">Thematic class</h1>
                            <hr class="hr-kompetisi">
                            </center>
                            <div class="event--image">
                                <img src="client/images/event/thematic class flat design.png" alt="">
                            </div>
                            <p class="event-description">
                                Kelas Startup merupakan kegiatan lanjutan setelah Event National Talkshow. Event ini akan terbagi kedalam 10 kelas yang masing-masing kelas berkapasitas 50 orang. Dari yang sebelumnya merupakan tema umun dilanjutkan menjadi kelas tematik yang akan menghadirkan 10 kategori bisnis digital seperti Tourism, IOT, Healthtech, Artificial Inteligence, Agritech dll. Yang mana Startup Class ini bertujuan untuk berbagi pengetahuan, wawasan dan pengalaman tentang industry Startup secara spesifik.
                            </p>
                        </div>
                        <div class="faq" id="accordion" style="margin-top: 70px">
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
