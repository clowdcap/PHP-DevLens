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
            <li style="background-color: #657EF0; box-shadow: 1px 1px 3px black;">
                <a href="registrar.php">Registre-se</a>
            </li>
            <li style="background-color: #5054D9; box-shadow: 1px 1px 3px black;">
                <a href="login.php"><strong>Login</strong></a>
            </li>
        </ul>
    </nav>
</header>

<section class="sec">
    <div class="loginmenu">
        <h2>Seja bem vindo ao DevLend</h2>
        <h4>Realize o seu login para continuar</h4>
        <form class="form-login" method="post" action="valida.php">
            <ol class="ul_style">
                <label class="login">
                    <table class="table">
                        <tr>
                            <th>Usuario / Email</th>
                            <th>Senha</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="usuario" placeholder="Nome de Usuário"><br /></td>
                            <td><input type="password" name="senha" value="" placeholder="Senha"><br /></td>
                        </tr>
                    </table>

                    <div class="login">
                        <br />
                        <br />
                        <label for="login-remember"><input  type="checkbox" id="login-remember">
                            Manter login</label>

                    </div>
                    <button class="btn">Login</button><br />
                    <br>
                    <p>Esqueci a senha ? <a href="#" style="color: rgb(50, 50, 50);" >Clique Aqui</a></p>
                    <p>Não tem cadastro ? <a href="registrar.php" style="color: rgb(50, 50, 50);">Clique Aqui</a></p>
                </label>
            </ol>
        </form>
    </div>
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
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="../public/lista.php">Wallpaper</a></li>
                    <li><a href="../public/cadastrar_item.php">Cadastrar Wallpaper</a></li>
                    <li><a href="../public/contato.php">Contato</a></li>
                    <li><a href="registrar.php"><strong>Registrar-se</strong></a></li>
                    <li><a href="login.php"><strong style="color: #5054D9;">Login</strong></a></li>
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