<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>DevLend - Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
<header class="header">
    <a href="index.php"><strong style="color: #5054D9; font-size: 180%;">DevLend</strong></a>

    <nav>
        <ul class="menu_bar">
            <li><a href="pages/public/lista.php">Lista de Wallpaper</a></li>
            <li><a href="pages/public/cadastrar_item.php">Cadastrar Item</a></li>
            <li><a href="pages/public/contato.php">Contato</a></li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="pages/usuario/registrar.php">Registre-se</a>
            </li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="pages/usuario/login.php">Login</a>
            </li>
        </ul>
    </nav>
</header>

<section class="apresentacao">
    <div class="imagem_apresentacao">
        <img src="midia/fotos/logo2.png" style="width=80% height= 80%" alt="logo">
    </div>
    <div class="conteudo_apresentacao">

        <h3>Preparados para a novidade ?</h3>
        <p>Site destinado a todos os usuários de tecnologia e que gostaria de ter
            o wallpaper mais descolado e mais bonita para seu fundo de tela (desktop),
            tanto para computador, celular, tablet, whatchers etc.
        </p>
        <br />

    </div>
</section>

<h1 class="introducao_index">NOVOS WALLAPAPERS</h1>

<section class="grid1">

    <div>
        <img src="midia/fotos/400px.png" alt="Wallpaper 1">
        <p>Wallpaper 1</p>
        <a target="_blank" href="pages/public/lista.php">
            <dt>+Detalhes</dt>
        </a>
    </div>

    <div>
        <img src="midia/fotos/400px.png" alt="Wallpaper 2">
        <p>Wallpaper 2</p>
        <a target="_blank" href="pages/public/lista.php"><dt>+Detalhes</dt></a>
    </div>

    <div>
        <img src="midia/fotos/400px.png" alt="Wallpaper 3">
        <p>Wallpaper 3</p>
        <a target="_blank" href="pages/public/lista.php"><dt>+Detalhes</dt></a>
    </div>

</section>

<br>

<br>

<div class="anuncio">

    <p>Para ver mais Wallpapers</p>
    <a target="_blank" href="pages/public/lista.php"><dt>+Detalhes</dt></a>
</div>
<br/>

<section class="anuncio_site">
    <article>
        <div>
            <h3>DevLend</h3>
            <h2>Quero emprestar ou pegar emprestado, como funciona ?</h2>
            <p>O site funciona da seguinte maneira: Você usuario do site, deve criar um
                <strong><a target="_blank" href="pages/usuario/registrar.php">CADASTRO</a></strong> ou
                clique no topo da page em <strong><a>"Registrar-se".</a></strong>
            </p>
            <br>
            <p>Após criar o seu cadastro, você poderá pegar as wallpapers livremente.
                Você também poderá contribuir com wallpapers que você ache legal
                para que outras pessoas também possam usa-la.
            </p>
        </div>
    </article>
</section>

<footer class="rodape">
    <nav class="navbar">
        <div class="contatos">
            <h1>Entre em contato comigo</h1>
            <h2>Mapa do site</h2>
            <ol>
                <li>
                    <a target="_blank" href="#">
                        <button type="button" class="btn">WhatsApp</button>
                    </a>
                </li>

                <li style="padding-top: 20px;">
                    <a href="https://github.com/clowdcap/" target="_blank">
                        <button type="button" class="btn">GitHub</button>
                    </a>
                </li>
            </ol>

            <div>
                <ol>
                    <li><a href="index.php"><strong style="color: #5054D9;">Home</strong></a></li>
                    <li><a href="pages/public/lista.php">Wallpaper</a></li>
                    <li><a href="pages/public/cadastrar_item.php">Cadastrar Wallpaper</a></li>
                    <li><a href="pages/public/contato.php">Contato</a></li>
                    <li><a href="pages/usuario/registrar.php"><strong>Registrar-se</strong></a></li>
                    <li><a href="pages/usuario/login.php"><strong>Login</strong></a></li>
                </ol>
                <br>
            </div>
        </div>
    </nav>


    <div class="rodape-copyright">
        <p>© 2020 Copyright - José Marinho</p>
    </div>
</footer>
</body>
</html>