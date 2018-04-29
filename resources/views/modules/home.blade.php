@extends('front.master')

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->


        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
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
                                <strong>FAAC webTV</strong>
                            </h1>

                            <p>
                                <strong>Descrição</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Fazemos TX</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->



            <!--Second slide-->
            <div class="carousel-item">
                <div class="view">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                    </video>

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                                    available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->



            <!--Third slide-->
            <div class="carousel-item">
                <div class="view">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                    </video>

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h1>

                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                                    available. Create your own, stunning website.</strong>
                            </p>

                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                                <i class="fa fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->






    <!--Main layout-->
    <main>
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
