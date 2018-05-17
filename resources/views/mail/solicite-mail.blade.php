@component('mail::message')

    Contato

    Nome do Evento ou Atividade:
    {{ $user['evento'] }}

    Nome do responsável pela organização do evento:
    {{ $user['responsavel'] }}

    E-mail do responsável:
    {{ $user['email'] }}

    Vínculo do responsável pelo evento com a UNESP:
    {{ $user['vinculo-unesp'] }}

    Vínculo do responsável (Faculdade, Departamento, Curso ou Programa de Pós-graduação):
    {{ $user['vinculo'] }}

    Data do Evento:
    {{ $user['data'] }}

    Horário de Início:
    {{ $user['hora-ini'] }}

    Horário de Término:
    {{ $user['hora-fim'] }}

    Local do Evento:
    {{ $user['local'] }}

    O evento tem site ou link nas redes sociais? Quais?
    {{ $user['redes'] }}

    O que você gostaria?
    {{ $user['escolha'] }}

    Outro?
    {{ $user['outro'] }}

@component('mail::footer')
    E-mail gerado pelo área SOLICITE SUA TRANSMISSÃO do site FAAC webTV
@endcomponent

@endcomponent

