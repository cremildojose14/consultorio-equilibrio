<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Criar Conta - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --primary-dark: #1f7b00;
            --primary-green: #364f4a;
            --light-green: #c5d5d1;
            --accent-pink: #ffcccc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, var(--light-green) 0%, #d5e5e1 50%, var(--accent-pink) 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .register-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .register-card {
            background: white;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .register-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-green) 100%);
            padding: 2.5rem 2rem;
            text-align: center;
            color: white;
        }

        .register-icon {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .register-icon i {
            font-size: 2rem;
            color: var(--primary-dark);
        }

        .register-header h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .register-header p {
            color: var(--light-green);
            margin: 0;
        }

        .register-body {
            padding: 2.5rem;
        }

        .section-title {
            color: var(--primary-green);
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-green);
            display: flex;
            align-items: center;
        }

        .section-title i {
            margin-right: 0.5rem;
            color: var(--primary-dark);
        }

        .form-label {
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
        }

        .form-label .text-danger {
            margin-left: 0.25rem;
        }

        .form-control, .form-select {
            border: 2px solid var(--light-green);
            border-radius: 12px;
            padding: 0.65rem 1rem;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 0.2rem rgba(54, 79, 74, 0.25);
        }

        .input-group-text {
            background: var(--light-green);
            border: 2px solid var(--light-green);
            border-radius: 12px 0 0 12px;
            color: var(--primary-dark);
            border-right: none;
        }

        .input-group .form-control {
            border-radius: 0 12px 12px 0;
            border-left: none;
        }

        .password-toggle {
            cursor: pointer;
            background: var(--light-green);
            border: 2px solid var(--light-green);
            border-left: none;
            border-radius: 0 12px 12px 0;
            color: var(--primary-dark);
            transition: all 0.3s;
            padding: 0.65rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            background: var(--primary-green);
            border-color: var(--primary-green);
            color: white;
        }

        .password-strength {
            height: 5px;
            border-radius: 3px;
            background: #e9ecef;
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .password-strength-bar {
            height: 100%;
            transition: all 0.3s;
            border-radius: 3px;
            width: 0;
        }

        .password-strength-text {
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .btn-register {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-green));
            color: white;
            border: none;
            padding: 0.9rem;
            border-radius: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 5px 20px rgba(31, 123, 0, 0.3);
            width: 100%;
        }

        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(31, 123, 0, 0.4);
            color: white;
        }

        .terms-box {
            background: #f8f9fa;
            border: 2px solid var(--light-green);
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

        .link-custom {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .link-custom:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .alert {
            border-radius: 12px;
            border: none;
        }

        .form-check-input:checked {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 0.2rem rgba(54, 79, 74, 0.25);
        }

        .invalid-feedback {
            display: block;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .is-invalid {
            border-color: #dc3545;
        }

        .is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }

        @media (max-width: 768px) {
            .register-body {
                padding: 1.5rem;
            }
            
            .register-header h1 {
                font-size: 1.75rem;
            }

            body {
                padding: 1rem 0;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="container">
            <div class="register-card">
                <div class="register-header">
                    <div class="register-icon">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>
                    <h1>Criar Conta</h1>
                    <p>Junte-se à nossa comunidade de bem-estar</p>
                </div>

                <div class="register-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            <strong>Erro!</strong> Por favor, corrija os erros abaixo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        <!-- Informações Pessoais -->
                        <div class="section-title">
                            <i class="bi bi-person-circle"></i>
                            Informações Pessoais
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-12">
                                <label for="name" class="form-label">
                                    Nome Completo <span class="text-danger">*</span>
                                </label>
                                <input id="name" 
                                       type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       required 
                                       autocomplete="name" 
                                       autofocus
                                       placeholder="Digite seu nome completo">
                                @error('name')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Informações de Contato -->
                        <div class="section-title">
                            <i class="bi bi-telephone-fill"></i>
                            Informações de Contato
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-12">
                                <label for="email" class="form-label">
                                    Email <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope-fill"></i>
                                    </span>
                                    <input id="email" 
                                           type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           autocomplete="email"
                                           placeholder="seu@email.com">
                                </div>
                                @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Segurança -->
                        <div class="section-title">
                            <i class="bi bi-shield-lock-fill"></i>
                            Segurança
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="password" class="form-label">
                                    Senha <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-key-fill"></i>
                                    </span>
                                    <input id="password" 
                                           type="password" 
                                           class="form-control @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required 
                                           autocomplete="new-password" 
                                           onkeyup="checkPasswordStrength()"
                                           placeholder="••••••••">
                                    <span class="password-toggle" onclick="togglePassword('password', 'toggleIcon1')">
                                        <i class="bi bi-eye" id="toggleIcon1"></i>
                                    </span>
                                </div>
                                <div class="password-strength">
                                    <div class="password-strength-bar" id="strengthBar"></div>
                                </div>
                                <div class="password-strength-text" id="strengthText"></div>
                                @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <small class="text-muted d-block mt-1">Mínimo 8 caracteres</small>
                            </div>

                            <div class="col-md-6">
                                <label for="password-confirm" class="form-label">
                                    Confirmar Senha <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-key-fill"></i>
                                    </span>
                                    <input id="password-confirm" 
                                           type="password" 
                                           class="form-control" 
                                           name="password_confirmation" 
                                           required 
                                           autocomplete="new-password"
                                           placeholder="••••••••">
                                    <span class="password-toggle" onclick="togglePassword('password-confirm', 'toggleIcon2')">
                                        <i class="bi bi-eye" id="toggleIcon2"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Termos e Condições -->
                        <div class="terms-box">
                            <div class="form-check">
                                <input class="form-check-input @error('terms') is-invalid @enderror" 
                                       type="checkbox" 
                                       id="terms" 
                                       name="terms" 
                                       required>
                                <label class="form-check-label" for="terms">
                                    Li e aceito os 
                                    <a href="#" target="_blank" class="link-custom">Termos de Serviço</a> 
                                    e a 
                                    <a href="#" target="_blank" class="link-custom">Política de Privacidade</a>
                                    <span class="text-danger">*</span>
                                </label>
                                @error('terms')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-register mb-3">
                            <i class="bi bi-check-circle me-2"></i>
                            Criar Conta
                        </button>

                        <div class="text-center">
                            <p class="mb-0">Já tem uma conta?</p>
                            <a href="{{ route('login') }}" class="link-custom">
                                <i class="bi bi-box-arrow-in-right me-1"></i>
                                Fazer Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="{{ url('/') }}" class="link-custom">
                    <i class="bi bi-arrow-left me-2"></i>
                    Voltar à página inicial
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(fieldId, iconId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        }

        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            
            let strength = 0;
            let text = '';
            let color = '';
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;
            
            switch(strength) {
                case 0:
                case 1:
                    text = 'Fraca';
                    color = '#dc3545';
                    strengthBar.style.width = '25%';
                    break;
                case 2:
                    text = 'Média';
                    color = '#ffc107';
                    strengthBar.style.width = '50%';
                    break;
                case 3:
                    text = 'Boa';
                    color = '#17a2b8';
                    strengthBar.style.width = '75%';
                    break;
                case 4:
                    text = 'Forte';
                    color = '#28a745';
                    strengthBar.style.width = '100%';
                    break;
            }
            
            strengthBar.style.backgroundColor = color;
            strengthText.textContent = text;
            strengthText.style.color = color;
        }

        // Auto-dismiss alerts
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                if (bsAlert) {
                    bsAlert.close();
                }
            });
        }, 5000);
    </script>
</body>

</html>