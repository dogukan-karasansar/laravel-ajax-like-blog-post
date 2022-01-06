<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
  
<body>
    <div class="container-fluid">
        <div class="row h-80">
          <a href="{{ route('about') }}" style="border: 1px solid black; z-index: 1; height: 40px; width: 40px; position: absolute; text-decoration: none; color: white; line-height: 4ch; padding-left: 9px; border-radius: 20%;">CV</a>
          <span style="text-align: center; position: absolute; font-size:4em; "><a href="{{ route('index') }}" style=" line-height:5; color: rgb(255, 255, 255); font-family: 'Dancing Script', cursive; text-decoration: none;">EMRE'S BLOG</a></span>
            <div class="col-3 p-0">
                <img style="width: 100%;height:100%; padding:0; margin:0; z-index:-1;" src="{{ URL::asset('images/dev.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%;height:100%; padding:0; margin:0; z-index:-1;" src="{{ URL::asset('images/music.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%;height:100%; padding:0; margin:0; z-index:-1;" src="{{ URL::asset('images/sport.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%;height:100%; padding:0; margin:0; z-index:-1;" src="{{ URL::asset('images/life.jpg') }}" alt="Emre Alşan Blog">
            </div>
        </div>
        
        <div class="row" >
            <div class="col-md-12 p-0 sticky-top" >
                <ul>
                    <li class="col-3"><a href="{{ route('categories.dev') }}">Yazılım  <i class="fa fa-laptop-code"></i></a></li>
                    <li class="col-3"><a href="{{ route('categories.music') }}">Müzik <i class="fa fa-music"></i></a></li>
                    <li class="col-3"><a href="{{ route('categories.sports') }}"> Spor  &nbsp; <i class="fa fa-basketball-ball"></i></a></li>
                    <li class="col-3"><a href="{{ route('categories.life') }}">Yaşam <i class="fa fa-pizza-slice"></i></a></li>
                </ul>
            </div>



            {{ $slot }}
            @stack('scripts')


            <footer class="bg-dark text-center text-white w-100">
                <!-- Grid container -->
                <div class="container p-4 pb-0 w-100">
                  <!-- Section: Social media -->
                  <section class="mb-4 w-100">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="{{ route('about') }}" role="button"
                      >CV</i
                    ></a>
              
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-twitter"></i
                    ></a>
              
                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-google"></i
                    ></a>
              
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-instagram"></i
                    ></a>
              
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
              
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                      ><i class="fab fa-github"></i
                    ></a>
                  </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright
                  
                </div>
                <!-- Copyright -->
              </footer>
            <script src="{{ mix('js/app.js') }}" defer></script>
        </body>
    
    </html>
    