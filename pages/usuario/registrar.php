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
            <li><a href="../public/contato.php">Contato</a></li>
            <li style="background-color: #5054D9; box-shadow: 1px 1px 3px black;">
                <a href="registrar.php"><strong>Registrar-se</strong></a>
            </li>
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px #000000;">
                <a href="login.php">Login</a>
            </li>
        </ul>
    </nav>
</header>

<div class="cadastrando">
    <br />

    <h2>Faça agora seu cadastro na DevLeans</h2>
    <h4>Preencha o formulario abaixo para continuar</h4>
    <form class="form-registrar" method="GET" action="reg.php">
        <fieldset>
            <legend id="usuario">Identificação do Usuário</legend>
                    <br>
                <p>
                    <label for="cNome">Primeiro Nome:</label>
                        <br>
                            <input type="text" name="tNome" id="cNome" size="30" style="text-align: center">
                </p>
                    <br>
                <p>
                    <label for="cSNome">Ultimo Nome:</label>
                        <br>
                            <input type="text" name="tSNome" id="cSNome" size="30" style="text-align: center">
                </p>
                    <br>
                <p>
                    <label for="cNasc">Data de Nascimento:</label>
                        <br>
                            <input type="date" name="tNasc" id="cNasc" size="30" style="text-align: center">
                </p>
                    <br>
                <p>
                    <label for="cTel">Telefone / Celular:</label>
                        <br>
                            <input type="tel" name="tTel" id="cTel" size="30" style="text-align: center">
                </p>
                    <br>
                <p>
                    <label for="cEmail">Digite seu Email:</label>
                        <br>
                            <input type="email" name="tEmail" id="cEmail" size="30" style="text-align: center">
                </p>
                    <br>
                <p>
                    <label for="cSenha">Digite uma senha:</label>
                        <br>
                            <input type="password" name="tSenha" id="cSenha" size="30" style="text-align: center">
                </p>
                    <br>
        </fieldset>
        <button class="cadexe" id="cCadastrar">CADASTRAR</button>
    </form>

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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../public/lista.php">Wallpaper</a></li>
                    <li><a href="../public/cadastrar_item.php">Cadastrar Wallpaper</a></li>
                    <li><a href="../public/contato.php">Contato</a></li>
                    <li><a href="registrar.php"><strong style="color: #5054D9;">Registrar-se</strong></a></li>
                    <li><a href="login.php"><strong>Login</strong></a></li>
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