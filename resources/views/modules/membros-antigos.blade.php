@extends('front.master')

@section('content')
    <div class="bg"></div>

    <main>

        {{--Section: A FAAC webTV--}}
        <section class="mt-5 wow fadeIn">

            {{--Container--}}
            <div class="container">

                {{--Row--}}
                <div class="row">

                    <div class="col-8 offset-2">

                        <h1 class="text-center">Membros antigos</h1>

                        <br><br>

                        @foreach($antigos as $membro)
                            <p>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <img src="/storage/{{ $membro->foto }}" height="120em" width="120em" alt="foto">
                                        </div>
                                    </div>

                                    <div class="col">
                                        <strong>
                                            Nome:
                                        </strong>
                                        {{ $membro->nome }}
                                        <br><br>
                                        <strong>Função:</strong>
                                        {{ $membro->funcao }}
                                    </div>
                                </div>

                            </p>

                            <hr>
                        @endforeach

                    </div>

                </div>
                {{--Fim Row--}}

            </div>
            {{-- Fim Container --}}

        </section>


    </main>


@endsection