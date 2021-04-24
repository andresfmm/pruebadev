<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pruebadev</title>
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> --}}
    </head>
    <body class="fondo">
        <img src="{{asset('img/fondo.jpg')}}" id="bg" alt="">
        <header>
           <nav class="navbar navbar-expand-sm  navbar-dark bg-nav-logo">
            <a class="navbar-brand" href="#">
                <img src="https://www.ssangyong.com.co/wp-content/themes/SsangYong/images/logo-white-horizontal.svg" >
            </a>
          </nav>
        </header>
         <main id="app" > 

            <div class="row col-md-12 "> 
                <div class="bg col-md-8">
                 
                </div>
                <div class="col-md-4 form-position">
                    <cotizacion></cotizacion>
                </div>
            </div>
             
         </main>
        <footer></footer>
        
       
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
