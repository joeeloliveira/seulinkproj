<center>
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-Qt9Hug5NfnQDGMoaQYXN1+PiQvda7poO7/5k4qAmMN6evu0oDFMJTyjqaoTGHdqf" crossorigin="anonymous">
<form action="" method ="post">
<input type="url" name="link1">
<select name="escolha" id="escolha">
<option value="magalu"> MAGALU</option>
</select>
<br>
<input type="url" name="link2">
<select name="escolha" id="escolha">
<option value="magalu"> MAGALU</option>
</select>
<br>
<input type="url" name="link3">
<select name="escolha" id="escolha">
<option value="amazon"> AMAZON</option>
</select>
<br>
<input type="url" name="link4">
<select name="escolha" id="escolha">
<option value="kabum"> KABUM</option>
</select>
<br>
<input type="url" name="link5">
<select name="escolha" id="escolha">
<option value="shein"> SHEIN</option>
</select>
<br>
<input type="url" name="link6">
<select name="escolha" id="escolha">
<option value="aliex"> ALIEXPRESS</option>
</select>
<br>
<input type="url" name="link7">
<select name="escolha" id="escolha">
<option value="mercadoL"> MERCADO LIVRE</option>
</select>
<br>
<input type="url" name="link8">
<select name="escolha" id="escolha">
<option value="nagem"> NAGEM</option>
</select>
<br>
<input type="url" name="link9">
<select name="escolha" id="escolha">
<option value="americanas"> AMERICANAS</option>
</select>
<br>
<input type="url" name="link10">
<select name="escolha" id="escolha">
<option value="casasBH"> CASAS BAHIA</option>
</select>
<br>
<input type="url" name="link11">
<select name="escolha" id="escolha">
<option value="shoptime"> SHOPTIME</option>
</select>
<br>
<input type="url" name="link12">
<select name="escolha" id="escolha">
<option value="submarino"> SUBMARINO</option>
</select>
<br>
<input type="url" name="link13">
<select name="escolha" id="escolha">
<option value="extra"> EXTRA</option>
</select>
<br>
<input type="url" name="link14">
<select name="escolha" id="escolha">
<option value="pontofrio"> PONTO FRIO</option>
</select>
<br>
<input type="url" name="link15">
<select name="escolha" id="escolha">
<option value="carrefour"> CARREFOUR</option>
</select>
<br>
<input type="url" name="link16">
<select name="escolha" id="escolha">
<option value="havan"> HAVAN</option>
</select>
<br>
<input type="url" name="link17">
<select name="escolha" id="escolha">
<option value="netshoes"> NETSHOES</option>
</select>
<br>
<input type="url" name="link18">
<select name="escolha" id="escolha">
<option value="nike"> NIKE</option>
</select>
<br>
<input type="url" name="link19">
<select name="escolha" id="escolha">
<option value="adidas"> ADIDAS</option>
</select>
<br>
<input type="url" name="link20">
<select name="escolha" id="escolha">
<option value="centauro"> CENTAURO</option>
</select>
<br>
<input type="url" name="link21">
<select name="escolha" id="escolha">
<option value="dafiti"> DAFITI</option>
</select>
<br>
<input type="url" name="link22">
<select name="escolha" id="escolha">
<option value="renner"> RENNER</option>
</select>
<br>
<input type="url" name="link23">
<select name="escolha" id="escolha">
<option value="olx"> OLX</option>
</select>
<br>
<input type="url" name="link24">
<select name="escolha" id="escolha">
<option value="elo7"> ELO7</option>
</select>
<br>
<input type="url" name="link25">
<select name="escolha" id="escolha">
<option value="madeira"> MADEIRA/madeira</option>
</select>
<br>
<input type="url" name="link26">
<select name="escolha" id="escolha">
<option value="mobly"> MOBLY</option>
</select>
<br>
<input type="url" name="link27">
<select name="escolha" id="escolha">
<option value="drogaraia"> DROGA RAIA</option>
</select>
<br>
<input type="url" name="link28">
<select name="escolha" id="escolha">
<option value="paguemenos"> PAGUE MENOS</option>
</select>
<br><br>
<input type="submit" value="Enviar" style="width: 200px; height: 40px;">
</form>
<?php
//error_reporting(0);
echo "<center>";

function getStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

$link1 = $_POST["link1"];
$link2 = $_POST["link2"];
$link3 = $_POST["link3"];
$link4 = $_POST["link4"];
$link5 = $_POST["link5"];
$link6 = $_POST["link6"];
$link7 = $_POST["link7"];
$link8 = $_POST["link8"];
$link9 = $_POST["link9"];
$link10 = $_POST["link10"];
$link11 = $_POST["link11"];
$link12 = $_POST["link12"];
$link13 = $_POST["link13"];
$link14 = $_POST["link14"];
$link15 = $_POST["link15"];
$link16 = $_POST["link16"];
$link17 = $_POST["link17"];
$link18 = $_POST["link18"];
$link19 = $_POST["link19"];
$link20 = $_POST["link20"];
$link21 = $_POST["link21"];
$link22 = $_POST["link22"];
$link23 = $_POST["link23"];
$link24 = $_POST["link24"];
$link25 = $_POST["link25"];
$link26 = $_POST["link26"];
$link27 = $_POST["link27"];
$link28 = $_POST["link28"];

/* PRIMEIRA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 1 */

$linkValidado1 = filter_var($link1, FILTER_VALIDATE_URL);
if(!$linkValidado1){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado1) <= 10 or strlen($linkValidado1) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 350, por favor<br>";
    exit;
}else{
    //--o curl da MAGALU
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$linkValidado1.'');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'content-type: text/html; charset=utf-8',
    'Referer: https://www.magazineluiza.com.br',
    'User-Agent: user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0'
    ));
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_REFERER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    $post = curl_exec($ch);
    curl_close($ch);

    //--as partes puxadas com a getStr DA MAGALU
    $nomeProd1 = getStr($post, '<h1 data-testid="heading-product-title" font-size="28px" font-weight="500" color="#404040" class="sc-kpDqfm gXZPqL">','</h1>');
    $valorProd1 = getStr($post, '<p data-testid="price-value" class="sc-kpDqfm eCPtRw sc-hoLEA kXWuGr" color="#404040">','</p>');
    $fotoProd1 = getstr($post, '"image":"','","');

    //--exibindo os detalhes
    echo $nomeProd1 . "<br>" . $valorProd1 . "<br>";
    echo '<img src="'.$fotoProd1.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado1\" target=\"_blank\">$linkValidado1</a>";
}

echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 2*/

$linkValidado2 = filter_var($link2, FILTER_VALIDATE_URL);
if(!$linkValidado2){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado2) <= 10 or strlen($linkValidado2) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 350, por favor<br>";
    exit;
}else{
    //--o curl da MAGALU
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$linkValidado2.'');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'content-type: text/html; charset=utf-8',
    'Referer: https://www.magazineluiza.com.br',
    'User-Agent: user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0'
    ));
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_REFERER, 0);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '');
    $post = curl_exec($ch);
    curl_close($ch);

    //--as partes puxadas com a getStr DA MAGALU
    $nomeProd2 = getStr($post, '<h1 data-testid="heading-product-title" font-size="28px" font-weight="500" color="#404040" class="sc-kpDqfm gXZPqL">','</h1>');
    $valorProd2 = getStr($post, '<p data-testid="price-value" class="sc-kpDqfm eCPtRw sc-hoLEA kXWuGr" color="#404040">','</p>');
    $fotoProd2 = getstr($post, '"image":"','","');

    //--exibindo os detalhes
    echo $nomeProd2 . "<br>" . $valorProd2 . "<br>";
    echo '<img src="'.$fotoProd2.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado2\" target=\"_blank\">$linkValidado2</a>";
}

echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 3*/

$linkValidado3 = filter_var($link3, FILTER_VALIDATE_URL);
if(!$linkValidado3){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado3) <= 10 or strlen($linkValidado3) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl AMAZON
    $curl = curl_init($linkValidado3);
    curl_setopt($curl, CURLOPT_URL, $linkValidado3);
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
    $nomeProd3 = getStr($resp, '<span id="productTitle" class="a-size-large product-title-word-break">','</span>');
    $fotoProd3 = getStr($resp, '"hiRes":"','"');
    $valorProd3 = getStr($resp, '<span class="a-offscreen">','</span>');

    //--exibindo os detalhes
    echo $nomeProd3 . "<br>" . $valorProd3 . "<br>";
    echo '<img src="'.$fotoProd3.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado3\" target=\"_blank\">$linkValidado3</a>";
}

echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 4*/

$linkValidado4 = filter_var($link4, FILTER_VALIDATE_URL);
if(!$linkValidado4){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado4) <= 10 or strlen($linkValidado4) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl KABUM
    $curl = curl_init($linkValidado4);
    curl_setopt($curl, CURLOPT_URL, $linkValidado4);
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
    $nomeProd4 = getStr($resp, '<h1 class="sc-89bddf0f-6 dDYTAu">','</h1>');
    $fotoProd4 = getStr($resp, '\"g\":[\"','\",');
    $valorProd4 = getStr($resp, '<h4 class="sc-d6a30908-1 WlsMM finalPrice">','</h4>');

    //--exibindo os detalhes
    echo $nomeProd4 . "<br>" . $valorProd4 . "<br>";
    echo '<img src="'.$fotoProd4.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado4\" target=\"_blank\">$linkValidado4</a>";
}

echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 5*/

$linkValidado5 = filter_var($link5, FILTER_VALIDATE_URL);
if(!$linkValidado5){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado5) <= 10 or strlen($linkValidado5) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl KABUM
    $curl = curl_init($linkValidado5);
    curl_setopt($curl, CURLOPT_URL, $linkValidado5);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: br.shein.com",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd5 = getStr($resp, '<h1 class="product-intro__head-name" tabindex="0">','</h1>');
    $fotoProd5 = getStr($resp, '<div class="crop-image-container" data-before-crop-src="//','"');
    $valorProd5 = getStr($resp, '<span>','</span>');

    //--exibindo os detalhes
    echo $nomeProd5 . "<br>" . $valorProd5 . "<br>";
    echo '<img src="https://'.$fotoProd5.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado5\" target=\"_blank\">$linkValidado5</a>";
}

echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 6*/

$linkValidado6 = filter_var($link6, FILTER_VALIDATE_URL);
if(!$linkValidado6){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado6) <= 10 or strlen($linkValidado6) >= 1750){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl ALIEXPRESS
    $curl = curl_init($linkValidado6);
    curl_setopt($curl, CURLOPT_URL, $linkValidado6);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: pt.aliexpress.com",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd6 = getStr($resp, '"subject":"','",');
    $fotoProd6 = getStr($resp, '<meta property="og:image" content="','"/>');
    $valorProd6 = getStr($resp, 'formatedAmount\":\"','\"');
    
    //--exibindo os detalhes
    echo $nomeProd6 . "<br>" . $valorProd6 . "<br>";
    echo '<img src="'.$fotoProd6.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado6\" target=\"_blank\">$linkValidado6</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 7*/

$linkValidado7 = filter_var($link7, FILTER_VALIDATE_URL);
if(!$linkValidado7){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado7) <= 10 or strlen($linkValidado7) >= 950){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl MERCADO LIVRE
    $curl = curl_init($linkValidado7);
    curl_setopt($curl, CURLOPT_URL, $linkValidado7);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.mercadolivre.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd7 = getStr($resp, '<h1 class="ui-pdp-title">','</h1>');
    $fotoProd7 = getStr($resp, '<img data-zoom="','"');
    $valorProd7 = getStr($resp, 'R$','" data-head-react');

    if (file_exists(getcwd() . '/cookie.txt')) {
        unlink(getcwd() . '/cookie.txt');
    }

    //--exibindo os detalhes
    echo $nomeProd7 . "<br>R$ " . $valorProd7 . "<br>";
    echo '<img src="'.$fotoProd7.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado7\" target=\"_blank\">$linkValidado7</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 8*/

$linkValidado8 = filter_var($link8, FILTER_VALIDATE_URL);
if(!$linkValidado8){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado8) <= 10 or strlen($linkValidado8) >= 550){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl NAGEM
    $curl = curl_init($linkValidado8);
    curl_setopt($curl, CURLOPT_URL, $linkValidado8);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.nagem.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr
    $nomeProd8 = getStr($resp, '<h1 class="produto-descricao">','<small>');
$fotoProd8 = getStr($resp, '<div class="active carousel-item" data-slide-number="0">
                                                        <img src="','" class="img-fluid d-block w-100 zoom">');
                                                        
$valorProd8 = getStr($resp, '<span class="precoPOR-detalhe tit-26rem precoMaior">','</span>');

    //--exibindo os detalhes
    echo $nomeProd8 . "<br>" . $valorProd8 . "<br>";
    echo '<img src="https:'.$fotoProd8.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado8\" target=\"_blank\">$linkValidado8</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 9*/

$linkValidado9 = filter_var($link9, FILTER_VALIDATE_URL);
if(!$linkValidado9){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado9) <= 10 or strlen($linkValidado9) >= 950){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl AMERICANAS
    $curl = curl_init($linkValidado9);
    curl_setopt($curl, CURLOPT_URL, $linkValidado9);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.americanas.com.br",
        "Content-Type: text/html; charset=utf-8",
        "https://www.americanas.com.br/",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd9 = getStr($resp, '<h1 class="product-title__Title-sc-15fh86r-0 iYwPCy">','</h1>');
    $fotoProd9 = getStr($resp, '#primaryimage","url":"','","caption":');
    $valorProd9 = getStr($resp, '<div class="styles__PriceText-sc-1o94vuj-0 kbIkrl priceSales">','</div>');

    //--exibindo os detalhes
    echo $nomeProd9 . "<br>" . $valorProd9 . "<br>";
    echo '<img src="'.$fotoProd9.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; echo "<a href=\"$linkValidado9\" target=\"_blank\">$linkValidado9</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 10*/

$linkValidado10 = filter_var($link10, FILTER_VALIDATE_URL);
if(!$linkValidado10){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado10) <= 10 or strlen($linkValidado10) >= 950){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl CASA BAHIA
    $curl = curl_init($linkValidado10);
    curl_setopt($curl, CURLOPT_URL, $linkValidado10);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.casasbahia.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd10 = getStr($resp, 'aria-label="Comprar ','"');
    $fotoProd10 = getStr($resp, 'rel="preload" as="image" href="','"/');
    $valorProd10 = getStr($resp, '<span class="product-price-value" id="product-price" data-testid="product-price-value">','</span>');

    //--exibindo os detalhes
    echo $nomeProd10 . "<br>" . $valorProd10 . "<br>";
    echo '<img src="'.$fotoProd10.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado10\" target=\"_blank\">$linkValidado10</a>";
}


echo "<br><hr><br>";

/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 11*/

$linkValidado11 = filter_var($link11, FILTER_VALIDATE_URL);
if(!$linkValidado11){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado11) <= 10 or strlen($linkValidado11) >= 950){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl CASA BAHIA
    $curl = curl_init($linkValidado11);
    curl_setopt($curl, CURLOPT_URL, $linkValidado11);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.shoptime.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd11 = getStr($resp, '<h1 class="src__Title-sc-79cth1-0 ilzqUG">','</h1>');
    $fotoProd11 = getStr($resp, '#primaryimage","url":"','",');
    $valorProd11 = getStr($resp, '<div class="src__BestPrice-sc-17hp6jc-5 iyyimP priceSales">','</div>');

    //--exibindo os detalhes
    echo $nomeProd11 . "<br>" . $valorProd11 . "<br>";
    echo '<img src="'.$fotoProd11.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado11\" target=\"_blank\">$linkValidado11</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 12*/

$linkValidado12 = filter_var($link12, FILTER_VALIDATE_URL);
if(!$linkValidado12){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado12) <= 10 or strlen($linkValidado12) >= 990){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl SUBMARINO
    $curl = curl_init($linkValidado12);
    curl_setopt($curl, CURLOPT_URL, $linkValidado12);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.submarino.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd12 = getStr($resp, '<h1 class="src__Title-sc-1xq3hsd-0 eEEsym">','</h1>');
    $nomeProd12 = ucfirst($nomeProd12);
    $fotoProd12 = getStr($resp, 'Compartilhar</p></div></div><div class="src__Container-sc-138zmhp-0 lwzyO"><div class="src__WrapperItem-sc-138zmhp-1 cgVRkG"><div class="image__WrapperImages-sc-oakrdw-1 kOCIiH"><div class="src__Wrapper-sc-xr9q25-1 ebFfaU"><picture class="src__Picture-sc-xr9q25-2 jAziSf"><img loading="lazy" src="','"');
    $valorProd12 = getStr($resp, '<div class="src__BestPrice-sc-1jnodg3-5 ykHPU priceSales">','</div>');

    //--exibindo os detalhes
    echo $nomeProd12 . "<br>" . $valorProd12 . "<br>";
    echo '<img src="'.$fotoProd12.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado12\" target=\"_blank\">$linkValidado12</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 13*/

$linkValidado13 = filter_var($link13, FILTER_VALIDATE_URL);
if(!$linkValidado13){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado13) <= 10 or strlen($linkValidado13) >= 550){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl EXTRA
    $curl = curl_init($linkValidado13);
    curl_setopt($curl, CURLOPT_URL, $linkValidado13);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.extra.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd13 = getStr($resp, '<h1 class=" css-rfo7gs eym5xli0">','</h1>');
    $fotoProd13 = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="','"');
    $valorProd13 = getStr($resp, '<span class="product-price-value" id="product-price" data-testid="product-price-value">','</span>');

    //--exibindo os detalhes
    echo $nomeProd13 . "<br>" . $valorProd13 . "<br>";
    echo '<img src="'.$fotoProd13.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado13\" target=\"_blank\">$linkValidado13</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 14*/

$linkValidado14 = filter_var($link14, FILTER_VALIDATE_URL);
if(!$linkValidado14){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado14) <= 10 or strlen($linkValidado14) >= 550){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl PONTO FRIO
    $curl = curl_init($linkValidado14);
    curl_setopt($curl, CURLOPT_URL, $linkValidado14);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.pontofrio.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd14 = getStr($resp, '<h1 class=" css-k7ata1 eym5xli0">','</h1>');
    $fotoProd14 = getStr($resp, 'sizes="16x16"/><link rel="preload" as="image" href="','"');
    $valorProd14 = getStr($resp, '<span class="product-price-value" id="product-price" data-testid="product-price-value">','</span>');

    //--exibindo os detalhes
    echo $nomeProd14 . "<br>" . $valorProd14 . "<br>";
    echo '<img src="'.$fotoProd14.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado14\" target=\"_blank\">$linkValidado14</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 15*/

$linkValidado15 = filter_var($link15, FILTER_VALIDATE_URL);
if(!$linkValidado15){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado15) <= 10 or strlen($linkValidado15) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl CARREFOUR
    $curl = curl_init($linkValidado15);
    curl_setopt($curl, CURLOPT_URL, $linkValidado15);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.carrefour.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd15 = getStr($resp, '<span class="vtex-store-components-3-x-productBrand ">','</span>');
    $fotoProd15 = getStr($resp, 'rel="preload" as="image" href="','"');
    $valorProd15 = getStr($resp, 'property="product:price:amount" content="','"/>');
    $valor_formatado = str_replace('.', ',', $valorProd15);

    //--exibindo os detalhes
    echo $nomeProd15 . "<br>R$" . $valor_formatado . "<br>";
    echo '<img src="'.$fotoProd15.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>"; 
    echo "<a href=\"$linkValidado15\" target=\"_blank\">$linkValidado15</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 16*/

$linkValidado16 = filter_var($link16, FILTER_VALIDATE_URL);
if(!$linkValidado16){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado16) <= 10 or strlen($linkValidado16) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl HAVAN
    $curl = curl_init($linkValidado16);
    curl_setopt($curl, CURLOPT_URL, $linkValidado16);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.havan.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd16 = getStr($resp, '<span class="base" data-ui-id="page-title-wrapper" itemprop="name">','</span>');
    $fotoProd16 = getStr($resp, '<meta property="og:image"','" />');
    $foto_formatada = str_replace('content="', '', $fotoProd16);
    $valorProd16 = getStr($resp, '<span class="price">','</span>');

    //--exibindo os detalhes
    echo $nomeProd16 . "<br>" . $valorProd16 . "<br>";
    echo '<img src="'.$foto_formatada.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado16\" target=\"_blank\">$linkValidado16</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 17*/

$linkValidado17 = filter_var($link17, FILTER_VALIDATE_URL);
if(!$linkValidado17){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado17) <= 10 or strlen($linkValidado17) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl NETSHOES
    $curl = curl_init($linkValidado17);
    curl_setopt($curl, CURLOPT_URL, $linkValidado17);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.netshoes.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd17 = getStr($resp, '/><title>','| Netshoes</title>');
    $fotoProd17 = getStr($resp, '<meta property="og:image" content="','"');
    $valorProd17 = getStr($resp, '</span><strong>','</strong>');

    //--exibindo os detalhes
    echo $nomeProd17 . "<br>" . $valorProd17 . "<br>";
    echo '<img src="https:'.$fotoProd17.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado17\" target=\"_blank\">$linkValidado17</a>";
}


echo "<br><hr><br>";



/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 18*/

$linkValidado18 = filter_var($link18, FILTER_VALIDATE_URL);
if(!$linkValidado18){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado18) <= 10 or strlen($linkValidado18) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl NETSHOES
    $curl = curl_init($linkValidado18);
    curl_setopt($curl, CURLOPT_URL, $linkValidado18);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.nike.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd18 = getStr($resp, '"/><title>','</title>');
    $fotoProd18 = getStr($resp, 'https://imgnike-a.akamaihd.net','"/');
    $valorProd18 = getStr($resp, 'class="Typographystyled__StyledHeading-sc-1h4c8w0-1 guEzUB">','</span>');

    //--exibindo os detalhes
    echo $nomeProd18 . "<br>" . $valorProd18 . "<br>";
    echo '<img src="https://imgnike-a.akamaihd.net'.$fotoProd18.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado18\" target=\"_blank\">$linkValidado18</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 19*/

$linkValidado19 = filter_var($link19, FILTER_VALIDATE_URL);
if(!$linkValidado19){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado19) <= 10 or strlen($linkValidado19) >= 450){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl NETSHOES
    $curl = curl_init($linkValidado19);
    curl_setopt($curl, CURLOPT_URL, $linkValidado19);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.adidas.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd19 = getStr($resp, 'name="keywords" content="','"/');
    $fotoProd19 = getStr($resp, '"image":["','",');
    $valorProd19 = getStr($resp, '<div class="gl-price-item gl-price-item--sale notranslate">','</div>');
    $valorProd_19 = getStr($resp, '<div class="gl-price-item notranslate">','</div>');

    //--exibindo os detalhes
    echo $nomeProd19 . "<br>" . $valorProd19 . $valorProd_19 . "<br>";
    echo '<img src="'.$fotoProd19.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado19\" target=\"_blank\">$linkValidado19</a>";
}


echo "<br><hr><br>";



/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 20*/

$linkValidado20 = filter_var($link20, FILTER_VALIDATE_URL);
if(!$linkValidado20){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado20) <= 10 or strlen($linkValidado20) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl CENTAURO
    $curl = curl_init($linkValidado20);
    curl_setopt($curl, CURLOPT_URL, $linkValidado20);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.centauro.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd20 = getStr($resp, '</script><title>',' | Centauro</title>');
    $fotoProd20 = getStr($resp, 'src="https://imgcentauro','"/');
    //$foto_formatada = str_replace('content="', '', $fotoProd);
    $valorProd20 = getStr($resp, '"priceFormatted":"','"');

    //--exibindo os detalhes
    echo $nomeProd20 . "<br>" . $valorProd20 . "<br>";
    echo '<img src="https://imgcentauro'.$fotoProd20.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado20\" target=\"_blank\">$linkValidado20</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 21*/

$linkValidado21 = filter_var($link21, FILTER_VALIDATE_URL);
if(!$linkValidado21){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado21) <= 10 or strlen($linkValidado21) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl DAFITI
    $curl = curl_init($linkValidado21);
    curl_setopt($curl, CURLOPT_URL, $linkValidado21);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.dafiti.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd21 = getStr($resp, '<title>',' - Compre Agora | Dafiti Brasil');
    $fotoProd21 = getStr($resp, 'data-img-zoom="','"');
    $valorProd21 = getStr($resp, '<span class="catalog-detail-price-value" data-field="finalPrice" itemprop="price" content="','">');
    $valor_formatado1 = str_replace('.', ',', $valorProd21);

    //--exibindo os detalhes
    echo $nomeProd21 . "<br>R$" . $valor_formatado1 . "<br>";
    echo '<img src="'.$fotoProd21.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado21\" target=\"_blank\">$linkValidado21</a>";
}


echo "<br><hr><br>";



/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 22*/

$linkValidado22 = filter_var($link22, FILTER_VALIDATE_URL);
if(!$linkValidado22){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado22) <= 10 or strlen($linkValidado22) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl DAFITI
    $curl = curl_init($linkValidado22);
    curl_setopt($curl, CURLOPT_URL, $linkValidado22);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.lojasrenner.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd22 = getStr($resp, 'type":"Product","name":"','",');
    $fotoProd22 = getStr($resp, 'as="image" href="','"');
    $valorProd22 = getStr($resp, 'listPriceFormatted":"','"');

    //--exibindo os detalhes
    echo $nomeProd22 . "<br>" . $valorProd22 . "<br>";
    echo '<img src="https:'.$fotoProd22.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado22\" target=\"_blank\">$linkValidado22</a>";
}


echo "<br><hr><br>";




/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 23*/

$linkValidado23 = filter_var($link23, FILTER_VALIDATE_URL);
if(!$linkValidado23){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado23) <= 10 or strlen($linkValidado23) >= 650){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado23);
    curl_setopt($curl, CURLOPT_URL, $linkValidado23);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd23 = getStr($resp, '<meta property="og:title" content="','"');
    $fotoProd23 = getStr($resp, '"og:image" content="','"');
    $valorProd23 = getStr($resp, 'priceValue&quot;:&quot;','&');

    //--exibindo os detalhes
    echo $nomeProd23 . "<br>" . $valorProd23 . "<br>";
    echo '<img src="'.$fotoProd23.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado23\" target=\"_blank\">$linkValidado23</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 24*/

$linkValidado24 = filter_var($link24, FILTER_VALIDATE_URL);
if(!$linkValidado24){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado24) <= 10 or strlen($linkValidado24) >= 950){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado24);
    curl_setopt($curl, CURLOPT_URL, $linkValidado24);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.elo7.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd24 = getStr($resp, '<title>','</title>');
    $fotoProd24 = getStr($resp, "data-zoom='","'");
    $valorProd24 = getStr($resp, "<meta name='twitter:data1' content='","'");

    //--exibindo os detalhes
    echo $nomeProd24 . "<br>" . $valorProd24 . "<br>";
    echo '<img src="https:'.$fotoProd24.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado24\" target=\"_blank\">$linkValidado24</a>";
}


echo "<br><hr><br>";


/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 25*/

$linkValidado25 = filter_var($link25, FILTER_VALIDATE_URL);
if(!$linkValidado25){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado25) <= 10 or strlen($linkValidado25) >= 750){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado25);
    curl_setopt($curl, CURLOPT_URL, $linkValidado25);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.madeiramadeira.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd25 = getStr($resp, '<h1 class="cav--c-fpAEqe">','</h1>');
    $fotoProd25 = getStr($resp, '<meta property="og:image" content="','"/');
    $valorProd25 = getStr($resp, '<span class="cav--c-gNPphv cav--c-gNPphv-iELazp-textStyle-h3Semibold cav--c-gNPphv-hHqInm-size-h3">','</span>');

    //--exibindo os detalhes
    echo $nomeProd25 . "<br>" . $valorProd25 . "<br>";
    echo '<img src="'.$fotoProd25.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado25\" target=\"_blank\">$linkValidado25</a>";
}


echo "<br><hr><br>";



/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 26*/

$linkValidado26 = filter_var($link26, FILTER_VALIDATE_URL);
if(!$linkValidado26){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado26) <= 10 or strlen($linkValidado26) >= 750){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado26);
    curl_setopt($curl, CURLOPT_URL, $linkValidado26);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.mobly.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd26 = getStr($resp, '<title>','</title>');
    $fotoProd26 = getStr($resp, 'data-image-big="','">');
    $valorProd26 = getStr($resp, '"lowestPriceAvailable":',',"');
    $valor_formatado26 = str_replace('.', ',', $valorProd26);

    //--exibindo os detalhes
    echo $nomeProd26 . "<br>R$" . $valor_formatado26 . "<br>";
    echo '<img src="https:'.$fotoProd26.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado26\" target=\"_blank\">$linkValidado26</a>";
}


echo "<br><hr><br>";




/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 27*/

$linkValidado27 = filter_var($link27, FILTER_VALIDATE_URL);
if(!$linkValidado27){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado27) <= 10 or strlen($linkValidado27) >= 750){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado27);
    curl_setopt($curl, CURLOPT_URL, $linkValidado27);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.drogaraia.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd27 = getStr($resp, '<title>',' | Droga Raia</title>');
    $fotoProd27 = getStr($resp, '<img src="https://img.drogaraia.com.br','?');
    $valorProd27 = getStr($resp, '<span class="ProductPricestyles__Price-sc-1fizsje-2 dngqVh">','</span>');

    //--exibindo os detalhes
    echo $nomeProd27 . "<br>" . $valorProd27 . "<br>";
    echo '<img src="https://img.drogaraia.com.br'.$fotoProd27.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado27\" target=\"_blank\">$linkValidado27</a>";
}


echo "<br><hr><br>";



/* SEGUNDA VALIDAÇÃO CASO BURLE O HTML E ANTISPAM / LINK 28*/

$linkValidado28 = filter_var($link28, FILTER_VALIDATE_URL);
if(!$linkValidado28){
    echo "informe um link meu nobre<br>";
}elseif(strlen($linkValidado28) <= 10 or strlen($linkValidado28) >= 750){
    echo "Atenção, informe um link maior que 10 caracteres e menor que 650, por favor<br>";
    exit;
}else{
    //--o curl OLX
    $curl = curl_init($linkValidado28);
    curl_setopt($curl, CURLOPT_URL, $linkValidado28);
    curl_setopt($curl, CURLOPT_ENCODING, "gzip");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Host: www.paguemenos.com.br",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($curl);

    //--as partes puxadas com a getStr

    $nomeProd28 = getStr($resp, '<title data-react-helmet="true">','</title>');
    $fotoProd28 = getStr($resp, 'as="image" href="','"');
    //$foto_formatada = str_replace('content="', '', $fotoProd);
    $valorProd28 = getStr($resp, '<span class="vtex-store-components-3-x-currencyInteger">','</span>');
    $valorProd288 = getStr($resp, '<span class="vtex-store-components-3-x-currencyFraction">','</span>');

    //--exibindo os detalhes
    echo $nomeProd28 . "<br>R$ " . $valorProd28 . ",". $valorProd288 . "<br>";
    echo '<img src="'.$fotoProd28.'" style="border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 180px; height: 180px;" />';
    echo "<br>";
    echo "<font style='color:#404040;'>"."Link do produto: "."</font>";
    echo "<a href=\"$linkValidado28\" target=\"_blank\">$linkValidado28</a>";
}


echo "<br><hr><br>";

?>