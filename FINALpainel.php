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
                            <option value="magalu">MAGAZINE LUIZA</option>
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
                            <option value="mizuno">MIZUNO</option>
                            <option value="lacoste">LACOSTE</option>
                            <option value="centauro">CENTAURO</option>
                            <option value="dafiti">DAFITI</option>
                            <option value="renner">RENNER</option>
                            <option value="olx">OLX</option>
                            <option value="elo7">ELO7</option>
                            <option value="mobly">MOBLY</option>
                            <option value="madeira">MADEIRA Madeira</option>
                            <option value="pague_menos">PAGUE MENOS</option>
                            <option value="droga_raia">DROGA RAIA</option>
                            <option value="drogasil">DROGASIL</option>
                            <option value="max_titanium">MAX TITANIUM</option>
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
        if ($escolha == "amazon"){
            $nomeProd = getStr($resp, '<span id="productTitle" class="a-size-large product-title-word-break">', '</span>');
            $fotoProd = getStr($resp, '"hiRes":"', '"');
            $valorProd = getStr($resp, '<span class="a-offscreen">', '</span>');

            echo "<p>Nome do Produto: " . $nomeProd . "</p>";
            echo "<p>Valor do Produto: " . $valorProd . "</p>";
            echo '<img src="' . $fotoProd . '" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>" . "Link do produto: " . "</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif ($escolha == "kabum"){
            $nomeProd = getStr($resp, '<h1 class="sc-89bddf0f-6 dDYTAu">', '</h1>');
            $fotoProd = getStr($resp, '"g":["', '",');
            $valorProd = getStr($resp, '<h4 class="sc-d6a30908-1 WlsMM finalPrice">', '</h4>');

            echo "<p>Nome do Produto: " . $nomeProd . "</p>";
            echo "<p>Valor do Produto: " . $valorProd . "</p>";
            echo '<img src="' . $fotoProd . '" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>" . "Link do produto: " . "</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif ($escolha == "magalu"){
            $nomeProd = getStr($resp, '<h1 data-testid="heading-product-title" font-size="28px" font-weight="500" color="#404040" class="sc-kpDqfm gXZPqL">','</h1>');
            $valorProd = getStr($resp, '<p data-testid="price-value" class="sc-kpDqfm eCPtRw sc-hoLEA kXWuGr" color="#404040">','</p>');
            $fotoProd = getstr($resp, '"image":"','","');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif($escolha == "aliexpress"){
            $nomeProd = getStr($resp, '"subject":"','",');
            $fotoProd = getStr($resp, '<meta property="og:image" content="','"/>');
            $valorProd = getStr($resp, 'formatedAmount\":\"','\"');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif($escolha == "banggood"){
            $nomeProd = getStr($resp, "<title>","</title>");
            $fotoProd = getStr($resp, '<img data-spm="0000000VU" src="','"');
            $valorProd = getStr($resp, 'priceCurrency":"BRL","price":"','",');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$ " . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif ($escolha == "shein"){
            $nomeProd = getStr($resp, '<h1 class="product-intro__head-name" tabindex="0">','</h1>');
            $fotoProd = getStr($resp, '<div class="crop-image-container" data-before-crop-src="//','"');
            $valorProd = getStr($resp, '<span>','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https://'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif($escolha == "mercado_livre"){
            $nomeProd = getStr($resp, '<h1 class="ui-pdp-title">','</h1>');
            $fotoProd = getStr($resp, '<img data-zoom="','"');
            $valorProd = getStr($resp, 'R$','" data-head-react');


            echo $nomeProd . "<br>R$ " . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        } elseif($escolha == "americanas"){
            $nomeProd = getStr($resp, '<h1 class="product-title__Title-sc-15fh86r-0 iYwPCy">','</h1>');
            $fotoProd = getStr($resp, '#primaryimage","url":"','","caption":');
            $valorProd = getStr($resp, '<div class="styles__PriceText-sc-1o94vuj-0 kbIkrl priceSales">','</div>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "casas_bahia"){
            $nomeProd = getStr($resp, 'aria-label="Comprar ','"');
            $fotoProd = getStr($resp, 'rel="preload" as="image" href="','"/');
            $valorProd = getStr($resp, 'data-testid="product-price-value" id="product-price">','</p>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "submarino"){
            $nomeProd = getStr($resp, '<h1 class="src__Title-sc-1xq3hsd-0 eEEsym">','</h1>');
            $nomeProd = ucfirst($nomeProd);
            $fotoProd = getStr($resp, 'Compartilhar</p></div></div><div class="src__Container-sc-138zmhp-0 lwzyO"><div class="src__WrapperItem-sc-138zmhp-1 cgVRkG"><div class="image__WrapperImages-sc-oakrdw-1 kOCIiH"><div class="src__Wrapper-sc-xr9q25-1 ebFfaU"><picture class="src__Picture-sc-xr9q25-2 jAziSf"><img loading="lazy" src="','"');
            $valorProd = getStr($resp, '<div class="src__BestPrice-sc-1jnodg3-5 ykHPU priceSales">','</div>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "shoptime"){
            $nomeProd = getStr($resp, '<h1 class="src__Title-sc-79cth1-0 ilzqUG">','</h1>');
            $fotoProd = getStr($resp, '#primaryimage","url":"','",');
            $valorProd = getStr($resp, '<div class="src__BestPrice-sc-17hp6jc-5 iyyimP priceSales">','</div>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "extra"){
            $nomeProd = getStr($resp, '"name":"','",');
            $fotoProd = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="','"');
            $valorProd = getStr($resp, 'id="product-price">','</p>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "ponto_frio"){
            $nomeProd = getStr($resp, '","name":"','",');
            $fotoProd = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="','"');
            $valorProd = getStr($resp, 'id="product-price">','</p>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "nagem"){
            $nomeProd = getStr($resp, '<h1 class="produto-descricao">','<small>');
$fotoProd = getStr($resp, '<div class="active carousel-item" data-slide-number="0">
                                                        <img src="','" class="img-fluid d-block w-100 zoom">');                
            $valorProd = getStr($resp, '<span class="precoPOR-detalhe tit-26rem precoMaior">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https:'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "carrefour"){
            $nomeProd = getStr($resp, '<span class="vtex-store-components-3-x-productBrand ">','</span>');
            $fotoProd = getStr($resp, 'rel="preload" as="image" href="','"');
            $valorProd = getStr($resp, 'property="product:price:amount" content="','"/>');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$" . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "havan"){
            $nomeProd = getStr($resp, '<span class="base" data-ui-id="page-title-wrapper" itemprop="name">','</span>');
            $fotoProd = getStr($resp, '<meta property="og:image"','" />');
            $foto_formatada = str_replace('content="', '', $fotoProd);
            $valorProd = getStr($resp, '<span class="price">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$foto_formatada.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "kalunga"){
            $nomeProd = getStr($resp, "pageTitle':'","',");
            $fotoProd = getStr($resp, 'data-src="','"');
            $valorProd = getStr($resp, '<span id="hfprecovista">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "netshoes"){
            $nomeProd = getStr($resp, '/><title>','| Netshoes</title>');
            $fotoProd = getStr($resp, '<meta property="og:image" content="','"');
            $valorProd = getStr($resp, '</span><strong>','</strong>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https:'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "nike"){
            $nomeProd = getStr($resp, '"/><title>','</title>');
            $fotoProd = getStr($resp, 'https://imgnike-a.akamaihd.net','"/');
            $valorProd = getStr($resp, 'class="Typographystyled__StyledHeading-sc-1h4c8w0-1 guEzUB">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https://imgnike-a.akamaihd.net'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "adidas"){
            $nomeProd = getStr($resp, 'name="keywords" content="','"/');
            $fotoProd = getStr($resp, '"image":["','",');
            $valorProd = getStr($resp, '<div class="gl-price-item gl-price-item--sale notranslate">','</div>');
            $valorProd_ = getStr($resp, '<div class="gl-price-item notranslate">','</div>');

            echo $nomeProd . "<br>" . $valorProd . $valorProd_ . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "mizuno"){
            $nomeProd = getStr($resp, 'name="description" content="','"');
            $fotoProd = getStr($resp, '"image":"','?');
            $valorProd = getStr($resp, '"product:price:amount" content="','"');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$ " . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "lacoste"){
            $nomeProd = getStr($resp, '"name":"','"');
            $fotoProd = getStr($resp, '"image":"','"');
            $valorProd = getStr($resp, '"price":','"');
            $valor_formatado = str_replace(',', ',00', $valorProd);


            echo $nomeProd . "<br>R$ " . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "centauro"){
            $nomeProd = getStr($resp, '</script><title>',' | Centauro</title>');
            $fotoProd = getStr($resp, 'src="https://imgcentauro','"/');
            $valorProd = getStr($resp, '"priceFormatted":"','"');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https://imgcentauro'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "dafiti"){
            $nomeProd = getStr($resp, '<title>',' - Compre Agora | Dafiti Brasil');
            $fotoProd = getStr($resp, 'data-img-zoom="','"');
            $valorProd = getStr($resp, '<span class="catalog-detail-price-value" data-field="finalPrice" itemprop="price" content="','">');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$" . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "renner"){
            $nomeProd = getStr($resp, 'type":"Product","name":"','",');
            $fotoProd = getStr($resp, 'as="image" href="','"');
            $valorProd = getStr($resp, 'listPriceFormatted":"','"');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https:'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "olx"){
            $nomeProd = getStr($resp, '<meta property="og:title" content="','"');
            $fotoProd = getStr($resp, '"og:image" content="','"');
            $valorProd = getStr($resp, 'priceValue&quot;:&quot;','&');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "elo7"){
            $nomeProd = getStr($resp, '<title>','</title>');
            $fotoProd = getStr($resp, "data-zoom='","'");
            $valorProd = getStr($resp, "<meta name='twitter:data1' content='","'");


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https:'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "mobly"){
            $nomeProd = getStr($resp, '<title>','</title>');
            $fotoProd = getStr($resp, 'data-image-big="','">');
            $valorProd = getStr($resp, '"lowestPriceAvailable":',',"');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$" . $valor_formatado . "<br>";
            echo '<img src="https:'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "madeira"){
            $nomeProd = getStr($resp, '<h1 class="cav--c-fpAEqe">','</h1>');
            $fotoProd = getStr($resp, '<meta property="og:image" content="','"/');
            $valorProd = getStr($resp, '<span class="cav--c-gNPphv cav--c-gNPphv-iELazp-textStyle-h3Semibold cav--c-gNPphv-hHqInm-size-h3">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "pague_menos"){
            $nomeProd = getStr($resp, '<title data-react-helmet="true">','</title>');
            $fotoProd = getStr($resp, 'as="image" href="','"');
            //$foto_formatada = str_replace('content="', '', $fotoProd);
            $valorProd = getStr($resp, '<span class="vtex-store-components-3-x-currencyInteger">','</span>');
            $valorProd_ = getStr($resp, '<span class="vtex-store-components-3-x-currencyFraction">','</span>');

            echo $nomeProd . "<br>R$ " . $valorProd . ",". $valorProd_ . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "droga_raia"){
            $nomeProd = getStr($resp, '<title>',' | Droga Raia</title>');
            $fotoProd = getStr($resp, '<img src="https://img.drogaraia.com.br','?');
            $valorProd = getStr($resp, '<span class="ProductPricestyles__Price-sc-1fizsje-2 dngqVh">','</span>');


            echo $nomeProd . "<br>" . $valorProd . "<br>";
            echo '<img src="https://img.drogaraia.com.br'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "drogasil"){
            $nomeProd = getStr($resp, 'class="Titlestyles__TitleStyles-sc-6rxg4t-0 fDKOTS">','</h1>');
            $fotoProd = getStr($resp, '<img src="','"');
            $valorProd = getStr($resp, '<span>R$</span>','</div>');


            echo $nomeProd . "<br>R$ " . $valorProd . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
        }elseif($escolha == "max_titanium"){
            $nomeProd = getStr($resp, ',"name":"','",');
            $fotoProd = getStr($resp, 'as="image" href="','"');
            $valorProd = getStr($resp, '"price":',',"');
            $valor_formatado = str_replace('.', ',', $valorProd);


            echo $nomeProd . "<br>R$ " . $valor_formatado . "<br>";
            echo '<img src="'.$fotoProd.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
            echo "<br>";
            echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
            echo "<a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a>";
        }
    }
}
?>
</div>
