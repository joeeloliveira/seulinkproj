<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seulink</title>
    <style>
        /* Estilos CSS aqui, se necessário */
    </style>
</head>
<body>
    <center>
        <div style="background-color: #92C2D3;">
            <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
            <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qt9Hug5NfnQDGMoaQYXN1+PiQvda7poO7/5k4qAmMN6evu0oDFMJTyjqaoTGHdqf" crossorigin="anonymous">

            <!-- PARTE DA ADIÇÃO DAS TABELAS !-->
            <form action="" method="post">
                <div id="campos">
                    <div>
                        <select name="escolha[]">
                            <option value="amazon">AMAZON</option>
                            <option value="kabum">KABUM</option>
                            <option value="terceiro">TERCEIRO</option>
                        </select>
                        <input type="url" name="link[]">
                        <button type="button" onclick="removerCampo(this)">Remover</button>
                    </div>
                </div>
                <button type="button" onclick="adicionarCampo()">Adicionar</button>
                <input type="submit" value="Enviar">
            </form>
            <!-- FINAL DA ADIÇÃO DAS TABELAS !-->
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
            </script>
            <!-- SCRIPT DAS TABELAS !-->
            <br><br>
            <br><br>
            <input type="submit" value="Enviar" style="width: 200px; height: 40px;">
            <br><br>
        </div>
    </center>
</body>
</html>
<div style="background-color: #92C2D3;">
<?php
echo "<center>";

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        } elseif (strlen($linkValidado) <= 10 || strlen($linkValidado) > 1400) {
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
        if ($escolha == "amazon") {
            $nomeProd = getStr($resp, '<span id="productTitle" class="a-size-large product-title-word-break">', '</span>');
            $fotoProd = getStr($resp, '"hiRes":"', '"');
            $valorProd = getStr($resp, '<span class="a-offscreen">', '</span>');

            echo "<p>Nome do Produto: " . $nomeProd . "</p>";
            echo "<p>Valor do Produto: " . $valorProd . "</p>";
            echo '<img src="' . $fotoProd . '" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>" . "Link do produto: " . "</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif ($escolha == "kabum") {
            $nomeProd = getStr($resp, '<h1 class="sc-89bddf0f-6 dDYTAu">', '</h1>');
            $fotoProd = getStr($resp, '"g":["', '",');
            $valorProd = getStr($resp, '<h4 class="sc-d6a30908-1 WlsMM finalPrice">', '</h4>');

            echo "<p>Nome do Produto: " . $nomeProd . "</p>";
            echo "<p>Valor do Produto: " . $valorProd . "</p>";
            echo '<img src="' . $fotoProd . '" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>" . "Link do produto: " . "</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }
    }
}
?>
</div>
