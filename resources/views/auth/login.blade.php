
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up </title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/lucas.css">
</head>
<body>
    <header class="aurora-header">
 
            <nav class="aurora-navbar">
 
                <div class="navbar-logo">
 
                    <a href="{{asset('index')}}">
                        <img src="{{asset('img/auroralogo.png') }}" alt="The brand logo">
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
<body id="principal">
 
  <!-- Caixa -->
  <div class="caixa">
  <a>Sign In</a>
 
  <!-- sign-in -->
  <div class="Sign-up">
  <a href="{{ asset('../register') }}" class="Sign-up">Sign-Up</a>
  </div>
 
  <!-- E-mail -->
  <div class="email">
  <input type="email" placeholder="E-mail">
  </div>
 
 
  <!-- Password -->
  <div class="email">
  <input type="password" placeholder="Password">
  </div>
 
  <!-- esqueci a senha -->
   <div class="password" ID="PASSWORD">
  <a href="{{ asset('../forgot-password') }}" class="password">Forgot Password ?</a>
  </div>
 
  <!-- botão de enviar -->
  <div class="enviar">
  <input type="submit" value="Login">
  </div>
 
 
 </div>
</div>

 <footer class="aurora-footer">
 
        <div class="footer-container">
 
 
            <div class="copyright-section">
                <p> Copyright &copy; <?php echo date('Y'); ?> Aurora Platform. All Rights Reserved.</p>
            </div>
 
 
        </div>
 
    </footer>

 
</body>
</html>
 

