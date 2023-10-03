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
                    background-color: #0F1115;
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
        </style>
                <div class="container">

        <img src="logooo1.png" alt="Seulink">
        <h4>⇵ Escolha o website: </h4>
        <form action="" method="post">
            <div id="campos">
                <div>
                    <select name="escolha[]">
                        <option value="">⨠Escolha o website desejado</option>
                        <option value="amazon">AMAZON</option>
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
                        <option value="netshoes">NETSHOES</option>
                        <option value="nike">NIKE</option>
                        <option value="adidas">ADIDAS</option>
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
                var select = campoClone.querySelector('select');
                var linkInput = campoClone.querySelector('input[type="url"]');
                select.name = "escolha[]";
                linkInput.name = "link[]";
                campoClone.querySelector('button').addEventListener('click', function() {
                    removerCampo(this);
                });
                campos.appendChild(campoClone);
            }

            function removerCampo(botao) {
                var campo = botao.parentNode;
                campo.parentNode.removeChild(campo);
            }

            function atualizarConteudo() {
                var escolhas = document.getElementsByName("escolha[]");
                var links = document.getElementsByName("link[]");

                var response1 = "";

                for (var i = 0; i < escolhas.length; i++) {
                    var escolha = escolhas[i].value;
                    var link = links[i].value;

                    // Validação do link aqui (se necessário)

                    // Código para buscar informações do produto aqui

                    // Montar a resposta com as informações do produto
                    var produtoInfo = "Escolha: " + escolha + "<br>Link: " + link + "<br><br>";

                    response1 += produtoInfo;
                }

                document.getElementById("container-right").innerHTML = response1;
            }
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
            echo "Informe um link válido com mais de 10 caracteres e menos de 1400 caracteres para " . $escolha . "<br>";
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

            $response1 .= '<p style="font-size: 20px; color: #ffffff;">Produto na <span style="color: #E8B35E;"><strong>Amazon</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #E8B35E;">Produto na <span style="color: #5E96E8;"><strong>Kabum</span></strong></p>';

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

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">Produto na <span style="color: #5E96E8;"><strong>MAGALU</span></strong></p>';

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
            

            $preco = getStr($resp, 'formatedAmount\":\"', '\"');
            $preco_formatado = str_replace('formatedAmount\":\"', '', $preco);
            $preco_formatado = str_replace('\"', '', $preco_formatado);

            $imagem = getStr($resp, '<meta property="og:image" content="', '"/>');
            $foto_formatada = str_replace('<meta property="og:image" content="', '', $imagem);
            $foto_formatada = str_replace('"/>', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #E8B35E;">Produto na <span style="color: #E8935E;"><strong>ALIEXPRESS</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #3E4C5B;">Produto na <span style="color: #E8935E;"><strong>BANGGOOD</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #99A0A8;">Produto na <span style="color: #E6EAEF;"><strong>SHEIN</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">Produto no <span style="color: #F3EF81;"><strong>MERCADO LIVRE</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>R$ $preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">Produto no <span style="color: #C13C2F;"><strong>AMERICANAS</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "casas_bahia")
        {
            $titulo = getStr($resp, 'aria-label="Comprar ', '"');
            $titulo_formatado = str_replace('aria-label="Comprar ', '', $titulo);
            //$titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'data-testid="product-price-value" id="product-price">', '</p>');
            $preco_formatado = str_replace('data-testid="product-price-value" id="product-price">', '', $preco);
            $preco_formatado = str_replace('</p>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'rel="preload" as="image" href="', '"/');
            $foto_formatada = str_replace('rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"/', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #E75A64;">Produto na <span style="color: #1C3A7D;"><strong>CASAS BAHIA</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">Produto no <span style="color: #1568E0;"><strong>SUBMARINO</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #922F7E;">Produto no <span style="color: #E07515;"><strong>SHOPTIME</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='https://images-americanas.b2w.io/produtos$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #4099D4;">Produto no <span style="color: #D4404A;"><strong>EXTRA</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

            $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
        elseif ($escolha == "ponto_frio")
        {
            $titulo = getStr($resp, '","name":"', '",');
            $titulo_formatado = str_replace('","name":"', '', $titulo);
            $titulo_formatado = str_replace('",', '', $titulo_formatado);
            

            $preco = getStr($resp, 'id="product-price">', '</p>');
            $preco_formatado = str_replace('id="product-price">', '', $preco);
            $preco_formatado = str_replace('</p>', '', $preco_formatado);
           

            $imagem = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="', '"');
            $foto_formatada = str_replace('sizes="16x16"/><link rel="preload" as="image" href="', '', $imagem);
            $foto_formatada = str_replace('"', '', $foto_formatada);

            $response1 .= '<p style="font-size: 20px; color: #404040;">Produto no <span style="color: #D49040;"><strong>PONTOFRIO</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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

            $response1 .= '<p style="font-size: 20px; color: #FFFFFF;">Produto na <span style="color: #15457A;"><strong>NAGEM</span></strong></p>';

            $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
            $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

            $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</p></strong>";

            $response1 .= "<p>Preço: <strong>$preco_formatado</p></strong><br>";

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
    $var1 = '<p><a href="';
    $var2 = '" target="_blank">Abrir Arquivo Gerado</a></p>';


    echo $var1 . $randomFileName . $var2;
}
?>
<?php
    error_reporting(0);
    echo $response1; // Exibe todas as informações coletadas
 ?>
</div>
</body>
</html>