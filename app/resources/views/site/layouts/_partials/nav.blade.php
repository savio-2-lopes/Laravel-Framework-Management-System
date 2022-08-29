<nav class="header">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>
    <input type="checkbox" class="navbar-toggler" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="menu">
        <ul>
            <li><a href="{{ route('site.index') }}">Principal</a></li>
            <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}">Contato</a></li>
        </ul>
    </div>
</nav>
