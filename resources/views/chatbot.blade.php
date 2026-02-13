<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triagem Online - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-dark: #2c4a52;
            --primary-blue: #4a90e2;
            --accent-green: #1f7b00;
            --bg-light: #f7fafc;
            --message-bot: #e8f4f8;
            --message-user: #4a90e2;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg-light);
        }

        .navbar {
            background-color: var(--primary-dark);
            padding: 1.2rem 0;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: white !important;
        }

        .chat-container {
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            overflow: hidden;
            height: calc(100vh - 200px);
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-blue) 100%);
            color: white;
            padding: 1.5rem 2rem;
        }

        .chat-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }

        .chat-header p {
            margin: 0.5rem 0 0 0;
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 2rem;
            background-color: #f8f9fa;
        }

        .message {
            display: flex;
            margin-bottom: 1.5rem;
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .message.bot {
            justify-content: flex-start;
        }

        .message.user {
            justify-content: flex-end;
        }

        .message-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .message.bot .message-avatar {
            background-color: var(--primary-blue);
            color: white;
            margin-right: 1rem;
        }

        .message.user .message-avatar {
            background-color: var(--accent-green);
            color: white;
            margin-left: 1rem;
            order: 2;
        }

        .message-content {
            max-width: 70%;
        }

        .message.bot .message-bubble {
            background-color: var(--message-bot);
            color: #2d3748;
            border-radius: 18px 18px 18px 4px;
            padding: 1rem 1.25rem;
        }

        .message.user .message-bubble {
            background-color: var(--message-user);
            color: white;
            border-radius: 18px 18px 4px 18px;
            padding: 1rem 1.25rem;
        }

        .message-time {
            font-size: 0.75rem;
            color: #a0aec0;
            margin-top: 0.25rem;
            padding: 0 0.5rem;
        }

        .typing-indicator {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            padding: 1rem 1.25rem;
        }

        .typing-indicator span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #a0aec0;
            animation: typing 1.4s infinite;
        }

        .typing-indicator span:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-indicator span:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typing {
            0%, 60%, 100% {
                transform: translateY(0);
            }
            30% {
                transform: translateY(-10px);
            }
        }

        .chat-options {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.75rem;
        }

        .option-btn {
            background-color: white;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .option-btn:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-2px);
        }

        .chat-input-area {
            padding: 1.5rem;
            background-color: white;
            border-top: 1px solid #e2e8f0;
        }

        .input-group {
            background-color: #f8f9fa;
            border-radius: 25px;
            padding: 0.5rem;
        }

        .chat-input {
            border: none;
            background: transparent;
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }

        .chat-input:focus {
            outline: none;
            box-shadow: none;
        }

        .btn-send {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-send:hover {
            background-color: #3a7bc8;
            transform: scale(1.05);
        }

        .btn-send:disabled {
            background-color: #cbd5e0;
            cursor: not-allowed;
        }

        .progress-bar-container {
            padding: 1rem 2rem;
            background-color: white;
        }

        .progress {
            height: 8px;
            border-radius: 10px;
            background-color: #e2e8f0;
        }

        .progress-bar {
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-green));
            border-radius: 10px;
        }

        .result-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-top: 1rem;
        }

        .result-card h4 {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .result-card .btn {
            background-color: white;
            color: #667eea;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .chat-container {
                margin: 0;
                border-radius: 0;
                height: 100vh;
            }

            .message-content {
                max-width: 85%;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
           <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo Equilíbrio" width="40" height="40" class="me-2">
            <span>Equilíbrio</span>
        </a>
            <a href="/" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left me-2"></i>Voltar
            </a>
        </div>
    </nav>

    <!-- Chat Container -->
    <div class="container-fluid">
        <div class="chat-container">
            <!-- Header -->
            <div class="chat-header">
                <h2><i class="bi bi-chat-heart me-2"></i>Triagem Psicológica</h2>
                <p>Responda algumas perguntas para identificarmos a melhor forma de ajudá-lo</p>
            </div>

            <!-- Progress Bar -->
            <div class="progress-bar-container">
                <div class="d-flex justify-content-between mb-2">
                    <small class="text-muted">Progresso da Triagem</small>
                    <small class="text-muted"><span id="progress-text">0%</span></small>
                </div>
                <div class="progress">
                    <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 0%"></div>
                </div>
            </div>

            <!-- Messages Area -->
            <div class="chat-messages" id="chat-messages">
                <!-- Messages will be added here dynamically -->
            </div>

            <!-- Input Area -->
            <div class="chat-input-area">
                <div class="input-group">
                    <input type="text" 
                           class="form-control chat-input" 
                           id="user-input" 
                           placeholder="Digite sua resposta..."
                           disabled>
                    <button class="btn-send" id="send-btn" disabled>
                        <i class="bi bi-send-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Estrutura de perguntas da triagem
        const questions = [
            {
                id: 1,
                text: "Olá! Bem-vindo ao Consultório Equilíbrio. 👋\n\nEstou aqui para ajudá-lo a encontrar o melhor atendimento para suas necessidades. Vamos começar?",
                type: "options",
                options: ["Sim, vamos começar!", "Preciso de mais informações"]
            },
            {
                id: 2,
                text: "Ótimo! Para começar, qual é o seu nome?",
                type: "text"
            },
            {
                id: 3,
                text: "Prazer em conhecê-lo, {name}! 😊\n\nQual é o principal motivo que o traz aqui hoje?",
                type: "options",
                options: [
                    "Ansiedade ou estresse",
                    "Tristeza ou depressão",
                    "Problemas de relacionamento",
                    "Desenvolvimento pessoal",
                    "Outro motivo"
                ]
            },
            {
                id: 4,
                text: "Entendo. Há quanto tempo você vem enfrentando essa situação?",
                type: "options",
                options: [
                    "Menos de 1 mês",
                    "1 a 3 meses",
                    "3 a 6 meses",
                    "Mais de 6 meses"
                ]
            },
            {
                id: 5,
                text: "Como você classificaria o impacto dessa situação na sua vida diária?",
                type: "options",
                options: [
                    "Leve - Consigo realizar minhas atividades normalmente",
                    "Moderado - Alguns aspectos da minha vida são afetados",
                    "Significativo - Tenho dificuldade em várias áreas",
                    "Severo - Está muito difícil funcionar no dia a dia"
                ]
            },
            {
                id: 6,
                text: "Você já fez acompanhamento psicológico antes?",
                type: "options",
                options: ["Sim", "Não"]
            },
            {
                id: 7,
                text: "Você prefere atendimento presencial ou online?",
                type: "options",
                options: [
                    "Presencial",
                    "Online (videoconsulta)",
                    "Tanto faz"
                ]
            }
        ];

        // Estado do chatbot
        let currentQuestion = 0;
        let userResponses = {};
        let userName = "";

        // Elementos DOM
        const messagesContainer = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');
        const progressBar = document.getElementById('progress-bar');
        const progressText = document.getElementById('progress-text');

        // Iniciar chatbot
        window.addEventListener('load', () => {
            setTimeout(() => {
                showBotMessage(questions[0]);
            }, 500);
        });

        // Mostrar mensagem do bot
        function showBotMessage(question) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message bot';
            
            let messageHTML = `
                <div class="message-avatar">
                    <i class="bi bi-robot"></i>
                </div>
                <div class="message-content">
                    <div class="message-bubble">
                        ${question.text.replace('{name}', userName)}
                    </div>
                    <div class="message-time">${getCurrentTime()}</div>
            `;

            if (question.type === 'options') {
                messageHTML += '<div class="chat-options">';
                question.options.forEach(option => {
                    messageHTML += `<button class="option-btn" onclick="selectOption('${option}')">${option}</button>`;
                });
                messageHTML += '</div>';
            }

            messageHTML += '</div>';
            messageDiv.innerHTML = messageHTML;

            messagesContainer.appendChild(messageDiv);
            scrollToBottom();

            if (question.type === 'text') {
                enableInput();
            }
        }

        // Mostrar indicador de digitação
        function showTypingIndicator() {
            const typingDiv = document.createElement('div');
            typingDiv.className = 'message bot';
            typingDiv.id = 'typing-indicator';
            typingDiv.innerHTML = `
                <div class="message-avatar">
                    <i class="bi bi-robot"></i>
                </div>
                <div class="message-content">
                    <div class="message-bubble">
                        <div class="typing-indicator">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            `;
            messagesContainer.appendChild(typingDiv);
            scrollToBottom();
        }

        function removeTypingIndicator() {
            const typing = document.getElementById('typing-indicator');
            if (typing) typing.remove();
        }

        // Selecionar opção
        function selectOption(option) {
            // Desabilitar todos os botões
            document.querySelectorAll('.option-btn').forEach(btn => {
                btn.disabled = true;
                btn.style.opacity = '0.5';
            });

            // Mostrar resposta do usuário
            showUserMessage(option);

            // Salvar resposta
            saveResponse(option);

            // Próxima pergunta
            nextQuestion();
        }

        // Mostrar mensagem do usuário
        function showUserMessage(text) {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message user';
            messageDiv.innerHTML = `
                <div class="message-content">
                    <div class="message-bubble">${text}</div>
                    <div class="message-time text-end">${getCurrentTime()}</div>
                </div>
                <div class="message-avatar">
                    <i class="bi bi-person-fill"></i>
                </div>
            `;
            messagesContainer.appendChild(messageDiv);
            scrollToBottom();
        }

        // Salvar resposta
        function saveResponse(response) {
            const question = questions[currentQuestion];
            userResponses[question.id] = response;

            // Salvar nome do usuário
            if (question.id === 2) {
                userName = response;
            }

            // Atualizar progresso
            updateProgress();
        }

        // Próxima pergunta
        function nextQuestion() {
            currentQuestion++;

            if (currentQuestion >= questions.length) {
                showResults();
                return;
            }

            showTypingIndicator();
            
            setTimeout(() => {
                removeTypingIndicator();
                showBotMessage(questions[currentQuestion]);
            }, 1500);
        }

        // Habilitar input de texto
        function enableInput() {
            userInput.disabled = false;
            sendBtn.disabled = false;
            userInput.focus();
        }

        // Desabilitar input
        function disableInput() {
            userInput.disabled = true;
            sendBtn.disabled = true;
        }

        // Enviar mensagem de texto
        sendBtn.addEventListener('click', sendMessage);
        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMessage();
        });

        function sendMessage() {
            const text = userInput.value.trim();
            if (!text) return;

            showUserMessage(text);
            saveResponse(text);
            userInput.value = '';
            disableInput();
            nextQuestion();
        }

        // Mostrar resultados
        function showResults() {
            disableInput();
            
            showTypingIndicator();
            
            setTimeout(() => {
                removeTypingIndicator();
                
                // Determinar especialidade sugerida
                const motivo = userResponses[3];
                let especialidade = "Psicologia Clínica";
                let especialidadeDetalhes = "";

                if (motivo?.includes("Ansiedade")) {
                    especialidade = "Terapia Cognitivo-Comportamental";
                    especialidadeDetalhes = "especializada em ansiedade e estresse";
                } else if (motivo?.includes("Tristeza")) {
                    especialidade = "Psicoterapia";
                    especialidadeDetalhes = "com foco em depressão e bem-estar emocional";
                } else if (motivo?.includes("relacionamento")) {
                    especialidade = "Terapia de Casal/Familiar";
                    especialidadeDetalhes = "especializada em relacionamentos";
                } else if (motivo?.includes("Desenvolvimento")) {
                    especialidade = "Coaching Psicológico";
                    especialidadeDetalhes = "focado em desenvolvimento pessoal";
                }

                const messageDiv = document.createElement('div');
                messageDiv.className = 'message bot';
                messageDiv.innerHTML = `
                    <div class="message-avatar">
                        <i class="bi bi-robot"></i>
                    </div>
                    <div class="message-content">
                        <div class="message-bubble">
                            <strong>Triagem concluída! ✨</strong><br><br>
                            Obrigado por compartilhar, ${userName}. Com base nas suas respostas, recomendamos:
                        </div>
                        <div class="result-card mt-3">
                            <h4><i class="bi bi-star-fill me-2"></i>${especialidade}</h4>
                            <p>${especialidadeDetalhes}</p>
                            <div class="mt-3">
                                <strong>Próximos passos:</strong><br>
                                • Escolha um de nossos profissionais especializados<br>
                                • Agende sua primeira consulta<br>
                                • Modalidade: ${userResponses[7]}
                            </div>
                            <button class="btn" onclick="window.location.href='/profissionais'">
                                Ver Profissionais Disponíveis
                            </button>
                        </div>
                    </div>
                `;
                messagesContainer.appendChild(messageDiv);
                scrollToBottom();

                // Salvar triagem no backend (simulado)
                console.log('Dados da triagem:', userResponses);
            }, 2000);
        }

        // Atualizar barra de progresso
        function updateProgress() {
            const progress = Math.round((currentQuestion / questions.length) * 100);
            progressBar.style.width = progress + '%';
            progressText.textContent = progress + '%';
        }

        // Utilidades
        function getCurrentTime() {
            return new Date().toLocaleTimeString('pt-BR', { hour: '2-digit', minute: '2-digit' });
        }

        function scrollToBottom() {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
    </script>
</body>
</html>