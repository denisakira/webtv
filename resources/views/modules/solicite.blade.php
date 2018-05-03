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
                            Briefing: Transmissão/Cobertura de Eventos
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


            {{--Row--}}
            <div class="row">

                <div class="col-10 offset-1">

                     <!-- Default form contact -->
                    <form>
                        <h2 class="text-center">
                            Formulário de Briefing
                        </h2>

                        <!-- Default input name -->
                        <label for="defaultFormContactNameEx" class="grey-text">Your name</label>
                        <input type="text" id="defaultFormContactNameEx" class="form-control">

                        <br>

                        <!-- Default input email -->
                        <label for="defaultFormContactEmailEx" class="grey-text">Your email</label>
                        <input type="email" id="defaultFormContactEmailEx" class="form-control">

                        <br>

                        <!-- Default input subject -->
                        <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
                        <input type="date" id="defaultFormContactSubjectEx" class="form-control">

                        <br>

                        <label for="selectDropdown" class="grey-text">Papel na Faculdade</label>
                        <select class="form-control" id="selectDropdown">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>


                        <br>

                        <!-- Default textarea message -->
                        <label for="defaultFormContactMessageEx" class="grey-text">Your message</label>
                        <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

                        <!-- Send Button -->
                        <div class="text-center mt-4">
                            <button class="btn btn-outline-warning" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
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