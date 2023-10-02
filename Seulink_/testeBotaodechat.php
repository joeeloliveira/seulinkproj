<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos CSS aqui */
        /* ... (o mesmo CSS do seu exemplo) ... */
    </style>
</head>
<body>

    <!-- Ícone do chat -->
    <div id="chat-icon">
        <img src="chat-icon.png" alt="Chat Icon" style="width: 70px; height: 70px; position: fixed; bottom: 10px; right: 10px;">
    </div>

    <!-- Janela de chat -->
    <div id="chat-window">
        <div id="chat-header">
            <p style="margin-left: 6px; color: #f6f6f6; font-size: 21px;">◎Entre em contato </p>
            <button style="margin-right: 8px; color: #f6f6f6; font-size: 11px;" id="close-chat">x fechar</button>
        </div>
        <div id="chat-messages">
            <!-- Mensagens do chat apareceriam aqui -->
        </div>
        <div id="chat-input">
            <select id="reason-select">
                <option value="problemas-tecnicos">Problemas Técnicos</option>
                <option value="contato">Contato</option>
            </select>
            <input type="email" id="email-input" placeholder="Digite seu email (limite de 80 caracteres)...">
            <textarea id="message-input" placeholder="Digite sua mensagem (limite de 2000 caracteres)..."></textarea>
            <button id="send-message">Enviar</button>
        </div>
    </div>

    <script>
        // Abre a janela de chat quando o ícone é clicado
        document.getElementById('chat-icon').addEventListener('click', function () {
            document.getElementById('chat-window').style.display = 'block';
        });

        // Fecha a janela de chat quando o botão "Fechar" é clicado
        document.getElementById('close-chat').addEventListener('click', function () {
            document.getElementById('chat-window').style.display = 'none';
        });

        // Limita o número de caracteres no campo de email
        const emailInput = document.getElementById('email-input');
        emailInput.addEventListener('input', function () {
            if (this.value.length > 80) {
                this.value = this.value.slice(0, 80);
            }
        });

        // Limita o número de caracteres no campo de mensagem
        const messageInput = document.getElementById('message-input');
        messageInput.addEventListener('input', function () {
            if (this.value.length > 2000) {
                this.value = this.value.slice(0, 2000);
            }
        });
    </script>
</body>
</html>
