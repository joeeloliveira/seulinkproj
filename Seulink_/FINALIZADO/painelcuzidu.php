<!DOCTYPE html>
<html lang="pt-BR">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qt9Hug5NfnQDGMoaQYXN1+PiQvda7poO7/5k4qAmMN6evu0oDFMJTyjqaoTGHdqf" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seulink.link</title>
    <style>
    /* Reset de margens e preenchimentos padrão */
    body, html {
        background: linear-gradient(180deg, #0F1115 0%, #17191C 100%);
        font-family: "Lucida Console", Courier, monospace;
        margin: 0;
        padding: 0;
        height: 100vh;
            }

    /* Estilos da barra superior */
    .topbar {
        width: 100%; /* Largura total da página */
        height: 38px; /* Altura da barra superior (aumentada para tornar a linha azul visível) */
        background-color: white; /* Cor da barra superior */
        position: fixed; /* Fixa a barra superior na parte superior da página */
        top: 0;
        left: 0;
    }

    .bottom-bar {
        background: radial-gradient(80% 80% at 50% 50%, #17191C 0%, #0F1115 100%); /* Cor de fundo da barra */
        width: 100%; /* Largura total da página */
        height: 70px; /* Altura da barra */
        position: fixed; /* Fixa a barra na parte inferior da página */
        bottom: 0; /* Coloca a barra na parte inferior */
        left: 0; /* Alinha a barra à esquerda */
    }

    /* Estilos para as linhas brancas */
    .white-line {
        background-color: #fff; /* Cor da linha branca */
        height: 3px; /* Altura da linha */
        width: 100%; /* Largura igual à .bottom-bar */
        margin-top: -65px;
        bottom: 100px; /* Alinha a linha com a parte inferior da .bottom-bar */
        left: 0; /* Alinha a linha com a parte esquerda da .bottom-bar */
    }

    h8 {
        font-size: 12px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: #0C1312; /* Cor do texto */
        position: fixed; /* Fixa o texto à esquerda */
        top: 0;
        right: 10px; /* Espaço à esquerda */
        margin-top: 18px; /* Espaço acima do texto */
    }

    /* Estilos da linha azul */
    .blue-line {
        width: 100%;
        height: 4px; /* Altura da linha azul (1px para ser fina) */
        background-color: #31C4B9; /* Cor da linha azul */
        position: fixed; /* Fixa a linha azul na parte superior da página */
        top: 38px; /* Coloca a linha abaixo da barra branca */
        left: 0;
    }

    /* Estilos do conteúdo principal */
    .content {
        margin-top: 31px; /* Deixa um espaço acima do conteúdo principal para a barra e a linha */
        padding: 20px; /* Adicione preenchimento conforme necessário */
        /* Outros estilos do conteúdo principal */
    }


    img {
        width: 250px;
        height: 150px;
        margin-left: 10px;
    }

    h4 {
        text-align: left;
        font-size: 21px;
        color: #1D9BB9; /* Cor inicial */
        animation: mudarCor 2s linear infinite alternate;/* 5 segundos de duração */
    }

    h6 {
        text-align: left;
        font-size: 15px;
        color: #ffffff; /* Cor inicial */
    }

    @keyframes mudarCor {
    0% {
        color: #1D9BB9; /* Azul mais claro */
    }
    25% {
        color: #15B1B1; /* Azul claro */
    }
    50% {
        color: #15A0C1; /* Azul escuro */
    }
    75% {
        color: #158FB1; /* Azul mais escuro */
    }
    100% {
        color: #15A0C1; /* Volta para o azul escuro */
    }
}

    /* Estilos CSS aqui, se necessário */
    input[type="url"] {
        animation: mudarCor 0.8s linear infinite alternate;
        width: 75%;
        padding: 10px;
        margin-bottom: 55px;
        border: 2px solid #fff;
        border-radius: 7px;
        background-color: #0F1115;
        color: #ffffff;
        font-family: "Lucida Console", Courier, monospace;
    }

    select {
        width: 100%;
        padding: 13px;
        margin-bottom: 15px;
        border: 2px solid #fff;
        border-radius: 7px;
        background-color: #0A0C0F;
        color: #ffffff;
        font-family: "Lucida Console", Courier, monospace;
    }

    /* Estilo personalizado para o select */
    .custom-select {
        position: relative;
        width: 80%;
        overflow: hidden;
    }

    .custom-select select {
        width: 100%;
        border: none;
        outline: none;
        background-color: transparent;
        color: #ffffff;
        cursor: pointer;
        padding: 10px;
        padding-right: 30px; /* Espaço para a seta personalizada */
    }

    /* Estilos do segundo container vazio */
    .container-right {
        height: 600px;
        width: 880px;
        margin-right: 1px; /* Margem à direita */
        background: radial-gradient(80% 80% at 50% 50%, #17191C 0%, #0F1115 100%);
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        display: inline-block;
        overflow-y: auto;
        padding-top: 40px;
        padding-right: 20px; /* Padding à direita para manter a mesma largura do texto */
        padding-bottom: 25px;
        max-height: 650px;
        max-width: 880px;
        position: fixed; /* Fixa o contêiner à direita */
        top: 50px; /* Ajuste a posição vertical conforme necessário */
        right: 20px;
        margin-left: 10px;
}

/* Regra de mídia para largura de tela entre 1920px e 2560px */

    /* Estilos da barra de rolagem */
    .container-right::-webkit-scrollbar {
            width: 15px; /* Largura da barra de rolagem */
        }

        /* Estilo do polegar da barra de rolagem (a parte que você move) */
        .container-right::-webkit-scrollbar-thumb {
            background-color: #31C4B9; /* Cor do polegar da barra de rolagem */
            border-radius: 5px; /* Raio do polegar da barra de rolagem */
        }

        /* Estilo da trilha da barra de rolagem (a parte de fundo) */
        .container-right::-webkit-scrollbar-track {
            background-color: #0F1115; /* Cor do fundo da barra de rolagem */
            border-radius: 5px; /* Raio da trilha da barra de rolagem */
        }
        #zoom-controls {
            display: inline-block;
            margin: 10px;
        }

        .zoom-button {
            background-color: #0F1115;
            color: #fff;
            font-family: "Lucida Console", Courier, monospace;
            font-size: 13px;
            padding: 5px 10px;
            border: 2px solid #fff;
            border-radius: 7px;
            cursor: pointer;
            position: relative;
            top: -5.5%;
            left: 12%;
        }

        </style>
    </style>
    </head>
    <div class="topbar"></div>
    <div class="blue-line"></div>
    <h7 style="font-size: 15px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #0C1312; position: fixed; top: 0; left: 50%; transform: translateX(-50%);margin-top: 8px;">
    Copyright © 2023 <strong>seulink.link</strong> – Todos os direitos reservados.</h7>
    <h8>Desenvolvido por <strong>Leoj</strong> <a href="https://github.com/joeeloliveira" target="_blank"><i class="fab fa-github"></i></a>.</h8>
    
    <a href="https://seulink.link" target="_blank">
    <img src="seulinkis.png" alt="Seulink3" style="width: 420px; height: 360px; margin-top: -2.8%; margin-left: -3%;">
    </a>
    <br>
    <img src="logozao.png" alt="Seulink2" style="width: 710px; height: 550px; margin-top: -10%; margin-left: 10%;">

   
    <div class="container-right">
    <div class="content-wrapper">
        </div>
        
                <button class="zoom-button" id="zoom-in">➕</button>
                <button class="zoom-button" id="zoom-out">➖</button>
                <button class="zoom-button" id="zoom-reset">Reset </button><br>
        
        <h7 style="color: #EDF0F3; position: relative; top: -11.1%; left: 1.1%; font-size: 15px;">🔎 Zoom ↪ </h7>

        <h7 style="color: #EDF0F3; position: relative; top: 5%; left: 18.2%; font-size: 15px;">✔️Seulink : </h7>
        <input type="text" id="url" size="50" readonly style="font-size: 16px; color: #576366; margin-left: 42%; border-radius: 10px;">
    <script>
        // Obtém a URL atual e a exibe no campo de entrada de texto
        document.getElementById("url").value = window.location.href;
    </script>


        <style>
            @keyframes changeColor {
                    0% { color: #158FB1; } /* Cor inicial */
                    25% { color: #32A7C3; } /* Cor intermediária */
                    50% { color: #31C4B9; } /* Cor intermediária */
                    75% { color: #32A7C3 } /* Cor intermediária */
                    100% { color: #158FB1; } /* Cor final, igual à inicial */
                }

                
                #color-changing-text {
                    animation: changeColor 5s linear infinite; /* 5 segundos de duração */
                }

                /* Estilos da barra de rolagem */
                .container::-webkit-scrollbar {
                    width: 15px; /* Largura da barra de rolagem */
                }

                /* Estilo do polegar da barra de rolagem (a parte que você move) */
                .container::-webkit-scrollbar-thumb {
                    background-color: #31C4B9; /* Cor do polegar da barra de rolagem */
                    border-radius: 5px; /* Raio do polegar da barra de rolagem */
                }

                /* Estilo da trilha da barra de rolagem (a parte de fundo) */
                .container::-webkit-scrollbar-track {
                    background-color: #0F1115; /* Cor do fundo da barra de rolagem */
                    border-radius: 5px; /* Raio da trilha da barra de rolagem */
                }

                .container {
                    height: 500px;
                    width: 750px;
                    margin-left: 20px;
                    margin-top: 50px;
                    background-color: #0F1115;
                    border-radius: 10px;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                    display: inline-block;
                    overflow-y: auto;
                    padding-top: 40px;
                    padding-left: 20px;
                    padding-bottom: 25px;
                    max-height: 500px;
                    max-width: 800px;
                }

                @keyframes mudarCorBorda {
                    0% {
                    border-color: #7F93DC;
                    }
                    25% {
                    border-color: #FF0000; /* Cor da borda no quarto do tempo da animação */
                    }
                    50% {
                    border-color: #00FF00; /* Cor da borda na metade do tempo da animação */
                    }
                    75% {
                    border-color: #FFFF00; /* Cor da borda em três quartos do tempo da animação */
                    }
                    100% {
                    border-color: #7F93DC;
                    }
                }

        </style>
        <script>
        const zoomInButton = document.getElementById("zoom-in");
        const zoomOutButton = document.getElementById("zoom-out");
        const zoomResetButton = document.getElementById("zoom-reset");

        zoomInButton.addEventListener("click", () => {
            zoom(1.2); // Increase zoom level
        });

        zoomOutButton.addEventListener("click", () => {
            zoom(0.8); // Decrease zoom level
        });

        zoomResetButton.addEventListener("click", () => {
            resetZoom(); // Reset zoom to 100%
        });

        function zoom(level) {
            const currentZoom = parseFloat(document.body.style.zoom) || 1;
            const newZoom = currentZoom * level;
            document.body.style.zoom = newZoom;
        }

        function resetZoom() {
            document.body.style.zoom = 1;
        }
       
    </script>
        <div class="bottom-bar">
        <p style="margin-left: 10px; margin-top: 25px; font-size: 20px; color: white;">🌐Seulink<strong>.link</strong></p>
        <p style="margin-left: 35px; margin-top: -20px; font-size: 10px; color: #E2E7E9;">encurte seus links com facilidade, use <a href="https://seulink.link/" target="_blank">seulink.link :)</p>
        <div class="white-line"></div>
    </div>
    </a>
    '. '<h5 style="margin-left: 2%;">' . $response1 . '<h5>' .'
<br><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7002240691168334"
crossorigin="anonymous"></script>
    <!-- anuncio2 -->
    <ins class="adsbygoogle"
        style="display:block; background-color:rgb(200, 200, 200)"
        data-ad-client="ca-pub-7002240691168334"
        data-adtest="on"
        data-ad-slot="1871085527"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script></body>
</html>