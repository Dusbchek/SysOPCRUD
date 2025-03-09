<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body class="flex justify-center items-center min-h-screen bg-neutral-950">

        <div class="flex items-center justify-center">
            <div>
            
                <h1 class="text-red-300 font-medium text-[50px]">Pareces perdido</h1>
                <div class="flex ">
                <a href="/employes" class=" inline-block mt-2 border-2 border-red-300 hover:border-1 text-red-200 py-2 px-4 rounded-3xl hover:bg-red-400/60 ">Admin</a>
                <a href="#" class="ml-auto inline-block mt-2 border-2 border-red-300 text-red-200 py-2 px-4 rounded-3xl  cursor-not-allowed opacity-50">
                    <i class="fas fa-lock mr-2"></i> FYP
                </a>
            </div>

        </div>

    </body>
</html>
