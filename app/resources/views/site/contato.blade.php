@extends('site.layouts.base')
@section('titulo', $titulo)
@section('conteudo')
    <header>
        <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>
    </header>

    <main class="main-content">
        <div class="page-info">
            <div class="contato-principal">
                @component('site.layouts._components.form', ['classe' => 'borda-preta'])
                    <p>A nossa equipe analisará a sua mensagem e retornamos o mais brevemente possível!</p>
                    <p>Nosso tempo médio é de 48 horas</p>
                @endcomponent
            </div>
        </div>
    </main>
@endsection
