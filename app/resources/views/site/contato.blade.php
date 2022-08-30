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
                @component('site.layouts._components.form')
                @endcomponent
            </div>
        </div>
    </main>
@endsection
