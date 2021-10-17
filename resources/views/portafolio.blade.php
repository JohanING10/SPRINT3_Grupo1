@extends('main')

@section('title', config('app.name').'| Portafolio')

@push('styles')

@endpush

@section('content')
    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0" style="z-index: 1;">
            <!-- Our Works
            ============================================= -->
            <div class="section bg-transparent mb-0">
                <div class="container">
                    <div class="heading-block center border-0" data-heading="O">
                        <h3 class="nott ls0">Nuestros Productos y Trabajos</h3>
                    </div>
                    <div class="grid-filter-wrap">
                        <!-- Grid Filter
                        ============================================= -->
                        <ul class="grid-filter style-2 mx-auto" data-container="#portfolio">
                            <li class="activeFilter"><a href="#" data-filter="*">Todas</a></li>
                            <li><a href="#" data-filter=".pf-icons">Mantenimiento</a></li>
                            <li><a href="#" data-filter=".pf-illustrations">Admin Platafprmas Web</a></li>
                            <li><a href="#" data-filter=".pf-mant">Manteminiento</a></li>
                            <li><a href="#" data-filter=".pf-servicio">Soporte 24/7</a></li>
                        </ul><!-- .grid-filter end -->
                    </div>
                </div>
                <!-- Portfolio Items
                ============================================= -->
                <div id="portfolio" class="portfolio row grid-container no-gutters">
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src={{ asset("../Images/portfolio/mantenimientoEquipos.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="portfolio-single.html">Mantenimientos</a></h3>
                                            <span><a href="#">Equipos</a>, <br> <a href="#">Servidores</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src={{ asset("../Images/portfolio/adminPlataformas.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Admin Plataformas</a></h3>
                                            <span><a href="#">Web</a>, <br> <a href="#">Celulares</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-mant">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src={{ asset("../Images/portfolio/soporteSitio.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Manteminiento</a></h3>
                                            <span><a href="#">En Sitio</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-servicio">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide">
                                                <a href="#">
                                                    <img src={{ asset("../Images/portfolio/soporteSitio1.jpg")}} alt="Open Imagination">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Servicio de soporte</a></h3>
                                            <span><a href="#">24/7</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div><!-- #portfolio end -->
            </div>

            <!-- Video Sections
        ============================================= -->
            <div class="section bg-transparent mt-0 clearfix">
                <div class="container clearfix">
                    <div class="row topmargin-lg clearfix">
                        <div class="col-lg-6 p-0">
                            <!-- Youtube Video Link
                            ============================================= -->
                            <a href="https://www.youtube.com/watch?v=_YwKSdtWr0Q" data-lightbox="iframe">
                                <img src={{ asset("../Images/sections/video.jpg")}} alt="Youtube Video"
                                    style="box-shadow: 0px 0px 25px 0px rgba(0,0,0,0.15); border-radius: 6px;">
                                <i class="icon-play"
                                    style="position: absolute; top: 50%; left: 50%; font-size: 60px; color: #FFF; margin-top: -45px; margin-left: -23px"></i>
                            </a>
                        </div>
                        <!-- Video Texts
                        ============================================= -->
                        <div class="col-lg-6" style="padding-left: 60px;">
                            <div class="heading-block topmargin-sm bottommargin-sm border-0">
                                <h3 class="nott"
                                    style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">
                                    Un pequeño video de las mejores paginas web.</h3>
                            </div>
                            <p class="font-weight-normal">Realizamos colaborativos para su elaboración.<br>
                                Ayudamos en el fronten y en la base de datos.</p>
                            <a href="#" class="button-link bottommargin">Lee Más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection

@push('scripts')

@endpush
