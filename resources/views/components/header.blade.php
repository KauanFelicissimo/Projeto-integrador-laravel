<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Aurora </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('icons/brand-logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tuffy:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>


    <header class="aurora-header">

            <nav class="aurora-navbar">

                    <div class="aurora-logo">

                        <a href="{{ route('index') }}"> 
                            <img src="{{ asset('img/brand-logo.png') }}" alt="The Brand Logo"> 
                        </a>

                    </div>


                @if ($page != 'register' && 
                        $page != 'login')

                    <div class="aurora-menu">

                        <div class="menu-icon" id="menu-icon">
                            <span class="bi bi-list"> </span>
                        </div>

                        <ul class="navbar-menu" id="navbar-menu">

                            <li class="navbar-item">
                                <a href="{{ route('about') }}"> About </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ route('index') }}"> Home </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ route('courses') }}"> Courses </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ route('login') }}"> Login </a>
                            </li>

                            <li class="navbar-item">
                                <a href="{{ route('register') }}"> Register </a>
                            </li>

                        </ul>

                    </div>

                @endif

            </nav>

    </header>
