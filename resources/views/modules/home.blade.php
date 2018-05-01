@extends('front.master')

@section('content')

    <div class="view">

        <!--Video source-->
        <video class="" autoplay loop>
            <source src="https://mdbootstrap.com/img/video/city.mp4" type="video/mp4" />
        </video>

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                    Agora na <span style="color:#9b0000">FAAC webTV</span>
                </h1>

                <a href="#" class="play-btn" style="color: white;">
                    <i class="fas fa-play fa-5x"></i>
                </a>

            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>



    <!--Carousel Wrapper-->
    {{--<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">--}}

        {{--<!--Indicators-->--}}
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#carousel-example-1z" data-slide-to="1"></li>--}}
            {{--<li data-target="#carousel-example-1z" data-slide-to="2"></li>--}}
        {{--</ol>--}}
        {{--<!--/.Indicators-->--}}


        {{--<!--Slides-->--}}
        {{--<div class="carousel-inner" role="listbox">--}}

            {{--<!--First slide-->--}}
            {{--<div class="carousel-item active">--}}
                {{--<div class="view">--}}

                    {{--<!--Video source-->--}}
                    {{--<video class="" autoplay loop>--}}
                        {{--<source src="https://mdbootstrap.com/img/video/city.mp4" type="video/mp4" />--}}
                    {{--</video>--}}

                    {{--<!-- Mask & flexbox options-->--}}
                    {{--<div class="mask rgba-black-light d-flex justify-content-center align-items-center">--}}

                        {{--<!-- Content -->--}}
                        {{--<div class="text-center white-text mx-5 wow fadeIn">--}}
                            {{--<h1 class="mb-4">--}}
                                {{--Agora na <span style="color:#9b0000">FAAC webTV</span>--}}
                            {{--</h1>--}}

                            {{--<a href="#" class="play-btn" style="color: white;">--}}
                                {{--<i class="fas fa-play fa-5x"></i>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                        {{--<!-- Content -->--}}

                    {{--</div>--}}
                    {{--<!-- Mask & flexbox options-->--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/First slide-->--}}



            {{--<!--Second slide-->--}}
            {{--<div class="carousel-item">--}}
                {{--<div class="view">--}}

                    {{--<!--Video source-->--}}
                    {{--<video class="video-full" autoplay loop>--}}
                        {{--<source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />--}}
                    {{--</video>--}}

                    {{--<!-- Mask & flexbox options-->--}}
                    {{--<div class="mask rgba-black-light d-flex justify-content-center align-items-center">--}}

                        {{--<!-- Content -->--}}
                        {{--<div class="text-center white-text mx-5 wow fadeIn">--}}
                            {{--<h1 class="mb-4">--}}
                                {{--Agora na <span style="color:#9b0000">FAAC webTV</span>--}}
                            {{--</h1>--}}

                            {{--<a href="#" class="play-btn" style="color: white;">--}}
                                {{--<i class="fas fa-play fa-5x"></i>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                        {{--<!-- Content -->--}}

                    {{--</div>--}}
                    {{--<!-- Mask & flexbox options-->--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/Second slide-->--}}



            {{--<!--Third slide-->--}}
            {{--<div class="carousel-item">--}}
                {{--<div class="view">--}}

                    {{--<!--Video source-->--}}
                    {{--<video class="video-full" autoplay loop>--}}
                        {{--<source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />--}}
                    {{--</video>--}}

                    {{--<!-- Mask & flexbox options-->--}}
                    {{--<div class="mask rgba-black-light d-flex justify-content-center align-items-center">--}}

                        {{--<!-- Content -->--}}
                        {{--<a target="_blank" href="#" class="btn btn-lg">--}}
                            {{--<i class="fas fa-play fa-5x"></i>--}}

                        {{--</a>--}}
                        {{--<!-- Content -->--}}

                    {{--</div>--}}
                    {{--<!-- Mask & flexbox options-->--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/Third slide-->--}}

        {{--</div>--}}
        {{--<!--/.Slides-->--}}

        {{--<!--Controls-->--}}
        {{--<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Anterior</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Próximo</span>--}}
        {{--</a>--}}
        {{--<!--/.Controls-->--}}

    {{--</div>--}}
    <!--/.Carousel Wrapper-->






    <!--Main layout-->
    <main>

        {{--Container--}}
        <div class="container">

            <!--Section: Originais webTV-->
            <section class="mt-5 wow fadeIn">

                <h1 class="text-center h1-responsive">
                    Originais FAAC webTV
                </h1>
                <br>

                <!--  Owl Carousel Originais webTV -->
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <a href="#">
                            <img src="img/bladerunner2049.jpg" alt="bladerunner2049">
                        </a>
                    </div>
                    <div class="item">
                        <img src="img/guardiansofthegalaxy.jpg" alt="guardiansofthegalaxy.jpg">
                    </div>
                    <div class="item">
                        <img src="img/forrestgump.jpg" alt="forrestgump.jpg">
                    </div>
                    <div class="item">
                        <img src="img/killbill.jpg" alt="killbill.jpg">
                    </div>
                    <div class="item">
                        <img src="img/starwarsVIII_thelastjedi.jpg" alt="starwarsVIII_thelastjedi.jpg">
                    </div>
                    <div class="item">
                        <img src="img/thegodfather.jpg" alt="thegodfather.jpg">
                    </div>
                    <div class="item">
                        <img src="img/rocky.jpg" alt="rocky.jpg">
                    </div>

                </div>
                <!-- Fim Owl Carousel Originais webTV -->


            </section>
            <!--Section End: Originais webTV-->


            {{--Fim Originais / Seção Últimas Transmissões--}}
            <hr class="my-5">




            <!--Section: Carousel-->
            <section class="mb-4 wow fadeIn">

                <h1 class="text-center h1-responsive">
                    Últimas transmissões
                </h1>

                <br>

                <!--Carousel Wrapper-->
                <div id="carousel-last-tx" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-last-tx" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-last-tx" data-slide-to="1"></li>
                        <li data-target="#carousel-last-tx" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg" alt="First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(133).jpg" alt="Third slide">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->

                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-last-tx" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-last-tx" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->

            </section>
            <!--Section: Carousel-->

            <br>
            <br>



        </div>
    </main>
    <!--Main layout-->
@endsection
