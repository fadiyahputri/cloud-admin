@extends('SmkTarunaBhakti.layouts.NavbarAndFooter')

@section('title', 'Guru Smk Taruna Bhakti')

@section('link')
<link href="{{asset('assetsweb/assetsguru/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assetsweb/assetsguru/ionicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assetsweb/assetsguru/aos.css')}}" rel="stylesheet">
<!-- main style -->
<link href="{{asset('assetsweb/assetsguru/style1.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assetsweb/assetsguru/id.css')}}">
@endsection

@section('webcontent')
<div class="section" id="projects">
    <div class="container">
        <!-- main container -->
        <div class="main-container portfolio-inner clearfix">
            <!-- portfolio div -->
            <div class="portfolio-div">
                <div class="portfolio">
                    <!-- portfolio_filter -->
                    <div class="categories-grid wow fadeInLeft">
                        <nav class="categories">
                            <ul class="portfolio_filter">
                                <li><a href="" class="active" data-filter="*">Semua</a></li>
                                <li><a href="" data-filter=".Umum">Umum</a></li>
                                <li><a href="" data-filter=".Animasi">Animasi</a></li>
                                <li><a href="" data-filter=".BRF">BRF</a></li>
                                <li><a href="" data-filter=".PPLG">PPLG</a></li>
                                <li><a href="" data-filter=".TEI">TEI</a></li>
                                <li><a href="" data-filter=".TJKT">TJKT</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- portfolio_filter -->

                    <!-- portfolio_container -->
                    <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 PPLG">
                            <div class="card card1">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-rpl" src="assetsweb/assetsguru/assets/rpl-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru RPL</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">RPL</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 Umum">
                            <div class="card card2">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-umum" src="assetsweb/assetsguru/assets/umum-overlay.png" alt="">
                                <h3>Bu Sinta</h3>
                                <h5>Guru BK</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">Umum</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 TJKT">
                            <div class="card card3">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-tkj" src="assetsweb/assetsguru/assets/tjkt-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru TJKT</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">TJKT</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 TJKT">
                            <div class="card card4">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-tkj" src="assetsweb/assetsguru/assets/tjkt-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru TJKT</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">TJKT</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 TEI">
                            <div class="card card5">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-tei" src="assetsweb/assetsguru/assets/tei-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru TEI</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">TEI</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 PPLG">
                            <div class="card card6">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-rpl" src="assetsweb/assetsguru/assets/rpl-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru RPL</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">RPL</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 Animasi">
                            <div class="card card7">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-animasi" src="assetsweb/assetsguru/assets/animasi-overlay.png" alt="">
                                <h3>Bu Sinta</h3>
                                <h5>Guru Animasi</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">Animasi</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 TEI">
                            <div class="card card8">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-tei" src="assetsweb/assetsguru/assets/tei-overlay.png" alt="">
                                <h3>Bu Sinta</h3>
                                <h5>Guru TEI</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">TEI</button></span>
                            </div>
                        </div>
                        <!-- end single work -->

                        <!-- single work -->
                        <div class="col-md-4 col-sm-6 BRF">
                            <div class="card card9">
                                <img class="main-img" src="assetsweb/assetsguru/assets/how-to-be-teacher-malaysia-feature.png" alt="">
                                <img class="jurusan-brf" src="assetsweb/assetsguru/assets/brf-overlay.png" alt="">
                                <h3>Pak Erraldo</h3>
                                <h5>Guru BRF</h5>
                                <span><button class="guru">Guru</button><button
                                        class="guru-jurusan">BRF</button></span>
                            </div>
                        </div>
                        <!-- end single work -->
                    </div>
                    <!-- end portfolio_container -->
                </div>
                <!-- portfolio -->
            </div>
            <!-- end portfolio div -->
        </div>
        <!-- end main container -->
    </div>
</div>
@endsection

@section('linkjs')
        <!-- jQuery -->
        <script src="{{asset('assetsweb/assetsguru/jquery.js')}}"></script>
        <!--  plugins  -->
        <script src="{{asset('assetsweb/assetsguru/bootstrap.min.js')}}"></script>
        <script src="{{asset('assetsweb/assetsguru/plugins.js')}}"></script>
        <script src="{{asset('assetsweb/assetsguru/aos.js')}}"></script>
        <script src="{{asset('assetsweb/assetsguru/jquery.form.js')}}"></script>
        <script src="{{asset('assetsweb/assetsguru/jquery.validate.min.js')}}"></script>
    
        <!--  main script  -->
        <script src="{{asset('assetsweb/assetsguru/custom.js')}}"></script>
@endsection