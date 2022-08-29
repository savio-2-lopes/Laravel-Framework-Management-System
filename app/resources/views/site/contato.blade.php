@extends('site.layouts.base')
@section('titulo', $titulo)
@section('conteudo')
    <main class="page-content">
        <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="page-info">
            <div class="contato-principal">
                <form class="container">
                    <input type="text" placeholder="Nome" class="borda-preta">
                    <br>
                    <input type="text" placeholder="Telefone" class="borda-preta">
                    <br>
                    <input type="text" placeholder="E-mail" class="borda-preta">
                    <br>
                    <select class="borda-preta">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                    <br>
                    <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                    <br>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="social-media">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}" alt="Facebook link">
            <img src="{{ asset('img/linkedin.png') }}" alt="Linkedin link">
            <img src="{{ asset('img/youtube.png') }}" alt="Youtube link">
        </div>
        <div class="contact-area">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localization">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}" alt="Map">
        </div>
    </footer>
@endsection
