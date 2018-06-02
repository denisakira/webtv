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

                        <h1 class="text-center">
                            Membros atuais
                        </h1>
                        <br><br>
                        @foreach($atuais as $membro)
                            <p>

                                <div class="row">
                                    <div class="col-sm">
                                        <div class="text-center">
                                            <img src="/storage/{{ $membro->foto }}" height="100em" width="100em" alt="foto">
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="text-indent">
                                            <strong>
                                                Nome:
                                            </strong>
                                            {{ $membro->nome }}
                                            <br><br>
                                            <strong>Função:</strong>
                                            {{ $membro->funcao }}
                                        </div>
                                    </div>
                                </div>

                            </p>

                            <br>

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