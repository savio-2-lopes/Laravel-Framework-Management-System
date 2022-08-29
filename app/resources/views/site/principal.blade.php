<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Gestão - Sobre Nós</title>
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

    <main class="conteudo-destaque row">
        <section class="esquerda">
            <div class="container">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.
                    <p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
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
                    <form>
                        <input type="text" placeholder="Nome" class="borda-branca">
                        <br>
                        <input type="text" placeholder="Telefone" class="borda-branca">
                        <br>
                        <input type="text" placeholder="E-mail" class="borda-branca">
                        <br>
                        <select class="borda-branca">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
