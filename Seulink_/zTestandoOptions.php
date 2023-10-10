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
        /* Estilo do select personalizado */
        .custom-select {
            position: relative;
            width: 250px;
            height: 50px;
        }

        .select-styled {
            display: flex;
            align-items: center; /* Alinhar o conteúdo verticalmente */
            height: 100%; /* Definir a altura igual à altura do select */
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
        }

        .select-styled img {
            margin-right: 10px; /* Espaço entre a imagem e o texto */
            max-width: 30px; /* Largura máxima da imagem */
            max-height: 30px; /* Altura máxima da imagem */
        }

        .select-styled:after {
            content: "\25BC"; /* Triângulo para baixo */
            margin-left: auto; /* Mover o triângulo para a direita */
        }

        .select-options {
            display: none;
            position: absolute;
            width: 100%; /* Definir a largura igual à largura do select */
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 5px 5px;
            z-index: 1;
        }

        .select-options ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .select-options li {
            padding: 10px 15px;
            background-color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .select-options li img {
            margin-right: 10px; /* Espaço entre a imagem e o texto */
            max-width: 30px; /* Largura máxima da imagem */
            max-height: 30px; /* Altura máxima da imagem */
        }

        .select-options li:hover {
            background-color: #f0f0f0;
        }    





        
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


            .botao-adicionar {
                background: radial-gradient(50% 50% at 50% 50%, #2DC6C8 0%, #2DFBA4 100%); /* Cor de fundo em RGB */
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
                    max-width: 780px;
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
                                <div class="container">

                                    <img src="logooo1.png" alt="Seulink">
                                    <h4>⇵ Escolha o website: </h4>
                                    <form action="" method="post">
                                        <div id="campos">
                                            <div>
                                                

                                                <div class="custom-select">
                                                    <div class="select-styled"><img src="icones/amazon.png" alt="Imagem 1"> Selecione uma opção</div>
                                                    <div class="select-options">
                                                        <ul>
                                                            <li data-value="amazon"><img src="icones/amazon.png" alt="Imagem 1"> Opção 1</li>
                                                            <li data-value="kabum"><img src="icones/kabum.png" alt="Imagem 2"> Opção 2</li>
                                                            <li data-value="magalu"><img src="icones/magalu.png" alt="Imagem 3"> Opção 3</li>
                                                        </ul>
                                                    </div>
                                                </div>


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




                                <script>
                                   
// Função para abrir/fechar as opções do select personalizado
function toggleOptions(selectStyled, selectOptions) {
            if (selectOptions.style.display === "block") {
                selectOptions.style.display = "none";
            } else {
                selectOptions.style.display = "block";
            }
        }

        // Função para selecionar uma opção
        function selectOption(selectStyled, selectOptions, selectedValue) {
            selectStyled.innerHTML = selectOptions.querySelector(`[data-value="${selectedValue}"]`).innerHTML;
            selectOptions.style.display = "none";
            // Você pode fazer algo com o valor selecionado aqui
            console.log("Opção selecionada: " + selectedValue);
        }

        // Inicializar eventos para o select personalizado
        var selectStyled = document.querySelector(".select-styled");
        var selectOptions = document.querySelector(".select-options");
        var options = document.querySelectorAll(".select-options li");

        selectStyled.addEventListener("click", function () {
            toggleOptions(selectStyled, selectOptions);
        });

        options.forEach(function (option) {
            option.addEventListener("click", function () {
                var selectedValue = this.getAttribute("data-value");
                selectOption(selectStyled, selectOptions, selectedValue);
            });
        });

        // Função para adicionar um novo campo
        function adicionarCampo() {
            var divPai = document.getElementById("campos");
            var novoCampo = document.createElement("div");

            novoCampo.innerHTML = `
                <div class="custom-select">
                    <div class="select-styled">
                        <img src="icones/amazon.png" alt="Imagem 1"> Selecione uma opção
                    </div>
                    <div class="select-options">
                        <ul>
                            <li data-value="amazon">
                                <img src="icones/amazon.png" alt="Imagem 1"> Opção 1
                            </li>
                            <li data-value="kabum">
                                <img src="icones/kabum.png" alt="Imagem 2"> Opção 2
                            </li>
                            <li data-value="magalu">
                                <img src="icones/magalu.png" alt="Imagem 3"> Opção 3
                            </li>
                        </ul>
                    </div>
                </div>
                <h6><strong>Copie e cole</strong> o URL abaixo ↴ </h6>
                <input type="url" name="link[]">
                <button type="button" class="botao-remover" onclick="removerCampo(this)">- Remover</button>
            `;

            divPai.appendChild(novoCampo);

            // Inicializar eventos para o novo campo
            var novoSelectStyled = novoCampo.querySelector(".select-styled");
            var novoSelectOptions = novoCampo.querySelector(".select-options");
            var novoOptions = novoCampo.querySelectorAll(".select-options li");

            novoSelectStyled.addEventListener("click", function () {
                toggleOptions(novoSelectStyled, novoSelectOptions);
            });

            novoOptions.forEach(function (option) {
                option.addEventListener("click", function () {
                    var selectedValue = this.getAttribute("data-value");
                    selectOption(novoSelectStyled, novoSelectOptions, selectedValue);
                });
            });
        }

        // Função para remover um campo
        function removerCampo(botao) {
            var divPai = document.getElementById("campos");
            var campo = botao.parentNode;
            divPai.removeChild(campo);
        }
                                </script>
                                
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
        //--cURL
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
        // Para fins de depuração apenas!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $resp = curl_exec($curl);

        //--Extrair informações
        $titulo = "";
        $preco = "";
        $imagem = "";

        if ($escolha == "amazon") {
            $titulo = getStr($resp, 'span id="productTitle" class="a-size-large product-title-word-break">', '</span');
            $titulo_formatado = strip_tags($titulo);

            $preco = getStr($resp, 'span class="a-offscreen">', '</span');
            $preco_formatado = strip_tags($preco);

            $imagem = getStr($resp, 'hiRes":"https://', '"');
            $foto_formatada = str_replace('hiRes":"', '', $imagem);
        } elseif ($escolha == "kabum") {
            $titulo = getStr($resp, '"name": "', '",');
            $titulo_formatado = strip_tags($titulo);

            $preco = getStr($resp, 'h4 class="sc-d6a30908-1 WlsMM finalPrice">', '</h4');
            $preco_formatado = strip_tags($preco);

            $imagem = getStr($resp, '"g":["', '",');
            $foto_formatada = str_replace('"g":["', '', $imagem);
        }

        //--Formatar resposta
        $response1 .= "<p style='font-size: 20px; color: #ffffff;'>Produto na <span style='color: #E8B35E;'><strong>$escolha</span></strong></p>";

        $imgStyle = 'border: 3px solid #ddd; border-radius: 30px; box-shadow: 0 0 5px; width: 250px; height: 180px;';
        $response1 .= "<img src='$foto_formatada' alt='Imagem do Produto' style='$imgStyle'><br>";

        $response1 .= "<br><p>Titulo: <strong>$titulo_formatado</strong></p>";

        $response1 .= "<p>Preço: <strong>$preco_formatado</strong></p><br>";

        $response1 .= ">Link do produto: <a href=\"$linkValidado\" target=\"_blank\">$linkValidado</a><br><hr><br>";
    }
}

?>

<!-- Aqui você pode adicionar a parte HTML em que deseja exibir a resposta -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Seus cabeçalhos e estilos CSS aqui -->
</head>
<body>
    <div class="topbar"></div>
    <div class="blue-line"></div>
    <!-- Conteúdo do seu formulário e exibição de resposta aqui -->
    <div class="content">
        <form action="" method="post">
            <!-- Seu formulário aqui -->
            <button type="submit" style="width: 200px; height: 40px;" name="gerar_link">Gerar link</button>
        </form>
        <!-- Exibição de resposta aqui -->
        <?php echo $response1; ?>
    </div>
    <!-- Outro conteúdo HTML aqui -->
</body>
</html>