@extends('front.master')

@section('content')
    <div class="bg"></div>

    <!--Main layout-->
    <main>

        {{--Container--}}
        <div class="container">

            {{--Row--}}
            <div class="row">

                <div class="col-8 offset-2">

                    <!--Section: Contato-->
                    <section class="mt-5 wow fadeIn">

                        <!--Card-->
                        <div class="card">

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Form -->
                                <form name="">
                                    <!-- Heading -->
                                    <h3 class="dark-grey-text text-center">
                                        <strong>Contato</strong>
                                    </h3>
                                    <hr>

                                    <div class="md-form">
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3">Seu nome</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix grey-text"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Seu e-mail</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fa fa-pencil prefix grey-text"></i>
                                        <textarea type="text" id="form8" class="md-textarea"></textarea>
                                        <label for="form8">Sua mensagem</label>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-indigo">Enviar</button>
                                    </div>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!--/.Card-->

                    </section>



                </div>

            </div>
            {{--Fim Row--}}


            {{--Row--}}
            <div class="row">

                <div class="offset-1">

                    {{--Section Google Map--}}
                    <section class="mt-5 mb-5 wow fadeIn">

                        <h3 class="dark-grey-text text-center">
                            <strong>
                                Estamos aqui
                            </strong>
                        </h3>

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half" style="height: 500px; width: 960px">

                            <iframe width=100% height=100% frameborder="0" style="border:0" align="middle"
                                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ7cFzrftdv5QRIC0YG50JyG4&key=AIzaSyDRkjsk8jzX6ruHnuIy0wGJI0I2sbg0sLQ" allowfullscreen>
                            </iframe>

                        </div>

                    </section>



                </div>

            </div>
            {{--Fim Row--}}


        </div>
        {{--Fim Container--}}
    </main>



@endsection