@extends('main')

@section('title', config('app.name').'| Contacto')

@push('styles')

@endpush

@section('content')
<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="form-widget">

                <div class="form-result"></div>

                <div class="row justify-content-center alig-items-center">
                    <div class="col-lg-6">
                        <form class="row" id="event-registration" action="" method="post" enctype="multipart/form-data">
                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <label>Nombres:</label>
                                <input type="text" name="event-registration-first-name" id="event-registration-first-name" class="form-control required" value="" placeholder="Enter your First Name">
                            </div>
                            <div class="col-6 form-group">
                                <label>Apellidos:</label>
                                <input type="text" name="event-registration-last-name" id="event-registration-last-name" class="form-control required" value="" placeholder="Enter your Last Name">
                            </div>
                            <div class="col-12 form-group">
                                <label>Email:</label>
                                <input type="email" name="event-registration-email" id="event-registration-email" class="form-control required" value="" placeholder="Enter your Email Address">
                            </div>
                            <div class="col-6 form-group">
                                <label>Genero:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input required" type="radio" name="event-registration-gender"id="event-registration-gender-male" value="Male">
                                    <label class="form-check-label nott" for="event-registration-gender-male">Hombre</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="event-registration-gender"id="event-registration-gender-female" value="Female">
                                    <label class="form-check-label nott" for="event-registration-gender-female">Mujer</label>
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <label>Consulta</label>
                                <select class="form-control required" name="event-registration-interests" id="event-registration-interests">
                                    <option value="">-- Selecciona --</option>
                                    <option value="UX Design">Soporte</option>
                                    <option value="Backend Development">Cotización</option>
                                    <option value="Videography">Queja</option>
                                    <option value="Others">Otro</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Como supiste de nosotros</label>
                                    <select class="form-control required" name="event-registration-know-us" id="event-registration-know-us">
                                        <option value="">-- Selecciona --</option>
                                        <option value="Google">Google</option>
                                        <option value="Social Media">Redes Sociales</option>
                                        <option value="Friends">Amigos</option>
                                        <option value="Advertisement">Televisión</option>
                                        <option value="Others">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <label>Notas:</label>
                                <textarea name="freelance-quote-additional-notes" id="freelance-quote-additional-notes" class="form-control" cols="30" rows="8"></textarea>
                            </div>
                            <div class="col-12 d-none">
                                <input type="text" id="event-registration-botcheck" name="event-registration-botcheck" value="" />
                            </div>
                            <div class="col-12">
                                <button type="submit" name="event-registration-submit" class="btn btn-secondary">Enviar</button>
                            </div>

                            <input type="hidden" name="prefix" value="event-registration-">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection

@push('scripts')

@endpush