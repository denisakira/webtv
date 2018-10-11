@extends('front.master')

@section('content')
    <div class="contato-bg"></div>

    <!--Main layout-->
    <main>

        {{--Container--}}
        <div class="container">

            {{--Row--}}
            <div class="row">

                <div class="col-8 offset-2">


                    <!--Section: Contact v.2-->
                    <section>

                        <!--Section heading-->
                        <h2 class="text-center py-5">Contato</h2>

                        @include('front.errors')

                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-8 col-xl-9">

                                <form method="POST" id="contact-form" action="/contato">
                                    {{ csrf_field() }}

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form">
                                                <input required type="text" id="nome" class="form-control" name="nome">
                                                <label for="nome" class="">Seu nome</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form">
                                                <input required type="email" id="email" class="form-control" name="email">
                                                <label for="email" class="">Seu email</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <input required type="text" id="assunto" class="form-control" name="assunto">
                                                <label for="assunto" class="">Assunto</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea required type="text" id="mensagem" class="form-control md-textarea"
                                                          name="mensagem" rows="3"></textarea>
                                                <label for="mensagem">Mensagem</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <div class="text-center text-md-left">
                                        <button type="submit" form="contact-form"
                                                class="btn btn-primary btn-md">Enviar
                                        </button>
                                    </div>

                                </form>


                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 col-xl-3 text-center mt-5">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-map-marker fa-2x red-text"></i>
                                        <p>UNESP <br>Av. Eng. Luís Edmundo Carrijo Coube, 14-01<br>Bauru, SP</p>
                                    </li>

                                    {{--<li>--}}
                                        {{--<i class="fas fa-phone fa-2x mt-4 red-text"></i>--}}
                                        {{--<p>+ 01 234 567 89</p>--}}
                                    {{--</li>--}}

                                    <li>
                                        <i class="fas fa-envelope fa-2x mt-4 red-text"></i>
                                        <p>producao@faacwebtv.com.br</p>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                        </div>

                    </section>
                    <!--Section: Contact v.2-->


                </div>

            </div>
            {{--Fim Row--}}


            <br class="my-5">

            {{--Row--}}
            <div class="row">

                <div class="offset-2">



                    {{--Section Google Map--}}
                    <section class="mt-5 mb-5 wow fadeIn">

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half">

                            <iframe width=100% height=100% frameborder="0" style="border:0" align="middle"
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ7cFzrftdv5QRIC0YG50JyG4&key=AIzaSyDRkjsk8jzX6ruHnuIy0wGJI0I2sbg0sLQ" allowfullscreen>
                            </iframe>

                        </div>

                    </section>
                    {{--Fim Section Google Map--}}


                </div>

            </div>
            {{--Fim Row--}}


        </div>
        {{--Fim Container--}}
    </main>



@endsection