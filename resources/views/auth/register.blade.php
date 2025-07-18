<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="aurora-header">
        <nav class="aurora-navbar">
            <div class="navbar-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('images/Aurora-Logo-White.png') }}" alt="The brand logo">
                </a>
            </div>
        </nav>
    </header>

    <main class="aurora-main">
        <div class="register-form">
            <form action="{{ route('cadastro.adicionar.post') }}" method="POST">
                @csrf

                <div class="title-form">
                    <h1 class="font-semibold"> Sign Up </h1>
                </div>

                <div class="container-form">
                    <input type="text" name="nome" id="name" required>
                    <label for="name"> Nome </label>
                </div>

                <div class="container-form">
                    <input type="email" name="email" id="email" required>
                    <label for="email"> E-mail </label>
                </div>

                <div class="container-form">
                    <input type="password" name="senha" id="password" required>
                    <label for="password"> Senha </label>
                </div>

                <div class="checkbox-form">
                    <input type="checkbox" name="termos" id="terms" value="1" required>
                    <label for="terms"> Aceito os <a href="#">Termos de Uso</a> </label>
                </div>

                <div class="submit-form">
                    <button type="submit" name="submit-button"> Register </button>
                </div>

                <div class="login-button">
                    <a href="{{ route('login') }}">
                        <button type="button" name="login-button"> Sign In </button>
                    </a>
                </div>
            </form>
        </div>
    </main>

    <footer class="aurora-footer">
        <div class="footer-container">
            <div class="copyright-section">
                <p> &copy; {{ date('Y') }} Aurora Platform. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>
