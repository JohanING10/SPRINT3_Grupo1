@extends('main')

@section('title', config('app.name').'| Quienes Somos')

@push('styles')

@endpush

@section('content')
    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0" style="z-index: 1;">
            <!-- About Us
            ============================================= -->
            <div class="section p-0 mt-0 bg-transparent"
                style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
                <div class="row align-items-stretch clearfix">
                    <div class="col-lg-4 center col-padding"
                        style="background: url({{ asset("../Images/sections/1.jpg")}}) center center no-repeat; background-size: cover;">
                        <div>&nbsp;</div>
                    </div>

                    <div class="col-lg-8 col-padding">
                        <div>
                            <div style="position: relative;">
                                <div class="heading-block border-0" data-heading="SF">
                                    <h3 class="nott ls0">Politicas Corporativas</h3>
                                </div>
                            </div>

                            <!-- About Us Featured Boxes
            ============================================= -->
                            <div class="row clearfix">
                                <div class="col-lg-11 col-md-8 bottommargin">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-globe"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Misión</h3>
                                            <p class="text-justify">proveer servicios integrales de servicios tecnológicos que puede abordar desafíos que van desde los problemas más simples y específicos hasta los más grandes y complejos, con una visión unificada y alineada con las estrategias de negocio de nuestros clientes, entregándoles de manera consistente soluciones, servicios y productos de calidad.</p>
                                            <p class="text-justify">Tenemos una vocación permanente por entregar servicios de excelencia. Nuestro quehacer está basado en procesos de mejora continua que propician el uso de las mejores soluciones tecnológicas para hacer frente a los desafíos y necesidades de quienes nos han elegido su socio estratégico para la implementación de soluciones.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-8 bottommargin">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-gears"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Visión</h3>
                                            <p class="text-justify">ser la empresa integradora de soluciones informáticas con capacidad técnica y financiera para atender nuestros clientes
                                                combinando tecnologías que van a la vanguardia y con los más confiables servicios.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-8">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-et-document"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Objetivos Corporativos</h3>
                                            <p class="text-justify">Construir escenarios donde podemos interactuar con nuestros clientes</p>
                                            <p class="text-justify">Encontrar las soluciones óptimas para las situaciones que sus compañías atraviesan en el día a día</p>
                                            <p class="text-justify">Apoyar y asesorar a nuestros Clientes en la selección más rentable para su inversión en Tecnología y Computación</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

@endsection

@push('scripts')

@endpush
