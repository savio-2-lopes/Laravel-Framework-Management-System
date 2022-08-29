@extends('site.layouts.base')
@section('titulo', 'Sobre nós')
@section('conteudo')
    <main class="page-content">
        <div class="page-title">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="page-info">
            <div class="container">
                <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os
                    negócios da sua empresa.</p>
                <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
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
            <img src="{{ asset('img/mapa.png') }}" alt="Map link">
        </div>
    </footer>
@endsection
