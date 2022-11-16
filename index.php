<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <script src="https://kit.fontawesome.com/532ecf1f07.js" crossorigin="anonymous"></script>
    <title>Focus Trade</title>
</head>


<body onLoad="slide1()">
    <section class="container-header">
        <img class="img-logo" src="./assets/img/logo-focustrade.jpeg" alt="">

        <nav class="menu">
            <a class="btn-login" href="./login/index.php">Login</a>
            <a class="btn-site" href="https://focustrade.com.br/">Conheça nosso site</a>
        </nav>
        <nav class="menu-sociais">
            <a href="https://www.linkedin.com/company/focustrade/"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.instagram.com/focustradeconsult/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UC6aPR_tSPjtVFmi3-81pdBw"><i class="fa-brands fa-youtube"></i></a>

        </nav>
    </section>
    <section class="container-carrossel" style="margin-bottom: 0;">
        <a id="aId"><img id="id"></a>
    </section>


</body>

<footer>
    © 2022 Focus Trade Consultoria e Desenvolvimento – Todos os direitos reservados. <br>
    Rua Bom Pastor 2224 sala 1002 – Ipiranga – São Paulo/SP

</footer>

</html>

<script type="text/javascript">
    function slide1() {
        document.getElementById('id').src = "./assets/img/img-palestra.jpg";
        setTimeout("slide2()", 3000)
        document.getElementById('aId').href = "link1.html"
    }

    function slide2() {
        document.getElementById('id').src = "./assets/img/palestra-img.png";
        setTimeout("slide3()", 3000)
        document.getElementById('aId').href = "link2.html"
    }

    function slide3() {
        document.getElementById('id').src = "./assets/img/img-pessoas.jpg";
        setTimeout("slide1()", 3000)
        document.getElementById('aId').href = "link3.html"
    }
</script>