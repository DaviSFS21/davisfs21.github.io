<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:image" content="assets/Logo3.png">
    <meta name="google" content="notranslate">
    <link rel="icon" id="favicon" type="image/png" href="../assets/Logo3.png">
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kalam:wght@300;400;700&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Davi Soares</title>
</head>
<body>
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>

    <a id="back-top"></a>

    <header class="header">
        <div class="wraper">
            <div class="logo">
                <a href="../"><p><img src="../assets/Logo.png" width="70" height="70"></img></p></a>
            </div>
            <nav class="navbar">
                <ul class="navbar-links">
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="main-section"
        style="height: 94vh">
            <div class="login-box">
            <h2 class="subtitle">login<?php if(isset($_POST['login'])){ echo $_POST['login']; } ?></h2>
                <form method="POST" action="login.php">
                    <div class="user-box">
                        <input type="text" name="login" required="">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="">
                        <label>Password</label>
                        <button class="button-login" type="submit">
                            next
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>


            <div class="text-center p-3" style="background-color: #1a1a1a; height: 6vh">
                Designed and coded by 
                <a href="https://github.com/DaviSFS21" target="_blank">Davi Soares</a>. 
                © 2024 All Rights Reserved.
            </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        //init da biblioteca de elementos responsivos ao scroll do usuário
        AOS.init();

        //Código para alternar o ícone do site dependendo do tema do navegador
        var prefersDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (prefersDarkMode) {
            document.getElementById('favicon').href = 'assets/Logo2.png';
        }
    </script>
</body>
</html>
