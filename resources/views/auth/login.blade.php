<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Iniciar Sessão - Equilíbrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-dark: #1f7b00;
            --primary-green: #364f4a;
            --light-green: #c5d5d1;
            --accent-pink: #ffcccc;
        }

        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, var(--light-green) 0%, #d5e5e1 50%, var(--accent-pink) 100%);
            min-height: 100vh;
            padding: 2rem 0;
        }

        .register-container { max-width: 700px; margin: 0 auto; }
        .register-card { background: #fff; border-radius: 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.15); overflow: hidden; }

        .register-header {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-green) 100%);
            padding: 2.5rem 2rem;
            text-align: center;
            color: white;
        }

        .register-icon {
            width: 70px; height: 70px; background: white; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .register-icon i { font-size: 2rem; color: var(--primary-dark); }
        .register-header h1 { font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; }

        .register-body { padding: 2.5rem; }
        .form-label { font-weight: 600; color: var(--primary-green); }
        .form-control { border: 2px solid var(--light-green); border-radius: 12px; padding: 0.65rem 1rem; }

        .form-control:focus { border-color: var(--primary-green); box-shadow: 0 0 0 0.2rem rgba(54,79,74,0.25); }

        .password-toggle {
            cursor: pointer;
            background: var(--light-green);
            border: 2px solid var(--light-green);
            border-left: none;
            border-radius: 0 12px 12px 0;
            color: var(--primary-dark);
            padding: 0.65rem 1rem;
        }

        .btn-register {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-green));
            color: white; border: none; padding: 0.9rem;
            border-radius: 15px; font-weight: 600; font-size: 1.1rem;
            transition: all 0.3s; width: 100%;
        }

        .btn-register:hover { transform: translateY(-3px); box-shadow: 0 8px 30px rgba(31,123,0,0.4); }

        .link-custom { color: var(--primary-green); text-decoration: none; font-weight: 500; }
        .link-custom:hover { text-decoration: underline; color: var(--primary-dark); }

        .form-check-input:checked {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
        }
    </style>
</head>

<body>
<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <div class="register-icon"><i class="bi bi-box-arrow-in-right"></i></div>
            <h1>Iniciar Sessão</h1>
            <p>Bem-vindo(a) de volta à comunidade Equilíbrio</p>
        </div>

        <div class="register-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Senha <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        <span class="password-toggle" onclick="togglePassword('password','iconEye')">
                            <i id="iconEye" class="bi bi-eye"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember me -->
                <div class="mb-4 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Lembrar-me</label>
                </div>

                <!-- Botão -->
                <button type="submit" class="btn-register">Entrar</button>

                <!-- Links -->
                <div class="text-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="link-custom d-block mb-2" href="{{ route('password.request') }}">
                            <i class="bi bi-key me-1"></i> Esqueceu a senha?
                        </a>
                    @endif

                    <a href="{{ route('register') }}" class="link-custom">
                        <i class="bi bi-person-plus me-1"></i> Criar nova conta
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="text-center mt-3">
        <a href="{{ url('/') }}" class="link-custom">
            <i class="bi bi-arrow-left me-2"></i> Voltar à página inicial
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function togglePassword(fieldId, iconId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(iconId);
    const showing = field.type === 'text';
    field.type = showing ? 'password' : 'text';
    icon.classList.toggle('bi-eye');
    icon.classList.toggle('bi-eye-slash');
}
</script>
</body>
</html>
