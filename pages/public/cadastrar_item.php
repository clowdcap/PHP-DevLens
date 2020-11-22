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
    <a href="../../index.html"><strong style="font-size: 180%;">DevLend</strong></a>

    <nav>
        <ul class="menu_bar">
            <li><a href="../public/lista.html">Lista de Wallpaper</a></li>
            <li><a href="../public/cadastrar_item.html" style="color: #5054D9;"><strong>Cadastrar Item</strong></a></li>
            <li><a href="../public/contato.html">Contato</a></li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="../usuario/registrar.html">Registre-se</a>
            </li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="../usuario/login.html">Login</a>
            </li>
        </ul>
    </nav>
</header>


<div class="cadastrando">
    <br />
    <h2>Colabore e disponibilize seu Wallpaper</h2>
    <ol class="olnovo">
        <li><h4>Nome do Wallpaper</h4></li>
        <input type="text" name="pnome" placeholder="Digite o nome">
        <dt>(Ex: Foto Morro / Foto Paisagem ... )</dt>
        <li><h4>Descrição do produto</h4></li>
        <textarea cols="50" rows="10" placeholder="Digite seu comentário"></textarea>
        <dt>(Ex: Imagem tirada na Espanha, estava em uma viagem e capturei essa linda paisagem ...)</dt>
        <li><h4>Quando tirou / baixou o Wallpaper?</h4><h6>Se caso não lembrar, digite uma data aproximada</h6></li>
        <input type="date" name="datanasc">
        <li><h4>Digite seu E-Mail cadastrado</h4></li>
        <input type="email" name="pnome" placeholder="E-Mail">
        <dt>(Ex: Data / Mes / Ano === 28 / 03 / 1996)</dt>
        <li><h4>Telefone / Celular (Com DDD)</h4></li>
        <input type="tel" name="pnome" placeholder="Telefone">
        <dt>(Ex: (DDD) 0 0000 - 0000)</dt>
        <form action="uploads/analise/" method="post" name="Formulario">
            <br/>
            <div id="uploadarq"><li><h4>Fotos do produto</h4></li>
                <input type="file" name="arquivo">
                <input type="hidden" value="codigo_secreto_x"></div>
            <dt>(Upload apenas de arquivos: .jpeg / .jpg / .png / .bitmap / .gif)</dt>
            <br />

            <button class="btn"><h3>CADASTRAR</h3></button>
    </ol>
</div>



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
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="lista.html">Wallpaper</a></li>
                    <li><a href="cadastrar_item.html"><strong style="color: #5054D9;">Cadastrar Wallpaper</strong>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a href="../usuario/registrar.html"><strong>Registrar-se</strong></a></li>
                    <li><a href="../usuario/login.html"><strong>Login</strong></a></li>
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