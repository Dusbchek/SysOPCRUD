<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>


        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<style>.crimson-text-regular {
    font-family: "Crimson Text", serif;
    font-weight: 400;
    font-style: normal;
  }
  
  .crimson-text-semibold {
    font-family: "Crimson Text", serif;
    font-weight: 600;
    font-style: normal;
  }
  
  .crimson-text-bold {
    font-family: "Crimson Text", serif;
    font-weight: 700;
    font-style: normal;
  }
  
  .crimson-text-regular-italic {
    font-family: "Crimson Text", serif;
    font-weight: 400;
    font-style: italic;
  }
  
  .crimson-text-semibold-italic {
    font-family: "Crimson Text", serif;
    font-weight: 600;
    font-style: italic;
  }
  
  .crimson-text-bold-italic {
    font-family: "Crimson Text", serif;
    font-weight: 700;
    font-style: italic;
  }
  </style>

    </head>
    <body class="flex justify-center items-center min-h-screen bg-neutral-950">

        <div class="flex  shadow-lg shadow-neutral-900 rounded-lg">
            <div>
                <h1 class="crimson-text-semibold text-[50px] mr-16 ml-4 text-red-300 ">Bienvenido</h1>
                <p class="mt-10 crimson-text-regular text-red-200 text-md ml-5 mr-5 w-[350px]">Bienvenido a SysOp Employee CRUD, un sistema integral diseñado para ayudarte a gestionar la información de los empleados de manera eficiente. Esta aplicación te permite crear, leer, actualizar y eliminar registros de empleados fácilmente.</p>
          

                <div class="flex items-center justify-center mx-auto ">
                <a href="/login" type="button" class="mt-4 text-xl text-red-400  hover:bg-stone-900 focus:outline-none focus:ring-red-400 font-medium rounded-full  px-5 py-2.5 me-2 mb-2 ">Iniciar sesión</a>
                           <a href="/register" type="button" class="mt-4 text-xl text-red-400  hover:bg-stone-900 focus:outline-none focus:ring-red-400 font-medium rounded-full  px-5 py-2.5 me-2 mb-2 ">Iniciar sesión</a>

                </div>
            </div>
            <img src="{{ asset('images/WElcome.png') }}" alt="logo" class="rounded-lg w-[24rem]" >
        </div>

    </body>
</html>
