<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Gestão - Contato</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <nav class="header">
        <div class="logo">
            <img src="img/logo.png" alt="Logo">
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

    <main class="page-content">
        <div class="page-title">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="page-info">
            <div class="contato-principal">
                <form>
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
            <img src="img/facebook.png" alt="Facebook link">
            <img src="img/linkedin.png" alt="Linkedin link">
            <img src="img/youtube.png" alt="Youtube link">
        </div>
        <div class="contact-area">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localization">
            <h2>Localização</h2>
            <img src="img/mapa.png" alt="Map">
        </div>
    </footer>
</body>

</html>
