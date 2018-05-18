@extends('front.master')

@section('content')

    <div class="bg"></div>

    <main>

        {{--Container--}}
        <div class="container">

            {{--Row--}}
            <div class="row">

                <div class="col-10 offset-1">

                    {{--Section Briefing--}}
                    <section class="mt-5 wow fadeIn">

                        <h2 class="text-center">
                            Briefing: Transmissão / Cobertura de Eventos
                        </h2>

                        <br>

                        <p>
                            Olá :) Esse é o formulário da FAAC webTV para solicitação de transmissões e/ou cobertura de eventos.
                            Preencha todos os dados e em breve entraremos em contato.
                            Os serviços da FAAC webTV são realizados por alunos da Faculdade de Arquitetura, Artes e Comunicação, dessa forma, as atividades desenvolvidas têm por finalidade a aplicação didática de teorias e procedimentos de comunicação, alinhado à valores pedagógicos buscando o melhor aproveitamento de ensino-aprendizagem.
                            <br><br>
                            Recomenda-se uma antecedência mínima de solicitação de coberturas e transmissões de 10 dias úteis.
                            <br><br>
                            Os serviços prestados podem ser cobrados, mediante tabela de valores aprovada pela Vice-direção da FAAC (normativa interna da FAAC webTV 3/2017). Os valores são simbólicos e buscam dar conta da depreciação dos bens do projeto, bem como a atualização tecnológica e atualização na formação dos alunos envolvidos.
                            Além do valor cobrado, solicita-se, no caso de transmissões o fornecimento de alimentação para os alunos envolvidos na transmissão.
                            <br><br>
                            Após o envio do presente formulário, a gestão da FAAC webTV (formada por alunos da graduação, pós-graduação e professores da FAAC) emitirão um parecer autorizando (em sua totalidade ou parcialmente) ou negando as solicitações. Após esse parecer, será enviado ao email informado neste formulário um orçamento completo do serviço.
                            <br><br>
                            Em caso de dúvidas: <br>
                            e-mail: producao@faacwebtv.com.br <br>
                            facebook: https://www.facebook.com/faacwebtv/
                            <br><br>
                            Agradecemos desde já a confiança!
                            <br><br>
                            Preencha as informações da forma mais completa possível.

                        </p>

                    </section>
                    {{--Fim Section Briefing--}}

                </div>

            </div>
            {{--Fim Row--}}

            <hr class="my-5">

            @include('front.errors')

            {{--Row--}}
            <div class="row">

                <div class="col-10 offset-1">

                     <!-- Default form contact -->
                    <form action="/solicite" method="post" id="tx-form">
                        {{ csrf_field() }}

                        <h2 class="text-center">
                            Formulário de Briefing
                        </h2>

                        <!-- Nome do evento-->
                        <label for="evento" class="stylish-color-text">Nome do Evento ou Atividade</label>
                        <input type="text" id="evento" name="evento" class="form-control">

                        <br>

                        <!-- Nome do responsável pela organização do evento -->
                        <label for="responsavel" class="stylish-color-text">Nome do responsável pela organização do evento</label>
                        <input type="text" id="responsavel" name="responsavel" class="form-control">

                        <br>

                        <!-- E-mail do responsável -->
                        <label for="email" class="stylish-color-text">E-mail do responsável:</label>
                        <input type="email" id="email" name="email" class="form-control">

                        <br>

                        <!-- Vínculo do responsável pelo evento com a UNESP -->
                        <label for="selectDropdown" class="stylish-color-text">Papel na Faculdade</label>
                        <select class="form-control" id="selectDropdown" name="vinculo-unesp">
                            <option>Professor efetivo (Assistente,
                            Adjunto ou Titular)</option>
                            <option>Demais Professores (Bolsista, Substituto)</option>
                            <option>Servidor técnico-administrativo</option>
                            <option>Estudante da Graduação</option>
                            <option>Estudante da Pós-graduação</option>
                        </select>

                        <br>

                        <!-- Vínculo do responsável (Faculdade, Departamento,
                        Curso ou Programa de Pós-graduação) -->
                        <label for="vinculo" class="stylish-color-text">Vínculo do responsável (Faculdade, Departamento,
                            Curso ou Programa de Pós-graduação)</label>
                        <input type="text" id="vinculo" name="vinculo" class="form-control">


                        <br>

                        <!-- Default textarea message -->
                        <label for="descricao" class="stylish-color-text">
                            Descrição do Evento (finalidade, cursos envolvidos, temática, público alvo, etc):
                        </label>
                        <textarea type="text" name="descricao" id="descricao"
                                  class="form-control" rows="3"></textarea>

                        <br>

                        <!-- Data do Evento -->
                        <label for="data" class="stylish-color-text">Data do Evento</label>
                        <input type="date" id="data" name="data" class="form-control">

                        <br>

                        <!-- Horário de Início -->
                        <label for="hora-ini" class="stylish-color-text">Horário de Início</label>
                        <input type="time" id="hora-ini" name="hora-ini" class="form-control">

                        <br>

                        <!-- Horário de Término -->
                        <label for="hora-fim" class="stylish-color-text">Horário de Início</label>
                        <input type="time" id="hora-fim" name="hora-fim" class="form-control">

                        <br>

                        <!-- Local do Evento -->
                        <label for="local" class="stylish-color-text">Local do Evento</label>
                        <input type="text" id="local" name="local" class="form-control">

                        <br>

                        <!-- O evento tem site ou link nas redes sociais? Quais? -->
                        <label for="redes" class="stylish-color-text">O evento tem site ou link nas redes sociais? Quais?
                        </label>
                        <input type="text" id="redes" name="redes" class="form-control">

                        <br>

                        <!-- O que você gostaria? -->
                        <label for="escolhaDropdown" class="stylish-color-text">O que você gostaria?</label>
                        <select class="form-control" id="escolhaDropdown" name="escolha"
                            onchange = "if ($('#escolhaDropdown').val() == 'Outro') {
                                $('#outro').show();
                                $('#outroLabel').show();
                                } else {
                                $('#outro').hide();
                                $('#outroLabel').hide();
                            }"
                        >
                            <option>Transmissão ao vivo</option>
                            <option>Divulgação nas redes sociais da FAAC webTV</option>
                            <option>Outro</option>
                        </select>

                        <br>

                        <!-- Outro -->
                        <label for="outro" id="outroLabel" class="stylish-color-text">Outro</label>
                        <input type="text" id="outro" name="outro" class="form-control">

                        <!-- Send Button -->
                        <div class="text-center mt-4">
                            <button class="btn btn-outline-warning" type="submit" form="tx-form">
                                Enviar
                                <i class="fa fa-paper-plane-o ml-2"></i>
                            </button>
                        </div>

                    </form>
                    <!-- Default form contact -->


                </div>

            </div>
            {{--Fim Row--}}


        </div>
        {{--Fim Container--}}

        <br>

    </main>


@endsection