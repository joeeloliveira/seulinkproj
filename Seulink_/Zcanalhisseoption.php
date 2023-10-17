<!DOCTYPE html>
<html lang="pt-BR">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script src="https://jaukia.github.io/zoomooz/jquery.zoomooz.min.js"></script>
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


            img[alt="Seulink"] {
                width: 250px;
                height: 150px;
                margin-left: 28%;
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
                width: 79%;
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

            .botao-adicionar {
                background: radial-gradient(50% 50% at 50% 50%, #2DC6C8 0%, #2DFBA4 100%); /* Cor de fundo em RGB */
                color: #fff; /* Cor do texto */
                border: none;
                padding: 5px 10px;
                border-radius: 3px;
                cursor: pointer;
                margin-top: -10px;
                font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
                transition: background 6s; /* Transição mais suave */
            }

            .botao-adicionar:hover {
                background: linear-gradient(to bottom, #2DC6C8, #2DFBA4); /* Gradiente RGB ao passar o mouse */
            }

            .botao-remover {
                background: linear-gradient(180deg, #FF5862 0%, #2E5692 100%); /* Cor de fundo em RGB */
                color: #fff; /* Cor do texto */
                border: none;
                padding: 5px 10px;
                border-radius: 3px;
                cursor: pointer;
                margin-top: 10px;
                font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
                transition: background 6s; /* Transição mais suave */
                width: 141.5px; height: 33px;
            }

            .botao-remover:hover {
                background: linear-gradient(to bottom, #FF5862, #2E5692); /* Gradiente RGB ao passar o mouse */
            }

            input[type="submit"] {
                background: radial-gradient(80% 80% at 80% 80%, #2DC6C8 0%, #2E5692 100%); /* Cor de fundo em RGB */
                color: #fff; /* Cor do texto */
                border: none;
                padding: 10px 20px;
                border-radius: 10px;
                cursor: pointer;
                font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
                transition: background 5s; /* Transição mais suave */
                width: 200px;
                height: 40px;
                margin: 0 auto; /* Centraliza horizontalmente */
                display: block; /* Para que a margem funcione */
            }

            input[type="submit"]:hover {
                background: linear-gradient(to bottom, #2DC6C8, #2E5692); /* Gradiente RGB ao passar o mouse */
            }

            /* Estilos do segundo container vazio */
            .container-right {
                height: 500px;
                width: 780px;
                margin-right: 1px; /* Margem à direita */
                background: radial-gradient(80% 80% at 50% 50%, #17191C 0%, #0F1115 100%);
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                display: inline-block;
                overflow-y: auto;
                padding-top: 40px;
                padding-right: 20px; /* Padding à direita para manter a mesma largura do texto */
                padding-bottom: 25px;
                max-height: 500px;
                max-width: 800px;
                position: fixed; /* Fixa o contêiner à direita */
                top: 50px; /* Ajuste a posição vertical conforme necessário */
                right: 20px; /* Ajuste a posição horizontal conforme necessário */
            }

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

            </style>
</head>
<body>
    
    <div class="topbar"></div>
    <div class="blue-line"></div>
    <h7 style="font-size: 15px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #0C1312; position: fixed; top: 0; left: 50%; transform: translateX(-50%);margin-top: 8px;">
    Copyright © 2023 <strong>seulink.link</strong> – Todos os direitos reservados.</h7>
    <h8>Desenvolvido por <strong>Leoj</strong> <a href="https://github.com/joeeloliveira" target="_blank"><i class="fab fa-github"></i></a>.</h8>
        <style>
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
                    width: 780px;
                    margin-left: 20px;
                    margin-top: 50px;
                    background: radial-gradient(80% 80% at 50% 50%, #17191C 0%, #0F1115 100%);
                    border-radius: 10px;
                    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                    display: inline-block;
                    overflow-y: auto;
                    padding-top: 20px;
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
        <style>
            .custom-select-2 {
            position: relative;
            width: 50px;
            height: 49px;
            left: 93.3%;
            margin-bottom: -6.6%;
        }

        .select-styled {
            display: flex;
            align-items: center; /* Alinhar o conteúdo verticalmente */
            height: 100%; /* Definir a altura igual à altura do select */
            padding: 10px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #111313;
            cursor: pointer;
        }

        .select-styled img {
            margin-right: 3.8px; /* Espaço entre a imagem e o texto */
            max-width: 30px; /* Largura máxima da imagem */
            max-height: 30px; /* Altura máxima da imagem */
        }

        .select-options {
            display: none;
            position: absolute;
            width: 100%; /* Definir a largura igual à largura do select */
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 5px 5px;
            z-index: 1;
            padding-left: 2px;
        }

        .select-options ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .select-options li {
            padding: 10px 10px;
            background-color: #111313;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .select-options li img {
            margin-right: 3.8px; /* Espaço entre a imagem e o texto */
            max-width: 25px; /* Largura máxima da imagem */
            max-height: 25px; /* Altura máxima da imagem */
        }

        .select-options li:hover {
            background-color: #111313;
        }   


        @keyframes mudarCor1 {
            0% {
                color: #9C9C9C;
            }
            25% {
                color: #7A7A7A; 
            }
            50% {
                color: #5E5E5E;
            }
            75% {
                color: #4A4A4A; 
            }
            100% {
                color: #404040; 
            }
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
            top: -17%;
            left: -1%;
        }

        </style>
                <div class="container">

                <h7 style="color: #EDF0F3; position: relative;
            top: -17%;
            left: -1%;
            font-size: 15px;
            ">🔎 Zoom ↪ </h7>
                <button class="zoom-button" id="zoom-in">➕</button>
                <button class="zoom-button" id="zoom-out">➖</button>
                <button class="zoom-button" id="zoom-reset">Reset </button>
        <img src="logooo1.png" alt="Seulink">
        <h4>⇵ Escolha o website: </h4>
        
        <script>
        const zoomInButton = document.getElementById('zoom-in');
        const zoomOutButton = document.getElementById('zoom-out');
        const zoomResetButton = document.getElementById('zoom-reset');

        zoomInButton.addEventListener('click', () => {
            zoom(1.2); // Increase zoom level
        });

        zoomOutButton.addEventListener('click', () => {
            zoom(0.8); // Decrease zoom level
        });

        zoomResetButton.addEventListener('click', () => {
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

        <form action="" method="post">
        <div id="campos">
            <div>


            <div class="custom-select-2">
                    <div class="select-styled"><img src="seulinkLOGO1.png" style="width: 120px; height: 120px; margin-left: 1px;" alt="Imagem 0"></div>
                    <div class="select-options" name="escolha[]">
                        <ul>
                            <li data-value="amazon" value="amazon">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/amazon.png" alt="Imagem 1"> </li>
                            <li data-value="kabum" value="kabum">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/kabum.png" alt="Imagem 2"> </li>
                            <li data-value="magazine" value="magazine">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/magalu.png" alt="Imagem 3"> </li>
                            <li data-value="aliexpress" value="aliexpress">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/aliex.png" alt="Imagem 4"> </li>
                            <li data-value="banggood" value="banggood">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/bang.png" alt="Imagem 5"></li>
                            <li data-value="shein" value="shein">
                                <img style="width: 35px; height: 35px; margin-left: -1px;" src="icones/shien.png" alt="Imagem 6"></li>
                            <li data-value="mercado_livre" value="mercado_livre">
                                <img style="width: 36px; height: 33px; margin-left: -0.5px;" src="icones/ml.png" alt="Imagem 7"></li>
                            <li data-value="americanas" value="americanas">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/americanas.png" alt="Imagem 8"></li>
                            <li data-value="casas_bahia" value="casas_bahia">
                                <img style="width: 35px; height: 35px; margin-left: -0.3px;" src="icones/casas.jpg" alt="Imagem 9"></li>
                            <li data-value="submarino" value="submarino">
                                <img style="width: 36px; height: 36px; margin-left: -0.3px;" src="icones/sub.png" alt="Imagem 10"></li>
                            <li data-value="shoptime" value="shoptime">
                                <img style="width: 35px; height: 35px; margin-left: -0.3px;" src="icones/shop.png" alt="Imagem 10"></li>
                            <li data-value="extra" value="extra">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/extra.png" alt="Imagem 10"></li>
                            <li data-value="ponto_frio" value="ponto_frio">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/ponto.jpg" alt="Imagem 10"></li>
                            <li data-value="nagem" value="nagem">
                                <img style="width: 35px; height: 35px; margin-left: -0.4px;" src="icones/nagem.png" alt="Imagem 10"></li>
                            <li data-value="carrefour" value="carrefour">
                                <img style="width: 35px; height: 35px; margin-left: -0.3px;" src="icones/carrefour.png" alt="Imagem 10"></li>
                            <li data-value="havan" value="havan">
                                <img style="width: 35px; height: 35px; margin-left: -0.4px;" src="icones/havan.jpg" alt="Imagem 10"></li>
                            <li data-value="kalunga" value="kalunga">
                                <img style="width: 35px; height: 35px; margin-left: -0.2px;" src="icones/kalunga.png" alt="Imagem 10"></li>
                            <li data-value="dell" value="dell">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/dell.png" alt="Imagem 10"></li>
                            <li data-value="netshoes" value="netshoes">
                                <img style="width: 35px; height: 35px; margin-left: -0.3px;" src="icones/netshoes.png" alt="Imagem 10"></li>
                            <li data-value="nike" value="nike">
                                <img style="width: 35px; height: 35px; margin-left: -0.4px;" src="icones/nike.jpg" alt="Imagem 10"></li>
                            <li data-value="adidas" value="adidas">
                                <img style="width: 35px; height: 33px; margin-left: -0.3px;" src="icones/adidas.jpg" alt="Imagem 10"></li>
                            <li data-value="mizuno" value="mizuno">
                                <img style="width: 35px; height: 35px; margin-left: -0.3px;" src="icones/mizuno.jpg" alt="Imagem 10"></li>
                            <li data-value="lacoste" value="lacoste">
                                <img style="width: 35px; height: 35px; margin-left: 0.1px;" src="icones/lacoste.jpg" alt="Imagem 10"></li>
                            <li data-value="centauro" value="centauro">
                                <img style="width: 35px; height: 35px; margin-left: -0.4px;" src="icones/centauro.png" alt="Imagem 10"></li>
                            <li data-value="dafiti" value="dafiti">
                                <img style="width: 35px; height: 35px; margin-left: -0.2px;" src="icones/dafiti.png" alt="Imagem 10"></li>
                            <li data-value="renner" value="renner">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/renner.jpg" alt="Imagem 10"></li>
                            <li data-value="olx" value="olx">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/olx.png" alt="Imagem 10"></li>
                            <li data-value="elo7" value="elo7">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/elo7.png" alt="Imagem 10"></li>
                            <li data-value="mobly" value="mobly">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/mobly.png" alt="Imagem 10"></li>
                            <li data-value="madeira" value="madeira">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/madeira.png" alt="Imagem 10"></li>
                            <li data-value="pague_menos" value="pague_menos">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/paguemenos.png" alt="Imagem 10"></li>
                            <li data-value="droga_raia" value="droga_raia">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/drogasraia.png" alt="Imagem 10"></li>
                            <li data-value="drogasil" value="drogasil">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/drogasil.png" alt="Imagem 10"></li>
                            <li data-value="max_titanium" value="max_titanium">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/max.jpg" alt="Imagem 10"></li>
                            <li data-value="integral_medica" value="integral_medica">
                                <img style="width: 37px; height: 35px; margin-left: -0.1px;" src="icones/integral.png" alt="Imagem 10"></li>
                            <li data-value="new_nutrition" value="new_nutrition">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/nutrition.png" alt="Imagem 10"></li>
                            <li data-value="steam" value="steam">
                                <img style="width: 35px; height: 35px; margin-left: 0px;" src="icones/steam.png" alt="Imagem 10"></li>
                            <li data-value="microsoft" value="microsoft">
                                <img style="width: 35px; height: 35px; margin-left: 0px;" src="icones/xbox.png" alt="Imagem 10"></li>
                            <li data-value="playstation" value="playstation">
                                <img style="width: 35px; height: 30px; margin-left: 0px;" src="icones/sony.png" alt="Imagem 10"></li>
                            <li data-value="ubisoft" value="ubisoft">
                                <img style="width: 35px; height: 37px; margin-left: -0.1px;" src="icones/ubisoft.png" alt="Imagem 10"></li>
                            <li data-value="gog" value="gog">
                                <img style="width: 35px; height: 37px; margin-left: -0.1px;" src="icones/gog.png" alt="Imagem 10"></li>
                            <li data-value="battlenet" value="battlenet">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/battle.png" alt="Imagem 10"></li>
                            <li data-value="nuuvem" value="nuuvem">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/nuuvem.png" alt="Imagem 10"></li>
                            <li data-value="g2a" value="g2a">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/g2a.png" alt="Imagem 10"></li>
                            <li data-value="eneba" value="eneba">
                                <img style="width: 35px; height: 35px; margin-left: -0.1px;" src="icones/eneba.png" alt="Imagem 10"></li>
                        </ul>
                    </div>
                </div>










                <select name="escolha[]" style="font-size: 17px; background: #111313; color: white;">
                    <option value="">⨠ Escolha o website desejado</option>
                    <option value="" style="color: white; background: #56E1DB;">⨠ 🛍️ E-COMMERCE</option>
                    <option value="amazon"><strong>AMAZON</strong></option>
                    <option value="kabum">KABUM</option>
                    <option value="magazine">MAGAZINE LUIZA</option>
                    <option value="aliexpress">ALIEXPRESS</option>
                    <option value="banggood">BANGGOOD</option>
                        <option value="shein">SHEIN</option>
                        <option value="mercado_livre">MERCADO LIVRE</option>
                        <option value="americanas">AMERICANAS</option>
                        <option value="casas_bahia">CASAS BAHIA</option>
                        <option value="submarino">SUBMARINO</option>
                        <option value="shoptime">SHOPTIME</option>
                        <option value="extra">EXTRA</option>
                        <option value="ponto_frio">PONTO FRIO</option>
                        <option value="nagem">NAGEM</option>
                        <option value="carrefour">CARREFOUR</option>
                        <option value="havan">HAVAN</option>
                        <option value="kalunga">KALUNGA</option>
                        <option value="dell">DELL</option>
                        <option value="" style="color: white; background-color: #5CE156;">⨠ 🎒 ROUPAS E CALÇADOS</option>
                        <option value="netshoes">NETSHOES</option>
                        <option value="nike">NIKE</option>
                        <option value="adidas">ADIDAS</option>
                        <option value="mizuno">MIZUNO</option>
                        <option value="lacoste">LACOSTE</option>
                        <option value="centauro">CENTAURO</option>
                        <option value="dafiti">DAFITI</option>
                        <option value="renner">RENNER</option>
                        <option value="" style="color: white; background-color: #712EB8;">⨠ 🛋️ CASA E CIA</option>
                        <option value="olx">OLX</option>
                        <option value="elo7">ELO7</option>
                        <option value="mobly">MOBLY</option>
                        <option value="madeira">MADEIRA Madeira</option>
                        <option value="" style="color: white; background-color: #B82E3F;">⨠ 💊 SAUDE E FITNESS</option>
                        <option value="pague_menos">PAGUE MENOS</option>
                        <option value="droga_raia">DROGA RAIA</option>
                        <option value="drogasil">DROGASIL</option>
                        <option value="max_titanium">MAX TITANIUM</option>
                        <option value="integral_medica">INTEGRAL MEDICA</option>
                        <option value="new_nutrition">NEW NUTRITION</option>
                        <option value="" style="color: white; background-color: #2046B6;">⨠ 🎮 GAMES </option>
                        <option value="steam">STEAM</option>
                        <option value="microsoft">MICROSOFT/XBOX</option>
                        <option value="playstation">PLAYSTATION</option>
                        <option value="ubisoft">UBISOFT</option>
                        <option value="gog">GOG.com</option>
                        <option value="battlenet">BATTLE.NET</option>
                        <option value="nuuvem">NUUVEM</option>
                        <option value="g2a">G2A</option>
                        <option value="eneba">ENEBA</option>
                </select>






                    <h6><strong>Copie e cole</strong> o url abaixo ↴ </h6>
                    <input type="url" name="link[]">
                    <button type="button" class="botao-remover" onclick="removerCampo(this)">- Remover</button>
                </div>
            </div>
            <button type="button" class="botao-adicionar" onclick="adicionarCampo()">+ Adicionar</button>
            <br>
            <input type="submit" style="width: 200px; height: 40px;" value="Gerar link" name="gerar_link">
            <br>
        </form>
    </div>

    <div class="bottom-bar">
        <p style="margin-left: 10px; margin-top: 25px; font-size: 20px; color: white;">🌐Seulink<strong>.link</strong></p>
        <p style="margin-left: 35px; margin-top: -20px; font-size: 10px; color: #E2E7E9;">encurte seus links com facilidade, use <a href="https://seulink.link/" target="_blank">seulink.link</p></a>
        <div class="white-line"></div>
    </div>

    <!-- SCRIPT DAS TABELAS !-->
    <script>
    let contadorCampos = 1;

    function adicionarCampo() {
        contadorCampos++;
        var campos = document.getElementById("campos");
        var campoClone = campos.firstElementChild.cloneNode(true);

        // Alterar o nome do select e do input clonados
        var select = campoClone.querySelector('select');
        var linkInput = campoClone.querySelector('input[type="url"]');
        select.name = "escolha[]";
        linkInput.name = "link[]";

        // Limpar a seleção do custom-select-2 clonado
        var customSelect = campoClone.querySelector('.custom-select-2');
        var selectStyled = customSelect.querySelector('.select-styled');

        // Crie o conteúdo personalizado que você deseja
        var conteudoPersonalizado = document.createElement('div');
        conteudoPersonalizado.innerHTML = '<img src="seulinkLOGO1.png" style="width: 80px; height: 80px; margin-left: 1px;" alt="Imagem 0">';

        // Limpe o conteúdo existente do selectStyled
        while (selectStyled.firstChild) {
            selectStyled.removeChild(selectStyled.firstChild);
        }

        // Adicione o conteúdo personalizado ao selectStyled
        selectStyled.appendChild(conteudoPersonalizado);

        // Adicionar um evento de change ao novo select
        select.addEventListener("change", function () {
            atualizarCustomSelect(this, customSelect);
        });

        // Adicionar evento de click ao botão remover
        campoClone.querySelector('button').addEventListener('click', function () {
            removerCampo(this);
        });

        campos.appendChild(campoClone);
    }

    function atualizarCustomSelect(select, customSelect) {
        var selectedValue = select.value;
        var customSelectOptions = customSelect.querySelector('.select-options').querySelectorAll('li');
        customSelectOptions.forEach(function (option) {
            if (option.getAttribute("data-value") === selectedValue) {
                customSelect.querySelector('.select-styled').innerHTML = option.innerHTML;
            }
        });
    }

    function removerCampo(botao) {
        var campo = botao.parentNode;
        campo.parentNode.removeChild(campo);
    }

    // Adicionar o evento "change" para atualizar o select personalizado dos campos iniciais
    var selects = document.querySelectorAll('select[name="escolha[]"]');
    var customSelects = document.querySelectorAll('.custom-select-2');
    selects.forEach(function (select, index) {
        select.addEventListener("change", function () {
            atualizarCustomSelect(select, customSelects[index]);
        });
    });

</script>
    <!-- SCRIPT DAS TABELAS !-->
</body>
</html>
<?php
error_reporting(0);

function getStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $start . $str[0] . $end;
}

$response1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["gerar_link"])){
    $escolhas = $_POST["escolha"];
    $links = $_POST["link"];

    for ($i = 0; $i < count($escolhas); $i++) {
        $escolha = $escolhas[$i];
        $link = $links[$i];

        // Validar o link aqui

        $linkValidado = filter_var($link, FILTER_VALIDATE_URL);

        if (!$linkValidado) {
            echo "Informe um link válido para " . $escolha . "<br>";
            continue;
        } elseif (strlen($linkValidado) <= 10 || strlen($linkValidado) > 1800) {
            echo "Informe um link válido com mais de 10 caracteres e menos de 1800 caracteres para " . $escolha . "<br>";
            continue;
        }

        //--o curl
        $curl = curl_init($linkValidado);
        curl_setopt($curl, CURLOPT_URL, $linkValidado);
        curl_setopt($curl, CURLOPT_ENCODING, "gzip");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Host: " . parse_url($linkValidado, PHP_URL_HOST),
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);

        //--as partes puxadas com a getStr
        if ($escolha == "amazon") 
        {
            $titulo = getStr($resp, 'span id="productTitle" class="a-size-large product-title-word-break">', '</span');
            $titulo_formatado = str_replace('span id="productTitle" class="a-size-large product-title-word-break">', '', $titulo);
            $titulo_formatado = str_replace('</span', '', $titulo_formatado);

            $preco = getStr($resp, 'span class="a-offscreen">', '</span');
            $preco_formatado = str_replace('span class="a-offscreen">', '', $preco);
            $preco_formatado = str_replace('</span', '', $preco_formatado);

            $imagem = getStr($resp, 'hiRes":"https://', '"');
            $foto_formatada = str_replace('hiRes":"', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #ffffff;">📌 Produto na <span style="color: #E8B35E;"><strong>Amazon</span></strong></p><img src="icones/amazon.png" alt="Amazon Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 280px; height: 220px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= '<br><p>Titulo: <strong>'.$titulo_formatado.'</p></strong>';

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } 
        elseif ($escolha == "kabum") 
        {
            $titulo = getStr($resp, '"name": "', '",');
            $titulo_formatado = str_replace('"name": "', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);

            $preco = getStr($resp, 'h4 class="sc-d6a30908-1 WlsMM finalPrice">', '</h4');
            $preco_formatado = str_replace('h4 class="sc-d6a30908-1 WlsMM finalPrice">', '', $preco);

            $imagem = getStr($resp, '"g":["', '",');
            $foto_formatada = str_replace('"g":["', '', $imagem);
            $foto_formatada = str_replace('",', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #DD8F46;">📌 Produto na <span style="color: #5E96E8;"><strong>Kabum</span></strong></p><img src="icones/kabum.png" alt="Kabum Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "magazine") 
        {
            $titulo = getStr($resp, 'h1 data-testid="heading-product-title" font-size="28px" font-weight="500" color="#404040" class="sc-kpDqfm gXZPqL">', '</h1');
            $titulo_formatado = str_replace('h1 data-testid="heading-product-title" font-size="28px" font-weight="500" color="#404040" class="sc-kpDqfm gXZPqL">', '', $titulo);

            $preco = getStr($resp, 'p data-testid="price-value" class="sc-kpDqfm eCPtRw sc-hoLEA kXWuGr" color="#404040">', '</p');
            $preco_formatado = str_replace('p data-testid="price-value" class="sc-kpDqfm eCPtRw sc-hoLEA kXWuGr" color="#404040">', '', $preco);

            $imagem = getStr($resp, '"image":"', '",');
            $foto_formatada = str_replace('"image":"', '', $imagem);
            $foto_formatada = str_replace('",', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #5E96E8;"><strong>MAGALU</span></strong></p><img src="icones/magalu.png" alt="magalu Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "aliexpress")
        {
            $titulo = getStr($resp, '"subject":"', '",');
            $titulo_formatado = str_replace('"subject":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $coisa = getStr($resp, 'skuPropIds\":\"691\",\"skuVal\":{\"availQuantity\":', ',');
            $coisa_ = str_replace('skuPropIds\":\"691\",\"skuVal\":{\"availQuantity\":', '', $coisa);
            $coisa_ = str_replace(',', '', $coisa_);


            $preco = getStr($resp, ''.$coisa_.',\"isActivity\":true,\"optionalWarrantyPrice\":[],\"skuActivityAmount\":{\"currency\":\"BRL\",\"formatedAmount\":\"', '\"');
            $preco_formatado = str_replace(''.$coisa_.',\"isActivity\":true,\"optionalWarrantyPrice\":[],\"skuActivityAmount\":{\"currency\":\"BRL\",\"formatedAmount\":\"', '', $preco);
            $preco_formatado = str_replace('\"', '', $preco_formatado);


            $preco2 = getStr($resp, '{\"currency\":\"BRL\",\"formatedAmount\":\"', '\"');
            $preco_formatado_ = str_replace('{\"currency\":\"BRL\",\"formatedAmount\":\"', '', $preco2);
            $preco_formatado_ = str_replace('\"', '', $preco_formatado_);


            $imagem = getStr($resp, '<meta property="og:image" content="', '"/>');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"/>', '', $foto_formatada);
        
            $response1 .= '<p style="font-size: 20px; color: #E8B35E;">📌 Produto na <span style="color: #E8935E;"><strong>ALIEXPRESS</span></strong></p><img src="icones/aliex.png" alt="aliex Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            if(!empty($preco_formatado)){
                $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";
            }elseif(!empty($preco_formatado_)){
                $response1 .= "<p>Preço: <strong>$preco_formatado_</p></strong>";
            }
            
            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "banggood")
        {
            $titulo = getStr($resp, 'title>', '</title');
            $titulo_formatado = str_replace('title>', '', $titulo);
            //$titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'priceCurrency":"BRL","price":"', '",');
            $preco_formatado = str_replace('priceCurrency":"BRL","price":"', '', $preco);
            $preco_formatado = str_replace('",', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);

            $imagem = getStr($resp, 'img data-spm="0000000VU" src="', '"');
            $foto_formatada = str_replace('img data-spm="0000000VU" src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #3E4C5B;">📌 Produto na <span style="color: #E8935E;"><strong>BANGGOOD</span></strong></p><img src="icones/bang.png" alt="bang Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "shein")
        {
            $titulo = getStr($resp, 'h1 class="product-intro__head-name" tabindex="0">', '</h1');
            $titulo_formatado = str_replace('h1 class="product-intro__head-name" tabindex="0">', '', $titulo);
            //$titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span>', '</span');
            $preco_formatado = str_replace('<span>', '', $preco);
            $preco_formatado = str_replace('</span', '', $preco_formatado);
           

            $imagem = getStr($resp, '<div class="crop-image-container" data-before-crop-src="//', '"');
            $foto_formatada = str_replace('<div class="crop-image-container" data-before-crop-src="//', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #99A0A8;">📌 Produto na <span style="color: #E6EAEF;"><strong>SHEIN</span></strong></p><img src="icones/shien.png" alt="shein Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "mercado_livre")
        {
            $titulo = getStr($resp, '<h1 class="ui-pdp-title">', '</h1');
            $titulo_formatado = str_replace('<h1 class="ui-pdp-title">', '', $titulo);
            //$titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'R$', ' data-head-react');
            $preco_formatado = str_replace('R$', '', $preco);
            $preco_formatado = str_replace(' data-head-react', '', $preco_formatado);
            $preco_formatado = str_replace('"', '', $preco_formatado);
           

            $imagem = getStr($resp, '<img data-zoom="', '"');
            $foto_formatada = str_replace('<img data-zoom="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto no <span style="color: #F3EF81;"><strong>MERCADO LIVRE</span></strong></p><img src="icones/ml.png" alt="ml Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "americanas")
        {
            $titulo = getStr($resp, '<h1 class="product-title__Title-sc-15fh86r-0 iYwPCy">', '</h1');
            $titulo_formatado = str_replace('<h1 class="product-title__Title-sc-15fh86r-0 iYwPCy">', '', $titulo);
            //$titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, '<div class="styles__PriceText-sc-1o94vuj-0 kbIkrl priceSales">', '</div>');
            $preco_formatado = str_replace('<div class="styles__PriceText-sc-1o94vuj-0 kbIkrl priceSales">', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);
           

            $imagem = getStr($resp, '#primaryimage","url":"', '","caption":');
            $foto_formatada = str_replace('#primaryimage","url":"', '', $imagem);
            $foto_formatada = str_replace('","caption":', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto no <span style="color: #C13C2F;"><strong>AMERICANAS</span></strong></p><img src="icones/americanas.png" alt="americanas Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "casas_bahia")
        {
            $titulo = getStr($resp, 'aria-label="Comprar ', '"');
            $titulo_formatado = str_replace('aria-label="Comprar ', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);
            

            $preco = getStr($resp, 'data-testid="product-price-value" id="product-price">', '</p>');
            $preco_formatado = str_replace('data-testid="product-price-value" id="product-price">', '', $preco);
            $preco_formatado = str_replace('</p>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'rel="preload" as="image" href="', '"/');
            $foto_formatada = str_replace('rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"/', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #E75A64;">📌 Produto na <span style="color: #3759D7;"><strong>CASAS BAHIA</span></strong></p><img src="icones/casas.jpg" alt="casasbahia Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "submarino")
        {
            $titulo = getStr($resp, '<h1 class="src__Title-sc-1xq3hsd-0 eEEsym">', '</h1>');
            $titulo_formatado = str_replace('<h1 class="src__Title-sc-1xq3hsd-0 eEEsym">', '', $titulo);
            $titulo_formatado = str_replace('</h1>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<div class="src__BestPrice-sc-1jnodg3-5 ykHPU priceSales">', '</div>');
            $preco_formatado = str_replace('<div class="src__BestPrice-sc-1jnodg3-5 ykHPU priceSales">', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'Compartilhar</p></div></div><div class="src__Container-sc-138zmhp-0 lwzyO"><div class="src__WrapperItem-sc-138zmhp-1 cgVRkG"><div class="image__WrapperImages-sc-oakrdw-1 kOCIiH"><div class="src__Wrapper-sc-xr9q25-1 ebFfaU"><picture class="src__Picture-sc-xr9q25-2 jAziSf"><img loading="lazy" src="', '"');
            $foto_formatada = str_replace('Compartilhar</p></div></div><div class="src__Container-sc-138zmhp-0 lwzyO"><div class="src__WrapperItem-sc-138zmhp-1 cgVRkG"><div class="image__WrapperImages-sc-oakrdw-1 kOCIiH"><div class="src__Wrapper-sc-xr9q25-1 ebFfaU"><picture class="src__Picture-sc-xr9q25-2 jAziSf"><img loading="lazy" src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto no <span style="color: #1568E0;"><strong>SUBMARINO</span></strong></p><img src="icones/sub.png" alt="submarino Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "shoptime")
        {
            $titulo = getStr($resp, '<h1 class="src__Title-sc-79cth1-0 ilzqUG">', '</h1>');
            $titulo_formatado = str_replace('<h1 class="src__Title-sc-79cth1-0 ilzqUG">', '', $titulo);
            $titulo_formatado = str_replace('</h1>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<div class="src__BestPrice-sc-17hp6jc-5 iyyimP priceSales">', '</div>');
            $preco_formatado = str_replace('<div class="src__BestPrice-sc-17hp6jc-5 iyyimP priceSales">', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'srcSet="https://images-americanas.b2w.io/produtos', '"');
            $foto_formatada = str_replace('srcSet="https://images-americanas.b2w.io/produtos', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #922F7E;">📌 Produto no <span style="color: #E07515;"><strong>SHOPTIME</span></strong></p><img src="icones/shop.png" alt="shoptime Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://images-americanas.b2w.io/produtos$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "extra")
        {
            $titulo = getStr($resp, '"name":"', '",');
            $titulo_formatado = str_replace('"name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'id="product-price">', '</p>');
            $preco_formatado = str_replace('id="product-price">', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="', '"');
            $foto_formatada = str_replace('sizes="16x16"/><link rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #4099D4;">📌 Produto no <span style="color: #D4404A;"><strong>EXTRA</span></strong></p><img src="icones/extra.png" alt="extra Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "ponto_frio")
        {
            $titulo = getStr($resp, '","name":"', '",');
            $titulo_formatado = str_replace('","name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);


            $titulo_ = getStr($resp, 'aria-label="Comprar ', '"');
            $titulo_formatado_ = str_replace('aria-label="Comprar ', '', $titulo_);
            $titulo_formatado_ = str_replace('"', '', $titulo_formatado_);
            

            $preco = getStr($resp, 'id="product-price">', '</p>');
            $preco_formatado = str_replace('id="product-price">', '', $preco);
            $preco_formatado = str_replace('</p>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="', '"');
            $foto_formatada = str_replace('sizes="16x16"/><link rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #404040;">📌 Produto no <span style="color: #D49040;"><strong>PONTOFRIO</span></strong></p><img src="icones/ponto.jpg" alt="pontofrio Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            if(!empty($titulo_formatado_)){
                $response1 .= "<br><p>Titulo: <strong>$titulo_formatado_</p></strong>";
            }
        
            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "nagem")
        {
            $titulo = getStr($resp, '<h1 class="produto-descricao">', '<small>');
            $titulo_formatado = str_replace('<h1 class="produto-descricao">', '', $titulo);
            $titulo_formatado = str_replace('<small>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="precoPOR-detalhe tit-26rem precoMaior">', '</span>');
            $preco_formatado = str_replace('<span class="precoPOR-detalhe tit-26rem precoMaior">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
           

            $imagem = getStr($resp, '<div class="active carousel-item" data-slide-number="0">
                                                        <img src="', '" class="img-fluid d-block w-100 zoom">');
            $foto_formatada = str_replace('<div class="active carousel-item" data-slide-number="0">
                                                        <img src="', '', $imagem);
            $foto_formatada = str_replace('" class="img-fluid d-block w-100 zoom">', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #3759D7;"><strong>NAGEM</span></strong></p><img src="icones/nagem.png" alt="nagem Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "carrefour")
        {
            $titulo = getStr($resp, '<span class="vtex-store-components-3-x-productBrand ">', '</span>');
            $titulo_formatado = str_replace('<span class="vtex-store-components-3-x-productBrand ">', '', $titulo);
            $titulo_formatado = str_replace('</span>', '', $titulo_formatado);
            

            $preco = getStr($resp, 'property="product:price:amount" content="', '/>');
            $preco_formatado = str_replace('property="product:price:amount" content="', '', $preco);
            $preco_formatado = str_replace('/>', '', $preco_formatado);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);

            $imagem = getStr($resp, 'rel="preload" as="image" href="', '"');
            $foto_formatada = str_replace('rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #E03854;">📌 Produto no <span style="color: #15457A;"><strong>CARREFOUR</span></strong></p><img src="icones/carrefour.png" alt="carrefour Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "havan")
        {
            $titulo = getStr($resp, '<span class="base" data-ui-id="page-title-wrapper" itemprop="name">', '</span>');
            $titulo_formatado = str_replace('<span class="base" data-ui-id="page-title-wrapper" itemprop="name">', '', $titulo);
            $titulo_formatado = str_replace('</span>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="price">', '</span>');
            $preco_formatado = str_replace('<span class="price">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
            //$preco_formatado = str_replace('"', '', $preco_formatado);

            $imagem = getStr($resp, '<meta property="og:image"', '" />');
            $foto_formatada = str_replace('<meta property="og:image"', '', $imagem);
            $foto_formatada = str_replace('" />', '', $foto_formatada);
            $foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #3871E0;">📌 Produto na <span style="color: #FFFFFF;"><strong>HAVAN</span></strong></p><img src="icones/havan.jpg" alt="havan Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "kalunga")
        {
            $titulo = getStr($resp, "pageTitle':'", "',");
            $titulo_formatado = str_replace("pageTitle':'", '', $titulo);
            $titulo_formatado = str_replace("',", '', $titulo_formatado);
            

            $preco = getStr($resp, '<span id="hfprecovista">', '</span>');
            $preco_formatado = str_replace('<span id="hfprecovista">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);


            $preco_ = getStr($resp, '<p class="carrinhoflutuante__price text-nowrap pe-2">', '</p>');
            $preco_formatado_ = str_replace('<p class="carrinhoflutuante__price text-nowrap pe-2">', '', $preco_);
            $preco_formatado_ = str_replace('</p>', '', $preco_formatado_);
            //$preco_formatado = str_replace('"', '', $preco_formatado);

            $imagem = getStr($resp, 'data-src="', '"');
            $foto_formatada = str_replace('data-src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #424448;">📌 Produto na <span style="color: #FFFFFF;"><strong>KALUNGA</span></strong></p><img src="icones/kalunga.png" alt="kalunga Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            if(!empty($preco_formatado)){
                $response1 .= "<br><p>Titulo: <strong>$preco_formatado</p></strong>";
            }elseif(!empty($preco_formatado_)){
                $response1 .= "<br><p>Titulo: <strong>$preco_formatado_</p></strong>";
            }

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "netshoes")
        {
            $titulo = getStr($resp, "/><title>", "| Netshoes</title>");
            $titulo_formatado = str_replace("/><title>", '', $titulo);
            $titulo_formatado = str_replace("| Netshoes</title>", '', $titulo_formatado);
            

            $preco = getStr($resp, '</span><strong>', '</strong>');
            $preco_formatado = str_replace('</span><strong>', '', $preco);
            $preco_formatado = str_replace('</strong>', '', $preco_formatado);
            //$preco_formatado = str_replace('"', '', $preco_formatado);

            $imagem = getStr($resp, '<meta property="og:image" content="', '"');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #6C396F;">📌 Produto na <span style="color: #FFFFFF;"><strong>NETSHOES</span></strong></p><img src="icones/netshoes.png" alt="netshoes Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "nike")
        {
            $titulo = getStr($resp, '"/><title>', '</title>');
            $titulo_formatado = str_replace('"/><title>', '', $titulo);
            $titulo_formatado = str_replace("</title>", '', $titulo_formatado);
            

            $preco = getStr($resp, 'class="Typographystyled__StyledHeading-sc-1h4c8w0-1 guEzUB">', '</span>');
            $preco_formatado = str_replace('class="Typographystyled__StyledHeading-sc-1h4c8w0-1 guEzUB">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
            //$preco_formatado = str_replace('"', '', $preco_formatado);

            $imagem = getStr($resp, 'https://imgnike-a.akamaihd.net', '"/');
            $foto_formatada = str_replace('https://imgnike-a.akamaihd.net', '', $imagem);
            $foto_formatada = str_replace('"/', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #7D7D7D;">📌 Produto na <span style="color: #FFFFFF;"><strong>NIKE</span></strong></p><img src="icones/nike.jpg" alt="nike Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://imgnike-a.akamaihd.net$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "adidas")
        {
            $titulo = getStr($resp, 'name="keywords" content="', '"/');
            $titulo_formatado = str_replace('name="keywords" content="', '', $titulo);
            $titulo_formatado = str_replace('"/', '', $titulo_formatado);
            

            $preco = getStr($resp, '<div class="gl-price-item notranslate">', '</div>');
            $preco_formatado = str_replace('<div class="gl-price-item notranslate">', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);

            $preco_ = getStr($resp, '<div class="gl-price-item gl-price-item--sale notranslate">', '</div>');
            $preco_formatado_ = str_replace('<div class="gl-price-item gl-price-item--sale notranslate">', '', $preco_);
            $preco_formatado_ = str_replace('</div>', '', $preco_formatado_);
            //$preco_formatado = str_replace('"', '', $preco_formatado);

            $imagem = getStr($resp, '"image":["', '",');
            $foto_formatada = str_replace('"image":["', '', $imagem);
            $foto_formatada = str_replace('",', '', $foto_formatada);


            $imagem_ = getStr($resp, 'media="(min-width: 960px)"><img src="', '"');
            $foto_formatada_ = str_replace('media="(min-width: 960px)"><img src="', '', $imagem_);
            $foto_formatada_ = str_replace('"', '', $foto_formatada_);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #7D7D7D;">📌 Produto na <span style="color: #FFFFFF;"><strong>ADIDAS</span></strong></p><img src="icones/adidas.jpg" alt="adidas Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            if(!empty($foto_formatada_)){
                $response1 .= "<img src='$foto_formatada_' alt='Imagem do Produto' style='$imgStyle'><br>";
            }
            
            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado $preco_formatado_ </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "mizuno")
        {
            $titulo = getStr($resp, 'name="description" content="', '"');
            $titulo_formatado = str_replace('name="description" content="', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);
            

            $preco = getStr($resp, '"product:price:amount" content="', '"');
            $preco_formatado = str_replace('"product:price:amount" content="', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, '"image":"', '?');
            $foto_formatada = str_replace('"image":"', '', $imagem);
            $foto_formatada = str_replace('?', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #193886;"><strong>MIZUNO</span></strong></p><img src="icones/mizuno.jpg" alt="mizuno Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "lacoste")
        {
            $titulo = getStr($resp, '"name":"', '"');
            $titulo_formatado = str_replace('"name":"', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);
            

            $preco = getStr($resp, '"price":', '"');
            $preco_formatado = str_replace('"price":', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            $preco_formatado = str_replace(',', ',00', $preco_formatado);


            $imagem = getStr($resp, '"image":"', '"');
            $foto_formatada = str_replace('"image":"', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #2EBA21;"><strong>LACOSTE</span></strong></p><img src="icones/lacoste.png" alt="lacoste Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "centauro")
        {
            $titulo = getStr($resp, '</script><title>', ' | Centauro</title>');
            $titulo_formatado = str_replace('</script><title>', '', $titulo);
            $titulo_formatado = str_replace(' | Centauro</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, '"priceFormatted":"', '"');
            $preco_formatado = str_replace('priceFormatted":"', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            //$preco_formatado = str_replace(',', ',00', $preco_formatado);


            $imagem = getStr($resp, 'src="https://imgcentauro', '"/');
            $foto_formatada = str_replace('src="https://imgcentauro', '', $imagem);
            $foto_formatada = str_replace('"/', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #D12F1F;"><strong>CENTAURO</span></strong></p><img src="icones/centauro.png" alt="centauro Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://imgcentauro$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "dafiti")
        {
            $titulo = getStr($resp, '<title>', ' - Compre Agora | Dafiti Brasil');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace(' - Compre Agora | Dafiti Brasil', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="catalog-detail-price-value" data-field="finalPrice" itemprop="price" content="', '">');
            $preco_formatado = str_replace('<span class="catalog-detail-price-value" data-field="finalPrice" itemprop="price" content="', '', $preco);
            $preco_formatado = str_replace('">', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, 'data-img-zoom="', '"');
            $foto_formatada = str_replace('data-img-zoom="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #CCCCCC;"><strong>DAFITI</span></strong></p><img src="icones/dafiti.png" alt="dafiti Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "renner")
        {
            $titulo = getStr($resp, 'type":"Product","name":"', '",');
            $titulo_formatado = str_replace('type":"Product","name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'listPriceFormatted":"', '"');
            $preco_formatado = str_replace('listPriceFormatted":"', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, 'as="image" href="', '"');
            $foto_formatada = str_replace('as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #CF594A;"><strong>RENNER</span></strong></p><img src="icones/renner.jpg" alt="renner Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "olx")
        {
            $titulo = getStr($resp, '<meta property="og:title" content="', '"');
            $titulo_formatado = str_replace('<meta property="og:title" content="', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);
            

            $preco = getStr($resp, 'priceValue&quot;:&quot;', '&');
            $preco_formatado = str_replace('priceValue&quot;:&quot;', '', $preco);
            $preco_formatado = str_replace('&', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, '"og:image" content="', '"');
            $foto_formatada = str_replace('"og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #80CF4A;">📌 Anuncio na <span style="color: #CF824A;"><strong>OLX</span></strong></p><img src="icones/olx.png" alt="olx Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do anuncio: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "elo7")
        {
            $titulo = getStr($resp, '<title>', '</title>');
            $titulo_formatado = str_replace("<title>", '', $titulo);
            $titulo_formatado = str_replace('</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, "<meta name='twitter:data1' content='", "'");
            $preco_formatado = str_replace("<meta name='twitter:data1' content='", '', $preco);
            $preco_formatado = str_replace("'", '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, "data-zoom='", "'");
            $foto_formatada = str_replace("data-zoom='", '', $imagem);
            $foto_formatada = str_replace("'", '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #EADD57;"><strong>ELO7</span></strong></p><img src="icones/elo7.png" alt="elo7 Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "mobly")
        {
            $titulo = getStr($resp, '<title>', '</title>');
            $titulo_formatado = str_replace("<title>", '', $titulo);
            $titulo_formatado = str_replace('</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, '"lowestPriceAvailable":', ',"');
            $preco_formatado = str_replace('"lowestPriceAvailable":', '', $preco);
            $preco_formatado = str_replace(',"', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, 'data-image-big="', '">');
            $foto_formatada = str_replace('data-image-big="', '', $imagem);
            $foto_formatada = str_replace('">', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #EAA257;"><strong>MOBLY</span></strong></p><img src="icones/mobly.png" alt="mobly Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "madeira")
        {
            $titulo = getStr($resp, '<h1 class="cav--c-fpAEqe">', '</h1>');
            $titulo_formatado = str_replace('<h1 class="cav--c-fpAEqe">', '', $titulo);
            $titulo_formatado = str_replace('</h1>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="cav--c-gNPphv cav--c-gNPphv-iELazp-textStyle-h3Semibold cav--c-gNPphv-hHqInm-size-h3">', '</span>');
            $preco_formatado = str_replace('<span class="cav--c-gNPphv cav--c-gNPphv-iELazp-textStyle-h3Semibold cav--c-gNPphv-hHqInm-size-h3">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, '<meta property="og:image" content="', '"/');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"/', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #5792EA;">📌 Produto na <span style="color: #EAA257;"><strong>MADEIRA MADEIRA</span></strong></p><img src="icones/madeira.png" alt="madeira Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "pague_menos")
        {
            $titulo = getStr($resp, '<title data-react-helmet="true">', '</title>');
            $titulo_formatado = str_replace('<title data-react-helmet="true">', '', $titulo);
            $titulo_formatado = str_replace('</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="vtex-store-components-3-x-currencyInteger">', '</span>');
            $preco_formatado = str_replace('<span class="vtex-store-components-3-x-currencyInteger">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);
            $preco_ = getStr($resp, '<span class="vtex-store-components-3-x-currencyFraction">', '</span>');
            $preco_formatado_ = str_replace('<span class="vtex-store-components-3-x-currencyFraction">', '', $preco_);
            $preco_formatado_ = str_replace('</span>', '', $preco_formatado_);


            $imagem = getStr($resp, 'as="image" href="', '"');
            $foto_formatada = str_replace('as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #5792EA;">📌 Produto na <span style="color: #E13754;"><strong>PAGUE MENOS</span></strong></p><img src="icones/paguemenos.png" alt="paguemenos Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ " . $preco_formatado . ",". $preco_formatado_ . " </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "droga_raia")
        {
            $titulo = getStr($resp, '<title>', ' | Droga Raia</title>');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace(' | Droga Raia</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span class="ProductPricestyles__Price-sc-1fizsje-2 dngqVh">', '</span>');
            $preco_formatado = str_replace('<span class="ProductPricestyles__Price-sc-1fizsje-2 dngqVh">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, '<img src="https://img.drogaraia.com.br', '?');
            $foto_formatada = str_replace('<img src="https://img.drogaraia.com.br', '', $imagem);
            $foto_formatada = str_replace('?', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #376FE1;">📌 Produto na <span style="color: #E13754;"><strong>DROGA RAIA</span></strong></p><img src="icones/drogasraia.png" alt="drogasraia Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://img.drogaraia.com.br$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "drogasil")
        {
            $titulo = getStr($resp, 'class="Titlestyles__TitleStyles-sc-6rxg4t-0 fDKOTS">', '</h1>');
            $titulo_formatado = str_replace('class="Titlestyles__TitleStyles-sc-6rxg4t-0 fDKOTS">', '', $titulo);
            $titulo_formatado = str_replace('</h1>', '', $titulo_formatado);
            

            $preco = getStr($resp, '<span>R$</span>', '</div>');
            $preco_formatado = str_replace('<span>R$</span>', '', $preco);
            $preco_formatado = str_replace('</div>', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, '<img src="', '"');
            $foto_formatada = str_replace('<img src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">📌 Produto na <span style="color: #E13754;"><strong>DROGASIL</span></strong></p><img src="icones/drogasil.png" alt="drogasil Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "max_titanium")
        {
            $titulo = getStr($resp, ',"name":"', '",');
            $titulo_formatado = str_replace(',"name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, '"price":', ',"');
            $preco_formatado = str_replace('"price":', '', $preco);
            $preco_formatado = str_replace(',"', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);
            $preco_formatado = str_replace(',0', ',00', $preco_formatado);
            $preco_formatado = str_replace(',1', ',10', $preco_formatado);
            $preco_formatado = str_replace(',2', ',20', $preco_formatado);
            $preco_formatado = str_replace(',3', ',30', $preco_formatado);
            $preco_formatado = str_replace(',4', ',40', $preco_formatado);
            $preco_formatado = str_replace(',5', ',50', $preco_formatado);
            $preco_formatado = str_replace(',6', ',60', $preco_formatado);
            $preco_formatado = str_replace(',7', ',70', $preco_formatado);
            $preco_formatado = str_replace(',8', ',80', $preco_formatado);
            $preco_formatado = str_replace(',9', ',90', $preco_formatado);


            $imagem = getStr($resp, 'as="image" href="', '"');
            $foto_formatada = str_replace('as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #3D424C;">📌 Produto na <span style="color: #E13754;"><strong>MAX TITANIUM</span></strong></p><img src="icones/max.jpg" alt="maxtitanium Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ ".$preco_formatado." </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "integral_medica")
        {
            $titulo = getStr($resp, '<title>', ' - integralmedica</title>');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace(' - integralmedica</title>', '', $titulo_formatado);
            

            $preco = getStr($resp, '"fullSellingPrice":"', '",');
            $preco_formatado = str_replace('"fullSellingPrice":"', '', $preco);
            $preco_formatado = str_replace('",', '', $preco_formatado);


            $imagem = getStr($resp, '<a href="https://integralmedica.vteximg.com.br', '?');
            $foto_formatada = str_replace('<a href="https://integralmedica.vteximg.com.br', '', $imagem);
            $foto_formatada = str_replace('?', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #3D424C;">📌 Produto na <span style="color: #C65F58;"><strong>MAX TITANIUM</span></strong></p><img src="icones/integral.png" alt="integralmedica Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 220px; height: 160px;';
            $response1 .= "<img src='https://integralmedica.vteximg.com.br$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong> ".$preco_formatado." </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "new_nutrition")
        {
            $titulo = getStr($resp, '<meta property="og:title" content="', '">');
            $titulo_formatado = str_replace('<meta property="og:title" content="', '', $titulo);
            $titulo_formatado = str_replace('">', '', $titulo_formatado);
            

            $preco = getStr($resp, 'itemprop="price" content="', '"');
            $preco_formatado = str_replace('itemprop="price" content="', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            $preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp, 'data-src="//io.convertiez.com.br/m/newnutrition/shop/products/images/', '"');
            $foto_formatada = str_replace('data-src="//io.convertiez.com.br/m/newnutrition/shop/products/images/', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #5872C6;">📌 Produto na <span style="color: #C66258;"><strong>NEW NUTRITION</span></strong></p><img src="icones/nutrition.png" alt="newnutrition Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 220px; height: 160px;';
            $response1 .= "<img src='https://io.convertiez.com.br/m/newnutrition/shop/products/images/$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong> R$ ".$preco_formatado." </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "steam")
        {//aqui eu nao consigo puxar jogo que pede verificação de idade +18 

            $app = getStr($linkValidado, "app/", "/"); 

            
            // AQUI UTILIZEI PRA PUXAR O session id
            $url = "https://store.steampowered.com";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_ENCODING, "gzip");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
                "Host: store.steampowered.com",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp = curl_exec($curl);

            $session_id = getStr($resp, 'var g_sessionID = "','";');


            ///colocar a idade no post
            $url = "https://store.steampowered.com/agecheckset/app/".$coisado."/";

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_ENCODING, "gzip");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
                "Host: store.steampowered.com",
                "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $data = "sessionid=$session_id&ageDay=1&ageMonth=January&ageYear=1998";
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp2 = curl_exec($curl);


            ///ultima parte
            $url = $linkValidado;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_ENCODING, "gzip");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $headers = array(
                "Host: store.steampowered.com",
                "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
                "Cookie: wants_mature_content=1; steamCountry=BR%7C68dc3b94f4fe8ebe48f86d211eae9a98; browserid=2997766105101581475; sessionid=$session_id; timezoneOffset=-10800,0; birthtime=880948801; lastagecheckage=1-0-1998",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            $data = "snr=1_direct-navigation__";
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $resp3 = curl_exec($curl);



            $titulo = getStr($resp3, '<div id="appHubAppName" class="apphub_AppName">', '</div>');
            $titulo_formatado = str_replace('<div id="appHubAppName" class="apphub_AppName">', '', $titulo);
            $titulo_formatado = str_replace('</div>', '', $titulo_formatado);
            

            $preco = getStr($resp3, '<meta itemprop="price" content="', '"');
            $preco_formatado = str_replace('<meta itemprop="price" content="', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            //$preco_formatado = str_replace('.', ',', $preco_formatado);


            $imagem = getStr($resp3, '<img class="game_header_image_full" src="', '"');
            $foto_formatada = str_replace('<img class="game_header_image_full" src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #D3D9E4;">📌 Produto na <span style="color: #2176BA;"><strong>STEAM</span></strong></p><img src="icones/steam.png" alt="steam Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 300px; height: 190px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "microsoft")
        {
            $titulo = getStr($resp, '<title data-react-helmet="true">Comprar o ', ' | Xbox</title>');
            $titulo_formatado = str_replace('<title data-react-helmet="true">Comprar o ', '', $titulo);
            $titulo_formatado = str_replace(' | Xbox</title>', '', $titulo_formatado);

            $titulo2 = getStr($resp, '<title data-react-helmet="true">Obter o ', ' | Xbox</title>');
            $titulo_formatado_ = str_replace('<title data-react-helmet="true">Obter o ', '', $titulo2);
            $titulo_formatado_ = str_replace(' | Xbox</title>', '', $titulo_formatado_);
            

            $preco = getStr($resp, '>R$', '</');
            $preco_formatado = str_replace('>R$', '', $preco);
            $preco_formatado = str_replace('</', '', $preco_formatado);
            $preco_formatado = str_replace('+', '', $preco_formatado);


            $imagem = getStr($resp, 'class="ProductDetailsHeader-module__productImageContainer___gOb9c"><img src="', '"');
            $foto_formatada = str_replace('class="ProductDetailsHeader-module__productImageContainer___gOb9c"><img src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #EAECE9;">📌 Produto na <span style="color: #21BA60;"><strong>XBOX/MICROSOFT</span></strong></p><img src="icones/xbox.png" alt="microsoft Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 250px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            if(empty(!$titulo_formatado)){
                $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";
                $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";
            }elseif(!empty($titulo_formatado_)){
                $response1 .= "<br><p>Titulo: <strong>$titulo_formatado_</p></strong>";
                $response1 .= "<p>Preço: <strong> GRATUITO :) </p></strong>";
            }
            
            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "playstation")
        {
            $titulo = getStr($resp, '"Product","name":"', '",');
            $titulo_formatado = str_replace('"Product","name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, '"priceOrText":"', '"');
            $preco_formatado = str_replace('"priceOrText":"', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            //$preco_formatado = str_replace('+', '', $preco_formatado);


            $imagem0 = getStr($resp, '"image":"', '","offers"');
            $foto_formatada0 = str_replace('"image":"', '', $imagem0);
            $foto_formatada0 = str_replace('","offers"', '', $foto_formatada0);


            $imagem = getStr($resp, 'class="psw-blur psw-center psw-l-fit-contain" src="', '?');
            $foto_formatada = str_replace('class="psw-blur psw-center psw-l-fit-contain" src="', '', $imagem);
            $foto_formatada = str_replace('?', '', $foto_formatada);

            $imagem2 = getStr($resp, '<source srcset="', '"');
            $foto_formatada_ = str_replace('<source srcset="', '', $imagem2);
            $foto_formatada_ = str_replace('"', '', $foto_formatada_);


            $imagem3 = getStr($resp, '"role":"GAMEHUB_COVER_ART","url":"', '"');
            $foto_formatada__ = str_replace('"role":"GAMEHUB_COVER_ART","url":"', '', $imagem3);
            $foto_formatada__ = str_replace('"', '', $foto_formatada__);


            $imagem4 = getStr($resp, 'class="psw-blur psw-center psw-l-fit-cover" src="', '?');
            $foto_formatada___ = str_replace('class="psw-blur psw-center psw-l-fit-cover" src="', '', $imagem4);
            $foto_formatada___ = str_replace('?', '', $foto_formatada___);


            $imagem5 = getStr($resp, 'fit-cover" src="', '?');
            $foto_formatada____ = str_replace('fit-cover" src="', '', $imagem5);
            $foto_formatada____ = str_replace('?', '', $foto_formatada____);

            //chata pra garai essa sony, não tem foto dos role fixo
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #236EB8;">📌 Produto na <span style="color: #D2D9E0;"><strong>PLAYSTATION</span></strong></p><img src="icones/sony.png" alt="playstation Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 190px; height: 250px;';
            if(!empty($foto_formatada0)){
                $response1 .= "<img src='$foto_formatada0' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada)){
                $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada_)){
                $response1 .= "<img src='$foto_formatada_' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada___)){
                $response1 .= "<img src='$foto_formatada___' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada____)){
                $response1 .= "<img src='$foto_formatada____' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada__)){
                $response1 .= "<img src='$foto_formatada__' alt='Imagem do Produto' style='$imgStyle'><br>";
            }
            
            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong> $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "ubisoft")
        {
            $titulo = getStr($resp, 'pageContext = {"title":"', '",');
            $titulo_formatado = str_replace('pageContext = {"title":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);

            
            $preco = getStr($resp, '"BRL","formatted":"', '",');
            $preco_formatado = str_replace('"BRL","formatted":"', '', $preco);
            $preco_formatado = str_replace('",', '', $preco_formatado);


            $imagem = getStr($resp, '"edition_packshot":[{"url":"', '",');
            $foto_formatada = str_replace('"edition_packshot":[{"url":"', '', $imagem);
            $foto_formatada = str_replace('",', '', $foto_formatada);


            $imagem_ = getStr($resp, '<img class="responsive_image lazy" data-src="" src=""  data-is-responsive=forced data-retina-src=', '?');
            $foto_formatada_ = str_replace('<img class="responsive_image lazy" data-src="" src=""  data-is-responsive=forced data-retina-src=', '', $imagem_);
            $foto_formatada_ = str_replace('?', '', $foto_formatada_);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #EAECE9;">📌 Produto na <span style="color: #F8F9F6;"><strong>UBISOFT</span></strong></p><img src="icones/ubisoft.png" alt="ubisoft Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 250px;';

            if(!empty($foto_formatada)){
                $response1 .= "<img src='https://store.ubisoft.com/dw/image/v2/ABBS_PRD$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";
            }elseif(!empty($foto_formatada_)){
                $response1 .= "<img src='$foto_formatada_' alt='Imagem do Produto' style='$imgStyle'><br>";
            }

            if(empty($preco_formatado)){
                $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";
                $response1 .= "<p>Preço: <strong> Não foi possivel consultar o preço :( </p></strong>";
                $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
            }else{
                $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";
                $response1 .= "<p>Preço: <strong> $preco_formatado </p></strong>";
                $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
            }
        }
        elseif ($escolha == "gog")
        {
            $titulo = getStr($resp, '<meta property="og:title" content="', '">');
            $titulo_formatado = str_replace('<meta property="og:title" content="', '', $titulo);
            $titulo_formatado = str_replace('">', '', $titulo_formatado);
            

            $preco = getStr($resp, '"price": "', '",');
            $preco_formatado = str_replace('"price": "', '', $preco);
            $preco_formatado = str_replace('",', '', $preco_formatado);


            $imagem = getStr($resp, '<img class="productcard-thumbnails-slider__image" src="', '"');
            $foto_formatada = str_replace('<img class="productcard-thumbnails-slider__image" src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #EAE7EE;">📌 Produto na <span style="color: #965CE6;"><strong>GOG.com</span></strong></p><img src="icones/gog.png" alt="gog Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "battlenet")
        {
            $titulo = getStr($resp, '<title>', '- ');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace('- ', '', $titulo_formatado);
            

            $titulo2 = getStr($resp, 'Only", "name": "', '"');
            $titulo_formatado2 = str_replace('Only", "name": "', '', $titulo2);
            $titulo_formatado2 = str_replace('"', '', $titulo_formatado2);


            $preco = getStr($resp, '"price": ', ',');
            $preco_formatado = str_replace('"price": ', '', $preco);
            $preco_formatado = str_replace(',', '', $preco_formatado);
            $preco_formatado = str_replace('"0"', 'GRATUITO :)', $preco_formatado);
            $preco_formatado = str_replace('"', '', $preco_formatado);
            $preco_formatado = str_replace('"', '', $preco_formatado);


            $imagem = getStr($resp, '<meta property="og:image" content="', '"');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #EAE7EE;">📌 Produto na <span style="color: #3E63E5;"><strong>Battle.net</span></strong></p><img src="icones/battle.png" alt="battlenet Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado - $titulo_formatado2</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "nuuvem")
        {
            $titulo = getStr($resp, '<title>', ' - ');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace(' - ', '', $titulo_formatado);


            $titulo_ = getStr($resp, '<img alt="', '"');
            $titulo_formatado_ = str_replace('<img alt="', '', $titulo_);
            $titulo_formatado_ = str_replace('"', '', $titulo_formatado_);
            

            $preco = getStr($resp, 'class="integer">', '</span>');
            $preco_formatado = str_replace('class="integer">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);


            $preco_ = getStr($resp, '<span class="decimal">', '</span>');
            $preco_formatado_ = str_replace('<span class="decimal">', '', $preco_);
            $preco_formatado_ = str_replace('</span>', '', $preco_formatado_);


            $imagem = getStr($resp, '<img alt="'.$titulo_formatado_.'" src="', '"');
            $foto_formatada = str_replace('<img alt="'.$titulo_formatado_.'" src="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #F9FAFB;">📌 Produto na <span style="color: #62D0EA;"><strong>NUUVEM</span></strong></p><img src="icones/nuuvem.png" alt="nuuvem Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 220px; height: 130px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado_</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado$preco_formatado_ </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "g2a")
        {
            $titulo = getStr($resp, 'Product","name":"', '"');
            $titulo_formatado = str_replace('Product","name":"', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);


            $preco = getStr($resp, '{"price":"', '"');
            $preco_formatado = str_replace('{"price":"', '', $preco);
            $preco_formatado = str_replace('"', '', $preco_formatado);


            $imagem = getStr($resp, '<meta property="og:image" content="', '"');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #F9FAFB;">📌 Produto <span style="color: #62D0EA;"><strong>na</strong></span><span style="color: #E19856;"><strong> G2A</span></strong></p><img src="icones/g2a.png" alt="g2a Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 160px; height: 220px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>€ $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "eneba")
        {
            $titulo = getStr($resp, '"name":"', '"');
            $titulo_formatado = str_replace('"name":"', '', $titulo);
            $titulo_formatado = str_replace('"', '', $titulo_formatado);


            $preco = getStr($resp, '<span class="L5ErLT">', '</span>');
            $preco_formatado = str_replace('<span class="L5ErLT">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);


            $imagem = getStr($resp, 'property="og:image" content="', '"');
            $foto_formatada = str_replace('property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #E1AF56;">📌 Produto <span style="color: #56D9E1;"><strong>na</strong></span><span style="color: #E15667;"><strong> ENEBA</span></strong></p><img src="icones/eneba.png" alt="eneba Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 160px; height: 220px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong> $preco_formatado </p></strong>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "dell")
        {
            $titulo = getStr($resp, '<title>', ' | Dell Brasil');
            $titulo_formatado = str_replace('<title>', '', $titulo);
            $titulo_formatado = str_replace(' | Dell Brasil', '', $titulo_formatado);


            $preco = getStr($resp, '<span class="h3 font-weight-bold mb-1 text-nowrap sale-price">', '</span>');
            $preco_formatado = str_replace('<span class="h3 font-weight-bold mb-1 text-nowrap sale-price">', '', $preco);
            $preco_formatado = str_replace('</span>', '', $preco_formatado);


            $preco_ = getStr($resp, 'o</span> <span>R$ ', '</');
            $preco_formatado_ = str_replace('o</span> <span>R$ ', '', $preco_);
            $preco_formatado_ = str_replace('</', '', $preco_formatado_);


            $preco__ = getStr($resp, 'js-tooltip js-is-clickable data-price="', '">');
            $preco_formatado__ = str_replace('js-tooltip js-is-clickable data-price="', '', $preco__);
            $preco_formatado__ = str_replace('">', '', $preco_formatado__);


            $preco___ = getStr($resp, 'dellPrice&quot;:&quot;R$', '&');
            $preco_formatado___ = str_replace('dellPrice&quot;:&quot;R$', '', $preco___);
            $preco_formatado___ = str_replace('&', '', $preco_formatado___);


            $imagem = getStr($resp, 'data-full-img="', '?');
            $foto_formatada = str_replace('data-full-img="', '', $imagem);
            $foto_formatada = str_replace('?', '', $foto_formatada);
            //$foto_formatada = str_replace('content="', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #F9F6F6;">📌 Produto <span style="color: #F9F6F6;"><strong>na</strong></span><span style="color: #1A8CD5;"><strong> DELL</span></strong></p><img src="icones/dell.png" alt="dell Logo" style="width: 25px; height: 25px; vertical-align: middle; margin-left: 10px; border-radius: 10px">';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            if(!empty($preco_formatado)){
                $response1 .= "<p>Preço: <strong> $preco_formatado </p></strong>";
            }elseif(!empty($preco_formatado_)){
                $response1 .= "<p>Preço: <strong> $preco_formatado_ </p></strong>";
            }elseif(!empty($preco_formatado__)){
                $response1 .= "<p>Preço: <strong> R$ $preco_formatado__,00</p></strong>";
            }elseif(!empty($preco_formatado___)){
                $response1 .= "<p>Preço: <strong> R$ $preco_formatado___ </p></strong>";
            }

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        
        


        curl_close($curl);
    }
}

// Código para gerar um nome de arquivo aleatório
$randomFileName = uniqid() . '.html';

// Conteúdo HTML completo para o arquivo gerado
$htmlContent = '<!DOCTYPE html>
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
        background-color: #0A0C0F;
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
        background-color: #0F1115; /* Cor de fundo da barra */
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

    .botao-adicionar {
        background: #1D9BB9; /* Cor de fundo em RGB */
        color: #fff; /* Cor do texto */
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        margin-top: 10px;
        font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
        transition: background 6s; /* Transição mais suave */
    }

    .botao-adicionar:hover {
        background: linear-gradient(to bottom, #1D9BB9, #32A7C3); /* Gradiente RGB ao passar o mouse */
    }

    .botao-remover {
        background: #F07580; /* Cor de fundo em RGB */
        color: #fff; /* Cor do texto */
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        margin-top: 10px;
        font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
        transition: background 6s; /* Transição mais suave */
    }

    .botao-remover:hover {
        background: linear-gradient(to bottom, #F07580, #E95553); /* Gradiente RGB ao passar o mouse */
    }

    input[type="submit"] {
        background: #1D9BB9; /* Cor de fundo em RGB */
        color: #fff; /* Cor do texto */
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        cursor: pointer;
        font-family: "Lucida Console", Courier, monospace; /* Tipo de fonte desejada */
        transition: background 5s; /* Transição mais suave */
        width: 200px;
        height: 40px;
        margin: 0 auto; /* Centraliza horizontalmente */
        display: block; /* Para que a margem funcione */
    }

    input[type="submit"]:hover {
        background: linear-gradient(to bottom, #1D9BB9, #32A7C3); /* Gradiente RGB ao passar o mouse */
    }

    /* Estilos do segundo container vazio */
    .container-right {
        height: 500px;
        width: 780px;
        margin-right: 1px; /* Margem à direita */
        background-color: #0F1115;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        display: inline-block;
        overflow-y: auto;
        padding-top: 40px;
        padding-right: 20px; /* Padding à direita para manter a mesma largura do texto */
        padding-bottom: 25px;
        max-height: 550px;
        max-width: 780px;
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
    </style>
    </head>
    <div class="topbar"></div>
    <div class="blue-line"></div>
    <h7 style="font-size: 15px; font-family: Verdana, Arial, Helvetica, sans-serif; color: #0C1312; position: fixed; top: 0; left: 50%; transform: translateX(-50%);margin-top: 8px;">
    Copyright © 2023 <strong>seulink.link</strong> – Todos os direitos reservados.</h7>
    <h8>Desenvolvido por <strong>Leoj</strong> <a href="https://github.com/joeeloliveira" target="_blank"><i class="fab fa-github"></i></a>.</h8>


   
    <div class="container-right">
    <div class="content-wrapper">
        </div>
        <img src="logooo1.png" alt="Seulink" style="width: 250px; height: 150px; margin-top: -50px;">
        <p id="color-changing-text" style="font-size: 25px; text-align: center; color: white; margin-top: 10px;">SEUS <strong>LINKS</strong> GERADOS ↷ </p>

        
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

        </style>
        <div class="bottom-bar">
        <p style="margin-left: 10px; margin-top: 25px; font-size: 20px; color: white;">🌐Seulink<strong>.link</strong></p>
        <p style="margin-left: 35px; margin-top: -20px; font-size: 10px; color: #E2E7E9;">encurte seus links com facilidade, use <a href="https://seulink.link/" target="_blank">seulink.link :)</p>
        <div class="white-line"></div>
    </div>
    ' . $response1 . '
<br><br></body>
</html>';

// Salva o conteúdo HTML no arquivo gerado
file_put_contents($randomFileName, $htmlContent);

//echo "Arquivo gerado com sucesso: <a href=\"$randomFileName\" target=\"_blank\">$randomFileName</a>";
?>
</div>

<div class="container-right" id="container-right">
<?php
if(isset($_POST["gerar_link"])) {
    $var1 = '<center><p><a href="';
    $var2 = '" target="_blank" style="color: #7F93DC; font-size: 18px; animation: mudarCor 5s infinite, mudarCorBorda 5s infinite; border: 2px dashed; border-radius: 10px; padding: 5px;"><strong> 💾 CLIQUE AQUI</strong>, SEU LINK FOI GERADO ↩</a></p></center>';


    echo $var1 . $randomFileName . $var2;
}
?>
<script>
        function copiarConteudo() {
            // Seleciona o conteúdo da variável $randomFileName
            var conteudo = "<?php echo $randomFileName; ?>";
            
            // Cria um elemento de entrada de texto para copiar o conteúdo
            var input = document.createElement("input");
            input.setAttribute("value", conteudo);
            
            // Adiciona o elemento de entrada de texto à página
            document.body.appendChild(input);
            
            // Seleciona o texto no elemento de entrada de texto
            input.select();
            
            // Copia o texto para a área de transferência
            document.execCommand("copy");
            
            // Remove o elemento de entrada de texto da página
            document.body.removeChild(input);
            
            // Exibe uma mensagem de confirmação
            alert("Conteúdo copiado para a área de transferência!");
        }
    </script>
<?php
    error_reporting(0);
    echo $response1; // Exibe todas as informações coletadas
    $consultas = fopen("linksConsultados.txt", "a");
    fwrite($consultas, $response1);
    fclose($consultas);
 ?>
</div>
</body>
</html>