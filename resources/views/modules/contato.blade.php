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


                    <!--Section: Contact v.2-->
                    <section>

                        <!--Section heading-->
                        <h2 class="text-center h1 py-5">Contato</h2>
                        <!--Section description-->
                        {{--<p class="text-center mb-5">texto?</p>--}}

                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-8 col-xl-9">

                                <form>

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="text" id="contact-name" class="form-control">
                                                <label for="contact-name" class="">Your name</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form">
                                                <input type="text" id="contact-email" class="form-control">
                                                <label for="contact-email" class="">Your email</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <input type="text" id="contact-Subject" class="form-control">
                                                <label for="contact-Subject" class="">Subject</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea type="text" id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                                                <label for="contact-message">Your message</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                </form>

                                <div class="text-center text-md-left">
                                    <a class="btn btn-primary btn-md">Send</a>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 col-xl-3 text-center">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fas fa-map-marker fa-2x blue-text"></i>
                                        <p>San Francisco, CA 94126, USA</p>
                                    </li>

                                    <li>
                                        <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
                                        <p>+ 01 234 567 89</p>
                                    </li>

                                    <li>
                                        <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
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
                        <div id="map-container" class="z-depth-1-half" style="height: 300px; width: 770px">

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