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
 
 
<div class="caixa">
  <p>Reset Password</p>
 
 
   <div class="Sign-in">
 
 <a href="{{ asset('../login') }}" class="a" ID="password">Sign-in</a>
 
   </div>
 
 
  <div class="cancel">
 
<a href="{{ asset('../index') }}" class="a" >cancel</a>
 
 
</div>
 
  <div class="email">
    <input type="email" placeholder="E-mail">
  </div>
 
  <h3 class="texto">
    We'll send you an email with steps to reset your password.
</h3>
 
  <div class="enviar">
    <input type="submit" value="Enviar">
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
 
 
