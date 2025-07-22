<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Courses</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>

<header class="aurora-header">
  <nav class="aurora-navbar">
    <div class="navbar-logo">
      <a href="{{asset('index')}}">
        <img src="{{asset('img/auroralogo.png')}}" alt="Aurora Logo" />
      </a>
    </div>
    <div class="navbar-menu-icon">
      <i class="fas fa-bars"></i>
    </div>
  </nav>
</header>

<main class="main-container">
  <div class="box-container">

    <div class="minha-box-custom">
      <h3>Minha Outra Box</h3>
      <p>Conteúdo aqui...</p>
    </div>

    <div class="progresso-box-custom">
      <h3 class="progress-title">Your Progress</h3>

      <div class="progress-text-row">
        <div class="progress-label">Front-End</div>
      </div>

      <div class="progress-bar">
        <div class="progress-fill" style="width: 70%;"></div>
      </div>

      <div class="progress-percent">70%</div>
    </div>

  </div>
</main>

<footer></footer>
@include("components.footer")

</body>
</html>

