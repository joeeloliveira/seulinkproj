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
        <div style="background-color: #4BA3C5;">
            <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
            <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
            <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qt9Hug5NfnQDGMoaQYXN1+PiQvda7poO7/5k4qAmMN6evu0oDFMJTyjqaoTGHdqf" crossorigin="anonymous">


            <!-- PARTE DA ADIÇÃO DAS TABELAS !-->
            <form action="" method="post">
        <div id="campos">
            <div>
                <select name="escolha[]" onchange="atualizarNomeLink(this)">
                    <option value="">Clique e escolha</option>
                    <option value="link2">AMAZON BR</option>
                    <option value="link3">KABUM</option>
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
        //chatgpt ajudou aqui
          function adicionarCampo() {
            var campos = document.getElementById("campos");
            var campoClone = campos.firstElementChild.cloneNode(true); // Clona o primeiro campo
            campos.appendChild(campoClone);
        }

        function removerCampo(botao) {
            var campo = botao.parentNode;
            campo.parentNode.removeChild(campo);
        }

        function atualizarNomeLink(selectElement) {
            var selectIndex = selectElement.selectedIndex;
            var linkInput = selectElement.nextElementSibling;
            linkInput.name = "link" + (selectIndex + 1);
        }
    </script>
    <!-- SCRIPT DAS TABELAS !-->



            <br><br>
                <br><br>
                <input type="submit" value="Enviar" style="width: 200px; height: 40px;">
                <br><br>
            </form>
        </div>
    </center>
</body>
</html>
<div style="background-color: #4BA3C5;">
<?php
//error_reporting(0);
echo "<center>";

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}


$amazon = $_POST["link2"];
$kabum = $_POST["link3"];
$magalu = $_POST["link4"];
$aliexpress = $_POST["link5"];
$banggod = $_POST["link6"];
$shein = $_POST["link7"];
$mercadoLivre = $_POST["link8"];
$americanas = $_POST["link9"];
$casasbahia = $_POST["link10"];
$submarino = $_POST["link11"];
$shoptime = $_POST["link12"];
$extra = $_POST["link13"];
$pontofrio = $_POST["link14"];
$nagem = $_POST["link15"];
$carrefour = $_POST["link16"];
$havan = $_POST["link17"];
$kalunga = $_POST["link18"];
$netshoes = $_POST["link19"];
$nike = $_POST["link20"];
$adidas = $_POST["link21"];
$mizuno = $_POST["link22"];
$lacoste = $_POST["link23"];
$centauro = $_POST["link24"];
$dafiti = $_POST["link25"];
$renner = $_POST["link26"];
$olx = $_POST["link27"];
$elo7 = $_POST["link28"];
$mobly = $_POST["link29"];
$madeira = $_POST["link30"];
$paguemenos = $_POST["link31"];
$drogaraia = $_POST["link32"];
$drogasil = $_POST["link33"];
$growth = $_POST["link34"];
$maxtitanium = $_POST["link35"];



//-------------------------------------
/* implementando AMAZON BR */


$amazonvalidado = filter_var($amazon, FILTER_VALIDATE_URL);
if(!$amazonvalidado){
    echo "informe um link meu nobre<br>";
}elseif(strlen($amazonvalidado) <= 10 or strlen($amazonvalidado) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl AMAZON
    $curl = curl_init($amazonvalidado);
    curl_setopt($curl, CURLOPT_URL, $amazonvalidado);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.amazon.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd = getStr($resp, '<span id="productTitle" class="a-size-large product-title-word-break">','</span>');
    $fotoProd = getStr($resp, '"hiRes":"','"');
    $valorProd = getStr($resp, '<span class="a-offscreen">','</span>');

    //--exibindo os detalhes
    echo $nomeProd . "<br>" . $valorProd . "<br>";
    echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$amazonvalidado\" target=\"_blank\">$amazonvalidado</a>";
}

echo "<br><hr><br>";

//-------------------------------------
/* implementando KABUM / */

$kabumvalidado = filter_var($kabum, FILTER_VALIDATE_URL);
if(!$kabumvalidado){
    echo "informe um link meu nobre<br>";
}elseif(strlen($kabumvalidado) <= 10 or strlen($kabumvalidado) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl KABUM
    $curl = curl_init($kabumvalidado);
    curl_setopt($curl, CURLOPT_URL, $kabumvalidado);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.kabum.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd = getStr($resp, '<h1 class="sc-89bddf0f-6 dDYTAu">','</h1>');
    $fotoProd = getStr($resp, '\"g\":[\"','\",');
    $valorProd = getStr($resp, '<h4 class="sc-d6a30908-1 WlsMM finalPrice">','</h4>');

    //--exibindo os detalhes
    echo $nomeProd . "<br>" . $valorProd . "<br>";
    echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$kabumvalidado\" target=\"_blank\">$kabumvalidado</a>";
}

echo "<br><hr><br>";

//-------------------------------------
/* implementando MAGALU / */




//-------------------------------------
/* implementando ALIEXPRESS / */



//-------------------------------------
/* implementando BANGGOOD / */



//-------------------------------------
/* implementando SHEIN / */




/* implementando MERCADO LIVRE / */


/* implementando AMERICANAS / LINK 10*/


/* implementando CASAS BAHIA / LINK 11*/


/* implementando SUBMARINO / LINK 12*/


/* implementando SHOPTIME / LINK 13*/


/* implementando EXTRA / LINK 14*/


/* implementando PONTOFRIO / LINK 15*/


/* implementando NAGEM / LINK 16*/


/* implementando CARREFOUR / LINK 17*/


/* implementando HAVAN / LINK 18*/


/* implementando KALUNGA / LINK 19*/


/* implementando NETSHOES / LINK 20*/


/* implementando NIKE / LINK 21*/


/* implementando ADIDAS / LINK 22*/


/* implementando MIZUNO / LINK 23*/


/* implementando LACOSTE / LINK 24*/


/* implementando CENTAURO / LINK 25*/


/* implementando DAFITI / LINK 26*/


/* implementando RENNER / LINK 27*/


/* implementando OLX / LINK 28*/


/* implementando ELO7 / LINK 29*/


/* implementando MOBLY / LINK 30*/


/* implementando MADEIRA madeira / LINK 31*/


/* implementando PAGUE MENOS / LINK 32*/


/* implementando DROGA RAIA / LINK 33*/


/* implementando DROGASIL / LINK 34*/


/* implementando GROWTH SUPLEMENTOS / LINK 35*/


/* implementando MAX TITANIUM / LINK 36*/










?>