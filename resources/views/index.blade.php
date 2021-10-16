@extends('main')

@section('title', 'ScriptF')

@push('styles')

@endpush

@section('content')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-loop="true">
        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2 class="font-primary nott">TRABAJO CREATIVO.</h2>
                                    <p class="font-weight-light font-primary d-none d-sm-block">Comunicación con el personal.</p>
                                    <a href="#" class="button button-rounded button-large nott ls0 font-primary">Contactanos</a>
                                </div>
                            </div>
                        </div>
			            nav: true,
                        <div class="swiper-slide-bg" style="background-image: url({{ asset("../Images/slider/1.jpg")}});">
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption slider-caption-center">
                                <div>
                                    <h2 class="font-primary">Fabulosos Proyectos.</h2>
                                    <p class="font-weight-light font-primary d-none d-sm-block">Realizamos lo que tu imaginación alcance.</p>
                                    <a href="#" class="button button-rounded button-large nott ls0 font-primary">Proyectos</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url({{ asset("../Images/slider/2.jpg")}});">
                        </div>
                    </div>
                </div>
                <!-- Slider Arrows
                ============================================= -->
                <div class="slider-arrow-left" class="bg-transparent"><i class="icon-line-arrow-left"></i></div>
                <div class="slider-arrow-right" class="bg-transparent"><i class="icon-line-arrow-right"></i></div>
            </div>
            <!-- Slider Mouse Icon
            ============================================= -->
            <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src={{ asset("../Images/mouse.svg")}} alt="Image"></a>
        </div>
    </section>


    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0" style="z-index: 1;">
            <div class="container topmargin clearfix">
                <!-- What We Do
                ============================================= -->
                <div class="heading-block center border-0" data-heading="W">
                    <h3>Nuestra Compañía</h3>
                </div>
                <div class="row clearfix">
                    <div class="center col-lg-8 offset-lg-2 bottommargin">
                        <h3 class="text-rotater font-secondary" data-separator="," data-rotate="fadeInRight"
                            data-speed="3500">Estamos orientados a transformar y entregar nuevas formas de hacer las cosas, mediante soluciones de tecnología que impacten en el desarrollo de las organizaciones.
                            conectarnos con las necesidades de nuestros clientes, aportando innovación y metodologías necesarias para facilitar los procesos.                            
                        </h3>
                    </div>
                    
                    <div class="center col-lg-8 offset-lg-2 bottommargin">
                        <h3>Nuestro equipo de trabajo</h3>
                    </div>
                    <div class="clear"></div>
                    <!-- Features colomns
                    ============================================= -->
                    <div class="row clearfix justify-content-center alig-items-center">                            
                            <div class="col-lg-2 bottommargin-sm">
                                <div class="feature-box media-box fbox-bg">
                                    <div class="fbox-media">
                                        <a href="#"><img src={{ asset("../Images/employees/4.jpeg")}} alt="Sonia Marcela Duque"></a>
                                    </div>
                                    <div class="fbox-content fbox-content-lg">
                                        <h3 class="nott ls0 font-weight-semibold">Sonia Marcela Duque
                                            <span class="subtitle font-secondary font-weight-light ls0">Scrum Master.</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-lg-2 bottommargin-sm">
                                <div class="feature-box media-box fbox-bg">
                                    <div class="fbox-media">
                                        <a href="#"><img src={{ asset("../Images/employees/1.png")}} alt="Yesica Paola González Fuentes" ></a>
                                    </div>
                                    <div class="fbox-content fbox-content-lg">
                                        <h3 class="nott ls0 font-weight-semibold">Yesica Paola González Fuentes
                                            <span class="subtitle font-secondary font-weight-light ls0">Dueño de Producto</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 bottommargin-sm">
                                <div class="feature-box media-box fbox-bg">
                                    <div class="fbox-media">
                                        <a href="#"><img src={{ asset("../Images/employees/5.jpg")}} alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content fbox-content-lg">
                                        <h3 class="nott ls0 font-weight-semibold">Hernan Medina Figueroa
                                            <span class="subtitle font-secondary font-weight-light ls0">Implementadores.</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 bottommargin-sm">
                                <div class="feature-box media-box fbox-bg">
                                    <div class="fbox-media">
                                        <a href="#"><img src={{ asset("../Images/employees/3.jpeg")}}
                                                alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content fbox-content-lg">
                                        <h3 class="nott ls0 font-weight-semibold">Néstor López Medina
                                            <span class="subtitle font-secondary font-weight-light ls0">Diseñadores.</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 bottommargin-sm">
                                <div class="feature-box media-box fbox-bg">
                                    <div class="fbox-media">
                                        <a href="#"><img src={{ asset("../Images/employees/2.jpeg")}}
                                                alt="Featured Box Image"></a>
                                    </div>
                                    <div class="fbox-content fbox-content-lg">
                                        <h3 class="nott ls0 font-weight-semibold">Johannes Eduardo Rojas Aguirre
                                            <span class="subtitle font-secondary font-weight-light ls0">Pruebas.</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        {{-- </div>  --}}
                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@endsection

@push('scripts')

@endpush
