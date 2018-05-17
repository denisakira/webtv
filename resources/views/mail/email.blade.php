@component('mail::message')

    Contato

    Nome:
    {{ $user['nome'] }}

    E-mail:
    {{ $user['email'] }}

    Mensagem:
    {{ $user['mensagem'] }}

@component('mail::footer')
    E-mail gerado pelo área de CONTATO do site FAAC webTV
@endcomponent

@endcomponent

