@extends('site.layouts.base')
@section('titulo', 'Página inicial')
@section('conteudo')
    <main class="row col-12">
        <section class="esquerda">
            <div class="container">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.
                    <p>
                    <div class="chamada">
                        <img src="{{ asset('img/check.png') }}">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="{{ asset('img/check.png') }}">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="{{ asset('img/player_video.jpg') }}" alt="Video">
                </div>
            </div>
        </section>

        <section class="direita">
            <div class="container">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>
                        Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                    <p>
                      @component('site.layouts._components.form', ['classe' => 'borda-branca'])
                      @endcomponent
                </div>
            </div>
        </section>
    </main>
@endsection
