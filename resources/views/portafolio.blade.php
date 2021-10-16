@extends('main')

@section('title', 'ScriptF')

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
                        <h3 class="nott ls0">Our Works</h3>
                    </div>
                    <div class="grid-filter-wrap">
                        <!-- Grid Filter
                        ============================================= -->
                        <ul class="grid-filter style-2 mx-auto" data-container="#portfolio">
                            <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                            <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                            <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                            <li><a href="#" data-filter=".pf-media">Media</a></li>
                            <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>
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
                                    <img src={{ asset("../Images/portfolio/1.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
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
                                    <img src={{ asset("../Images/portfolio/2.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Locked Steel Gate</a></h3>
                                            <span><a href="#">Illustrations</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <a href="#">
                                    <img src={{ asset("../Images/portfolio/3.jpg")}} alt="Open Imagination">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Mac Sunglasses</a></h3>
                                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                        </div>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="#"><img
                                                        src={{ asset("../Images/portfolio/4.jpg")}}
                                                        alt="Open Imagination"></a></div>
                                            <div class="slide"><a href="#"><img
                                                        src={{ asset("../Images/portfolio/4-2.jpg")}}
                                                        alt="Open Imagination"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark flex-column" data-hover-animate="fadeIn">
                                        <!-- Decription: Start -->
                                        <div class="portfolio-desc pt-0 center" data-hover-animate="fadeInDownSmall"
                                            data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350">
                                            <h3><a href="#">Morning Dew</a></h3>
                                            <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
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
                            <a href="https://www.youtube.com/watch?v=NS0txu_Kzl8" data-lightbox="iframe">
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
                                    style="font-size: 46px; font-weight: 700; letter-spacing: -2px; line-height: 58px">A
                                    small Video from Our Customers.</h3>
                            </div>
                            <p class="font-weight-normal">Interactively facilitate.<br>Tactical systems with compelling
                                materials. Objectively re-engineer diverse relationships long-term impact methodologies.</p>
                            <h5 class="mb-0 font-weight-semibold">&middot; SemiColonWeb - Author, Themeforest Market. <a
                                    href="#"><img src={{ asset("../Images/tf-logo.png")}} height="18" alt="Image"
                                        style="margin-left: 4px"></a></h5>
                            <a href="#" class="button-link bottommargin">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection

@push('scripts')

@endpush
