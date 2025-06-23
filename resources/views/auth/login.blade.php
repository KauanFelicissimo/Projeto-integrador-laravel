<!DOCTYPE html>
<html lang="pt-BR">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign In </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
 
<body>
 
 
    <header class="aurora-header">
 
        <nav class="aurora-navbar">
 
            <div class="navbar-logo">
 
                <a href="{{asset('index')}}">
                    <img src="{{asset('images/Aurora-Logo-White.png') }}" alt="The brand logo">
                </a>
 
            </div>
 
 
            <!-- <div class="aurora-menu">
 
                    <ul class="navbar-menu">
                        <li class="navbar-item">
                            About
                        </li>
 
                        <li class="navbar-item">
                            Docs
                        </li>
 
                        <li class="navbar-item">
 
                        </li>
                    </ul> -->
 
            </div>
 
        </nav>
 
    </header>
 
 
    <main class="aurora-main">
 
        <div class="register-form">
 
            <form action="{{ route('register') }}" method="POST">
 
 
 
                <div class="title-form">
                    <h1 class="font-semibold"> Sign In </h1>
                </div>
 
 
 
                <div class="container-form">
                    <input type="email" name="email" :value="__('Email')" id="email" required>
                    <label for="email"> E-mail </label>
                </div>
 
 
                <div class="container-form">
                    <input type="password" name="password" :value="__('Password')" id="password" required>
                    <label for="password"> Password </label>
 
                      <div class="forgot-pass">
                    <div class="password" ID="PASSWORD">
                    <a href="{{ asset('../forgot-password') }}" class="password">Forgot Password?</a>
                    </div>
                </div>
                </div>
 
             
 
 
 
                <div class="submit-form">
                    <button type="submit" name="submit-button"> {{ __('Login') }}</button>
                </div>
 
 
                <div class="login-button">
                    <button type="button" name="login-button"> Sign Up </button>
                </div>
 
 
            </form>
 
 
        </div>
 
    </main>
 
 
    <footer class="aurora-footer">
 
        <div class="footer-container">
 
 
            <div class="copyright-section">
                <p> Copyright &copy; <?php echo date('Y'); ?> Aurora Platform. All Rights Reserved.</p>
            </div>
 
 
        </div>
 
    </footer>
 
 
</body>
 
</html>