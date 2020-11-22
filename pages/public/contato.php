<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>DevLend</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css">
</head>
<body>
<header class="header">
    <a href="../../index.php"><strong style="font-size: 180%;">DevLend</strong></a>

    <nav>
        <ul class="menu_bar">
            <li><a href="../public/lista.php">Lista de Wallpaper</a></li>
            <li><a href="../public/cadastrar_item.php">Cadastrar Item</a></li>
            <li><a href="../public/contato.php" style="color: #5054D9;"><strong>Contato</strong></a></li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="../usuario/registrar.php">Registre-se</a>
            </li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="../usuario/login.php">Login</a>
            </li>
        </ul>
    </nav>
</header>

<section class="contatos_conteudo">
    <article>
        <div>
            <h3>DevLend</h3>
            <p>Quer deixar algum recado ? Entraremos em contato</p>
            <br>
            <p>Preencha o formulário abaixo e aguarde o retorno</p>
        </div>
    </article>
</section>

<form class="contato" method="post" action="">
    <section class="contato_page">
        <article id="contatodados">
            <h4>Nome Completo</h4>
            <input type="text" name="pnome" placeholder="Digite o nome completo">
            <h4>E-Mail</h4>
            <input type="email" name="pnome" placeholder="E-Mail">
            <h4>Deixe seu Comentário</h4>
            <textarea cols="50" rows="10" placeholder="Digite seu comentário"></textarea>
            <br />
            <button class="btn_site" type="submit">Enviar</button>
            <br />
        </article>
    </section>
</form>
<br />
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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="lista.php">Wallpaper</a></li>
                    <li><a href="cadastrar_item.php">Cadastrar Wallpaper</a></li>
                    <li><a href="contato.php"><strong style="color: #5054D9;">Contato</strong>
                    <li><a href="../usuario/registrar.php"><strong>Registrar-se</strong></a></li>
                    <li><a href="../usuario/login.php"><strong>Login</strong></a></li>
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