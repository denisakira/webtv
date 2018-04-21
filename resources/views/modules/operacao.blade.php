@extends('layouts.master')

@section('content')
<div class="container">
    <div class='row'>
        <div class='col-sm-12'>
            <h1>
                Operações
            </h1>

            <div class="visible-print text-center">
                {!! QrCode::size(150)->generate(url("/admin/equipamentos/2/edit")) !!}
            </div>

            <div class="text-center">
                {{!! QrCode::format('png')->size(150)->merge('/public/img/logo.png')
                        ->generate(url(Request::url()),"img/qrtest.png") !!}}
            </div>

        </div>
    </div>
</div>
@endsection