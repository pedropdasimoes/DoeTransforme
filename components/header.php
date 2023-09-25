<?php
    $urlAtual = $_SERVER['REQUEST_URI'];
    $page = basename($urlAtual);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, userscablee=0">
    <title>Doe e Transforme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/xp.css">
</head>

<body>
    <header class="header">
        <div class="container divHeader">
            <div class="logo">
                <a href="/"><img src="../assets/image/complements/Logo iXP.png" alt="Logo" style="width: 80px;"></a>
            </div>
            <nav>
                <div class="divHamburguer seta-baixo">
                    <input type="checkbox" id="hamburguer" style="display: none;">
                    <label for="hamburguer">
                        <div class="blockHamb">
                            <div class="hamburguer hamb1"></div>
                            <div class="hamburguer hamb2"></div>
                            <div class="hamburguer hamb3"></div>
                        </div>
                    </label>
                </div>
                <div class="divNav">
                    <div class="nav activeNav">
                        <ul class="navUl">
                            <li class="liMenu"><a href="../pages/sobre.php" class="aMenu <?php if($page == 'sobre.php') echo 'activeMenu'?>">Sobre</a></li>
                            <li class="liMenu"><a href="../pages/projetos.php" class="aMenu <?php if($page == 'projetos.php') echo 'activeMenu'?>">Projetos</a></li>
                            <li class="liMenu"><a href="../pages/cursos.php" class="aMenu <?php if($page == 'cursos.php') echo 'activeMenu'?>">Cursos</a></li>
                            <li class="liMenu"><a href="../pages/envolvase.php" class="aMenu <?php if($page == 'envolvase.php') echo 'activeMenu'?>">Envolva-se</a></li>
                            <li class="liMenu"><a href="../pages/blog.php" class="aMenu <?php if($page == 'blog.php') echo 'activeMenu'?>">Blog</a></li>
                            <li class="liMenu"><a href="../pages/transparencia.php" class="aMenu <?php if($page == 'transparencia.php') echo 'activeMenu'?>">Transparência</a></li>
                        </ul>
                    </div>
                    <div class="nav activeNav">
                        <ul class="navUl">
                            <li class="liMenu"><a href="" class="aMenuCircle">Cadastro</a></li>
                            <li class="liMenu"><a href="" class="aMenuCircleLast">Entrar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>