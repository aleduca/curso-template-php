<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube Full-Stack</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AnimateCSS -->
    <link rel="stylesheet" href="./assets/css/global.css"> <!-- Referência do CSS Global -->
    <script src="https://unpkg.com/feather-icons"></script> <!-- Biblioteca do Feather Icons -->
</head>

<body>
    <main class="container">
        <section class="container-left">
            <article class="logo-img">
                <img src="./assets/imgs/logo_login.png" alt="Clube Full-Stack">
            </article>

            <article class="logo-text">
                <h3>Seja bem vindo ao</h3>
                <h1>Clube Full-Stack</h1>
            </article>
        </section>

        <section class="container-right">

            <h1>Faça seu login</h1>

            <form class="form-login" method="post" action="/login">
                <div>
                    <label>Usuário:</label>
                    <input type="text" name="username" placeholder="Ex.: usuarioteste" class="input input-dark">
                </div>
                <div id="passwordContainer">
                    <label>Senha:</label>
                    <input id="password" name="password" type="password" placeholder="Ex.: senhateste"
                        class="input input-dark">
                    <i data-feather="eye-off" class="iconFeather"></i>
                </div>
                <button class="btn btn-login">Entrar</button>
            </form>
        </section>
    </main>
</body>

</html>