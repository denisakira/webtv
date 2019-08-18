@extends('layouts.master')

@section('content')
    <div class="bg"></div>
    <main>
        <section class="mt-5 wow fadeIn">
            <div class="container">

                <div class="row">
                    <div class="col-8">

                        <h1>
                            {{ $page->title }}
                        </h1>

                        <p>
                            {!! $page->body !!}
                        </p>

                        
                        {{-- <img src="storage/pages/teste/main.jpeg" style="width: 100%; height: 100%;"> --}}

                    </div>
                </div>

            </div>
        </section>
    </main>


@endsection