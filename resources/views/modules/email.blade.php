@component('mail::message')

    {{ user['name'] }}
@component('mail::button', ['url' => ''])
    Botão
@endcomponent

@endcomponent


